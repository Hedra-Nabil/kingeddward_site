<?php
// King Edward Travel — real Egyptian content (tours, destinations, cruises, fleet, FAQs)
// PHP 8.x compatible. Photos: Wikimedia Commons (free licenses, see assets/images/egypt/_credits.txt).
declare(strict_types=1);

defined('KE_VIDEO_YT') or define('KE_VIDEO_YT', 'https://www.youtube.com/watch?v=pQcUU-g3c48'); // Experience Egypt — official
defined('KE_VIDEO_LOCAL') or define('KE_VIDEO_LOCAL', 'assets/videos/giza-flyover.webm');

$KE_TOURS = [
    ['title' => 'Classical Egypt & 3 Nights Nile Cruise', 'days' => '8 Days', 'loc' => 'Cairo, Luxor, Edfu, Kom Ombo, Aswan', 'img' => 'assets/images/egypt/nile-cruise.jpg', 'rating' => '4.9 (412 Reviews)', 'blurb' => 'Pyramids, Sphinx & Egyptian Museum plus a 3-night floating hotel between Luxor and Aswan.'],
    ['title' => 'Classical Egypt & 4 Nights Nile Cruise', 'days' => '9 Days', 'loc' => 'Cairo, Luxor, Edfu, Kom Ombo, Aswan', 'img' => 'assets/images/egypt/luxor-temple.jpg', 'rating' => '4.9 (388 Reviews)', 'blurb' => 'The classic route with an extra cruise night — Karnak, Valley of the Kings and Philae at a relaxed pace.'],
    ['title' => 'Classical Egypt & 7 Nights Nile Cruise', 'days' => '12 Days', 'loc' => 'Cairo, Luxor, Aswan, Abu Simbel', 'img' => 'assets/images/egypt/karnak.jpg', 'rating' => '5.0 (296 Reviews)', 'blurb' => 'The grand tour: full week on the Nile plus Abu Simbel and Cairo’s highlights with expert Egyptologists.'],
    ['title' => 'Egypt Overland', 'days' => '12 Days', 'loc' => 'Cairo, Luxor, Aswan, Abu Simbel', 'img' => 'assets/images/egypt/aswan-nile.jpg', 'rating' => '4.8 (204 Reviews)', 'blurb' => 'See Egypt by road and rail in our own A/C fleet — temples, tombs and Nubian villages up close.'],
    ['title' => 'Cairo, Hurghada & Nile Cruise', 'days' => '10 Days', 'loc' => 'Cairo, Luxor, Aswan, Hurghada', 'img' => 'assets/images/egypt/hurghada.jpg', 'rating' => '4.8 (351 Reviews)', 'blurb' => 'Culture plus Red Sea: pyramids and temples first, then Hurghada’s beaches and coral reefs.'],
    ['title' => 'Cairo, Sharm El Sheikh & Nile Cruise', 'days' => '10 Days', 'loc' => 'Cairo, Luxor, Aswan, Sharm', 'img' => 'assets/images/egypt/sharm.jpg', 'rating' => '4.9 (327 Reviews)', 'blurb' => 'Nile Valley wonders combined with Sharm El Sheikh diving, Ras Mohamed and Sinai nights.'],
    ['title' => 'Pyramids and Petra', 'days' => '9 Days', 'loc' => 'Cairo, Sinai, Petra, Jordan', 'img' => 'assets/images/egypt/pyramids-giza.jpg', 'rating' => '4.9 (189 Reviews)', 'blurb' => 'Two wonders in one trip: Giza’s pyramids then the rose-red city of Petra via Sinai.'],
    ['title' => 'Holy Family Trip', 'days' => '8 Days', 'loc' => 'Cairo, Wadi Natrun, Sinai, Assiut', 'img' => 'assets/images/egypt/st-catherine.jpg', 'rating' => '4.8 (156 Reviews)', 'blurb' => 'Follow the Holy Family trail — churches, monasteries and St. Catherine in Sinai.'],
    ['title' => 'Cairo and Sinai', 'days' => '7 Days', 'loc' => 'Cairo, St. Catherine, Dahab', 'img' => 'assets/images/egypt/cairo-citadel.jpg', 'rating' => '4.7 (143 Reviews)', 'blurb' => 'Cairo’s citadel, Khan El Khalili and museums plus Sinai’s mountains and Dahab lagoons.'],
];

$KE_DESTINATIONS = [
    ['name' => 'Giza Pyramids & Sphinx', 'loc' => 'Giza, Egypt', 'img' => 'assets/images/egypt/pyramids-giza.jpg', 'tours' => '12 Tours'],
    ['name' => 'Luxor — Karnak & Valley of Kings', 'loc' => 'Luxor, Egypt', 'img' => 'assets/images/egypt/karnak.jpg', 'tours' => '10 Tours'],
    ['name' => 'Aswan & Abu Simbel', 'loc' => 'Aswan, Egypt', 'img' => 'assets/images/egypt/abu-simbel.jpg', 'tours' => '8 Tours'],
    ['name' => 'Hurghada — Red Sea Riviera', 'loc' => 'Hurghada, Egypt', 'img' => 'assets/images/egypt/hurghada.jpg', 'tours' => '7 Tours'],
    ['name' => 'Sharm El Sheikh & Sinai', 'loc' => 'South Sinai, Egypt', 'img' => 'assets/images/egypt/sharm.jpg', 'tours' => '7 Tours'],
    ['name' => 'Cairo — Citadel & Khan El Khalili', 'loc' => 'Cairo, Egypt', 'img' => 'assets/images/egypt/khan-el-khalili.jpg', 'tours' => '9 Tours'],
    ['name' => 'Alexandria — Pearl of Med', 'loc' => 'Alexandria, Egypt', 'img' => 'assets/images/egypt/alexandria.jpg', 'tours' => '5 Tours'],
    ['name' => 'St. Catherine Monastery', 'loc' => 'Sinai, Egypt', 'img' => 'assets/images/egypt/st-catherine.jpg', 'tours' => '4 Tours'],
];

$KE_GALLERY = [
    ['img' => 'assets/images/egypt/pyramids-giza.jpg', 'cap' => 'Giza Pyramids'],
    ['img' => 'assets/images/egypt/karnak.jpg', 'cap' => 'Karnak Temple, Luxor'],
    ['img' => 'assets/images/egypt/luxor-temple.jpg', 'cap' => 'Luxor Temple at Night'],
    ['img' => 'assets/images/egypt/abu-simbel.jpg', 'cap' => 'Abu Simbel'],
    ['img' => 'assets/images/egypt/aswan-nile.jpg', 'cap' => 'Nile at Aswan'],
    ['img' => 'assets/images/egypt/nile-cruise.jpg', 'cap' => 'Nile Cruise Ship'],
    ['img' => 'assets/images/egypt/luxor-balloon.jpg', 'cap' => 'Balloons over Luxor'],
    ['img' => 'assets/images/egypt/sharm.jpg', 'cap' => 'Sharm El Sheikh'],
    ['img' => 'assets/images/egypt/hurghada.jpg', 'cap' => 'Hurghada Beach'],
    ['img' => 'assets/images/egypt/cairo-citadel.jpg', 'cap' => 'Saladin Citadel, Cairo'],
    ['img' => 'assets/images/egypt/khan-el-khalili.jpg', 'cap' => 'Khan El Khalili Bazaar'],
    ['img' => 'assets/images/egypt/egyptian-museum.jpg', 'cap' => 'Egyptian Museum, Cairo'],
    ['img' => 'assets/images/egypt/alexandria.jpg', 'cap' => 'Qaitbay Citadel, Alexandria'],
    ['img' => 'assets/images/egypt/st-catherine.jpg', 'cap' => "St. Catherine's Monastery"],
];

$KE_FAQS = [
    ['q' => 'Do I need a visa to visit Egypt?', 'a' => 'Most nationalities get a 30-day visa on arrival or the Egypt eVisa online before travel. Your passport must be valid for 6+ months. We confirm the current rule for your nationality when you book.'],
    ['q' => 'What is the best time to visit Egypt?', 'a' => 'October to April is ideal — mild days in Cairo/Luxor (20–28°C). The Red Sea (Hurghada, Sharm) is a year-round sun destination. Summer (June–August) is hot in Upper Egypt but great for Red Sea deals.'],
    ['q' => 'Should I choose a 3-night or 4-night Nile cruise?', 'a' => 'Both cover Luxor, Edfu, Kom Ombo and Aswan. The 4-night cruise sails Luxor→Aswan at a relaxed pace; the 3-night cruise sails Aswan→Luxor. Add Abu Simbel by road or Lake Nasser cruise for the full south.'],
    ['q' => 'What currency should I bring? Are cards accepted?', 'a' => 'The Egyptian Pound (EGP) is used everywhere. Cards work in hotels and big shops; carry cash for bazaars, taxis and tips. ATMs are widespread in Cairo, Luxor, Aswan and resorts.'],
    ['q' => 'Is Egypt safe for tourists?', 'a' => 'The main tourist corridor (Cairo, Luxor, Aswan, Red Sea resorts) welcomes millions of visitors yearly with dedicated tourist police. You travel with licensed guides and our own drivers throughout your trip.'],
    ['q' => 'How do I book and pay?', 'a' => 'Send your dates via our contact form or email (reservation@kingedwardtravel.com). We reply with an itinerary and best offer; a small deposit confirms, the balance is paid on arrival in USD, EUR or EGP.'],
    ['q' => 'Do you provide airport transfers and private transport?', 'a' => 'Yes — meet-and-assist at Cairo, Luxor, Aswan, Hurghada and Sharm airports, plus our own fleet: 50-seat MAN/Mercedes buses, 28/25-seat minibuses and 16/11-seat vans for private tours.'],
    ['q' => 'What should I wear, and can I dive in the Red Sea?', 'a' => 'Light cotton, hat and sunscreen; modest dress for mosques/churches (covered shoulders/knees). The Red Sea is world-class diving year-round — Ras Mohamed, Tiran and Hurghada reefs, with PADI centers we book for you.'],
];

$KE_CRUISES = [
    ['name' => 'Royal Princess', 'route' => 'Luxor ↔ Aswan', 'img' => 'assets/images/egypt/nile-cruise.jpg'],
    ['name' => 'Grand Princess', 'route' => 'Luxor ↔ Aswan', 'img' => 'assets/images/egypt/aswan-nile.jpg'],
    ['name' => 'Miss Egypt', 'route' => 'Luxor ↔ Aswan', 'img' => 'assets/images/egypt/luxor-temple.jpg'],
    ['name' => 'Sonesta Fleet (Sun/Moon/Star/St. George)', 'route' => 'Luxor ↔ Aswan', 'img' => 'assets/images/egypt/karnak.jpg'],
    ['name' => 'Mövenpick Prince Abbas', 'route' => 'Lake Nasser: Aswan ↔ Abu Simbel', 'img' => 'assets/images/egypt/abu-simbel.jpg'],
    ['name' => 'Omar El Khayam', 'route' => 'Lake Nasser: Aswan ↔ Abu Simbel', 'img' => 'assets/images/egypt/aswan-nile.jpg'],
];

$KE_FLEET = [
    ['bus' => 'MAN Coach', 'seats' => '50 Seats'],
    ['bus' => 'Mercedes Coach', 'seats' => '50 Seats'],
    ['bus' => 'Mitsubishi Minibus', 'seats' => '28 Seats'],
    ['bus' => 'Toyota Coaster', 'seats' => '25 Seats'],
    ['bus' => 'Toyota Hiace', 'seats' => '16 Seats'],
    ['bus' => 'Hyundai H1 Van', 'seats' => '11 Seats'],
];
