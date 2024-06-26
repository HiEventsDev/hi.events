<?php

namespace HiEvents\Services\Domain\Payment\Stripe;

use Brick\Math\Exception\MathException;
use Brick\Math\Exception\NumberFormatException;
use Brick\Math\Exception\RoundingNecessaryException;
use Brick\Money\Exception\UnknownCurrencyException;
use HiEvents\DomainObjects\EventSettingDomainObject;
use HiEvents\DomainObjects\OrderDomainObject;
use HiEvents\DomainObjects\OrganizerDomainObject;
use HiEvents\DomainObjects\StripePaymentDomainObject;
use HiEvents\Mail\Order\PaymentSuccessButOrderExpiredMail;
use HiEvents\Repository\Eloquent\Value\Relationship;
use HiEvents\Repository\Interfaces\EventRepositoryInterface;
use HiEvents\Values\MoneyValue;
use Illuminate\Contracts\Mail\Mailer;
use Psr\Log\LoggerInterface;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;

readonly class StripeRefundExpiredOrderService
{
    public function __construct(
        private StripePaymentIntentRefundService $refundService,
        private Mailer                           $mailer,
        private LoggerInterface                  $logger,
        private EventRepositoryInterface         $eventRepository,
    )
    {
    }

    /**
     * @throws ApiErrorException
     * @throws RoundingNecessaryException
     * @throws MathException
     * @throws UnknownCurrencyException
     * @throws NumberFormatException
     */
    public function refundExpiredOrder(
        PaymentIntent             $paymentIntent,
        StripePaymentDomainObject $stripePayment,
        OrderDomainObject         $order,
    ): void
    {
        $event = $this->eventRepository
            ->loadRelation(new Relationship(EventSettingDomainObject::class))
            ->loadRelation(new Relationship(OrganizerDomainObject::class, name: 'organizer'))
            ->findById($order->getEventId());


        $this->refundService->refundPayment(
            MoneyValue::fromMinorUnit($paymentIntent->amount, strtoupper($paymentIntent->currency)),
            $stripePayment,
        );

        $this->mailer
            ->to($order->getEmail())
            ->locale($order->getLocale())
            ->send(new PaymentSuccessButOrderExpiredMail(
                order: $order,
                event: $event,
                eventSettings: $event->getEventSettings(),
                organizer: $event->getOrganizer(),
            ));

        $this->logger->info('Refunded expired order', [
            'order_id' => $order->getId(),
            'event_id' => $event->getId(),
            'payment_intent_id' => $paymentIntent->id,
        ]);
    }
}
