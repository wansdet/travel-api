<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Factory\RegionFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class RegionFixtures extends Fixture implements FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $regions = [
        [
            'regionCode' => 'AFRICA',
            'regionName' => 'Africa',
            'briefDescription' => 'Africa attracts tourists with its diverse wildlife, stunning natural landscapes, vibrant cultures, and ancient historical sites. From the majestic Serengeti to the iconic Pyramids of Giza, Africa offers unforgettable safari experiences, breathtaking scenery, and a chance to immerse in rich heritage, making it a compelling destination for travelers.
            ',
            'shortDescription' => 'Africa attracts tourists with its diverse and captivating attractions. One of the main draws is the continent\'s stunning wildlife. From the iconic Big Five (lion, elephant, buffalo, leopard, and rhinoceros) in the Serengeti to gorilla trekking in Uganda, Africa offers incredible safari experiences that allow visitors to witness animals in their natural habitats.

The natural landscapes of Africa also entice tourists. The majestic Victoria Falls in Zimbabwe/Zambia, the breathtaking dunes of the Sahara Desert, and the picturesque beaches of Zanzibar are just a few examples of the diverse natural beauty found across the continent. Africa\'s rich cultural heritage is another attraction, with vibrant music, dance, and art scenes that showcase the unique traditions and history of each region.

Furthermore, Africa is home to several ancient historical sites that capture the imagination of travelers. The Pyramids of Giza in Egypt, the rock-hewn churches of Lalibela in Ethiopia, and the ancient city of Carthage in Tunisia are architectural wonders that provide a glimpse into the continent\'s fascinating past.

Beyond these attractions, Africa offers opportunities for adventure activities like trekking to the summit of Mount Kilimanjaro, diving in the coral reefs of the Red Sea, or exploring the Okavango Delta by traditional mokoro canoes. The warmth and hospitality of its people, along with the chance to immerse oneself in vibrant local cultures, make Africa a truly unforgettable destination for travelers seeking diverse experiences and a connection with nature and history.
            ',
            'longDescription' => '',
            'ranking' => 7,
            'sortOrder' => 1,
            'createdBy' => 'SYSTEM',
        ],
        [
            'regionCode' => 'ASIA',
            'regionName' => 'Asia',
            'briefDescription' => 'Asia attracts tourists with its ancient historical sites, diverse cultures, and stunning natural beauty. From the Great Wall of China to the temples of Kyoto, Asia offers a wealth of architectural wonders. The region\'s bustling cities, tranquil beaches, and exotic cuisine make it a captivating destination for travelers.
            ',
            'shortDescription' => 'Asia attracts tourists with its rich tapestry of cultural diversity, historical landmarks, stunning landscapes, and unique experiences. The continent offers an array of attractions, starting with its iconic historical sites such as the Great Wall of China, the Taj Mahal in India, and the ancient temples of Angkor Wat in Cambodia.

The vibrant cities of Asia are also major draws, from the futuristic skyline of Tokyo to the bustling streets of Bangkok and the modern metropolis of Singapore. These cities offer a blend of traditional and contemporary elements, including vibrant markets, tantalizing street food, and architectural marvels.

The natural beauty of Asia is captivating, with landscapes ranging from the picturesque beaches of Thailand and Bali to the serene backwaters of Kerala in India and the breathtaking rice terraces of Bali. Outdoor enthusiasts can explore the Himalayas, go trekking in Nepal, or discover the pristine islands of the Philippines.

Furthermore, Asia\'s rich cultural heritage, including ancient traditions, colorful festivals, and traditional arts and crafts, provide visitors with immersive cultural experiences. From participating in tea ceremonies in Japan to watching traditional dance performances in Bali, Asia offers a deep connection to its diverse cultures.

Overall, Asia\'s blend of history, culture, stunning landscapes, and vibrant cities make it a captivating destination that entices tourists from around the world seeking unforgettable experiences and a glimpse into the rich tapestry of Asian life.
            ',
            'longDescription' => '',
            'ranking' => 2,
            'sortOrder' => 2,
            'createdBy' => 'SYSTEM',
        ],
        [
            'regionCode' => 'CARIBBEAN',
            'regionName' => 'Caribbean',
            'briefDescription' => 'The Caribbean attracts tourists with its pristine white-sand beaches, crystal-clear turquoise waters, and vibrant tropical landscapes. The region offers a paradise for water sports enthusiasts, including snorkeling, diving, and sailing. Rich cultural heritage, vibrant music, and delicious cuisine add to the allure of this idyllic getaway destination.
            ',
            'shortDescription' => 'The Caribbean attracts tourists with its pristine beaches, crystal-clear turquoise waters, and tropical paradise ambiance. The allure of the region lies in its idyllic tropical climate, perfect for sunbathing, swimming, and indulging in water sports like snorkeling and scuba diving. Each Caribbean island offers a unique experience, from the laid-back vibes of Jamaica and the cultural richness of Cuba to the luxury resorts of the Bahamas and the natural beauty of the Dominican Republic.

The Caribbean\'s vibrant music and dance, including reggae, calypso, and salsa, create a lively atmosphere that captivates visitors. The region\'s delicious cuisine, influenced by African, European, and indigenous flavors, is a major attraction, with mouthwatering dishes like jerk chicken, fresh seafood, and tropical fruits.

Additionally, the Caribbean boasts a rich history and cultural heritage, seen in the colorful colonial architecture of cities like Havana and the UNESCO World Heritage Sites of San Juan and Willemstad. Visitors can also explore ancient ruins like Tulum in Mexico or indulge in luxury resorts and spas that offer relaxation and rejuvenation against the backdrop of stunning ocean views.

In summary, the Caribbean\'s pristine beaches, warm turquoise waters, vibrant music and culture, delicious cuisine, and rich history make it a dream destination for tourists seeking a tropical paradise experience.
            ',
            'longDescription' => '',
            'ranking' => 5,
            'sortOrder' => 3,
            'createdBy' => 'SYSTEM',
        ],
        [
            'regionCode' => 'EUROPE',
            'regionName' => 'Europe',
            'briefDescription' => 'Europe attracts tourists with its rich history, diverse cultures, and iconic landmarks. From the romantic canals of Venice to the majestic castles of Scotland, Europe offers a wealth of architectural wonders. The region\'s world-class museums, charming cobblestone streets, and renowned cuisine make it a must-visit destination for travelers.
            ',
            'shortDescription' => 'Europe attracts tourists with its rich history, diverse cultures, and iconic landmarks. The continent is home to countless historical sites, such as the grandeur of the Eiffel Tower in Paris, the ancient ruins of Rome, and the majestic castles of Scotland. The architectural wonders of Europe are captivating, from the intricate details of Gothic cathedrals to the charming cobblestone streets of old towns.

Europe\'s cultural diversity is another major draw, with each country offering its own unique traditions, cuisines, and art scenes. Visitors can indulge in world-class museums like the Louvre in Paris or explore the vibrant markets of Istanbul. Festivals and events throughout the year celebrate Europe\'s cultural heritage, ranging from Oktoberfest in Germany to La Tomatina in Spain.

Furthermore, Europe\'s stunning landscapes contribute to its appeal, from the picturesque fjords of Norway to the breathtaking Swiss Alps. The continent offers opportunities for outdoor adventures like hiking, skiing, and boating.

Europe\'s efficient transportation networks make it easy to explore multiple countries and experience the variety of landscapes, cultures, and cuisines that the continent has to offer. From the romantic canals of Venice to the historic sites of Athens, Europe provides a rich and diverse travel experience for tourists seeking history, culture, and natural beauty.
            ',
            'longDescription' => '',
            'ranking' => 1,
            'sortOrder' => 4,
            'createdBy' => 'SYSTEM',
        ],
        [
            'regionCode' => 'MIDDLE_EAST',
            'regionName' => 'Middle East',
            'briefDescription' => 'The Middle East attracts tourists with its ancient historical sites, rich cultural heritage, and intriguing traditions. From the awe-inspiring Pyramids of Egypt to the grand mosques of Istanbul, the region offers a glimpse into the cradle of civilization. The warmth of hospitality, vibrant souks, and delicious cuisine further enhance the allure of this captivating destination.
            ',
            'shortDescription' => 'Tourists are attracted to the Middle East for its captivating blend of ancient history, rich cultural heritage, and breathtaking landscapes. The region boasts iconic historical sites such as the Pyramids of Giza, the ancient city of Petra, and the majestic ruins of Palmyra. These archaeological wonders offer a glimpse into the civilizations that once thrived in the region.

The Middle East is known for its vibrant markets, where travelers can immerse themselves in the bustling souks, filled with vibrant colors, exotic spices, and traditional crafts. The warm hospitality of the locals provides an opportunity to connect with the region\'s traditions and customs.

Additionally, the Middle East\'s culinary delights are a major attraction. From indulging in the flavors of traditional dishes like falafel, kebabs, and mezze, to savoring aromatic teas and sweets, the region\'s gastronomy is a feast for the senses.

The landscapes of the Middle East are diverse and awe-inspiring. From the golden deserts of Saudi Arabia and the surreal rock formations of Cappadocia to the lush oases of Oman and the turquoise waters of the Red Sea, the natural beauty of the region offers adventure and tranquility in equal measure.

In summary, the Middle East\'s ancient history, cultural richness, tantalizing cuisine, and stunning landscapes make it a captivating destination for tourists seeking a unique and immersive travel experience.
            ',
            'longDescription' => '',
            'ranking' => 6,
            'sortOrder' => 5,
            'createdBy' => 'SYSTEM',
        ],
        [
            'regionCode' => 'OCEANIA',
            'regionName' => 'Oceania',
            'briefDescription' => 'Oceania attracts tourists with its breathtaking natural beauty, pristine beaches, and unique wildlife. From the stunning Great Barrier Reef in Australia to the volcanic wonders of New Zealand, the region offers an outdoor paradise for adventure seekers. The indigenous cultures, vibrant cities, and laid-back island vibes make Oceania an irresistible destination for travelers.
            ',
            'shortDescription' => 'Tourists are drawn to Oceania for its mesmerizing natural beauty, pristine beaches, and unique wildlife. The region is renowned for its stunning landscapes, including the Great Barrier Reef in Australia, the rugged mountains of New Zealand, and the remote islands of Fiji and French Polynesia.

Oceania offers a paradise for outdoor enthusiasts, with opportunities for snorkeling, scuba diving, surfing, and hiking. The diverse marine life, including colorful coral reefs and unique underwater species, is a major attraction for divers and snorkelers.

The indigenous cultures of Oceania add to its allure, with the Maori heritage in New Zealand, the rich Aboriginal history in Australia, and the Polynesian traditions in the Pacific islands. Travelers can immerse themselves in cultural experiences, such as attending traditional ceremonies, learning about ancient customs, and enjoying local arts and crafts.

Furthermore, the laid-back island lifestyle and warm hospitality of the locals create a relaxing and welcoming atmosphere. The region\'s vibrant festivals, such as the Pasifika Festival in New Zealand and the Bula Festival in Fiji, showcase the lively spirit and cultural diversity of Oceania.

In summary, Oceania\'s breathtaking landscapes, diverse marine life, indigenous cultures, and relaxed island vibes make it a sought-after destination for tourists seeking natural wonders, outdoor adventures, and a glimpse into the vibrant cultures of the Pacific.
            ',
            'longDescription' => '',
            'ranking' => 4,
            'sortOrder' => 6,
            'createdBy' => 'SYSTEM',
        ],
        [
            'regionCode' => 'NORTH_AMERICA',
            'regionName' => 'North America',
            'briefDescription' => 'North America attracts tourists with its diverse landscapes, iconic landmarks, and vibrant cities. From the natural wonders of the Grand Canyon and Niagara Falls to the bustling streets of New York City and the cultural melting pot of Los Angeles, the region offers a mix of breathtaking scenery, cultural experiences, and world-class entertainment, making it a sought-after destination for travelers.
            ',
            'shortDescription' => 'North America attracts tourists with its diverse range of attractions, natural wonders, vibrant cities, and cultural experiences. The continent offers iconic landmarks like the Statue of Liberty in New York, the Grand Canyon in Arizona, and the Niagara Falls on the border of the United States and Canada.

The United States is home to world-class cities such as New York City, Los Angeles, and Chicago, offering a blend of cultural diversity, entertainment, and shopping. The vibrant music scene in cities like Nashville and New Orleans also attracts visitors seeking a taste of American music culture.

North America\'s stunning national parks, including Yellowstone, Yosemite, and Banff, provide breathtaking landscapes and opportunities for outdoor adventures like hiking, wildlife spotting, and camping. The region\'s coastal areas, such as the beaches of California and the scenic drives along the Pacific Coast Highway, offer relaxation and scenic beauty.

Furthermore, North America\'s rich history and cultural heritage can be explored through its museums, historical sites, and indigenous communities. Visitors can delve into the history of the American Revolution in Boston, experience the vibrant culture of Mexico\'s Day of the Dead celebrations, or learn about the indigenous cultures in Alaska.

In summary, North America\'s mix of iconic landmarks, vibrant cities, natural wonders, and cultural experiences make it a captivating destination for tourists seeking diverse experiences, adventure, and a glimpse into the rich tapestry of North American life.
            ',
            'longDescription' => '',
            'ranking' => 3,
            'sortOrder' => 7,
            'createdBy' => 'SYSTEM',
        ],
        [
            'regionCode' => 'CENTRAL_AMERICA',
            'regionName' => 'Central America',
            'briefDescription' => 'Central America attracts tourists with its stunning biodiversity, ancient ruins, and pristine beaches. From the lush rainforests of Costa Rica to the ancient Mayan ruins of Guatemala and the vibrant colonial cities of Nicaragua, the region offers a blend of adventure, cultural immersion, and natural beauty that captivates travelers seeking unique experiences.
            ',
            'shortDescription' => 'Central America attracts tourists with its stunning biodiversity, ancient ruins, vibrant cultures, and beautiful landscapes. The region is renowned for its lush rainforests, pristine beaches, and impressive volcanoes.

One major draw is the opportunity for eco-tourism and wildlife encounters. Central America is home to diverse ecosystems, including the world-famous Monteverde Cloud Forest in Costa Rica and the diverse marine life in the Belize Barrier Reef. Visitors can explore national parks, go zip-lining through the jungle, or embark on wildlife watching tours.

Central America\'s rich archaeological sites, such as the Mayan ruins in Tikal (Guatemala) and Copan (Honduras), provide a fascinating glimpse into ancient civilizations. These ancient sites offer a blend of history, mystery, and architectural wonders.

The vibrant cultures and traditions of Central America are another attraction. From the colorful markets of Guatemala to the traditional dances and music of Nicaragua, travelers can immerse themselves in the region\'s vibrant cultural heritage. Additionally, Central America is known for its delicious cuisine, with local dishes like pupusas in El Salvador and gallo pinto in Costa Rica.

In summary, Central America\'s natural beauty, archaeological sites, vibrant cultures, and culinary delights make it an enticing destination for tourists seeking adventure, cultural immersion, and a deeper connection with nature.
            ',
            'longDescription' => '',
            'ranking' => 9,
            'sortOrder' => 8,
            'createdBy' => 'SYSTEM',
        ],
        [
            'regionCode' => 'SOUTH_AMERICA',
            'regionName' => 'South America',
            'briefDescription' => 'South America attracts tourists with its awe-inspiring natural wonders, rich cultural heritage, and diverse landscapes. From the majestic peaks of the Andes and the lush Amazon rainforest to the vibrant cities of Rio de Janeiro and Buenos Aires, the region offers adventure, breathtaking scenery, and a vibrant tapestry of music, dance, and flavors that enthrall visitors.
            ',
            'shortDescription' => 'South America is a captivating travel destination that entices tourists with its diverse attractions. Its natural wonders span from the awe-inspiring peaks of the Andes Mountains to the vast Amazon rainforest, home to an incredible array of plant and animal species. The continent\'s iconic landmarks, such as the ancient ruins of Machu Picchu in Peru and the breathtaking Iguazu Falls on the border of Argentina and Brazil, draw visitors seeking cultural and natural immersion.

In addition to its stunning landscapes, South America boasts a rich cultural heritage. The region is renowned for its vibrant music and dance traditions, including the passionate tango in Argentina and the infectious rhythms of samba in Brazil. Cities like Rio de Janeiro and Buenos Aires pulsate with energy, offering lively nightlife, world-class cuisine, and architectural gems that reflect the continent\'s colonial past.

Furthermore, South America\'s history is peppered with ancient civilizations, such as the Inca, Maya, and Aztec empires. The archaeological sites and ruins left behind, such as the mysterious Nazca Lines in Peru and the ancient city of Cusco, provide glimpses into these fascinating civilizations. Travelers can immerse themselves in the unique cultural traditions and visit museums that showcase South America\'s rich heritage.

In summary, South America\'s allure lies in its diverse natural landscapes, vibrant cultural traditions, and rich history. Whether exploring the Amazon rainforest, dancing the night away in Rio de Janeiro, or delving into the mysteries of ancient civilizations, visitors to South America are guaranteed a remarkable and enriching travel experience.
            ',
            'longDescription' => '',
            'ranking' => 8,
            'sortOrder' => 9,
            'createdBy' => 'SYSTEM',
        ],
        [
            'regionCode' => 'ANTARCTICA',
            'regionName' => 'Antarctica',
            'briefDescription' => 'Antarctica attracts tourists with its pristine, untouched wilderness and unique wildlife encounters. The vast icy landscapes, towering glaciers, and abundant marine life, including penguins and seals, offer a once-in-a-lifetime experience for adventurous travelers. Exploring the remote beauty of Antarctica allows visitors to witness a world like no other, fostering a deep appreciation for the planet\'s natural wonders.
            ',
            'shortDescription' => 'South America attracts tourists with its diverse landscapes, rich cultural heritage, vibrant festivals, and iconic landmarks. The continent offers breathtaking natural wonders, such as the Amazon rainforest, the Andes Mountains, and the spectacular Iguazu Falls.

One major draw is the cultural richness of South America. Visitors can explore the ancient ruins of Machu Picchu in Peru, experience the tango culture in Argentina, or immerse themselves in the vibrant music and dance scene of Brazil. Each country in South America offers a unique blend of traditions, cuisines, and artistic expressions.

South America is known for its lively festivals and celebrations, such as Carnival in Brazil, Inti Raymi in Peru, and La Diablada in Bolivia. These colorful events showcase the region\'s vibrant cultures and provide an opportunity for visitors to participate in traditional dances, music, and rituals.

Furthermore, South America is a paradise for adventure seekers. From hiking the Inca Trail to trekking in Patagonia, the continent offers thrilling outdoor activities. The Galapagos Islands in Ecuador and the Pantanal wetlands in Brazil provide opportunities for wildlife enthusiasts to encounter unique species.

In summary, South America\'s diverse landscapes, rich cultural heritage, vibrant festivals, and adventurous spirit make it an enticing destination for tourists seeking a blend of natural wonders, cultural immersion, and thrilling experiences.
            ',
            'longDescription' => '',
            'ranking' => 10,
            'sortOrder' => 10,
            'createdBy' => 'SYSTEM',
        ],
    ];

    public static function getGroups(): array
    {
        return ['region', 'country', 'place', 'place_image', 'all'];
    }

    public function load(ObjectManager $manager): void
    {
        RegionFactory::createSequence(
            function () {
                foreach ($this->regions as $region) {
                    yield [
                        'regionCode' => $region['regionCode'],
                        'regionName' => $region['regionName'],
                        'briefDescription' => $region['briefDescription'],
                        'shortDescription' => $region['shortDescription'],
                        'longDescription' => $this->generateParagraphs(),
                        'ranking' => $region['ranking'],
                        'sortOrder' => $region['sortOrder'],
                        'createdBy' => $region['createdBy'],
                    ];
                }
            }
        );
    }
}
