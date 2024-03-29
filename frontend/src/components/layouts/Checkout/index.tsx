import {Outlet, useNavigate, useParams} from "react-router-dom";
import {useGetEventPublic} from "../../../queries/useGetEventPublic.ts";
import classes from './Checkout.module.scss';
import {useGetOrderPublic} from "../../../queries/useGetOrderPublic.ts";
import {t} from "@lingui/macro";
import {Countdown} from "../../common/Countdown";
import {showSuccess} from "../../../utilites/notifications.tsx";
import {Event, Order} from "../../../types.ts";
import {IconExternalLink} from "@tabler/icons-react";
import {Anchor, Group} from "@mantine/core";
import {CheckoutSidebar} from "./CheckoutSidebar";
import {eventHomepageUrl} from "../../../utilites/urlHelper.ts";

const SubTitle = ({order, event}: { order: Order, event: Event }) => {
    const navigate = useNavigate();
    const orderStatuses: any = {
        'COMPLETED': t`Order Completed`,
        'CANCELLED': t`Order Cancelled`,
        'PAYMENT_FAILED': t`Payment Failed`,
        'AWAITING_PAYMENT': t`Awaiting Payment`
    };

    if (order?.status === 'RESERVED') {
        return (
            <Countdown
                className={classes.countdown}
                targetDate={order.reserved_until}
                onExpiry={() => {
                    showSuccess(t`Sorry, your order has expired. Please start a new order.`);
                    navigate(`/event/${event.id}/${event.slug}`);
                }}
            />
        )
    }

    return <span className={classes.subTitle}>{orderStatuses[order?.status] || <></>}</span>;
}

const Checkout = () => {
    const {eventId, orderShortId} = useParams();
    const {
        data: order,
    } = useGetOrderPublic(eventId, orderShortId);
    const {data: event} = useGetEventPublic(eventId);

    return (
        <>
            <div className={classes.container}>
                <div className={classes.mainContent}>
                    <header className={classes.header}>
                        <h2>
                            <Group>
                                {event?.title}
                                {event && (
                                    <Anchor style={{display: 'flex'}} title={t`View event homepage`}
                                            href={eventHomepageUrl(event as Event)}
                                            target="_blank">
                                        <IconExternalLink size={16}/>
                                    </Anchor>
                                )}
                            </Group>
                        </h2>
                        {(order && event) ? <SubTitle order={order} event={event}/> : <span>...</span>}
                    </header>
                    <Outlet/>
                </div>

                {(order && event) && <CheckoutSidebar className={classes.sidebar} event={event} order={order}/>}
            </div>
        </>
    );
}

export default Checkout;