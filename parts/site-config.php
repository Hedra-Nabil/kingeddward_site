<?php
// King Edward Travel — central site configuration
// PHP 8.x compatible. Single source of truth for branding & contact.
declare(strict_types=1);

defined('SITE_NAME')    or define('SITE_NAME', 'King Edward Travel');
defined('SITE_SLOGAN')  or define('SITE_SLOGAN', 'All for Egypt');
defined('SITE_TAGLINE') or define('SITE_TAGLINE', 'Welcome to the Land of the Pharaohs');
defined('SITE_DOMAIN')  or define('SITE_DOMAIN', 'www.kingedwardtravel.com');
defined('SITE_URL')     or define('SITE_URL', 'https://www.kingedwardtravel.com');
defined('SITE_LICENSE') or define('SITE_LICENSE', 'Official travel agency — License No. 1311 since 2005');
defined('SITE_FOUNDED') or define('SITE_FOUNDED', '2005');

defined('SITE_EMAIL_INFO')        or define('SITE_EMAIL_INFO', 'info@kingedwardtravel.com');
defined('SITE_EMAIL_SALES')       or define('SITE_EMAIL_SALES', 'sales@kingedwardtravel.com');
defined('SITE_EMAIL_RESERVATION') or define('SITE_EMAIL_RESERVATION', 'reservation@kingedwardtravel.com');

defined('SITE_PHONE_1') or define('SITE_PHONE_1', '+202-26636222');
defined('SITE_PHONE_2') or define('SITE_PHONE_2', '+202-26630155');
defined('SITE_PHONE_3') or define('SITE_PHONE_3', '+202-26327871');
defined('SITE_MOBILE_1') or define('SITE_MOBILE_1', '+201011984699');
defined('SITE_MOBILE_2') or define('SITE_MOBILE_2', '+201200155591');
defined('SITE_FAX')     or define('SITE_FAX', '+202-26392925');

defined('SITE_ADDRESS') or define('SITE_ADDRESS', 'Main Branch: Taqsim Abu El Ezz, Glaxo Company Street, Cairo, Egypt');

defined('SITE_ABOUT_SHORT') or define('SITE_ABOUT_SHORT', 'King Edward Travel is an extensive Egyptian travel agency offering all kinds of tourism services in Egypt — incoming FIT, groups, incentives, conferences and corporate travel, with its own fleet of air-conditioned buses and highly experienced tour managers.');
defined('SITE_ABOUT_LONG') or define('SITE_ABOUT_LONG', 'King Edward Travel is an official Egyptian travel agency (License No. 1311) operating since 2005. We handle incoming FIT, groups, incentives, conferences and corporate business, and we own a fleet of elegant air-conditioned buses in various models and capacities. Our main aim is presenting the best image of our beautiful country — Egypt with its history, monuments, civilization, people, traditions and culture.');

// Social links — old site had none besides email; keep # until client provides real URLs.
defined('SITE_FACEBOOK')  or define('SITE_FACEBOOK', '#');
defined('SITE_INSTAGRAM') or define('SITE_INSTAGRAM', '#');
defined('SITE_TWITTER')   or define('SITE_TWITTER', '#');
defined('SITE_LINKEDIN')  or define('SITE_LINKEDIN', '#');
defined('SITE_YOUTUBE')   or define('SITE_YOUTUBE', 'https://www.youtube.com/watch?v=kS0X-yIsB64');

// Cairo / Heliopolis map embed (replaces dummy Sedona, USA map)
defined('SITE_MAP_EMBED') or define('SITE_MAP_EMBED', 'https://www.google.com/maps?q=Heliopolis,Cairo,Egypt&output=embed');

// Our group: transport company (OWNED) + tour operations partner (NOT owned)
defined('KE_LIMO_URL') or define('KE_LIMO_URL', 'https://egyptlimo.com/');
defined('KE_LIMO_NAME') or define('KE_LIMO_NAME', 'Egypt Limo');
defined('KE_LIMO_BLURB') or define('KE_LIMO_BLURB', 'Our own transport company — private transfers, passenger shuttles and a fully integrated booking system behind every King Edward pickup.');
defined('KE_DMC_URL') or define('KE_DMC_URL', 'https://www.egyptdmc.com/');
defined('KE_DMC_NAME') or define('KE_DMC_NAME', 'Egypt DMC');
defined('KE_DMC_BLURB') or define('KE_DMC_BLURB', 'Our trusted partner — not owned by us — for trips, tours and on-the-ground operations across Egypt. The best of both teams on your itinerary.');

function site_config(): array {
    return [
        'name' => SITE_NAME,
        'slogan' => SITE_SLOGAN,
        'tagline' => SITE_TAGLINE,
        'emails' => [SITE_EMAIL_INFO, SITE_EMAIL_SALES, SITE_EMAIL_RESERVATION],
        'phones' => [SITE_PHONE_1, SITE_PHONE_2, SITE_PHONE_3, SITE_MOBILE_1, SITE_MOBILE_2],
        'address' => SITE_ADDRESS,
    ];
}
