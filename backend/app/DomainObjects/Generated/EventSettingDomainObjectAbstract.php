<?php

namespace HiEvents\DomainObjects\Generated;

/**
 * THIS FILE IS AUTOGENERATED - DO NOT EDIT IT DIRECTLY.
 * @package HiEvents\DomainObjects\Generated
 */
abstract class EventSettingDomainObjectAbstract extends \HiEvents\DomainObjects\AbstractDomainObject
{
    final public const SINGULAR_NAME = 'event_setting';
    final public const PLURAL_NAME = 'event_settings';
    final public const ID = 'id';
    final public const EVENT_ID = 'event_id';
    final public const PRE_CHECKOUT_MESSAGE = 'pre_checkout_message';
    final public const POST_CHECKOUT_MESSAGE = 'post_checkout_message';
    final public const TICKET_PAGE_MESSAGE = 'ticket_page_message';
    final public const CONTINUE_BUTTON_TEXT = 'continue_button_text';
    final public const EMAIL_FOOTER_MESSAGE = 'email_footer_message';
    final public const SUPPORT_EMAIL = 'support_email';
    final public const CREATED_AT = 'created_at';
    final public const UPDATED_AT = 'updated_at';
    final public const DELETED_AT = 'deleted_at';
    final public const REQUIRE_ATTENDEE_DETAILS = 'require_attendee_details';
    final public const ORDER_TIMEOUT_IN_MINUTES = 'order_timeout_in_minutes';
    final public const WEBSITE_URL = 'website_url';
    final public const MAPS_URL = 'maps_url';
    final public const HOMEPAGE_BACKGROUND_COLOR = 'homepage_background_color';
    final public const HOMEPAGE_PRIMARY_TEXT_COLOR = 'homepage_primary_text_color';
    final public const HOMEPAGE_PRIMARY_COLOR = 'homepage_primary_color';
    final public const HOMEPAGE_SECONDARY_TEXT_COLOR = 'homepage_secondary_text_color';
    final public const HOMEPAGE_SECONDARY_COLOR = 'homepage_secondary_color';
    final public const LOCATION_DETAILS = 'location_details';
    final public const ONLINE_EVENT_CONNECTION_DETAILS = 'online_event_connection_details';
    final public const IS_ONLINE_EVENT = 'is_online_event';
    final public const ALLOW_SEARCH_ENGINE_INDEXING = 'allow_search_engine_indexing';
    final public const SEO_TITLE = 'seo_title';
    final public const SEO_DESCRIPTION = 'seo_description';
    final public const SOCIAL_MEDIA_HANDLES = 'social_media_handles';
    final public const SHOW_SOCIAL_MEDIA_HANDLES = 'show_social_media_handles';
    final public const SEO_KEYWORDS = 'seo_keywords';
    final public const NOTIFY_ORGANIZER_OF_NEW_ORDERS = 'notify_organizer_of_new_orders';
    final public const PRICE_DISPLAY_MODE = 'price_display_mode';
    final public const HIDE_GETTING_STARTED_PAGE = 'hide_getting_started_page';
    final public const SHOW_SHARE_BUTTONS = 'show_share_buttons';
    final public const HOMEPAGE_BODY_BACKGROUND_COLOR = 'homepage_body_background_color';
    final public const HOMEPAGE_BACKGROUND_TYPE = 'homepage_background_type';

    protected int $id;
    protected int $event_id;
    protected ?string $pre_checkout_message = null;
    protected ?string $post_checkout_message = null;
    protected ?string $ticket_page_message = null;
    protected ?string $continue_button_text = null;
    protected ?string $email_footer_message = null;
    protected ?string $support_email = null;
    protected string $created_at;
    protected string $updated_at;
    protected ?string $deleted_at = null;
    protected bool $require_attendee_details = true;
    protected int $order_timeout_in_minutes = 15;
    protected ?string $website_url = null;
    protected ?string $maps_url = null;
    protected ?string $homepage_background_color = null;
    protected ?string $homepage_primary_text_color = null;
    protected ?string $homepage_primary_color = null;
    protected ?string $homepage_secondary_text_color = null;
    protected ?string $homepage_secondary_color = null;
    protected array|string|null $location_details = null;
    protected ?string $online_event_connection_details = null;
    protected bool $is_online_event = false;
    protected bool $allow_search_engine_indexing = true;
    protected ?string $seo_title = null;
    protected ?string $seo_description = null;
    protected array|string|null $social_media_handles = null;
    protected ?bool $show_social_media_handles = null;
    protected ?string $seo_keywords = null;
    protected bool $notify_organizer_of_new_orders = true;
    protected string $price_display_mode = 'INCLUSIVE';
    protected bool $hide_getting_started_page = false;
    protected bool $show_share_buttons = true;
    protected ?string $homepage_body_background_color = null;
    protected string $homepage_background_type = 'COLOR';

    public function toArray(): array
    {
        return [
                    'id' => $this->id ?? null,
                    'event_id' => $this->event_id ?? null,
                    'pre_checkout_message' => $this->pre_checkout_message ?? null,
                    'post_checkout_message' => $this->post_checkout_message ?? null,
                    'ticket_page_message' => $this->ticket_page_message ?? null,
                    'continue_button_text' => $this->continue_button_text ?? null,
                    'email_footer_message' => $this->email_footer_message ?? null,
                    'support_email' => $this->support_email ?? null,
                    'created_at' => $this->created_at ?? null,
                    'updated_at' => $this->updated_at ?? null,
                    'deleted_at' => $this->deleted_at ?? null,
                    'require_attendee_details' => $this->require_attendee_details ?? null,
                    'order_timeout_in_minutes' => $this->order_timeout_in_minutes ?? null,
                    'website_url' => $this->website_url ?? null,
                    'maps_url' => $this->maps_url ?? null,
                    'homepage_background_color' => $this->homepage_background_color ?? null,
                    'homepage_primary_text_color' => $this->homepage_primary_text_color ?? null,
                    'homepage_primary_color' => $this->homepage_primary_color ?? null,
                    'homepage_secondary_text_color' => $this->homepage_secondary_text_color ?? null,
                    'homepage_secondary_color' => $this->homepage_secondary_color ?? null,
                    'location_details' => $this->location_details ?? null,
                    'online_event_connection_details' => $this->online_event_connection_details ?? null,
                    'is_online_event' => $this->is_online_event ?? null,
                    'allow_search_engine_indexing' => $this->allow_search_engine_indexing ?? null,
                    'seo_title' => $this->seo_title ?? null,
                    'seo_description' => $this->seo_description ?? null,
                    'social_media_handles' => $this->social_media_handles ?? null,
                    'show_social_media_handles' => $this->show_social_media_handles ?? null,
                    'seo_keywords' => $this->seo_keywords ?? null,
                    'notify_organizer_of_new_orders' => $this->notify_organizer_of_new_orders ?? null,
                    'price_display_mode' => $this->price_display_mode ?? null,
                    'hide_getting_started_page' => $this->hide_getting_started_page ?? null,
                    'show_share_buttons' => $this->show_share_buttons ?? null,
                    'homepage_body_background_color' => $this->homepage_body_background_color ?? null,
                    'homepage_background_type' => $this->homepage_background_type ?? null,
                ];
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setEventId(int $event_id): self
    {
        $this->event_id = $event_id;
        return $this;
    }

    public function getEventId(): int
    {
        return $this->event_id;
    }

    public function setPreCheckoutMessage(?string $pre_checkout_message): self
    {
        $this->pre_checkout_message = $pre_checkout_message;
        return $this;
    }

    public function getPreCheckoutMessage(): ?string
    {
        return $this->pre_checkout_message;
    }

    public function setPostCheckoutMessage(?string $post_checkout_message): self
    {
        $this->post_checkout_message = $post_checkout_message;
        return $this;
    }

    public function getPostCheckoutMessage(): ?string
    {
        return $this->post_checkout_message;
    }

    public function setTicketPageMessage(?string $ticket_page_message): self
    {
        $this->ticket_page_message = $ticket_page_message;
        return $this;
    }

    public function getTicketPageMessage(): ?string
    {
        return $this->ticket_page_message;
    }

    public function setContinueButtonText(?string $continue_button_text): self
    {
        $this->continue_button_text = $continue_button_text;
        return $this;
    }

    public function getContinueButtonText(): ?string
    {
        return $this->continue_button_text;
    }

    public function setEmailFooterMessage(?string $email_footer_message): self
    {
        $this->email_footer_message = $email_footer_message;
        return $this;
    }

    public function getEmailFooterMessage(): ?string
    {
        return $this->email_footer_message;
    }

    public function setSupportEmail(?string $support_email): self
    {
        $this->support_email = $support_email;
        return $this;
    }

    public function getSupportEmail(): ?string
    {
        return $this->support_email;
    }

    public function setCreatedAt(string $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setUpdatedAt(string $updated_at): self
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function setDeletedAt(?string $deleted_at): self
    {
        $this->deleted_at = $deleted_at;
        return $this;
    }

    public function getDeletedAt(): ?string
    {
        return $this->deleted_at;
    }

    public function setRequireAttendeeDetails(bool $require_attendee_details): self
    {
        $this->require_attendee_details = $require_attendee_details;
        return $this;
    }

    public function getRequireAttendeeDetails(): bool
    {
        return $this->require_attendee_details;
    }

    public function setOrderTimeoutInMinutes(int $order_timeout_in_minutes): self
    {
        $this->order_timeout_in_minutes = $order_timeout_in_minutes;
        return $this;
    }

    public function getOrderTimeoutInMinutes(): int
    {
        return $this->order_timeout_in_minutes;
    }

    public function setWebsiteUrl(?string $website_url): self
    {
        $this->website_url = $website_url;
        return $this;
    }

    public function getWebsiteUrl(): ?string
    {
        return $this->website_url;
    }

    public function setMapsUrl(?string $maps_url): self
    {
        $this->maps_url = $maps_url;
        return $this;
    }

    public function getMapsUrl(): ?string
    {
        return $this->maps_url;
    }

    public function setHomepageBackgroundColor(?string $homepage_background_color): self
    {
        $this->homepage_background_color = $homepage_background_color;
        return $this;
    }

    public function getHomepageBackgroundColor(): ?string
    {
        return $this->homepage_background_color;
    }

    public function setHomepagePrimaryTextColor(?string $homepage_primary_text_color): self
    {
        $this->homepage_primary_text_color = $homepage_primary_text_color;
        return $this;
    }

    public function getHomepagePrimaryTextColor(): ?string
    {
        return $this->homepage_primary_text_color;
    }

    public function setHomepagePrimaryColor(?string $homepage_primary_color): self
    {
        $this->homepage_primary_color = $homepage_primary_color;
        return $this;
    }

    public function getHomepagePrimaryColor(): ?string
    {
        return $this->homepage_primary_color;
    }

    public function setHomepageSecondaryTextColor(?string $homepage_secondary_text_color): self
    {
        $this->homepage_secondary_text_color = $homepage_secondary_text_color;
        return $this;
    }

    public function getHomepageSecondaryTextColor(): ?string
    {
        return $this->homepage_secondary_text_color;
    }

    public function setHomepageSecondaryColor(?string $homepage_secondary_color): self
    {
        $this->homepage_secondary_color = $homepage_secondary_color;
        return $this;
    }

    public function getHomepageSecondaryColor(): ?string
    {
        return $this->homepage_secondary_color;
    }

    public function setLocationDetails(array|string|null $location_details): self
    {
        $this->location_details = $location_details;
        return $this;
    }

    public function getLocationDetails(): array|string|null
    {
        return $this->location_details;
    }

    public function setOnlineEventConnectionDetails(?string $online_event_connection_details): self
    {
        $this->online_event_connection_details = $online_event_connection_details;
        return $this;
    }

    public function getOnlineEventConnectionDetails(): ?string
    {
        return $this->online_event_connection_details;
    }

    public function setIsOnlineEvent(bool $is_online_event): self
    {
        $this->is_online_event = $is_online_event;
        return $this;
    }

    public function getIsOnlineEvent(): bool
    {
        return $this->is_online_event;
    }

    public function setAllowSearchEngineIndexing(bool $allow_search_engine_indexing): self
    {
        $this->allow_search_engine_indexing = $allow_search_engine_indexing;
        return $this;
    }

    public function getAllowSearchEngineIndexing(): bool
    {
        return $this->allow_search_engine_indexing;
    }

    public function setSeoTitle(?string $seo_title): self
    {
        $this->seo_title = $seo_title;
        return $this;
    }

    public function getSeoTitle(): ?string
    {
        return $this->seo_title;
    }

    public function setSeoDescription(?string $seo_description): self
    {
        $this->seo_description = $seo_description;
        return $this;
    }

    public function getSeoDescription(): ?string
    {
        return $this->seo_description;
    }

    public function setSocialMediaHandles(array|string|null $social_media_handles): self
    {
        $this->social_media_handles = $social_media_handles;
        return $this;
    }

    public function getSocialMediaHandles(): array|string|null
    {
        return $this->social_media_handles;
    }

    public function setShowSocialMediaHandles(?bool $show_social_media_handles): self
    {
        $this->show_social_media_handles = $show_social_media_handles;
        return $this;
    }

    public function getShowSocialMediaHandles(): ?bool
    {
        return $this->show_social_media_handles;
    }

    public function setSeoKeywords(?string $seo_keywords): self
    {
        $this->seo_keywords = $seo_keywords;
        return $this;
    }

    public function getSeoKeywords(): ?string
    {
        return $this->seo_keywords;
    }

    public function setNotifyOrganizerOfNewOrders(bool $notify_organizer_of_new_orders): self
    {
        $this->notify_organizer_of_new_orders = $notify_organizer_of_new_orders;
        return $this;
    }

    public function getNotifyOrganizerOfNewOrders(): bool
    {
        return $this->notify_organizer_of_new_orders;
    }

    public function setPriceDisplayMode(string $price_display_mode): self
    {
        $this->price_display_mode = $price_display_mode;
        return $this;
    }

    public function getPriceDisplayMode(): string
    {
        return $this->price_display_mode;
    }

    public function setHideGettingStartedPage(bool $hide_getting_started_page): self
    {
        $this->hide_getting_started_page = $hide_getting_started_page;
        return $this;
    }

    public function getHideGettingStartedPage(): bool
    {
        return $this->hide_getting_started_page;
    }

    public function setShowShareButtons(bool $show_share_buttons): self
    {
        $this->show_share_buttons = $show_share_buttons;
        return $this;
    }

    public function getShowShareButtons(): bool
    {
        return $this->show_share_buttons;
    }

    public function setHomepageBodyBackgroundColor(?string $homepage_body_background_color): self
    {
        $this->homepage_body_background_color = $homepage_body_background_color;
        return $this;
    }

    public function getHomepageBodyBackgroundColor(): ?string
    {
        return $this->homepage_body_background_color;
    }

    public function setHomepageBackgroundType(string $homepage_background_type): self
    {
        $this->homepage_background_type = $homepage_background_type;
        return $this;
    }

    public function getHomepageBackgroundType(): string
    {
        return $this->homepage_background_type;
    }
}
