@php /** @var \HiEvents\DomainObjects\OrderDomainObject $order */ @endphp
@php /** @var \HiEvents\DomainObjects\EventDomainObject $event */ @endphp

<x-mail::message>
Hello,

Your order for <b>{{$event->getTitle()}}</b> has been cancelled.
<br>
<br>
Order #: <b>{{$order->getPublicId()}}</b>
<br>
<br>

Thank you,<br>
{{config('app.name')}}
</x-mail::message>