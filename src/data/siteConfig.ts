// King Edward Travel — central site configuration
// Single source of truth for branding & contact.

export const SITE_NAME = 'King Edward Travel';
export const SITE_SLOGAN = 'All for Egypt';
export const SITE_TAGLINE = 'Welcome to the Land of the Pharaohs';
export const SITE_DOMAIN = 'kingedwardtravel.com';
export const SITE_URL = 'https://kingedwardtravel.com';
export const SITE_LICENSE = 'Official travel agency — License No. 1311 since 2005';
export const SITE_FOUNDED = '2005';

export const SITE_EMAIL_INFO = 'info@kingedwardtravel.com';
export const SITE_EMAIL_SALES = 'sales@kingedwardtravel.com';

export const SITE_PHONE_1 = '+20 10-940-66018';
export const SITE_PHONE_2 = '+20 12-236-35480';
export const SITE_WHATSAPP = '201094066018';

export const SITE_ADDRESS = 'Main Branch: Taqsim Abu El Ezz, Glaxo Company Street, Cairo, Egypt';

export const SITE_ABOUT_SHORT = 'King Edward Travel is an extensive Egyptian travel agency offering all kinds of tourism services in Egypt — incoming FIT, groups, incentives, conferences and corporate travel, with its own fleet of air-conditioned buses and highly experienced tour managers.';
export const SITE_ABOUT_LONG = 'King Edward Travel is an official Egyptian travel agency (License No. 1311) operating since 2005. We handle incoming FIT, groups, incentives, conferences and corporate business, and we own a fleet of elegant air-conditioned buses in various models and capacities. Our main aim is presenting the best image of our beautiful country — Egypt with its history, monuments, civilization, people, traditions and culture.';

// Social links — old site had none besides email; keep # until client provides real URLs.
export const SITE_FACEBOOK = '#';
export const SITE_INSTAGRAM = '#';
export const SITE_TWITTER = '#';
export const SITE_LINKEDIN = '#';
export const SITE_YOUTUBE = 'https://www.youtube.com/watch?v=kS0X-yIsB64';

// Cairo / Heliopolis map embed (replaces dummy Sedona, USA map)
export const SITE_MAP_EMBED = 'https://www.google.com/maps?q=Heliopolis,Cairo,Egypt&output=embed';

// Our group: transport company (OWNED) + tour operations partner (NOT owned)
export const KE_LIMO_URL = 'https://egyptlimo.com/';
export const KE_LIMO_NAME = 'Egypt Limo';
export const KE_LIMO_BLURB = 'Our own transport company — private transfers, passenger shuttles and a fully integrated booking system behind every King Edward pickup.';
export const KE_DMC_URL = 'https://www.egyptdmc.com/';
export const KE_DMC_NAME = 'Egypt DMC';
export const KE_DMC_BLURB = 'Our trusted partner — not owned by us — for trips, tours and on-the-ground operations across Egypt. The best of both teams on your itinerary.';

export function siteConfig() {
  return {
    name: SITE_NAME,
    slogan: SITE_SLOGAN,
    tagline: SITE_TAGLINE,
    emails: [SITE_EMAIL_INFO, SITE_EMAIL_SALES],
    phones: [SITE_PHONE_1, SITE_PHONE_2],
    address: SITE_ADDRESS,
  };
}
