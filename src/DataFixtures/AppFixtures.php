<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Factory\CountryFactory;
use App\Factory\RegionFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private array $countries = [
            [
                'countryCode' => 'AG',
                'countryName' => 'Antigua and Barbuda',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'St. John\'s',
                'shortDescription' => 'Antigua and Barbuda is a stunning Caribbean nation known for its breathtaking beaches, crystal-clear turquoise waters, and vibrant culture. With over 365 beaches, there is an abundance of opportunities for sunbathing, swimming, snorkeling, and water sports. The islands are also home to historical sites, such as Nelson\'s Dockyard, a UNESCO World Heritage site, which offers a glimpse into the nation\'s colonial past. Visitors can indulge in delicious local cuisine, explore lush rainforests, and engage in a variety of outdoor activities like sailing, hiking, and zip-lining. Whether you\'re seeking relaxation or adventure, Antigua and Barbuda offer an idyllic tropical getaway for all types of travelers.
            ',
                'longDescription' => 'Antigua and Barbuda is a captivating country located in the Caribbean region. Situated in the eastern part of the Caribbean Sea, it consists of the main islands of Antigua and Barbuda, along with smaller surrounding islands. This tropical paradise is famous for its pristine beaches, crystal-clear waters, and warm hospitality, making it a dream destination for travelers.

Antigua and Barbuda boast a remarkable combination of natural beauty and cultural heritage. The islands are renowned for their stunning white sand beaches that stretch along the coastline, providing a picture-perfect backdrop for relaxation and water activities. The turquoise waters offer excellent opportunities for snorkeling, diving, and sailing, allowing visitors to explore the vibrant marine life and coral reefs.

In addition to its natural splendor, Antigua and Barbuda offer a rich history and cultural experience. The capital city of St. John\'s, located on the island of Antigua, is a vibrant hub where colonial architecture meets Caribbean charm. The city\'s historic sites, such as Nelson\'s Dockyard, a UNESCO World Heritage Site, showcase the country\'s maritime heritage and provide insight into its colonial past.

When it comes to must-visit locations, one cannot miss the iconic Shirley Heights. Located in Antigua, this hilltop viewpoint offers breathtaking panoramic views of English Harbour and the surrounding islands. It is also a popular spot for sunset gatherings and lively Caribbean-style parties with live music, local cuisine, and dancing.

Another top destination is the secluded paradise of Barbuda. With its unspoiled beaches, including the famous Pink Sand Beach, Barbuda offers a tranquil escape from the bustling world. Nature enthusiasts will appreciate the Codrington Lagoon National Park, home to a diverse ecosystem and a sanctuary for frigate birds and other wildlife.

Visiting Antigua and Barbuda provides an opportunity to immerse oneself in the vibrant Caribbean culture, indulge in delicious local cuisine, and experience the warm hospitality of the islanders. Whether you\'re seeking relaxation on pristine beaches, exploring historical landmarks, or embarking on exciting water adventures, Antigua and Barbuda offer a captivating blend of natural beauty and cultural richness that will leave a lasting impression.
            ',
                'currency' => 'Eastern Caribbean dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 9,
            ],
            [
                'countryCode' => 'AR',
                'countryName' => 'Argentina',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Buenos Aires',
                'shortDescription' => 'Argentina, located in South America, is a country that offers a diverse range of experiences for travelers. From the vibrant capital city of Buenos Aires, known for its tango dancing and European-inspired architecture, to the breathtaking landscapes of Patagonia and the mighty Iguazu Falls, Argentina has something for everyone. Visitors can indulge in world-class cuisine, including mouthwatering steaks and delicious wines, while immersing themselves in the rich cultural heritage and passionate spirit of the Argentine people. Outdoor enthusiasts can explore the stunning Andes mountains, go hiking in the beautiful Lake District, or venture to the southernmost city in the world, Ushuaia. Argentina\'s natural wonders, vibrant cities, and warm hospitality make it an enticing destination for travelers seeking adventure, culture, and natural beauty.
            ',
                'longDescription' => 'Argentina is a captivating country located in South America, bordered by Chile to the west, Bolivia and Paraguay to the north, Brazil to the northeast, and Uruguay to the east. Known for its diverse landscapes, vibrant culture, and rich history, Argentina offers a wide range of travel experiences for visitors.

One of the main attractions of Argentina is its breathtaking natural beauty. From the awe-inspiring Andes Mountains in the west to the vast pampas in the central region, and from the stunning glaciers of Patagonia to the tropical rainforests of the northeast, Argentina is a paradise for nature lovers. The country is also famous for its vibrant cities, such as Buenos Aires, known for its tango music and dance, vibrant street life, and European-inspired architecture.

Buenos Aires, the capital city of Argentina, is a cosmopolitan metropolis that combines a rich history with a modern flair. Visitors can explore the charming neighborhoods of La Boca and San Telmo, known for their colorful houses and lively street markets, or stroll along the elegant boulevards of Recoleta, home to beautiful parks and the iconic Recoleta Cemetery. The city is also renowned for its world-class museums, art galleries, and a thriving culinary scene that showcases Argentina\'s famous beef and wine.

Another must-visit location in Argentina is the breathtaking Iguazu Falls, located in the northeastern part of the country. This natural wonder consists of a series of magnificent waterfalls surrounded by lush rainforest. Visitors can witness the sheer power and beauty of the falls by walking along the network of trails and catwalks or taking a boat ride to get up close to the cascades.

In the southern region of Argentina lies the stunning region of Patagonia, known for its dramatic landscapes and abundant wildlife. The iconic Perito Moreno Glacier, located in Los Glaciares National Park, is a major highlight, offering a mesmerizing spectacle of ice formations and occasional ice calving. Adventurous travelers can also explore the rugged mountains of the Andes, hike in the pristine national parks, or embark on wildlife-watching expeditions to spot penguins, sea lions, and whales along the coast.

Visiting Argentina is a truly enriching experience that combines natural wonders, cultural richness, and warm hospitality. Whether you\'re exploring the vibrant streets of Buenos Aires, witnessing the power of Iguazu Falls, or immersing yourself in the wild beauty of Patagonia, Argentina offers a diverse and captivating journey that will leave travelers with unforgettable memories.
            ',
                'currency' => 'Argentine peso',
                'language' => 'Spanish',
                'atm' => 'ATMs are widely available in cities and towns, and credit cards are accepted in most establishments.',
                'mobilePhone' => 'Prepaid SIM cards are widely available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 10,
            ],
            [
                'countryCode' => 'AM',
                'countryName' => 'Armenia',
                'regionCode' => 'ASIA',
                'capital' => 'Yerevan',
                'shortDescription' => '

            ',
                'longDescription' => 'Armenia is a landlocked country located at the crossroads of Eastern Europe and Western Asia. It offers a rich history, ancient monasteries, stunning mountain landscapes, and warm hospitality.',
                'currency' => 'Armenian dram',
                'language' => 'Armenian',
                'atm' => 'ATMs are available in major cities, and credit cards are accepted in some establishments.',
                'mobilePhone' => 'Prepaid SIM cards are widely available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 11,
            ],
            [
                'countryCode' => 'AW',
                'countryName' => 'Aruba',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Oranjestad',
                'shortDescription' => 'Aruba, a Caribbean island located outside the hurricane belt, is a paradise destination that attracts travelers from around the world. Known for its stunning white-sand beaches, crystal-clear turquoise waters, and year-round warm weather, Aruba is a haven for sun-seekers and water enthusiasts. Beyond its picture-perfect beaches, the island offers a range of activities such as snorkeling, scuba diving, sailing, and windsurfing. Aruba\'s vibrant culture, influenced by Dutch and Caribbean traditions, can be experienced through its lively festivals, colorful architecture, and delicious fusion cuisine. Visitors can also explore the island\'s natural wonders, such as Arikok National Park with its rugged landscapes and unique wildlife. With its idyllic beaches, diverse activities, and welcoming atmosphere, Aruba is an ideal destination for those seeking relaxation, adventure, and a taste of Caribbean charm.
            ',
                'longDescription' => 'Aruba, located in the southern Caribbean Sea, is a stunning island that forms part of the Lesser Antilles. It is famous for its pristine white-sand beaches, crystal-clear turquoise waters, and year-round warm weather, making it a popular destination for beach lovers and water sports enthusiasts.

One of the main attractions of Aruba is its breathtaking beaches. The island boasts a coastline adorned with picturesque beaches, including Eagle Beach and Palm Beach. These beaches offer a paradise-like setting with soft powdery sand and calm waters, perfect for swimming, sunbathing, and enjoying various water activities such as snorkeling and scuba diving. Aruba is also known for its trade winds, which create ideal conditions for windsurfing and kitesurfing.

In addition to its stunning beaches, Aruba offers a unique blend of natural and cultural attractions. One must-visit location is Arikok National Park, which covers approximately 20% of the island. This protected area is home to diverse wildlife, desert-like landscapes, and fascinating geological formations, including the famous Natural Pool, a natural rock formation filled with clear water where visitors can swim and snorkel.

Another highlight of Aruba is the capital city of Oranjestad, known for its colorful Dutch colonial architecture and vibrant atmosphere. The city offers a range of attractions, including shopping districts like Renaissance Mall and Main Street, where visitors can find luxury brands, local crafts, and duty-free goods. Exploring the city\'s historical sites, such as Fort Zoutman and the Archaeological Museum, provides insights into Aruba\'s rich cultural heritage.

Aruba is a destination that offers something for everyone. Whether you seek relaxation on pristine beaches, thrilling water sports adventures, or a blend of natural beauty and cultural exploration, Aruba has it all. The warm and friendly local population, known as "Arubans,\" adds to the welcoming and laid-back atmosphere of the island. With its breathtaking landscapes, vibrant culture, and endless sunshine, Aruba promises an unforgettable vacation experience.
            ',
                'currency' => 'Aruban florin',
                'language' => 'Dutch, Papiamento',
                'atm' => 'ATMs are widely available in cities and towns, and credit cards are accepted in most establishments.',
                'mobilePhone' => 'Prepaid SIM cards are widely available for mobile phones.',
                'electricity' => '127V, 220V',
                'active' => true,
                'sortOrder' => 12,
            ],
            [
                'countryCode' => 'AU',
                'countryName' => 'Australia',
                'regionCode' => 'OCEANIA',
                'capital' => 'Canberra',
                'shortDescription' => '
            Australia, the sixth-largest country in the world, is a captivating destination that offers a wealth of experiences for travelers. Known for its stunning landscapes, including the iconic Great Barrier Reef, the vast Outback, and the breathtaking beaches of the Gold Coast and Bondi, Australia is a haven for nature lovers and outdoor enthusiasts. The country is home to unique wildlife, such as kangaroos, koalas, and the elusive platypus. Visitors can explore vibrant cities like Sydney, Melbourne, and Brisbane, which offer a mix of cultural attractions, world-class dining, and a lively arts scene. Australia also boasts diverse adventure opportunities, from diving with whale sharks in Western Australia to trekking through ancient rainforests in Queensland. With its warm hospitality, diverse landscapes, and unforgettable experiences, Australia is a must-visit destination for travelers seeking adventure, natural beauty, and a taste of Aussie culture.
            ',
                'longDescription' => '
Australia, located in the southern hemisphere, is the world\'s sixth-largest country and known for its diverse landscapes, stunning natural wonders, vibrant cities, and unique wildlife. It is famous for its iconic landmarks such as the Sydney Opera House, the Great Barrier Reef, and Uluru, making it a dream destination for travelers seeking adventure, natural beauty, and cultural experiences.

One of the highlights of Australia is its breathtaking natural landscapes. From the vast Outback with its red deserts and rugged terrain to the stunning coastal areas with pristine beaches and turquoise waters, Australia offers a diverse range of natural wonders. The Great Barrier Reef, a UNESCO World Heritage Site, is the world\'s largest coral reef system and a must-visit destination for snorkeling, diving, and exploring the vibrant underwater world. The rugged beauty of the Blue Mountains, with its deep valleys, towering cliffs, and dense forests, provides an opportunity for hiking, wildlife spotting, and breathtaking views.

Australia is also renowned for its vibrant cities. Sydney, the largest city, is famous for its iconic landmarks, including the Sydney Opera House and Sydney Harbour Bridge. The city offers a bustling cosmopolitan atmosphere, world-class dining, vibrant markets, and beautiful beaches such as Bondi Beach. Melbourne, known for its arts and culture scene, offers a blend of galleries, street art, trendy neighborhoods, and a thriving food and coffee culture. Another must-visit city is Brisbane, which combines a relaxed riverside lifestyle with a vibrant cultural scene and easy access to nearby attractions such as the Gold Coast and the Sunshine Coast.

Visiting Australia provides an opportunity to immerse oneself in its unique and diverse culture. From learning about the rich Indigenous heritage and traditions to experiencing the multiculturalism reflected in the cuisine, festivals, and arts, Australia offers a melting pot of cultural experiences. The country\'s friendly and laid-back atmosphere, along with its commitment to preserving its natural beauty, makes it an ideal destination for outdoor enthusiasts, adventure seekers, wildlife lovers, and those looking to explore a truly remarkable country.

With its stunning landscapes, vibrant cities, diverse wildlife, and welcoming culture, Australia offers a myriad of experiences that will captivate any traveler. Whether you\'re exploring the ancient wonders of the Outback, snorkeling alongside colorful marine life in the Great Barrier Reef, or discovering the cosmopolitan charm of its cities, Australia promises an unforgettable journey filled with natural beauty, adventure, and memorable encounters.
            ',
                'currency' => 'Australian dollar',
                'language' => 'English',
                'atm' => 'ATMs are widely available in cities and towns, and credit cards are accepted in most establishments.',
                'mobilePhone' => 'Mobile phone coverage is extensive across the country.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 13,
            ],
            [
                'countryCode' => 'AT',
                'countryName' => 'Austria',
                'regionCode' => 'EUROPE',
                'capital' => 'Vienna',
                'shortDescription' => '
            Austria, nestled in the heart of Europe, is a country renowned for its stunning alpine landscapes, rich history, and cultural treasures. The charming capital city of Vienna, with its elegant architecture and classical music heritage, is a must-visit destination. Austria is also known for its picturesque towns and villages, such as Salzburg, birthplace of Mozart, and Innsbruck, surrounded by majestic mountains. Nature lovers can explore the breathtaking Austrian Alps, indulge in winter sports in world-class ski resorts, or unwind in the serene beauty of the Austrian lakes, like Hallstatt and Wolfgangsee. The country\'s culinary delights, including mouthwatering pastries and famous Wiener schnitzel, are an added bonus. Whether it\'s exploring cultural treasures, enjoying outdoor adventures, or immersing oneself in the enchanting Alpine scenery, Austria offers a captivating experience for all.
            ',
                'longDescription' => '
Austria, located in Central Europe, is a landlocked country known for its stunning Alpine landscapes, rich history, and cultural heritage. It is famous for its picturesque cities, charming villages, and world-renowned music and art. Austria offers a delightful blend of natural beauty, architectural treasures, and a vibrant cultural scene, making it a popular destination for travelers.

One of Austria\'s main attractions is its breathtaking Alpine scenery. The country is home to the majestic peaks of the Austrian Alps, which offer opportunities for hiking, skiing, and enjoying panoramic views of snow-capped mountains. The region of Tyrol, with its charming alpine villages and world-class ski resorts such as Kitzbühel and St. Anton, attracts winter sports enthusiasts from around the globe. The Salzkammergut region, known for its crystal-clear lakes and picturesque landscapes, including Hallstatt and Wolfgangsee, offers a tranquil retreat for nature lovers and outdoor enthusiasts. Additionally, the iconic Grossglockner High Alpine Road provides a scenic drive through the heart of the Austrian Alps, showcasing breathtaking vistas and alpine flora and fauna.

Vienna, the capital city of Austria, is a cultural treasure trove. Known as the "City of Music," Vienna has a rich musical heritage, with renowned composers such as Mozart, Beethoven, and Strauss having called it home. Visitors can explore the historic center, including the opulent Schönbrunn Palace, the grand Vienna State Opera, and the iconic St. Stephen\'s Cathedral. Another must-visit location is Salzburg, birthplace of Wolfgang Amadeus Mozart and the setting for the famous movie "The Sound of Music.\" Salzburg enchants visitors with its baroque architecture, charming old town, and the imposing Hohensalzburg Fortress. Innsbruck, nestled in the heart of the Alps, offers a unique combination of urban sophistication and alpine beauty, with attractions such as the Golden Roof and the Bergisel Ski Jump.

Visiting Austria is a delight for history, music, and art enthusiasts. The country\'s rich cultural heritage is evident in its numerous museums, galleries, and historic sites. From exploring the imperial palaces and museums in Vienna to immersing oneself in the Baroque splendor of Salzburg\'s old town, Austria offers a glimpse into its fascinating past. Beyond its cultural offerings, Austria is renowned for its warm hospitality, world-class cuisine, and charming coffee houses, where you can savor delicious pastries and experience the relaxed Austrian way of life.

In summary, Austria is a captivating country that captivates visitors with its stunning Alpine landscapes, historic cities, and rich cultural heritage. Whether you\'re exploring the charming streets of Vienna, skiing down the slopes of the Austrian Alps, or immersing yourself in the cultural delights of Salzburg, Austria offers a diverse range of experiences. With its blend of natural beauty, architectural treasures, and a thriving arts scene, Austria is a must-visit destination for travelers seeking a perfect combination of history, culture, and scenic landscapes.
            ',
                'currency' => 'Euro',
                'language' => 'German',
                'atm' => 'ATMs are widely available in cities and towns, and credit cards are accepted in most establishments.',
                'mobilePhone' => 'Prepaid SIM cards are widely available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 14,
            ],
            [
                'countryCode' => 'AZ',
                'countryName' => 'Azerbaijan',
                'regionCode' => 'ASIA',
                'capital' => 'Baku',
                'shortDescription' => '
            Azerbaijan, located at the crossroads of Europe and Asia, is a hidden gem that offers a unique blend of ancient history, vibrant culture, and stunning natural landscapes. The capital city of Baku showcases a juxtaposition of modern architecture and UNESCO-listed medieval old town, providing a captivating mix of old and new. Visitors can explore ancient historical sites like the UNESCO-recognized Gobustan Rock Art Cultural Landscape and the historic city of Sheki with its impressive Khan\'s Palace. Azerbaijan is also home to the beautiful landscapes of the Caucasus Mountains, offering opportunities for hiking, skiing, and breathtaking views. The country\'s rich culinary traditions, highlighted by dishes like plov and dolma, provide a delightful gastronomic experience. Whether it\'s exploring the country\'s fascinating history, indulging in culinary delights, or immersing oneself in the natural beauty, Azerbaijan offers a unique and rewarding travel experience.
            ',
                'longDescription' => 'Azerbaijan is a country located at the crossroads of Eastern Europe and Western Asia. It offers a unique blend of ancient historical sites, modern architecture, and natural beauty, including the Caspian Sea coastline and the Caucasus Mountains.',
                'currency' => 'Azerbaijani manat',
                'language' => 'Azerbaijani',
                'atm' => 'ATMs are available in major cities, and credit cards are accepted in some establishments.',
                'mobilePhone' => 'Prepaid SIM cards are widely available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 15,
            ],
            [
                'countryCode' => 'BS',
                'countryName' => 'Bahamas',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Nassau',
                'shortDescription' => '
            The Bahamas, a tropical paradise in the Caribbean, is renowned for its pristine white-sand beaches, crystal-clear turquoise waters, and vibrant coral reefs. Comprising over 700 islands and cays, it offers endless opportunities for swimming, snorkeling, diving, and water sports. Visitors can explore the vibrant capital city of Nassau with its colonial architecture and bustling markets, or relax on the serene beaches of the Out Islands like Exuma and Harbour Island. The Bahamas is also a haven for boating enthusiasts, with numerous marinas and sailing opportunities. Additionally, the rich cultural heritage of the Bahamas, influenced by African, British, and American traditions, can be experienced through local music, art, and delicious Bahamian cuisine. Whether seeking relaxation, adventure, or a tropical escape, the Bahamas is a dream destination that caters to all types of travelers.
            ',
                'longDescription' => '
The Bahamas, located in the Atlantic Ocean, is an archipelago consisting of over 700 islands and cays. It is famous for its stunning white sandy beaches, crystal-clear turquoise waters, and vibrant marine life. The country offers a tropical paradise for travelers, with a perfect blend of relaxation, water sports, and island exploration.

The Bahamas is renowned for its world-class beaches, attracting visitors from around the world. From the famous Cable Beach in Nassau to the secluded pink sand beaches of Harbour Island and the Exumas, each island offers its own unique beach experience. Snorkeling and diving enthusiasts will be captivated by the vibrant coral reefs teeming with colorful fish, as well as the opportunity to swim with majestic marine creatures such as dolphins and sea turtles. The Exumas, in particular, is a hotspot for swimming with friendly pigs in the crystal-clear waters.

Nassau, the capital city of the Bahamas, is a vibrant hub of culture and history. Visitors can explore the charming pastel-colored colonial buildings of downtown Nassau, visit the historic Fort Charlotte, or stroll through the vibrant Straw Market for local crafts and souvenirs. Paradise Island, just across the bridge from Nassau, is famous for its luxurious resorts, including the iconic Atlantis Paradise Island, which offers a wide range of amenities and attractions such as water parks, marine exhibits, and a casino.

For those seeking a more tranquil island experience, the Out Islands of the Bahamas, such as the Exumas, the Abacos, and the Andros Island, provide a serene escape from the bustling tourist areas. The Exumas, with its secluded cays and breathtaking natural beauty, offer opportunities for boating, kayaking, and exploring the famous Thunderball Grotto, a stunning underwater cave system featured in James Bond films. The Abacos, known for their charming colonial towns and world-class sailing, provide a relaxed atmosphere and pristine beaches. Andros Island, the largest of the Bahamas\' islands, is a nature lover\'s paradise, offering opportunities for bird-watching, fishing, and exploring the vast Andros Barrier Reef.

Visiting the Bahamas is an invitation to indulge in the beauty of nature, relax on stunning beaches, and immerse yourself in the vibrant culture of the islands. Whether you\'re seeking adventure in the underwater world, pampering at luxury resorts, or simply unwinding on secluded beaches, the Bahamas has something for everyone. With its warm tropical climate, friendly locals, and breathtaking scenery, the Bahamas is a destination that promises a memorable and rejuvenating experience.
            ',
                'currency' => 'Bahamian dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '120V, 240V',
                'active' => true,
                'sortOrder' => 16,
            ],
            [
                'countryCode' => 'BH',
                'countryName' => 'Bahrain',
                'regionCode' => 'ASIA',
                'capital' => 'Manama',
                'shortDescription' => '
            Bahrain, a small island nation in the Arabian Gulf, is a captivating destination known for its rich history, vibrant culture, and stunning architecture. The capital city of Manama offers a unique blend of traditional Arabian charm and modernity, with its bustling souks, impressive mosques, and skyscrapers. Visitors can explore ancient archaeological sites like the Bahrain Fort and the Qal\'at al-Bahrain, a UNESCO World Heritage site. The country is also renowned for its Formula 1 Grand Prix circuit and hosts various international events. Bahrain\'s coastal areas provide opportunities for water sports, while its vibrant dining scene allows visitors to savor delicious Middle Eastern cuisine. Whether it\'s diving into history, immersing in cultural experiences, or enjoying modern attractions, Bahrain offers a captivating and diverse travel experience.
            ',
                'longDescription' => '
            Bahrain, a small island country located in the Persian Gulf, is known for its rich history, vibrant culture, and stunning modern architecture. As an archipelago of 33 islands, Bahrain offers a unique blend of ancient traditions and contemporary attractions, making it a fascinating destination for travelers.

Bahrain is famous for its historical sites and archaeological wonders. The Bahrain Fort, also known as Qal\'at al-Bahrain, is a UNESCO World Heritage Site that dates back over 4,000 years. It offers a glimpse into the country\'s ancient past and showcases the strategic importance of Bahrain throughout history. Another prominent attraction is the Bahrain National Museum, which showcases Bahrain\'s heritage, art, and culture through its exhibits. The traditional markets, or souks, such as the Manama Souq, provide visitors with a chance to immerse themselves in the local atmosphere, shop for handicrafts, spices, and traditional goods.

Manama, the capital city of Bahrain, is a bustling metropolis that combines modernity with Arabian charm. The city\'s skyline is adorned with towering skyscrapers, including the iconic Bahrain World Trade Center, which features wind turbines integrated into its design. Manama is a shopper\'s paradise, with modern malls and luxury boutiques offering a wide range of international brands. The city also boasts a vibrant food scene, with a variety of restaurants and cafes serving both traditional Bahraini cuisine and international flavors.

Bahrain\'s coastline is another highlight, with beautiful beaches and clear turquoise waters. Al Jazayer Beach, located on the eastern coast, is a popular spot for sunbathing, swimming, and water sports. The beach also offers stunning views of the nearby Hawar Islands, a group of islands known for their pristine beaches and diverse marine life. For a unique experience, visitors can take a boat trip to the Hawar Islands and enjoy snorkeling, diving, and bird-watching.

Visiting Bahrain provides an opportunity to explore a country that seamlessly blends ancient heritage with modern developments. The warm hospitality of the Bahraini people, the intriguing historical sites, and the vibrant cultural scene make it an enticing destination for travelers. Whether you\'re interested in exploring archaeological sites, indulging in shopping and dining experiences, or simply relaxing on beautiful beaches, Bahrain offers a diverse range of experiences that are sure to leave a lasting impression.
            ',
                'currency' => 'Bahraini dinar',
                'language' => 'Arabic',
                'atm' => 'ATMs are widely available in cities and towns, and credit cards are accepted in most establishments.',
                'mobilePhone' => 'Mobile phone coverage is extensive across the country.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 17,
            ],
            [
                'countryCode' => 'BD',
                'countryName' => 'Bangladesh',
                'regionCode' => 'ASIA',
                'capital' => 'Dhaka',
                'shortDescription' => '
            Bangladesh, a country in South Asia, is a land of natural beauty, vibrant culture, and warm hospitality. With its lush green landscapes, including the world\'s largest mangrove forest, the Sundarbans, and the serene beauty of the Cox\'s Bazar beach, it offers stunning natural attractions. Visitors can explore ancient archaeological sites like the historic ruins of Paharpur and the Sixty Dome Mosque, both UNESCO World Heritage sites. The country\'s bustling capital city, Dhaka, showcases a mix of modern development and traditional charm, with its bustling markets, vibrant street food scene, and historic landmarks. Bangladesh is also known for its colorful festivals, such as Pohela Boishakh (Bengali New Year) and Durga Puja, which offer a glimpse into its rich cultural heritage. Whether it\'s experiencing natural wonders, immersing in cultural festivities, or connecting with friendly locals, Bangladesh offers a unique and authentic travel experience.
            ',
                'longDescription' => '
Bangladesh, located in South Asia, is a country known for its vibrant culture, natural beauty, and historical heritage. Nestled between India and Myanmar, Bangladesh is home to lush green landscapes, winding rivers, bustling cities, and a warm and welcoming population. With its diverse attractions and unique experiences, Bangladesh offers a captivating travel destination.

One of the main highlights of Bangladesh is its extensive river system, including the famous Ganges and Brahmaputra rivers. The country is often referred to as the "land of rivers," and exploring the riverine landscapes is a must-do activity. Visitors can take boat rides along the rivers, witnessing the rural beauty, traditional fishing techniques, and riverbank life. The Sundarbans, the largest mangrove forest in the world, is another natural wonder in Bangladesh. It is a UNESCO World Heritage Site and home to the Royal Bengal Tigers, making it a popular destination for wildlife enthusiasts.

Dhaka, the capital city, is a vibrant metropolis that showcases a blend of modernity and history. The city offers a bustling street life, colorful markets, and a rich culinary scene. The historic Old Dhaka area is a treasure trove of heritage sites, including the Lalbagh Fort, Ahsan Manzil (Pink Palace), and the centuries-old Armenian Church. Cox\'s Bazar, the world\'s longest natural sandy beach, attracts tourists with its pristine shoreline and breathtaking sunsets. It is an ideal place for relaxation, water sports, and enjoying fresh seafood.

Another must-visit location is Sylhet, known for its scenic tea gardens, rolling hills, and lush green landscapes. The region is famous for its abundance of tea plantations, and visitors can take tea estate tours, witnessing the tea-making process and enjoying panoramic views of the surrounding hills. Sylhet is also home to the beautiful Ratargul Swamp Forest, a unique freshwater swamp forest that becomes submerged during the monsoon season, offering a surreal and enchanting experience.

People should visit Bangladesh to immerse themselves in its rich cultural heritage, explore its natural wonders, and experience the warm hospitality of its people. The country offers a unique blend of traditional and modern attractions, allowing visitors to witness the simplicity of rural life and the vibrancy of urban cities. From the bustling markets and mouthwatering street food to the serene beauty of its countryside and the historical sites steeped in history, Bangladesh has something to offer every traveler seeking an off-the-beaten-path destination.
            ',
                'currency' => 'Bangladeshi taka',
                'language' => 'Bengali',
                'atm' => 'ATMs are available in major cities, and credit cards are accepted in some establishments.',
                'mobilePhone' => 'Prepaid SIM cards are widely available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 18,
            ],
            [
                'countryCode' => 'BB',
                'countryName' => 'Barbados',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Bridgetown',
                'shortDescription' => '
            Barbados, an island paradise in the Caribbean, is a popular travel destination known for its stunning beaches, warm climate, and vibrant culture. With its powdery white sands and crystal-clear turquoise waters, it offers a perfect setting for swimming, snorkeling, and water sports. The island also boasts a rich history, reflected in its colonial architecture and UNESCO-listed capital city of Bridgetown. Visitors can explore picturesque plantation houses, visit historic sites like the Garrison Savannah, and indulge in the island\'s renowned rum distilleries. Barbados is also famous for its lively festivals, including Crop Over, a vibrant celebration of music, dance, and Bajan culture. With its natural beauty, cultural heritage, and friendly locals, Barbados provides an unforgettable Caribbean experience for all types of travelers.
            ',
                'longDescription' => '
Barbados, located in the eastern Caribbean, is a tropical paradise known for its stunning beaches, crystal-clear turquoise waters, and vibrant culture. This small island nation offers a perfect blend of relaxation, adventure, and rich history. Barbados is famous for its warm climate, friendly locals, and diverse range of attractions, making it a popular destination for travelers from around the world.

The beautiful beaches of Barbados are a major draw for tourists. With powdery white sands and calm azure waters, the island boasts some of the most breathtaking coastal landscapes in the Caribbean. Popular beach areas include the vibrant and lively Crane Beach, the serene and picturesque Carlisle Bay, and the secluded and pristine Bottom Bay. Whether you\'re looking to sunbathe, swim, snorkel, or engage in water sports like surfing and paddleboarding, Barbados offers a beach experience for everyone.

Bridgetown, the capital city of Barbados, is a UNESCO World Heritage Site and a vibrant hub of history, culture, and shopping. Visitors can explore historic sites such as the impressive Parliament Buildings, the historic Garrison area, and the iconic statue of Lord Nelson. The city also offers a bustling market scene at the Cheapside Market and Pelican Craft Centre, where you can find local crafts, souvenirs, and delicious street food. Bridgetown provides a fascinating blend of colonial charm and modern attractions.

For nature lovers, a visit to Harrison\'s Cave is a must. Located in the central uplands of the island, this natural wonder features an extensive underground cave system with stunning limestone formations and crystal-clear streams. Visitors can take guided tram tours through the caves, marveling at the stalactites and stalagmites while learning about the geological history of the island.

People should visit Barbados for its idyllic beaches, warm and welcoming culture, and diverse range of experiences. Whether you\'re seeking relaxation on the pristine sands, exploring the vibrant local markets, indulging in delicious Caribbean cuisine, or immersing yourself in the island\'s rich history and natural wonders, Barbados has it all. The island\'s charm, natural beauty, and vibrant atmosphere make it an unforgettable destination that caters to all types of travelers.
            ',
                'currency' => 'Barbadian dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '115V, 230V',
                'active' => true,
                'sortOrder' => 19,
            ],
            [
                'countryCode' => 'BY',
                'countryName' => 'Belarus',
                'regionCode' => 'EUROPE',
                'capital' => 'Minsk',
                'shortDescription' => '
            Belarus, located in Eastern Europe, is a country with a rich history, charming architecture, and stunning natural landscapes. Visitors to Belarus can explore the capital city of Minsk, known for its Soviet-era architecture, vibrant cultural scene, and intriguing museums. The country is home to several UNESCO World Heritage sites, including the historic city of Hrodna and the medieval Mir Castle Complex. Nature enthusiasts can venture to the serene landscapes of the Belovezhskaya Pushcha National Park, one of Europe\'s oldest and largest primeval forests. Belarus also offers a warm and welcoming atmosphere, affordable prices, and a chance to experience traditional Belarusian cuisine and hospitality. Whether it\'s discovering its historical heritage, immersing in nature, or connecting with its friendly locals, Belarus provides a unique and authentic travel experience in Eastern Europe.
            ',
                'longDescription' => '
            Belarus, located in Eastern Europe, is a landlocked country known for its rich history, charming cities, and unspoiled natural beauty. Bordered by Russia, Ukraine, Poland, Lithuania, and Latvia, Belarus offers a unique travel experience that combines a glimpse into its Soviet past with its picturesque landscapes and warm hospitality. The country is famous for its well-preserved medieval castles, serene countryside, and fascinating cultural heritage.

One of the top locations to visit in Belarus is Minsk, the capital city. Minsk is a modern metropolis that beautifully blends its Soviet-era architecture with contemporary developments. Visitors can explore the historic Independence Square, visit the impressive National Library, and stroll along the charming streets of the Old Town. Minsk also offers a vibrant cultural scene, with theaters, museums, and art galleries showcasing the country\'s artistic talents.

Another must-visit destination in Belarus is Brest, a city steeped in history. Brest is home to the Brest Fortress, a symbol of Soviet resistance during World War II. The fortress serves as a memorial and museum, providing a poignant and educational experience. Additionally, Brest boasts beautiful parks and gardens, such as the Gogolya Park and the Brest Millennium Park, where visitors can enjoy peaceful walks and outdoor activities.

For nature enthusiasts, the Belovezhskaya Pushcha National Park is a highlight of Belarus. This UNESCO World Heritage site is one of the last and largest remaining parts of the primeval forest that once covered much of Europe. The park is home to the rare European bison, along with a diverse array of flora and fauna. Visitors can explore the park through hiking trails, guided tours, and wildlife observation, immersing themselves in the pristine beauty of nature.

People should visit Belarus to experience its unique blend of history, nature, and culture. The country offers a glimpse into its Soviet past, with well-preserved architecture and fascinating museums. At the same time, visitors can enjoy the tranquility of its countryside, with its lush forests, picturesque lakes, and charming rural villages. The warmth and hospitality of the Belarusian people add to the appeal, making it a welcoming and enriching destination for travelers seeking an authentic and off-the-beaten-path experience in Eastern Europe.
            ',
                'currency' => 'Belarusian ruble',
                'language' => 'Belarusian, Russian',
                'atm' => 'ATMs are available in major cities, and credit cards are accepted in some establishments.',
                'mobilePhone' => 'Prepaid SIM cards are widely available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 20,
            ],
            [
                'countryCode' => 'BE',
                'countryName' => 'Belgium',
                'regionCode' => 'EUROPE',
                'capital' => 'Brussels',
                'shortDescription' => '
            Belgium, located in Western Europe, is a charming and diverse country known for its rich history, cultural treasures, and culinary delights. Visitors to Belgium can explore the medieval city of Bruges, with its picturesque canals and well-preserved architecture, or the vibrant capital city of Brussels, home to iconic landmarks like the Atomium and the Grand Place. Belgium is also renowned for its world-class chocolates, waffles, and beers, making it a paradise for food lovers. The country boasts numerous historical sites, including castles, cathedrals, and battlefields, offering a glimpse into its fascinating past. With its welcoming atmosphere, artistic heritage, and delicious gastronomy, Belgium is a must-visit destination for those seeking a delightful blend of history, culture, and culinary delights.
            ',
                'longDescription' => '
Belgium, located in Western Europe, is a small yet culturally rich country known for its historic cities, medieval architecture, and mouthwatering cuisine. Situated between France, Germany, the Netherlands, and Luxembourg, Belgium offers a fascinating mix of influences and a vibrant travel experience. The country is famous for its chocolate, waffles, beer, and exquisite art, making it a haven for foodies, history enthusiasts, and art lovers alike.

One of the top locations to visit in Belgium is Brussels, the capital city and a cosmopolitan hub. Brussels is renowned for its stunning architecture, including the iconic Atomium and the Grand Palace, which is a UNESCO World Heritage site. The city also boasts numerous museums, such as the Royal Museums of Fine Arts and the Museum of Comic Art, showcasing Belgium\'s artistic heritage. Additionally, Brussels is known as the political center of the European Union, adding an international flair to its atmosphere.

Another must-visit destination in Belgium is Bruges, often referred to as the "Venice of the North." This charming medieval city is a UNESCO World Heritage site and is famous for its well-preserved historic center, picturesque canals, and romantic ambiance. Visitors can take leisurely boat rides along the canals, explore the cobblestone streets lined with colorful houses, and visit landmarks like the Belfry Tower and the Basilica of the Holy Blood. Bruges also offers a delectable culinary scene, with its chocolate shops and local delicacies.

Ghent is another captivating city in Belgium that attracts visitors with its rich history and vibrant atmosphere. Known for its medieval architecture and beautiful canals, Ghent offers a unique blend of old-world charm and modern energy. The city is home to stunning landmarks, such as the Saint Bavo\'s Cathedral, the Gravensteen Castle, and the picturesque Graslei waterfront. Ghent also hosts various cultural events and festivals throughout the year, adding a dynamic and lively character to the city.

People should visit Belgium to immerse themselves in its rich cultural heritage, indulge in its culinary delights, and explore its captivating cities. From wandering through the charming streets of Bruges to savoring world-class chocolates in Brussels, Belgium offers a unique and delightful experience. The country\s compact size makes it easy to explore multiple cities and regions, each with its own distinctive character. Whether it\'s admiring the masterpieces of Flemish art, sampling the diverse beer varieties, or simply enjoying the warm hospitality of the Belgians, a trip to Belgium is sure to leave visitors with unforgettable memories.
            ',
                'currency' => 'Euro',
                'language' => 'Dutch, French, German',
                'atm' => 'ATMs are widely available in cities and towns, and credit cards are accepted in most establishments.',
                'mobilePhone' => 'Prepaid SIM cards are widely available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 21,
            ],
            [
                'countryCode' => 'BZ',
                'countryName' => 'Belize',
                'regionCode' => 'CENTRAL_AMERICA',
                'capital' => 'Belmopan',
                'shortDescription' => '
            Belize, located in Central America, is a tropical paradise that offers a wealth of natural wonders and cultural experiences. The country is renowned for its stunning barrier reef, the second-largest in the world, making it a haven for snorkelers and divers. Visitors can explore the lush jungles of Belize, home to ancient Mayan ruins like Xunantunich and Caracol. The country\'s diverse ecosystems provide opportunities for wildlife encounters, cave exploration, and exhilarating zip-lining adventures. Belize is also known for its warm and friendly people, vibrant Caribbean culture, and delicious cuisine influenced by Mayan, Creole, and Garifuna traditions. Whether it\'s exploring ancient ruins, diving into crystal-clear waters, or immersing in the laid-back Caribbean vibes, Belize offers an unforgettable tropical escape for adventurers and nature lovers alike.
            ',
                'longDescription' => '
Belize is a captivating country located in Central America, bordered by Mexico to the north and Guatemala to the west and south. With its stunning natural beauty and rich cultural heritage, Belize has become a popular destination for travelers seeking adventure, relaxation, and exploration. The country is famous for its pristine Caribbean coastline, vibrant coral reefs, lush tropical rainforests, and ancient Mayan ruins, offering a diverse range of experiences for visitors.

    Top 3 locations to visit in Belize:
        Ambergris Caye: This picturesque island is the largest in Belize and a hotspot for beach lovers and water sports enthusiasts. Its crystal-clear turquoise waters are perfect for snorkeling, diving, and fishing, while the charming town of San Pedro offers a lively atmosphere with its vibrant restaurants, bars, and shops.
        Belize Barrier Reef: As one of the most impressive coral reef systems in the world, the Belize Barrier Reef is a UNESCO World Heritage Site and a paradise for divers and snorkelers. Explore its breathtaking underwater landscapes, swim alongside colorful marine life, and discover the famous Great Blue Hole, a natural wonder that attracts divers from around the globe.
       Cayo District: Located in western Belize, the Cayo District is an adventurer\'s playground. Here you can embark on thrilling activities such as cave exploration, zip-lining through the rainforest, and hiking to ancient Mayan ruins like Caracol and Xunantunich. The district is also home to the charming town of San Ignacio, where you can experience the local culture and indulge in delicious Belizean cuisine.

    People should visit Belize to immerse themselves in its awe-inspiring natural landscapes and rich cultural heritage. Whether it\'s snorkeling among colorful coral reefs, swimming with gentle nurse sharks and stingrays, exploring ancient Mayan ruins hidden in the jungle, or indulging in the warm hospitality of the locals, Belize offers a truly unforgettable experience. The country\'s commitment to conservation and ecotourism ensures that visitors can appreciate its natural wonders while preserving its delicate ecosystems. From thrilling adventures to tranquil beach getaways, Belize has something for every traveler seeking a unique and authentic Central American experience.
            ',
                'currency' => 'Belize dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '110V, 220V',
                'active' => true,
                'sortOrder' => 22,
            ],
            [
                'countryCode' => 'BJ',
                'countryName' => 'Benin',
                'regionCode' => 'AFRICA',
                'capital' => 'Porto-Novo',
                'shortDescription' => '
            Benin, located in West Africa, is a fascinating country with a rich cultural heritage and diverse landscapes. Visitors to Benin can explore the historical city of Ouidah, known for its role in the transatlantic slave trade and its vibrant Voodoo culture. The country is also home to the Royal Palaces of Abomey, a UNESCO World Heritage site that showcases the ancient Dahomey kingdom. Nature enthusiasts can venture to the Pendjari National Park, known for its diverse wildlife, including elephants, lions, and hippos. Benin offers a warm and welcoming atmosphere, traditional music and dance performances, and a chance to experience the vibrant markets and delicious local cuisine. With its unique blend of history, culture, and natural beauty, Benin offers an enriching and authentic travel experience in West Africa.
            ',
                'longDescription' => '
Benin is a captivating country located in West Africa, bordered by Togo to the west, Nigeria to the east, Burkina Faso and Niger to the north, and the Atlantic Ocean to the south. Known for its rich history, vibrant culture, and diverse landscapes, Benin offers a unique and off-the-beaten-path travel experience. The country is famous for its connection to the ancient kingdom of Dahomey, which has left a lasting legacy in the form of impressive palaces, temples, and traditional rituals. Travelers to Benin can explore its bustling markets, delve into its intriguing history, and immerse themselves in the warmth and hospitality of the Beninese people.

    Top 3 locations to visit in Benin:
        Cotonou: As the largest city and economic capital of Benin, Cotonou offers a vibrant mix of traditional African culture and modern urban life. Visit the bustling Dantokpa Market, stroll along the beautiful Fidjrosse Beach, and explore the vibrant neighborhoods like Ganhi and Haie Vive.
        Ouidah: Known as the spiritual capital of Benin, Ouidah is a significant historical and cultural destination. Explore the Route des Esclaves (Slave Route), visit the renowned Python Temple, and witness the spectacular Voodoo Festival held every year in January.
        Abomey: This city holds great historical importance as it was the capital of the Dahomey Kingdom. Visit the Royal Palaces of Abomey, a UNESCO World Heritage Site, to learn about the kingdom\'s fascinating history and admire the impressive architecture and artifacts.

    People should visit Benin to experience its rich cultural heritage, vibrant traditions, and diverse landscapes. From exploring ancient palaces and museums that showcase the country\'s history to witnessing traditional Voodoo ceremonies and festivals, Benin offers a unique cultural immersion. Nature enthusiasts can venture into the beautiful Pendjari National Park, known for its diverse wildlife including elephants, lions, and hippos. The country\'s warm climate, beautiful beaches, and delicious cuisine further add to the allure of visiting Benin. Discover the hidden gems of West Africa and embrace the authentic experiences that await in this enchanting country.
            ',
                'currency' => 'West African CFA franc',
                'language' => 'French',
                'atm' => 'ATMs are available in major cities, and credit cards are accepted in some establishments.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 23,
            ],
            [
                'countryCode' => 'BM',
                'countryName' => 'Bermuda',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Hamilton',
                'shortDescription' => '
            Bermuda, a British Overseas Territory in the North Atlantic Ocean, is a captivating island destination known for its pink sandy beaches, crystal-clear turquoise waters, and vibrant culture. Visitors to Bermuda can indulge in a range of water activities such as swimming, snorkeling, and diving in the pristine reefs. The island is also famous for its shipwrecks, offering excellent opportunities for underwater exploration. With its charming pastel-colored houses, picturesque landscapes, and stunning cliffside views, Bermuda provides a perfect setting for relaxation and romantic getaways. Visitors can explore historic sites like the UNESCO-listed St. George\'s Town and enjoy the island\'s vibrant music and culinary scene. Whether it\'s soaking up the sun on the beautiful beaches, diving into vibrant marine life, or immersing in the island\'s rich history and culture, Bermuda offers a memorable and idyllic escape for travelers.
            ',
                'longDescription' => '
Bermuda, located in the North Atlantic Ocean, is a British Overseas Territory known for its stunning pink sandy beaches, crystal-clear turquoise waters, and charming island atmosphere. Despite its name, Bermuda is not actually part of the Caribbean but lies closer to the eastern coast of the United States. Famous for its distinctive blend of British and island cultures, Bermuda offers a delightful escape for travelers seeking a mix of relaxation, outdoor adventures, and rich history. The island is renowned for its pastel-colored houses, lush gardens, and vibrant coral reefs, making it a paradise for beach lovers and water sports enthusiasts.

    Top 3 locations to visit in Bermuda:
        Hamilton: The capital city of Bermuda, Hamilton, is a vibrant hub filled with colonial charm and modern amenities. Explore its picturesque streets lined with pastel-colored buildings, dine at waterfront restaurants, and shop at boutique stores. Don\'t miss a visit to the Bermuda Underwater Exploration Institute to learn about the island\'s marine life and maritime history.
        St. George\'s: As a UNESCO World Heritage Site, St. George\'s is a historic town brimming with captivating architecture and fascinating stories. Walk along its narrow streets, visit St. Peter\'s Church, the oldest Anglican church in the Western Hemisphere, and explore the historic forts such as Fort St. Catherine.
        Horseshoe Bay Beach: This world-famous beach is a true gem of Bermuda, known for its iconic pink sands and breathtakingly clear waters. Relax on the soft sand, swim in the turquoise sea, and snorkel around the nearby coral reefs to discover a colorful underwater world.

    People should visit Bermuda to experience its pristine beaches, indulge in water activities such as snorkeling and diving, and immerse themselves in the island\'s rich history and culture. Whether it\'s exploring the centuries-old forts, visiting museums, or enjoying the lively festivals and events, Bermuda offers a perfect blend of relaxation and adventure. The island\'s natural beauty, from its vibrant marine life to its stunning landscapes, provides ample opportunities for outdoor exploration and scenic walks. Additionally, Bermuda is known for its world-class golf courses, luxury resorts, and warm hospitality, making it an ideal destination for a memorable vacation in the Atlantic.
            ',
                'currency' => 'Bermudian dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '120V',
                'active' => true,
                'sortOrder' => 24,
            ],
            [
                'countryCode' => 'BT',
                'countryName' => 'Bhutan',
                'regionCode' => 'ASIA',
                'capital' => 'Thimphu',
                'shortDescription' => '
            Bhutan, nestled in the Himalayas, is a land of breathtaking landscapes, rich cultural heritage, and a unique approach to measuring national happiness. Visitors to Bhutan can explore its ancient monasteries, such as the iconic Tiger\'s Nest (Paro Taktsang), perched precariously on a cliffside. The country\'s commitment to preserving its natural environment is evident in its pristine national parks and stunning valleys, including the picturesque Phobjikha Valley, home to endangered black-necked cranes. Bhutan offers opportunities for hiking, trekking, and experiencing traditional Bhutanese festivals, where locals showcase their vibrant costumes, music, and dance. The country\'s focus on sustainable tourism and the well-being of its people make Bhutan an extraordinary destination for those seeking a deeply enriching and authentic cultural experience in the lap of the Himalayas.
            ',
                'longDescription' => '
Bhutan, located in the eastern Himalayas, is a landlocked country known for its majestic mountains, rich cultural heritage, and commitment to Gross National Happiness. Tucked between India and China, Bhutan offers a unique travel experience with its pristine landscapes, ancient Buddhist monasteries, and traditional way of life. The country is famous for its policy of prioritizing the well-being and happiness of its citizens, making it a haven for those seeking tranquility, spiritual enlightenment, and a deep connection with nature. With its emphasis on sustainable tourism and preservation of its cultural identity, Bhutan provides a truly immersive and unforgettable travel experience.

    Top 3 locations to visit in Bhutan:
       Thimphu: The capital city of Bhutan, Thimphu, is a blend of ancient traditions and modern development. Explore the iconic Tashichho Dzong, visit the National Memorial Chorten, and immerse yourself in Bhutanese art and culture at the Folk Heritage Museum. Don\'t miss the opportunity to witness the colorful traditional festivals that take place throughout the year.
        Paro: Nestled in a scenic valley, Paro is home to Bhutan\'s most famous landmark, the Taktsang Monastery, also known as the Tiger\'s Nest. This sacred site clings to the side of a cliff and offers breathtaking views. Explore the Paro Dzong, visit the National Museum, and hike to the Kyichu Lhakhang, one of Bhutan\'s oldest and holiest temples.
        Punakha: Located at the confluence of two rivers, Punakha is renowned for its beautiful Punakha Dzong, a stunning example of Bhutanese architecture. Take a leisurely walk across the longest suspension bridge in Bhutan, visit the Chimi Lhakhang fertility temple, and witness the vibrant Punakha Tshechu, a religious festival celebrated with masked dances and cultural performances.

    People should visit Bhutan to experience its untouched natural beauty, immerse themselves in its spiritual heritage, and witness the harmonious coexistence of tradition and progress. Bhutan\'s pristine landscapes, including snow-capped mountains, lush valleys, and pristine forests, offer a paradise for trekking, nature walks, and wildlife encounters. The country\'s commitment to preserving its cultural heritage is evident in its magnificent monasteries, intricate paintings, and vibrant festivals. By visiting Bhutan, travelers have the opportunity to embrace the Bhutanese way of life, gain insights into the philosophy of Gross National Happiness, and find inner peace amidst a serene and enchanting environment.
            ',
                'currency' => 'Bhutanese ngultrum',
                'language' => 'Dzongkha',
                'atm' => 'ATMs are available in major cities, and credit cards are accepted in some establishments.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 25,
            ],
            [
                'countryCode' => 'BO',
                'countryName' => 'Bolivia',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Sucre',
                'shortDescription' => '
            Bolivia, a landlocked country in South America, is a diverse and captivating destination offering stunning landscapes, indigenous culture, and ancient ruins. Visitors to Bolivia can explore the otherworldly salt flats of Salar de Uyuni, the largest salt flat in the world, and witness the breathtaking views of the colorful Laguna Colorada and the Eduardo Avaroa Andean Fauna National Reserve. The country is also home to the historic city of Sucre, a UNESCO World Heritage site, and the bustling metropolis of La Paz, known for its vibrant markets and rich cultural heritage. Bolivia\'s indigenous traditions and festivals, such as the vibrant Carnival of Oruro, provide a unique insight into its diverse cultural tapestry. Whether it\'s trekking in the majestic Andes, discovering ancient civilizations at Tiwanaku, or immersing in the authentic charm of Bolivian culture, Bolivia offers a truly extraordinary and adventurous travel experience.
            ',
                'longDescription' => '
Bolivia, located in the heart of South America, is a landlocked country known for its diverse landscapes, rich indigenous cultures, and fascinating history. It is bordered by Brazil to the north and east, Paraguay and Argentina to the south, and Chile and Peru to the west. Bolivia offers a truly unique travel experience with its rugged mountains, expansive salt flats, lush rainforests, and vibrant cities. It is famous for its captivating cultural traditions, such as the indigenous markets, traditional festivals, and the ancient ruins of the Inca civilization. Traveling through Bolivia provides an opportunity to immerse oneself in the authentic beauty of South America and explore its hidden gems.

    Top 3 locations to visit in Bolivia:
        Salar de Uyuni: This otherworldly salt flat is one of Bolivia\'s most iconic destinations. Stretching across a vast area, it transforms into a mirror-like surface after rainfall, creating stunning reflections of the sky. Visitors can explore the salt flats by 4x4 vehicles, visit the Incahuasi Island with its giant cacti, and witness the mesmerizing sunset over the endless white expanse.
        La Paz: Bolivia\'s capital city, located at a breathtaking altitude, offers a unique blend of traditional and modern attractions. Explore the lively Witches\' Market, visit the historic San Francisco Church, ride the thrilling cable cars, and experience the bustling street life. Take a day trip to the nearby Moon Valley, known for its unique rock formations, or embark on a journey to the high-altitude Lake Titicaca, the world\'s highest navigable lake.
        Sucre: Known as Bolivia\'s constitutional capital and a UNESCO World Heritage site, Sucre boasts well-preserved colonial architecture and a tranquil atmosphere. Explore the charming streets lined with whitewashed buildings, visit the historic Casa de la Libertad where Bolivia\'s independence was declared, and discover the indigenous culture at the colorful Tarabuco Market. Sucre is also a gateway to the nearby dinosaur footprints at Cal Orcko and the picturesque town of Potosi, known for its silver mines.

    People should visit Bolivia for its awe-inspiring landscapes, rich cultural heritage, and the opportunity to embark on unique adventures. From traversing the otherworldly salt flats of Salar de Uyuni to trekking through the Amazon rainforest, Bolivia offers a variety of outdoor activities and natural wonders. The country\'s indigenous cultures and traditions provide a glimpse into ancient civilizations and a chance to witness vibrant festivals and rituals. Bolivia\'s fascinating history, including its connection to the Inca Empire and the colonial era, adds depth to the travel experience. Whether it\'s exploring the colorful markets, hiking in the Andes, or delving into the cultural tapestry of its cities, Bolivia offers a captivating and enriching journey for all who visit.
            ',
                'currency' => 'Bolivian boliviano',
                'language' => 'Spanish, Quechua, Aymara',
                'atm' => 'ATMs are available in major cities, and credit cards are accepted in some establishments.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 26,
            ],
            [
                'countryCode' => 'BQ',
                'countryName' => 'Bonaire, Sint Eustatius and Saba',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Kralendijk',
                'shortDescription' => '
            Bonaire, Sint Eustatius, and Saba, collectively known as the Caribbean Netherlands, are three stunning islands located in the Caribbean Sea. Bonaire is famous for its world-class diving and snorkeling opportunities, with its pristine coral reefs and diverse marine life. Sint Eustatius, or Statia, is rich in historical heritage, boasting well-preserved colonial architecture and the Quill, an extinct volcano perfect for hiking. Saba, often referred to as the "Unspoiled Queen," offers lush rainforests, picturesque villages, and the opportunity to climb Mount Scenery, the highest point in the Dutch Kingdom. These islands provide a peaceful and laid-back atmosphere, ideal for nature lovers, adventure seekers, and those looking to escape the crowds. With their natural beauty, warm hospitality, and unique experiences, Bonaire, Sint Eustatius, and Saba are hidden gems in the Caribbean that offer an unforgettable getaway.
            ',
                'longDescription' => '
Bonaire, Sint Eustatius, and Saba, commonly known as the Caribbean Netherlands or the BES islands, are special municipalities of the Netherlands located in the Caribbean Sea. They are part of the Lesser Antilles, specifically the Leeward Islands, and are situated to the east of Aruba and Curaçao.

    Bonaire: Bonaire is the largest of the three islands and is renowned for its stunning coral reefs and vibrant marine life. It is a diver\'s paradise, offering world-class diving and snorkeling opportunities in its crystal-clear waters. The island is also known for its natural beauty, with picturesque landscapes, including the otherworldly Bonaire National Marine Park, Washington Slagbaai National Park, and the iconic pink salt flats of Pekelmeer.

    Sint Eustatius: Sint Eustatius, often referred to as Statia, is a small and tranquil island known for its historical significance. It played a crucial role in the colonial era and was once a major hub for trade in the Caribbean. Today, visitors can explore the well-preserved colonial architecture, visit Fort Oranje, and dive into the rich maritime history at the St. Eustatius Historical Foundation Museum. The island also offers hiking opportunities, stunning viewpoints, and serene beaches.

    Saba: Saba is a tiny volcanic island known for its dramatic landscapes and lush greenery. It is home to Mount Scenery, the highest point in the Dutch Kingdom, which offers breathtaking views from its summit. Saba is a haven for hikers and nature enthusiasts, with well-maintained trails that wind through rainforests, along rugged coastlines, and up the slopes of the volcano. The island is also famous for its diving sites, including the Saba Marine Park, which is teeming with marine biodiversity.

These islands offer a tranquil escape from the hustle and bustle of other Caribbean destinations. With their pristine nature, rich history, and warm hospitality, Bonaire, Sint Eustatius, and Saba provide a unique and off-the-beaten-path travel experience in the Caribbean.
            ',
                'currency' => 'United States dollar',
                'language' => 'Dutch, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '127V, 220V',
                'active' => true,
                'sortOrder' => 27,
            ],
            [
                'countryCode' => 'BA',
                'countryName' => 'Bosnia and Herzegovina',
                'regionCode' => 'EUROPE',
                'capital' => 'Sarajevo',
                'shortDescription' => '
            Bosnia and Herzegovina, located in the Balkans, is a country of stunning landscapes, rich history, and warm hospitality. Visitors to Bosnia and Herzegovina can explore the charming capital city of Sarajevo, with its mix of Ottoman, Austro-Hungarian, and Yugoslav influences. The country is also home to the historic town of Mostar, renowned for its iconic Stari Most (Old Bridge) and picturesque Old Town. Nature enthusiasts can venture to the beautiful national parks, such as Una National Park and Sutjeska National Park, offering opportunities for hiking, rafting, and wildlife spotting. Bosnia and Herzegovina\'s diverse cultural heritage, reflected in its traditional music, cuisine, and ancient landmarks, makes it a fascinating destination for history buffs and cultural enthusiasts. Whether it\'s exploring historical sites, enjoying outdoor adventures, or experiencing the warm hospitality of its people, Bosnia and Herzegovina offers a captivating and off-the-beaten-path travel experience in the heart of the Balkans.
            ',
                'longDescription' => '
Bosnia and Herzegovina, often referred to simply as Bosnia, is a country located in the Balkan Peninsula of Southeastern Europe. It is bordered by Croatia to the west, Serbia to the east, Montenegro to the southeast, and has a small coastline along the Adriatic Sea to the south.

Bosnia and Herzegovina is famous for its diverse cultural heritage, stunning natural landscapes, and rich history. The country is known for its mix of Ottoman, Austro-Hungarian, and Yugoslav influences, which can be seen in its architecture, cuisine, and traditions. Travelers are drawn to Bosnia for its unique blend of cultures, picturesque towns, and warm hospitality.

The country offers a range of attractions for visitors to explore. Sarajevo, the capital city, is a fascinating blend of East and West, where you can walk through the bustling Baščaršija district, visit historical sites like the Gazi Husrev-bey Mosque and the Latin Bridge, and learn about the city\'s tumultuous past. Mostar is another must-visit destination, famous for its iconic Stari Most (Old Bridge) that spans the Neretva River, along with its charming old town and Ottoman-era architecture.

Nature lovers will be captivated by the breathtaking beauty of Bosnia and Herzegovina\'s landscapes. The country is home to stunning national parks, such as Una National Park with its cascading waterfalls, and Sutjeska National Park, where you can find the impressive Maglić Mountain and the ancient Primeval Forest of Perućica. The picturesque village of Blagaj, with its stunning Dervish monastery situated beside a turquoise river spring, is another popular attraction.

Visiting Bosnia and Herzegovina offers a unique opportunity to immerse yourself in a culturally diverse and historically rich destination. Whether you\'re exploring its vibrant cities, admiring its natural wonders, or experiencing the warmth of its people, Bosnia and Herzegovina promises a memorable and enriching travel experience.
            ',
                'currency' => 'Bosnia and Herzegovina convertible mark',
                'language' => 'Bosnian, Croatian, Serbian',
                'atm' => 'ATMs are available in major cities, and credit cards are accepted in some establishments.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 28,
            ],
            [
                'countryCode' => 'BW',
                'countryName' => 'Botswana',
                'regionCode' => 'AFRICA',
                'capital' => 'Gaborone',
                'shortDescription' => '
            Botswana, in Southern Africa, is a paradise for wildlife enthusiasts. With its stunning landscapes and renowned national parks, such as the Okavango Delta and Chobe National Park, visitors can witness an abundance of diverse wildlife in their natural habitats, creating unforgettable safari experiences.
            ',
                'longDescription' => '
Botswana is a landlocked country located in Southern Africa, bordered by South Africa, Namibia, Zimbabwe, and Zambia. It is known for its vast and diverse wildlife, stunning natural landscapes, and rich cultural heritage, making it a popular destination for travelers seeking an authentic African experience.

One of the main attractions of Botswana is its wildlife and national parks. The country is home to the renowned Okavango Delta, a unique inland delta that supports a rich ecosystem and offers incredible wildlife viewing opportunities. Visitors can explore the delta by mokoro (traditional canoe) or take guided safari tours to spot a wide range of animals, including elephants, lions, giraffes, zebras, and various bird species. Chobe National Park is another must-visit location, famous for its large elephant herds and abundant game viewing along the Chobe River.

The Makgadikgadi Pans, a vast salt pan complex, is another highlight of Botswana. This surreal landscape transforms during the rainy season into a temporary oasis attracting an array of wildlife, including zebras, wildebeests, and flamingos. Visitors can embark on guided tours to explore the pans, enjoy cultural interactions with the local communities, and witness mesmerizing sunsets over the vast expanses.

Botswana\'s rich cultural heritage is also worth exploring. The country is home to several indigenous tribes, such as the San people, who have a deep connection with the land and maintain their traditional way of life. Travelers can engage in cultural experiences, including guided village visits, traditional dances, and learning about ancient customs and traditions.

In summary, Botswana offers a unique and authentic African travel experience. From the breathtaking beauty of the Okavango Delta and the wildlife-rich Chobe National Park to the mesmerizing landscapes of the Makgadikgadi Pans, the country captivates visitors with its natural wonders. Additionally, the opportunity to engage with the local communities and experience the rich cultural heritage adds depth to any journey in Botswana. Whether you are a nature lover, wildlife enthusiast, or cultural explorer, Botswana has something extraordinary to offer.
            ',
                'currency' => 'Botswana pula',
                'language' => 'English, Tswana',
                'atm' => 'ATMs are available in major cities, and credit cards are accepted in some establishments.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 29,
            ],
            [
                'countryCode' => 'BV',
                'countryName' => 'Bouvet Island',
                'regionCode' => 'ANTARCTICA',
                'capital' => '',
                'shortDescription' => '
            Bouvet Island, an uninhabited territory located in the South Atlantic Ocean, is a remote and desolate destination. While there are no human settlements or tourist facilities on the island, it appeals to adventurers and scientists interested in its untouched and pristine nature, including rugged terrain, glaciers, and abundant wildlife such as seals and seabirds.
            ',
                'longDescription' => '
Bouvet Island is a remote and uninhabited territory located in the South Atlantic Ocean. It is one of the most isolated places on Earth, lying about 1,600 kilometers (1,000 miles) southwest of the coast of Antarctica and over 2,500 kilometers (1,550 miles) south-southwest of South Africa. The island is known for its rugged and untouched natural beauty, making it a destination for adventurous travelers and researchers.

Bouvet Island is a volcanic island covered mostly by glaciers and surrounded by steep cliffs. It is characterized by its harsh and inhospitable environment, with strong winds, extreme cold, and difficult access. Due to its remote location and challenging conditions, visiting Bouvet Island is extremely rare and typically limited to scientific expeditions or specialized research purposes.

The island is part of the Norwegian dependency of Norway, and it is protected as a nature reserve. The surrounding waters of Bouvet Island are rich in marine life, including various species of seabirds and seals. The island itself is home to some hardy plant species and mosses that have adapted to survive in this harsh environment.

While tourism opportunities are virtually non-existent on Bouvet Island, its remote and untouched nature holds a certain fascination for those with a spirit of adventure and a love for extreme landscapes. The island\'s isolation and rugged beauty contribute to its allure, attracting researchers and explorers who are captivated by its unique and pristine environment.

In summary, Bouvet Island is a remote and uninhabited island located in the South Atlantic Ocean. Its untouched natural beauty, harsh environment, and extreme isolation make it a destination of curiosity for adventurous travelers and researchers. While tourism opportunities are extremely limited, the island\'s remoteness and rugged charm continue to captivate those who appreciate the raw and untouched wonders of nature.
            ',
                'currency' => 'Norwegian krone',
                'language' => 'Norwegian',
                'atm' => 'ATMs are not available, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are not available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 30,
            ],
            [
                'countryCode' => 'BR',
                'countryName' => 'Brazil',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Brasilia',
                'shortDescription' => '
            Brazil, located in South America, is a vibrant and diverse country known for its stunning natural beauty, lively cities, and rich cultural heritage. From the iconic Amazon rainforest and breathtaking Iguazu Falls to the world-famous beaches of Rio de Janeiro, Brazil offers a wide range of experiences for travelers seeking adventure, cultural immersion, and unforgettable landscapes.
            ',
                'longDescription' => '
Brazil is a vast and diverse country located in South America, spanning across almost half of the continent. It is the fifth largest country in the world both in terms of land area and population. Brazil is famous for its vibrant culture, stunning natural landscapes, and lively festivals, making it a popular destination for travelers from around the globe.

With its iconic Amazon Rainforest, Brazil boasts an incredible array of natural wonders. The Amazon is home to the world\'s largest tropical rainforest, teeming with rich biodiversity and offering unique opportunities for wildlife observation and eco-tourism. The country also boasts breathtaking waterfalls, such as the majestic Iguazu Falls, which straddle the border between Brazil and Argentina. In addition, Brazil is renowned for its beautiful beaches, including the famous Copacabana and Ipanema in Rio de Janeiro, attracting sun-seekers and surfers alike.

Brazil\'s cities are vibrant and diverse, each offering its own unique charm. Rio de Janeiro, known for its iconic Christ the Redeemer statue and annual Carnival celebration, captivates visitors with its stunning beaches, samba rhythms, and vibrant street life. São Paulo, the largest city in Brazil, is a bustling metropolis with a thriving cultural scene, renowned museums, and a vibrant culinary landscape. The historic city of Salvador da Bahia showcases Afro-Brazilian culture, with its colorful architecture, lively music, and rich cultural heritage.

People should visit Brazil for its unparalleled natural beauty, vibrant culture, and warm hospitality. Whether you are exploring the wonders of the Amazon Rainforest, dancing to the rhythms of samba in Rio de Janeiro, or immersing yourself in the diverse cultural heritage of Salvador, Brazil offers a truly immersive and unforgettable experience. From its stunning landscapes to its lively festivals, Brazil has something to offer every traveler seeking adventure, relaxation, and cultural enrichment.
            ',
                'currency' => 'Brazilian real',
                'language' => 'Portuguese',
                'atm' => 'ATMs are available in major cities, and credit cards are accepted in some establishments.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '127V, 220V',
                'active' => true,
                'sortOrder' => 31,
            ],
            [
                'countryCode' => 'IO',
                'countryName' => 'British Indian Ocean Territory',
                'regionCode' => 'AFRICA',
                'capital' => 'Diego Garcia',
                'shortDescription' => '
            The British Indian Ocean Territory, an overseas territory of the United Kingdom, is a remote and uninhabited archipelago in the Indian Ocean. While there are no tourist facilities or public access to the islands, the territory\'s pristine coral reefs, crystal-clear waters, and diverse marine life make it a potential destination for marine researchers and those interested in exploring the untouched beauty of the ocean.
            ',
                'longDescription' => '
The British Indian Ocean Territory (BIOT) is a remote overseas territory of the United Kingdom located in the Indian Ocean. It is situated in the central part of the Indian Ocean, approximately halfway between Africa and Indonesia. The territory comprises a group of islands, including the Chagos Archipelago, which is the main landmass of the British Indian Ocean Territory.

The Chagos Archipelago consists of over 50 islands, with the largest ones being Diego Garcia, Peros Banhos, and Salomon Islands. These islands are known for their pristine white-sand beaches, crystal-clear turquoise waters, and thriving marine life. The territory is renowned for its exceptional biodiversity and serves as an important conservation area.

It\
Due to its restricted access and military nature, tourism and visitor activities in the British Indian Ocean Territory are extremely limited. The territory is primarily used for military purposes, scientific research, and conservation efforts.
            ',
                'currency' => 'United States dollar',
                'language' => 'English',
                'atm' => 'ATMs are not available, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are not available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 43,
            ],
            [
                'countryCode' => 'BN',
                'countryName' => 'Brunei Darussalam',
                'regionCode' => 'ASIA',
                'capital' => 'Bandar Seri Begawan',
                'shortDescription' => '
            Brunei Darussalam, located on the island of Borneo in Southeast Asia, is a small but fascinating country known for its rich Islamic heritage, lush rainforests, and majestic mosques. Visitors to Brunei can explore the opulent Jame\'Asr Hassanil Bolkiah Mosque, visit the Royal Regalia Museum to learn about the country\'s monarchy, and venture into the pristine rainforests of Ulu Temburong National Park. With its serene atmosphere, cultural treasures, and natural beauty, Brunei offers a unique and enriching travel experience.
            ',
                'longDescription' => '
Brunei Darussalam, commonly known as Brunei, is a small sovereign state located on the northern coast of the island of Borneo in Southeast Asia. It is surrounded by the Malaysian state of Sarawak and has maritime boundaries with the South China Sea. Brunei is famous for its rich Islamic heritage, stunning landscapes, and a blend of modern and traditional attractions.

With respect to travel, Brunei offers visitors a unique experience that combines cultural exploration, natural beauty, and a glimpse into the country\'s royal traditions. The capital city, Bandar Seri Begawan, is known for its grand mosques, including the majestic Sultan Omar Ali Saifuddien Mosque and the Jame\Asr Hassanil Bolkiah Mosque. The city also features the opulent Istana Nurul Iman, the world\'s largest residential palace, which showcases the royal lifestyle of Brunei\'s Sultan.

Brunei\'s natural wonders are another highlight for travelers. The Ulu Temburong National Park, located in the Temburong District, is a pristine rainforest area offering opportunities for trekking, wildlife spotting, and canopy walkways. The mangrove forests of Brunei Bay are also worth exploring, with river cruises available to observe the diverse ecosystem and spot proboscis monkeys and other wildlife.

For history enthusiasts, a visit to the Malay Technology Museum provides insights into Brunei\'s traditional culture and craftsmanship. The Kampong Ayer Water Village, a cluster of stilt houses built over the Brunei River, offers a glimpse into the traditional lifestyle of the local community.

In summary, Brunei Darussalam is a captivating destination that offers a blend of cultural heritage, natural beauty, and a glimpse into the royal traditions of the country. From exploring grand mosques and palaces to immersing in the lush rainforests and experiencing the warm hospitality of the locals, Brunei has much to offer for those seeking a unique and enriching travel experience.
            ',
                'currency' => 'Brunei dollar',
                'language' => 'Malay',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '240V',
                'active' => true,
                'sortOrder' => 44,
            ],
            [
                'countryCode' => 'BG',
                'countryName' => 'Bulgaria',
                'regionCode' => 'EUROPE',
                'capital' => 'Sofia',
                'shortDescription' => '
            Bulgaria, located in Southeastern Europe, is a hidden gem with a rich history, stunning landscapes, and a vibrant cultural scene. From the majestic peaks of the Balkan Mountains to the ancient ruins of Veliko Tarnovo and the charming coastal towns along the Black Sea, Bulgaria offers a diverse range of experiences for travelers seeking history, natural beauty, and warm hospitality.
            ',
                'longDescription' => '
 Bulgaria, located in Southeast Europe, is a country known for its rich history, diverse landscapes, and vibrant cultural heritage. Nestled between the Balkan Peninsula and the Black Sea, Bulgaria offers a range of attractions that cater to various interests.

With respect to travel, Bulgaria boasts a fascinating mix of ancient civilizations and modern cities. The capital city, Sofia, is a vibrant hub that showcases a blend of Roman, Ottoman, and Soviet influences. Visitors can explore iconic landmarks such as the Alexander Nevsky Cathedral, the St. Sofia Church, and the National Palace of Culture.

One of the top destinations in Bulgaria is the historic town of Plovdiv. As one of Europe\'s oldest continuously inhabited cities, Plovdiv is renowned for its well-preserved Roman amphitheater, charming old town with traditional Bulgarian houses, and a vibrant arts and cultural scene.

For nature lovers, the Rila Mountains are a must-visit. This majestic mountain range is home to the famous Rila Monastery, a UNESCO World Heritage site known for its exquisite frescoes and rich religious history. Additionally, the Rila National Park offers breathtaking landscapes, hiking trails, and opportunities for outdoor activities.

Another remarkable location is the Black Sea coast, which attracts tourists with its stunning beaches, resort towns like Sunny Beach and Golden Sands, and historical sites like the ancient town of Nessebar, a UNESCO World Heritage site.

In summary, Bulgaria offers a diverse range of attractions, from ancient historical sites and vibrant cities to breathtaking natural landscapes. Whether you\'re interested in exploring its rich history, relaxing on beautiful beaches, or immersing yourself in its vibrant culture, Bulgaria has something to offer for every traveler.
            ',
                'currency' => 'Bulgarian lev',
                'language' => 'Bulgarian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 45,
            ],
            [
                'countryCode' => 'BF',
                'countryName' => 'Burkina Faso',
                'regionCode' => 'AFRICA',
                'capital' => 'Ouagadougou',
                'shortDescription' => '
            Burkina Faso, located in West Africa, is a landlocked country known for its vibrant culture, traditional music, and unique festivals. Visitors to Burkina Faso can explore the vibrant markets of Ouagadougou, witness traditional mask dances and ceremonies, and immerse themselves in the warm hospitality of the Burkinabe people. With its rich cultural heritage and authentic experiences, Burkina Faso offers a unique and off-the-beaten-path travel experience in West Africa.
            ',
                'longDescription' => '
Burkina Faso, located in West Africa, is a landlocked country known for its warm hospitality, vibrant culture, and unique blend of traditional and modern elements. It offers a captivating travel experience for those seeking to explore the heart of the African continent.

Burkina Faso is famous for its rich cultural heritage and traditional arts. The capital city, Ouagadougou, is a vibrant center of culture and hosts the biennial Pan-African Film and Television Festival, known as FESPACO. Visitors can immerse themselves in the lively atmosphere of the city\'s markets, sample delicious local cuisine, and experience traditional music and dance performances.

One of the top attractions in Burkina Faso is the Ruins of Loropéni, a UNESCO World Heritage site. These ancient stone ruins date back to the 11th century and provide a glimpse into the country\'s pre-colonial history. The site is surrounded by beautiful landscapes and offers a unique opportunity to explore Burkina Faso\'s archaeological wonders.

For nature enthusiasts, the National Park of Arly is a must-visit destination. This expansive park is home to diverse wildlife, including elephants, lions, and antelopes. It offers opportunities for safaris, birdwatching, and guided nature walks, allowing visitors to experience the country\'s natural beauty up close.

Additionally, the vibrant city of Bobo-Dioulasso, known as the cultural capital of Burkina Faso, is worth exploring. It features colonial-era architecture, bustling markets, and a lively nightlife scene. Visitors can also visit the Grand Mosque, one of the largest mud-brick mosques in West Africa.

In summary, Burkina Faso offers a unique travel experience with its rich cultural heritage, archaeological sites, and stunning natural landscapes. Whether you\'re interested in exploring ancient ruins, immersing yourself in local traditions, or experiencing the country\'s diverse wildlife, Burkina Faso has much to offer adventurous travelers seeking an authentic African experience.
            ',
                'currency' => 'West African CFA franc',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 46,
            ],
            [
                'countryCode' => 'BI',
                'countryName' => 'Burundi',
                'regionCode' => 'AFRICA',
                'capital' => 'Bujumbura',
                'shortDescription' => '
            Burundi, located in East Africa, is a small but beautiful country known for its stunning landscapes, including mountains, lakes, and national parks. Visitors to Burundi can enjoy the serene shores of Lake Tanganyika, go gorilla trekking in the Kibira National Park, and experience the warm hospitality of the Burundian people. With its natural beauty, unique wildlife, and cultural richness, Burundi offers a rewarding and authentic travel experience off the beaten path.
            ',
                'longDescription' => '
Burundi, located in the heart of East Africa, is a small yet beautiful country known for its stunning landscapes, rich cultural heritage, and warm-hearted people. Despite its troubled past, Burundi is gradually emerging as a captivating destination for travelers seeking off-the-beaten-path experiences.

One of the highlights of Burundi is its natural beauty. The country is blessed with picturesque landscapes, including rolling hills, serene lakes, and scenic waterfalls. The stunning Lake Tanganyika, one of the largest freshwater lakes in the world, offers opportunities for swimming, fishing, and boating. The Kibira National Park, with its dense rainforests and diverse wildlife, is a paradise for nature lovers and trekking enthusiasts.

In terms of cultural experiences, Burundi has a rich and vibrant heritage. The capital city, Bujumbura, showcases a blend of traditional and modern influences, with bustling markets, colorful handicrafts, and lively music and dance performances. Visitors can explore the Royal Palace, visit local villages to learn about traditional rituals and customs, and interact with the friendly locals who are known for their warm hospitality.

For history enthusiasts, the Gitega National Museum provides insights into Burundi\'s past, showcasing archaeological artifacts, traditional art, and cultural displays. The museum offers a glimpse into the country\'s history, traditions, and cultural practices.

One of the reasons to visit Burundi is its authenticity and untouched beauty. As a less-touristed destination, travelers can experience a sense of adventure and discovery. From exploring hidden gems in nature to immersing oneself in the local culture and traditions, Burundi offers a unique and authentic travel experience.

In summary, Burundi may be a lesser-known destination, but it holds immense beauty, cultural richness, and warm hospitality. From its breathtaking landscapes and national parks to its vibrant cities and cultural experiences, Burundi offers a chance to explore an off-the-beaten-path destination and connect with the heart and soul of East Africa.
            ',
                'currency' => 'Burundian franc',
                'language' => 'Kirundi, French',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 47,
            ],
            [
                'countryCode' => 'KH',
                'countryName' => 'Cambodia',
                'regionCode' => 'ASIA',
                'capital' => 'Phnom Penh',
                'shortDescription' => '
            Cambodia, located in Southeast Asia, is a captivating destination known for its ancient temples, rich history, and warm hospitality. Visitors to Cambodia can explore the iconic Angkor Wat, immerse themselves in the bustling markets of Phnom Penh, and relax on the pristine beaches of Sihanoukville. With its unique blend of culture, stunning landscapes, and vibrant cities, Cambodia offers an unforgettable travel experience for those seeking history, adventure, and cultural immersion.
            ',
                'longDescription' => '
Phnom Penh is the vibrant capital city of Cambodia, located in the southeastern part of the country. It serves as the cultural, economic, and political center of Cambodia and offers a unique blend of traditional charm and modern development.

Phnom Penh is famous for its rich history, evident in its architectural landmarks and cultural sites. The Royal Palace is a must-visit attraction, showcasing stunning Khmer architecture and housing the revered Silver Pagoda. The National Museum of Cambodia is another highlight, displaying a vast collection of Khmer art and artifacts, including sculptures, ceramics, and religious objects.

The city is also known for its somber yet essential historical sites. The Tuol Sleng Genocide Museum, formerly a notorious prison during the Khmer Rouge regime, offers a glimpse into Cambodia\'s tragic past. The Killing Fields of Choeung Ek, located just outside the city, provide a moving memorial to the victims of the regime.

Phnom Penh is a bustling city with a vibrant street life and bustling markets. The Russian Market and Central Market are popular spots for shopping, where visitors can find a wide range of items such as clothes, handicrafts, jewelry, and local souvenirs. The riverside area, along the banks of the Tonle Sap and Mekong rivers, offers a scenic promenade with cafes, restaurants, and lively nightlife.

One of the highlights of Phnom Penh is its culinary scene. From street food stalls offering local delicacies to upscale restaurants serving Khmer and international cuisine, food lovers will be delighted by the diverse flavors and dishes available. Trying the iconic dish of Fish Amok, a traditional Khmer curry, is a must-do culinary experience in Phnom Penh.

In summary, Phnom Penh is a city that combines history, culture, and modernity. With its historical landmarks, vibrant markets, and delicious food, it offers a fascinating glimpse into Cambodia\'s past and present. Visitors to Phnom Penh can immerse themselves in the city\'s unique atmosphere, explore its cultural treasures, and engage with the warm and friendly local people.
            ',
                'currency' => 'Cambodian riel',
                'language' => 'Khmer',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 48,
            ],
            [
                'countryCode' => 'CM',
                'countryName' => 'Cameroon',
                'regionCode' => 'AFRICA',
                'capital' => 'Yaounde',
                'shortDescription' => '
            The Cambodian riel is the official currency of Cambodia, and it is used for all transactions within the country. When visiting Cambodia, travelers should exchange their currency for Cambodian riel to easily navigate local markets, transportation, and various services throughout the country. It is advisable to carry a mix of Cambodian riel and US dollars, as USD is widely accepted in tourist areas and larger establishments.
            ',
                'longDescription' => '
Cameroon is a diverse and culturally rich country located in Central Africa. It is known for its stunning landscapes, vibrant culture, and abundant wildlife, making it a popular destination for travelers.

Geographically, Cameroon is bordered by Nigeria to the west, Chad to the northeast, the Central African Republic to the east, and Equatorial Guinea, Gabon, and the Republic of the Congo to the south. It has a diverse terrain that includes the picturesque coastline along the Gulf of Guinea, lush rainforests, scenic mountains, and expansive savannas.

Cameroon is famous for its incredible natural beauty and biodiversity. The country is home to several national parks and reserves, offering opportunities for wildlife viewing and nature exploration. The Waza National Park, located in the northern region, is known for its diverse animal population, including elephants, giraffes, lions, and various bird species. The Dja Faunal Reserve, a UNESCO World Heritage site, is renowned for its dense rainforest and rare species such as lowland gorillas and chimpanzees.

The city of Yaoundé, Cameroon\'s capital, is a vibrant cultural hub with a blend of modern infrastructure and traditional influences. It showcases a mix of colonial architecture, lively markets, and cultural institutions. Douala, the economic capital and major port city, is known for its bustling seaport, vibrant nightlife, and lively street markets.

Another must-visit location in Cameroon is the stunning Mount Cameroon, the highest peak in West Africa. It offers opportunities for hiking and trekking, allowing adventurers to explore its volcanic landscapes and enjoy breathtaking panoramic views.

Visitors to Cameroon should also immerse themselves in the country\'s rich cultural heritage. The diverse ethnic groups in Cameroon contribute to a vibrant tapestry of traditions, music, dance, and handicrafts. The annual Festival of Arts and Culture (FESTAC) is a significant cultural event that showcases the country\'s diverse cultural expressions.

In summary, Cameroon is a country that boasts diverse landscapes, abundant wildlife, vibrant cities, and a rich cultural heritage. Whether exploring its national parks, climbing its mountains, or experiencing its lively urban centers, visitors to Cameroon are in for a memorable and immersive travel experience.
            ',
                'currency' => 'Central African CFA franc',
                'language' => 'French, English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 49,
            ],
            [
                'countryCode' => 'CA',
                'countryName' => 'Canada',
                'regionCode' => 'NORTH_AMERICA',
                'capital' => 'Ottawa',
                'shortDescription' => '
            Canada, located in North America, is a vast and diverse country known for its stunning natural landscapes, vibrant cities, and friendly people. From the majestic Rocky Mountains in the west to the picturesque coastal towns of the east, Canada offers breathtaking scenery, outdoor adventures, and a rich cultural heritage, making it an ideal destination for nature lovers, outdoor enthusiasts, and those seeking diverse experiences.
            ',
                'longDescription' => '
Canada is a vast and diverse country located in North America, stretching from the Atlantic Ocean in the east to the Pacific Ocean in the west, and extending northward to the Arctic Ocean. It is the second-largest country in the world by land area and is famous for its stunning natural landscapes, multicultural cities, and friendly people.

Canada is renowned for its breathtaking natural beauty. From the majestic Rocky Mountains in Alberta and British Columbia to the pristine lakes and forests of Ontario and Quebec, there are endless opportunities for outdoor adventures. The country is home to iconic national parks such as Banff, Jasper, and Algonquin, where visitors can hike, camp, canoe, and witness stunning wildlife.

The cities of Canada are vibrant and diverse, offering a mix of modern amenities and cultural attractions. Toronto, the country\'s largest city, is known for its multiculturalism, iconic landmarks like the CN Tower, and thriving arts and entertainment scene. Vancouver, situated on the West Coast, combines urban living with access to beautiful beaches and mountains. Montreal, with its European charm, is famous for its festivals, cuisine, and historic architecture.

For history and culture enthusiasts, Quebec City is a must-visit destination. Its UNESCO World Heritage-listed Old Town, cobblestone streets, and historic sites like the Citadel and Château Frontenac provide a glimpse into Canada\'s rich colonial past. Ottawa, the capital city, showcases national museums, historic landmarks, and the stunning Parliament Hill.

Canada is also known for its friendly and welcoming people. Canadians take pride in their multicultural society, which is reflected in the vibrant communities and diverse cuisine found throughout the country. From poutine in Quebec to fresh seafood on the Atlantic coast, Canadian cuisine offers a unique blend of flavors influenced by various cultures.

In summary, Canada offers a wealth of experiences for travelers. Its stunning natural landscapes, multicultural cities, and warm hospitality make it an ideal destination for adventure, exploration, and cultural immersion. Whether you\'re seeking outdoor adventures, cultural experiences, or simply a welcoming atmosphere, Canada has something to offer for everyone.
            ',
                'currency' => 'Canadian dollar',
                'language' => 'English, French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '120V',
                'active' => true,
                'sortOrder' => 50,
            ],
            [
                'countryCode' => 'CV',
                'countryName' => 'Cape Verde',
                'regionCode' => 'AFRICA',
                'capital' => 'Praia',
                'shortDescription' => '
            Cape Verde, an archipelago off the coast of West Africa, is a paradise for beach lovers and water sports enthusiasts. With its beautiful sandy beaches, crystal-clear waters, and pleasant year-round climate, Cape Verde offers a relaxing and rejuvenating escape. Visitors can also explore the vibrant music scene, immerse themselves in the local culture, and discover the unique blend of African, Portuguese, and Creole influences that make Cape Verde a fascinating destination.
            ',
                'longDescription' => '
Cape Verde, officially known as the Republic of Cabo Verde, is an archipelago located off the northwest coast of Africa in the Atlantic Ocean. It consists of ten main islands and several smaller islets, each offering its own unique charm and natural beauty. Cape Verde is famous for its stunning beaches, vibrant culture, and music.

The islands of Cape Verde boast pristine sandy beaches and crystal-clear turquoise waters, making it a paradise for beach lovers and water sports enthusiasts. Santa Maria Beach on the island of Sal is particularly popular, known for its long stretches of golden sand and excellent conditions for activities like swimming, snorkeling, and windsurfing.

Another highlight of Cape Verde is its rich cultural heritage. The islands have a fusion of African, Portuguese, and Brazilian influences, which is reflected in the local music, dance, and cuisine. The traditional music style of morna, made famous by the internationally acclaimed singer Cesária Évora, is an integral part of Cape Verdean culture and can be enjoyed in bars and live performances across the islands.

The island of Santo Antão is a must-visit for nature enthusiasts. It is known for its dramatic mountain landscapes, lush valleys, and picturesque hiking trails. The Cova crater, Paul Valley, and Ribeira Grande are among the top attractions on the island, offering breathtaking views and opportunities for outdoor exploration.

Visiting Cape Verde provides an opportunity to experience the laid-back island lifestyle and immerse oneself in the warm hospitality of the local people. The islands offer a relaxed atmosphere, perfect for those seeking a tranquil getaway or a break from the bustling city life. The local cuisine features fresh seafood, flavorful stews, and tropical fruits, providing a delightful culinary experience.

In summary, Cape Verde is a captivating destination that combines stunning beaches, vibrant culture, and natural beauty. Whether you\'re looking to relax on pristine shores, explore scenic landscapes, or immerse yourself in the local culture, Cape Verde offers a unique and memorable travel experience.
            ',
                'currency' => 'Cape Verdean escudo',
                'language' => 'Portuguese',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 51,
            ],
            [
                'countryCode' => 'KY',
                'countryName' => 'Cayman Islands',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'George Town',
                'shortDescription' => '
            The Cayman Islands, a British Overseas Territory in the Caribbean, is renowned for its stunning beaches, crystal-clear turquoise waters, and world-class diving and snorkeling opportunities. With its luxury resorts, vibrant marine life, and tax-free shopping, the Cayman Islands offer a tropical paradise for relaxation, water sports, and indulgence.
            ',
                'longDescription' => '
The Cayman Islands is a group of three islands located in the western Caribbean Sea. It consists of Grand Cayman, Cayman Brac, and Little Cayman. Famous for its stunning beaches, crystal-clear waters, and world-class diving and snorkeling sites, the Cayman Islands attract visitors from around the globe.

Grand Cayman, the largest and most developed island, is home to the capital city of George Town. Seven Mile Beach, one of the most beautiful stretches of sand in the Caribbean, offers pristine white sands and an array of water activities. Visitors can indulge in snorkeling, diving, jet skiing, or simply relax and soak up the sun. George Town is known for its duty-free shopping, vibrant restaurants, and the chance to encounter the friendly stingrays at Stingray City.

Cayman Brac is a paradise for nature lovers and adventure seekers. It is renowned for its dramatic cliffs, limestone caves, and excellent hiking trails. The Bluff, a limestone formation that runs along the center of the island, provides breathtaking views of the Caribbean Sea. The island also offers opportunities for rock climbing, bird watching, and exploring its diverse marine life through diving and snorkeling.

Little Cayman is the smallest and least developed of the three islands, offering a tranquil and secluded escape. With its pristine beaches and crystal-clear waters, it is a haven for divers and nature enthusiasts. The Bloody Bay Marine Park is a popular diving spot, known for its vibrant coral reefs and abundant marine life. Visitors can also explore the island\'s diverse bird population, including the rare red-footed booby.

One of the main attractions of the Cayman Islands is its world-class diving. The islands are surrounded by coral reefs, underwater walls, and shipwrecks, making it a mecca for divers of all levels. The underwater visibility is exceptional, and divers can encounter an array of marine life, including colorful fish, turtles, and stingrays.

In addition to its natural beauty, the Cayman Islands offer a safe and friendly environment for visitors. The local culture is influenced by a mix of Caribbean and British traditions, and the islands are known for their warm hospitality and vibrant festivals.

Whether you are seeking relaxation on pristine beaches, thrilling water sports, or unforgettable underwater adventures, the Cayman Islands provide an idyllic tropical getaway that caters to all types of travelers.
            ',
                'currency' => 'Cayman Islands dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '120V',
                'active' => true,
                'sortOrder' => 52,
            ],
            [
                'countryCode' => 'CF',
                'countryName' => 'Central African Republic',
                'regionCode' => 'AFRICA',
                'capital' => 'Bangui',
                'shortDescription' => '
            The Central African Republic, located in Central Africa, is a country with diverse wildlife, including elephants, gorillas, and hippos, as well as stunning natural landscapes like national parks and waterfalls. While the country has faced political instability and security challenges, adventurous travelers can visit with proper preparation and guidance to explore its unique wildlife and experience the rich cultural heritage of its people.
            ',
                'longDescription' => '
The Central African Republic (CAR) is a landlocked country located in the heart of Africa. It is known for its rich cultural heritage, diverse wildlife, and stunning natural landscapes.

With its central location on the African continent, the Central African Republic offers a unique blend of cultures and traditions. The country is home to various ethnic groups, each with their own customs, languages, and artistic expressions. Visitors can immerse themselves in the vibrant local culture by attending traditional ceremonies, exploring local markets, and engaging with friendly locals.

In terms of natural beauty, the Central African Republic boasts a range of breathtaking landscapes. The country is characterized by vast savannas, dense rainforests, and picturesque rivers. Visitors can embark on thrilling safaris to national parks and reserves, such as Dzanga-Sangha National Park and Manovo-Gounda St. Floris National Park, where they can spot a diverse array of wildlife, including elephants, gorillas, leopards, and various bird species.

The capital city of Bangui is a bustling urban center that offers a glimpse into the country\'s history and modern life. Visitors can explore the vibrant markets, visit historical sites like the Presidential Palace and Notre-Dame Cathedral, and sample the local cuisine, which features a mix of traditional African and French influences.

For adventure enthusiasts, the Central African Republic provides opportunities for hiking, trekking, and exploring its pristine natural landscapes. The Chinko Nature Reserve and Bamingui-Bangoran National Park offer stunning sceneries and a chance to experience the untouched beauty of the country.

Despite its challenges, the Central African Republic is a country of resilient people and hidden gems. It offers a unique and authentic African experience, where visitors can connect with nature, immerse themselves in local culture, and witness the untamed beauty of the African continent.
            ',
                'currency' => 'Central African CFA franc',
                'language' => 'French, Sango',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 53,
            ],
            [
                'countryCode' => 'TD',
                'countryName' => 'Chad',
                'regionCode' => 'AFRICA',
                'capital' => 'N\'Djamena',
                'shortDescription' => '
            The Central African CFA franc is the official currency used in several countries, including Central African Republic. When visiting Central African Republic, it is important to exchange your currency for Central African CFA franc to facilitate transactions and payments within the country. It is advisable to consult with local authorities and travel advisories for safety and security information before planning a trip to the Central African Republic.
            ',
                'longDescription' => '
Chad, officially known as the Republic of Chad, is a landlocked country located in Central Africa. It is known for its diverse landscapes, ancient history, and rich cultural heritage.

One of the remarkable features of Chad is its diverse geography. The country encompasses vast desert regions in the north, such as the Sahara Desert, where visitors can witness stunning sand dunes and experience the serenity of the desert. In the south, Chad is characterized by the fertile plains of the Sahel, offering lush vegetation and wildlife.

Chad is also home to several national parks and reserves, making it a paradise for nature lovers and wildlife enthusiasts. Zakouma National Park is a renowned wildlife sanctuary, famous for its populations of elephants, giraffes, lions, and various bird species. The Ennedi Plateau, a UNESCO World Heritage Site, showcases breathtaking rock formations, canyons, and ancient cave art.

N\'Djamena, the capital city of Chad, is a vibrant hub that blends modern and traditional elements. It provides a gateway to exploring the country\'s cultural heritage. Visitors can explore traditional markets, such as the Grand Marché, where they can discover local crafts, textiles, and spices. The National Museum of Chad offers insights into the country\'s history and displays archaeological artifacts.

Chad\'s cultural diversity is reflected in its population, with numerous ethnic groups each contributing their unique traditions, music, and dances. Visitors have the opportunity to engage with local communities and experience their warm hospitality. Traditional festivals, such as the Gerewol Festival of the Wodaabe people, showcase colorful costumes, music, and traditional rituals.

For adventure seekers, Chad offers thrilling opportunities for outdoor activities. From camel trekking in the desert to hiking in the Ennedi Plateau or boating along the Chari and Logone rivers, there is no shortage of exciting experiences for those seeking an adrenaline rush.

In summary, Chad offers a unique blend of natural wonders, cultural heritage, and adventure. It invites visitors to explore its diverse landscapes, engage with its welcoming communities, and delve into the ancient history that has shaped this fascinating country in the heart of Africa.
            ',
                'currency' => 'Central African CFA franc',
                'language' => 'French, Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 54,
            ],
            [
                'countryCode' => 'CL',
                'countryName' => 'Chile',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Santiago',
                'shortDescription' => '
            Chile, a long and narrow country in South America, is a land of diverse landscapes, from the vast Atacama Desert in the north to the rugged fjords and glaciers of Patagonia in the south. Travelers are drawn to Chile for its stunning natural beauty, including the iconic Torres del Paine National Park, the vibrant capital city of Santiago, and the world-renowned wine regions. With its rich cultural heritage, outdoor adventures, and warm hospitality, Chile offers an unforgettable travel experience for nature enthusiasts, wine lovers, and those seeking a blend of adventure and relaxation.
            ',
                'longDescription' => '
Chile, a long and narrow country located in South America, is known for its stunning natural landscapes, diverse ecosystems, and vibrant culture. From the vast Atacama Desert in the north to the pristine fjords and glaciers in the south, Chile offers a wealth of travel opportunities for adventurers, nature enthusiasts, and culture lovers alike.

One of Chile\'s most iconic attractions is the Atacama Desert, often referred to as the driest desert in the world. Its otherworldly landscapes, geysers, salt flats, and colorful rock formations make it a must-visit destination. Travelers can explore the Valle de la Luna (Moon Valley), witness breathtaking sunsets, and even stargaze in some of the clearest skies on the planet.

In central Chile, the capital city of Santiago is a bustling metropolis that blends modernity with historical charm. Visitors can explore its vibrant neighborhoods, such as Bellavista and Lastarria, visit world-class museums like the Museum of Pre-Columbian Art, and indulge in delicious Chilean cuisine and wine.

The Chilean Lake District is another popular region to explore, characterized by its stunning lakes, snow-capped volcanoes, and lush forests. The town of Puerto Varas, nestled on the shores of Lake Llanquihue, offers breathtaking views of the Osorno and Calbuco volcanoes and serves as a gateway to outdoor activities like hiking, kayaking, and fishing.

For nature lovers, Torres del Paine National Park in southern Chile is a must-see destination. It is renowned for its towering granite peaks, pristine lakes, and expansive glaciers. Hiking the famous W Circuit or the challenging Torres del Paine Circuit allows visitors to immerse themselves in the park\'s breathtaking landscapes and spot wildlife such as guanacos, foxes, and condors.

Chile is also known for its wine production, particularly in the Central Valley region. Wine enthusiasts can visit vineyards, enjoy wine tastings, and learn about the winemaking process. The Colchagua Valley, in particular, is famous for its red wines and offers scenic vineyard tours.

In summary, Chile offers a remarkable array of natural wonders, vibrant cities, and cultural experiences. Whether you\'re seeking adventure, relaxation, or a taste of Chilean culture and cuisine, this diverse country has something to offer every traveler.
            ',
                'currency' => 'Chilean peso',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 55,
            ],
            [
                'countryCode' => 'CN',
                'countryName' => 'China',
                'regionCode' => 'ASIA',
                'capital' => 'Beijing',
                'shortDescription' => '
            China, the world\'s most populous country, is a land of ancient history, diverse landscapes, and vibrant culture. Visitors to China can explore iconic landmarks like the Great Wall, the Terracotta Army, and the Forbidden City, as well as experience the vibrant modernity of cities like Beijing and Shanghai. With its rich heritage, breathtaking natural scenery, and culinary delights, China offers a unique and immersive travel experience for those seeking to delve into its fascinating history and explore its diverse cultural offerings.
            ',
                'longDescription' => '
China, located in East Asia, is a vast and diverse country renowned for its rich history, vibrant culture, and remarkable landmarks. As the world\'s most populous country, it offers a plethora of travel experiences that range from exploring ancient imperial sites to immersing oneself in bustling modern cities.

China\'s capital, Beijing, is a treasure trove of historical wonders. The iconic Great Wall of China, a UNESCO World Heritage Site, stretches across the country\'s northern region and offers breathtaking views. The Forbidden City, a sprawling palace complex, showcases imperial architecture and houses countless artifacts from China\'s dynasties. Other must-visit attractions in Beijing include the Temple of Heaven, Tiananmen Square, and the Summer Palace.

Shanghai, a cosmopolitan metropolis, represents China\'s modern face. This dynamic city is renowned for its futuristic skyline, including the iconic Oriental Pearl Tower and the Shanghai Tower, one of the world\'s tallest buildings. The historic waterfront area known as the Bund provides a glimpse into Shanghai\'s colonial past, while the trendy district of Xintiandi offers a blend of traditional and modern architecture, vibrant nightlife, and international cuisine.

For nature lovers, the breathtaking landscapes of Guilin and Zhangjiajie should not be missed. Guilin is famous for its picturesque limestone karst mountains, serene rivers, and the stunning Li River cruise. Zhangjiajie National Forest Park, on the other hand, inspired the floating mountains in the movie "Avatar." Its towering sandstone pillars, lush forests, and glass-bottomed Zhangjiajie Grand Canyon bridge offer a truly magical experience.

Another highlight of China is the ancient city of Xi\'an, home to the world-famous Terracotta Army. This archaeological marvel features thousands of life-sized terracotta warriors and horses, a fascinating testament to China\'s ancient history. Xi\'an also offers the chance to walk or cycle along its well-preserved city walls and explore the Muslim Quarter, known for its vibrant street food and the Great Mosque.

China\'s natural wonders extend to the southwestern province of Yunnan, where the UNESCO World Heritage Site of Lijiang Old Town awaits. This enchanting town boasts traditional architecture, cobblestone streets, and a rich cultural heritage. In Yunnan, you can also visit the stunning Tiger Leaping Gorge, hike through the terraced fields of Yuanyang, or explore the diverse ethnic minority villages in the region.

From the ancient wonders of the Great Wall and the Forbidden City to the modern skylines of Shanghai and the natural beauty of Guilin and Zhangjiajie, China offers an incredible mix of history, culture, and natural landscapes. Whether you\'re fascinated by ancient civilizations, captivated by bustling cities, or seeking tranquility in scenic landscapes, China is a destination that will leave a lasting impression.
            ',
                'currency' => 'Renminbi',
                'language' => 'Standard Chinese',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 56,
            ],
            [
                'countryCode' => 'CX',
                'countryName' => 'Christmas Island',
                'regionCode' => 'OCEANIA',
                'capital' => 'Flying Fish Cove',
                'shortDescription' => '
            Christmas Island, an Australian territory in the Indian Ocean, is a remote and stunning destination known for its unique wildlife and natural wonders. Visitors can witness the annual migration of millions of red crabs, explore pristine rainforests, and dive into vibrant coral reefs, making it an ideal destination for nature lovers and outdoor enthusiasts seeking an off-the-beaten-path adventure.
            ',
                'longDescription' => '
Christmas Island, officially known as the Territory of Christmas Island, is a small tropical island located in the Indian Ocean. It is a territory of Australia and is famous for its unique wildlife, pristine natural beauty, and the annual migration of red crabs.

The island is renowned for its diverse and endemic flora and fauna. One of the main attractions is the red crab migration, which occurs each year around November and December. Millions of red crabs migrate from the island\'s forests to the coast to breed, creating a spectacular sight as the land turns red with their presence.

The island\'s stunning beaches and crystal-clear waters make it a paradise for snorkeling, diving, and swimming enthusiasts. The surrounding coral reefs are teeming with marine life, including colorful fish, turtles, and coral formations. Visitors can explore the underwater world through guided snorkeling tours or by simply taking a dip in the warm waters.

Christmas Island also offers opportunities for nature lovers to explore its unique rainforests and diverse ecosystems. The island is home to various species of birds, including the endemic Christmas Island frigatebird and the Christmas Island hawk-owl. The national park on the island protects its rich biodiversity and provides hiking trails for visitors to immerse themselves in the island\'s natural wonders.

Another highlight of Christmas Island is its annual crab migration. During this time, visitors can witness the magnificent sight of millions of red crabs making their way to the ocean. The island has established boardwalks and viewing platforms to allow visitors to observe this natural phenomenon up close and learn about the conservation efforts in place to protect the crabs and their habitat.

In addition to its natural attractions, Christmas Island offers a fascinating cultural experience. The island has a multicultural population, and visitors can explore the local culture through food, music, and art. The annual Christmas Island Cultural Festival showcases the island\'s diverse heritage and traditions, including performances, exhibitions, and traditional cuisine.

Whether you\'re captivated by the mesmerizing red crab migration, eager to explore the underwater world, or interested in immersing yourself in the island\'s unique flora and fauna, Christmas Island offers a one-of-a-kind travel experience. Its pristine natural beauty, rich wildlife, and vibrant culture make it a destination worth exploring for nature enthusiasts and adventure seekers alike.
            ',
                'currency' => 'Australian dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 57,
            ],
            [
                'countryCode' => 'CC',
                'countryName' => 'Cocos (Keeling) Islands',
                'regionCode' => 'OCEANIA',
                'capital' => 'West Island',
                'shortDescription' => '
            The Cocos (Keeling) Islands, an Australian territory in the Indian Ocean, are a tropical paradise known for their pristine beaches, crystal-clear waters, and abundant marine life. Visitors can indulge in activities such as snorkeling, diving, and beachcombing, while immersing themselves in the tranquil island atmosphere, making it a perfect destination for those seeking a peaceful and idyllic getaway.
            ',
                'longDescription' => '
The Cocos (Keeling) Islands is a remote archipelago located in the Indian Ocean, approximately midway between Australia and Sri Lanka. Comprising 27 coral islands, this Australian territory is famous for its untouched natural beauty, pristine beaches, and vibrant marine life.

The islands offer a peaceful and tranquil escape, perfect for relaxation and beach lovers. Visitors can stroll along the white sandy beaches, soak up the sun, and swim in the crystal-clear turquoise waters. The tranquil surroundings and serene atmosphere make it an ideal destination for those seeking a tropical paradise away from the crowds.

One of the main attractions of the Cocos (Keeling) Islands is its stunning coral reefs and abundant marine biodiversity. Snorkeling and diving enthusiasts can explore the vibrant underwater world, filled with colorful coral formations, tropical fish, and other fascinating marine species. The islands are home to an array of diverse marine life, including sea turtles, reef sharks, rays, and an abundance of tropical fish.

Nature lovers will appreciate the untouched beauty of the islands\' lush vegetation and abundant birdlife. The Pulu Keeling National Park protects the islands\' unique ecosystem and offers opportunities for birdwatching and nature walks. Visitors can spot a variety of bird species, including the rare Christmas Island frigatebird and the Cocos buff-banded rail.

For history enthusiasts, a visit to the Cocos (Keeling) Islands provides insights into its intriguing past. The islands have a rich cultural heritage, influenced by both European and Malay traditions. The local Cocos Malay community showcases its unique culture, traditions, and cuisine, providing visitors with a glimpse into their way of life.

Water activities are a highlight of the Cocos (Keeling) Islands. Besides snorkeling and diving, visitors can enjoy fishing trips, paddleboarding, kayaking, and sailing around the islands. The tranquil lagoon waters and gentle ocean breezes make it a haven for water sports enthusiasts.

Whether you are seeking a peaceful beach getaway, an underwater adventure, or a chance to immerse yourself in the local culture, the Cocos (Keeling) Islands offer a serene and unspoiled destination. With its breathtaking natural beauty, rich marine life, and warm hospitality, the islands provide a unique and unforgettable experience for travelers looking to escape the hustle and bustle of everyday life.
            ',
                'currency' => 'Australian dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 58,
            ],
            [
                'countryCode' => 'CO',
                'countryName' => 'Colombia',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Bogotá',
                'shortDescription' => '
            Colombia, located in South America, is a vibrant and diverse country known for its rich culture, stunning landscapes, and warm hospitality. Visitors to Colombia can explore the colonial charm of cities like Cartagena, hike through lush coffee plantations, trek to the ancient ruins of Ciudad Perdida, and immerse themselves in the vibrant music and dance scenes. With its breathtaking natural beauty, vibrant cities, and diverse cultural experiences, Colombia offers a unique and unforgettable travel experience.
            ',
                'longDescription' => '
Colombia is a diverse and vibrant country located in the northwest region of South America. It is known for its rich cultural heritage, stunning landscapes, and warm hospitality. With its mix of stunning Caribbean and Pacific coastlines, lush rainforests, vibrant cities, and charming colonial towns, Colombia offers a wide range of experiences for travelers.

One of the highlights of Colombia is its incredible natural beauty. From the lush Amazon rainforest in the south to the majestic Andes Mountains running through the center of the country, Colombia is a paradise for nature enthusiasts. Visitors can explore national parks, hike through cloud forests, discover hidden waterfalls, and encounter a remarkable diversity of flora and fauna.

The country\'s vibrant cities are also worth exploring. Bogotá, the capital, is a bustling metropolis with a thriving arts and culture scene, fascinating museums, and impressive colonial architecture. Medellín, known as the "City of Eternal Spring," offers a pleasant climate, innovative urban design, and a vibrant nightlife. The coastal city of Cartagena is famous for its well-preserved historic center, with its colorful colonial buildings, cobbled streets, and lively atmosphere.

Colombia is also renowned for its coffee production. The Coffee Cultural Landscape, a UNESCO World Heritage site, offers visitors the opportunity to explore lush coffee plantations, learn about the coffee-making process, and savor the rich flavors of Colombian coffee. The region\'s picturesque landscapes, charming towns, and welcoming locals create a delightful experience for coffee lovers and nature enthusiasts alike.

Another must-visit destination in Colombia is the Caribbean coast. With its pristine white-sand beaches, crystal-clear waters, and vibrant culture, the coast offers a perfect blend of relaxation and adventure. The beautiful islands of San Andrés and Providencia are popular for their stunning beaches, excellent diving and snorkeling spots, and a laid-back island vibe.

Colombia\'s cultural heritage is also worth exploring. The country is home to numerous indigenous communities, each with its own unique traditions, rituals, and crafts. Visitors can immerse themselves in the indigenous cultures, witness colorful festivals, and discover traditional handicrafts such as pottery, weaving, and basketry.

In summary, Colombia is a country that offers a diverse range of experiences for travelers. From its breathtaking natural landscapes to its vibrant cities, rich cultural heritage, and warm and welcoming people, Colombia has something to offer every visitor. Whether you are an adventure seeker, nature lover, history enthusiast, or simply looking to soak up the vibrant atmosphere, Colombia promises an unforgettable journey.
            ',
                'currency' => 'Colombian peso',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '110V, 220V',
                'active' => true,
                'sortOrder' => 59,
            ],
            [
                'countryCode' => 'KM',
                'countryName' => 'Comoros',
                'regionCode' => 'AFRICA',
                'capital' => 'Moroni',
                'shortDescription' => '
            Comoros, an archipelago located off the eastern coast of Africa, is a hidden gem known for its unspoiled natural beauty and rich cultural heritage. Visitors to Comoros can explore pristine beaches, hike through lush rainforests, and dive into vibrant coral reefs, all while experiencing the warm hospitality of the Comorian people. With its untouched landscapes, diverse marine life, and unique cultural traditions, Comoros offers an off-the-beaten-path travel experience for those seeking a peaceful and authentic island getaway.
            ',
                'longDescription' => '
Comoros, officially known as the Union of the Comoros, is a group of volcanic islands located off the eastern coast of Africa, in the Indian Ocean. The archipelago consists of three main islands: Grande Comore, Mohéli, and Anjouan, each with its own unique charm and natural beauty. Comoros is known for its pristine beaches, lush landscapes, and rich cultural heritage.

One of the highlights of Comoros is its stunning beaches and turquoise waters. The islands boast beautiful sandy shores framed by palm trees, creating a tropical paradise for beach lovers. Visitors can relax on the secluded beaches, swim in the crystal-clear waters, and enjoy water activities such as snorkeling and diving to explore the vibrant coral reefs teeming with marine life.

Comoros is also blessed with breathtaking natural landscapes. The volcanic peaks of the islands provide stunning panoramic views and opportunities for hiking and exploration. Mount Karthala, an active volcano on Grande Comore, offers adventurous treks to its summit, rewarding climbers with magnificent vistas of the surrounding islands and the vast Indian Ocean.

The culture and history of Comoros are deeply rooted in its Arab, African, and French influences. The capital city, Moroni, showcases the country\'s rich heritage with its charming old town, ancient mosques, and bustling markets. Visitors can immerse themselves in the local culture by exploring the vibrant street markets, sampling traditional Comorian cuisine, and experiencing the warm hospitality of the locals.

For nature enthusiasts, the island of Mohéli is a must-visit destination. It is home to Mohéli Marine Park, a protected area known for its diverse marine ecosystem and rare species, including sea turtles, dolphins, and whales. Snorkeling or diving in the park\'s pristine waters provides a unique opportunity to witness the beauty of Comoros\' underwater world.

In summary, Comoros offers a serene and unspoiled escape for travelers seeking a combination of natural beauty, cultural exploration, and relaxation. With its picturesque beaches, volcanic landscapes, and rich cultural heritage, Comoros provides a unique and authentic experience for those who venture to its shores. Whether you are seeking adventure, relaxation, or a cultural immersion, Comoros has something to offer for every traveler.
            ',
                'currency' => 'Comorian franc',
                'language' => 'Comorian, Arabic, French',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 60,
            ],
            [
                'countryCode' => 'CG',
                'countryName' => 'Congo-Brazzaville',
                'regionCode' => 'AFRICA',
                'capital' => 'Brazzaville',
                'shortDescription' => '
            The Republic of the Congo, also known as Congo-Brazzaville, is a country located in Central Africa. It offers travelers a unique blend of natural beauty, including lush rainforests, exotic wildlife, and the breathtaking Congo River. Visitors can also explore the vibrant capital city of Brazzaville, with its lively markets, cultural festivals, and friendly atmosphere. With its rich biodiversity and cultural heritage, the Republic of the Congo provides an opportunity for travelers to immerse themselves in an authentic African experience.
            ',
                'longDescription' => '
Congo, officially known as the Republic of the Congo, is a country located in Central Africa. It shares borders with several countries, including Gabon, Cameroon, the Central African Republic, the Democratic Republic of the Congo, and Angola. The country is famous for its rich biodiversity, stunning natural landscapes, and vibrant cultural heritage.

One of the top attractions in Congo is the world-renowned Odzala-Kokoua National Park. This national park is a haven for wildlife enthusiasts and nature lovers, offering opportunities to spot a wide variety of animals, including elephants, gorillas, chimpanzees, forest buffalos, and various species of birds. The park is known for its lush rainforests, rivers, and swamps, making it a paradise for ecotourism and wildlife safaris.

The capital city of Congo, Brazzaville, is a bustling metropolis that offers a mix of modernity and traditional African charm. Visitors can explore the vibrant markets, visit historical sites such as the Pierre Savorgnan de Brazza Memorial, and experience the local music and dance scene. The city is also situated on the banks of the mighty Congo River, providing picturesque views and opportunities for river cruises.

The Republic of the Congo is also home to breathtaking natural wonders, such as the Congo Basin. This vast rainforest is one of the largest tropical rainforests in the world, filled with diverse flora and fauna. Exploring the dense jungles, embarking on river journeys, and discovering hidden waterfalls are some of the memorable experiences that await visitors in this pristine wilderness.

In summary, Congo offers a unique blend of natural beauty, wildlife encounters, and cultural experiences. From its stunning national parks and rainforests teeming with wildlife to its vibrant cities and rich cultural heritage, Congo has much to offer for adventurous travelers seeking an off-the-beaten-path destination in Africa. Whether you are exploring the wilderness, immersing in the local culture, or embarking on thrilling wildlife encounters, Congo promises an unforgettable journey of discovery.
            ',
                'currency' => 'Central African CFA franc',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 61,
            ],
            [
                'countryCode' => 'CD',
                'countryName' => 'Congo-Kinshasa',
                'regionCode' => 'AFRICA',
                'capital' => 'Kinshasa',
                'shortDescription' => '
            Congo-Kinshasa, officially known as the Democratic Republic of the Congo, is a vast and diverse country in Central Africa. Travelers are drawn to its stunning natural landscapes, including the renowned Virunga National Park and its endangered mountain gorillas, as well as the mighty Congo River. With its rich cultural heritage, diverse wildlife, and incredible natural wonders, Congo-Kinshasa offers a unique and adventurous travel experience for those seeking to explore the heart of Africa.
            ',
                'longDescription' => '
The Democratic Republic of the Congo, often referred to as DRC or simply Congo, is a vast country located in Central Africa. It is the second-largest country in Africa by land area and is known for its incredible natural beauty, diverse wildlife, and rich cultural heritage.

The Democratic Republic of the Congo is famous for its stunning national parks and reserves, which offer incredible opportunities for wildlife viewing and adventure. One of the most renowned parks is Virunga National Park, a UNESCO World Heritage site and home to the critically endangered mountain gorillas. Visitors can embark on guided treks to observe these majestic creatures up close in their natural habitat. The park also boasts breathtaking landscapes, active volcanoes, and a diverse range of other wildlife species.

Another must-visit location is the Congo River, one of the longest and most powerful rivers in the world. The river flows through the heart of the country, offering opportunities for river cruises, fishing excursions, and exploring the surrounding lush landscapes. The Congo River Basin is also home to incredible biodiversity, including various bird species, hippos, and crocodiles.

For those interested in cultural experiences, the Democratic Republic of the Congo is home to numerous ethnic groups, each with its own traditions, languages, and artistic expressions. Kinshasa, the capital city, is a vibrant cultural hub where visitors can immerse themselves in Congolese music, dance, and cuisine. The city is known for its energetic nightlife, bustling markets, and lively street performances.

Additionally, the country is dotted with historical and archaeological sites that provide insights into its rich past. Places like the Kasai River region and the ancient rock art of Kisangani offer glimpses into the country\'s ancient civilizations and cultural heritage.

In summary, the Democratic Republic of the Congo is a country of immense natural beauty and cultural diversity. With its extraordinary wildlife, stunning landscapes, vibrant cities, and fascinating cultural experiences, it offers a truly immersive and unforgettable travel destination in the heart of Africa.
            ',
                'currency' => 'Congolese franc',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 62,
            ],
            [
                'countryCode' => 'CK',
                'countryName' => 'Cook Islands',
                'regionCode' => 'OCEANIA',
                'capital' => 'Avarua',
                'shortDescription' => '
            The Cook Islands, located in the South Pacific, is a tropical paradise known for its stunning turquoise waters, white sandy beaches, and vibrant marine life. Visitors can indulge in water activities like snorkeling, diving, and sailing, while immersing themselves in the Polynesian culture and hospitality. With its breathtaking beauty and laid-back atmosphere, the Cook Islands offer a tranquil escape for those seeking a tropical getaway.
            ',
                'longDescription' => '
The Cook Islands is a stunning archipelago located in the South Pacific Ocean, northeast of New Zealand. Comprising 15 major islands, this tropical paradise is famous for its pristine white sandy beaches, crystal-clear turquoise waters, and vibrant marine life. The Cook Islands offer a perfect blend of natural beauty, Polynesian culture, and warm hospitality.

The main island of Rarotonga is a popular starting point for visitors. It boasts lush mountainous landscapes, beautiful coastal scenery, and a range of outdoor activities. Travelers can explore the island by hiking the scenic trails, cycling along the coastal roads, or taking a leisurely drive around the island\'s circular road. Rarotonga is also known for its lively markets, traditional arts and crafts, and delicious local cuisine.

Aitutaki, another gem of the Cook Islands, is renowned for its breathtaking lagoon. The sparkling turquoise waters, dotted with small motu (islets), offer ideal conditions for snorkeling, swimming, and kayaking. A boat trip around the lagoon is a must-do activity, allowing visitors to discover secluded beaches, coral gardens, and even the opportunity to spot marine wildlife such as turtles and tropical fish.

For those seeking a more remote and untouched experience, the outer islands of the Cook Islands, such as Atiu, Mangaia, and Mitiaro, offer a tranquil escape. These islands provide opportunities for eco-tourism, birdwatching, exploring limestone caves, and immersing in the traditional way of life.

One of the highlights of visiting the Cook Islands is experiencing the warm Polynesian culture and hospitality. The locals are known for their friendliness and their dedication to preserving their traditions. Visitors can witness traditional dance performances, participate in craft workshops, and learn about the unique Cook Islands Maori culture.

In summary, the Cook Islands is a tropical paradise that captivates visitors with its stunning beaches, vibrant marine life, and rich Polynesian culture. Whether you\'re seeking relaxation, adventure, or cultural immersion, the Cook Islands offer a perfect getaway in the heart of the South Pacific.
            ',
                'currency' => 'New Zealand dollar',
                'language' => 'English, Cook Islands Māori',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '240V',
                'active' => true,
                'sortOrder' => 63,
            ],
            [
                'countryCode' => 'CR',
                'countryName' => 'Costa Rica',
                'regionCode' => 'CENTRAL_AMERICA',
                'capital' => 'San José',
                'shortDescription' => '
            Costa Rica, located in Central America, is a nature lover\'s paradise with its lush rainforests, stunning beaches, and diverse wildlife. Visitors can experience thrilling adventures like zip-lining, hiking through national parks, and exploring volcanoes, while also enjoying the country\'s commitment to sustainable tourism and eco-friendly practices. With its abundance of natural beauty, outdoor activities, and friendly locals, Costa Rica offers a memorable and rewarding travel experience for adventurers and nature enthusiasts.
            ',
                'longDescription' => '
Costa Rica is a small yet incredibly diverse country located in Central America, bordered by Nicaragua to the north and Panama to the south. Known as the "Rich Coast," Costa Rica is famous for its stunning natural beauty, lush rainforests, breathtaking beaches, and abundant wildlife. It is a top destination for ecotourism and adventure travel.

One of the main highlights of Costa Rica is its exceptional biodiversity. The country is home to numerous national parks and protected areas, where visitors can explore dense rainforests, hike through volcanic landscapes, and encounter a wide variety of wildlife. Manuel Antonio National Park, Arenal Volcano National Park, and Tortuguero National Park are just a few of the must-visit destinations for nature enthusiasts.

Costa Rica is also renowned for its stunning beaches on both the Pacific Ocean and the Caribbean Sea. From the popular coastal towns of Tamarindo and Jaco to the more secluded gems like Santa Teresa and Puerto Viejo, visitors can enjoy sunbathing, surfing, snorkeling, and diving in crystal-clear waters.

For adventure seekers, Costa Rica offers a plethora of thrilling activities. Zip-lining through the rainforest canopy, white-water rafting in the rapids of the Pacuare River, hiking up the Arenal Volcano, and spotting wildlife during a jungle safari are just a few of the exhilarating experiences available.

In addition to its natural wonders, Costa Rica is known for its commitment to sustainability and conservation. The country has a strong focus on eco-friendly practices, offering eco-lodges, organic farms, and responsible tourism initiatives. Visitors can learn about sustainable practices, support local communities, and contribute to the preservation of Costa Rica\'s natural treasures.

In summary, Costa Rica is a tropical paradise that offers a unique combination of stunning landscapes, biodiversity, adventure, and sustainability. Whether you\'re seeking thrilling outdoor activities, relaxing on pristine beaches, or immersing yourself in nature, Costa Rica has something for everyone. It is a destination that will leave you in awe of its natural wonders and warm hospitality.
            ',
                'currency' => 'Costa Rican colón',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '120V, 240V',
                'active' => true,
                'sortOrder' => 64,
            ],
            [
                'countryCode' => 'CI',
                'countryName' => 'Côte d\'Ivoire',
                'regionCode' => 'AFRICA',
                'capital' => 'Yamoussoukro',
                'shortDescription' => '
            Côte d\'Ivoire, also known as Ivory Coast, is a vibrant West African country known for its cultural diversity, beautiful coastline, and rich history. Visitors can explore the bustling markets, indulge in delicious local cuisine, and experience traditional music and dance, while also enjoying the country\'s stunning beaches and national parks. With its unique blend of culture, natural beauty, and warm hospitality, Côte d\'Ivoire offers a captivating travel experience for those seeking to immerse themselves in West African culture.
            ',
                'longDescription' => '
Côte d\'Ivoire, also known as Ivory Coast, is a vibrant country located on the west coast of Africa. It is famous for its rich cultural heritage, diverse landscapes, and delicious cuisine. Côte d\'Ivoire offers a unique travel experience that combines history, nature, and a warm hospitality.

The country is known for its vibrant markets, bustling cities, and lively festivals. The economic hub and largest city, Abidjan, showcases a blend of modern skyscrapers and traditional markets. Visitors can explore the colorful markets, taste local delicacies, and immerse themselves in the energetic atmosphere. The capital city, Yamoussoukro, is home to the impressive Basilica of Our Lady of Peace, one of the largest churches in the world.

Côte d\'Ivoire boasts stunning natural beauty with diverse landscapes. The country is blessed with pristine beaches along its coastline, such as Assinie and Grand-Bassam, where visitors can relax, swim, and enjoy water sports. Inland, there are national parks and reserves that offer opportunities for wildlife viewing and ecotourism. Tai National Park, Comoé National Park, and Mount Nimba Strict Nature Reserve are some of the protected areas where visitors can spot a wide range of wildlife, including elephants, chimpanzees, and rare bird species.

One of the highlights of visiting Côte d\'Ivoire is its vibrant cultural heritage. The country is home to more than 60 ethnic groups, each with its own traditions, music, and dance. Visitors can witness colorful ceremonies, explore traditional villages, and learn about the unique cultural practices of different communities. The country\'s music scene, particularly the popular genre of Coupé-Décalé, is renowned across Africa.

Côte d\'Ivoire is also known for its delicious cuisine, which blends local ingredients and flavors. Visitors can savor dishes like attiéké (cassava couscous), aloko (fried plantains), and grilled fish or meat served with spicy sauces. Exploring the local food markets and trying traditional dishes is a must-do experience.

In summary, Côte d\'Ivoire offers a rich cultural tapestry, stunning natural landscapes, and a warm and welcoming atmosphere. Whether you\'re interested in history, nature, or experiencing vibrant local culture, Côte d\'Ivoire has something to offer. It is a destination that will captivate you with its diversity and leave you with lasting memories.
            ',
                'currency' => 'West African CFA franc',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 65,
            ],
            [
                'countryCode' => 'HR',
                'countryName' => 'Croatia',
                'regionCode' => 'EUROPE',
                'capital' => 'Zagreb',
                'shortDescription' => '
            Croatia, located in Southeast Europe, is a captivating destination known for its picturesque coastline, historic cities, and stunning natural landscapes. Visitors can explore the ancient walled city of Dubrovnik, swim in the crystal-clear waters of the Adriatic Sea, and discover the enchanting Plitvice Lakes National Park. With its rich history, vibrant culture, and diverse attractions, Croatia offers a memorable travel experience for those seeking a blend of history, natural beauty, and Mediterranean charm.
            ',
                'longDescription' => '
Croatia is a beautiful country located in Southeast Europe, known for its stunning coastline along the Adriatic Sea and its rich historical and cultural heritage. It offers a diverse range of experiences, from exploring ancient cities and UNESCO World Heritage Sites to enjoying pristine beaches and breathtaking natural landscapes.

The coastal region of Croatia is one of the top attractions, with its picturesque towns, crystal-clear waters, and numerous islands. Dubrovnik, known as the "Pearl of the Adriatic," is a UNESCO World Heritage Site and renowned for its well-preserved medieval walls and historic Old Town. Split, another coastal gem, boasts the impressive Diocletian\'s Palace, a Roman emperor\'s residence turned into a lively neighborhood with charming narrow streets, bustling squares, and vibrant markets. The island of Hvar is a popular destination, offering a mix of stunning beaches, vibrant nightlife, and a rich cultural heritage.

Inland, Croatia is adorned with captivating landscapes and historic cities. The capital city, Zagreb, is a vibrant metropolis with a blend of Austro-Hungarian architecture, medieval buildings, and a lively cultural scene. Plitvice Lakes National Park is a natural wonder, featuring cascading waterfalls, turquoise lakes, and lush forests, offering excellent hiking and nature-watching opportunities. The city of Split serves as a gateway to the beautiful Dalmatian hinterland, where visitors can explore charming towns like Šibenik, Trogir, and Zadar, each with its own unique attractions.

Croatia\'s rich history and cultural heritage can be experienced throughout the country. The city of Pula is famous for its remarkably preserved Roman amphitheater, while the town of Šibenik boasts the stunning St. James Cathedral, a UNESCO World Heritage Site. The historic town of Korčula, birthplace of the famous explorer Marco Polo, is known for its medieval walls, narrow streets, and Venetian architecture. The Istrian region offers a mix of Croatian and Italian influences, with its hilltop towns, truffle-rich forests, and delicious cuisine.

In addition to its historical and cultural attractions, Croatia offers a wide range of outdoor activities. From sailing and kayaking along the coast to hiking and cycling in the national parks, there are plenty of opportunities for adventure and exploration. The Croatian cuisine is also a highlight, with its fresh seafood, delicious grilled meats, and local wines.

In summary, Croatia is a country that effortlessly blends history, natural beauty, and a vibrant coastal lifestyle. Whether you\'re exploring its ancient cities, relaxing on its pristine beaches, or indulging in its diverse cuisine, Croatia offers a memorable and enriching travel experience.
            ',
                'currency' => 'Croatian kuna',
                'language' => 'Croatian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 66,
            ],
            [
                'countryCode' => 'CU',
                'countryName' => 'Cuba',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Havana',
                'shortDescription' => '
            Cuba, a vibrant Caribbean island, is renowned for its lively music, vintage cars, and colonial architecture. Visitors can immerse themselves in the unique Cuban culture, explore the colorful streets of Havana, and relax on pristine beaches, all while enjoying the warm hospitality of the Cuban people. With its rich history, vibrant atmosphere, and stunning landscapes, Cuba offers an unforgettable travel experience that combines culture, history, and natural beauty.
            ',
                'longDescription' => '
Cuba, located in the Caribbean, is a captivating destination known for its rich history, vibrant culture, stunning beaches, and vintage charm. It offers a unique blend of colonial architecture, colorful streets, and natural beauty, making it a popular choice for travelers seeking an authentic and diverse experience.

Havana, the capital city, is a must-visit destination in Cuba. It showcases a mix of Spanish colonial and art deco architecture, classic American cars from the 1950s, and a lively atmosphere. Stroll along the Malecón, a seafront promenade, explore the historic Old Havana with its charming plazas and UNESCO World Heritage Sites, and immerse yourself in the vibrant music and dance scene.

Trinidad, a well-preserved colonial town, transports visitors back in time with its cobblestone streets, pastel-colored buildings, and horse-drawn carriages. It offers a glimpse into Cuba\'s sugar plantation history and provides opportunities for exploring nearby natural wonders such as Topes de Collantes National Park and the beautiful Ancon Beach.

Varadero is Cuba\'s most famous beach resort destination, known for its pristine white-sand beaches and turquoise waters. It offers a range of water activities, including swimming, snorkeling, and diving. The nearby Cayo Coco and Cayo Guillermo islands also boast stunning beaches and provide a tranquil and idyllic escape.

For nature lovers, Viñales Valley in western Cuba is a must-visit. This UNESCO World Heritage Site is known for its unique limestone karst formations, tobacco plantations, and vibrant green landscapes. Explore the valley on horseback, visit a cigar factory, and learn about the traditional tobacco-growing process.

Cuba\'s cultural heritage is best experienced through its music, dance, and art. Enjoy live music performances at local bars and clubs, witness the passionate rhythms of salsa and Afro-Cuban beats, and immerse yourself in the vibrant street art scene. Don\'t miss the chance to visit the Museum of the Revolution in Havana, which offers insights into Cuba\'s revolutionary history.

Cuban cuisine is a delightful fusion of Spanish, African, and Caribbean influences. Sample traditional dishes such as ropa vieja (shredded beef), congrí (rice and black beans), and tostones (fried plantains). Don\'t forget to try a refreshing mojito or a classic Cuban cigar, both iconic symbols of the country.

In summary, Cuba is a destination that captivates travelers with its history, culture, natural beauty, and warm hospitality. From exploring its colonial cities and relaxing on pristine beaches to immersing yourself in the rhythms of Cuban music, visiting Cuba is a truly unforgettable experience.
            ',
                'currency' => 'Cuban peso',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '110V, 220V',
                'active' => true,
                'sortOrder' => 67,
            ],
            [
                'countryCode' => 'CW',
                'countryName' => 'Curaçao',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Willemstad',
                'shortDescription' => '
            Curaçao, a Dutch Caribbean island, is a paradise known for its stunning beaches, vibrant underwater world, and colorful colonial architecture. Visitors can enjoy water sports like diving and snorkeling, explore the charming streets of Willemstad with its UNESCO World Heritage-listed architecture, and indulge in the island\'s unique blend of cultures and cuisines. With its warm weather, friendly locals, and diverse attractions, Curaçao offers a perfect blend of relaxation, adventure, and cultural experiences for travelers.
            ',
                'longDescription' => '
Curaçao, a Caribbean island located just off the coast of Venezuela, is a hidden gem known for its vibrant culture, colorful architecture, and stunning beaches. With a unique blend of Dutch, Caribbean, and Latin influences, Curaçao offers a diverse and captivating travel experience.

The capital city of Willemstad is a UNESCO World Heritage site and a must-visit destination in Curaçao. It is famous for its iconic pastel-colored buildings lining the waterfront, known as Handelskade. Stroll through the narrow streets of the historic district, explore the floating market, and visit the floating Queen Emma Bridge. Willemstad also offers a range of museums, shops, and restaurants where you can immerse yourself in the local culture.

Curaçao is renowned for its breathtaking beaches and crystal-clear turquoise waters. Some of the top beach destinations include Mambo Beach, Jan Thiel Beach, and Cas Abao Beach. Here, you can relax on the powdery sand, swim in the calm waters, and enjoy various water activities such as snorkeling and diving. The underwater world of Curaçao is teeming with vibrant coral reefs and diverse marine life, making it a paradise for divers and snorkelers.

In addition to its natural beauty, Curaçao offers a range of cultural and historical attractions. Visit the Curaçao Museum to learn about the island\'s history and culture, explore the 17th-century Fort Amsterdam, and discover the vibrant street art scene in the Pietermaai District. Don\'t miss the opportunity to try the local cuisine, which blends flavors from around the world. Sample traditional dishes like keshi yena (stuffed cheese), funchi (a cornmeal-based side dish), and fresh seafood specialties.

Curaçao also hosts a variety of festivals and events throughout the year, showcasing the island\'s lively culture and traditions. The Carnival season, held in February, is a highlight with colorful parades, music, and dancing. The Curaçao North Sea Jazz Festival, held in August, attracts world-renowned musicians and offers unforgettable live performances.

Whether you are seeking relaxation on pristine beaches, diving adventures in vibrant coral reefs, or immersion in a unique cultural experience, Curaçao has something for everyone. With its warm climate, friendly locals, and vibrant atmosphere, Curaçao promises a memorable and enchanting getaway.
            ',
                'currency' => 'Netherlands Antillean guilder',
                'language' => 'Dutch, Papiamento',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '127V, 220V',
                'active' => true,
                'sortOrder' => 68,
            ],
            [
                'countryCode' => 'CY',
                'countryName' => 'Cyprus',
                'regionCode' => 'EUROPE',
                'capital' => 'Nicosia',
                'shortDescription' => '
            Cyprus, an island nation in the eastern Mediterranean, offers visitors a delightful mix of stunning beaches, ancient ruins, and picturesque villages. Travelers can explore the historic city of Paphos, relax on the golden sands of Ayia Napa, and indulge in delicious Mediterranean cuisine. With its year-round sunshine, rich cultural heritage, and warm hospitality, Cyprus is an ideal destination for those seeking a relaxing beach vacation infused with history and natural beauty.
            ',
                'longDescription' => 'Cyprus, located in the Eastern Mediterranean, is a captivating island known for its rich history, stunning beaches, and warm hospitality. This beautiful destination offers a diverse range of attractions that cater to various interests, making it a popular choice for travelers.

With a fascinating blend of Greek, Turkish, and Middle Eastern influences, Cyprus boasts a unique cultural heritage. The island is home to ancient ruins, including the UNESCO-listed archaeological site of Paphos, where visitors can explore Roman villas, ancient theaters, and intricate mosaics. The city of Limassol is another notable destination, known for its medieval castle, charming old town, and vibrant nightlife.

Cyprus is also renowned for its picturesque beaches and crystal-clear waters. The coastal town of Ayia Napa is famous for its vibrant nightlife and stunning sandy beaches, such as Nissi Beach and Fig Tree Bay. Alternatively, the city of Paphos offers a more relaxed beach experience, with beautiful stretches of coastline like Coral Bay and Lara Beach. Water sports enthusiasts will find ample opportunities for snorkeling, diving, and sailing around the island.

Nature lovers will appreciate the stunning landscapes of Cyprus, from the Troodos Mountains with their charming villages and hiking trails, to the Akamas Peninsula with its rugged coastline and natural beauty. The island is also home to several nature reserves and parks, including the Cape Greco National Forest Park, where visitors can enjoy hiking, birdwatching, and exploring the unique flora and fauna of the region.

Cypriot cuisine is a highlight for food enthusiasts. The local cuisine combines Mediterranean flavors with influences from Greece, Turkey, and the Middle East. Traditional dishes like souvlaki, halloumi cheese, moussaka, and meze (a selection of small dishes) are must-try delicacies. Pair your meal with a glass of locally produced wine, as Cyprus is known for its vineyards and wine-making traditions.

In summary, Cyprus offers a delightful blend of history, natural beauty, and cultural experiences. Whether you\'re seeking ancient ruins, sun-soaked beaches, scenic landscapes, or flavorful cuisine, Cyprus has it all. The warm and welcoming locals add to the charm of this island, making it an ideal destination for a memorable vacation.
            ',
                'currency' => 'Euro',
                'language' => 'Greek, Turkish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '240V',
                'active' => true,
                'sortOrder' => 69,
            ],
            [
                'countryCode' => 'CZ',
                'countryName' => 'Czech Republic',
                'regionCode' => 'EUROPE',
                'capital' => 'Prague',
                'shortDescription' => '
            The Czech Republic, located in Central Europe, is a treasure trove of architectural wonders, including the stunning Prague Castle and Charles Bridge. Visitors can explore the charming cobblestone streets, indulge in world-famous Czech beer, and immerse themselves in the country\'s rich history and culture. With its fairy-tale-like towns, vibrant art scene, and welcoming atmosphere, the Czech Republic offers a captivating travel experience that combines history, culture, and architectural beauty.
            ',
                'longDescription' => '
The Czech Republic, located in Central Europe, is a country famous for its rich history, stunning architecture, and vibrant culture. It offers a diverse range of attractions, making it a popular destination for travelers from around the world.

One of the highlights of the Czech Republic is its capital city, Prague. Known as the "City of a Hundred Spires," Prague is renowned for its well-preserved historic buildings, including the Prague Castle, Charles Bridge, and the Old Town Square. Visitors can explore the narrow cobblestone streets, visit magnificent cathedrals and palaces, and enjoy the lively atmosphere of the city. Prague also boasts a thriving arts and music scene, with numerous theaters, galleries, and concert halls.

Beyond Prague, the Czech Republic offers other fascinating cities and regions to explore. Cesky Krumlov, a UNESCO World Heritage site, is a charming town with a beautifully preserved medieval old town, stunning castle, and scenic river views. The city of Brno, the country\'s second-largest city, is known for its vibrant nightlife, historic architecture, and lively cultural scene. The southern region of Moravia is famous for its wine production, offering wine lovers the opportunity to visit vineyards and taste local varieties.

Nature lovers will appreciate the Czech Republic\'s picturesque landscapes. The Bohemian Switzerland National Park, located near the German border, features dramatic sandstone formations, deep forests, and breathtaking viewpoints. The Sumava National Park, situated in the southwestern part of the country, is the largest protected area in the Czech Republic, offering diverse flora and fauna, as well as opportunities for hiking, cycling, and skiing.

The Czech Republic is also renowned for its beer culture. Czech beer is famous worldwide, and visiting local breweries and traditional beer halls is a must-do experience. The country is known for its beer festivals, such as the Pilsner Fest in Pilsen and the Czech Beer Festival in Prague, where you can sample a wide variety of beers.

In summary, the Czech Republic offers a blend of history, culture, natural beauty, and delicious cuisine. Whether you\'re exploring the historic streets of Prague, admiring the picturesque landscapes, or indulging in Czech beer and cuisine, the country provides a memorable travel experience for visitors.
            ',
                'currency' => 'Czech koruna',
                'language' => 'Czech',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 70,
            ],
            [
                'countryCode' => 'DK',
                'countryName' => 'Denmark',
                'regionCode' => 'EUROPE',
                'capital' => 'Copenhagen',
                'shortDescription' => '
            Denmark, a Scandinavian country, is known for its picturesque landscapes, charming cities, and rich Viking history. Visitors can explore the colorful streets of Copenhagen, cycle along the scenic coastline, and immerse themselves in the Danish concept of hygge, which embraces coziness and well-being. With its friendly locals, innovative design, and a strong emphasis on sustainability, Denmark offers a unique blend of cultural experiences, natural beauty, and a high quality of life that makes it a wonderful destination to visit.
            ',
                'longDescription' => '
     Denmark, located in Northern Europe, is a charming country known for its rich history, beautiful landscapes, and high quality of life. It is comprised of the Jutland Peninsula and numerous islands, including the main islands of Zealand and Funen.

The capital city, Copenhagen, is a major attraction in Denmark. It is a vibrant and cosmopolitan city with a perfect blend of modernity and historic charm. Visitors can explore iconic landmarks such as the Little Mermaid statue, the colorful Nyhavn harbor, and the impressive Christiansborg Palace. The city is also home to the famous amusement park Tivoli Gardens, offering thrilling rides, beautiful gardens, and entertainment for all ages.

Another popular destination in Denmark is the historic city of Aarhus, located on the east coast of Jutland. Aarhus is known for its rich Viking history and well-preserved old town. It is also home to numerous museums, including the ARoS Aarhus Art Museum, which features a striking rainbow-colored panorama and a diverse collection of contemporary art.

Denmark is renowned for its stunning natural landscapes, including sandy beaches, picturesque coastal cliffs, and rolling countryside. The North Sea coastline offers opportunities for beach activities, water sports, and relaxing seaside getaways. The Danish Wadden Sea National Park, a UNESCO World Heritage site, is a unique coastal area teeming with wildlife and bird species.

The country\'s strong cycling culture makes it an ideal destination for outdoor enthusiasts. Denmark boasts an extensive network of well-maintained cycling routes that allow visitors to explore the countryside, charming villages, and coastal areas at a leisurely pace.

Denmark is also famous for its design and architecture. Design enthusiasts should not miss the opportunity to visit the Danish Design Museum in Copenhagen or explore the innovative architecture in the Ørestad district. The country\'s culinary scene is also thriving, with Danish cuisine focusing on fresh, seasonal ingredients and Michelin-starred restaurants.

In summary, Denmark offers a blend of cultural heritage, natural beauty, and modern design. Whether you\'re exploring the vibrant streets of Copenhagen, enjoying the coastal scenery, immersing yourself in Viking history, or savoring delicious Danish cuisine, the country offers a delightful travel experience for visitors.
            ',
                'currency' => 'Danish krone',
                'language' => 'Danish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 71,
            ],
            [
                'countryCode' => 'DJ',
                'countryName' => 'Djibouti',
                'regionCode' => 'AFRICA',
                'capital' => 'Djibouti',
                'shortDescription' => '
            Djibouti, located in the Horn of Africa, offers visitors a diverse range of attractions, including stunning beaches, otherworldly landscapes, and unique cultural experiences. Travelers can explore the otherworldly landscapes of Lac Assal, go snorkeling in the crystal-clear waters of the Red Sea, and witness the rich cultural heritage of the Afar people. With its natural wonders, adventure opportunities, and a blend of African, Middle Eastern, and French influences, Djibouti provides an off-the-beaten-path travel experience for those seeking something truly extraordinary.
            ',
                'longDescription' => '
Djibouti, located in the Horn of Africa, is a small yet fascinating country known for its diverse landscapes, rich cultural heritage, and strategic location at the entrance to the Red Sea. It shares borders with Eritrea, Ethiopia, and Somalia, and its coastline stretches along the Gulf of Aden and the Red Sea.

One of the top attractions in Djibouti is Lake Assal, which is the lowest point in Africa and the third saltiest lake in the world. The lake\'s turquoise waters and the surrounding salt flats create a stunning and otherworldly landscape. Visitors can enjoy swimming in the saltwater lake and even float effortlessly due to its high salinity.

Another must-visit destination is the Day Forest National Park, located in the Goda Mountains. This protected area is home to a variety of flora and fauna, including rare species of birds and mammals. Nature lovers can explore the park\'s hiking trails, spot wildlife, and enjoy breathtaking views of the surrounding landscapes.

Djibouti City, the capital and largest city of Djibouti, offers a mix of modern and traditional attractions. The city\'s vibrant markets, such as the Central Market, provide a glimpse into the local culture and offer a wide range of traditional goods and spices. The Presidential Palace, the Hamoudi Mosque, and the European Quarter are notable landmarks that showcase the city\'s architectural heritage.

For adventure seekers, Djibouti\'s coastline offers excellent opportunities for diving and snorkeling. The underwater world is teeming with vibrant coral reefs, colorful marine life, and even the chance to swim with whale sharks, the largest fish in the ocean. The coastal town of Tadjoura is a popular base for exploring the surrounding waters.

Djibouti is also known for its geothermal attractions, such as the Ardoukoba Volcano and the Lake Abbe. These natural wonders showcase the country\'s geothermal activity, with steam vents, lava formations, and unique landscapes that resemble scenes from another planet.

In summary, Djibouti offers a blend of natural beauty, cultural heritage, and unique experiences. From its stunning salt lake and national parks to its vibrant markets and coastal adventures, the country has much to offer for travelers seeking an off-the-beaten-path destination in East Africa.
            ',
                'currency' => 'Djiboutian franc',
                'language' => 'French, Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 72,
            ],
            [
                'countryCode' => 'DM',
                'countryName' => 'Dominica',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Roseau',
                'shortDescription' => '
            Dominica, known as the "Nature Island of the Caribbean," is a tropical paradise offering lush rainforests, pristine rivers, and stunning waterfalls. Visitors can immerse themselves in the island\'s natural beauty, hike to the boiling lake, dive into vibrant coral reefs, and experience the warm hospitality of the locals. With its untouched landscapes, eco-tourism focus, and a wide range of outdoor activities, Dominica is an ideal destination for nature lovers and adventure seekers looking for an authentic Caribbean experience.
            ',
                'longDescription' => '
         Dominica, also known as the "Nature Isle of the Caribbean," is a breathtakingly beautiful island located in the eastern Caribbean Sea. It is known for its lush rainforests, stunning waterfalls, hot springs, and vibrant marine life. Dominica offers a unique blend of adventure, relaxation, and natural beauty that attracts visitors from around the world.

One of the top attractions in Dominica is its pristine natural environment. The island is home to Morne Trois Pitons National Park, a UNESCO World Heritage site, which features the Boiling Lake, the second-largest hot spring in the world. Hiking enthusiasts can explore the park\'s numerous trails, leading to secluded waterfalls, breathtaking viewpoints, and unique geological formations.

The island is also famous for its abundance of rivers and waterfalls. The Emerald Pool, Trafalgar Falls, and Middleham Falls are among the most popular spots for swimming, hiking, and enjoying the refreshing beauty of cascading water. Visitors can immerse themselves in the natural surroundings, take a dip in the crystal-clear waters, and relax in the tranquil ambiance.

For adventure seekers, Dominica offers thrilling activities such as canyoning, river tubing, and snorkeling. Canyoning allows visitors to navigate through gorges, rappel down waterfalls, and jump into natural pools. River tubing takes you on a thrilling ride down the island\'s rivers, surrounded by lush vegetation. Snorkeling and diving enthusiasts can explore the vibrant coral reefs and marine life in the island\'s protected marine reserves.

The island\'s capital, Roseau, is a charming and colorful town with a rich cultural heritage. Visitors can explore its historic sites, such as the Old Market Square and the Dominica Museum, to learn about the island\'s history and cultural traditions. The Botanical Gardens, with its lush flora and fauna, is a peaceful oasis in the heart of the city.

Dominica\'s warm and friendly people, known as "Dominicans," welcome visitors with open arms and take pride in sharing their island\'s natural treasures. The island\'s local cuisine, influenced by African, Caribbean, and European flavors, offers a delightful culinary experience. Visitors can savor traditional dishes like callaloo soup, seafood delicacies, and the famous "mountain chicken" (frog legs).

In summary, Dominica is a paradise for nature lovers and adventure enthusiasts. Its untouched landscapes, abundant waterfalls, vibrant marine life, and warm hospitality make it a perfect destination for those seeking an authentic and unforgettable Caribbean experience.
            ',
                'currency' => 'East Caribbean dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 73,
            ],
            [
                'countryCode' => 'DO',
                'countryName' => 'Dominican Republic',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Santo Domingo',
                'shortDescription' => '
            The Dominican Republic, located in the Caribbean, boasts stunning beaches, vibrant culture, and a rich history. Visitors can enjoy white-sand beaches in Punta Cana, explore the historic Zona Colonial in Santo Domingo, and experience the lively music and dance scene. With its all-inclusive resorts, outdoor activities, and warm weather year-round, the Dominican Republic offers a perfect blend of relaxation, adventure, and cultural immersion for travelers seeking a tropical getaway.
            ',
                'longDescription' => '
            The Dominican Republic is a vibrant and diverse country located in the Caribbean region of the island of Hispaniola. Known for its stunning beaches, rich history, and warm hospitality, the Dominican Republic is a popular destination for travelers seeking a mix of relaxation, adventure, and cultural immersion.

The country boasts an extensive coastline with pristine white-sand beaches and turquoise waters. Punta Cana, located on the eastern coast, is famous for its luxurious resorts and all-inclusive accommodations, making it a top choice for beach lovers and sun-seekers. The nearby Bavaro Beach is a must-visit, offering a picturesque setting for swimming, snorkeling, and water sports.

The capital city, Santo Domingo, is a UNESCO World Heritage site and home to the first European settlement in the Americas. Its historic colonial zone, known as Zona Colonial, features well-preserved architecture, cobblestone streets, and landmarks like the Alcázar de Colón and the Cathedral of Santa María la Menor. Exploring the streets of Santo Domingo allows visitors to immerse themselves in the country\'s rich history and vibrant culture.

Nature enthusiasts will be captivated by the Dominican Republic\'s diverse landscapes. The country is home to Pico Duarte, the highest peak in the Caribbean, offering hiking opportunities and breathtaking views. The Samaná Peninsula is known for its lush rainforests, waterfalls, and the famous El Limón waterfall, where visitors can enjoy a refreshing dip in the natural pool.

The Dominican Republic is also a haven for adventure activities. Cabarete, on the northern coast, is renowned for its strong winds, making it a premier destination for kiteboarding and windsurfing. The Jarabacoa region, located in the country\'s central mountains, offers thrilling experiences like white-water rafting, canyoning, and zip-lining.

For those seeking cultural experiences, the Dominican Republic is rich in music, dance, and local traditions. Merengue and bachata are the country\'s most popular music genres, and visitors can enjoy lively performances and dance lessons. Local festivals and celebrations, such as Carnival and the Merengue Festival, showcase the country\'s vibrant culture and offer a chance to immerse oneself in the joyful atmosphere.

The Dominican Republic\'s cuisine is a fusion of Spanish, African, and indigenous flavors. Visitors can indulge in traditional dishes such as sancocho (a hearty stew), mofongo (mashed plantains), and fresh seafood. Exploring local markets and trying street food is a great way to sample the country\'s culinary delights.

In summary, the Dominican Republic offers a diverse range of attractions and experiences. From its stunning beaches and natural landscapes to its rich history and vibrant culture, the country has something to offer every type of traveler. Whether you seek relaxation, adventure, or cultural immersion, the Dominican Republic is sure to leave a lasting impression.
            ',
                'currency' => 'Dominican peso',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '110V, 220V',
                'active' => true,
                'sortOrder' => 74,
            ],
            [
                'countryCode' => 'TL',
                'countryName' => 'East Timor',
                'regionCode' => 'ASIA',
                'capital' => 'Dili',
                'shortDescription' => '
            East Timor, also known as Timor-Leste, is a Southeast Asian country known for its pristine beaches, lush mountains, and rich cultural heritage. Visitors can explore the charming capital city of Dili, dive into crystal-clear waters teeming with marine life, and experience the warm hospitality of the Timorese people. With its natural beauty, diverse wildlife, and a sense of untouched authenticity, East Timor offers a unique travel experience for those seeking an off-the-beaten-path destination in Southeast Asia.
            ',
                'longDescription' => '
East Timor, officially known as the Democratic Republic of Timor-Leste, is a small country located in Southeast Asia on the eastern half of the island of Timor. It is known for its natural beauty, rich cultural heritage, and history of struggle for independence.

East Timor\'s stunning landscapes are a major draw for visitors. The country is blessed with pristine beaches, crystal-clear waters, and lush mountains. At places like Atauro Island and Jaco Island, visitors can enjoy snorkeling, diving, and swimming in idyllic settings. The mountainous regions, such as Mount Ramelau, offer opportunities for hiking, trekking, and exploring breathtaking viewpoints.

The capital city, Dili, is a vibrant and evolving city with a mix of traditional and modern influences. Visitors can explore historical sites like the Santa Cruz Cemetery, which holds significance for its role in the country\'s struggle for independence. The Resistance Museum provides insights into the country\'s tumultuous past, while the Dili Cathedral and Tais Market offer glimpses into Timorese culture and craftsmanship.

The town of Baucau is another popular destination, known for its colonial architecture and scenic surroundings. Visitors can explore the historic buildings, relax in the tranquil atmosphere, and take in panoramic views of the coast and mountains.

One of the highlights of East Timor is its unique cultural heritage. The country has a diverse blend of indigenous traditions and Portuguese influences. Traditional dance and music performances are often showcased during festivals and celebrations, providing a glimpse into the local culture. The Lospalos Cultural House is a great place to experience traditional Timorese dance and music.

East Timor is also home to several natural reserves and national parks, such as Nino Konis Santana National Park and Jaco Island Protected Area. These areas are known for their rich biodiversity, including rare bird species and marine life. Wildlife enthusiasts can enjoy bird watching, wildlife spotting, and exploring the diverse ecosystems.

Visiting East Timor is an opportunity to engage with the warm and friendly Timorese people. Interacting with locals allows visitors to learn about their customs, traditions, and way of life. The country\'s local markets are a great place to experience the vibrant atmosphere and sample local delicacies.

In summary, East Timor offers a unique travel experience with its natural beauty, rich cultural heritage, and friendly people. Whether you seek adventure in the great outdoors, insights into history and culture, or simply want to relax on pristine beaches, East Timor has much to offer for an unforgettable journey.
            ',
                'currency' => 'United States dollar',
                'language' => 'Portuguese, Tetum',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 75,
            ],
            [
                'countryCode' => 'EC',
                'countryName' => 'Ecuador',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Quito',
                'shortDescription' => '
            Ecuador, located in South America, offers visitors a remarkable diversity of landscapes, including the stunning Galapagos Islands, the Amazon rainforest, and the majestic Andes Mountains. Travelers can explore the colonial architecture of Quito, hike to volcanic peaks, and encounter unique wildlife species. With its natural wonders, rich indigenous culture, and adventure opportunities, Ecuador provides a truly immersive and unforgettable travel experience for those seeking a mix of nature, culture, and adventure.
            ',
                'longDescription' => '
            Ecuador is a diverse country located in South America, bordered by Colombia to the north and Peru to the east and south. It is famous for its breathtaking natural landscapes, including the Amazon rainforest, the Andes Mountains, and the Galapagos Islands.

One of the top attractions in Ecuador is the Galapagos Islands, a UNESCO World Heritage site and a haven for wildlife enthusiasts. These volcanic islands are home to unique and endemic species, such as giant tortoises, marine iguanas, and blue-footed boobies. Visitors can explore the islands through guided tours, snorkeling, diving, and hiking, getting up close to the incredible wildlife and experiencing the untouched beauty of the archipelago.

Another must-visit destination in Ecuador is the Amazon rainforest, one of the most biodiverse regions on the planet. The Ecuadorian Amazon offers opportunities for eco-tourism, where visitors can embark on jungle tours, canoe rides along the rivers, and encounters with indigenous communities. This immersive experience allows visitors to learn about the rich flora and fauna of the Amazon and gain insights into traditional indigenous cultures.

The capital city of Quito is a UNESCO World Heritage site and a cultural gem. Its historic center, known as Old Town, is filled with well-preserved colonial architecture, picturesque plazas, and churches. The city is nestled in the Andes Mountains, offering stunning panoramic views from viewpoints like El Panecillo and TelefériQo. Quito is also a gateway to various natural attractions, such as the Cotopaxi National Park and the Mindo Cloud Forest.

Ecuador is known for its incredible biodiversity, which can be explored in the cloud forests of Mindo, the Cotopaxi National Park, or the Yasuni National Park. The Avenue of the Volcanoes is a scenic route that showcases Ecuador\'s impressive volcanic landscapes, including Cotopaxi, Chimborazo, and Tungurahua volcanoes.

For adventure seekers, Baños is a popular destination offering activities such as whitewater rafting, canyoning, and mountain biking. The town is famous for its hot springs, which are believed to have healing properties. Baños is also the starting point for excursions to the Tungurahua volcano and the Amazon jungle.

In summary, Ecuador is a destination that offers diverse natural landscapes, rich cultural heritage, and unique wildlife experiences. Whether you\'re exploring the Galapagos Islands, venturing into the Amazon rainforest, or discovering the charm of colonial cities, Ecuador is sure to captivate travelers with its natural beauty and cultural treasures.
            ',
                'currency' => 'United States dollar',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '120V, 240V',
                'active' => true,
                'sortOrder' => 76,
            ],
            [
                'countryCode' => 'EG',
                'countryName' => 'Egypt',
                'regionCode' => 'AFRICA',
                'capital' => 'Cairo',
                'shortDescription' => '
            Egypt, an ancient land of wonders, offers visitors a chance to explore iconic historical sites such as the pyramids of Giza, the temples of Luxor, and the Valley of the Kings. Travelers can immerse themselves in the rich history and culture of Egypt, cruise along the Nile River, and marvel at the architectural marvels of ancient civilization. With its fascinating blend of ancient treasures, vibrant markets, and the warm hospitality of the Egyptian people, Egypt offers an incredible journey through time and a unique travel experience that is both educational and awe-inspiring.
            ',
                'longDescription' => '
            Egypt is a captivating country located in North Africa, with its northeastern coast stretching along the Mediterranean Sea. It is renowned for its ancient history, iconic landmarks, and fascinating cultural heritage.

One of the most famous attractions in Egypt is the Great Pyramids of Giza, including the majestic Pyramid of Khufu, also known as the Pyramid of Cheops. These ancient wonders are the only remaining structures of the Seven Wonders of the Ancient World and have been fascinating visitors for centuries. Nearby, you can explore the Sphinx, a mythical creature with the body of a lion and the head of a human, guarding the pyramids.

The city of Luxor, often referred to as the world\'s greatest open-air museum, is another top destination in Egypt. It is home to the impressive Karnak and Luxor Temples, which offer a glimpse into the grandeur of ancient Egyptian civilization. Across the Nile River lies the Valley of the Kings, where you can explore intricately decorated tombs of pharaohs, including the famous tomb of Tutankhamun.

A visit to Egypt would not be complete without exploring the iconic Nile River, the longest river in Africa. Cruising along the Nile allows you to witness the timeless beauty of the countryside, visit ancient temples and ruins, and observe the local way of life. As you sail, you can stop at historical sites such as the Temple of Kom Ombo, the Temple of Edfu, and the beautiful Philae Temple in Aswan.

The bustling capital city of Cairo is a vibrant mix of history and modernity. Here, you can explore the Egyptian Museum, home to an extensive collection of ancient artifacts, including the treasures of Tutankhamun. Cairo is also where you\'ll find the medieval Islamic district of Khan El Khalili, a bustling bazaar where you can shop for traditional crafts, spices, and jewelry.

For those seeking relaxation, Egypt\'s Red Sea Riviera offers pristine beaches and crystal-clear waters perfect for snorkeling and diving. Destinations like Sharm El Sheikh and Hurghada are popular for their abundant marine life, vibrant coral reefs, and water sports activities.

In summary, Egypt is a captivating destination that offers a rich tapestry of ancient wonders, vibrant culture, and beautiful landscapes. From exploring the pyramids and temples to cruising the Nile and experiencing the vibrant cities, Egypt is a timeless destination that immerses visitors in the allure of its past and present.
            ',
                'currency' => 'Egyptian pound',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 77,
            ],
            [
                'countryCode' => 'SV',
                'countryName' => 'El Salvador',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'San Salvador',
                'shortDescription' => '
            El Salvador, the smallest country in Central America, offers visitors a combination of stunning beaches, lush mountains, and vibrant culture. Travelers can surf world-class waves, hike through national parks, explore Mayan ruins, and indulge in delicious local cuisine. With its warm climate, natural beauty, and friendly locals, El Salvador provides a unique and off-the-beaten-path travel experience for those seeking adventure, relaxation, and cultural immersion.
            ',
                'longDescription' => '
            El Salvador, located in Central America, is a country known for its stunning landscapes, vibrant culture, and warm hospitality. Despite its small size, it offers a wide range of attractions for travelers to explore.

One of the highlights of El Salvador is its beautiful beaches along the Pacific coast. Destinations like El Tunco, El Zonte, and La Libertad are popular among surfers, thanks to the consistent waves and laid-back atmosphere. You can enjoy the sun, sand, and surf, or simply relax and unwind in the beachfront resorts.

For nature enthusiasts, El Salvador boasts a diverse range of natural landscapes. The Parque Nacional El Imposible is a pristine rainforest that offers hiking trails, wildlife spotting, and breathtaking views of waterfalls and lush vegetation. The serene Lake Coatepeque is perfect for swimming, kayaking, or enjoying a leisurely boat ride surrounded by volcanic hills.

San Salvador, the capital city, is a vibrant hub of history, culture, and gastronomy. The historic downtown area features the majestic Metropolitan Cathedral, the National Palace, and the bustling Plaza Libertad. You can explore museums, art galleries, and local markets to get a taste of the rich Salvadoran culture.

Another must-visit destination in El Salvador is the charming town of Suchitoto. Known for its colonial architecture and cobblestone streets, Suchitoto offers a glimpse into the country\'s colonial past. You can visit art galleries, enjoy live music performances, and take a boat ride on Lake Suchitlán.

El Salvador is also home to several archaeological sites that showcase the ancient Mayan civilization. Joya de Cerén, a UNESCO World Heritage site, is often referred to as the "Pompeii of the Americas" due to its remarkably preserved ruins. Tazumal and San Andrés are other important archaeological sites where you can explore ancient pyramids, temples, and artifacts.

In summary, El Salvador is a country of remarkable beauty and cultural heritage. From its stunning beaches and natural landscapes to its vibrant cities and historical sites, it offers a diverse range of experiences for travelers. Whether you\'re seeking adventure, relaxation, or cultural immersion, El Salvador has something to offer everyone.
            ',
                'currency' => 'United States dollar',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '115V, 230V',
                'active' => true,
                'sortOrder' => 78,
            ],
            [
                'countryCode' => 'GQ',
                'countryName' => 'Equatorial Guinea',
                'regionCode' => 'AFRICA',
                'capital' => 'Malabo',
                'shortDescription' => '
            Equatorial Guinea, located on the west coast of Central Africa, offers visitors a blend of natural beauty, wildlife, and cultural heritage. Travelers can explore the dense rainforests of Monte Alen National Park, relax on pristine beaches, and witness traditional rituals and dances of the indigenous communities. With its rich biodiversity, unique cultural experiences, and a chance to explore off-the-beaten-path destinations, Equatorial Guinea provides a rewarding travel experience for those seeking a unique African adventure.
            ',
                'longDescription' => '
Equatorial Guinea, located on the west coast of Central Africa, is a country known for its rich biodiversity, stunning landscapes, and unique cultural heritage. Despite being one of the smallest countries in Africa, it offers a variety of experiences for travelers.

One of the top attractions in Equatorial Guinea is the Bioko Island, home to the capital city of Malabo. The island is renowned for its lush rainforests, pristine beaches, and volcanic landscapes. Visitors can explore the Pico Basilé National Park, hike to the summit of Mount Pico Basilé for panoramic views, and relax on the beautiful black sand beaches.

Another must-visit destination in Equatorial Guinea is the mainland region of Rio Muni. This region is characterized by dense tropical rainforests, diverse wildlife, and traditional indigenous cultures. The Monte Alén National Park is a haven for nature lovers, offering opportunities for wildlife spotting, birdwatching, and jungle treks.

For those interested in cultural exploration, the city of Bata is worth a visit. It is the largest city in Equatorial Guinea and showcases a blend of indigenous and colonial influences. You can explore the local markets, visit the Bata Cathedral, and immerse yourself in the vibrant music and dance traditions of the Fang people.

Equatorial Guinea is also known for its unique wildlife, including endangered species such as gorillas and sea turtles. The Monte Alén-Monts de Cristal National Park and the Ureca Ecological Reserve are important protected areas where you can observe diverse flora and fauna in their natural habitats.

Visiting Equatorial Guinea provides an opportunity to discover the fascinating cultural heritage of the country. Traditional ceremonies, art, and music are an integral part of the local culture, and you can experience them through festivals, museums, and community interactions.

In summary, Equatorial Guinea offers a blend of natural beauty, cultural richness, and wildlife encounters. From its tropical rainforests and stunning beaches to its vibrant cities and traditional communities, the country provides a unique and authentic African travel experience.
            ',
                'currency' => 'Central African CFA franc',
                'language' => 'Spanish, French, Portuguese',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 79,
            ],
            [
                'countryCode' => 'ER',
                'countryName' => 'Eritrea',
                'regionCode' => 'AFRICA',
                'capital' => 'Asmara',
                'shortDescription' => '
            Eritrea, located in the Horn of Africa, offers visitors a glimpse into its rich history, stunning landscapes, and vibrant culture. Travelers can explore the well-preserved ancient city of Asmara, visit the picturesque coastal town of Massawa, and discover the unique blend of African, Arab, and European influences. With its unique architecture, diverse landscapes, and warm hospitality, Eritrea provides a captivating travel experience for those seeking an off-the-beaten-path destination with a rich cultural heritage.
            ',
                'longDescription' => '
            Eritrea, located in the Horn of Africa, is a country that offers a diverse range of experiences for travelers. Known for its rich history, stunning landscapes, and unique culture, Eritrea has much to offer to visitors.

One of the highlights of Eritrea is its capital city, Asmara. With its charming Italian colonial architecture and wide boulevards, Asmara is often referred to as the "Little Rome of Africa." Visitors can explore the city\'s vibrant cafes, visit the bustling markets, and admire the beautiful Art Deco buildings. Asmara also has a rich cultural scene, with theaters, galleries, and museums showcasing the country\'s art, history, and traditions.

Another must-visit destination in Eritrea is the Red Sea coast. The town of Massawa, known for its ancient port and Ottoman-era architecture, offers a unique glimpse into the country\'s maritime history. Visitors can relax on the pristine beaches, enjoy water sports such as diving and snorkeling, and explore the vibrant marine life in the Red Sea.

For nature lovers, the Dankalia region in the Danakil Depression is a fascinating destination. This otherworldly landscape is characterized by vast salt flats, colorful sulfur springs, and active volcanoes. Trekking to the Erta Ale volcano, with its constantly active lava lake, is a truly unforgettable experience.

Eritrea is also home to a number of archaeological sites, including the ancient city of Adulis, which was an important trading port in antiquity. Visitors can explore the ruins and learn about the country\'s rich historical and cultural heritage.

One of the reasons to visit Eritrea is its unique and welcoming culture. The country is home to a diverse range of ethnic groups, each with its own traditions, languages, and cuisines. Engaging with the local communities and experiencing their warm hospitality is a memorable aspect of a trip to Eritrea.

In summary, Eritrea offers a blend of history, natural beauty, and cultural experiences. From exploring the vibrant streets of Asmara to relaxing on the pristine beaches of the Red Sea coast, and from witnessing the volcanic landscapes of the Danakil Depression to immersing oneself in the country\'s rich heritage, Eritrea is a captivating destination that offers something for every traveler.
            ',
                'currency' => 'Eritrean nakfa',
                'language' => 'Tigrinya, Arabic, English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 80,
            ],
            [
                'countryCode' => 'EE',
                'countryName' => 'Estonia',
                'regionCode' => 'EUROPE',
                'capital' => 'Tallinn',
                'shortDescription' => '
            Estonia, a charming Baltic nation, combines medieval architecture, pristine nature, and a thriving digital society. Visitors can explore the cobbled streets of Tallinn\'s Old Town, enjoy the serenity of the country\'s forests and lakes, and experience the innovative technology and creative energy that permeate Estonian society. With its unique blend of history, nature, and forward-thinking culture, Estonia offers a rewarding travel experience for those seeking a glimpse into the past and a glimpse into the future.
            ',
                'longDescription' => '
            Estonia, located in Northern Europe, is a charming country known for its natural beauty, fascinating history, and vibrant culture. With a mix of medieval architecture, picturesque landscapes, and modern urban centers, Estonia offers a unique and diverse travel experience.

Tallinn, the capital city of Estonia, is a UNESCO World Heritage site and one of the main attractions in the country. Its well-preserved medieval Old Town is like stepping back in time, with cobblestone streets, historic buildings, and enchanting city walls. Visitors can explore the medieval Town Hall Square, visit the Alexander Nevsky Cathedral, and enjoy panoramic views from Toompea Hill.

The Lahemaa National Park is a must-visit destination for nature lovers. Located along the northern coast, it is the largest national park in Estonia and offers stunning landscapes of forests, lakes, wetlands, and coastal cliffs. The park is also home to numerous hiking trails, historical manor houses, and charming coastal villages, providing opportunities for outdoor activities and cultural exploration.

For a unique cultural experience, the island of Saaremaa is worth a visit. Known for its well-preserved medieval castle, Kuressaare, the island offers a peaceful and idyllic atmosphere. Visitors can enjoy the unspoiled nature, relax on the sandy beaches, and explore the traditional windmills and thatched-roof cottages.

Estonia is also known for its vibrant arts and music scene. The country hosts numerous festivals throughout the year, showcasing both traditional and contemporary performances. The Song Festival, held every five years, is a significant event where thousands of singers come together to celebrate Estonian culture and heritage.

One of the reasons to visit Estonia is its digital society and technological advancements. Tallinn, in particular, has gained a reputation as a leading tech hub in Europe. Visitors can explore the innovative side of Estonia by visiting various tech startups, attending conferences and events, and experiencing the convenience of e-governance and digital services.

In summary, Estonia offers a unique blend of history, natural beauty, cultural experiences, and technological innovation. Whether it\'s exploring the medieval charm of Tallinn, immersing oneself in nature in Lahemaa National Park, or experiencing the vibrant arts scene, Estonia has something for every traveler.
            ',
                'currency' => 'Euro',
                'language' => 'Estonian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 81,
            ],
            [
                'countryCode' => 'ET',
                'countryName' => 'Ethiopia',
                'regionCode' => 'AFRICA',
                'capital' => 'Addis Ababa',
                'shortDescription' => '
            Ethiopia, a land of ancient civilizations and breathtaking landscapes, offers visitors a journey through time and a chance to discover its rich cultural heritage. Travelers can explore the rock-hewn churches of Lalibela, witness the stunning beauty of the Simien Mountains, and experience the vibrant markets and traditions of Addis Ababa. With its diverse history, stunning natural wonders, and warm hospitality, Ethiopia provides a truly immersive and unforgettable travel experience for those seeking a unique blend of adventure, history, and culture.
            ',
                'longDescription' => '
Ethiopia, located in the northeastern part of Africa, is a country rich in history, culture, and natural beauty. Known as the "Land of Origins," Ethiopia boasts a diverse range of attractions that make it a fascinating destination for travelers.

One of the highlights of Ethiopia is its ancient historical sites. The city of Axum is home to ancient obelisks, tombs, and ruins that date back thousands of years, including the famous Stelae Field. Lalibela is another must-visit destination, renowned for its rock-hewn churches carved out of solid rock. These remarkable structures are considered one of the greatest religious and architectural wonders in the world.

Ethiopia is also famous for its stunning landscapes and natural wonders. The Simien Mountains National Park, a UNESCO World Heritage site, offers breathtaking views, dramatic cliffs, and unique wildlife, including the Ethiopian wolf and the Gelada baboon. The Danakil Depression, one of the hottest places on Earth, showcases otherworldly landscapes with its salt flats, volcanic craters, and colorful mineral formations.

The country is known for its diverse cultural heritage and vibrant traditions. Addis Ababa, the capital city, is a bustling metropolis where visitors can explore the National Museum, which houses ancient artifacts and the famous fossil remains of Lucy. The city also offers vibrant markets, delicious cuisine, and lively music and dance performances.

Ethiopia is renowned for its coffee culture, being the birthplace of coffee. Visitors can enjoy the traditional Ethiopian coffee ceremony, which involves roasting and brewing coffee beans in a ceremonial manner, while engaging in conversations and experiencing the country\'s hospitality.

Ethiopia is a destination that appeals to adventure enthusiasts as well. The country offers opportunities for trekking, hiking, and wildlife viewing. The Bale Mountains National Park is a prime location for wildlife enthusiasts, offering sightings of endemic species such as the Ethiopian wolf, mountain nyala, and Menelik\'s bushbuck.

In summary, Ethiopia is a captivating destination that offers a blend of history, natural beauty, cultural experiences, and adventure. From ancient historical sites and stunning landscapes to vibrant cities and unique cultural traditions, Ethiopia has something for every traveler seeking an enriching and unforgettable journey.
            ',
                'currency' => 'Ethiopian birr',
                'language' => 'Amharic',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 82,
            ],
            [
                'countryCode' => 'FK',
                'countryName' => 'Falkland Islands',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Stanley',
                'shortDescription' => '
            The Falkland Islands, located in the South Atlantic, offer visitors a pristine wilderness where they can observe diverse wildlife, including penguins, seals, and seabirds. Travelers can explore the rugged landscapes, enjoy outdoor activities like hiking and fishing, and learn about the fascinating history and culture of the islands. With its remote and unspoiled nature, the Falkland Islands provide a unique opportunity to connect with nature and experience the charm of a remote island destination.
            ',
                'longDescription' => '
The Falkland Islands, a British overseas territory, is located in the South Atlantic Ocean. Known for its rugged beauty and abundant wildlife, the Falkland Islands offer a unique and remote travel experience.

The islands are famous for their stunning landscapes, characterized by vast open spaces, rolling hills, and pristine beaches. Travelers can explore the untouched wilderness and enjoy activities such as hiking, birdwatching, and photography. The Falkland Islands are home to diverse wildlife, including penguins, seals, sea lions, and a wide variety of bird species. One of the major attractions is witnessing the impressive colonies of Gentoo, Magellanic, and Rockhopper penguins in their natural habitat.

Stanley, the capital of the Falkland Islands, is a charming town with a British feel. Visitors can explore its historic sites, such as the Christ Church Cathedral and the Falkland Islands Museum, to learn about the islands\' rich history and culture. Stanley also offers cozy pubs, traditional tea rooms, and local craft shops where visitors can immerse themselves in the local lifestyle.

For nature enthusiasts, a visit to Sea Lion Island is a must. This remote and pristine island is a haven for wildlife, including sea lions, elephant seals, and various bird species. Carcass Island is another popular destination, known for its beautiful white sandy beaches and opportunities for wildlife encounters.

The Falkland Islands provide a unique opportunity to connect with nature and experience the tranquility of untouched landscapes. Whether it\'s exploring the stunning coastline, observing wildlife in their natural habitat, or discovering the historical and cultural heritage of Stanley, the Falkland Islands offer a truly unforgettable travel experience.

It\'s worth noting that the Falkland Islands have a rich military history, particularly associated with the Falklands War in 1982. Visitors interested in the war can explore historical sites and memorials that commemorate the conflict, providing insights into this significant chapter of the islands\' history.
            ',
                'currency' => 'Falkland Islands pound',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '240V',
                'active' => true,
                'sortOrder' => 83,
            ],
            [
                'countryCode' => 'FO',
                'countryName' => 'Faroe Islands',
                'regionCode' => 'EUROPE',
                'capital' => 'Tórshavn',
                'shortDescription' => '
            The Faroe Islands, an archipelago in the North Atlantic, captivate visitors with their dramatic landscapes, picturesque villages, and abundant birdlife. Travelers can hike along breathtaking cliffs, explore charming coastal towns, and immerse themselves in the distinct Faroese culture and traditions. With its remote and untouched beauty, the Faroe Islands offer a peaceful and enchanting escape for those seeking nature, tranquility, and a truly unique travel experience.
            ',
                'longDescription' => '
            The Faroe Islands, an autonomous territory of Denmark, is located in the North Atlantic Ocean between Iceland and Norway. Known for its breathtaking landscapes, rugged coastlines, and traditional Viking heritage, the Faroe Islands offer a unique and off-the-beaten-path travel experience.

The islands are renowned for their stunning natural beauty, characterized by dramatic cliffs, green valleys, and picturesque villages. Travelers can explore the untouched wilderness, hike along scenic trails, and marvel at the majestic waterfalls that cascade down the cliffs. The Faroe Islands are also home to abundant birdlife, including puffins, gannets, and fulmars, making it a paradise for birdwatching enthusiasts.

Tórshavn, the capital city of the Faroe Islands, is a charming and colorful town with a rich history and culture. Visitors can wander through the narrow streets of the old town, Tinganes, and admire the traditional turf-roofed houses. The city also offers a vibrant food scene, showcasing the best of Faroese cuisine, which often features local seafood and lamb.

Sørvágsvatn, also known as the "Lake above the Ocean," is a natural wonder that attracts visitors from around the world. This optical illusion occurs when viewing the lake from certain angles, creating the illusion that it hovers above the ocean. The breathtaking scenery and unique photographic opportunities make it a must-visit location in the Faroe Islands.

The Faroe Islands provide a serene and tranquil atmosphere, allowing travelers to immerse themselves in nature and escape the hustle and bustle of everyday life. Whether it\'s exploring the rugged landscapes, encountering friendly locals, or experiencing the unique cultural traditions, the Faroe Islands offer a truly unforgettable travel experience.

It\'s important to note that the weather in the Faroe Islands can be unpredictable, with frequent changes and a tendency for fog and rain. Travelers should come prepared with appropriate clothing and gear to fully enjoy the outdoor activities and make the most of their visit to this remote and captivating destination.
            ',
                'currency' => 'Danish krone',
                'language' => 'Faroese, Danish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 84,
            ],
            [
                'countryCode' => 'FJ',
                'countryName' => 'Fiji',
                'regionCode' => 'OCEANIA',
                'capital' => 'Suva',
                'shortDescription' => '
            Fiji, a tropical paradise in the South Pacific, entices visitors with its pristine white-sand beaches, crystal-clear waters, and vibrant coral reefs. Travelers can indulge in various water activities like snorkeling and diving, experience the warm hospitality of the Fijian people, and immerse themselves in the rich culture and traditions of the islands. With its stunning natural beauty, tranquil island vibes, and a wide range of adventure and relaxation opportunities, Fiji offers a dreamy escape for those seeking a tropical getaway.
            ',
                'longDescription' => '
            Fiji, located in the South Pacific Ocean, is a tropical paradise renowned for its pristine beaches, crystal-clear waters, and vibrant coral reefs. Made up of more than 300 islands, Fiji offers a diverse range of attractions and activities that cater to every type of traveler.

The country is famous for its breathtaking beaches, with white sand and turquoise waters that lure visitors seeking relaxation and natural beauty. Whether you\'re looking to lounge on the beach, snorkel among colorful coral reefs, or indulge in water sports like kayaking and paddleboarding, Fiji offers a wealth of coastal experiences.

The Yasawa Islands, a chain of volcanic islands in Fiji, are a top destination for travelers seeking a remote and idyllic getaway. These islands offer a more secluded and authentic Fijian experience, with stunning landscapes, traditional villages, and opportunities to immerse yourself in the local culture. You can explore hidden coves, hike to panoramic viewpoints, and witness traditional ceremonies and dances.

For adventure enthusiasts, Fiji offers thrilling activities such as scuba diving, where you can explore vibrant coral reefs teeming with marine life, including tropical fish, sharks, and manta rays. Additionally, you can embark on river rafting trips, go zip-lining through lush rainforests, or take part in exhilarating jet boat rides.

One of the highlights of visiting Fiji is experiencing the warm hospitality of the Fijian people. Known for their friendliness and welcoming nature, the locals will make you feel at home and introduce you to their rich cultural heritage. Traditional Fijian ceremonies, such as the kava ceremony, are a unique opportunity to engage with the local customs and traditions.

Fiji\'s cuisine is another aspect that shouldn\'t be missed. With a blend of influences from Polynesian, Indian, and Chinese cultures, Fijian food is diverse and flavorful. Indulge in fresh seafood, tropical fruits, and traditional dishes like kokoda (marinated raw fish) and lovo (earth oven-cooked meats and vegetables).

Whether you\'re seeking relaxation, adventure, cultural immersion, or a combination of all three, Fiji offers a truly unforgettable travel experience. From its stunning natural landscapes to its warm and welcoming people, Fiji is a destination that captivates the hearts of visitors and leaves them with cherished memories.
            ',
                'currency' => 'Fijian dollar',
                'language' => 'English, Fijian, Fiji Hindi',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '240V',
                'active' => true,
                'sortOrder' => 85,
            ],
            [
                'countryCode' => 'FI',
                'countryName' => 'Finland',
                'regionCode' => 'EUROPE',
                'capital' => 'Helsinki',
                'shortDescription' => '
            Finland, a land of captivating contrasts, offers visitors a unique blend of untouched nature, modern design, and Nordic charm. Travelers can explore the pristine forests, countless lakes, and Northern Lights, indulge in traditional Finnish saunas, and experience the vibrant cultural scene of Helsinki. With its breathtaking landscapes, outdoor adventures, and a strong emphasis on well-being, Finland provides an enchanting escape for those seeking tranquility, natural beauty, and a true taste of Scandinavian lifestyle.
            ',
                'longDescription' => '
            Finland, located in Northern Europe, is a country known for its pristine natural beauty, vibrant cities, and unique cultural experiences. It is bordered by Sweden to the west, Norway to the north, and Russia to the east.

Finland is famous for its enchanting landscapes, characterized by thousands of lakes, vast forests, and the breathtaking Northern Lights. In summer, the Midnight Sun graces the country, providing long days of sunlight and the opportunity to enjoy outdoor activities such as hiking, fishing, and boating. In winter, Finland transforms into a winter wonderland, where visitors can partake in activities like skiing, snowboarding, ice fishing, and experiencing the thrill of dog sledding or reindeer sleigh rides.

The capital city, Helsinki, is a vibrant and modern city with a rich history and a unique blend of architectural styles. Visitors can explore its bustling market squares, visit stunning landmarks like the Helsinki Cathedral and the Suomenlinna Sea Fortress, and indulge in the city\'s vibrant arts and cultural scene. Helsinki is also known for its saunas, which are an integral part of Finnish culture. Enjoying a traditional sauna experience is a must-do when visiting Finland.

Another must-visit destination in Finland is Lapland, located in the northernmost part of the country. Lapland is renowned for its snow-covered landscapes, reindeer herding, and the opportunity to meet Santa Claus himself in his official hometown, Rovaniemi. Visitors can also go on husky safaris, witness the mesmerizing Northern Lights, and experience the unique Sami culture.

Finland is also a great destination for those seeking tranquility and a connection with nature. The country has numerous national parks, such as Nuuksio National Park and Lemmenjoki National Park, where visitors can explore pristine wilderness, hike through forests, and spot wildlife like bears, moose, and lynx.

In addition to its natural beauty, Finland is known for its design, technology, and innovative culture. Visitors can explore design districts, visit modern architectural marvels like the Oodi Library, and immerse themselves in the Finnish sauna culture.

Whether you\'re looking for outdoor adventures, cultural experiences, or a peaceful retreat in nature, Finland offers a unique and unforgettable travel experience. Its breathtaking landscapes, warm and welcoming people, and intriguing blend of tradition and innovation make it a destination worth exploring.
            ',
                'currency' => 'Euro',
                'language' => 'Finnish, Swedish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 86,
            ],
            [
                'countryCode' => 'FR',
                'countryName' => 'France',
                'regionCode' => 'EUROPE',
                'capital' => 'Paris',
                'shortDescription' => '
            France, a country known for its rich history, iconic landmarks, and world-renowned cuisine, offers visitors an unforgettable blend of culture, art, and romance. Travelers can explore the romantic streets of Paris, admire the breathtaking architecture of historic castles and cathedrals, indulge in gourmet delights, and discover the picturesque landscapes of the French Riviera, the charming villages of Provence, or the stunning vineyards of Bordeaux. With its diverse attractions, cultural treasures, and joie de vivre, France is a must-visit destination for those seeking a truly immersive and memorable travel experience.
            ',
                'longDescription' => '
            France, located in Western Europe, is a country famous for its rich history, stunning architecture, exquisite cuisine, and world-class art and culture. It is known for its iconic landmarks, romantic cities, picturesque countryside, and diverse regions.

Paris, the capital city, is a major attraction for travelers from around the world. It is renowned for its iconic landmarks such as the Eiffel Tower, Louvre Museum, Notre-Dame Cathedral, and Champs-Élysées. Visitors can stroll along the charming streets, explore vibrant neighborhoods like Montmartre, indulge in delicious French cuisine, and experience the city\'s vibrant nightlife.

Beyond Paris, France offers a wealth of diverse destinations. The French Riviera, located along the Mediterranean coast, is known for its glamorous resorts, stunning beaches, and vibrant nightlife. The cities of Nice, Cannes, and Saint-Tropez are popular destinations in this region, offering a blend of relaxation, luxury, and cultural experiences.

The Loire Valley is famous for its magnificent châteaux, picturesque vineyards, and charming villages. Visitors can explore the grand castles such as Château de Chambord and Château de Chenonceau, take leisurely bike rides through the countryside, and sample exquisite wines.

The region of Provence is renowned for its charming towns, lavender fields, and Mediterranean landscapes. Places like Aix-en-Provence, Avignon, and Saint-Rémy-de-Provence offer a mix of art, history, and natural beauty. The vibrant colors, aromatic scents, and relaxed lifestyle of Provence make it a popular destination for nature lovers and culture enthusiasts.

Normandy, located in the northwest, is known for its historic significance and beautiful coastal landscapes. Visitors can explore the D-Day landing beaches, visit the magnificent Mont Saint-Michel, and indulge in delicious seafood.

France is also famous for its culinary traditions and world-class cuisine. From croissants and baguettes to wine and cheese, French gastronomy is celebrated globally. Visitors can savor the flavors of regional dishes, visit local markets, and experience the pleasure of dining in charming cafés and Michelin-starred restaurants.

In summary, France offers a captivating blend of history, art, culture, natural beauty, and gastronomy. Whether you\'re exploring the bustling streets of Paris, relaxing on the French Riviera, or discovering the charming countryside, France promises a memorable travel experience that caters to a wide range of interests and preferences.
            ',
                'currency' => 'Euro',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 87,
            ],
            [
                'countryCode' => 'GF',
                'countryName' => 'French Guiana',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Cayenne',
                'shortDescription' => '
            French Guiana, an overseas department of France located in South America, offers a unique blend of tropical rainforests, diverse wildlife, and intriguing cultural heritage. Travelers can explore the Amazon rainforest, spot exotic species, witness the famous Guiana Space Centre, and experience the vibrant mix of French and Creole cultures. With its untouched natural beauty and fascinating cultural fusion, French Guiana provides a distinctive and adventurous destination for those seeking a truly off-the-beaten-path experience.
            ',
                'longDescription' => '
            French Guiana is an overseas department and region located on the northeastern coast of South America. As an integral part of France, it offers a unique blend of French and Creole cultures, stunning natural beauty, and diverse wildlife.

The capital city, Cayenne, is a vibrant hub where visitors can explore colonial architecture, bustling markets, and experience the lively local atmosphere. The city is known for its colorful wooden houses, historic monuments, and the famous Place des Palmistes, a charming square surrounded by palm trees.

One of the top attractions in French Guiana is the Guiana Space Centre, located near Kourou. This renowned spaceport is used by the European Space Agency and offers guided tours where visitors can learn about space exploration and witness rocket launches.

The rainforests of French Guiana are a haven for nature enthusiasts and adventure seekers. The vast Amazon rainforest covers a significant portion of the region, providing opportunities for hiking, wildlife spotting, and eco-tourism. The Maroni River, which forms the border with Suriname, offers opportunities for river cruises and exploring traditional Maroon communities.

The Îles du Salut, also known as the Salvation Islands, are a group of small islands located off the coast of French Guiana. These islands were historically used as a penal colony, and today visitors can explore the preserved ruins, visit the former prison buildings, and enjoy the beautiful beaches and turquoise waters surrounding the islands.

French Guiana\'s cultural diversity is reflected in its festivals and traditions. The Carnival of Cayenne is a major event, featuring colorful parades, music, dance, and traditional costumes. It is a vibrant celebration that showcases the region\'s cultural heritage.

The natural beauty, unique cultural blend, and intriguing history of French Guiana make it an appealing destination for those seeking an off-the-beaten-path experience in South America. Whether you\'re exploring the colonial heritage of Cayenne, venturing into the rainforest, or discovering the fascinating history of the Salvation Islands, French Guiana offers a captivating and immersive travel experience.
            ',
                'currency' => 'Euro',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 88,
            ],
            [
                'countryCode' => 'PF',
                'countryName' => 'French Polynesia',
                'regionCode' => 'OCEANIA',
                'capital' => 'Papeete',
                'shortDescription' => '
            French Polynesia, a tropical paradise in the South Pacific, entices visitors with its breathtaking turquoise lagoons, overwater bungalows, and vibrant coral reefs. Travelers can indulge in water activities like snorkeling and diving, immerse themselves in Polynesian culture, and relax on the pristine beaches of Tahiti, Bora Bora, and Moorea. With its stunning natural beauty, idyllic islands, and a sense of seclusion, French Polynesia offers a dreamlike escape for those seeking a romantic getaway or a tranquil retreat surrounded by unmatched tropical splendor.
            ',
                'longDescription' => '
            French Polynesia is a collection of islands located in the South Pacific Ocean. Known for its stunning natural beauty, turquoise lagoons, and vibrant marine life, it is a tropical paradise that attracts visitors from around the world.

The main island of Tahiti is the gateway to French Polynesia and the capital city of Papeete serves as the cultural and economic hub of the region. Visitors can explore the vibrant markets, indulge in delicious Polynesian cuisine, and learn about the rich history and traditions of the islands.

Bora Bora is one of the most famous destinations in French Polynesia. It is renowned for its picture-perfect turquoise lagoon, pristine white-sand beaches, and luxurious overwater bungalows. Snorkeling, scuba diving, and island hopping are popular activities in Bora Bora, offering visitors a chance to discover the diverse marine life and breathtaking landscapes.

Moorea, located just a short ferry ride from Tahiti, is another must-visit destination. With its dramatic mountain peaks, lush valleys, and crystal-clear lagoons, Moorea offers a paradise for nature lovers and outdoor enthusiasts. Hiking, snorkeling, and swimming with dolphins are popular activities here.

Rangiroa, the largest atoll in French Polynesia, is a paradise for diving and snorkeling enthusiasts. Its expansive lagoon is home to a rich array of marine life, including colorful coral reefs, dolphins, and sharks. The Tiputa Pass is a renowned spot for diving, where visitors can witness the mesmerizing underwater world up close.

One of the unique cultural experiences in French Polynesia is attending a traditional Polynesian dance show. The rhythmic beats of the drums, graceful movements of the dancers, and vibrant costumes showcase the rich Polynesian heritage and storytelling traditions.

French Polynesia\'s allure lies in its natural beauty, pristine beaches, and warm hospitality. Whether you\'re seeking relaxation, adventure, or a romantic getaway, the islands of French Polynesia offer a slice of paradise that will leave you enchanted and rejuvenated.
            ',
                'currency' => 'CFP franc',
                'language' => 'French, Tahitian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '110V, 220V',
                'active' => true,
                'sortOrder' => 89,
            ],
            [
                'countryCode' => 'TF',
                'countryName' => 'French Southern Territories',
                'regionCode' => 'ANTARCTICA',
                'capital' => 'Port-aux-Français',
                'shortDescription' => '
            The French Southern Territories, consisting of remote islands and territories in the southern Indian Ocean and Antarctic regions, offer unparalleled opportunities for nature enthusiasts and adventure seekers. Visitors can explore the rugged landscapes, observe unique wildlife such as penguins and seals, and experience the untouched beauty of pristine nature, making it an extraordinary destination for those seeking an off-the-grid expedition and a chance to immerse themselves in the raw and untouched wilderness.
            ',
                'longDescription' => '
            The French Southern Territories are a group of remote islands located in the southern Indian Ocean and the southern Atlantic Ocean. These territories include the islands of Kerguelen, Crozet, Saint-Paul, and Amsterdam, as well as the Adélie Land region in Antarctica.

The French Southern Territories are known for their pristine and untouched natural environments, making them a haven for wildlife and nature enthusiasts. The islands are home to diverse ecosystems, including rugged coastlines, volcanic landscapes, and rich marine life.

Kerguelen Islands, also known as the "Desolation Islands," are a highlight of the French Southern Territories. These remote islands offer stunning landscapes with towering cliffs, picturesque fjords, and expansive grasslands. Visitors can explore the islands\' unique flora and fauna, including seabird colonies, seals, and penguins.

Crozet Islands, located in the southern Indian Ocean, are another destination within the French Southern Territories. These subantarctic islands are characterized by their dramatic landscapes, including steep cliffs, glaciers, and alpine meadows. Wildlife enthusiasts can observe various bird species, seals, and elephant seals in their natural habitats.

Saint-Paul and Amsterdam Islands are located in the southern Indian Ocean and are known for their volcanic origin. These islands offer breathtaking volcanic landscapes, pristine beaches, and diverse bird colonies. Visitors can enjoy hiking, birdwatching, and exploring the unique geological features of the islands.

Adélie Land, situated in Antarctica, is a region claimed by France and is part of the French Southern Territories. It is known for its icy landscapes, vast ice shelves, and abundant wildlife, including penguins, seals, and whales. Expeditions to Adélie Land offer a unique opportunity to witness the beauty and grandeur of the Antarctic wilderness.

The French Southern Territories provide a rare opportunity to experience the raw and untouched beauty of remote islands and Antarctica. With their pristine natural environments and unique wildlife, these territories offer a truly immersive and unforgettable adventure for those seeking to explore the unspoiled corners of the world.
            ',
                'currency' => 'Euro',
                'language' => 'French',
                'atm' => 'ATMs are not available, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are not available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 90,
            ],
            [
                'countryCode' => 'GA',
                'countryName' => 'Gabon',
                'regionCode' => 'AFRICA',
                'capital' => 'Libreville',
                'shortDescription' => '
            Gabon, known for its vast rainforests, diverse wildlife, and unspoiled natural beauty, offers a remarkable experience for eco-tourists and wildlife enthusiasts. Travelers can embark on thrilling safaris, spot endangered species like gorillas and elephants, and explore the untouched wilderness, making it an ideal destination for those seeking an immersive and authentic African adventure in a pristine and lesser-explored environment.
            ',
                'longDescription' => '
Gabon, located on the west coast of Central Africa, is a country known for its remarkable biodiversity and stunning natural landscapes. It is bordered by Equatorial Guinea, Cameroon, and the Republic of the Congo.

Gabon is famous for its lush rainforests, which cover a significant portion of the country and are home to a wide variety of plant and animal species. The country\'s national parks and protected areas, such as Loango National Park and Ivindo National Park, offer incredible opportunities for wildlife viewing, including elephants, gorillas, chimpanzees, and numerous bird species.

One of the top attractions in Gabon is the Loango National Park, situated on the country\'s coastline. This park is renowned for its diverse ecosystems, including pristine beaches, mangroves, lagoons, and dense forests. Visitors can witness the unique spectacle of wildlife, such as elephants and buffalos, wandering along the sandy beaches and swimming in the ocean.

Another must-visit location in Gabon is the Lopé National Park, a UNESCO World Heritage Site. This park is known for its rich biodiversity and stunning landscapes, including dense forests, savannahs, and rivers. It is home to a significant population of western lowland gorillas, as well as other primates, forest elephants, and antelopes.

For those interested in cultural experiences, the capital city of Libreville offers a vibrant blend of modernity and traditional African culture. Visitors can explore the bustling markets, enjoy local cuisine, and learn about the country\'s history and heritage at museums and cultural centers.

In summary, Gabon is a nature lover\'s paradise, offering incredible opportunities for wildlife viewing and outdoor exploration. With its diverse ecosystems, including rainforests, coastal areas, and savannahs, the country provides a unique and immersive experience for travelers seeking to connect with nature and discover the beauty of Central Africa.
            ',
                'currency' => 'Central African CFA franc',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 91,
            ],
            [
                'countryCode' => 'GM',
                'countryName' => 'Gambia',
                'regionCode' => 'AFRICA',
                'capital' => 'Banjul',
                'shortDescription' => '
            The Gambia, nestled on the west coast of Africa, is a small country known for its vibrant culture, beautiful beaches, and abundant wildlife. Visitors can enjoy river cruises along the Gambia River, explore bustling local markets, and observe diverse bird species in the wetland reserves, making it an attractive destination for nature lovers, cultural enthusiasts, and those seeking a unique African experience.
            ',
                'longDescription' => '
            Gambia, officially known as the Republic of The Gambia, is a small West African country located along the Gambia River. It is known for its stunning natural beauty, vibrant cultural heritage, and welcoming hospitality.

The Gambia is famous for its magnificent coastline, with miles of pristine sandy beaches that attract sun-seekers and water sports enthusiasts. The coastal area, particularly the popular tourist destination of Bakau, offers a range of beach resorts, hotels, and restaurants where visitors can relax and enjoy the tropical atmosphere.

One of the top attractions in The Gambia is the Abuko Nature Reserve, a small but diverse wildlife reserve located near Banjul, the capital city. This protected area is home to a wide range of bird species, monkeys, reptiles, and other animals, making it a haven for nature lovers and birdwatchers.

The Gambia is also renowned for its vibrant cultural heritage and traditional music. Visitors can immerse themselves in the rich local culture by visiting traditional villages, attending lively music performances, and exploring local markets where crafts and artworks are sold.

A visit to the capital city of Banjul is a must for travelers to experience the lively atmosphere, bustling markets, and colonial-era architecture. The city is situated on an island at the mouth of the Gambia River and offers a blend of African and European influences.

Overall, The Gambia offers a unique combination of natural beauty, cultural richness, and warm hospitality. Whether you\'re looking for a beach vacation, wildlife encounters, or cultural exploration, The Gambia has something to offer every traveler seeking an authentic African experience.
            ',
                'currency' => 'Dalasi',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 92,
            ],
            [
                'countryCode' => 'GE',
                'countryName' => 'Georgia',
                'regionCode' => 'ASIA',
                'capital' => 'Tbilisi',
                'shortDescription' => '
            Georgia, located at the crossroads of Europe and Asia, offers a captivating blend of stunning landscapes, rich history, and warm hospitality. Visitors can explore ancient UNESCO World Heritage sites, hike in the majestic Caucasus Mountains, indulge in delicious Georgian cuisine, and discover the vibrant cultural traditions that make Georgia a remarkable destination for history buffs, nature enthusiasts, and food lovers alike.
            ',
                'longDescription' => '
            Georgia, located at the crossroads of Europe and Asia, is a beautiful country known for its stunning landscapes, rich history, warm hospitality, and delicious cuisine.

Nestled in the Caucasus Mountains, Georgia offers breathtaking natural scenery. From the snow-capped peaks of the Greater Caucasus to the lush valleys and vineyards of Kakheti, there is no shortage of picturesque landscapes to explore. The country is also famous for its cave cities, such as Uplistsikhe and Vardzia, which showcase the ancient history and architectural marvels of the region.

The capital city of Tbilisi is a vibrant and charming destination. Its cobblestone streets, colorful houses, and iconic sulfur baths create a unique atmosphere. Visitors can wander through the narrow alleys of the old town, visit historical sites like the Narikala Fortress and Sioni Cathedral, and indulge in the city\'s thriving food and wine scene.

The wine region of Kakheti is a must-visit for wine enthusiasts. It is one of the oldest wine-producing regions in the world and offers stunning vineyard landscapes, traditional wineries, and wine tastings where you can sample Georgia\'s famous qvevri wines.

Another highlight of Georgia is its ancient cave monasteries, particularly in the region of Mtskheta. The Jvari Monastery and Svetitskhoveli Cathedral, both UNESCO World Heritage Sites, showcase the country\'s religious heritage and offer breathtaking views of the surrounding landscapes.

In addition to its natural and cultural attractions, Georgia is renowned for its warm hospitality and traditional Georgian cuisine. From hearty meat dishes like khinkali (dumplings) and shashlik (kebabs) to flavorful vegetable dishes and a wide variety of cheeses and wines, Georgian cuisine is a treat for food lovers.

In summary, Georgia is a country that offers a unique blend of stunning landscapes, rich history, vibrant cities, delicious cuisine, and warm hospitality. Whether you are interested in exploring ancient sites, hiking in the mountains, indulging in wine tastings, or simply experiencing the local culture, Georgia is sure to captivate you with its beauty and charm.
            ',
                'currency' => 'Lari',
                'language' => 'Georgian',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V, 380V',
                'active' => true,
                'sortOrder' => 93,
            ],
            [
                'countryCode' => 'DE',
                'countryName' => 'Germany',
                'regionCode' => 'EUROPE',
                'capital' => 'Berlin',
                'shortDescription' => '
            Germany, known for its rich history, cultural heritage, and picturesque landscapes, offers visitors a wide range of experiences. From exploring historic cities like Berlin and Munich to indulging in world-class museums and castles, and enjoying the scenic beauty of the Black Forest and the Bavarian Alps, Germany is a must-visit destination for history, art, and nature lovers.
            ',
                'longDescription' => '
 Germany, located in the heart of Europe, is a diverse and culturally rich country known for its historical landmarks, picturesque landscapes, technological innovations, and vibrant cities.

One of the main highlights of Germany is its fascinating history. From the iconic Berlin Wall and the Brandenburg Gate to the historic city of Munich and the medieval streets of Rothenburg ob der Tauber, Germany is dotted with numerous historical sites and landmarks that offer a glimpse into its past.

Germany is also famous for its stunning landscapes. The Bavarian Alps, including the Zugspitze, Germany\'s highest peak, attract outdoor enthusiasts with their majestic beauty and offer opportunities for hiking, skiing, and mountaineering. The Black Forest region, with its dense forests, charming villages, and scenic trails, is another popular destination for nature lovers.

The country is home to several world-class cities that offer a mix of history, art, culture, and modernity. Berlin, the capital, is known for its vibrant nightlife, diverse neighborhoods, and cultural institutions like the Berlin Philharmonic and Museum Island. Munich is renowned for its Oktoberfest celebration, beautiful architecture, and the Marienplatz square with its famous Glockenspiel. Other notable cities include Hamburg with its bustling harbor, Frankfurt with its futuristic skyline, and Cologne with its stunning cathedral.

Germany is also known for its technological innovations and engineering prowess. The country is home to famous automobile manufacturers such as BMW, Mercedes-Benz, and Volkswagen, and it has made significant contributions to fields like engineering, science, and renewable energy.

In addition to its historical and cultural attractions, Germany is famous for its beer, sausages, pretzels, and other culinary delights. Visitors can enjoy traditional German cuisine, experience beer festivals like Oktoberfest, and explore local markets for delicious treats.

In summary, Germany offers a combination of rich history, stunning landscapes, vibrant cities, technological advancements, and culinary delights. Whether you are interested in exploring historical sites, immersing yourself in cultural experiences, enjoying outdoor activities, or indulging in delicious food and drink, Germany has something to offer for every traveler.
            ',
                'currency' => 'Euro',
                'language' => 'German',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 94,
            ],
            [
                'countryCode' => 'GH',
                'countryName' => 'Ghana',
                'regionCode' => 'AFRICA',
                'capital' => 'Accra',
                'shortDescription' => '
            Ghana, known as the "Gateway to West Africa," offers a vibrant mix of cultural heritage, stunning landscapes, and welcoming people. Visitors can immerse themselves in the rich history of the Ashanti Kingdom, explore the bustling markets of Accra, and relax on the beautiful beaches of Cape Coast. With its warm hospitality and diverse attractions, Ghana is a destination that showcases the best of African traditions and offers unique experiences to travelers.
            ',
                'longDescription' => '
            Ghana, located on the west coast of Africa, is a country known for its vibrant culture, diverse landscapes, and historical significance. It offers a unique blend of traditional and modern attractions, making it a fascinating destination for travelers.

One of the highlights of Ghana is its rich history and heritage. The country is home to several historical sites, including the Cape Coast Castle and Elmina Castle, which played significant roles in the transatlantic slave trade. These sites provide insight into Ghana\'s past and offer a chance to learn about its cultural heritage.

Ghana is also known for its stunning natural landscapes. The country boasts beautiful sandy beaches along its coastline, such as the popular Kokrobite and Busua Beaches, where visitors can relax, swim, and enjoy water sports. Inland, you\'ll find lush rainforests, picturesque waterfalls like the Wli Waterfalls, and national parks like Mole National Park, which is home to diverse wildlife including elephants, antelopes, and monkeys.

The capital city of Accra is a vibrant metropolis that combines modernity with traditional elements. It offers bustling markets, lively nightlife, and cultural landmarks like the Kwame Nkrumah Mausoleum and the National Museum of Ghana, where you can explore the country\'s history and art. Additionally, the Ashanti region, with its capital Kumasi, is known for its rich Ashanti culture, craftsmanship, and the vibrant Kejetia Market.

Ghana is renowned for its warm hospitality and friendly people. Visitors can immerse themselves in the local culture by participating in traditional festivals, such as the colorful Aboakyer Festival in Winneba or the vibrant Homowo Festival in Accra. Traditional music and dance performances, along with delicious Ghanaian cuisine like jollof rice, banku, and fufu, are also highlights of the Ghanaian experience.

Whether you\'re interested in history, nature, culture, or simply connecting with friendly locals, Ghana offers a captivating travel experience. Its combination of historical landmarks, natural beauty, cultural festivities, and warm hospitality make it a destination worth exploring.
            ',
                'currency' => 'Ghanaian cedi',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 95,
            ],
            [
                'countryCode' => 'GI',
                'countryName' => 'Gibraltar',
                'regionCode' => 'EUROPE',
                'capital' => 'Gibraltar',
                'shortDescription' => '
            Gibraltar, located at the southern tip of Europe, is a small British Overseas Territory that offers a unique blend of British and Mediterranean culture. With its iconic Rock of Gibraltar, stunning views of the Strait of Gibraltar, and a rich history spanning thousands of years, it is a must-visit destination. Travelers can explore the historic sites, enjoy duty-free shopping, and experience the charming blend of British and Spanish influences in this vibrant and picturesque destination.
            ',
                'longDescription' => '
            Gibraltar is a small British Overseas Territory located at the southern tip of the Iberian Peninsula, overlooking the Strait of Gibraltar. It is known for its iconic Rock of Gibraltar, which is a prominent landmark and offers stunning views of the surrounding area.

Gibraltar is famous for its strategic location, historically serving as a key military and trading post. Today, it attracts tourists with its unique blend of British and Mediterranean influences. The territory offers a mix of modern amenities and historical attractions, making it an interesting destination for visitors.

The Rock of Gibraltar is a must-visit attraction. Rising majestically from the peninsula, it provides panoramic views of the Mediterranean Sea and the African coastline. The famous Barbary macaques, the only wild monkeys in Europe, can also be spotted on the Rock.

Main Street is Gibraltar\'s bustling shopping district, lined with a variety of shops, boutiques, and duty-free stores. Visitors can explore the vibrant atmosphere, browse for souvenirs, and enjoy a taste of British and Mediterranean cuisine in the many cafes and restaurants.

Gibraltar is also known for its rich history. The Great Siege Tunnels, carved out of the rock during the 18th century, are a fascinating attraction that offer insights into the territory\'s military past. St. Michael\'s Cave, an impressive natural limestone cave system, is another popular site to explore.

Nature lovers will appreciate Gibraltar\'s natural beauty. The Upper Rock Nature Reserve is home to a diverse range of plant and animal species, making it a haven for hikers, birdwatchers, and nature enthusiasts. The Mediterranean Steps, a challenging hiking trail, offers breathtaking views along the way.

In addition to its attractions, Gibraltar also hosts various cultural events and festivals throughout the year, including the Gibraltar Music Festival and the Gibraltar International Chess Festival.

Overall, Gibraltar offers a unique travel experience with its mix of natural beauty, historical sites, vibrant culture, and stunning views. Its blend of British and Mediterranean influences creates a distinctive atmosphere that attracts visitors from around the world.
            ',
                'currency' => 'Gibraltar pound',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '240V',
                'active' => true,
                'sortOrder' => 96,
            ],
            [
                'countryCode' => 'GR',
                'countryName' => 'Greece',
                'regionCode' => 'EUROPE',
                'capital' => 'Athens',
                'shortDescription' => '
            Greece, known for its ancient history, stunning landscapes, and idyllic islands, is a captivating destination that offers a rich cultural experience. From exploring iconic historical sites such as the Acropolis and Delphi to relaxing on the beautiful beaches of Santorini and Mykonos, Greece has something to offer every traveler. With its warm hospitality, delicious cuisine, and breathtaking scenery, it is a country that should be on everyone\'s travel bucket list.
            ',
                'longDescription' => '
            Greece, located in southeastern Europe, is renowned for its rich history, ancient ruins, stunning landscapes, and beautiful islands. It is widely regarded as the birthplace of Western civilization, with a legacy that includes iconic landmarks, mythology, and a vibrant cultural heritage.

Greece is famous for its historical sites, such as the Acropolis in Athens. The Acropolis is home to the Parthenon, an ancient temple dedicated to the goddess Athena, and it offers breathtaking views of the city. Other notable archaeological sites include the ruins of Delphi, Olympia, and the Palace of Knossos in Crete.

The Greek islands are a major draw for travelers. Santorini, known for its picturesque whitewashed buildings and stunning sunsets, is a favorite destination. Mykonos is renowned for its vibrant nightlife, beautiful beaches, and charming Cycladic architecture. Crete, the largest Greek island, offers a mix of stunning beaches, ancient ruins, and traditional villages.

Greece\'s natural beauty is equally impressive. The country is blessed with diverse landscapes, from the rugged mountains of Zagori to the turquoise waters of the Ionian and Aegean seas. The stunning Meteora, with its monasteries perched on towering rock pillars, and the Samaria Gorge in Crete, one of Europe\'s longest gorges, are must-visit natural wonders.

Greek cuisine is renowned worldwide for its flavors and freshness. From the famous Greek salad and moussaka to souvlaki and spanakopita, the country offers a delightful culinary experience. Visitors can also savor local wines, including the renowned Assyrtiko from Santorini.

Greece\'s vibrant culture and warm hospitality make it a compelling destination. Traditional Greek music, dance, and festivals showcase the country\'s cultural heritage. The warmth and friendliness of the Greek people create a welcoming and memorable experience for travelers.

Whether you\'re exploring ancient ruins, relaxing on idyllic beaches, immersing yourself in Greek mythology, or indulging in delicious cuisine, Greece offers a captivating travel experience. Its combination of history, natural beauty, and vibrant culture make it a destination that leaves a lasting impression on visitors.
            ',
                'currency' => 'Euro',
                'language' => 'Greek',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 97,
            ],
            [
                'countryCode' => 'GL',
                'countryName' => 'Greenland',
                'regionCode' => 'NORTH_AMERICA',
                'capital' => 'Nuuk',
                'shortDescription' => '
            Greenland, the world\'s largest island, is a land of rugged beauty and unique experiences. From witnessing the spectacular Northern Lights to exploring the vast ice fjords and glaciers, Greenland offers unparalleled natural wonders. Visitors can also immerse themselves in the fascinating Inuit culture and enjoy outdoor activities like hiking, dog sledding, and whale watching. It is a destination for adventurers seeking untouched wilderness and unforgettable Arctic experiences.
            ',
                'longDescription' => '
            Greenland, located in the North Atlantic Ocean, is the world\'s largest island and an autonomous territory within the Kingdom of Denmark. Known for its stunning icy landscapes, vast glaciers, and unique Inuit culture, Greenland offers an unforgettable travel experience.

One of the main attractions in Greenland is its breathtaking natural beauty. The country is home to the Greenland Ice Sheet, one of the largest ice masses in the world, covering about 80% of the island. Travelers can witness the mesmerizing icebergs floating in the deep fjords and explore the dramatic coastal cliffs.

Greenland also offers incredible opportunities for adventure and outdoor activities. Visitors can go hiking in the rugged mountains, trek across glaciers, or embark on a dog sledding expedition. The pristine Arctic wilderness provides a playground for activities like kayaking, fishing, and wildlife watching, with a chance to spot whales, seals, polar bears, and a variety of bird species.

The indigenous Inuit culture is an integral part of Greenland\'s identity. Travelers have the opportunity to immerse themselves in the rich traditions, arts, and crafts of the Inuit people. Learning about their way of life, visiting local communities, and experiencing traditional music and dance performances offer a unique cultural experience.

Greenland is also a prime destination for witnessing the mesmerizing natural phenomenon of the Northern Lights. The dark winter skies provide a perfect backdrop for the dancing lights of the aurora borealis, creating a magical and unforgettable spectacle.

In recent years, Greenland has become more accessible to travelers with improved infrastructure and transportation options. The capital city, Nuuk, offers a mix of modern amenities and cultural experiences, with museums, art galleries, and local markets showcasing Greenlandic art and handicrafts.

Visiting Greenland provides an opportunity to disconnect from the bustling world and connect with nature in its purest form. The untouched wilderness, majestic ice formations, and vibrant cultural heritage make Greenland a destination like no other, offering an extraordinary adventure for those seeking an off-the-beaten-path experience.
            ',
                'currency' => 'Danish krone',
                'language' => 'Greenlandic',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V, 230V',
                'active' => true,
                'sortOrder' => 98,
            ],
            [
                'countryCode' => 'GD',
                'countryName' => 'Grenada',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'St. George\'s',
                'shortDescription' => '
            Grenada, known as the "Spice Isle," offers a blend of stunning beaches, lush rainforests, and vibrant cultural heritage. Visitors can explore the picturesque capital of St. George\'s, relax on pristine white-sand beaches, snorkel in crystal-clear waters, and indulge in the island\'s famous spices and cuisine. With its friendly locals, charming towns, and diverse natural beauty, Grenada is an ideal destination for those seeking a laid-back Caribbean getaway with a touch of adventure.
            ',
                'longDescription' => '
            Grenada, located in the Caribbean Sea, is a beautiful island nation known as the "Spice Isle" due to its abundance of spices, including nutmeg, cinnamon, and cloves. It offers a perfect blend of stunning beaches, lush rainforests, and vibrant culture, making it a popular travel destination.

One of the main highlights of Grenada is its pristine beaches and crystal-clear waters. Grand Anse Beach, with its white sand and turquoise waters, is a must-visit for sunbathing, swimming, and water sports. Visitors can also explore other hidden gems like Morne Rouge Beach, Levera Beach, and Bathway Beach, each offering its own unique charm and tranquility.

Grenada is home to stunning natural wonders, such as the Grand Etang National Park and Forest Reserve. This lush rainforest offers hiking trails leading to picturesque waterfalls, including the popular Annandale Falls and Seven Sisters Falls. The park is also home to the Grand Etang Lake, a crater lake nestled in the heart of the rainforest.

For those interested in history and culture, the capital city of St. George\'s is a treasure trove. The city showcases colorful colonial architecture, including the iconic Fort George with panoramic views of the harbor. Visitors can explore the Grenada National Museum, learn about the island\'s history at the Grenada Revolution Museum, and wander through the bustling Market Square to experience the vibrant local culture.

Grenada is known for its warm and friendly people, and visitors have the opportunity to immerse themselves in the local way of life. The island\'s cuisine reflects its diverse cultural influences, with a fusion of African, Caribbean, and European flavors. Trying local dishes like oil down (a one-pot meal) and sampling the world-famous Grenadian chocolate are a must for food enthusiasts.

Another highlight of Grenada is its underwater world. The island is surrounded by coral reefs, making it a paradise for snorkeling and diving. The Molinere Underwater Sculpture Park, featuring a collection of submerged sculptures, offers a unique and artistic underwater experience.

Whether you\'re seeking relaxation on pristine beaches, adventure in the rainforest, cultural exploration, or underwater exploration, Grenada offers a diverse range of experiences. Its natural beauty, warm hospitality, and vibrant culture make it an unforgettable destination in the Caribbean.
            ',
                'currency' => 'East Caribbean dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 99,
            ],
            [
                'countryCode' => 'GP',
                'countryName' => 'Guadeloupe',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Basse-Terre',
                'shortDescription' => '
            Guadeloupe, a French overseas territory in the Caribbean, boasts stunning beaches, lush rainforests, and a vibrant Creole culture. Travelers can explore the beautiful islands of Basse-Terre and Grande-Terre, hike to waterfalls and volcanoes, indulge in delicious French-Caribbean cuisine, and soak up the relaxed island vibes. With its mix of natural wonders, cultural richness, and warm hospitality, Guadeloupe offers a unique and unforgettable Caribbean experience.
            ',
                'longDescription' => '
            Guadeloupe is a captivating archipelago located in the Caribbean Sea, known for its stunning natural beauty, vibrant culture, and French-Caribbean fusion. Comprising several islands, including Basse-Terre, Grande-Terre, Marie-Galante, and Les Saintes, Guadeloupe offers a diverse range of experiences for travelers.

Basse-Terre, the western part of Guadeloupe, is characterized by lush rainforests, towering waterfalls, and the magnificent La Soufrière volcano. Nature enthusiasts will find plenty to explore here, with highlights including the Parc National de la Guadeloupe, home to hiking trails, picturesque waterfalls, and exotic flora and fauna. The Carbet Falls, a series of three waterfalls nestled amidst the rainforest, is a must-visit attraction. Basse-Terre also offers beautiful black sand beaches, such as Plage de Malendure, perfect for snorkeling and diving.

Grande-Terre, the eastern part of Guadeloupe, is known for its pristine white sand beaches, turquoise waters, and lively beach towns. The popular resort area of Sainte-Anne boasts stunning beaches like Plage de Bois Jolan and Plage de la Caravelle, where visitors can relax, swim, and soak up the sun. The town of Le Gosier is a vibrant hub with a range of restaurants, bars, and nightlife options.

Marie-Galante, an island just off the coast of Guadeloupe, offers a slower pace of life and a glimpse into traditional Caribbean culture. It is known for its picturesque landscapes, vast sugarcane fields, and idyllic beaches. Visitors can explore charming villages, visit rum distilleries, and enjoy the laid-back island atmosphere.

Les Saintes, a small archipelago located south of Guadeloupe, is a true tropical paradise. The main island, Terre-de-Haut, boasts pristine beaches, crystal-clear waters, and a picturesque village with colorful houses and charming streets. Visitors can hike up to Fort Napoléon for panoramic views, explore the underwater world through snorkeling or diving, and indulge in fresh seafood at waterfront restaurants.

Guadeloupe offers a rich cultural experience influenced by its French and Caribbean heritage. Visitors can savor delicious Creole cuisine, which combines French culinary techniques with local ingredients and flavors. The vibrant markets, such as Marché Saint-Antoine and Marché de Basse-Terre, showcase an array of tropical fruits, spices, and handicrafts. The island also celebrates traditional festivals, including the lively Carnival season, where colorful parades and music fill the streets.

With its breathtaking landscapes, diverse islands to explore, warm hospitality, and fusion of cultures, Guadeloupe offers a unique and unforgettable travel experience in the Caribbean. Whether you\'re seeking adventure, relaxation, or cultural immersion, Guadeloupe has something to offer every traveler.
            ',
                'currency' => 'Euro',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 100,
            ],
            [
                'countryCode' => 'GU',
                'countryName' => 'Guam',
                'regionCode' => 'OCEANIA',
                'capital' => 'Hagåtña',
                'shortDescription' => '
            Guam, a U.S. territory in the western Pacific, is known for its pristine beaches, vibrant marine life, and fascinating Chamorro culture. Visitors can enjoy water activities like snorkeling, diving, and kayaking, explore historical sites such as World War II relics and ancient latte stone structures, and savor the local cuisine influenced by Asian and Pacific flavors. With its tropical beauty and rich cultural heritage, Guam offers an enchanting destination for beach lovers, history enthusiasts, and those seeking a unique blend of American and Pacific Island experiences.
            ',
                'longDescription' => '
            Guam, a tropical paradise located in the western Pacific Ocean, is an enchanting destination known for its stunning beaches, crystal-clear waters, and vibrant culture. As a U.S. territory, Guam combines American influences with its indigenous Chamorro heritage, creating a unique blend of traditions and attractions.

The island is blessed with breathtaking natural beauty, including pristine white sand beaches and vibrant coral reefs. Tumon Bay, located along the western coast, is the main tourist area and features a stretch of beautiful beaches, luxury resorts, and a lively entertainment district. Visitors can enjoy various water activities such as snorkeling, scuba diving, and jet skiing, or simply relax on the sun-kissed shores.

For those interested in history and culture, Guam offers a wealth of fascinating sites. One of the most significant attractions is the War in the Pacific National Historical Park, which commemorates the events of World War II, including the iconic landing beaches of Asan and Agat. The Latte Stone Park showcases ancient Chamorro stone pillars, symbolizing the island\'s rich indigenous heritage. Visitors can also explore the vibrant capital city of Hagatna, with its historic sites, charming streets, and diverse culinary scene.

Nature lovers will appreciate Guam\'s lush jungles and scenic hiking trails. The Two Lovers Point, a dramatic cliffside overlook, provides breathtaking panoramic views of the ocean and is a popular spot for romantic sunset moments. The Ritidian Point Wildlife Refuge offers opportunities for bird-watching and hiking, while the Tarza Magical Adventure Zone and Water Park provides fun-filled activities for families and thrill-seekers.

Guam is renowned for its warm hospitality and friendly locals. The island\'s cultural festivals, such as the Guam Liberation Day and the Guam Micronesia Island Fair, showcase traditional Chamorro dances, music, arts, and crafts, offering visitors a chance to immerse themselves in the local culture.

With its idyllic beaches, fascinating history, vibrant culture, and welcoming atmosphere, Guam is a tropical paradise that offers a wide range of experiences for every traveler. Whether you\'re seeking relaxation on the beach, exploration of historical sites, or adventure in the great outdoors, Guam is sure to captivate you with its beauty and charm.
            ',
                'currency' => 'United States dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '110V, 220V',
                'active' => true,
                'sortOrder' => 101,
            ],
            [
                'countryCode' => 'GT',
                'countryName' => 'Guatemala',
                'regionCode' => 'CENTRAL_AMERICA',
                'capital' => 'Guatemala City',
                'shortDescription' => '
            Guatemala, located in Central America, offers a diverse range of attractions including ancient Mayan ruins, colonial architecture, lush rainforests, and volcanic landscapes. Visitors can explore the ancient city of Tikal, hike through the stunning landscapes of Lake Atitlán, and immerse themselves in the vibrant indigenous culture. With its rich history, natural beauty, and warm hospitality, Guatemala is a captivating destination for adventurers, history buffs, and nature lovers alike.
            ',
                'longDescription' => '
            Guatemala, located in Central America, is a country known for its rich cultural heritage, breathtaking natural landscapes, and ancient Mayan ruins. It offers a diverse range of experiences for travelers seeking adventure, history, and vibrant traditions.

One of the top attractions in Guatemala is the ancient Mayan city of Tikal, a UNESCO World Heritage Site. Tikal\'s towering pyramids, intricate temples, and lush rainforest surroundings make it a must-visit destination for history enthusiasts and archaeology lovers. Exploring the ruins and witnessing the sunrise or sunset from the top of a pyramid is an unforgettable experience.

Another must-visit location is Lake Atitlán, one of the most beautiful lakes in the world. Surrounded by picturesque volcanoes and Mayan villages, Lake Atitlán offers stunning views and opportunities for water activities such as kayaking, swimming, and boat tours. The villages around the lake, such as Panajachel and San Pedro La Laguna, provide a glimpse into the traditional Mayan culture and offer handicraft markets where you can purchase unique souvenirs.

Antigua Guatemala, the former capital of the country, is a charming colonial city renowned for its well-preserved architecture and vibrant atmosphere. Cobblestone streets, colorful buildings, and beautiful churches create a picturesque setting for exploring. Antigua is also famous for its Semana Santa (Holy Week) celebrations, during which elaborate processions and religious ceremonies take place, attracting visitors from around the world.

Guatemala\'s natural beauty extends to its national parks and natural reserves. Semuc Champey, located in the heart of the jungle, is a series of turquoise pools and cascading waterfalls that offer a refreshing swimming experience. The Pacaya Volcano, near Antigua, allows visitors to hike to the summit and witness lava flows, providing a thrilling adventure.

Visiting Guatemala is not only about its stunning landscapes and ancient history but also about its vibrant culture. Throughout the year, colorful traditional festivals take place, showcasing the country\'s indigenous traditions, music, dance, and cuisine. The markets of Chichicastenango and Sololá are perfect places to immerse yourself in the local culture, shop for handmade crafts, and taste traditional Guatemalan dishes.

In summary, Guatemala is a country of captivating beauty, rich history, and vibrant traditions. From exploring ancient ruins to enjoying the natural wonders of its lakes and volcanoes, and immersing yourself in its cultural festivities, Guatemala offers a truly unique and unforgettable travel experience.
            ',
                'currency' => 'Guatemalan quetzal',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '120V, 230V',
                'active' => true,
                'sortOrder' => 102,
            ],
            [
                'countryCode' => 'GG',
                'countryName' => 'Guernsey',
                'regionCode' => 'EUROPE',
                'capital' => 'St. Peter Port',
                'shortDescription' => '
            Guatemala, the land of the quetzal, is a country known for its stunning natural landscapes, Mayan heritage, and colorful culture. Visitors can explore ancient ruins like Tikal, hike volcanoes, visit charming colonial towns, and experience the vibrant indigenous traditions. With its diverse attractions and warm hospitality, Guatemala offers a unique and unforgettable travel experience.
            ',
                'longDescription' => '
Guernsey, a small island located in the English Channel, is a charming destination known for its stunning coastline, picturesque landscapes, and rich history. As a self-governing British Crown Dependency, Guernsey offers a unique blend of British and French influences, creating a distinct atmosphere and cultural experience.

One of the top attractions in Guernsey is its beautiful coastline. The island is surrounded by sandy beaches, rugged cliffs, and hidden coves, offering breathtaking views and opportunities for coastal walks, sunbathing, and water sports. Some popular beaches include Vazon Bay, Cobo Bay, and Petit Bot Bay, each with its own unique charm and natural beauty.

St. Peter Port, the capital of Guernsey, is a vibrant harbor town with a rich history and picturesque streets. The town is known for its charming shops, cafes, and restaurants, as well as its historic attractions such as Castle Cornet, a 13th-century fortress that offers panoramic views of the harbor. Exploring the narrow streets and enjoying the lively atmosphere of St. Peter Port is a must-do when visiting Guernsey.

For nature lovers, the Guernsey countryside offers a tranquil retreat. The island is dotted with beautiful gardens, including the famous Guernsey Botanical Gardens and the idyllic Candie Gardens, which provide a peaceful setting for leisurely walks and picnics. Guernsey also boasts a network of walking and cycling paths that allow visitors to explore the island\'s scenic countryside and enjoy its diverse flora and fauna.

Guernsey\'s history is a significant part of its appeal. The island played a strategic role during World War II and has several historic sites and museums that offer insights into its wartime past. The German Occupation Museum and the Underground Military Museum provide a glimpse into Guernsey\'s wartime experience and are fascinating places to visit for history enthusiasts.

Additionally, Guernsey is known for its vibrant cultural scene. The island hosts various events and festivals throughout the year, including the Guernsey Literary Festival, the Guernsey International Food Festival, and the Guernsey Film Festival. These events showcase the island\'s creativity, culinary delights, and artistic talents, providing visitors with a unique cultural experience.

In summary, Guernsey is a charming island destination with a rich history, stunning coastline, and vibrant culture. Whether you\'re exploring the picturesque streets of St. Peter Port, enjoying the natural beauty of the beaches and countryside, or immersing yourself in the island\'s cultural events, Guernsey offers a delightful and memorable travel experience.
            ',
                'currency' => 'Guernsey pound',
                'language' => 'English, French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 103,
            ],
            [
                'countryCode' => 'GN',
                'countryName' => 'Guinea',
                'regionCode' => 'AFRICA',
                'capital' => 'Conakry',
                'shortDescription' => '
            Guinea, located in West Africa, is a country rich in cultural heritage and natural beauty. From vibrant markets and traditional music to its stunning landscapes of mountains, waterfalls, and wildlife reserves, Guinea offers a unique and authentic African travel experience that should not be missed.
            ',
                'longDescription' => '
            Guinea, officially known as the Republic of Guinea, is a country located on the western coast of Africa. It is bordered by several countries, including Guinea-Bissau, Senegal, Mali, Côte d\'Ivoire, Liberia, and Sierra Leone. Guinea is famous for its diverse landscapes, vibrant culture, and rich history, making it an intriguing destination for travelers.

The country offers a variety of natural attractions, including lush rainforests, mountain ranges, and beautiful coastal areas. The Fouta Djallon highlands in central Guinea are known for their scenic beauty, waterfalls, and hiking trails. The Mount Nimba Strict Nature Reserve, a UNESCO World Heritage site, is home to unique flora and fauna and offers opportunities for wildlife spotting and trekking.

Conakry, the capital city of Guinea, is a bustling metropolis that reflects the country\'s cultural vibrancy. The city features colorful markets, lively street scenes, and historical landmarks. The Conakry Grand Mosque and the Presidential Palace are notable architectural gems that showcase the country\'s Islamic influences and colonial heritage. The city\'s vibrant nightlife and local cuisine, with dishes like jollof rice and grilled fish, add to its appeal.

For those interested in history and culture, Guinea has a rich cultural heritage. The country is home to diverse ethnic groups, each with its own traditions, music, and dance forms. Visiting local villages and experiencing traditional ceremonies and festivals, such as the Baga Nimba festival, offers a unique glimpse into Guinea\'s cultural tapestry. The National Museum in Conakry showcases a collection of artifacts that highlight the country\'s history and artistic heritage.

Nature enthusiasts will find Guinea\'s wildlife and natural reserves captivating. The Ziama Massif in southeastern Guinea is a biodiversity hotspot, known for its unique flora and fauna, including chimpanzees and rare bird species. The coastal regions offer opportunities for birdwatching, marine wildlife encounters, and relaxing on pristine beaches.

Guinea is also known for its traditional craftsmanship, particularly in the production of intricate masks, wood carvings, and textiles. Exploring local craft markets and workshops provides a chance to witness the creativity and skill of Guinean artisans and take home unique souvenirs.

In summary, Guinea is a captivating destination with its diverse landscapes, vibrant culture, and rich history. From exploring the bustling capital city of Conakry to venturing into the natural wonders of its rainforests and mountains, Guinea offers a unique and rewarding travel experience for those seeking to discover the beauty and cultural heritage of West Africa.
            ',
                'currency' => 'Guinean franc',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 104,
            ],
            [
                'countryCode' => 'GW',
                'countryName' => 'Guinea-Bissau',
                'regionCode' => 'AFRICA',
                'capital' => 'Bissau',
                'shortDescription' => '
            Guinea-Bissau, situated on the West African coast, is a hidden gem known for its unspoiled beaches, lush mangroves, and vibrant wildlife. Visitors can explore its diverse ecosystems, including national parks and nature reserves, and experience the rich cultural heritage and traditions of the local people, making it an ideal destination for nature lovers and adventure seekers.
            ',
                'longDescription' => '
            Guinea-Bissau, officially known as the Republic of Guinea-Bissau, is a small country located on the west coast of Africa. It shares borders with Senegal to the north and Guinea to the south and east. Guinea-Bissau is known for its unique blend of African cultures, beautiful landscapes, and rich biodiversity, making it an intriguing destination for travelers.

One of the main attractions in Guinea-Bissau is its stunning coastline. With miles of pristine beaches, turquoise waters, and peaceful fishing villages, the country offers a relaxing and picturesque coastal experience. The Bijagós Archipelago, a group of islands off the coast, is a UNESCO Biosphere Reserve and is renowned for its natural beauty, mangrove forests, and diverse wildlife. Visitors can enjoy beach activities, boat tours, and immerse themselves in the local culture of the coastal communities.

The capital city, Bissau, is a vibrant and bustling city that showcases the country\'s history and cultural heritage. Exploring the city, visitors can discover colonial architecture, colorful markets, and local street art. The National Ethnographic Museum provides insights into the traditional cultures and customs of Guinea-Bissau\'s various ethnic groups.

For nature lovers and birdwatching enthusiasts, Guinea-Bissau offers a rich and diverse ecosystem. The Bijagós Islands are home to a variety of bird species, including the rare and endangered saltwater hippos. The national parks and nature reserves, such as Cantanhez Forest and Dulombi-Boé National Park, provide opportunities to spot wildlife, including monkeys, crocodiles, and a wide range of bird species.

Guinea-Bissau is also known for its vibrant music and dance scene. Traditional music styles such as gumbe and kussundé reflect the cultural diversity of the country, and visitors can experience live performances and dance events that showcase the rhythmic and energetic music of Guinea-Bissau.

Visiting local villages and communities offers a chance to immerse oneself in the daily life and traditions of the Guinean people. Traditional ceremonies and festivals, such as the annual Balanta Carnival, provide a glimpse into the cultural heritage and spiritual beliefs of the country.

In summary, Guinea-Bissau offers a unique blend of natural beauty, cultural diversity, and warm hospitality. From its stunning coastline and pristine beaches to its vibrant cities and rich wildlife, the country provides a rewarding and authentic travel experience for those seeking an off-the-beaten-path destination in West Africa.
            ',
                'currency' => 'West African CFA franc',
                'language' => 'Portuguese',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 105,
            ],
            [
                'countryCode' => 'GY',
                'countryName' => 'Guyana',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Georgetown',
                'shortDescription' => '
            Guyana, located on the northeastern coast of South America, offers breathtaking natural beauty with its vast rainforests, pristine rivers, and majestic waterfalls like Kaieteur Falls. It\'s a paradise for eco-tourism, where visitors can embark on wildlife expeditions, jungle treks, and river cruises to discover the country\'s incredible biodiversity, including rare bird species and diverse flora and fauna.
            ',
                'longDescription' => '
            Guyana, officially known as the Co-operative Republic of Guyana, is a diverse and fascinating country located on the northeastern coast of South America. It is bordered by Venezuela to the west, Brazil to the south, Suriname to the east, and the Atlantic Ocean to the north. Known for its untouched rainforests, majestic waterfalls, and diverse wildlife, Guyana offers a unique and off-the-beaten-path travel experience.

One of the top attractions in Guyana is its pristine rainforests, which cover more than 80% of the country\'s land area. The Kaieteur National Park is home to the spectacular Kaieteur Falls, one of the world\'s tallest single-drop waterfalls. Visitors can witness the awe-inspiring beauty of the falls and explore the surrounding rainforest, teeming with exotic flora and fauna. The Iwokrama Forest and the Kanuku Mountains are also popular destinations for nature lovers, offering opportunities for hiking, birdwatching, and wildlife spotting.

Guyana is renowned for its rich biodiversity, with numerous species of birds, mammals, reptiles, and plants. The country is a birdwatcher\'s paradise, boasting over 800 bird species, including the stunning Guianan cock-of-the-rock and the elusive harpy eagle. Wildlife enthusiasts can also encounter giant river otters, jaguars, capybaras, and various monkey species in the pristine rainforest habitats.

The capital city, Georgetown, showcases a blend of colonial and Caribbean influences. Visitors can explore the historic buildings, vibrant markets, and immerse themselves in the local culture. St. George\'s Cathedral, one of the tallest wooden churches in the world, is a notable landmark worth visiting. The city also offers a chance to experience Guyanese cuisine, a fusion of Indian, African, and Caribbean flavors.

For adventure seekers, Guyana offers unique opportunities for ecotourism and outdoor activities. The Rupununi Savannahs in the southern part of the country provide a scenic backdrop for activities such as wildlife safaris, river trips, and hiking. The Essequibo River, one of the longest and widest rivers in South America, offers thrilling kayaking and fishing adventures.

Guyana\'s indigenous communities provide an opportunity to learn about their traditional way of life and cultural heritage. Many communities welcome visitors, offering authentic experiences such as storytelling, traditional crafts, and traditional ceremonies.

In summary, Guyana is a hidden gem for nature lovers and adventure seekers. Its untouched rainforests, breathtaking waterfalls, and diverse wildlife make it an ideal destination for ecotourism and exploration. The blend of cultural influences, friendly locals, and off-the-beaten-path experiences create a unique and memorable travel experience in Guyana.
            ',
                'currency' => 'Guyanese dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '240V',
                'active' => true,
                'sortOrder' => 106,
            ],
            [
                'countryCode' => 'HT',
                'countryName' => 'Haiti',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Port-au-Prince',
                'shortDescription' => '
            Haiti, known for its vibrant culture and rich history, offers visitors a unique Caribbean experience. From exploring the vibrant art scene in Port-au-Prince to relaxing on stunning beaches like Labadee, Haiti offers a mix of cultural immersion, natural beauty, and warm hospitality that makes it a compelling destination to discover.
            ',
                'longDescription' => '
            Haiti, located on the western part of the island of Hispaniola in the Caribbean, is a country with a rich history, vibrant culture, and natural beauty. Despite facing various challenges, Haiti offers unique travel experiences for those seeking to immerse themselves in its rich heritage and stunning landscapes.

Haiti is famous for its historical significance as the first independent nation in Latin America and the Caribbean, born out of a successful slave revolution in the early 19th century. Its capital city, Port-au-Prince, is a bustling urban center where you can explore historical sites like the Citadelle Laferrière, a UNESCO World Heritage Site and a symbol of Haiti\'s independence. The city also offers vibrant markets, art galleries, and museums that showcase the country\'s unique cultural expressions.

One of the top attractions in Haiti is its beautiful beaches and coastal areas. The coastal town of Jacmel is known for its charming colonial architecture, vibrant arts scene, and pristine beaches. Labadee, a private resort owned by a cruise line, offers white sandy beaches, crystal-clear waters, and various water activities for visitors to enjoy.

Haiti\'s natural landscapes are truly breathtaking. The Bassin-Bleu waterfall, located near Jacmel, is a hidden gem surrounded by lush vegetation. Visitors can swim in the turquoise pools beneath the cascading waterfalls and enjoy the tranquil ambiance of the surroundings. The Pic Macaya National Park is another must-visit destination, known for its stunning mountain ranges, cloud forests, and diverse flora and fauna.

Haitian cuisine is a fusion of African, French, and Caribbean influences, creating a unique and flavorful culinary experience. Try traditional dishes like griot (marinated and fried pork) with plantains, or tassot (fried beef) served with pikliz (spicy pickled vegetables). Local markets and street food stalls are great places to sample Haitian delicacies and interact with the friendly locals.

Despite its challenges, Haiti is a country that offers a rich cultural tapestry, natural wonders, and warm hospitality. By visiting Haiti, travelers can contribute to the local economy and help support the country\'s ongoing efforts towards development and sustainability. It\'s an opportunity to explore a lesser-known destination and gain a deeper understanding of its people, history, and resilience.
            ',
                'currency' => 'Haitian gourde',
                'language' => 'French, Haitian Creole',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '110V, 220V',
                'active' => true,
                'sortOrder' => 107,
            ],
            [
                'countryCode' => 'HM',
                'countryName' => 'Heard Island and McDonald Islands',
                'regionCode' => 'OCEANIA',
                'capital' => '',
                'shortDescription' => '
            Heard Island and McDonald Islands, located in the remote southern Indian Ocean, are uninhabited and primarily known for their unique and untouched natural environments. Despite their challenging accessibility, these islands offer incredible opportunities for wildlife enthusiasts, with diverse bird species, marine life, and breathtaking landscapes, making it a destination of interest for those seeking pristine and remote wilderness experiences.
            ',
                'longDescription' => '
            Heard Island and McDonald Islands are remote and uninhabited territories located in the southern Indian Ocean, approximately 4,000 kilometers southwest of mainland Australia. The islands are known for their pristine and untouched natural environment, making them a fascinating destination for adventure seekers and nature enthusiasts.

Heard Island, the largest of the two islands, is an active volcanic island with rugged terrain and towering peaks. It is home to several glaciers, including the Big Ben Glacier, which is one of the few places where glaciers meet the ocean in the region. The island offers opportunities for hiking and mountaineering, allowing visitors to explore its volcanic landscapes, dramatic cliffs, and unique flora and fauna.

McDonald Islands, located about 44 kilometers west of Heard Island, are a group of small, barren, and uninhabited volcanic islands. The islands are characterized by their volcanic activity, including frequent eruptions and volcanic cones. Due to their remote location and challenging access, visiting the McDonald Islands is extremely rare and typically limited to scientific expeditions.

Both Heard Island and McDonald Islands are part of the Australian External Territory of Heard Island and McDonald Islands. Access to these islands is restricted and requires special permits and arrangements. Most visitors to these remote territories are scientific researchers or expedition groups with specific interests in geology, biology, or climate studies.

The allure of Heard Island and McDonald Islands lies in their untouched wilderness and the opportunity to witness rare geological and ecological processes. Their isolation and pristine nature offer a unique experience for those who appreciate remote and extreme environments. However, due to their remote location and limited access, visiting these islands requires careful planning, preparation, and adherence to strict environmental regulations to protect their fragile ecosystems.
            ',
                'currency' => 'Australian dollar',
                'language' => 'English',
                'atm' => 'ATMs are not available, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are not available for mobile phones.',
                'electricity' => '240V',
                'active' => true,
                'sortOrder' => 108,
            ],
            [
                'countryCode' => 'HN',
                'countryName' => 'Honduras',
                'regionCode' => 'CENTRAL_AMERICA',
                'capital' => 'Tegucigalpa',
                'shortDescription' => '
            Honduras, located in Central America, offers a rich cultural heritage, stunning natural beauty, and a variety of outdoor adventures. From exploring ancient Mayan ruins like Copán to diving in the Caribbean\'s second-largest barrier reef, visitors can immerse themselves in vibrant traditions, lush rainforests, and pristine beaches, making it an enticing destination for history buffs, nature lovers, and adventure seekers.
            ',
                'longDescription' => '
            Honduras is a vibrant country located in Central America, bordered by Guatemala to the west, El Salvador to the southwest, Nicaragua to the southeast, the Caribbean Sea to the north, and the Pacific Ocean to the south. It is known for its rich cultural heritage, stunning natural landscapes, and warm hospitality.

With its diverse geography, Honduras offers a variety of attractions for travelers. The ancient Mayan ruins of Copan, a UNESCO World Heritage site, are a must-visit destination, showcasing intricate stone carvings and impressive archaeological remains. The Bay Islands, including Roatan, Utila, and Guanaja, are renowned for their stunning coral reefs, making them a paradise for scuba diving and snorkeling enthusiasts. The city of La Ceiba is famous for its lively Carnival celebrations and access to the beautiful Pico Bonito National Park, known for its lush rainforests and diverse wildlife.

Honduras is also home to stunning beaches along its Caribbean and Pacific coastlines, such as Tela, Trujillo, and the Gulf of Fonseca. Adventure seekers can explore the rugged mountains and dense forests of the country\'s interior, including Celaque National Park, home to Honduras\' highest peak, Cerro Las Minas.

Visiting Honduras allows travelers to immerse themselves in its vibrant culture, from exploring traditional markets and sampling local cuisine to experiencing colorful festivals and lively music. The warmth and friendliness of the Honduran people add to the charm of the country, making it a memorable destination for cultural experiences.

In summary, Honduras offers a diverse range of attractions, including ancient ruins, pristine beaches, vibrant coral reefs, lush rainforests, and rich cultural experiences. Whether you are seeking adventure, relaxation, or cultural immersion, Honduras has something to offer every traveler.
            ',
                'currency' => 'Honduran lempira',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '110V, 220V',
                'active' => true,
                'sortOrder' => 109,
            ],
            [
                'countryCode' => 'HK',
                'countryName' => 'Hong Kong',
                'regionCode' => 'ASIA',
                'capital' => 'Hong Kong',
                'shortDescription' => '
            Hong Kong is a vibrant metropolis known for its stunning skyline, bustling street markets, and fusion of Eastern and Western cultures. With its diverse culinary scene, world-class shopping, and iconic attractions like Victoria Harbour and the Peak, Hong Kong offers a unique blend of modernity and tradition, making it a must-visit destination for those seeking a dynamic city experience.
            ',
                'longDescription' => '
            Hong Kong is a vibrant and bustling city located on the southeastern coast of China. It is known for its stunning skyline, thriving economy, and rich cultural heritage. As a Special Administrative Region of China, Hong Kong has its own unique identity and offers a fascinating blend of Eastern and Western influences.

One of the top attractions in Hong Kong is its iconic skyline, dominated by towering skyscrapers and stunning architectural marvels. The cityscape is best appreciated from Victoria Peak, where visitors can enjoy panoramic views of Hong Kong Island, Victoria Harbour, and Kowloon.

The bustling neighborhoods of Central and Causeway Bay are popular shopping destinations, offering a wide range of luxury boutiques, department stores, and local markets. The Temple Street Night Market is a must-visit for its lively atmosphere and a variety of street food, fashion items, and souvenirs.

Nature lovers will find solace in Hong Kong\'s abundant green spaces. The country parks and hiking trails, such as the famous Dragon\'s Back, offer a refreshing escape from the urban hustle. The outlying islands, such as Lantau Island with its Big Buddha statue and beautiful beaches, provide opportunities for relaxation and exploration.

Cultural and historical sites are also plentiful in Hong Kong. The Man Mo Temple, Wong Tai Sin Temple, and Po Lin Monastery are just a few examples of the city\'s diverse religious heritage. The former British colonial buildings in Central, the historic fishing village of Tai O, and the heritage-rich Kowloon Walled City Park showcase the city\'s unique history and cultural significance.

With its vibrant culinary scene, Hong Kong is a paradise for food lovers. From traditional Cantonese dim sum to international gourmet delights, the city offers a diverse range of dining options to satisfy every palate.

In summary, Hong Kong is a captivating city that blends modernity with tradition, offering a dynamic urban landscape, scenic natural beauty, rich history, and a diverse culinary experience. Whether you\'re seeking a cosmopolitan shopping spree, cultural immersion, or outdoor adventures, Hong Kong has something for everyone.
            ',
                'currency' => 'Hong Kong dollar',
                'language' => 'Chinese, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '220V',
                'active' => true,
                'sortOrder' => 110,
            ],
            [
                'countryCode' => 'HU',
                'countryName' => 'Hungary',
                'regionCode' => 'EUROPE',
                'capital' => 'Budapest',
                'shortDescription' => '
            Hungary is a charming European country with a rich history, stunning architecture, and a vibrant cultural scene. Visitors can explore the majestic capital city of Budapest, soak in the thermal baths, indulge in delicious Hungarian cuisine, and experience the warmth and hospitality of the locals, making it a captivating destination for travelers.
            ',
                'longDescription' => '
            Hungary, located in Central Europe, is a country known for its rich history, stunning architecture, and vibrant cultural scene. It is home to beautiful landscapes, charming towns, and a mix of traditional and modern attractions.

Budapest, the capital city of Hungary, is a major highlight for travelers. The city is bisected by the Danube River and boasts numerous architectural wonders, including the iconic Hungarian Parliament Building, Buda Castle, and St. Stephen\'s Basilica. Visitors can relax in the famous thermal baths, stroll along the Danube Promenade, and explore the vibrant Jewish Quarter.

Outside of Budapest, Hungary offers a wealth of attractions. The charming town of Eger is known for its historical castle, beautiful Baroque architecture, and excellent wines. The picturesque village of Hollókő is a UNESCO World Heritage Site and showcases traditional Hungarian rural life. Lake Balaton, the largest freshwater lake in Central Europe, is a popular summer destination, offering swimming, sailing, and relaxation.

Hungary is also famous for its thermal baths and spas. The city of Hévíz is home to the largest thermal lake in Europe, known for its healing properties. Other notable spa towns include Szeged, Debrecen, and Miskolc, where visitors can enjoy rejuvenating spa treatments and thermal baths.

Cuisine is an essential part of Hungarian culture, and sampling local dishes is a must-do for visitors. Traditional Hungarian cuisine features hearty dishes such as goulash, lángos (fried bread), and chimney cake. Budapest is also known for its vibrant food scene, with a wide range of restaurants, cafes, and street food stalls serving both Hungarian and international dishes.

In summary, Hungary offers a mix of historical, cultural, and natural attractions that appeal to a wide range of travelers. Whether it\'s exploring the architectural wonders of Budapest, relaxing in thermal baths, or discovering the charm of Hungarian towns and countryside, Hungary promises a memorable and diverse travel experience.
            ',
                'currency' => 'Hungarian forint',
                'language' => 'Hungarian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 111,
            ],
            [
                'countryCode' => 'IS',
                'countryName' => 'Iceland',
                'regionCode' => 'EUROPE',
                'capital' => 'Reykjavik',
                'shortDescription' => '
            Iceland is a land of breathtaking natural beauty, featuring stunning landscapes such as glaciers, waterfalls, geysers, and volcanic formations. It offers unique experiences like witnessing the Northern Lights, relaxing in hot springs, exploring ice caves, and immersing in the vibrant cultural scene. With its unspoiled nature and adventurous spirit, Iceland is a must-visit destination for nature lovers and adventure seekers alike.
            ',
                'longDescription' => '
            Iceland, located in the North Atlantic Ocean, is a stunning island country known for its breathtaking natural landscapes, including volcanoes, glaciers, hot springs, and waterfalls. It is often referred to as the "Land of Fire and Ice" due to its unique geological features.

The capital city, Reykjavik, serves as a gateway to Iceland\'s wonders. It offers a vibrant cultural scene, with art galleries, museums, and a lively nightlife. Visitors can explore the colorful buildings of the Old Town, visit the iconic Hallgrímskirkja church, and soak in the geothermal pools of the Blue Lagoon.

One of the top attractions in Iceland is the Golden Circle, a popular tourist route that includes three main sites: Thingvellir National Park, where you can witness the dramatic tectonic plate boundary; the powerful Gullfoss waterfall; and the geothermal area of Geysir, home to the famous Strokkur geyser that erupts regularly.

Another must-visit destination is the South Coast, renowned for its black sand beaches, picturesque waterfalls such as Seljalandsfoss and Skógafoss, and the magnificent Jökulsárlón Glacier Lagoon, where you can witness floating icebergs.

For those seeking adventure, Iceland offers various activities such as hiking, glacier climbing, and exploring ice caves. The Vatnajökull National Park, covering a significant part of the country, is a paradise for outdoor enthusiasts, featuring glaciers, volcanoes, and diverse wildlife.

Iceland is also famous for its stunning displays of the Northern Lights, also known as the Aurora Borealis. The best time to witness this natural phenomenon is during the winter months, away from light pollution.

In summary, Iceland is a captivating destination with its unparalleled natural beauty and unique geological wonders. From the vibrant capital city to the awe-inspiring landscapes, Iceland offers a memorable travel experience for adventurers, nature lovers, and those seeking a glimpse of the extraordinary forces of nature.
            ',
                'currency' => 'Icelandic króna',
                'language' => 'Icelandic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 112,
            ],
            [
                'countryCode' => 'IN',
                'countryName' => 'India',
                'regionCode' => 'ASIA',
                'capital' => 'New Delhi',
                'shortDescription' => '
            India is a vast and diverse country that offers a rich tapestry of cultures, traditions, landscapes, and historical sites. From the bustling cities of Delhi and Mumbai to the serene backwaters of Kerala and the majestic Taj Mahal in Agra, India showcases a vibrant mix of ancient heritage, spirituality, delicious cuisine, and warm hospitality, making it a captivating destination for explorers and seekers of cultural immersion.
            ',
                'longDescription' => '
            India, located in South Asia, is a country rich in history, culture, and diverse landscapes. It is known for its vibrant cities, iconic landmarks, magnificent temples, bustling markets, and delicious cuisine.
India, located in South Asia, is a country rich in history, culture, and diverse landscapes. It is known for its vibrant cities, iconic landmarks, magnificent temples, bustling markets, and delicious cuisine.

One of the highlights of India is the city of Jaipur, known as the "Pink City" due to its stunning pink-colored buildings. Here, visitors can explore the grand Amber Fort, marvel at the intricate architecture of Hawa Mahal (Palace of Winds), and immerse themselves in the local culture at the bustling bazaars.

Another must-visit destination is Agra, home to the world-famous Taj Mahal. This stunning white marble mausoleum is a UNESCO World Heritage site and a symbol of love. The intricate craftsmanship and the beauty of the Taj Mahal are truly mesmerizing.

In the northern region of India, the city of Varanasi holds immense spiritual significance. Situated on the banks of the holy Ganges River, Varanasi is considered one of the oldest inhabited cities in the world. Visitors can witness the sacred rituals and ceremonies along the ghats (steps leading to the river), take a boat ride at sunrise or sunset, and experience the vibrant atmosphere of the city.

For nature enthusiasts, a visit to Kerala in southern India is a must. Known as "God\'s Own Country," Kerala offers serene backwaters, lush green landscapes, and beautiful beaches. A houseboat cruise through the backwaters of Alleppey or Kumarakom is a unique experience, allowing you to immerse yourself in the tranquility of the surroundings.

India is also renowned for its rich wildlife. National parks such as Ranthambore, Kaziranga, and Bandhavgarh offer the opportunity to spot majestic tigers, rhinoceroses, elephants, and other fascinating wildlife species.

With its diverse regional cuisines, India is a paradise for food lovers. From spicy street food to flavorful curries, each region offers its own culinary delights. Exploring the local food markets and trying popular dishes like biryani, butter chicken, dosa, and various sweets is a delightful culinary journey.

In summary, India is a country that captivates travelers with its vibrant culture, rich history, stunning architecture, diverse landscapes, and flavorful cuisine. Whether you\'re seeking spiritual enlightenment, exploring ancient heritage sites, or immersing yourself in bustling city life, India offers a truly unique and unforgettable travel experience.
One of the highlights of India is the city of Jaipur, known as the "Pink City" due to its stunning pink-colored buildings. Here, visitors can explore the grand Amber Fort, marvel at the intricate architecture of Hawa Mahal (Palace of Winds), and immerse themselves in the local culture at the bustling bazaars.

            ',
                'currency' => 'Indian rupee',
                'language' => 'Hindi, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 113,
            ],
            [
                'countryCode' => 'ID',
                'countryName' => 'Indonesia',
                'regionCode' => 'ASIA',
                'capital' => 'Jakarta',
                'shortDescription' => '
            Indonesia is an archipelago of stunning natural beauty, boasting lush rainforests, pristine beaches, and iconic volcanic landscapes such as Mount Bromo and Lake Toba. With its diverse cultures, ancient temples like Borobudur, vibrant markets, and warm hospitality, Indonesia offers a remarkable blend of adventure, cultural exploration, and relaxation, making it a must-visit destination for travelers seeking unique experiences in Southeast Asia.
            ',
                'longDescription' => '
            Indonesia, located in Southeast Asia, is an archipelago nation consisting of thousands of islands. It is known for its stunning natural landscapes, rich cultural heritage, vibrant cities, and warm hospitality.

One of the top destinations in Indonesia is Bali, often referred to as the "Island of the Gods." Bali offers a unique blend of beautiful beaches, lush rice terraces, ancient temples, and vibrant arts and crafts. Visitors can relax on pristine white-sand beaches, explore the vibrant nightlife in Seminyak, witness traditional Balinese ceremonies, and visit iconic temples like Tanah Lot and Uluwatu.

Another popular destination is Yogyakarta, known as the cultural heart of Java. Here, travelers can visit the magnificent Borobudur Temple, a UNESCO World Heritage site, and witness the sunrise over the ancient stupas. The nearby Prambanan Temple, dedicated to Hindu deities, is also worth exploring. Yogyakarta is also known for its traditional arts and crafts, including batik fabric and silver jewelry.

For nature enthusiasts, a visit to Komodo National Park is a must. This UNESCO World Heritage site is home to the Komodo dragon, the world\'s largest lizard. Visitors can take guided tours to see these fascinating creatures in their natural habitat and explore the park\'s pristine beaches and coral reefs through snorkeling or diving.

In the capital city of Jakarta, travelers can experience the vibrant urban life of Indonesia. From modern skyscrapers to bustling markets, Jakarta offers a mix of cultures and cuisines. Visitors can explore historical sites like the National Monument, visit world-class museums, enjoy shopping in upscale malls, and savor the diverse culinary delights of Indonesian cuisine.

Indonesia is also famous for its diverse marine life. The Raja Ampat Islands in West Papua are a paradise for snorkelers and divers, with their crystal-clear waters, colorful coral reefs, and a wide variety of marine species. The Gili Islands in Lombok and the island of Bunaken in North Sulawesi are also popular diving destinations.

In summary, Indonesia offers a wealth of natural beauty, cultural treasures, and warm hospitality. From stunning beaches and vibrant cities to ancient temples and unique wildlife, the country provides a diverse range of experiences for travelers. Whether you\'re seeking adventure, relaxation, or cultural immersion, Indonesia has something to offer for everyone.
            ',
                'currency' => 'Indonesian rupiah',
                'language' => 'Indonesian',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 114,
            ],
            [
                'countryCode' => 'IR',
                'countryName' => 'Iran',
                'regionCode' => 'ASIA',
                'capital' => 'Tehran',
                'shortDescription' => '
            Iran is a country of rich history, captivating architecture, and breathtaking landscapes. From the ancient ruins of Persepolis and the stunning mosques of Isfahan to the scenic beauty of the deserts and mountains, Iran offers a unique cultural experience and warm hospitality, making it an enticing destination for those seeking to delve into its fascinating heritage and natural wonders.
            ',
                'longDescription' => '
            Iran, officially known as the Islamic Republic of Iran, is located in the Middle East, bordered by several countries including Iraq, Turkey, and Afghanistan. It is a country with a rich history and cultural heritage, offering a diverse range of experiences for travelers.

One of the highlights of Iran is its architectural wonders, including ancient Persian ruins and stunning Islamic structures. The city of Isfahan is known for its breathtaking Islamic architecture, with attractions such as the Imam Mosque, Sheikh Lotfollah Mosque, and the historic Naqsh-e Jahan Square. The ancient city of Persepolis, a UNESCO World Heritage site, showcases the grandeur of the Persian Empire with its impressive ruins.

For nature lovers, Iran offers diverse landscapes to explore. The northern region of Iran is home to the Alborz Mountains, where you can find lush forests, cascading waterfalls, and picturesque villages. The stunning deserts of Dasht-e Kavir and Dasht-e Lut in the central and eastern parts of the country offer unique opportunities for desert adventures, including camel trekking and stargazing.

Iran is also known for its warm hospitality and rich culinary traditions. Traditional Persian cuisine, with its aromatic spices, flavorful rice dishes, and succulent kebabs, is a highlight for many visitors. Exploring local markets and trying street food in cities like Tehran and Shiraz is a delightful culinary experience.

Historical cities like Yazd and Kashan offer a glimpse into Iran\'s ancient past, with their well-preserved traditional architecture, ancient windcatchers, and historic bathhouses. These cities provide an opportunity to immerse yourself in Iranian culture and learn about the traditions and customs of the country.

In addition to its cultural and natural attractions, Iran is also home to vibrant bazaars where you can shop for Persian carpets, handicrafts, spices, and traditional clothing. The bustling Grand Bazaar in Tehran is a must-visit, offering a labyrinth of shops selling a wide variety of goods.

It is important to note that when visiting Iran, it is advisable to be familiar with local customs and respect the country\'s cultural norms. Iran has a rich history and a welcoming population, and by engaging with the local culture and people, travelers can have a truly memorable experience.

In summary, Iran offers a unique blend of ancient history, stunning landscapes, rich cultural heritage, and warm hospitality. From architectural wonders and natural beauty to culinary delights and traditional bazaars, Iran provides a captivating travel experience for those seeking to explore its treasures.
            ',
                'currency' => 'Iranian rial',
                'language' => 'Persian',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 115,
            ],
            [
                'countryCode' => 'IQ',
                'countryName' => 'Iraq',
                'regionCode' => 'ASIA',
                'capital' => 'Baghdad',
                'shortDescription' => '
            Iraq, with its ancient Mesopotamian sites, vibrant markets, and diverse cultural heritage, offers a glimpse into the cradle of civilization. Visitors can explore the archaeological wonders of Babylon and Ur, immerse themselves in the bustling streets of Baghdad, and experience the warm hospitality of the Iraqi people, making it a destination for history enthusiasts and cultural explorers.
            ',
                'longDescription' => '
            Iraq, located in the Middle East, is a country with a rich history and diverse cultural heritage. While it has faced challenges in recent years, it is gradually rebuilding and remains a destination of interest for travelers.

One of the main draws for visitors to Iraq is its historical sites. The city of Baghdad, the capital, is home to iconic landmarks such as the Baghdad Citadel, an ancient fortress with panoramic views of the city, and the Abbasid Palace, which showcases the architectural grandeur of the Abbasid era. The ancient city of Babylon, with its well-preserved ruins and the famous Ishtar Gate, is another must-visit site for history enthusiasts.

The Kurdistan Region in northern Iraq offers breathtaking natural beauty, including the rugged landscapes of the Zagros Mountains and the serene waters of Lake Dukan. The cities of Erbil and Sulaymaniyah in this region provide a blend of history, culture, and modern amenities, with attractions like the Erbil Citadel and the Sulaymaniyah City Museum.

For religious tourism, the holy city of Najaf attracts Shia Muslims from around the world, as it is the burial place of Imam Ali, a revered figure in Shia Islam. The holy city of Karbala, known for the shrine of Imam Hussein, also draws pilgrims and visitors who come to pay their respects and participate in religious ceremonies.

Iraqi cuisine is a highlight for food lovers, with its rich flavors and diverse dishes. Traditional Iraqi dishes include kebabs, biryanis, and various types of rice-based dishes. Exploring local markets, known as souks, offers a chance to sample local delicacies and purchase spices, sweets, and handmade crafts.

It is important to note that travel to Iraq requires careful planning and consideration of the current security situation. It is advisable to check travel advisories and obtain the necessary visas and permits before visiting. It is also recommended to travel with a reputable tour operator or local guide who is familiar with the area.

In summary, Iraq offers a mix of ancient history, cultural heritage, natural beauty, and religious significance. While the country continues to rebuild and restore its attractions, it provides an opportunity for travelers to explore its historical sites, experience its diverse culture, and interact with its welcoming people.
            ',
                'currency' => 'Iraqi dinar',
                'language' => 'Arabic, Kurdish',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 116,
            ],
            [
                'countryCode' => 'IE',
                'countryName' => 'Ireland',
                'regionCode' => 'EUROPE',
                'capital' => 'Dublin',
                'shortDescription' => '
            Ireland, known as the Emerald Isle, captivates visitors with its stunning landscapes, rich history, and vibrant culture. From the breathtaking Cliffs of Moher to the lively streets of Dublin, travelers can indulge in traditional music, explore ancient castles, and experience the warmth and friendliness of the Irish people, making it an ideal destination for nature lovers, history buffs, and those seeking an authentic cultural experience.
            ',
                'longDescription' => '
            Ireland, also known as the Emerald Isle, is a country located in Western Europe. It is famous for its stunning landscapes, rich history, vibrant culture, and warm hospitality. From bustling cities to picturesque countryside, Ireland offers a diverse range of experiences for travelers.

Dublin, the capital city, is a lively and vibrant destination. It is home to iconic landmarks such as Trinity College, where you can visit the famous Book of Kells, and the Guinness Storehouse, where you can learn about the history of Ireland\'s famous stout beer. Strolling through the charming streets of Temple Bar, exploring the historic Dublin Castle, and enjoying traditional Irish music in one of the many pubs are popular activities for visitors.

The Wild Atlantic Way is a must-visit route that stretches along the western coast of Ireland, offering breathtaking coastal scenery, rugged cliffs, and picturesque villages. The Cliffs of Moher, one of Ireland\'s most iconic natural wonders, are a highlight of this route. The Ring of Kerry, a scenic drive through County Kerry, showcases the beauty of Ireland\'s lakes, mountains, and coastline.

For those interested in Irish history and heritage, a visit to the ancient sites of Newgrange and the Hill of Tara is recommended. These sites are associated with Ireland\'s ancient past and are renowned for their archaeological significance. The Rock of Cashel, a medieval fortress with impressive stone structures, is another popular historical attraction.

Ireland is also known for its traditional music, dance, and folklore. The city of Galway, located on the west coast, is famous for its vibrant music scene and lively festivals. The Aran Islands, located off the coast of County Galway, offer a glimpse into traditional Irish island life, with their rugged landscapes and Gaelic-speaking communities.

Visitors to Ireland can indulge in delicious traditional cuisine, including hearty stews, fresh seafood, and the famous Irish breakfast. Pubs across the country offer a warm and welcoming atmosphere, where you can enjoy a pint of Guinness and listen to traditional music sessions.

In summary, Ireland is a captivating destination with its stunning landscapes, rich history, vibrant culture, and friendly people. Whether you explore its cities, drive along its scenic coastlines, or immerse yourself in its traditional music and folklore, Ireland offers a truly unforgettable travel experience.
            ',
                'currency' => 'Euro',
                'language' => 'Irish, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 117,
            ],
            [
                'countryCode' => 'IM',
                'countryName' => 'Isle of Man',
                'regionCode' => 'EUROPE',
                'capital' => 'Douglas',
                'shortDescription' => '
            The Isle of Man, located in the Irish Sea, offers a unique blend of stunning natural beauty, rich history, and thrilling motorsports events such as the Isle of Man TT races. With its picturesque landscapes, charming villages, and fascinating Celtic and Viking heritage, the island provides an ideal setting for outdoor activities, cultural exploration, and unforgettable adventures.
            ',
                'longDescription' => '
            The Isle of Man is a self-governing British Crown dependency located in the Irish Sea, between Great Britain and Ireland. Known for its rugged coastal landscapes, rich history, and annual motorcycle races, the Isle of Man offers a unique travel experience.

Douglas, the capital and largest town of the Isle of Man, is a bustling hub with a picturesque seafront promenade. Visitors can explore the Manx Museum to learn about the island\'s history, including its Viking past and Celtic heritage. The Tower of Refuge, a small castle-like structure located on St Mary\'s Isle, is an iconic landmark and a symbol of safety for sailors.

The Isle of Man is famous for the Isle of Man TT (Tourist Trophy) motorcycle race, held annually in late May and early June. Motorcycle enthusiasts from around the world flock to the island to witness this thrilling event, where riders tackle the challenging Snaefell Mountain Course, known for its twists, turns, and high speeds.

Nature lovers will appreciate the diverse landscapes of the Isle of Man. The island is home to beautiful sandy beaches, rocky cliffs, and lush green hills. The Calf of Man, a small island off the southwest coast, is a nature reserve and bird sanctuary, offering opportunities for birdwatching and coastal walks.

Peel, located on the west coast, is a charming town known for its medieval Peel Castle, which overlooks the bay. The town\'s narrow streets, fishing harbor, and sandy beach create a picturesque setting. Visitors can explore the House of Manannan museum to learn about the island\'s Celtic and Viking heritage.

The Isle of Man also boasts an extensive network of heritage railways, including the Steam Railway, Electric Railway, and Snaefell Mountain Railway. These railways provide a nostalgic way to travel across the island and enjoy the scenic views.

The Isle of Man has a rich cultural scene, with various festivals and events throughout the year. The Manx National Heritage organizes cultural and historical exhibitions, and the island\'s arts and music scene is vibrant, with concerts and performances held regularly.

Overall, the Isle of Man offers a unique blend of natural beauty, history, and thrilling motor racing. Whether you explore its historic sites, enjoy outdoor activities along the coast, or immerse yourself in its cultural events, the Isle of Man is a destination that leaves a lasting impression.
            ',
                'currency' => 'British pound',
                'language' => 'English, Manx',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => false,
                'sortOrder' => 118,
            ],
            [
                'countryCode' => 'IL',
                'countryName' => 'Israel',
                'regionCode' => 'ASIA',
                'capital' => 'Jerusalem',
                'shortDescription' => '
            Israel is a land of ancient history, religious significance, and diverse landscapes, making it a captivating destination for travelers. From exploring the historical sites of Jerusalem, floating in the Dead Sea, to discovering the vibrant city of Tel Aviv, visitors can experience a unique blend of cultural heritage, natural wonders, and warm hospitality in this fascinating country.
            ',
                'longDescription' => '
            Israel is a country located in the Middle East, bordered by Lebanon to the north, Syria to the northeast, Jordan to the east, Egypt to the southwest, and the Mediterranean Sea to the west. It is famous for its rich history, diverse culture, religious significance, and stunning landscapes, attracting travelers from around the world.

One of the top locations to visit in Israel is Jerusalem, a city of immense religious importance. Jerusalem is home to the Old City, a UNESCO World Heritage site, where you can explore significant religious sites such as the Western Wall, the Church of the Holy Sepulchre, and the Dome of the Rock. The vibrant markets, historical landmarks, and diverse neighborhoods make Jerusalem a captivating destination.

Tel Aviv, the cosmopolitan and cultural hub of Israel, offers a completely different experience. Known for its vibrant nightlife, beautiful beaches, and modern architecture, Tel Aviv is a city that never sleeps. Take a stroll along the promenade of Tel Aviv\'s coastline, visit the Carmel Market to experience the bustling atmosphere, and explore the city\'s thriving art and culinary scene.

The Dead Sea, located at the lowest point on Earth, is a natural wonder that attracts visitors from all over. The high salt content of the water allows you to effortlessly float on its surface, providing a unique and relaxing experience. The mineral-rich mud found in the Dead Sea is also renowned for its therapeutic properties, making it a popular destination for wellness and spa retreats.

Visiting Israel offers a blend of ancient history, religious significance, and natural beauty. From exploring the ancient ruins of Masada and the Roman city of Caesarea to floating in the Dead Sea and hiking in the picturesque landscapes of the Galilee region, there is something for everyone. The country also offers opportunities for adventure activities such as diving in the Red Sea, exploring the Negev Desert, and hiking in the scenic trails of the Golan Heights.

In addition to its historical and natural attractions, Israel is known for its diverse culinary scene, blending flavors from the Middle East, Mediterranean, and Jewish traditions. Don\'t miss the chance to taste delicious falafel, hummus, shawarma, and other local delicacies.

Whether you are interested in history, culture, religion, outdoor adventures, or simply relaxing on beautiful beaches, Israel offers a wealth of experiences and a chance to explore a land steeped in history and cultural significance.
            ',
                'currency' => 'Israeli new shekel',
                'language' => 'Hebrew',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => false,
                'sortOrder' => 119,
            ],
            [
                'countryCode' => 'IT',
                'countryName' => 'Italy',
                'regionCode' => 'EUROPE',
                'capital' => 'Rome',
                'shortDescription' => '
            Italy is a country renowned for its rich history, stunning art and architecture, and mouthwatering cuisine. From exploring the ancient ruins of Rome, marveling at the art of Florence, to indulging in the exquisite flavors of Italian cuisine, visitors can immerse themselves in a cultural feast and create unforgettable memories in this beautiful Mediterranean country.
            ',
                'longDescription' => '
            Italy, located in Southern Europe, is renowned for its rich history, stunning art and architecture, delicious cuisine, and picturesque landscapes. It is a country that offers a diverse range of experiences, from exploring ancient ruins to relaxing on beautiful coastlines.

One of the top locations to visit in Italy is Rome, the capital city and a treasure trove of historical sites. The iconic Colosseum, Roman Forum, and Pantheon are must-visit attractions that showcase the grandeur of ancient Rome. Additionally, Vatican City, an independent city-state within Rome, is home to St. Peter\'s Basilica and the Vatican Museums, which house famous artworks such as Michelangelo\'s Sistine Chapel ceiling.

Florence, the birthplace of the Renaissance, is another popular destination in Italy. The city is renowned for its incredible art and architecture, with highlights including the Uffizi Gallery, the Florence Cathedral (Duomo), and the Ponte Vecchio. Visitors can immerse themselves in the artistic legacy of masters like Leonardo da Vinci, Michelangelo, and Botticelli.

Venice, known as the "City of Canals," is a unique and enchanting destination. Exploring the network of canals by gondola or walking through the narrow streets and bridges is a romantic experience. St. Mark\'s Square, the Doge\'s Palace, and the beautiful Byzantine-inspired Basilica di San Marco are among the famous landmarks in Venice.

Italy\'s natural beauty is also captivating, with regions like Tuscany, the Amalfi Coast, and the Italian Lakes offering breathtaking landscapes. Tuscany is renowned for its rolling hills, vineyards, and charming medieval towns like Siena and San Gimignano. The Amalfi Coast, with its dramatic cliffs, colorful coastal towns, and crystal-clear waters, is a popular destination for relaxation and scenic drives. The Italian Lakes, including Lake Como and Lake Garda, offer picturesque surroundings, charming villages, and opportunities for water activities.

Italian cuisine is celebrated worldwide, and each region has its own specialties. From pizza in Naples to pasta in Bologna, gelato in Florence to seafood in Sicily, the culinary delights of Italy are endless. Don\'t forget to indulge in local wines, such as Chianti in Tuscany and Prosecco in Veneto.

Italy\'s unique blend of history, art, culture, natural beauty, and culinary delights make it a captivating destination for travelers. Whether you\'re exploring ancient ruins, admiring masterpieces, savoring delicious food, or simply enjoying the Mediterranean lifestyle, Italy offers a memorable and enriching experience.
            ',
                'currency' => 'Euro',
                'language' => 'Italian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V',
                'active' => true,
                'sortOrder' => 120,
            ],
            [
                'countryCode' => 'JM',
                'countryName' => 'Jamaica',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Kingston',
                'shortDescription' => '
            Jamaica is a Caribbean paradise known for its vibrant culture, stunning beaches, and reggae music. From the lush Blue Mountains to the iconic Dunn\'s River Falls, visitors can experience breathtaking natural beauty, indulge in delicious Jamaican cuisine, and immerse themselves in the lively rhythms and warm hospitality of this tropical island.
            ',
                'longDescription' => '
            Jamaica, located in the Caribbean Sea, is known for its vibrant culture, stunning natural landscapes, reggae music, and warm hospitality. It is a popular destination for beach lovers, adventure enthusiasts, and those seeking a laid-back tropical getaway.

One of the top locations to visit in Jamaica is Montego Bay, a resort city with beautiful white sand beaches, crystal-clear waters, and vibrant nightlife. The famous Hip Strip offers a range of shops, restaurants, and bars, while Doctor\'s Cave Beach is a popular spot for swimming and sunbathing. Visitors can also explore historical sites such as Rose Hall Great House and enjoy thrilling water activities like snorkeling and diving.

Ocho Rios, located on Jamaica\'s northern coast, is another must-visit destination. It is known for its lush rainforests, stunning waterfalls, and adventure attractions. Dunn\'s River Falls, a cascading waterfall that visitors can climb, is a major highlight. Mystic Mountain offers exhilarating experiences like ziplining and bobsledding, while Dolphin Cove allows visitors to swim with dolphins and interact with other marine animals.

Negril, located on the western coast of Jamaica, is famous for its seven-mile stretch of sandy beach and breathtaking sunsets. The beach is lined with resorts, restaurants, and beach bars, creating a lively and relaxed atmosphere. Negril is also known for its cliff diving at the popular Rick\'s Café, where visitors can watch daring cliff jumpers or take the plunge themselves.

Jamaica\'s rich culture and music scene are major attractions. Kingston, the capital city, is the birthplace of reggae music and home to the Bob Marley Museum, where visitors can learn about the life and legacy of the legendary musician. The annual Reggae Sumfest, held in Montego Bay, is a vibrant music festival that attracts reggae and dancehall fans from around the world.

Jamaican cuisine is a fusion of flavors influenced by African, European, and Indian traditions. Local specialties include jerk chicken, ackee and saltfish, curry goat, and delicious tropical fruits. Visitors can savor authentic Jamaican dishes at local eateries and experience the island\'s unique culinary heritage.

Whether you\'re lounging on the beach, exploring waterfalls, immersing yourself in reggae music, or indulging in flavorful cuisine, Jamaica offers a diverse range of experiences that capture the spirit of the Caribbean. Its warm climate, natural beauty, and friendly people make it a memorable destination for travelers seeking relaxation, adventure, and cultural immersion.
            ',
                'currency' => 'Jamaican dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '110V, 230V',
                'active' => true,
                'sortOrder' => 121,
            ],
            [
                'countryCode' => 'JP',
                'countryName' => 'Japan',
                'regionCode' => 'ASIA',
                'capital' => 'Tokyo',
                'shortDescription' => '
            Japan is a fascinating blend of ancient traditions and modern innovation, offering visitors a unique cultural experience. From the bustling streets of Tokyo to the serene temples of Kyoto and the picturesque landscapes of Mount Fuji, Japan offers diverse attractions, delicious cuisine, and a rich history that make it a must-visit destination for travelers.
            ',
                'longDescription' => '
            Japan, located in East Asia, is a country famous for its unique blend of ancient traditions and modern innovations. It offers a captivating mix of historic sites, stunning landscapes, vibrant cities, and a rich cultural heritage that attracts millions of visitors every year.

One of the top locations to visit in Japan is Tokyo, the bustling capital city. Tokyo is a dynamic metropolis known for its cutting-edge technology, futuristic architecture, and vibrant street life. Visitors can explore iconic landmarks such as the Tokyo Tower and Tokyo Skytree, immerse themselves in the vibrant atmosphere of Shibuya Crossing, and experience traditional Japanese culture in historic districts like Asakusa. Tokyo also offers a wide range of shopping, dining, and entertainment options.

Kyoto, known as the cultural heart of Japan, is a must-visit destination for its well-preserved temples, traditional gardens, and historic streets. The city is home to numerous UNESCO World Heritage sites, including the iconic Kinkaku-ji (Golden Pavilion) and Fushimi Inari Shrine with its thousands of torii gates. Visitors can participate in a traditional tea ceremony, stroll through the historic Gion district, and admire the seasonal beauty of cherry blossoms or autumn foliage.

Another popular destination is Osaka, known for its lively atmosphere, delicious street food, and vibrant nightlife. The city is famous for its modern architecture, such as the Umeda Sky Building and Osaka Castle. Visitors can also experience traditional Japanese performing arts at the National Bunraku Theatre and enjoy the bustling shopping and entertainment district of Dotonbori.

Beyond the cities, Japan offers breathtaking natural landscapes. Mount Fuji, the country\'s tallest peak, is an iconic symbol and a popular destination for hikers and nature lovers. The historic city of Hiroshima is home to the Peace Memorial Park, commemorating the tragic events of World War II. The scenic coastal region of Hokkaido offers stunning landscapes, hot springs, and opportunities for winter sports.

Japan is renowned for its culinary delights, including sushi, ramen, tempura, and matcha green tea. Each region has its own specialty dishes, and visitors can explore local food markets, street stalls, and restaurants to indulge in a wide variety of flavors.

From its ancient temples and serene gardens to its cutting-edge technology and bustling cityscapes, Japan offers a captivating blend of tradition and modernity. Whether you\'re interested in history, nature, culture, or cuisine, Japan has something to offer every traveler. Its warm hospitality, efficient transportation system, and commitment to excellence make it a memorable and rewarding destination to explore.
            ',
                'currency' => 'Japanese yen',
                'language' => 'Japanese',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '100V',
                'active' => true,
                'sortOrder' => 122,
            ],
            [
                'countryCode' => 'JE',
                'countryName' => 'Jersey',
                'regionCode' => 'EUROPE',
                'capital' => 'Saint Helier',
                'shortDescription' => '
            Jersey is a charming island in the English Channel known for its stunning coastline, sandy beaches, and picturesque countryside. With a unique blend of French and British influences, visitors can explore historical castles, indulge in delicious seafood, and enjoy outdoor activities such as hiking, surfing, and cycling, making Jersey a delightful destination for nature lovers and history enthusiasts alike.
            ',
                'longDescription' => 'Jersey is a country located in Europe. It is known for its lush greenery, vibrant culture, and rich history. Jersey offers a range of outdoor activities, including trekking, hiking, and birdwatching.',
                'currency' => 'British pound',
                'language' => 'English, French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 123,
            ],
            [
                'countryCode' => 'JO',
                'countryName' => 'Jordan',
                'regionCode' => 'ASIA',
                'capital' => 'Amman',
                'shortDescription' => '
            Jordan is a captivating Middle Eastern country famous for its ancient wonders, such as the magnificent city of Petra and the well-preserved Roman ruins in Jerash. With its rich history, warm hospitality, and breathtaking landscapes encompassing the Dead Sea, Wadi Rum desert, and the Red Sea, Jordan offers a unique cultural experience and outdoor adventures that make it an enticing destination for travelers.
            ',
                'longDescription' => '
            Jordan, located in the heart of the Middle East, is a country known for its rich history, ancient ruins, and stunning natural landscapes. It offers a unique blend of cultural heritage, warm hospitality, and diverse experiences that attract travelers from around the world.

One of the most famous locations to visit in Jordan is the ancient city of Petra. Carved into the red sandstone cliffs, Petra is a UNESCO World Heritage Site and one of the New Seven Wonders of the World. The iconic Treasury (Al-Khazneh) is a must-see, but exploring the entire archaeological site reveals tombs, temples, and intricate rock-cut facades that showcase the ingenuity of the Nabatean civilization.

Another remarkable destination is the Dead Sea, a saltwater lake bordered by Jordan to the east. Known for its high salt concentration, the Dead Sea allows visitors to effortlessly float on its surface and experience its renowned therapeutic properties. It\'s also a great place to indulge in luxurious spa treatments and enjoy the serene beauty of the surrounding desert landscape.

The historic city of Jerash is a treasure trove of Roman ruins. Known as the "Pompeii of the East," Jerash showcases well-preserved Roman architecture, including the Oval Plaza, the Temple of Artemis, and the impressive Hadrian\'s Arch. Visitors can witness Roman reenactments, explore the ancient streets, and immerse themselves in the fascinating history of the region.

In addition to its historical sites, Jordan offers breathtaking natural wonders. The Wadi Rum desert, also known as the Valley of the Moon, features stunning red sand dunes, towering cliffs, and rock formations. It\'s a popular destination for adventure enthusiasts who can enjoy activities like jeep safaris, camel treks, and camping under the starry desert sky.

Jordan is also home to the Jordanian segment of the Great Rift Valley, where the spectacular landscapes of Wadi Mujib and Dana Nature Reserve can be found. These areas offer opportunities for hiking, wildlife spotting, and experiencing the rugged beauty of the country\'s natural landscapes.

Lastly, the capital city of Amman provides a vibrant and modern contrast to Jordan\'s historical sites. With its bustling souks, ancient citadel, and modern neighborhoods, Amman offers a taste of contemporary Jordanian culture, cuisine, and urban life. Visitors can explore the city\'s vibrant arts scene, savor traditional Jordanian dishes, and discover its charming blend of old and new.

Jordan\'s rich heritage, stunning landscapes, and warm hospitality make it an enticing destination for travelers seeking both cultural and natural experiences. Whether you\'re exploring ancient ruins, floating in the Dead Sea, or immersing yourself in vibrant city life, Jordan offers a truly unforgettable journey filled with history, adventure, and warm encounters with its friendly people.
            ',
                'currency' => 'Jordanian dinar',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 124,
            ],
            [
                'countryCode' => 'KZ',
                'countryName' => 'Kazakhstan',
                'regionCode' => 'ASIA',
                'capital' => 'Nur-Sultan',
                'shortDescription' => '
            Kazakhstan, the largest landlocked country in the world, offers a diverse range of attractions. From the modern cityscape of Nur-Sultan to the stunning landscapes of the Altai Mountains and the vast steppes of the Central Asia region, visitors can immerse themselves in the country\'s unique culture, explore ancient historical sites, and experience the hospitality of the Kazakh people. Kazakhstan also serves as a gateway to the Silk Road, making it a fascinating destination for history enthusiasts and adventure seekers alike.
            ',
                'longDescription' => '
            Kazakhstan, located in Central Asia, is the world\'s ninth-largest country known for its vast steppes, rugged mountains, and diverse cultural heritage. It offers a unique blend of natural beauty, nomadic traditions, and modern cityscapes, making it an intriguing destination for travelers.

One of the top locations to visit in Kazakhstan is the city of Almaty. Surrounded by the majestic Tien Shan Mountains, Almaty offers a mix of Soviet-era architecture, vibrant markets, and a thriving food scene. Visitors can explore the beautiful Zenkov Cathedral, stroll through the central park, and enjoy panoramic views from Kok Tobe Hill. Additionally, Almaty serves as a gateway to the nearby Almaty Mountains, offering opportunities for hiking, skiing, and mountaineering.

Another remarkable destination is Astana, the capital city of Kazakhstan. Renamed Nur-Sultan in 2019, the city showcases futuristic architecture, including the iconic Bayterek Tower and the Palace of Peace and Reconciliation. Visitors can also explore the Astana Opera, visit museums, and experience the city\'s vibrant cultural scene. Astana is a symbol of Kazakhstan\'s rapid development and serves as a testament to its ambition and modernization.

For those seeking natural beauty, the Charyn Canyon is a must-visit attraction. Located in the eastern part of the country, the canyon features stunning rock formations, deep gorges, and vibrant colors. Travelers can hike along the canyon trails, enjoy panoramic views, and witness the mesmerizing beauty of this geological wonder.

Additionally, Kazakhstan is home to the magnificent Lake Baikal, the world\'s largest and deepest freshwater lake. Located in the eastern part of the country, near the border with Russia, Lake Baikal offers breathtaking landscapes, crystal-clear waters, and unique flora and fauna. Visitors can engage in activities such as boating, fishing, and trekking, and immerse themselves in the serene atmosphere of this natural gem.

Kazakhstan\'s cultural heritage is also fascinating, with its nomadic traditions and ancient Silk Road history. The city of Turkistan is renowned for the Mausoleum of Khoja Ahmed Yasawi, a UNESCO World Heritage Site and an important pilgrimage destination for Muslims. The historical city of Shymkent, located in the south, showcases ancient architecture, vibrant bazaars, and a rich cultural heritage.

In summary, Kazakhstan offers a diverse range of attractions, from its modern cities and architectural marvels to its stunning natural landscapes and cultural treasures. Whether exploring the bustling streets of Almaty, marveling at the futuristic architecture of Nur-Sultan, or immersing yourself in the beauty of the country\'s mountains and canyons, Kazakhstan promises a unique and unforgettable travel experience.
            ',
                'currency' => 'Kazakhstani tenge',
                'language' => 'Kazakh, Russian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 125,
            ],
            [
                'countryCode' => 'KE',
                'countryName' => 'Kenya',
                'regionCode' => 'AFRICA',
                'capital' => 'Nairobi',
                'shortDescription' => '
            Kenya, known for its breathtaking landscapes and abundant wildlife, offers an unforgettable safari experience. From the iconic Maasai Mara National Reserve to the stunning Rift Valley and the majestic Mount Kenya, visitors can witness the annual wildebeest migration, spot the "Big Five" animals, and engage in various outdoor activities such as hiking, birdwatching, and cultural encounters with local tribes. With its diverse ecosystems and vibrant culture, Kenya offers a unique blend of adventure, natural beauty, and cultural immersion that makes it a must-visit destination for nature and wildlife enthusiasts.
            ',
                'longDescription' => '
            Kenya, located in East Africa, is a country known for its incredible wildlife, stunning landscapes, and vibrant culture. It offers a wide range of travel experiences, from thrilling safaris to relaxing beach retreats, making it a popular destination for nature enthusiasts and adventure seekers alike.

One of the top locations to visit in Kenya is the Maasai Mara National Reserve. This world-renowned safari destination is home to the famous Great Migration, where millions of wildebeest and other wildlife species migrate in search of fresh grazing lands. Visitors can witness this incredible natural spectacle, go on game drives to spot the Big Five (lion, leopard, elephant, buffalo, and rhino), and experience the unique Maasai culture through interactions with the local communities.

Another must-visit destination is Amboseli National Park, located at the foot of Mount Kilimanjaro. This park offers breathtaking views of the iconic mountain and is famous for its large herds of elephants. Visitors can enjoy game drives, nature walks, and bird watching, all while taking in the awe-inspiring scenery.

For a different experience, the coastal region of Kenya, particularly Mombasa and Diani Beach, offers beautiful white sandy beaches and turquoise waters. Travelers can relax on the pristine beaches, engage in water sports like snorkeling and diving, and explore the historic town of Mombasa with its charming Old Town and ancient fortresses.

Kenya is also home to a diverse range of national parks and reserves, such as Tsavo National Park, Samburu National Reserve, and Lake Nakuru National Park, each offering unique landscapes and wildlife encounters.

Beyond its natural wonders, Kenya has a rich cultural heritage. The capital city, Nairobi, is a vibrant cosmopolitan hub with a bustling atmosphere, modern infrastructure, and a thriving arts and music scene. Visitors can explore the Nairobi National Museum, visit the Giraffe Centre to interact with giraffes up close, and enjoy the vibrant nightlife and culinary delights the city has to offer.

In summary, Kenya is a country of extraordinary beauty, from its diverse wildlife and breathtaking landscapes to its rich cultural heritage. Whether embarking on a safari adventure, relaxing on the stunning beaches, or immersing oneself in the vibrant city life, Kenya offers a truly unforgettable travel experience.
            ',
                'currency' => 'Kenyan shilling',
                'language' => 'Swahili, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '',
                'active' => true,
                'sortOrder' => 126,
            ],
            [
                'countryCode' => 'KI',
                'countryName' => 'Kiribati',
                'regionCode' => 'OCEANIA',
                'capital' => 'Tarawa',
                'shortDescription' => '
            Kiribati, a remote island nation in the Pacific Ocean, offers pristine beaches, crystal-clear waters, and vibrant marine life. With its untouched natural beauty and rich Polynesian culture, visitors can enjoy activities such as snorkeling, diving, fishing, and immersing themselves in the local way of life. Kiribati provides a unique opportunity to escape the crowds, connect with nature, and experience the authentic Pacific Island lifestyle.
            ',
                'longDescription' => '
            Kiribati is a Pacific island nation located in the central Pacific Ocean. It is made up of 33 coral atolls and reef islands, offering visitors a unique and untouched tropical paradise. Known for its pristine beaches, crystal-clear waters, and rich marine biodiversity, Kiribati is a dream destination for those seeking tranquility and natural beauty.

One of the top locations to visit in Kiribati is the island of Tarawa. This is where the capital city, South Tarawa, is located. It is a vibrant and bustling hub with a blend of modern amenities and traditional island life. Visitors can explore local markets, interact with the friendly locals, and learn about the unique culture and history of Kiribati.

Another popular destination is the Phoenix Islands Protected Area. This UNESCO World Heritage Site is one of the largest marine protected areas in the world and is home to a diverse range of marine life, including coral reefs, sea turtles, and various fish species. Snorkeling and diving enthusiasts will be amazed by the vibrant underwater ecosystems and the opportunity to spot rare and endangered species.

For those seeking a true remote island experience, the Line Islands, particularly Christmas Island and Fanning Island, offer pristine beaches, clear lagoons, and opportunities for water activities like swimming, snorkeling, and fishing. These islands provide a peaceful and secluded getaway where visitors can unwind and connect with nature.

Visiting Kiribati provides a chance to immerse oneself in the traditional Kiribati way of life. From witnessing traditional dance performances to learning about ancient customs and rituals, visitors can gain a deeper understanding and appreciation of the local culture.

In summary, Kiribati offers a unique and off-the-beaten-path travel experience. Its untouched natural beauty, rich marine biodiversity, and warm hospitality of the locals make it a paradise for nature lovers and cultural enthusiasts alike. Whether exploring the vibrant capital city, snorkeling in pristine waters, or simply relaxing on secluded beaches, Kiribati promises an unforgettable journey into the heart of the Pacific.
            ',
                'currency' => 'Australian dollar',
                'language' => 'English, Gilbertese',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 127,
            ],
            [
                'countryCode' => 'KW',
                'countryName' => 'Kuwait',
                'regionCode' => 'ASIA',
                'capital' => 'Kuwait City',
                'shortDescription' => '
            Kuwait, a small but culturally rich country in the Arabian Peninsula, offers a blend of modernity and tradition. Visitors can explore iconic landmarks like the Kuwait Towers, experience traditional souks and markets, and indulge in delicious Middle Eastern cuisine. Kuwait\'s warm hospitality, fascinating history, and unique cultural experiences make it a worthwhile destination for those seeking an authentic Arabian adventure.
            ',
                'longDescription' => '
            Kuwait is a small country located in the northeastern part of the Arabian Peninsula in Western Asia. It is bordered by Iraq to the north and Saudi Arabia to the south. Known for its rich history, vibrant culture, and modern development, Kuwait offers a unique blend of tradition and progress.

One of the top locations to visit in Kuwait is the capital city, Kuwait City. Here, visitors can explore iconic landmarks such as the Kuwait Towers, a symbol of the country\'s modernization. The city is also home to the Grand Mosque, which showcases stunning Islamic architecture and serves as an important religious site. The Souk Al-Mubarakiya is a traditional market where visitors can experience the local culture, shop for traditional crafts, spices, and enjoy authentic Kuwaiti cuisine.

Another popular destination is Failaka Island, located off the coast of Kuwait City. This island has archaeological sites dating back to ancient civilizations and offers a glimpse into Kuwait\'s rich history. Visitors can explore the ruins, visit the museum, and relax on the island\'s beautiful beaches.

For nature enthusiasts, the Al-Khiran Reserve is a must-visit. This protected area is known for its diverse ecosystem, including mangrove forests, salt flats, and coastal habitats. It is an ideal place for birdwatching, hiking, and enjoying the natural beauty of Kuwait.

Kuwait is also known for its annual cultural events and festivals. The Hala February Festival is a month-long celebration that includes various cultural activities, exhibitions, concerts, and fireworks. The Kuwait International Film Festival and the Gulf Run, a motorsport event, are also popular among locals and visitors.

In summary, Kuwait offers a unique blend of modernity and tradition. From exploring the vibrant cityscape of Kuwait City to immersing oneself in the country\'s rich history and natural beauty, visitors to Kuwait can experience a diverse range of attractions and experiences. The warm hospitality of the Kuwaiti people further enhances the travel experience, making Kuwait a memorable destination in the Arabian Peninsula.
            ',
                'currency' => 'Kuwaiti dinar',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 128,
            ],
            [
                'countryCode' => 'KG',
                'countryName' => 'Kyrgyzstan',
                'regionCode' => 'ASIA',
                'capital' => 'Bishkek',
                'shortDescription' => '
            Kyrgyzstan, nestled in the heart of Central Asia, is a land of breathtaking natural beauty with its towering mountains, pristine lakes, and picturesque landscapes. Travelers can immerse themselves in nomadic traditions, explore the historic Silk Road routes, and embark on outdoor adventures like trekking, horseback riding, and skiing. Kyrgyzstan\'s untouched wilderness, rich cultural heritage, and warm hospitality make it a perfect destination for nature lovers, adventure seekers, and those interested in discovering a lesser-known gem of Central Asia.
            ',
                'longDescription' => '
            Kyrgyzstan is a landlocked country located in Central Asia, bordered by Kazakhstan to the north, China to the east, Tajikistan to the south, and Uzbekistan to the west. This beautiful country is known for its stunning mountain landscapes, nomadic traditions, and rich cultural heritage, making it a hidden gem for adventurous travelers.

One of the top locations to visit in Kyrgyzstan is Lake Issyk-Kul, the second-largest alpine lake in the world. Surrounded by snow-capped mountains, this pristine lake offers breathtaking views and opportunities for swimming, boating, and sunbathing. The nearby Jeti-Oguz Valley is famous for its red rock formations, including the iconic Seven Bulls and Broken Heart, which make for excellent hiking and photography.

Another must-visit destination is the capital city, Bishkek. Here, visitors can explore the bustling Osh Bazaar, known for its vibrant atmosphere and local products. The city also features several parks, monuments, and museums that showcase Kyrgyz history and culture. Ala-Too Square is a central gathering place where you can witness national celebrations and events.

For outdoor enthusiasts, the Tian Shan Mountains offer endless opportunities for trekking, mountaineering, and skiing. The Ala Archa National Park, located just outside of Bishkek, is a popular destination for hiking and picnicking amidst stunning alpine scenery. Additionally, the Pamir-Alai and Tien Shan ranges are renowned among climbers for their challenging peaks and panoramic views.

Kyrgyzstan is also known for its traditional nomadic culture. Travelers can experience the unique nomadic lifestyle by staying in yurts (traditional felt tents) in the high mountain pastures. The Song Kol Lake and the Naryn region are popular spots for experiencing nomadic culture, horseback riding, and enjoying the serene beauty of the countryside.

In summary, Kyrgyzstan offers a wealth of natural beauty, cultural richness, and outdoor adventures. Whether you are exploring the picturesque landscapes, immersing yourself in the nomadic way of life, or discovering the vibrant capital city, Kyrgyzstan is a destination that will leave you with unforgettable memories.
            ',
                'currency' => 'Kyrgyzstani som',
                'language' => 'Kyrgyz, Russian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 129,
            ],
            [
                'countryCode' => 'LA',
                'countryName' => 'Lao People\'s Democratic Republic',
                'regionCode' => 'ASIA',
                'capital' => 'Vientiane',
                'shortDescription' => '
            The Lao People\'s Democratic Republic, commonly known as Laos, is a landlocked country in Southeast Asia known for its tranquil beauty and rich cultural heritage. Visitors can explore ancient temples, cruise along the Mekong River, trek through lush jungles, and experience the laid-back lifestyle of the locals, making it an ideal destination for those seeking a unique and authentic travel experience.
            ',
                'longDescription' => '
            The Lao People\'s Democratic Republic, commonly known as Laos, is a landlocked country located in Southeast Asia. It is bordered by China to the north, Vietnam to the east, Cambodia to the southeast, Thailand to the west, and Myanmar (Burma) to the northwest. Laos is famous for its stunning natural landscapes, rich cultural heritage, and laid-back atmosphere, making it a captivating destination for travelers.

One of the top locations to visit in Laos is Luang Prabang, a UNESCO World Heritage-listed city renowned for its well-preserved architecture and Buddhist temples. The city offers a harmonious blend of traditional Lao and French colonial influences, with attractions such as the Royal Palace Museum, Wat Xieng Thong, and the vibrant morning market. Luang Prabang is also a gateway to the nearby Kuang Si Falls, a beautiful multi-tiered waterfall that is a popular spot for swimming and picnicking.

Another must-visit destination is Vientiane, the capital city of Laos. Here, visitors can explore a mix of ancient temples, colonial-era buildings, and lively markets. Highlights include the golden Pha That Luang stupa, Wat Si Saket with its thousands of Buddha statues, and the bustling Morning Market. Don\'t miss the chance to witness the sunset over the Mekong River from the riverside promenade.

For nature enthusiasts, the Bolaven Plateau is a paradise. Located in southern Laos, this region is known for its lush coffee plantations, picturesque waterfalls, and ethnic minority villages. The famous Tad Fane and Tad Yuang waterfalls are among the stunning natural attractions in the area.

One of the unique experiences in Laos is cruising along the Mekong River. Traveling by boat allows you to witness the tranquil beauty of the river and explore remote villages along its banks. The popular route is from Luang Prabang to the charming town of Nong Khiaw, where you can enjoy stunning karst landscapes and immerse yourself in the local way of life.

Laos also offers opportunities for trekking and outdoor adventures, particularly in the northern regions of Luang Namtha and Phongsaly. Here, you can embark on multi-day treks through lush forests, encounter ethnic minority communities, and enjoy breathtaking views of the mountainous landscapes.

In summary, Laos is a country of natural beauty, cultural treasures, and warm hospitality. Whether you are exploring ancient temples, discovering charming towns, or immersing yourself in the tranquility of nature, Laos offers a unique and enriching travel experience.
            ',
                'currency' => 'Lao kip',
                'language' => 'Lao',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 130,
            ],
            [
                'countryCode' => 'LV',
                'countryName' => 'Latvia',
                'regionCode' => 'EUROPE',
                'capital' => 'Riga',
                'shortDescription' => '
            Latvia, located in the Baltic region of Northern Europe, offers a mix of charming medieval towns, picturesque countryside, and a vibrant capital city. Visitors can explore the historic streets of Riga, enjoy the pristine beaches of the Baltic Sea, delve into the country\'s rich cultural heritage, and indulge in delicious Latvian cuisine, making it an ideal destination for those seeking a blend of history, nature, and unique experiences.
            ',
                'longDescription' => '
            Latvia, located in Northern Europe, is a beautiful country known for its rich history, charming cities, and unspoiled natural landscapes. Situated along the eastern coast of the Baltic Sea, Latvia shares borders with Estonia to the north, Lithuania to the south, Russia to the east, and Belarus to the southeast.

One of the highlights of Latvia is its capital city, Riga. Riga is renowned for its stunning architecture, particularly its well-preserved Art Nouveau buildings in the city center, which have earned it a place on the UNESCO World Heritage list. The city is also home to the impressive Riga Central Market, housed in historic Zeppelin hangars, where visitors can explore a vibrant array of fresh produce, local delicacies, and handicrafts. Additionally, Riga boasts a thriving cultural scene with numerous museums, galleries, and theaters to explore.

Another must-visit location is the coastal town of Jurmala, known for its pristine sandy beaches and picturesque wooden architecture. Jurmala offers a relaxing seaside retreat, with a range of wellness spas, charming cafes, and a lively summer atmosphere. Visitors can take leisurely strolls along the beach, enjoy water sports, or explore the unique Jurmala Open-Air Museum, which showcases traditional Latvian architecture.

For nature lovers, the Gauja National Park is a true gem. Located in the northeastern part of the country, it is the largest national park in Latvia and offers breathtaking landscapes of forests, rivers, and picturesque valleys. Visitors can go hiking, cycling, or canoeing while enjoying the peacefulness of the surrounding nature. The park is also home to the famous Gutmanis Cave, a historic site with ancient inscriptions and legends associated with it.

Latvia is also known for its rich cultural heritage and folk traditions. The Ethnographic Open-Air Museum, located on the outskirts of Riga, provides a fascinating insight into Latvian rural life, showcasing traditional buildings, crafts, and cultural events. Visitors can explore the museum\'s extensive grounds and learn about Latvian customs, folklore, and traditions.

In summary, Latvia offers a unique blend of historical, cultural, and natural attractions. Whether you are exploring the vibrant streets of Riga, enjoying the coastal beauty of Jurmala, or immersing yourself in the tranquility of national parks, Latvia provides a delightful experience for travelers seeking history, culture, and natural beauty.
            ',
                'currency' => 'Euro',
                'language' => 'Latvian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 131,
            ],
            [
                'countryCode' => 'LB',
                'countryName' => 'Lebanon',
                'regionCode' => 'ASIA',
                'capital' => 'Beirut',
                'shortDescription' => '
            Lebanon, nestled in the Middle East, boasts a captivating blend of ancient history, stunning landscapes, and a vibrant cultural scene. Visitors can explore the historic ruins of Baalbek, relax on the beautiful Mediterranean coastline, savor delicious Lebanese cuisine, and experience the warm hospitality of the Lebanese people, making it a fascinating destination for history enthusiasts, nature lovers, and food enthusiasts alike.
            ',
                'longDescription' => '
            Lebanon, located in the Middle East along the eastern shores of the Mediterranean Sea, is a country renowned for its rich history, diverse culture, and stunning natural landscapes. It is bordered by Syria to the north and east and Israel to the south.

The capital city, Beirut, is a vibrant and cosmopolitan hub known for its captivating blend of ancient and modern attractions. The city offers a mix of historical sites, such as the Roman ruins of Baalbek and the ancient city of Byblos, as well as modern attractions like upscale shopping districts, bustling markets, and a thriving nightlife scene. Beirut is also famous for its delicious cuisine, influenced by a fusion of Middle Eastern and Mediterranean flavors, offering visitors a gastronomic delight.

One of the top destinations in Lebanon is the stunning coastal city of Jounieh, located just north of Beirut. Jounieh is known for its beautiful beaches, lively waterfront promenade, and vibrant nightlife. Visitors can enjoy water activities, relax on the sandy shores, and indulge in delicious seafood at the local restaurants.

For those seeking natural beauty, the picturesque town of Bcharre is a must-visit. Located in the northern part of Lebanon, it is the gateway to the stunning Qadisha Valley, a UNESCO World Heritage site. The valley is home to breathtaking landscapes, ancient monasteries, and hiking trails that lead to stunning viewpoints. Bcharre is also famous as the birthplace of renowned Lebanese poet Khalil Gibran, and visitors can explore the Gibran Museum to learn about his life and work.

Lebanon\'s Bekaa Valley is another noteworthy destination, known for its vineyards and wineries. Wine enthusiasts can visit the vineyards, taste locally produced wines, and learn about the winemaking process. The region also offers picturesque landscapes of rolling hills, ancient Roman ruins, and charming villages.

In summary, Lebanon offers a diverse range of attractions for travelers. From its historical sites and vibrant cities to its beautiful coastline and natural landscapes, Lebanon provides a unique blend of cultural experiences, delicious cuisine, and stunning scenery. Whether you\'re exploring ancient ruins, enjoying the vibrant city life, or immersing yourself in the natural beauty of the country, Lebanon offers a memorable travel experience.
            ',
                'currency' => 'Lebanese pound',
                'language' => 'Arabic, French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 132,
            ],
            [
                'countryCode' => 'LS',
                'countryName' => 'Lesotho',
                'regionCode' => 'AFRICA',
                'capital' => 'Maseru',
                'shortDescription' => '
            Lesotho, a landlocked country in southern Africa, is known for its breathtaking mountain scenery and unique cultural heritage. With its rugged landscapes, including the majestic Drakensberg Mountains and the iconic Sani Pass, as well as opportunities for outdoor activities like hiking, horse riding, and skiing, Lesotho offers a remarkable adventure for nature lovers and thrill-seekers seeking an off-the-beaten-path destination.
            ',
                'longDescription' => '
            Lesotho, officially known as the Kingdom of Lesotho, is a small landlocked country located in Southern Africa. It is entirely surrounded by South Africa and is known as the "Kingdom in the Sky" due to its high elevation and stunning mountainous landscapes.

One of the top attractions in Lesotho is the breathtaking Drakensberg Mountain Range, which forms the eastern border of the country. This majestic range offers opportunities for hiking, trekking, and exploring its scenic beauty. The Sani Pass, a renowned mountain pass, provides a thrilling adventure and offers panoramic views of the surrounding landscapes.

The capital city, Maseru, is a vibrant hub where visitors can experience the blend of traditional and modern cultures. The city is home to interesting landmarks such as the royal palace, museums, markets, and the bustling Maseru Bridge, which connects Lesotho to South Africa.

For nature enthusiasts, Ts\'enhlanyane National Park is a must-visit destination. Located in the Maloti Mountains, the park offers stunning scenery, hiking trails, and an opportunity to spot wildlife such as elands, baboons, and various bird species. The park is also home to beautiful waterfalls, including the Maletsunyane Falls, one of the highest single-drop waterfalls in Africa.

Lesotho is also known for its traditional Basotho culture. Visitors can explore local villages, interact with the friendly locals, and learn about their traditions, music, and crafts. The Morija Arts and Cultural Festival, held annually, showcases the rich heritage of the Basotho people through traditional music, dance, and arts.

Another unique experience in Lesotho is horseback riding. The country has a long-standing equestrian culture, and visitors can embark on horseback treks to explore the remote areas, mountains, and valleys. This allows for an immersive and adventurous way to discover the beauty of Lesotho.

In summary, Lesotho offers a captivating blend of natural beauty, cultural experiences, and outdoor adventures. Its mountainous landscapes, traditional villages, and warm hospitality make it a hidden gem in Southern Africa. Whether you\'re seeking breathtaking scenery, cultural immersion, or outdoor exploration, Lesotho provides a unique and memorable travel experience.
            ',
                'currency' => 'Lesotho loti',
                'language' => 'English, Sesotho',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 133,
            ],
            [
                'countryCode' => 'LR',
                'countryName' => 'Liberia',
                'regionCode' => 'AFRICA',
                'capital' => 'Monrovia',
                'shortDescription' => '
            Liberia, located on the west coast of Africa, is a country of natural beauty with lush rainforests, stunning beaches, and vibrant wildlife. Visitors can explore the Sapo National Park, home to diverse species such as elephants and pygmy hippos, relax on the pristine beaches of Robertsport, or immerse themselves in the rich cultural heritage of Monrovia, making Liberia an enticing destination for nature enthusiasts and cultural explorers alike.
            ',
                'longDescription' => '
            Liberia, officially known as the Republic of Liberia, is a country located on the western coast of Africa. It is bordered by Sierra Leone, Guinea, Côte d\'Ivoire, and the Atlantic Ocean. Known as "The Land of the Free," Liberia offers a rich history, diverse culture, and natural beauty.

One of the highlights of visiting Liberia is exploring its pristine beaches. The country boasts a stunning coastline along the Atlantic Ocean, with golden sands and clear turquoise waters. Popular beach destinations include Robertsport and Buchanan, where visitors can relax, swim, and enjoy water activities such as surfing and fishing.

Liberia is also home to lush rainforests and national parks, offering opportunities for wildlife encounters and eco-tourism. Sapo National Park, the country\'s largest protected area, is known for its diverse flora and fauna, including endangered species like pygmy hippos and chimpanzees. The park provides hiking trails and camping options for those seeking a nature retreat.

The capital city, Monrovia, is a vibrant hub with a blend of modern and historical attractions. Visitors can explore the Waterside Market, where they can experience the local culture, sample traditional food, and purchase local crafts and souvenirs. The National Museum of Liberia showcases the country\'s history and culture, while the Ducor Palace Hotel offers panoramic views of the city from its rooftop.

For history enthusiasts, a visit to Cape Palmas is a must. Located on the southernmost tip of Liberia, Cape Palmas is known for its historic lighthouse, which offers panoramic views of the coastline. The nearby town of Harper has colonial-era architecture and a peaceful atmosphere, making it a charming place to explore.

Liberia is also known for its vibrant music and dance traditions. Visitors can experience traditional performances and cultural festivals, such as the Poro Society and Sande Society ceremonies, which celebrate the initiation of young men and women into adulthood.

In summary, Liberia offers a mix of natural beauty, cultural experiences, and historical attractions. From its stunning beaches and rainforests to its vibrant capital city and rich cultural heritage, Liberia has much to offer for travelers seeking an authentic African experience.
            ',
                'currency' => 'Liberian dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '120V, 60Hz',
                'active' => false,
                'sortOrder' => 134,
            ],
            [
                'countryCode' => 'LY',
                'countryName' => 'Libya',
                'regionCode' => 'AFRICA',
                'capital' => 'Tripoli',
                'shortDescription' => '
            Libya, situated in North Africa, offers a captivating blend of ancient history, stunning desert landscapes, and Mediterranean coastlines. Travelers can explore the well-preserved Roman ruins of Leptis Magna, experience the vast Sahara Desert with its majestic dunes and unique oases, or relax on the picturesque beaches of the Mediterranean. Despite its challenges, Libya\'s rich historical sites and natural wonders make it a fascinating destination for those seeking an off-the-beaten-path adventure.
            ',
                'longDescription' => '
            Libya, officially known as the State of Libya, is a country located in North Africa. It is bordered by the Mediterranean Sea to the north, Egypt to the east, Sudan to the southeast, Chad and Niger to the south, Algeria and Tunisia to the west. Libya is known for its rich historical heritage, vast desert landscapes, and beautiful Mediterranean coastline.

One of the top attractions in Libya is the ancient city of Leptis Magna. This UNESCO World Heritage Site showcases well-preserved Roman ruins, including impressive arches, columns, and theaters. Visitors can explore the ancient streets and marvel at the architectural splendor of this once-thriving city.

Another must-visit location is the historic city of Tripoli, the capital of Libya. The city offers a fascinating mix of old and new, with its bustling markets, medieval old town (medina), and modern waterfront promenade. Visitors can stroll through the narrow alleys of the medina, visit the stunning Red Castle (Assai al-Hamra), and explore the many mosques and historical sites scattered throughout the city.

For nature lovers, the Sahara Desert in southern Libya offers a unique and awe-inspiring experience. The vast expanses of golden sand dunes, oases, and rock formations create a mesmerizing landscape. Visitors can take guided camel treks or 4x4 desert safaris to explore the desert, witness breathtaking sunsets, and camp under the starry sky.

Libya also boasts a stunning Mediterranean coastline, with crystal-clear waters and picturesque beaches. Towns such as Sabratha and Benghazi offer opportunities for seaside relaxation, swimming, and water sports. The coastal areas are also known for their fresh seafood, allowing visitors to indulge in delicious local cuisine.

In addition to its natural and historical attractions, Libya is home to a rich cultural heritage. Traditional music, art, and crafts can be experienced through festivals and cultural events. The local cuisine, influenced by Mediterranean and Arab flavors, offers a delicious culinary experience with dishes such as couscous, tagines, and aromatic teas.

Overall, Libya is a country of diverse landscapes, ancient history, and warm hospitality. While travel to Libya may have certain considerations and restrictions, for those who are able to visit, it offers a unique and rewarding experience for those seeking adventure, history, and natural beauty.
            ',
                'currency' => 'Libyan dinar',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '127/230V, 50Hz',
                'active' => false,
                'sortOrder' => 135,
            ],
            [
                'countryCode' => 'LI',
                'countryName' => 'Liechtenstein',
                'regionCode' => 'EUROPE',
                'capital' => 'Vaduz',
                'shortDescription' => '
            Liechtenstein, nestled in the heart of the Alps, is a tiny yet charming country known for its breathtaking mountain scenery, medieval castles, and welcoming atmosphere. Visitors can enjoy outdoor activities like hiking and skiing, explore the picturesque capital of Vaduz, and experience the country\'s unique blend of rich history, alpine beauty, and cultural heritage. With its small size and tranquil ambiance, Liechtenstein offers a peaceful escape and a chance to immerse in the beauty of nature.
            ',
                'longDescription' => '
            Liechtenstein is a small landlocked country located in Central Europe between Switzerland and Austria. Despite its small size, it offers a charming mix of stunning Alpine landscapes, rich cultural heritage, and a thriving economy.

One of the top attractions in Liechtenstein is the capital city of Vaduz. This picturesque city is nestled in the Rhine Valley and is known for its medieval castle, Vaduz Castle, which overlooks the city. Visitors can explore the castle grounds, stroll through the charming streets lined with boutique shops and art galleries, and visit the Kunstmuseum Liechtenstein, which houses an impressive collection of modern and contemporary art.

The Principality of Liechtenstein is also famous for its natural beauty. The majestic Alps dominate the landscape, offering opportunities for outdoor activities such as hiking, mountain biking, and skiing during the winter months. The region is crisscrossed with well-marked trails that lead to panoramic viewpoints, crystal-clear mountain lakes, and charming alpine villages.

For those interested in history and culture, a visit to the Liechtenstein National Museum in Vaduz is highly recommended. The museum showcases the rich history and heritage of Liechtenstein through various exhibits, including artifacts, artworks, and historical documents.

Another highlight of Liechtenstein is the charming village of Malbun, located in the mountains above Vaduz. It is a popular destination for skiing and snowboarding during the winter season and offers breathtaking views of the surrounding peaks. In the summer, visitors can enjoy hiking trails, mountain biking, and picnicking in the beautiful alpine meadows.

One of the unique aspects of Liechtenstein is its thriving economy, which is primarily driven by industries such as finance and manufacturing. Visitors interested in learning more about Liechtenstein\'s economic success can visit the Liechtenstein Center in Vaduz, an interactive exhibition that provides insights into the country\'s business and innovation sectors.

In summary, Liechtenstein may be small in size, but it offers a wealth of natural beauty, cultural experiences, and a glimpse into a prosperous and thriving nation. Whether you\'re exploring the charming streets of Vaduz, hiking in the majestic Alps, or immersing yourself in the country\'s rich heritage, Liechtenstein is a hidden gem waiting to be discovered.

            ',
                'currency' => 'Swiss franc',
                'language' => 'German',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 136,
            ],
            [
                'countryCode' => 'LT',
                'countryName' => 'Lithuania',
                'regionCode' => 'EUROPE',
                'capital' => 'Vilnius',
                'shortDescription' => '
            Lithuania, located on the eastern coast of the Baltic Sea, offers a mix of historical charm, natural beauty, and vibrant culture. Visitors can explore the well-preserved medieval old towns, visit stunning Baltic beaches, indulge in traditional cuisine, and discover the country\'s rich cultural heritage, including its unique pagan traditions and impressive art scene. With its warm hospitality and diverse attractions, Lithuania provides a rewarding travel experience for those seeking a blend of history, nature, and cultural exploration.
            ',
                'longDescription' => '
            Lithuania is a country located in the Baltic region of Northern Europe. It is known for its rich history, stunning natural landscapes, and vibrant cultural scene.

One of the top attractions in Lithuania is its capital city, Vilnius. This UNESCO World Heritage site is renowned for its well-preserved Old Town, characterized by narrow cobblestone streets, Gothic and Baroque architecture, and charming squares. Visitors can explore the iconic Gediminas Castle, visit the impressive Vilnius Cathedral, and wander through the vibrant Užupis district, known as the "Republic of Užupis," with its artistic atmosphere and quirky statues.

Another must-visit location in Lithuania is the Curonian Spit, a unique UNESCO World Heritage site shared with Russia. This narrow strip of land stretches along the Baltic Sea and is characterized by beautiful sand dunes, pine forests, and picturesque fishing villages. Visitors can enjoy sunbathing on the sandy beaches, hiking or cycling through the nature trails, and exploring the traditional wooden houses in places like Nida and Juodkrantė.

Trakai is another popular destination in Lithuania, known for its stunning Trakai Island Castle. Located on an island in Lake Galvė, the castle is a magnificent example of Gothic architecture and is surrounded by picturesque landscapes. Visitors can take a boat ride to the castle, explore its halls and towers, and learn about the fascinating history of the Grand Duchy of Lithuania.

One of the reasons people should visit Lithuania is to experience its rich cultural heritage. The country has a vibrant arts scene, with numerous theaters, art galleries, and music festivals. The Lithuanian National Opera and Ballet Theatre in Vilnius is a prominent cultural institution that hosts world-class performances. Additionally, Lithuania is known for its traditional crafts, such as amber jewelry, intricate wood carvings, and handwoven textiles, which make for unique souvenirs.

Lithuania also offers beautiful natural landscapes that are perfect for outdoor enthusiasts. Apart from the Curonian Spit, the country has several national parks, such as Aukštaitija National Park and Žemaitija National Park, where visitors can enjoy hiking, canoeing, and wildlife spotting. The pristine lakes, dense forests, and rolling hills provide a peaceful and scenic environment for nature lovers.

In summary, Lithuania offers a mix of historical landmarks, natural beauty, and cultural experiences that make it a fascinating destination to explore. Whether you\'re wandering through the charming streets of Vilnius, exploring the stunning Curonian Spit, or immersing yourself in the country\'s rich cultural scene, Lithuania has much to offer for travelers seeking a unique and enriching experience.
            ',
                'currency' => 'Euro',
                'language' => 'Lithuanian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 137,
            ],
            [
                'countryCode' => 'LU',
                'countryName' => 'Luxembourg',
                'regionCode' => 'EUROPE',
                'capital' => 'Luxembourg',
                'shortDescription' => '
            Luxembourg, a small European country known for its fairy-tale-like castles and picturesque landscapes, offers a perfect blend of history, culture, and natural beauty. Visitors can explore the charming capital city of Luxembourg City, with its UNESCO-listed old town and impressive fortifications, and also enjoy the country\'s beautiful countryside, dotted with vineyards, rolling hills, and picturesque villages. With its rich history, stunning architecture, and scenic landscapes, Luxembourg is a delightful destination for travelers seeking a unique and enchanting experience.
            ',
                'longDescription' => '
            Luxembourg, officially known as the Grand Duchy of Luxembourg, is a small landlocked country located in Western Europe. Despite its small size, Luxembourg has a lot to offer in terms of history, culture, and natural beauty.

The capital city, also called Luxembourg, is a UNESCO World Heritage site and a major attraction in the country. The city is known for its picturesque setting, with its historic fortifications perched atop cliffs overlooking the deep valleys of the Alzette and Pétrusse rivers. Visitors can explore the old town, stroll along the Chemin de la Corniche (known as "Europe\'s most beautiful balcony"), and visit the stunning Luxembourg Palace. The city also boasts numerous museums, including the National Museum of History and Art, showcasing the rich cultural heritage of the country.

Another must-visit destination in Luxembourg is the picturesque village of Vianden. Located in the northeast of the country, Vianden is famous for its beautifully preserved medieval castle. The imposing Vianden Castle dates back to the 10th century and offers breathtaking views of the surrounding countryside. Visitors can explore the castle\'s rooms, towers, and courtyards, and learn about the history of the region. The village itself is charming, with narrow streets lined with traditional houses and cozy cafés.

Nature lovers will appreciate Luxembourg\'s stunning landscapes, particularly in the Müllerthal region, often referred to as "Little Switzerland." The Müllerthal Trail is a popular hiking route that takes visitors through breathtaking rock formations, dense forests, and picturesque valleys. The region is also home to numerous caves, including the famous Bourscheid Castle Cave, adding an element of adventure to the exploration.

One of the main reasons to visit Luxembourg is its unique blend of cultures. As a multilingual country, with Luxembourgish, French, and German as official languages, the cultural diversity is evident in its architecture, cuisine, and traditions. Visitors can enjoy a mix of French, German, and local Luxembourgish dishes at the country\'s many excellent restaurants, and experience the warm hospitality of the locals.

Luxembourg is also known for its high standard of living and quality of life. It is home to several international institutions and multinational companies, contributing to its cosmopolitan atmosphere. The country\'s financial district, Kirchberg, is a modern and bustling area with impressive contemporary architecture, including the European Court of Justice and several European Union institutions.

In summary, Luxembourg may be small in size, but it offers a wealth of attractions and experiences. From its historic capital city to its charming villages, stunning natural landscapes, and vibrant cultural scene, Luxembourg has something for everyone. Whether you\'re interested in history, outdoor adventures, or simply soaking in the unique atmosphere of this cosmopolitan country, Luxembourg is sure to leave a lasting impression.
            ',
                'currency' => 'Euro',
                'language' => 'Luxembourgish, French, German',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 138,
            ],
            [
                'countryCode' => 'MO',
                'countryName' => 'Macao',
                'regionCode' => 'ASIA',
                'capital' => 'Macao',
                'shortDescription' => '
            Macao, a vibrant region on the southern coast of China, is known for its fascinating blend of Chinese and Portuguese cultures. Visitors can explore its historic sites, including the UNESCO-listed Historic Centre of Macao, and indulge in its lively entertainment scene, luxurious resorts, and world-class casinos. With its unique fusion of East and West, Macao offers a captivating experience that combines rich heritage, modern attractions, and a thrilling atmosphere, making it an exciting destination for travelers.
            ',
                'longDescription' => '
            Macao, also spelled Macau, is a special administrative region of China located on the southern coast of the country. Known as the "Las Vegas of Asia," Macao is famous for its vibrant and lively atmosphere, a fusion of Chinese and Portuguese cultures, and its world-class casinos.

The city of Macao is a bustling metropolis that seamlessly blends traditional Chinese architecture with colonial Portuguese influences. Visitors can explore the historic center of Macao, a UNESCO World Heritage site, where they will find beautifully preserved buildings, narrow cobblestone streets, and charming squares. The Ruins of St. Paul\'s, a 17th-century Jesuit church facade, is one of the most iconic landmarks in Macao and a must-visit attraction.

The Cotai Strip is the entertainment hub of Macao, featuring luxurious hotels, resorts, and extravagant casinos. It is home to some of the world\'s most renowned casinos, offering a wide range of gaming options for visitors to enjoy. The area also boasts high-end shopping malls, entertainment venues, and Michelin-starred restaurants, making it a vibrant destination for entertainment and leisure.

For a taste of Macao\'s cultural heritage, a visit to the A-Ma Temple is highly recommended. This temple, dedicated to the sea goddess Mazu, is one of the oldest and most revered in Macao. Its serene atmosphere and intricate architectural details provide a glimpse into the region\'s spiritual traditions.

Macao is also known for its annual festivals and events, which showcase its rich cultural diversity. The Macao International Fireworks Display Contest, held every year in September, is a spectacular event that attracts visitors from around the world. The Macao Grand Prix, featuring thrilling car and motorcycle races through the city streets, is another major event that draws motorsport enthusiasts.

Beyond the glitz and glamour, Macao offers opportunities for outdoor activities and natural beauty. The nearby Coloane Island is a peaceful retreat with hiking trails, sandy beaches, and tranquil villages. Visitors can relax on the beaches, explore the lush hillsides, or savor fresh seafood at the island\'s quaint restaurants.

In summary, Macao is a fascinating destination that offers a unique blend of Chinese and Portuguese cultures, a thriving entertainment scene, and a rich historical heritage. Whether you\'re interested in trying your luck at the casinos, exploring the city\'s historic sites, immersing yourself in its diverse cultural experiences, or simply indulging in its culinary delights, Macao has something for everyone.
            ',
                'currency' => 'Macanese pataca',
                'language' => 'Chinese, Portuguese',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 139,
            ],
            [
                'countryCode' => 'MK',
                'countryName' => 'Macedonia, Republic of',
                'regionCode' => 'EUROPE',
                'capital' => 'Skopje',
                'shortDescription' => '
            Macedonia, officially known as the Republic of North Macedonia, is a country in the Balkan Peninsula renowned for its rich history, stunning landscapes, and warm hospitality. Visitors can explore its ancient ruins, picturesque lakes, vibrant cities like Skopje and Ohrid, and immerse themselves in the diverse culture, delicious cuisine, and traditional music of this fascinating destination. With its blend of natural beauty, cultural heritage, and welcoming locals, Macedonia offers a unique and rewarding travel experience.
            ',
                'longDescription' => '
            The Republic of Macedonia, officially known as North Macedonia since 2019, is a landlocked country located in Southeast Europe. It shares borders with Albania, Serbia, Bulgaria, Greece, and Kosovo. The country is known for its rich history, diverse landscapes, and cultural heritage.

Skopje, the capital and largest city of North Macedonia, is a vibrant cultural and historical hub. The city is home to numerous museums, ancient sites, and architectural landmarks. The Skopje Fortress, Stone Bridge, and the Old Bazaar are popular attractions that showcase the city\'s history and cultural heritage.

Lake Ohrid, located in southwestern North Macedonia, is one of the oldest and deepest lakes in Europe. The lake is surrounded by picturesque mountains and charming towns, offering breathtaking views and opportunities for outdoor activities such as swimming, boating, and hiking. The town of Ohrid itself is a UNESCO World Heritage site, known for its Byzantine churches, medieval castle, and narrow cobblestone streets.

The region of Mavrovo, situated in the western part of the country, is a paradise for nature lovers. Mavrovo National Park boasts stunning landscapes, including dense forests, crystal-clear lakes, and majestic mountains. The park offers excellent opportunities for hiking, skiing, wildlife spotting, and enjoying the beauty of untouched nature.

North Macedonia is also renowned for its rich cultural heritage. The city of Bitola, known as "the city of consuls," is famous for its neoclassical architecture, historical sites, and vibrant cafe culture. The ancient city of Heraclea, located near Bitola, features well-preserved ruins of a Roman settlement, including a theater, basilica, and mosaic floors.

One of the highlights of visiting North Macedonia is experiencing its traditional cuisine. The country offers a diverse range of delicious dishes influenced by Mediterranean, Balkan, and Turkish flavors. From hearty stews and grilled meats to tasty pastries and refreshing salads, North Macedonian cuisine is a true delight for food enthusiasts.

In summary, North Macedonia is a country with a rich historical and cultural heritage, stunning natural landscapes, and warm hospitality. Whether you\'re exploring the historic sites of Skopje, enjoying the serenity of Lake Ohrid, immersing yourself in nature in Mavrovo, or indulging in the local cuisine, North Macedonia offers a unique and memorable travel experience.
            ',
                'currency' => 'Macedonian denar',
                'language' => 'Macedonian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 140,
            ],
            [
                'countryCode' => 'MG',
                'countryName' => 'Madagascar',
                'regionCode' => 'AFRICA',
                'capital' => 'Antananarivo',
                'shortDescription' => '
            Madagascar, the world\'s fourth-largest island, is a biodiversity hotspot known for its unique flora and fauna, including lemurs, baobab trees, and vibrant chameleons. With its stunning national parks, pristine beaches, and rich cultural heritage, Madagascar offers adventurous travelers a chance to explore diverse ecosystems, encounter rare wildlife, and immerse themselves in the island\'s fascinating culture and traditions.
            ',
                'longDescription' => '
            Madagascar, officially known as the Republic of Madagascar, is an island country located off the eastern coast of Africa in the Indian Ocean. It is the world\'s fourth-largest island and is known for its unique biodiversity, stunning landscapes, and vibrant culture.

One of the main attractions in Madagascar is its rich and diverse wildlife. The island is home to numerous endemic species, including lemurs, chameleons, and a wide variety of birds. National parks and reserves such as Ranomafana, Andasibe-Mantadia, and Isalo offer incredible opportunities to observe these fascinating creatures in their natural habitats.

Madagascar is also famous for its breathtaking landscapes. From the otherworldly rock formations of Tsingy de Bemaraha to the lush rainforests of Masoala National Park, the country offers diverse natural wonders. Visitors can explore towering baobab trees, stunning waterfalls, pristine beaches, and picturesque highlands.

The capital city of Antananarivo is a vibrant cultural hub that showcases the country\'s history and traditions. The Royal Palace, located in the heart of the city, provides a glimpse into Madagascar\s monarchy. The bustling markets, such as the Analakely Market, offer an authentic shopping experience where visitors can find traditional handicrafts, spices, and local produce.

Madagascar\'s cultural heritage is also reflected in its unique music, dance, and cuisine. The Malagasy people have a rich cultural identity expressed through traditional music styles like salegy and hiragasy, as well as energetic dance performances. Visitors can savor the flavors of Malagasy cuisine, which features dishes made from rice, zebu meat, seafood, and tropical fruits.

For adventure enthusiasts, Madagascar offers opportunities for hiking, trekking, and water sports. The Avenue of the Baobabs, located in the Menabe region, is a popular spot for photography and sunset watching. The Nosy Be archipelago provides excellent diving and snorkeling experiences in its pristine coral reefs.

In summary, Madagascar is a destination that combines breathtaking natural beauty, unique wildlife, vibrant culture, and adventure. Whether exploring its national parks, experiencing the lively markets, or immersing oneself in the local traditions, Madagascar offers a truly unforgettable travel experience for those seeking something off the beaten path.
            ',
                'currency' => 'Malagasy ariary',
                'language' => 'Malagasy, French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '127/220V, 50Hz',
                'active' => false,
                'sortOrder' => 141,
            ],
            [
                'countryCode' => 'MW',
                'countryName' => 'Malawi',
                'regionCode' => 'AFRICA',
                'capital' => 'Lilongwe',
                'shortDescription' => '
Malawi, known as the "Warm Heart of Africa," offers visitors breathtaking landscapes, including Lake Malawi, the third-largest lake in Africa, with its crystal-clear waters and diverse marine life. Travelers can also explore national parks, such as Liwonde National Park, to witness incredible wildlife and enjoy outdoor activities like hiking and safari adventures, all while experiencing the warm hospitality of the Malawian people.
            ',
                'longDescription' => '
            Malawi, officially known as the Republic of Malawi, is a landlocked country located in southeastern Africa. It is known as the "Warm Heart of Africa" due to the friendliness and hospitality of its people. Malawi offers a diverse range of attractions, from stunning landscapes and wildlife to vibrant culture and warm, tropical climate.

One of the main highlights of Malawi is Lake Malawi, the third-largest lake in Africa and the country\'s most iconic feature. The crystal-clear waters of the lake are home to a remarkable variety of colorful fish, making it a paradise for snorkeling, diving, and water sports enthusiasts. The lakeshore is dotted with charming fishing villages, sandy beaches, and secluded islands, offering a tranquil and picturesque setting for relaxation and exploration.

Malawi is also known for its national parks and wildlife reserves. Majete Wildlife Reserve, Liwonde National Park, and Nyika National Park are just a few of the protected areas where visitors can spot a wide range of animals, including elephants, hippos, crocodiles, zebras, and a variety of bird species. Game drives, walking safaris, and boat trips provide excellent opportunities to experience the country\'s abundant wildlife up close.

The country\'s cultural heritage is rich and diverse, with a blend of traditional African customs and colonial influences. In the city of Blantyre, visitors can explore historic sites such as the St. Michael and All Angels Church and the Mandala House, which showcases the colonial architecture of the past. Traditional dance and music performances offer a glimpse into Malawi\'s cultural traditions and celebrations.

For outdoor enthusiasts, Malawi\'s diverse landscapes offer opportunities for hiking, trekking, and mountain biking. Mount Mulanje, with its towering peaks and lush vegetation, is a popular destination for adventure seekers. The Zomba Plateau, with its panoramic views and refreshing waterfalls, is another favorite spot for nature lovers.

Malawi is also known for its community-based tourism initiatives, where visitors can engage with local communities and learn about their way of life. Homestays and village tours provide authentic experiences and a chance to support local economies.

In summary, Malawi offers a blend of natural beauty, wildlife encounters, cultural experiences, and warm hospitality. Whether exploring the stunning shores of Lake Malawi, embarking on a safari adventure, or immersing oneself in the local traditions, Malawi provides a rewarding and enriching travel experience in the heart of Africa.
            ',
                'currency' => 'Malawian kwacha',
                'language' => 'English, Chichewa',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 142,
            ],
            [
                'countryCode' => 'MY',
                'countryName' => 'Malaysia',
                'regionCode' => 'ASIA',
                'capital' => 'Kuala Lumpur',
                'shortDescription' => '
            Malaysia is a vibrant country that combines stunning natural beauty with a rich cultural heritage. From the bustling city of Kuala Lumpur with its iconic Petronas Twin Towers to the pristine beaches of Langkawi and the lush rainforests of Borneo, Malaysia offers a diverse range of experiences for travelers. Visitors can indulge in delicious cuisine, explore vibrant markets, witness breathtaking landscapes, and encounter unique wildlife, making it a must-visit destination for adventure seekers, nature lovers, and those interested in immersing themselves in a multi-cultural environment.
            ',
                'longDescription' => '
            Malaysia is a vibrant and diverse country located in Southeast Asia, known for its rich cultural heritage, stunning landscapes, and delicious cuisine. It is situated on the Malay Peninsula and the island of Borneo, offering a mix of bustling cities, pristine beaches, lush rainforests, and a fascinating blend of Malay, Chinese, Indian, and indigenous cultures.

One of the top attractions in Malaysia is its capital city, Kuala Lumpur. The iconic Petronas Twin Towers, with their stunning architecture and breathtaking views from the Skybridge, are a must-visit. Kuala Lumpur also offers a vibrant street food scene, modern shopping malls, and historic sites like the Batu Caves and Merdeka Square.

For nature lovers, the island of Borneo is a paradise. The Malaysian states of Sabah and Sarawak are home to lush rainforests, exotic wildlife, and the renowned Mount Kinabalu, a UNESCO World Heritage Site. Explore the Kinabalu National Park, spot orangutans in their natural habitat at the Sepilok Orangutan Rehabilitation Centre, or go diving in the pristine waters of Sipadan Island.

Another highlight of Malaysia is its beautiful islands and beaches. Langkawi, with its white sandy beaches and turquoise waters, is a popular destination for relaxation and water sports. The Perhentian Islands and Tioman Island offer stunning coral reefs, perfect for snorkeling and diving enthusiasts.

Malaysia is also famous for its mouthwatering cuisine. Sample a variety of flavors, from traditional Malay dishes like nasi lemak and satay, to Chinese delicacies such as dim sum and noodles, and Indian favorites like roti canai and banana leaf curry. The vibrant night markets, known as pasar malam, are a food lover\'s paradise, offering a wide array of local street food.

Additionally, Malaysia boasts a rich cultural heritage, with numerous temples, mosques, and historic sites to explore. Visit the UNESCO-listed George Town in Penang, known for its colonial architecture and vibrant street art. Explore the historic city of Malacca, with its Dutch and Portuguese influences, or venture to the cultural melting pot of Melaka City.

In summary, Malaysia offers a delightful mix of natural beauty, cultural diversity, and culinary delights. From exploring modern cities to immersing oneself in nature and savoring the flavors of the local cuisine, Malaysia provides a captivating travel experience for all types of travelers.
            ',
                'currency' => 'Malaysian ringgit',
                'language' => 'Malay',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones. 3G is available in major towns.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 143,
            ],
            [
                'countryCode' => 'MV',
                'countryName' => 'Maldives',
                'capital' => 'Malé',
                'regionCode' => 'AFRICA',
                'shortDescription' => '
            The Maldives is a tropical paradise renowned for its turquoise waters, white sandy beaches, and abundant marine life. It offers a perfect escape for relaxation, snorkeling, diving, and enjoying luxury resorts, making it an ideal destination for honeymooners, beach lovers, and water sports enthusiasts.
            ',
                'longDescription' => '
            The Maldives is a tropical paradise located in the Indian Ocean, southwest of Sri Lanka. It is a nation comprised of 26 atolls, which are made up of more than 1,000 coral islands. The Maldives is famous for its pristine white-sand beaches, crystal-clear turquoise waters, and abundant marine life, making it a dream destination for beach lovers, honeymooners, and snorkeling and diving enthusiasts.

The capital city of Maldives is Male, a bustling and vibrant city known for its colorful buildings, bustling markets, and historic mosques. However, most visitors to the Maldives are drawn to the secluded and luxurious resorts that are scattered across various atolls. These resorts offer private villas, overwater bungalows, and stunning views of the ocean. Many resorts also provide easy access to the rich coral reefs and underwater wonders, allowing visitors to explore an underwater world filled with vibrant coral gardens, colorful tropical fish, and even majestic manta rays and whale sharks.

Apart from indulging in the luxury and natural beauty of the resorts, there are plenty of activities to enjoy in the Maldives. Snorkeling and diving are highly popular, with numerous dive sites teeming with marine life. Water sports such as kayaking, jet skiing, and windsurfing are also available for those seeking an adrenaline rush. For a more relaxed experience, visitors can take sunset cruises, go fishing, or simply unwind on the picturesque beaches and enjoy the breathtaking sunsets.

The Maldives is also known for its rich culture and warm hospitality. Visitors can explore local islands to experience the authentic Maldivian way of life, interact with friendly locals, and visit historic sites and mosques. Traditional Maldivian cuisine, which features seafood, coconut, and aromatic spices, is a must-try for food enthusiasts.

In summary, the Maldives is a tropical paradise that offers a unique blend of natural beauty, luxury, and tranquility. With its stunning beaches, crystal-clear waters, and abundant marine life, it provides an idyllic setting for relaxation, romance, and adventure. Whether you are looking to unwind on the beach, explore underwater treasures, or immerse yourself in the local culture, the Maldives offers a truly unforgettable experience.
            ',
                'currency' => 'Maldivian rufiyaa',
                'language' => 'Dhivehi',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones. 3G is available in major towns.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 144,
            ],
            [
                'countryCode' => 'ML',
                'countryName' => 'Mali',
                'regionCode' => 'AFRICA',
                'capital' => 'Bamako',
                'shortDescription' => '
            Mali is a land of rich cultural heritage, ancient civilizations, and stunning natural landscapes. Visitors can explore the historic city of Timbuktu, experience vibrant traditional music and dance, and witness the beauty of the Niger River and the Sahara Desert, making it a captivating destination for history enthusiasts and adventure seekers alike.
            ',
                'longDescription' => '
            Mali is a landlocked country located in West Africa. It is renowned for its rich cultural heritage, vibrant traditions, and diverse landscapes. Mali is known as the "Land of the Sahel" due to its position between the Sahara Desert in the north and the lush savannahs in the south.

One of the top attractions in Mali is the historic city of Timbuktu, which holds great significance as a center of learning and trade in the region. Timbuktu is famous for its ancient mosques, traditional mud-brick architecture, and libraries containing ancient manuscripts. It offers visitors a glimpse into the country\'s rich history and Islamic heritage.

Another must-visit destination in Mali is the Bandiagara Escarpment, a UNESCO World Heritage site. This dramatic cliff is home to the Dogon people, known for their unique cultural practices, traditional cliffside villages, and intricate mask dances. Exploring the villages and experiencing the Dogon culture is an immersive and unforgettable experience.

The Niger River, one of Africa\'s major waterways, flows through Mali, offering opportunities for boat cruises and river excursions. The town of Mopti, situated at the confluence of the Niger and Bani rivers, is known as the "Venice of Mali" and serves as a bustling hub for river transport and local markets. Visitors can explore the river on pirogues (traditional boats) and witness the vibrant river life and trading activities.

Mali\'s diverse natural landscapes also attract adventure enthusiasts. The country is home to national parks and reserves, such as the Boucle du Baoulé National Park and the Gourma Elephant Reserve, where visitors can spot wildlife such as elephants, lions, giraffes, and a variety of bird species. The Hombori Mountains in the northeast offer opportunities for hiking and rock climbing, with breathtaking panoramic views.

In summary, Mali offers a unique blend of cultural heritage, natural beauty, and warm hospitality. From exploring ancient cities and experiencing vibrant traditions to witnessing the stunning landscapes and encountering wildlife, Mali offers a truly immersive and rewarding travel experience in the heart of West Africa.

            ',
                'currency' => 'West African CFA franc',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '127/220V, 50Hz',
                'active' => false,
                'sortOrder' => 145,
            ],
            [
                'countryCode' => 'MT',
                'countryName' => 'Malta',
                'regionCode' => 'EUROPE',
                'capital' => 'Valletta',
                'shortDescription' => '
            Malta is a small island nation with a fascinating mix of history, culture, and natural beauty. With its stunning coastline, ancient temples, charming cities, and warm Mediterranean climate, it offers a perfect blend of relaxation and exploration, making it an ideal destination for beach lovers, history buffs, and outdoor enthusiasts.
            ',
                'longDescription' => '
            Malta, officially known as the Republic of Malta, is a small island country located in the Mediterranean Sea, south of Sicily, Italy. This archipelago consists of three main islands: Malta, Gozo, and Comino. Malta is famous for its stunning coastline, historical sites, and vibrant culture.

The capital city of Malta is Valletta, a UNESCO World Heritage site and a treasure trove of history and architecture. Visitors can explore the fortified city and admire its impressive landmarks, such as St. John\'s Co-Cathedral, the Grandmaster\'s Palace, and the Upper Barrakka Gardens. Valletta also offers charming narrow streets, boutique shops, and a thriving café culture.

The island of Gozo, located just a short ferry ride from Malta, is a popular destination for its picturesque landscapes and tranquil ambiance. Visitors can explore the ancient Ġgantija temples, relax on pristine beaches like Ramla Bay, and discover the unique Azure Window, a natural limestone arch that was a famous landmark until its collapse in 2017. Gozo is also known for its rural charm, traditional villages, and delicious local cuisine.

Comino, the smallest of the three islands, is a paradise for nature lovers. It is home to the stunning Blue Lagoon, a crystal-clear turquoise bay surrounded by limestone cliffs. Visitors can swim, snorkel, and sunbathe in this idyllic setting. Comino is also known for its walking trails, offering opportunities to discover hidden coves, coastal cliffs, and diverse birdlife.

In addition to its natural and historical attractions, Malta is renowned for its vibrant festivals and cultural events. The most famous of these is the Malta International Arts Festival, featuring performances in music, theater, dance, and visual arts. The Maltese also celebrate various religious festivals, such as Easter and Christmas, with processions and traditional rituals.

Malta\'s warm climate, beautiful beaches, and clear waters make it a popular destination for water sports enthusiasts. Snorkeling, diving, and sailing are among the activities that visitors can enjoy. The island\'s underwater world is particularly renowned for its vibrant marine life and intriguing dive sites, including underwater caves and shipwrecks.

In summary, Malta offers a diverse range of attractions and experiences, from historical landmarks and cultural festivities to natural beauty and outdoor adventures. Whether you\'re interested in history, relaxation, or exploration, Malta provides a captivating blend of Mediterranean charm and rich heritage.

            ',
                'currency' => 'Euro',
                'language' => 'Maltese, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones. 3G is available in major towns.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 146,
            ],
            [
                'countryCode' => 'MH',
                'countryName' => 'Marshall Islands',
                'regionCode' => 'OCEANIA',
                'capital' => 'Majuro',
                'shortDescription' => '
            The Marshall Islands, an idyllic Pacific paradise, is composed of stunning coral atolls, crystal-clear turquoise waters, and pristine white sand beaches. Visitors can experience world-class diving and snorkeling, explore the unique Marshallese culture, and enjoy the laid-back island lifestyle, making it a must-visit destination for those seeking a remote tropical getaway.
            ',
                'longDescription' => '
            The Marshall Islands, officially known as the Republic of the Marshall Islands, is a country located in the central Pacific Ocean. It is composed of 29 coral atolls and 5 single islands, with Majuro being the capital and largest city. The Marshall Islands is famous for its stunning natural beauty, pristine beaches, and unique culture.

One of the top attractions in the Marshall Islands is its breathtaking marine environment. The crystal-clear waters surrounding the islands are home to vibrant coral reefs, diverse marine life, and numerous shipwrecks from World War II. Snorkeling and scuba diving enthusiasts can explore these underwater wonders, encountering colorful fish, sea turtles, and even the famous Bikini Atoll, known for its marine biodiversity and historic significance.

Majuro Atoll is a must-visit location in the Marshall Islands. Besides being the capital city, it offers beautiful beaches, excellent diving opportunities, and a chance to experience the local culture. Visitors can explore the Alele Museum and Cultural Center, which showcases traditional Marshallese artifacts and provides insights into the country\'s history. Majuro also offers a bustling market, where you can sample local delicacies and interact with the friendly residents.

Kwajalein Atoll is another notable destination in the Marshall Islands. It is home to the Kwajalein Missile Range, a major U.S. military installation. While access to the military base is restricted, visitors can enjoy the stunning beaches, go fishing, or embark on guided tours to learn about the area\'s history and World War II remnants. Kwajalein Atoll also offers opportunities for water sports such as kayaking and paddleboarding.

A visit to the outer atolls of the Marshall Islands provides a glimpse into the traditional Marshallese way of life. Islands like Maloelap, Wotje, and Jaluit offer a more remote and authentic experience. Visitors can witness traditional dance performances, participate in local ceremonies, and interact with the warm and welcoming communities.

One of the reasons people should visit the Marshall Islands is to experience its untouched natural beauty and unique cultural heritage. The islands offer a peaceful and serene atmosphere, with stunning beaches, clear waters, and a laid-back lifestyle. The Marshallese people are known for their hospitality and rich cultural traditions, which can be experienced through traditional music, dance, and handicrafts.

Furthermore, the Marshall Islands provides a rare opportunity to explore a less-visited and off-the-beaten-path destination. Its remote location ensures a sense of tranquility and escape from the crowds. Whether you are seeking adventure, relaxation, or a cultural immersion, the Marshall Islands offers a truly memorable and authentic experience in a pristine tropical paradise.
            ',
                'currency' => 'United States dollar',
                'language' => 'Marshallese, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '120V, 60Hz',
                'active' => false,
                'sortOrder' => 147,
            ],
            [
                'countryCode' => 'MQ',
                'countryName' => 'Martinique',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Fort-de-France',
                'shortDescription' => '
            Martinique, a Caribbean island with French and Creole influences, offers a perfect blend of natural beauty, cultural richness, and delicious cuisine. Visitors can explore lush rainforests, relax on pristine beaches, indulge in the island\'s vibrant music and art scene, and savor the flavors of French-Caribbean fusion cuisine, making it an enticing destination for both relaxation and adventure.
            ',
                'longDescription' => '
            Martinique is an island located in the eastern Caribbean Sea and is an overseas region of France. Known for its stunning natural beauty, vibrant culture, and delicious cuisine, Martinique offers a diverse range of experiences for travelers.

The island is famous for its picturesque beaches, with pristine white sand and crystal-clear turquoise waters. Anse d\'Arlet is one of the top beach destinations in Martinique, offering a tranquil setting, excellent snorkeling opportunities, and charming beachfront restaurants serving fresh seafood. Les Salines Beach, located in the south, is another popular spot known for its palm-fringed shoreline and idyllic setting.

In addition to its beautiful beaches, Martinique boasts lush rainforests and stunning natural landscapes. The Caravelle Peninsula is a nature reserve that offers hiking trails leading to breathtaking viewpoints, hidden coves, and the iconic ruins of Château Dubuc. Visitors can also explore the Balata Botanical Garden, a tropical paradise filled with exotic plants, flowers, and stunning views over the island.

The capital city of Martinique, Fort-de-France, is a vibrant and lively destination. The city combines French charm with Caribbean flair, offering a mix of colonial architecture, bustling markets, and lively street life. Visitors can explore the historic Fort Saint-Louis, stroll along the waterfront promenade, visit the vibrant Spice Market, and indulge in the local cuisine at the numerous restaurants and cafes.

For those interested in history and culture, a visit to Saint-Pierre is a must. Known as the "Little Pompeii of the Caribbean," Saint-Pierre was once the cultural and economic capital of Martinique before being devastated by a volcanic eruption in 1902. Visitors can explore the ruins of the old town, visit the Volcanological Museum, and learn about the rich history and tragic past of the city.

One of the reasons people should visit Martinique is to experience the unique blend of French and Caribbean culture. The island\'s Creole heritage is evident in its music, dance, and cuisine, which combines flavors from Africa, Europe, and the Caribbean. Visitors can savor local dishes such as accras (fried codfish fritters), colombo (spiced meat stew), and traditional rum cocktails.

Whether you\'re seeking relaxation on the stunning beaches, adventure in the lush rainforests, or a cultural immersion in the vibrant cities, Martinique offers a diverse range of experiences. With its natural beauty, rich history, and warm hospitality, Martinique is a captivating destination that showcases the best of the Caribbean and French culture.
            ',
                'currency' => 'Euro',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 148,
            ],
            [
                'countryCode' => 'MR',
                'countryName' => 'Mauritania',
                'regionCode' => 'AFRICA',
                'capital' => 'Nouakchott',
                'shortDescription' => '
            Mauritania, located in Northwest Africa, is a land of vast deserts, ancient Saharan cities, and unique cultural heritage. Visitors can embark on breathtaking desert safaris, explore historic trading towns like Chinguetti, and immerse themselves in the nomadic way of life, making it a fascinating destination for adventure seekers and cultural enthusiasts.
            ',
                'longDescription' => '
            Mauritania is a country located in Northwest Africa, bordered by the Atlantic Ocean to the west, Senegal to the southwest, Mali to the east and southeast, Algeria to the northeast, and Western Sahara to the north. It is known for its vast desert landscapes, rich cultural heritage, and unique blend of Arab-Berber and Sub-Saharan African traditions.

One of the highlights of visiting Mauritania is its breathtaking desert scenery. The vast Sahara Desert covers much of the country, offering travelers the opportunity to embark on epic desert adventures. The town of Chinguetti, a UNESCO World Heritage site, is a popular starting point for exploring the desert. From here, visitors can go on camel treks, visit traditional nomadic camps, and witness the mesmerizing beauty of the sand dunes.

The Banc d\'Arguin National Park is another must-visit destination in Mauritania. Located along the Atlantic coast, this UNESCO World Heritage site is a haven for migratory birds, marine life, and rare species. The park\'s diverse ecosystems include sand dunes, coastal wetlands, and sandy islands, offering opportunities for birdwatching, wildlife spotting, and exploring the pristine natural surroundings.

The capital city of Mauritania, Nouakchott, is a vibrant and bustling metropolis. Here, visitors can experience the blend of modern and traditional aspects of Mauritanian life. The National Museum of Mauritania showcases the country\'s history and culture, while the bustling markets offer a glimpse into daily life and the opportunity to purchase local handicrafts and traditional goods.

One of the unique cultural experiences in Mauritania is attending a traditional Mauritanian wedding ceremony. These ceremonies are elaborate and festive, involving traditional music, dance, and intricate henna designs. It provides a glimpse into the rich cultural heritage and social customs of the Mauritanian people.

Mauritania is also known for its ancient archaeological sites. The city of Oualata, a UNESCO World Heritage site, boasts well-preserved mud-brick architecture and historical buildings. The ancient city of Chinguetti is famous for its historic libraries, containing valuable manuscripts and Islamic texts.

Visiting Mauritania provides an opportunity to immerse oneself in a unique blend of desert landscapes, cultural heritage, and warm hospitality. From exploring the vast Sahara Desert to discovering the rich history and traditions of its people, Mauritania offers a truly authentic African experience.
            ',
                'currency' => 'Mauritanian ouguiya',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 149,
            ],
            [
                'countryCode' => 'MU',
                'countryName' => 'Mauritius',
                'regionCode' => 'AFRICA',
                'capital' => 'Port Louis',
                'shortDescription' => '
            Mauritius, a tropical paradise in the Indian Ocean, is known for its stunning beaches, crystal-clear waters, and vibrant marine life. Visitors can indulge in water sports, relax on pristine sandy shores, explore lush botanical gardens, and experience the warm hospitality of the local Mauritian people, making it an ideal destination for beach lovers and nature enthusiasts.
            ',
                'longDescription' => '
            Mauritius is a beautiful island nation located in the Indian Ocean, off the southeastern coast of Africa. Known for its stunning beaches, crystal-clear waters, and diverse cultural heritage, Mauritius is a popular destination for travelers seeking a tropical paradise.

The beaches of Mauritius are undoubtedly one of its main attractions. With pristine white sands, turquoise waters, and swaying palm trees, the beaches offer a perfect setting for relaxation and water activities. Popular beach areas include Flic en Flac, Trou aux Biches, and Belle Mare. Visitors can enjoy swimming, snorkeling, diving, and various water sports in the warm Indian Ocean.

In addition to its stunning coastline, Mauritius is also known for its natural beauty and lush landscapes. The Black River Gorges National Park is a must-visit destination for nature enthusiasts. This protected area is home to dense forests, waterfalls, and hiking trails, allowing visitors to explore the island\'s unique flora and fauna.

The capital city of Port Louis offers a blend of cultural and historical attractions. The Central Market is a vibrant place to experience the local culture and cuisine, with stalls selling fresh produce, spices, and traditional crafts. The Blue Penny Museum showcases the rich history and art of Mauritius, including the famous "Post Office" and "One Penny" stamps.

Mauritius is also renowned for its luxury resorts and world-class hospitality. Many resorts offer exclusive amenities such as private beaches, spas, and golf courses, providing a luxurious and relaxing experience for visitors.

For those interested in cultural immersion, a visit to the Eureka House is highly recommended. This 19th-century colonial mansion provides insight into the island\'s history and showcases the unique Creole architecture. Visitors can explore the well-preserved interiors and enjoy a taste of traditional Mauritian cuisine.

Another highlight of Mauritius is its vibrant mix of cultures and cuisines. The island\'s population is a fusion of Indian, African, Chinese, and European influences, resulting in a diverse culinary scene. Visitors can savor delicious local dishes such as curry, seafood, and tropical fruits, as well as international cuisine in the many restaurants and street food stalls.

Overall, Mauritius offers a perfect blend of natural beauty, cultural diversity, and warm hospitality. Whether you are seeking relaxation on the pristine beaches, adventure in the national parks, or a taste of the vibrant local culture, Mauritius has something to offer for everyone.
            ',
                'currency' => 'Mauritian rupee',
                'language' => 'English, French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones. 3G is available in major towns.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 150,
            ],
            [
                'countryCode' => 'YT',
                'countryName' => 'Mayotte',
                'regionCode' => 'AFRICA',
                'capital' => 'Mamoudzou',
                'shortDescription' => '
            Mayotte, a French overseas territory in the Indian Ocean, offers visitors a unique blend of French and African cultures, breathtaking landscapes, and rich marine biodiversity. With its pristine beaches, vibrant coral reefs, and opportunities for outdoor activities like snorkeling and diving, Mayotte is a hidden gem for those seeking an off-the-beaten-path island getaway.
            ',
                'longDescription' => '
            Mayotte is an overseas department and region of France located in the Indian Ocean, off the eastern coast of Africa. Known for its stunning natural beauty, rich cultural heritage, and unique blend of African, French, and Indian influences, Mayotte offers an enchanting experience for travelers.

One of the main attractions of Mayotte is its picturesque beaches and turquoise waters. The island is surrounded by a coral reef, making it a haven for snorkeling and diving enthusiasts. Visitors can explore vibrant coral gardens, encounter a diverse range of marine life, and even swim with dolphins and sea turtles. Popular beach areas include Plage de Moya, Plage de Saziley, and Plage de N\'Gouja.

Mayotte is also home to a number of stunning nature reserves and parks. The Mont Choungui is a prominent mountain peak that offers breathtaking panoramic views of the island and the surrounding ocean. The Dziani Dzaha Crater Lake, located in the heart of Mayotte, is another natural wonder worth exploring. Visitors can hike through lush forests and witness the awe-inspiring beauty of the volcanic lake.

The cultural heritage of Mayotte is rich and diverse. The island is influenced by African, French, and Indian cultures, creating a unique blend of traditions, music, and cuisine. Visitors can explore traditional villages, such as Mamoudzou, and immerse themselves in the local way of life. The Friday Market in Mamoudzou is a vibrant hub of activity, where locals gather to sell fresh produce, spices, and handicrafts.

One of the highlights of a visit to Mayotte is the opportunity to experience the local Malagasy and Mahoran cuisine. The island is known for its aromatic spices, flavorful curries, and fresh seafood dishes. Visitors can savor delicious delicacies such as samosas, mabawas (stuffed pancakes), and pilao (rice dish) while enjoying the warm hospitality of the locals.

Mayotte is also a haven for outdoor enthusiasts. The island offers opportunities for hiking, mountain biking, and exploring its diverse ecosystems. Visitors can venture into the forests, encounter unique flora and fauna, and spot a variety of bird species. The Coconi Mangrove is a popular spot for kayaking and observing the rich biodiversity of the mangrove ecosystem.

In summary, Mayotte is a hidden gem in the Indian Ocean, offering a captivating blend of natural beauty, cultural richness, and outdoor adventures. Whether you are seeking relaxation on pristine beaches, exploring diverse marine life, immersing yourself in the local culture, or embarking on thrilling outdoor activities, Mayotte has something to offer for every traveler.
            ',
                'currency' => 'Euro',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 151,
            ],
            [
                'countryCode' => 'MX',
                'countryName' => 'Mexico',
                'regionCode' => 'NORTH_AMERICA',
                'capital' => 'Mexico City',
                'shortDescription' => '
            Mexico, a country rich in history, culture, and natural beauty, offers a diverse range of attractions to explore. From ancient ruins like Chichen Itza and Teotihuacan to stunning beaches in Cancun and Playa del Carmen, and vibrant cities like Mexico City and Guadalajara, Mexico offers something for everyone, including delicious cuisine, colorful festivals, and warm hospitality.
            ',
                'longDescription' => '
            Mexico, officially known as the United Mexican States, is a vibrant and diverse country located in the southern part of North America. It is bordered by the United States to the north, the Pacific Ocean to the west and south, and the Gulf of Mexico and Caribbean Sea to the east. Mexico is famous for its rich history, ancient ruins, stunning beaches, vibrant culture, and delicious cuisine.

Mexico offers a wide range of attractions and destinations for travelers. One of the most popular destinations is Mexico City, the bustling capital known for its fascinating history, vibrant art scene, and delicious street food. The city is home to numerous historical sites such as the ancient Aztec ruins of Templo Mayor and the iconic Metropolitan Cathedral. Visitors can also explore world-class museums, enjoy live music and performances, and indulge in traditional Mexican cuisine.

Another must-visit location in Mexico is the Yucatan Peninsula, renowned for its stunning Caribbean coastline and ancient Mayan ruins. Cancun and Playa del Carmen are popular beach destinations with crystal-clear turquoise waters and white sandy beaches. Nearby, the ancient city of Chichen Itza stands as a UNESCO World Heritage site, showcasing impressive Mayan pyramids and architectural wonders. The region also offers opportunities for snorkeling and diving in the Great Maya Reef, the second-largest barrier reef in the world.

For nature lovers, the state of Chiapas is a paradise with its lush rainforests, waterfalls, and archaeological sites. Palenque, an ancient Mayan city nestled in the jungle, captivates visitors with its well-preserved temples and palaces. The Sumidero Canyon, with its towering cliffs and emerald-green waters, is another natural wonder worth exploring.

Mexico\'s cuisine is renowned worldwide, and sampling its flavors is a highlight of any visit. From mouthwatering street tacos and tamales to rich mole sauces and fresh ceviche, the country offers a diverse range of culinary delights. Oaxaca, known as the gastronomic capital of Mexico, is a must-visit for food enthusiasts. Here, you can savor traditional dishes like tlayudas, mezcal, and vibrant mole sauces.

Mexico\'s cultural heritage is deeply rooted in its indigenous traditions and colonial history. From the colorful Day of the Dead celebrations to traditional dances and vibrant festivals, visitors have the opportunity to immerse themselves in Mexico\'s vibrant culture and traditions. The cities of Oaxaca, Guanajuato, and San Miguel de Allende are known for their colonial architecture, vibrant art scenes, and lively festivals.

In summary, Mexico is a country of diverse landscapes, rich history, vibrant culture, and warm hospitality. Whether you\'re seeking ancient ruins, pristine beaches, mouthwatering cuisine, or cultural experiences, Mexico offers a wealth of experiences that will captivate and delight travelers from around the world.
            ',
                'currency' => 'Mexican peso',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones. 3G is available in major towns.',
                'electricity' => '127V, 60Hz',
                'active' => false,
                'sortOrder' => 152,
            ],
            [
                'countryCode' => 'FM',
                'countryName' => 'Micronesia, Federated States of',
                'regionCode' => 'OCEANIA',
                'capital' => 'Palikir',
                'shortDescription' => '
            Micronesia, Federated States of, is a tropical paradise consisting of four main states: Yap, Chuuk, Pohnpei, and Kosrae. Visitors can enjoy world-class diving and snorkeling in crystal-clear waters, explore ancient ruins and traditional villages, and experience the warm hospitality of the Micronesian people, making it an ideal destination for those seeking an off-the-beaten-path adventure in the Pacific.
            ',
                'longDescription' => '
            Micronesia, officially known as the Federated States of Micronesia, is a country located in the western Pacific Ocean. It is made up of four main island states: Yap, Chuuk, Pohnpei, and Kosrae. Micronesia is famous for its stunning natural beauty, pristine coral reefs, and unique indigenous cultures.

Yap is known for its traditional stone money, known as Rai, which is still used in ceremonial transactions. The island is also renowned for its beautiful beaches, crystal-clear lagoons, and excellent diving and snorkeling opportunities. Exploring the underwater world around Yap reveals vibrant coral reefs, diverse marine life, and even encounters with manta rays.

Chuuk, formerly known as Truk, is a paradise for wreck diving enthusiasts. The lagoon of Chuuk is home to a large number of sunken Japanese warships from World War II, making it one of the world\'s top wreck diving destinations. Divers can explore these historical wrecks and witness the fascinating marine life that has made them their home over the years.

Pohnpei, the largest and most populous state, offers lush rainforests, cascading waterfalls, and ancient ruins. The mysterious archaeological site of Nan Madol, a UNESCO World Heritage site, features a series of stone structures and canals. The island also boasts beautiful hiking trails, including a trek to the top of Sokehs Mountain, where visitors can enjoy breathtaking views of the surrounding landscape.

Kosrae is known as the "Jewel of Micronesia" due to its unspoiled natural beauty and rich biodiversity. The island is covered in dense rainforests, dotted with hidden waterfalls, and surrounded by vibrant coral reefs. Visitors can embark on hiking adventures through the lush jungle, explore ancient ruins, and indulge in water activities such as kayaking, snorkeling, and diving.

One of the main reasons to visit Micronesia is its pristine marine environment. The country is home to some of the world\'s most biodiverse and well-preserved coral reefs. Snorkelers and divers can explore vibrant coral gardens, encounter an abundance of tropical fish species, and even swim alongside majestic manta rays and sea turtles.

The traditional cultures and warm hospitality of the Micronesian people add to the unique charm of the country. Visitors have the opportunity to learn about the local customs, witness traditional ceremonies and dances, and experience the genuine friendliness of the Micronesian people.

In summary, Micronesia, the Federated States of Micronesia, offers a wealth of natural beauty, cultural richness, and unique experiences. Whether you\'re seeking underwater adventures, cultural immersion, or simply a tranquil escape in a remote paradise, Micronesia has much to offer. The country\'s pristine reefs, lush rainforests, and welcoming communities make it an unforgettable destination for those seeking an authentic Pacific island experience.
            ',
                'currency' => 'United States dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 153,
            ],
            [
                'countryCode' => 'MD',
                'countryName' => 'Moldova, Republic of',
                'regionCode' => 'EUROPE',
                'capital' => 'Chișinău',
                'shortDescription' => '
            Moldova, Republic of, is a small Eastern European country known for its scenic countryside, rich history, and delicious wines. Visitors can explore picturesque vineyards, visit charming monasteries, and immerse themselves in the country\'s unique culture and traditions, making it an appealing destination for wine lovers and those seeking an authentic off-the-beaten-path experience in Europe.
            ',
                'longDescription' => '
            Moldova, officially known as the Republic of Moldova, is a landlocked country located in Eastern Europe. It is bordered by Romania to the west and Ukraine to the north, east, and south. Moldova is famous for its rich cultural heritage, picturesque landscapes, and renowned winemaking traditions.

The capital city of Moldova is Chisinau, a vibrant and cosmopolitan city with a mix of architectural styles, including Soviet-era buildings and neoclassical landmarks. Visitors can explore the city\'s wide boulevards, green parks, and cultural institutions such as the National Museum of History of Moldova and the National Opera and Ballet Theatre.

Orheiul Vechi is a unique archaeological and cultural complex located in the Orhei District of Moldova. It encompasses a series of historical and natural attractions, including ancient cave monasteries, medieval fortresses, and stunning limestone cliffs. The area offers breathtaking views of the Raut River valley and is an ideal destination for hiking, photography, and immersing oneself in the country\'s history and spirituality.

Another must-visit destination in Moldova is the wine region of Cricova. Moldova has a long tradition of winemaking, and Cricova is one of the country\'s most famous wine cellars. It stretches for kilometers underground and features a labyrinth of tunnels and galleries where millions of bottles of wine are stored. Visitors can take guided tours, taste a variety of local wines, and learn about the fascinating winemaking process.

The rural region of Transnistria is a fascinating and somewhat unique destination within Moldova. Transnistria is a breakaway territory with its own government and distinct identity. Visitors can explore the capital city of Tiraspol, which has a Soviet-era ambiance, with its statues of Lenin, wide boulevards, and grand buildings. The region offers a glimpse into a different era and provides insights into the complex history and politics of the area.

Moldova is also known for its beautiful countryside, characterized by rolling hills, vineyards, and charming villages. Visitors can take scenic drives through the countryside, stopping at wineries and enjoying the peaceful rural landscapes. The rural tourism industry in Moldova offers opportunities to stay in traditional guesthouses, participate in local crafts and traditions, and experience the warmth and hospitality of the Moldovan people.

In summary, Moldova, the Republic of Moldova, offers a blend of cultural heritage, picturesque landscapes, and exceptional wine experiences. From exploring the capital city of Chisinau to delving into the country\'s winemaking traditions and venturing into unique destinations like Orheiul Vechi and Transnistria, Moldova has something to offer every visitor. Its welcoming people, rich history, and unspoiled natural beauty make it a hidden gem in Eastern Europe, waiting to be discovered.
            ',
                'currency' => 'Moldovan leu',
                'language' => 'Romanian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 154,
            ],
            [
                'countryCode' => 'MC',
                'countryName' => 'Monaco',
                'regionCode' => 'EUROPE',
                'capital' => 'Monaco',
                'shortDescription' => '
            Monaco is a glamorous city-state on the French Riviera, renowned for its luxurious lifestyle, upscale casinos, and yacht-filled harbor. Visitors can enjoy the opulent atmosphere, explore the historic landmarks, and experience the excitement of the Formula One Grand Prix, making it a popular destination for luxury travelers and motorsport enthusiasts.
            ',
                'longDescription' => '
            Monaco is a small sovereign city-state located on the French Riviera in Western Europe. Known for its glamorous reputation, Monaco is famous for its luxury lifestyle, casinos, and high-profile events such as the Formula One Monaco Grand Prix.

The city of Monte Carlo is the most renowned district in Monaco, offering a stunning blend of natural beauty and sophisticated entertainment. The Casino de Monte-Carlo is a must-visit attraction, known for its opulent architecture and lavish interiors. Visitors can try their luck at the gaming tables or simply admire the grandeur of the casino.

The Prince\'s Palace of Monaco is another iconic landmark that attracts visitors from around the world. Perched on a rock overlooking the Mediterranean Sea, the palace is the official residence of the Prince of Monaco. Visitors can explore the State Apartments and witness the Changing of the Guard ceremony, which takes place daily.

Monaco\'s Old Town, known as Monaco-Ville or "The Rock," is a charming area with narrow streets, picturesque squares, and historical buildings. The Saint Nicholas Cathedral, where many members of the Monaco royal family are buried, is located in this area. The Oceanographic Museum, founded by Prince Albert I, is also worth a visit. It houses an impressive collection of marine exhibits and offers panoramic views of the Mediterranean Sea.

For nature lovers, the Jardin Exotique de Monaco is a beautiful botanical garden with a stunning collection of exotic plants and succulents. The garden is located on a cliffside, providing breathtaking views of the city and the sea.

One of Monaco\'s main attractions is its vibrant social and cultural scene. Throughout the year, the city-state hosts various events and festivals, including the Monte Carlo Jazz Festival and the Monte Carlo International Fireworks Competition. These events showcase the city\'s elegance, creativity, and joie de vivre.

In summary, Monaco is a glamorous destination that offers a unique blend of luxury, natural beauty, and cultural experiences. From the excitement of the casinos and high-end shopping to the historical landmarks and scenic views, Monaco has something to offer every visitor. Whether you\'re seeking a taste of the high life or simply want to explore the charm of this enchanting city-state, Monaco is sure to leave a lasting impression.
            ',
                'currency' => 'Euro',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 155,
            ],
            [
                'countryCode' => 'MN',
                'countryName' => 'Mongolia',
                'regionCode' => 'ASIA',
                'capital' => 'Ulaanbaatar',
                'shortDescription' => '
            Mongolia is a vast landlocked country known for its stunning natural landscapes, including the Gobi Desert, rolling steppe, and majestic mountains. Visitors can experience the nomadic culture, ride horses across the vast plains, and explore the rich history and traditions of this rugged and beautiful country, making it an ideal destination for adventure seekers and those seeking a unique cultural experience.
            ',
                'longDescription' => '
            Mongolia is a landlocked country located in Central Asia, bordered by Russia to the north and China to the south, east, and west. Known for its vast landscapes, rich nomadic culture, and historical heritage, Mongolia offers a unique travel experience for adventurers and nature enthusiasts.

The capital city of Mongolia is Ulaanbaatar, a bustling metropolis that blends modernity with traditional Mongolian culture. Here, visitors can explore museums, temples, and markets, and learn about Mongolia\'s history and heritage. The Gandan Monastery, one of the largest Buddhist monasteries in Mongolia, is a popular attraction where visitors can witness religious ceremonies and admire the intricate architecture.

One of the top destinations in Mongolia is the Gobi Desert, a vast expanse of desert landscape known for its unique natural features. Travelers can embark on camel or horseback rides to explore the towering sand dunes, rocky formations, and ancient archaeological sites. The Gobi Desert also offers opportunities for wildlife spotting, with the chance to encounter rare species such as the Bactrian camel and the elusive snow leopard.

The Khuvsgul Lake in northern Mongolia is another must-visit location. Known as the "Blue Pearl of Mongolia," it is one of the largest freshwater lakes in Asia and offers breathtaking scenery. Visitors can enjoy boat trips on the lake, go fishing, or hike in the surrounding forests and mountains.

For those interested in experiencing the traditional nomadic way of life, a visit to Mongolia\'s countryside is highly recommended. The vast grasslands, known as the steppe, provide opportunities for horseback riding and staying with nomadic families in traditional ger camps. This immersive experience allows visitors to learn about the nomadic culture, taste traditional Mongolian cuisine, and witness age-old customs and traditions.

Mongolia is also home to several national parks and protected areas, offering diverse ecosystems and abundant wildlife. The Terelj National Park, located near Ulaanbaatar, is a popular destination for hiking, rock climbing, and camping amidst stunning natural landscapes. The Hustai National Park, known for its successful reintroduction of the endangered Przewalski\'s horse, offers opportunities for wildlife watching and bird spotting.

In summary, Mongolia is a country of vast and untouched beauty, offering a unique blend of natural wonders, nomadic culture, and historical heritage. Whether exploring the Gobi Desert, trekking through the pristine landscapes, or immersing oneself in the traditional way of life, Mongolia promises an unforgettable adventure for travelers seeking a truly authentic and off-the-beaten-path experience.

            ',
                'currency' => 'Mongolian tögrög',
                'language' => 'Mongolian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 156,
            ],
            [
                'countryCode' => 'ME',
                'countryName' => 'Montenegro',
                'regionCode' => 'EUROPE',
                'capital' => 'Podgorica',
                'shortDescription' => '
            Montenegro, located in the Balkans, offers a diverse range of attractions, from picturesque coastal towns along the Adriatic Sea to stunning mountain landscapes. Visitors can explore historic cities, enjoy outdoor activities like hiking and kayaking, and soak up the beauty of the country\'s national parks, making it an ideal destination for nature lovers and those seeking a blend of culture and natural beauty.
            ',
                'longDescription' => '
            Montenegro, located in Southeastern Europe, is a small but captivating country known for its stunning coastline along the Adriatic Sea, rugged mountains, and rich cultural heritage. With a mix of historic towns, breathtaking landscapes, and a vibrant atmosphere, Montenegro offers a diverse range of experiences for travelers.

The coastal town of Kotor is a top destination in Montenegro. Surrounded by ancient city walls and nestled between mountains and the Bay of Kotor, this UNESCO World Heritage site is renowned for its picturesque setting. Visitors can explore the narrow cobblestone streets, visit medieval churches and palaces, and climb the stairs to the top of the city walls for panoramic views of the bay.

Another must-visit location is the Durmitor National Park, a mountainous wonderland in northern Montenegro. With its glacial lakes, deep canyons, and dense forests, Durmitor offers excellent opportunities for hiking, mountain biking, and winter sports. The Tara River Canyon, one of the deepest canyons in the world, is located within the park and is a popular spot for white-water rafting.
v
For beach lovers, the coastal town of Budva is a popular choice. Known for its sandy beaches, vibrant nightlife, and well-preserved medieval old town, Budva attracts visitors seeking a mix of relaxation and entertainment. The nearby Sveti Stefan island, a luxurious resort perched on a small islet, is a postcard-worthy sight and a symbol of Montenegro\'s allure.

In addition to its natural beauty, Montenegro boasts a rich cultural heritage. The old royal capital of Cetinje is home to numerous historical and cultural landmarks, including monasteries, museums, and the former royal palace. The city of Podgorica, the capital of Montenegro, offers a blend of modern architecture and historic sites, such as the iconic Millennium Bridge and the Clock Tower.

Montenegro\'s culinary scene is also worth exploring, with influences from both the Mediterranean and Balkan regions. Fresh seafood, grilled meats, and locally produced wines and cheeses are among the highlights of the Montenegrin cuisine.

Overall, Montenegro offers a diverse range of attractions and experiences for travelers. Whether you\'re seeking stunning natural landscapes, rich history and culture, or relaxing beachside retreats, Montenegro has something to offer every visitor. Its relatively compact size allows for easy exploration and the opportunity to discover hidden gems at every turn.
            ',
                'currency' => 'Euro',
                'language' => 'Montenegrin',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones. 3G is available in major towns.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 157,
            ],
            [
                'countryCode' => 'MS',
                'countryName' => 'Montserrat',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Plymouth',
                'shortDescription' => '
            Montserrat, a Caribbean island known as the "Emerald Isle of the Caribbean," offers stunning natural beauty with its lush green mountains, pristine beaches, and volcanic landscapes. Visitors can enjoy activities such as hiking, diving, and exploring the island\'s unique cultural heritage, including the vibrant local music scene, making it a perfect destination for those seeking a tranquil and authentic Caribbean experience.
            ',
                'longDescription' => '
            Montserrat, a small Caribbean island located in the Lesser Antilles, is known for its natural beauty, stunning landscapes, and a rich blend of British and Caribbean cultures. Despite being hit by a volcanic eruption in the 1990s, the island has made a remarkable recovery and has become a popular destination for nature lovers, adventure enthusiasts, and those seeking a tranquil Caribbean getaway.

The most iconic feature of Montserrat is the Soufrière Hills volcano, which erupted in 1995 and caused significant damage to the southern part of the island. The volcano is still active, and visitors can witness its impact by visiting the Montserrat Volcano Observatory. The "Exclusion Zone" around the volcano, a restricted area, offers a hauntingly beautiful landscape with volcanic ash-covered ruins and the opportunity to witness the volcano\'s raw power.

For nature lovers, Montserrat offers breathtaking hiking trails that lead through lush rainforests, past waterfalls, and up to stunning viewpoints. The Oriole Walkway and the Blackwood Allen Trail are popular choices for exploring the island\'s natural beauty. Birdwatchers will appreciate the diverse birdlife, including the Montserrat oriole, which is the national bird of the island.

Little Bay, the new capital of Montserrat, is a vibrant hub with colorful buildings, shops, and restaurants. The nearby Woodlands Beach is a picturesque spot for relaxation and swimming. Other notable attractions include the Montserrat Cultural Centre, showcasing local art and heritage, and the Montserrat National Trust, which offers insight into the island\'s history and environment.

Music lovers will find a vibrant music scene in Montserrat, influenced by both the Caribbean and British traditions. The island is known as the "Emerald Isle of the Caribbean" and has produced famous musicians, including Sir George Martin, who worked with The Beatles. Visitors can explore the legendary AIR Studios, where numerous renowned artists have recorded their music.

In addition to its natural and cultural attractions, Montserrat hosts various festivals throughout the year, celebrating its heritage, music, and cuisine. The St. Patrick\'s Festival, held in March, is a highlight, featuring colorful parades, music performances, and traditional Irish and Caribbean festivities.

With its untouched natural beauty, welcoming locals, and the unique blend of British and Caribbean influences, Montserrat offers a serene and off-the-beaten-path Caribbean experience. Whether you\'re exploring the volcano-ravaged landscapes, hiking through rainforests, enjoying the local music scene, or simply relaxing on the beach, Montserrat has much to offer for a memorable and authentic Caribbean getaway.
            ',
                'currency' => 'East Caribbean dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '',
                'active' => false,
                'sortOrder' => 158,
            ],
            [
                'countryCode' => 'MA',
                'countryName' => 'Morocco',
                'regionCode' => 'AFRICA',
                'capital' => 'Rabat',
                'shortDescription' => '
        Morocco is a captivating country that blends ancient traditions with modern allure. With its rich history, vibrant cities like Marrakech and Fez, and diverse landscapes ranging from the Sahara Desert to the Atlas Mountains, Morocco offers visitors a unique cultural experience, delicious cuisine, and endless opportunities for exploration and adventure.
            ',
                'longDescription' => '
            Morocco, located in North Africa, is a country renowned for its vibrant culture, rich history, and diverse landscapes. It offers a fascinating blend of ancient traditions and modern influences, making it a popular destination for travelers from around the world.

One of the highlights of Morocco is its imperial cities, each with its own unique charm and historical significance. Marrakech, known as the "Red City," captivates visitors with its bustling souks, vibrant squares, and stunning architecture, including the iconic Koutoubia Mosque and Bahia Palace. The capital city, Rabat, showcases a blend of modern and historic attractions, such as the Royal Palace and the Kasbah of the Udayas. Fes, the country\'s oldest imperial city, is renowned for its ancient medina, labyrinthine streets, and the world\'s oldest university, Al-Qarawiyyin.

Morocco\'s natural landscapes are incredibly diverse and offer a range of outdoor activities. The Sahara Desert in the south is a mesmerizing expanse of golden dunes, where visitors can experience camel trekking, spend a night in a desert camp, and witness breathtaking sunrises and sunsets. The Atlas Mountains provide a stunning backdrop for hiking and adventure activities, with opportunities to explore picturesque valleys, visit traditional Berber villages, and climb Mount Toubkal, the highest peak in North Africa.

The coastal cities of Morocco are also worth exploring. Casablanca, known for its modern architecture and vibrant nightlife, offers a cosmopolitan atmosphere and the famous Hassan II Mosque, one of the largest mosques in the world. Essaouira, a charming coastal town, attracts visitors with its beautiful beaches, historic medina, and windsurfing opportunities.

Morocco\'s cuisine is a delightful fusion of flavors influenced by Arabic, Berber, and Mediterranean traditions. Trying traditional dishes such as tagine, couscous, and mint tea is a must for food enthusiasts. Exploring the bustling souks and markets, such as the famous Jemaa el-Fnaa square in Marrakech, allows visitors to immerse themselves in the vibrant atmosphere, shop for handicrafts, textiles, and spices, and experience the local culture.

Morocco is also known for its vibrant festivals and celebrations. The Festival of World Sacred Music in Fes and the Rose Festival in the town of Kelaat M\'Gouna are just a couple of examples of the country\'s lively cultural events that showcase music, dance, and traditional rituals.

Whether it\'s exploring the enchanting medinas, traversing the desert dunes, hiking in the mountains, savoring the flavors of Moroccan cuisine, or immersing oneself in the rich cultural heritage, Morocco offers a captivating and unforgettable travel experience.
            ',
                'currency' => 'Moroccan dirham',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones. 3G is available in major towns.',
                'electricity' => '127/220V, 50Hz',
                'active' => false,
                'sortOrder' => 159,
            ],
            [
                'countryCode' => 'MZ',
                'countryName' => 'Mozambique',
                'regionCode' => 'AFRICA',
                'capital' => 'Maputo',
                'shortDescription' => '
            Mozambique is a tropical paradise along the southeastern coast of Africa, boasting stunning beaches, pristine coral reefs, and abundant marine life. Visitors can enjoy a variety of water activities such as snorkeling, diving, and fishing, as well as explore the vibrant local culture, historic sites, and national parks, making it an ideal destination for nature lovers and adventure seekers.
            ',
                'longDescription' => '
            Mozambique, located in southeastern Africa, is a country known for its stunning coastline along the Indian Ocean, vibrant cultural heritage, and diverse natural landscapes. With its mix of tropical beaches, historical sites, and abundant wildlife, Mozambique offers a unique and rewarding travel experience.

The country\'s coastline stretches for over 2,500 kilometers and boasts pristine white-sand beaches, crystal-clear waters, and colorful coral reefs, making it a paradise for beach lovers and water sports enthusiasts. Popular beach destinations include the Bazaruto Archipelago, known for its picturesque islands and excellent snorkeling and diving opportunities, and Tofo Beach, renowned for its whale shark encounters and vibrant marine life.

Inland, Mozambique is home to several national parks and wildlife reserves that showcase the country\'s rich biodiversity. The Gorongosa National Park, once devastated by civil war, has made a remarkable recovery and is now a thriving wildlife sanctuary. Visitors can spot elephants, lions, hippos, and a wide array of bird species while exploring its diverse ecosystems. The Niassa Reserve, one of Africa\'s largest protected areas, offers the chance to see rare species like wild dogs and sable antelopes.

For history and culture enthusiasts, Mozambique has a fascinating blend of influences from Arab, Portuguese, and indigenous cultures. The island of Mozambique, a UNESCO World Heritage site, features colonial-era architecture, historic forts, and narrow stone streets that reflect its rich past as a trading hub. The capital city, Maputo, showcases a mix of architectural styles, vibrant markets, and lively music and dance scenes that reflect the country\'s cultural diversity.

Mozambican cuisine is a fusion of Portuguese, African, and Indian flavors. Seafood, especially prawns, is a staple, and traditional dishes like peri-peri chicken and matapa (a dish made from cassava leaves and peanuts) are popular. Exploring local markets and street stalls allows visitors to savor the vibrant flavors and culinary traditions of the country.

With its warm and welcoming people, stunning natural beauty, and a wide range of activities and attractions, Mozambique offers a unique and off-the-beaten-path travel experience for those seeking adventure, relaxation, and cultural immersion.
            ',
                'currency' => 'Mozambican metical',
                'language' => 'Portuguese',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones. 3G is available in major towns.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 160,
            ],
            [
                'countryCode' => 'MM',
                'countryName' => 'Myanmar',
                'regionCode' => 'ASIA',
                'capital' => 'Naypyidaw',
                'shortDescription' => '
            Myanmar, also known as Burma, is a country with a rich cultural heritage and breathtaking landscapes. From the ancient temples of Bagan to the serene beauty of Inle Lake and the bustling streets of Yangon, Myanmar offers a unique blend of history, spirituality, and natural beauty that makes it an enchanting destination for travelers seeking an immersive cultural experience.
            ',
                'longDescription' => '
            Myanmar, also known as Burma, is a diverse and culturally rich country located in Southeast Asia. It is known for its ancient temples, vibrant festivals, and stunning landscapes. With a blend of traditional and modern influences, Myanmar offers a unique travel experience for visitors.

One of the most famous attractions in Myanmar is the ancient city of Bagan, renowned for its thousands of well-preserved temples and pagodas. Exploring the vast temple complex, particularly during sunrise or sunset, offers breathtaking views and a glimpse into Myanmar\'s rich history and religious heritage.

Inle Lake is another must-visit destination in Myanmar. This serene and picturesque lake is famous for its unique floating gardens, stilted villages, and traditional fishing methods. Travelers can take boat tours to explore the lake, visit local markets, observe traditional handicrafts, and witness the unique leg-rowing technique of the local fishermen.

Mandalay, the last royal capital of Myanmar, is a cultural and religious hub. It is home to magnificent sites such as the Mandalay Palace, Shwenandaw Monastery, and Kuthodaw Pagoda, which houses the world\'s largest book. Mandalay also serves as a gateway to nearby attractions like the ancient cities of Amarapura, Sagaing, and Mingun.

Aside from its cultural treasures, Myanmar is blessed with natural beauty. In the south, Ngapali Beach offers pristine white sands, clear turquoise waters, and a relaxed coastal atmosphere. Travelers can unwind, indulge in fresh seafood, and enjoy water activities such as snorkeling and diving.

Another natural wonder is Inle Lake, surrounded by lush green hills and floating gardens. Visitors can take boat trips to explore the lake, observe the unique leg-rowing fishermen, and immerse themselves in the traditional way of life of the Intha people.

Myanmar\'s diverse ethnic groups contribute to its vibrant festivals and celebrations. The Thingyan Water Festival, held in April, marks the Burmese New Year and involves water fights and joyful street celebrations. The Phaung Daw Oo Pagoda Festival, held on Inle Lake, showcases traditional boat races and religious processions.

In summary, Myanmar offers a blend of rich cultural heritage, natural beauty, and warm hospitality. From exploring ancient temples to immersing in local traditions and enjoying the country\'s stunning landscapes, Myanmar provides a memorable and unique travel experience for visitors.

            ',
                'currency' => 'Burmese kyat',
                'language' => 'Burmese',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 161,
            ],
            [
                'countryCode' => 'NA',
                'countryName' => 'Namibia',
                'regionCode' => 'AFRICA',
                'capital' => 'Windhoek',
                'shortDescription' => '
            Namibia is a land of stark beauty, with vast deserts, rugged mountains, and incredible wildlife. From the stunning red dunes of Sossusvlei to the wildlife-rich Etosha National Park and the unique cultural experiences of the Himba people, Namibia offers a diverse range of experiences for nature lovers, adventure seekers, and those looking to immerse themselves in a rich cultural tapestry.
            ',
                'longDescription' => '
            Namibia, located in southwestern Africa, is a country known for its vast and diverse landscapes, ranging from the arid Namib Desert to the wildlife-rich Etosha National Park. It offers a unique blend of natural beauty, cultural experiences, and adventure.

One of the top attractions in Namibia is the Namib Desert, one of the oldest deserts in the world. The towering sand dunes of Sossusvlei, especially the iconic Dune 45 and Big Daddy, attract visitors from around the globe. Watching the sunrise or sunset over the desert landscape is a mesmerizing experience.

Etosha National Park is a haven for wildlife enthusiasts. It is home to a wide variety of animals, including elephants, lions, rhinos, giraffes, and numerous bird species. Visitors can embark on thrilling game drives and observe wildlife at the waterholes, providing excellent opportunities for wildlife photography.

The coastal town of Swakopmund is a popular destination for adventure and adrenaline activities. It offers a range of thrilling experiences such as sandboarding, quad biking, and skydiving. Additionally, Swakopmund boasts beautiful beaches, German colonial architecture, and a vibrant cultural scene.

For a cultural experience, a visit to the Himba villages in the northwestern part of Namibia is highly recommended. The Himba people are known for their distinct traditions, clothing, and hairstyles. Travelers can learn about their way of life, traditions, and artistry.

Namibia is also home to the Fish River Canyon, one of the largest canyons in the world. Hiking the canyon trail offers stunning views and an exhilarating adventure for nature enthusiasts.

The country\'s rich cultural heritage is showcased in various festivals and events throughout the year. The Namibian Carnival, held in Windhoek, features colorful parades, music, and dance performances representing the diverse cultures of Namibia. The Ongwediva Annual Trade Fair is another major event that showcases local products, arts, crafts, and traditional performances.

In summary, Namibia offers a unique blend of natural wonders, wildlife encounters, cultural experiences, and adventure. Whether it\'s exploring the vast desert landscapes, witnessing wildlife in their natural habitat, immersing in the local culture, or engaging in thrilling activities, Namibia has something for every traveler seeking a truly unforgettable experience.
            ',
                'currency' => 'Namibian dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 162,
            ],
            [
                'countryCode' => 'NR',
                'countryName' => 'Nauru',
                'regionCode' => 'OCEANIA',
                'capital' => 'Yaren',
                'shortDescription' => '
            Nauru is a small island nation known for its pristine beaches, crystal-clear waters, and vibrant marine life. With its laid-back atmosphere and friendly locals, Nauru offers a peaceful and secluded escape for travelers looking to relax, enjoy water activities such as snorkeling and diving, and experience a unique Pacific Island culture.
            ',
                'longDescription' => '
            Nauru is a small island country located in Micronesia, in the Central Pacific. Known as the "Smallest Republic in the World," Nauru is famous for its unique history, stunning natural beauty, and friendly locals.

One of the top attractions in Nauru is the Buada Lagoon, a freshwater lake located in the center of the island. Surrounded by lush vegetation and palm trees, the lagoon is a serene and picturesque spot for swimming, picnicking, and enjoying the peaceful ambiance.

Another must-visit location is Anibare Bay, a beautiful white sand beach with crystal-clear turquoise waters. It is an ideal spot for swimming, snorkeling, and sunbathing. The beach offers stunning views of the Pacific Ocean and is perfect for relaxing and unwinding.

Nauru is also known for its unique phosphate mining history. The abandoned phosphate mines, scattered across the island, serve as a reminder of Nauru\'s past. Visitors can take guided tours to learn about the island\'s mining heritage, explore the caves, and discover the fascinating history and culture of Nauru.

For those interested in World War II history, Command Ridge is a must-visit. It was a strategic point during the war and offers panoramic views of the island. The site features remnants of Japanese bunkers and a memorial to commemorate the war.

Nauru\'s vibrant culture is celebrated through traditional dance, music, and festivals. The Nauru Day Festival, held annually on January 31st, is a grand celebration of the country\s independence. Visitors can experience traditional dance performances, cultural displays, local delicacies, and participate in various festivities.

In addition to its natural and cultural attractions, Nauru offers opportunities for outdoor activities such as fishing, snorkeling, and bird watching. The island is home to various bird species, including the endangered Nauru Reed Warbler, making it a paradise for bird enthusiasts.

Nauru\'s warm and welcoming people are known for their hospitality. Interacting with the locals, learning about their traditions, and experiencing their way of life is a highlight of any visit to Nauru.

In summary, Nauru may be a small island nation, but it offers a unique and enriching travel experience. From its beautiful beaches and stunning landscapes to its rich history and vibrant culture, Nauru is a hidden gem waiting to be discovered by adventurous travelers.
            ',
                'currency' => 'Australian dollar',
                'language' => 'Nauruan',
                'atm' => '',
                'mobilePhone' => '',
                'electricity' => '240V, 50Hz',
                'active' => false,
                'sortOrder' => 163,
            ],
            [
                'countryCode' => 'NP',
                'countryName' => 'Nepal',
                'regionCode' => 'ASIA',
                'capital' => 'Kathmandu',
                'shortDescription' => '
            Nepal is a breathtaking country renowned for its majestic Himalayan mountains, including Mount Everest, and its rich cultural heritage. Visitors can explore stunning trekking trails, experience the warmth and hospitality of the Nepalese people, and immerse themselves in the vibrant festivals, ancient temples, and spiritual traditions that make Nepal a truly enchanting destination.
            ',
                'longDescription' => '
            Nepal, located in South Asia, is renowned for its breathtaking landscapes, majestic mountains, and rich cultural heritage, making it a popular destination for travelers from around the world.

One of the main attractions in Nepal is the Himalayas, including Mount Everest, the highest peak in the world. Trekking in the Himalayas is a dream for many adventure seekers, with popular routes like the Everest Base Camp Trek and Annapurna Circuit offering stunning views, challenging trails, and encounters with unique local communities.

The capital city, Kathmandu, is a vibrant hub of culture and history. The city is home to numerous UNESCO World Heritage Sites, such as Durbar Square, Pashupatinath Temple, and Boudhanath Stupa. Exploring the ancient temples, palaces, and narrow alleys of Kathmandu provides a glimpse into Nepal\'s rich architectural and religious traditions.

Pokhara, another popular destination, is known for its serene lakes and close proximity to the Annapurna mountain range. The scenic beauty of Phewa Lake, the adventure of paragliding, and the tranquility of Sarangkot viewpoint are some of the highlights of a visit to Pokhara.

Chitwan National Park, a UNESCO World Heritage Site, offers incredible wildlife experiences. The park is home to various endangered species, including the Bengal tiger, one-horned rhinoceros, and Asian elephant. Exploring the park through jungle safaris, elephant rides, and canoe trips along the Rapti River provides an opportunity to witness Nepal\'s diverse wildlife up close.

Nepal is also renowned for its rich cultural heritage and festivals. The colorful festivals like Dashain and Tihar showcase vibrant traditions, music, dance, and religious rituals. Visitors have the chance to participate in these festivities, interact with the locals, and experience the warmth and hospitality of the Nepalese people.

For spiritual seekers, Nepal is a significant destination. Lumbini, the birthplace of Lord Buddha, attracts Buddhist pilgrims from around the world. The sacred sites and monasteries in Lumbini offer a peaceful atmosphere for meditation and reflection.

Moreover, Nepal offers a variety of adventure activities, including white-water rafting, bungee jumping, mountain biking, and wildlife safaris. The country\'s diverse landscapes, ranging from lush valleys to snow-capped peaks, provide ample opportunities for outdoor enthusiasts to indulge in thrilling adventures.

In summary, Nepal is a captivating destination that offers a unique blend of natural beauty, cultural heritage, and adventure. Whether you seek adventure in the mountains, spiritual solace, or immersion in rich traditions, Nepal has something to offer to every traveler.
            ',
                'currency' => 'Nepalese rupee',
                'language' => 'Nepali',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones. 3G is available in major towns.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 164,
            ],
            [
                'countryCode' => 'NL',
                'countryName' => 'Netherlands',
                'regionCode' => 'EUROPE',
                'capital' => 'Amsterdam',
                'shortDescription' => '
            The Netherlands, with its iconic windmills, picturesque canals, and charming tulip fields, offers a delightful blend of natural beauty, rich history, and vibrant culture. Visitors can explore the unique cities of Amsterdam, Rotterdam, and The Hague, admire world-class art in museums like the Van Gogh Museum, and experience the warm hospitality and bicycle-friendly lifestyle that make the Netherlands a wonderful destination to explore.
            ',
                'longDescription' => '
            The Netherlands, often referred to as Holland, is a country located in Northwestern Europe. It is famous for its picturesque landscapes, iconic windmills, vibrant cities, and rich cultural heritage.

One of the top attractions in the Netherlands is the capital city, Amsterdam. Known for its beautiful canals, historic architecture, and world-class museums, Amsterdam offers a unique blend of history and modernity. Visitors can explore famous landmarks such as the Anne Frank House, Rijksmuseum, Van Gogh Museum, and take leisurely walks along the charming canal streets.

Another must-visit location in the Netherlands is the historic city of Rotterdam. Renowned for its modern architecture and bustling port, Rotterdam offers a dynamic and contemporary atmosphere. Highlights include the Euromast Tower, Erasmus Bridge, and the Markthal, a spectacular food market.

The Netherlands is also famous for its charming countryside and windmill-dotted landscapes. The village of Zaanse Schans is a popular destination, where visitors can experience traditional Dutch life and see well-preserved windmills, wooden houses, and artisanal crafts. Additionally, the countryside of the Netherlands is ideal for cycling enthusiasts, with numerous cycling routes that allow travelers to explore the scenic beauty of tulip fields, canals, and quaint villages.

For art enthusiasts, a visit to the city of The Hague is a must. The Hague is home to the Mauritshuis, which houses famous paintings such as Vermeer\'s "Girl with a Pearl Earring." It is also the political center of the Netherlands, hosting important institutions like the International Court of Justice and the Dutch Parliament.

The Netherlands is famous for its vibrant tulip fields, especially in the Keukenhof Gardens near Lisse. During springtime, millions of tulips, daffodils, and other flowers create a colorful spectacle that attracts visitors from all over the world.

In summary, the Netherlands offers a unique blend of historical charm, vibrant cities, beautiful landscapes, and cultural experiences. Whether you\'re exploring the canals of Amsterdam, admiring the windmills in the countryside, or immersing yourself in Dutch art and culture, the Netherlands has something for everyone.
            ',
                'currency' => 'Euro',
                'language' => 'Dutch',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 165,
            ],
            [
                'countryCode' => 'NC',
                'countryName' => 'New Caledonia',
                'regionCode' => 'OCEANIA',
                'capital' => 'Noumea',
                'shortDescription' => '
            New Caledonia, a French territory in the South Pacific, entices travelers with its stunning turquoise lagoons, pristine beaches, and diverse marine life. With its unique blend of French and Melanesian cultures, visitors can indulge in delicious cuisine, explore vibrant markets, and embark on thrilling outdoor adventures such as snorkeling, diving, and hiking, making it a paradise for nature lovers and cultural enthusiasts alike.
            ',
                'longDescription' => '
            New Caledonia is a French overseas territory located in the southwestern Pacific Ocean. It is known for its stunning natural beauty, diverse marine life, and unique blend of Melanesian and French cultures.

One of the top attractions in New Caledonia is the capital city, Nouméa. With its beautiful beaches, vibrant waterfront promenade, and French-influenced architecture, Nouméa offers a lively urban experience. Visitors can explore the city\'s museums, enjoy the local cuisine in charming restaurants, and relax on the picturesque Anse Vata or Baie des Citrons beaches.

The Isle of Pines is another popular destination in New Caledonia. This tropical paradise is famous for its crystal-clear turquoise waters, white sandy beaches, and towering pine trees. Visitors can indulge in snorkeling, diving, and swimming in the pristine lagoons, or take a leisurely stroll along the stunning Oro Bay.

For nature lovers, the UNESCO World Heritage-listed lagoon in New Caledonia is a must-see. The lagoon is one of the largest and most diverse coral reef ecosystems in the world, offering opportunities for snorkeling, diving, and sailing. It is home to a rich variety of marine life, including colorful coral reefs, turtles, dolphins, and tropical fish.

New Caledonia also boasts beautiful hiking trails and nature reserves. The Parc Provincial de la Rivière Bleue is a protected area known for its lush forests, stunning waterfalls, and scenic hiking trails. Visitors can spot native bird species, such as the iconic cagou, and enjoy the tranquility of nature.

Cultural experiences are an integral part of a visit to New Caledonia. The Kanak culture, indigenous to the island, is rich in traditions, customs, and arts. Visitors can learn about the Kanak way of life by visiting tribal villages, participating in traditional ceremonies, and admiring intricate woodcarvings and traditional crafts.

In summary, New Caledonia offers a unique blend of natural beauty, cultural experiences, and outdoor adventures. Whether you\'re exploring the vibrant city of Nouméa, relaxing on pristine beaches, discovering the underwater wonders of the lagoon, or immersing yourself in the rich Kanak culture, New Caledonia promises an unforgettable travel experience.
            ',
                'currency' => 'CFP franc',
                'language' => 'French',
                'atm' => '',
                'mobilePhone' => '',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 166,
            ],
            [
                'countryCode' => 'NZ',
                'countryName' => 'New Zealand',
                'regionCode' => 'OCEANIA',
                'capital' => 'Wellington',
                'shortDescription' => '
            New Zealand, known for its breathtaking landscapes, offers travelers a diverse range of experiences, from exploring the majestic fjords and mountains of the South Island to discovering the vibrant cities and Maori culture of the North Island. With its adventure sports, stunning national parks, friendly locals, and unique wildlife, New Zealand is an ideal destination for outdoor enthusiasts, nature lovers, and those seeking an unforgettable adventure in a truly picturesque setting.
            ',
                'longDescription' => '
            New Zealand, located in the southwestern Pacific Ocean, is a country known for its breathtaking landscapes, diverse wildlife, and rich Maori culture. It is composed of two main islands, the North Island and the South Island, as well as numerous smaller islands.

One of the top destinations in New Zealand is Queenstown, located on the South Island. Queenstown is renowned as the adventure capital of New Zealand, offering a wide range of thrilling activities such as bungee jumping, skydiving, jet boating, and skiing. The town is nestled on the shores of Lake Wakatipu and surrounded by majestic mountains, providing a stunning backdrop for outdoor enthusiasts and nature lovers.

Another must-visit location is Rotorua, located on the North Island. Rotorua is famous for its geothermal activity, with bubbling mud pools, geysers, and hot springs. Visitors can experience the unique Maori culture through traditional performances, visit the living Maori village of Whakarewarewa, and indulge in a relaxing soak in the natural hot springs.

For those seeking breathtaking natural beauty, Milford Sound in Fiordland National Park is a must-see. This iconic fjord is surrounded by towering peaks, cascading waterfalls, and lush rainforests. Taking a scenic cruise through Milford Sound offers a close-up view of its dramatic scenery, including the famous Mitre Peak.

New Zealand is also renowned for its diverse wildlife. The Kaikoura region, located on the east coast of the South Island, is a popular spot for whale watching. Visitors can embark on a boat tour to witness magnificent whales, dolphins, and seals in their natural habitat.

In addition to its stunning landscapes and outdoor adventures, New Zealand offers a vibrant cultural scene. The city of Auckland, known as the "City of Sails," is a multicultural hub with a thriving arts and dining scene. Visitors can explore the city\'s museums, art galleries, and enjoy the diverse culinary offerings.

In summary, New Zealand is a country of extraordinary beauty and adventure. Whether yo\'re exploring the adrenaline-pumping activities in Queenstown, immersing yourself in Maori culture in Rotorua, marveling at the stunning landscapes of Milford Sound, or discovering the vibrant city life in Auckland, New Zealand offers a diverse range of experiences that will leave a lasting impression on any traveler.
            ',
                'currency' => 'New Zealand dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones. 3G is available in major towns.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 167,
            ],
            [
                'countryCode' => 'NI',
                'countryName' => 'Nicaragua',
                'regionCode' => 'CENTRAL_AMERICA',
                'capital' => 'Managua',
                'shortDescription' => '
            Nicaragua, the land of lakes and volcanoes, beckons travelers with its stunning natural beauty, including pristine beaches, lush rainforests, and impressive volcanoes to hike. With its rich cultural heritage, colonial architecture, and warm hospitality, Nicaragua offers a unique blend of adventure, relaxation, and cultural immersion, making it an enticing destination for those seeking an authentic Central American experience.
            ',
                'longDescription' => '
            Nicaragua, located in Central America, is a country known for its stunning landscapes, rich cultural heritage, and warm hospitality. It is bordered by Honduras to the north and Costa Rica to the south, with the Caribbean Sea to the east and the Pacific Ocean to the west.

One of the top destinations in Nicaragua is Granada, a charming colonial city on the shores of Lake Nicaragua. Granada boasts beautifully preserved Spanish colonial architecture, colorful buildings, and cobblestone streets. Visitors can explore the historic city center, visit the iconic yellow Cathedral of Granada, and take a boat tour on Lake Nicaragua to discover the nearby islets.

Another popular destination is Leon, another colonial city known for its vibrant cultural scene and architectural splendor. Leon is home to stunning cathedrals, museums, and art galleries. Visitors can climb to the rooftop of the Cathedral of Leon for panoramic views of the city, explore the local markets, and learn about Nicaragua\'s revolutionary history.

For nature lovers, Ometepe Island is a must-visit. Located in Lake Nicaragua, Ometepe Island is formed by two volcanoes and offers breathtaking natural beauty. Visitors can hike the volcanoes, swim in freshwater springs, visit archaeological sites, and immerse themselves in the island\'s laid-back atmosphere.

Nicaragua is also known for its pristine beaches along the Pacific coastline. San Juan del Sur, a coastal town in the southwest, is a popular beach destination known for its surf breaks, beachside bars, and vibrant nightlife. Playa Maderas and Playa Hermosa are among the top surfing spots, attracting surfers from around the world.

In addition to its natural beauty, Nicaragua is rich in cultural heritage. The city of Masaya is famous for its handicraft market, where visitors can find unique souvenirs and traditional Nicaraguan crafts. The Masaya Volcano National Park, located nearby, offers a chance to see an active volcano up close.

Overall, Nicaragua offers a blend of natural wonders, cultural treasures, and warm hospitality. Whether you\'re exploring the colonial cities of Granada and Leon, relaxing on the beautiful beaches of San Juan del Sur, or immersing yourself in the natural beauty of Ometepe Island, Nicaragua has something to offer every traveler seeking adventure, history, and natural splendor.
            ',
                'currency' => 'Nicaraguan cordoba',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '120V, 60Hz',
                'active' => false,
                'sortOrder' => 168,
            ],
            [
                'countryCode' => 'NE',
                'countryName' => 'Niger',
                'regionCode' => 'AFRICA',
                'capital' => 'Niamey',
                'shortDescription' => '
            Niger, a landlocked country in West Africa, offers visitors a chance to explore the Sahara Desert, encounter diverse ethnic cultures, and witness magnificent natural wonders such as the dramatic landscapes of the Ténéré Desert and the breathtaking beauty of the W National Park. With its unique blend of adventure, cultural immersion, and wildlife experiences, Niger provides an off-the-beaten-path destination for travelers seeking a truly authentic African experience.
            ',
                'longDescription' => '
            Niger, officially known as the Republic of Niger, is a landlocked country located in West Africa. It is bordered by seven countries, including Algeria to the northwest, Libya to the northeast, Chad to the east, Nigeria to the south, Benin to the southwest, Burkina Faso to the southwest, and Mali to the west.

Niger is known for its diverse landscapes, including the Sahara Desert in the north and the Sahel region in the south, which encompasses semi-arid grasslands and savannas. The country is also home to the Niger River, which flows through its southwestern region, providing fertile lands and supporting agricultural activities.

One of the top attractions in Niger is the city of Agadez, which serves as a gateway to the Sahara Desert. It is famous for its distinctive mud-brick architecture, particularly the Agadez Mosque, known for its towering minaret. Visitors can explore the narrow winding streets of the old town, visit local markets, and experience the vibrant Tuareg culture.

The capital city, Niamey, is another notable destination. Situated on the banks of the Niger River, Niamey offers a blend of modern amenities and traditional African charm. The city features bustling markets, lively neighborhoods, and a range of cultural and historical sites, including the National Museum of Niger and the Grand Mosque of Niamey.

For nature enthusiasts, the W National Park is a must-visit. This UNESCO World Heritage Site spans across Niger, Burkina Faso, and Benin, and is renowned for its diverse wildlife, including elephants, lions, giraffes, and various bird species. Visitors can embark on safari adventures, enjoy birdwatching, and immerse themselves in the natural beauty of the park.

Niger is also known for its vibrant festivals and cultural traditions. The Cure Salée Festival, held annually in the city of Ingall, celebrates the nomadic lifestyle of the Tuareg and Wodaabe ethnic groups. It showcases traditional music, dance, camel races, and cultural exhibitions, providing a unique insight into Nigerien traditions.

Overall, Niger offers a unique blend of natural wonders, cultural heritage, and warm hospitality. Whether you\'re exploring the ancient city of Agadez, discovering the vibrant capital of Niamey, or embarking on a wildlife adventure in the W National Park, Niger provides a captivating and authentic African experience.
            ',
                'currency' => 'West African CFA franc',
                'language' => 'French',
                'atm' => '',
                'mobilePhone' => ' ',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 169,
            ],
            [
                'countryCode' => 'NG',
                'countryName' => 'Nigeria',
                'regionCode' => 'AFRICA',
                'capital' => 'Abuja',
                'shortDescription' => '
            Nigeria, located in West Africa, is a country of vibrant cities, rich cultural heritage, and diverse natural landscapes. From exploring the bustling markets and historical sites in Lagos to encountering the wildlife in national parks like Yankari and Cross River, Nigeria offers visitors a chance to experience the vibrant Nigerian culture, immerse in its fascinating history, and witness the beauty of its natural attractions.
            ',
                'longDescription' => '
            Nigeria, officially known as the Federal Republic of Nigeria, is a country located in West Africa. It is the most populous country in Africa and is often referred to as the "Giant of Africa" due to its large population and economy. Nigeria is bordered by several countries, including Benin to the west, Niger to the north, Chad to the northeast, Cameroon to the east, and the Gulf of Guinea to the south.

Nigeria is known for its diverse landscapes, cultures, and traditions. It is home to various ethnic groups, each with its own unique customs and languages. The country offers a mix of bustling cities, historical sites, and natural beauty.

Lagos, the largest city in Nigeria, is a vibrant and cosmopolitan metropolis. It is the economic and cultural hub of the country, known for its lively markets, art galleries, music scene, and bustling nightlife. Visitors can explore iconic landmarks such as the National Museum, Lekki Conservation Centre, and the historic district of Badagry.

Abuja, the capital city, showcases modern architecture and serves as the political center of Nigeria. The city is home to the Nigerian National Mosque and the Nigerian National Christian Centre, as well as the impressive Aso Rock, a large monolith that overlooks the city.

For those interested in history and culture, the ancient city of Benin, located in present-day Edo State, offers a glimpse into Nigeria\'s rich past. It is renowned for the Benin Kingdom, which flourished from the 13th to the 19th centuries. Visitors can explore the Royal Palace of the Oba of Benin, admire the intricate bronze sculptures at the Benin National Museum, and learn about the kingdom\'s fascinating history.

Nigeria is also blessed with natural beauty. The country is home to various national parks and reserves, such as Yankari National Park in Bauchi State. Yankari is known for its diverse wildlife, including elephants, lions, baboons, and over 350 bird species. Visitors can enjoy game drives, nature walks, and even relax in natural hot springs within the park.

Nigeria is renowned for its music, literature, and vibrant cultural festivals. The country has produced globally recognized artists, writers, and musicians. From the rhythmic beats of Afrobeat to the vibrant colors of traditional attire during festivals like the Calabar Carnival and Osun Osogbo Festival, Nigeria\'s cultural scene is vibrant and dynamic.

In summary, Nigeria offers a rich tapestry of cultural heritage, diverse landscapes, and vibrant cities. Whether you\'re exploring the bustling streets of Lagos, delving into the history of Benin City, or immersing yourself in the natural wonders of Yankari National Park, Nigeria provides a captivating and memorable experience.
            ',
                'currency' => 'Naira',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => ' ',
                'electricity' => '240V, 50Hz',
                'active' => false,
                'sortOrder' => 170,
            ],
            [
                'countryCode' => 'NU',
                'countryName' => 'Niue',
                'regionCode' => 'OCEANIA',
                'capital' => 'Alofi',
                'shortDescription' => '
            Niue, a small island nation in the South Pacific, is a hidden gem known for its pristine beaches, stunning coral reefs, and untouched natural beauty. With its limited tourism, visitors can enjoy a peaceful and authentic island experience, snorkel in crystal-clear waters, and witness breathtaking sunsets, making it an ideal destination for nature lovers and those seeking a tranquil escape.
            ',
                'longDescription' => '
            Niue is a small island nation located in the South Pacific Ocean. It is situated about 2,400 kilometers northeast of New Zealand. Known as "The Rock of Polynesia," Niue is renowned for its stunning natural landscapes, crystal-clear waters, and warm hospitality.

One of the top attractions in Niue is its breathtaking coastline. The island is surrounded by coral reefs, making it a paradise for snorkelers and divers. Visitors can explore vibrant coral gardens, encounter a diverse range of marine life, and even swim alongside dolphins and whales. The pristine beaches of Niue are also perfect for relaxation and sunbathing.

Another must-visit location in Niue is the Talava Arches. These natural rock formations have been carved by the crashing waves over millions of years, creating impressive arches and blowholes. Witnessing the power of the ocean as it surges through the arches is a thrilling and awe-inspiring experience.

For nature enthusiasts, exploring the lush rainforests and limestone caves of Niue is a must. The Huvalu Forest Conservation Area is home to unique flora and fauna, including native birds such as the endangered Niuean starling. The Matapa Chasm, a stunning swimming spot surrounded by towering cliffs, is also worth a visit.

Niue is deeply rooted in Polynesian culture, and visitors can immerse themselves in the local way of life. The island hosts traditional events and festivals that showcase dance, music, and crafts. Learning about the history and traditions of Niue through cultural tours and interacting with the friendly locals is a rewarding experience.

In terms of accommodation, Niue offers a range of options, from small guesthouses to self-contained cottages. The island has a relaxed and laid-back atmosphere, providing a peaceful retreat away from the hustle and bustle of city life.

In summary, Niue is a hidden gem in the South Pacific that offers a unique blend of natural beauty, rich culture, and warm hospitality. Whether you\'re exploring the underwater wonders, marveling at the natural rock formations, or connecting with the local community, Niue promises an unforgettable adventure in a truly idyllic setting.
            ',
                'currency' => 'New Zealand dollar',
                'language' => 'Niuean, English',
                'atm' => '',
                'mobilePhone' => ' ',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 171,
            ],
            [
                'countryCode' => 'NF',
                'countryName' => 'Norfolk Island',
                'regionCode' => 'OCEANIA',
                'capital' => 'Kingston',
                'shortDescription' => '
            Norfolk Island, a small island located in the South Pacific, offers a unique blend of history, natural beauty, and a relaxed island lifestyle. Visitors can explore its convict heritage, enjoy picturesque landscapes, indulge in delicious local cuisine, and experience warm hospitality, making it an ideal destination for those seeking a peaceful getaway in a charming and idyllic setting.
            ',
                'longDescription' => '
            Norfolk Island is a small island located in the South Pacific Ocean, situated about 1,400 kilometers east of the Australian mainland. Known for its natural beauty, pristine beaches, and intriguing history, Norfolk Island offers a unique and captivating travel experience.

The island is famous for its stunning coastline, featuring picturesque sandy beaches and crystal-clear waters. Visitors can relax on the golden sands, swim in the azure sea, or try their hand at various water activities like snorkeling, diving, and fishing. Emily Bay, one of Norfolk Island\'s most popular beaches, is known for its calm waters and vibrant marine life, making it a perfect spot for snorkeling enthusiasts.

The island is also home to lush national parks and reserves, such as the Norfolk Island National Park. Here, visitors can explore scenic walking trails that lead to breathtaking lookouts, dense forests, and unique flora and fauna. The park is especially renowned for its majestic Norfolk Island pines, which are symbolic of the island\'s beauty.

Norfolk Island has a rich history and is a great destination for history buffs. The island was once a penal colony and has preserved many of its historical buildings and sites. Kingston, the island\'s main settlement, is a UNESCO World Heritage site and boasts numerous convict-built structures. Visitors can take guided tours to learn about the island\'s fascinating past and explore landmarks such as the Kingston and Arthur\'s Vale Historic Area.

In addition to its natural and historical attractions, Norfolk Island offers a range of cultural experiences. The island has a vibrant arts and crafts scene, with local artisans producing unique pottery, paintings, and jewelry. Visitors can browse the galleries and studios, meet the artists, and even participate in workshops to create their own artworks.

Norfolk Island also hosts various festivals and events throughout the year, celebrating its heritage and culture. The Bounty Day Festival in June commemorates the arrival of the Pitcairn Islanders to Norfolk Island, while the Food Festival in November showcases the island\'s culinary delights and fresh local produce.

When it comes to accommodation, Norfolk Island offers a variety of options, including hotels, self-contained apartments, and cottages. The island has a relaxed and friendly atmosphere, with welcoming locals who are always ready to share their stories and traditions.

In summary, Norfolk Island is a hidden gem that offers a blend of natural beauty, intriguing history, and warm hospitality. Whether you\'re exploring the stunning coastline, delving into the island\'s convict past, or immersing yourself in its vibrant culture, Norfolk Island promises a unique and memorable experience for all travelers.
            ',
                'currency' => 'Australian dollar',
                'language' => 'English',
                'atm' => '',
                'mobilePhone' => ' ',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 172,
            ],
            [
                'countryCode' => 'KP',
                'countryName' => 'North Korea',
                'regionCode' => 'ASIA',
                'capital' => 'Pyongyang',
                'shortDescription' => '
            North Korea, officially known as the Democratic People\'s Republic of Korea (DPRK), is a destination that offers a rare glimpse into a closed and secretive society. While visiting requires strict regulations and guided tours, it can provide a unique cultural experience and an opportunity to witness firsthand the country\'s political system, historic sites, and traditional culture. However, it\'s important to note that travel to North Korea comes with significant restrictions and considerations, and it is essential to thoroughly research and understand the associated risks and requirements before planning a trip.
            ',
                'longDescription' => '
            North Korea, officially known as the Democratic People\'s Republic of Korea (DPRK), is a country located on the Korean Peninsula in East Asia. It is bordered by China to the north, Russia to the northeast, and South Korea to the south. North Korea is known for its unique political and social system, as well as its historical and cultural heritage.

With respect to travel, North Korea has strict regulations and limited access for foreign tourists. Most visitors are required to join guided tours organized by approved travel agencies and are accompanied by government-appointed guides throughout their stay. The capital city, Pyongyang, is the main entry point for tourists and offers a glimpse into the country\'s grand architecture, monumental squares, and meticulously planned cityscape. Key attractions in Pyongyang include the iconic Juche Tower, the Kumsusan Palace of the Sun, which is the mausoleum of the country\'s leaders, and the impressive Mansudae Grand Monument.

Beyond Pyongyang, North Korea has several other notable destinations. The city of Kaesong, near the border with South Korea, is renowned for its well-preserved historical sites, including the Kaesong Koryo Museum and the UNESCO-listed Complex of Koguryo Tombs. The mountainous region of Mount Myohyang offers scenic beauty, with the International Friendship Exhibition displaying a vast collection of gifts given to the country\'s leaders.

North Korea\'s cultural heritage can be explored through traditional performances, such as the Mass Games, which showcase synchronized gymnastics and artistic displays. Visitors can also experience local cuisine, which often includes staple dishes like kimchi (fermented vegetables) and bibimbap (a rice dish with mixed ingredients).

It is important to note that North Korea has strict rules and regulations, and travel is tightly controlled. Visitors are expected to adhere to local customs and follow the instructions of their guides at all times. Access to certain areas may be restricted, and independent travel is generally not permitted.

While North Korea presents a unique opportunity to learn about a closed-off country and its culture, it is crucial to consider the political situation and safety concerns before planning a visit. It is recommended to stay updated on travel advisories and seek guidance from relevant authorities or professional travel agencies.
            ',
                'currency' => 'North Korean won',
                'language' => 'Korean',
                'atm' => '',
                'mobilePhone' => ' ',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 173,
            ],
            [
                'countryCode' => 'MP',
                'countryName' => 'Northern Mariana Islands',
                'regionCode' => 'OCEANIA',
                'capital' => 'Saipan',
                'shortDescription' => '
            The Northern Mariana Islands is a tropical paradise in the western Pacific Ocean, offering stunning beaches, crystal-clear waters, and a relaxed island atmosphere. Visitors can enjoy activities like snorkeling, diving, and exploring the unique Chamorro culture, making it an ideal destination for relaxation and outdoor adventures.
            ',
                'longDescription' => '
            The Northern Mariana Islands is a U.S. commonwealth located in the western Pacific Ocean. It is composed of 14 islands, including the main islands of Saipan, Tinian, and Rota. The Northern Mariana Islands are known for their stunning natural beauty, rich history, and diverse cultural heritage.

Saipan is the largest and most populous island in the Northern Mariana Islands and serves as the capital. It offers a blend of pristine beaches, turquoise waters, and lush tropical landscapes. Visitors can explore historical World War II sites, such as the American Memorial Park and the Japanese Peace Memorial, which pay tribute to the islands\' significant role in the Pacific War. Saipan also offers excellent opportunities for diving and snorkeling, with its vibrant coral reefs and marine life.

Tinian is another popular destination known for its historical significance. It was a strategic base during World War II and is famous as the launching point for the atomic bombings of Hiroshima and Nagasaki. The island is home to historical sites like the Tinian Hot Pepper Festival and the House of Taga, an ancient Chamorro stone monument. Visitors can also enjoy beautiful beaches and engage in water activities like fishing and kayaking.

Rota is a more laid-back and secluded island known for its unspoiled natural beauty. It offers scenic hikes, stunning viewpoints, and secluded beaches. The island is dotted with limestone caves, including the impressive Taga Latte Stone Quarry, which features ancient stone pillars used by the Chamorro people. Rota is also a popular spot for diving and snorkeling, with its crystal-clear waters and abundant marine life.

Visiting the Northern Mariana Islands provides a unique opportunity to experience the blend of Chamorro, Carolinian, and other Pacific Islander cultures. The islands host various festivals throughout the year, celebrating traditional music, dance, and cuisine. The indigenous Chamorro and Carolinian people warmly welcome visitors to explore their cultural heritage and participate in traditional activities.

In addition to its natural and cultural attractions, the Northern Mariana Islands offer a range of accommodations, from luxury resorts to budget-friendly options. Local restaurants serve a variety of cuisines, including fresh seafood, Chamorro dishes, and international fare.

Travelers to the Northern Mariana Islands should be aware of the local customs and respect the natural environment. It is also important to check visa requirements and travel advisories before planning a visit. The islands have a tropical climate, so packing lightweight clothing, sunscreen, and insect repellent is recommended.
            ',
                'currency' => 'US dollar',
                'language' => 'English, Chamorro',
                'atm' => '',
                'mobilePhone' => ' ',
                'electricity' => '120V, 60Hz',
                'active' => false,
                'sortOrder' => 174,
            ],
            [
                'countryCode' => 'NO',
                'countryName' => 'Norway',
                'regionCode' => 'EUROPE',
                'capital' => 'Oslo',
                'shortDescription' => '
            Norway is a breathtaking country known for its stunning fjords, majestic mountains, and vibrant cities like Oslo and Bergen. With its rich Viking heritage, dramatic landscapes, and opportunities for outdoor activities such as hiking, skiing, and Northern Lights viewing, Norway offers visitors a unique blend of natural beauty and cultural experiences.
            ',
                'longDescription' => '
            Norway, located in Northern Europe, is a country renowned for its breathtaking natural landscapes, vibrant cities, and rich cultural heritage. Known for its stunning fjords, majestic mountains, and picturesque coastal scenery, Norway offers a wide range of outdoor activities and experiences.

One of the top attractions in Norway is the famous Geirangerfjord, a UNESCO World Heritage site. Its deep blue waters, towering cliffs, and cascading waterfalls create a truly awe-inspiring sight. Visitors can explore the fjord by taking a boat tour or hiking along the surrounding trails for panoramic views.

Another must-visit location is the capital city of Oslo. This cosmopolitan city combines modern architecture with historic charm. Highlights include the iconic Oslo Opera House, the Vigeland Sculpture Park showcasing the works of Gustav Vigeland, and the Viking Ship Museum, which houses well-preserved Viking ships from the 9th century.

For nature lovers, a trip to the Norwegian Arctic is highly recommended. Tromsø, known as the gateway to the Arctic, offers a chance to witness the magical Northern Lights during winter. In summer, visitors can experience the Midnight Sun, where the sun remains visible throughout the night. The region also offers opportunities for wildlife encounters, such as whale watching and exploring the stunning Lofoten Islands.

One of the unique attractions in Norway is the Flåm Railway, considered one of the world\'s most scenic train journeys. This picturesque train ride takes you through breathtaking mountain scenery, cascading waterfalls, and lush valleys. It is a fantastic way to experience the beauty of Norwegian landscapes.

Norway is also renowned for its outdoor activities, including hiking, skiing, and fishing. The country boasts numerous national parks, such as Jotunheimen and Hardangervidda, offering extensive hiking trails and stunning views. During the winter months, Norway\'s ski resorts, such as Trysil and Hemsedal, attract visitors from around the world with their excellent slopes and winter sports facilities.

In addition to its natural wonders, Norway embraces a rich cultural heritage. The country is famous for its traditional stave churches, like the Urnes Stave Church, which is listed as a UNESCO World Heritage site. Norwegian cuisine is known for its focus on fresh seafood, wild game, and local ingredients. Visitors can indulge in traditional dishes like gravlaks (cured salmon) and fårikål (mutton stew).

Overall, Norway offers a unique combination of natural beauty, outdoor adventures, cultural experiences, and warm hospitality. Whether you\'re exploring its fjords, immersing yourself in city life, or seeking outdoor thrills, Norway is a destination that never fails to captivate visitors with its stunning landscapes and Scandinavian charm.
            ',
                'currency' => 'Norwegian krone',
                'language' => 'Norwegian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 175,
            ],
            [
                'countryCode' => 'OM',
                'countryName' => 'Oman',
                'regionCode' => 'ASIA',
                'capital' => 'Muscat',
                'shortDescription' => '
            Oman is a country of enchanting landscapes, from the vast desert dunes to the rugged mountains and pristine coastline. With its rich history, traditional architecture, and warm hospitality, Oman offers visitors a chance to immerse themselves in Arabian culture and indulge in outdoor adventures like desert safaris, diving, and exploring ancient forts and souks.
            ',
                'longDescription' => '
            Oman, located on the southeastern coast of the Arabian Peninsula, is a country known for its rich history, diverse landscapes, and warm hospitality. With its stunning deserts, rugged mountains, pristine coastline, and vibrant cities, Oman offers a captivating blend of natural beauty and cultural experiences.

One of the top attractions in Oman is the city of Muscat, the capital and cultural hub of the country. Muscat is famous for its elegant mosques, such as the Sultan Qaboos Grand Mosque, and its beautifully preserved historic quarter, Muttrah. The city\'s bustling souks, where visitors can shop for traditional crafts, spices, and textiles, are also worth exploring.

Nature enthusiasts will be mesmerized by Oman\'s breathtaking landscapes. The Wahiba Sands desert is a must-visit, with its towering sand dunes and the opportunity to experience a thrilling desert safari or spend a night under the stars in a Bedouin-style camp. The Hajar Mountains, including the Jebel Shams, offer stunning vistas, hiking trails, and the chance to visit traditional mountain villages.

Oman\'s coastline is renowned for its pristine beaches and crystal-clear waters. The coastal town of Sur is famous for its traditional dhow shipyards, where visitors can witness the art of traditional boat-building. The Musandam Peninsula, known as the "Norway of Arabia," is a haven for nature lovers, offering spectacular fjords, marine life, and opportunities for snorkeling and diving.

For history buffs, Oman has a wealth of archaeological sites and ancient forts. The UNESCO World Heritage site of Bahla Fort, the ancient city of Nizwa with its historic fort and bustling souk, and the well-preserved ruins of the ancient port city of Samharam are among the notable cultural landmarks.

Oman also offers unique cultural experiences, including traditional music and dance performances, camel racing, and the opportunity to try delicious Omani cuisine. Visitors can savor dishes like shuwa (slow-cooked lamb) and majboos (spiced rice with meat or fish) and enjoy Omani coffee and dates, which are symbols of Omani hospitality.

Moreover, Omani people are known for their warm and friendly nature, making visitors feel welcomed and appreciated. The country is also safe and well-developed, with modern infrastructure and a range of accommodation options to suit different budgets and preferences.

In summary, Oman is a destination that combines natural beauty, cultural heritage, and warm hospitality. From its stunning deserts and mountains to its captivating coastline and vibrant cities, Oman offers a diverse range of experiences for travelers seeking an authentic Arabian adventure.
            ',
                'currency' => 'Omani rial',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '240V, 50Hz',
                'active' => false,
                'sortOrder' => 176,
            ],
            [
                'countryCode' => 'PK',
                'countryName' => 'Pakistan',
                'regionCode' => 'ASIA',
                'capital' => 'Islamabad',
                'shortDescription' => '
            Pakistan is a country of incredible natural beauty, with stunning mountain ranges, lush valleys, and ancient archaeological sites. Visitors can experience the warm hospitality of the locals, explore historic landmarks like the Lahore Fort and Badshahi Mosque, and embark on thrilling adventures in the Himalayas or explore the vibrant markets of Karachi, making it a fascinating destination for culture, history, and outdoor enthusiasts.
            ',
                'longDescription' => '
            Pakistan, located in South Asia, is a country known for its rich history, diverse culture, stunning landscapes, and warm hospitality. From ancient archaeological sites to majestic mountain ranges, bustling cities to serene valleys, Pakistan offers a wealth of experiences for travelers.

One of the highlights of Pakistan is its incredible mountain scenery. The northern region is home to some of the world\'s highest peaks, including K2, the second tallest mountain on Earth. The Karakoram Highway, known as the eighth wonder of the world, offers breathtaking views as it winds through the mountainous terrain. The Hunza Valley, Swat Valley, and Naran-Kaghan Valley are popular destinations for their picturesque landscapes, crystal-clear lakes, and charming villages.

For history enthusiasts, Pakistan boasts a rich cultural heritage. The ancient city of Taxila, a UNESCO World Heritage site, showcases the remnants of a significant Gandhara civilization. The archaeological ruins of Mohenjo-daro and Harappa offer insights into the ancient Indus Valley Civilization, dating back over 5,000 years. Lahore, the cultural capital, is renowned for its historic architecture, including the stunning Badshahi Mosque and Lahore Fort.

Islamabad, the capital city, combines modern infrastructure with natural beauty. The city is surrounded by the Margalla Hills, providing ample opportunities for hiking and outdoor activities. The Faisal Mosque, one of the largest mosques in the world, is a prominent landmark.

Pakistan is also known for its vibrant cities. Karachi, the largest city and economic hub, offers a bustling mix of modernity and traditional charm. The coastal city of Karachi is famous for its lively beaches, bustling markets, and mouthwatering street food. Lahore, besides its historical sites, is known for its vibrant festivals, colorful bazaars, and delectable cuisine.

The country is home to diverse cultures and ethnicities, each contributing to its vibrant tapestry. Pakistani hospitality is renowned, and visitors are welcomed with open arms and treated with warmth and kindness. The local cuisine is a highlight, with flavorful dishes like biryani, kebabs, and various regional specialties. Exploring the local markets, trying street food, and enjoying a cup of tea from a roadside stall are experiences not to be missed.

While traveling in Pakistan, it\'s essential to respect local customs and traditions, dress modestly, and follow local guidelines for a safe and enjoyable experience. Pakistan offers a unique blend of history, culture, and natural beauty, providing travelers with a memorable and enriching journey.
            ',
                'currency' => 'Pakistani rupee',
                'language' => 'Urdu, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Prepaid SIM cards are available for mobile phones.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 177,
            ],
            [
                'countryCode' => 'PW',
                'countryName' => 'Palau',
                'regionCode' => 'OCEANIA',
                'capital' => 'Melekeok',
                'shortDescription' => '
            Palau is a tropical paradise in the Western Pacific, renowned for its crystal-clear turquoise waters, diverse marine life, and pristine coral reefs. With its stunning natural landscapes, world-class diving and snorkeling opportunities, and rich cultural heritage, Palau offers visitors a unique and unforgettable experience in a tranquil and idyllic setting.
            ',
                'longDescription' => '
            Palau, officially known as the Republic of Palau, is a tropical paradise located in the western Pacific Ocean. With its pristine white sandy beaches, crystal-clear turquoise waters, and vibrant marine life, Palau is a dream destination for beach lovers and diving enthusiasts.

One of the main attractions in Palau is its world-renowned diving and snorkeling sites. The islands are surrounded by a diverse marine ecosystem, including coral reefs, underwater caves, and a variety of marine species. The famous Blue Corner, German Channel, and Jellyfish Lake are just a few of the incredible dive spots that attract underwater enthusiasts from around the world.

In addition to its underwater wonders, Palau offers breathtaking landscapes and natural attractions. The Rock Islands, a UNESCO World Heritage site, consist of over 300 limestone islands scattered across the turquoise waters. Exploring the Rock Islands by kayak or boat is a must-do activity, allowing visitors to discover hidden lagoons, secluded beaches, and stunning rock formations.

Palau is also known for its rich cultural heritage. The Palauan people have a deep connection to their traditions and customs, which can be experienced through village visits, traditional ceremonies, and interactions with the locals. The capital city of Koror is the main hub for tourism, offering a range of accommodations, restaurants, and souvenir shops.

Nature enthusiasts will find plenty to explore in Palau. The Palau National Marine Sanctuary, one of the world\'s largest marine protected areas, is dedicated to preserving the marine biodiversity of the region. Kayangel Atoll, known for its bird population and lush vegetation, is another natural gem worth visiting.

Visitors to Palau can indulge in various water activities such as kayaking, fishing, paddleboarding, and boat tours. Land-based activities include hiking, bird-watching, and exploring the rich flora and fauna of the islands.

Palau is a destination that combines natural beauty, adventure, and cultural experiences. The warm hospitality of the Palauan people, coupled with the stunning landscapes and underwater wonders, make it an unforgettable destination for travelers seeking a tropical getaway and a deeper connection with nature.
            ',
                'currency' => 'US dollar',
                'language' => 'Palauan, English',
                'atm' => '',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '120V, 60Hz',
                'active' => false,
                'sortOrder' => 178,
            ],
            [
                'countryCode' => 'PS',
                'countryName' => 'Palestinian Territory',
                'regionCode' => 'ASIA',
                'capital' => 'East Jerusalem',
                'shortDescription' => '

            ',
                'longDescription' => '
            The Palestinian Territory refers to the region located in the Middle East, comprising the West Bank and the Gaza Strip. It holds significant historical and cultural importance and is known for its rich heritage, ancient sites, and vibrant cities.

The West Bank is home to several notable cities, including Bethlehem, Hebron, and Ramallah. Bethlehem is renowned for being the birthplace of Jesus Christ and attracts pilgrims from around the world to visit the Church of the Nativity. Hebron is known for its religious significance, with the Cave of the Patriarchs being a significant site for both Muslims and Jews. Ramallah, the de facto administrative capital of the Palestinian Authority, offers a vibrant urban atmosphere with a bustling city center, museums, and cultural events.

The Gaza Strip, located on the eastern coast of the Mediterranean Sea, is known for its beautiful beaches. Despite the challenges faced by the region, visitors can still experience the warm hospitality of the local population and explore the historical sites such as the ancient city of Gaza and its archaeological treasures.

The Palestinian Territory is also recognized for its rich cultural heritage. Traditional Palestinian music, dance, and cuisine offer visitors a glimpse into the local traditions and way of life. Local markets, known as souks, provide a vibrant atmosphere for shopping and experiencing the local craftsmanship.

The region\'s historical and archaeological sites attract history enthusiasts. Jericho, one of the oldest inhabited cities in the world, is home to ancient ruins and biblical sites. The UNESCO World Heritage Site of Masada, located near the Dead Sea, offers a fascinating glimpse into the ancient fortress and its historical significance.

Visiting the Palestinian Territory allows travelers to engage with the local culture, witness the ongoing struggles and resilience of the Palestinian people, and gain a deeper understanding of the complex political situation. It is an opportunity to support the local economy and contribute to the preservation of the cultural heritage of this unique region.
            ',
                'currency' => 'IsraelPalestinian Territoryi new shekel',
                'language' => 'Arabic',
                'atm' => '',
                'mobilePhone' => '',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 179,
            ],
            [
                'countryCode' => 'PA',
                'countryName' => 'Panama',
                'regionCode' => 'CENTRAL_AMERICA',
                'capital' => 'Panama City',
                'shortDescription' => '
            The Palestinian Territories encompass the West Bank, including historic cities like Bethlehem and Hebron, as well as the Gaza Strip. Visitors to the Palestinian Territories can explore ancient archaeological sites, experience the vibrant culture and hospitality of the Palestinian people, and gain a deeper understanding of the complex political situation in the region.
            ',
                'longDescription' => '
            Panama is a country located in Central America, bordered by Costa Rica to the west and Colombia to the east. It is famous for the Panama Canal, a man-made waterway that connects the Atlantic and Pacific Oceans, facilitating global maritime trade. The canal is an engineering marvel and a must-see attraction for visitors to Panama.

Panama City, the capital and largest city of Panama, offers a vibrant mix of modern skyscrapers and historic neighborhoods. The Casco Viejo, or Old Town, is a UNESCO World Heritage Site and features well-preserved colonial buildings, charming plazas, and a lively atmosphere. The city is also known for its bustling waterfront, shopping districts, and a vibrant nightlife scene.

The San Blas Islands, located in the Caribbean Sea off the coast of Panama, are a paradise for beach lovers and nature enthusiasts. This archipelago comprises over 360 islands, many of which are inhabited by the indigenous Guna people. Visitors can enjoy pristine beaches, crystal-clear waters, and vibrant coral reefs, making it a popular destination for snorkeling, diving, and sailing.

Bocas del Toro is another top destination in Panama, known for its stunning natural beauty and laid-back atmosphere. This province consists of a mainland and a chain of islands, offering opportunities for beach relaxation, water sports, and exploring lush rainforests. Bocas Town, the main hub of the region, is a colorful Caribbean-style town with waterfront restaurants, bars, and a lively beach scene.

Panama\'s diverse ecosystem and abundant wildlife make it a haven for nature lovers. The Soberania National Park, located near Panama City, is a tropical rainforest teeming with wildlife, including monkeys, sloths, and colorful bird species. The Gamboa Rainforest Reserve, accessible from Panama City, offers hiking trails, wildlife tours, and boat rides through the Panama Canal\'s Gatun Lake.

Visitors to Panama can also explore the indigenous cultures and traditions of the Embera and Guna people, who inhabit different regions of the country. These communities welcome visitors to learn about their way of life, traditional crafts, and customs.

In summary, Panama offers a unique blend of natural beauty, cultural diversity, and historical significance. From the engineering marvel of the Panama Canal to the pristine islands and vibrant cities, there is something for everyone to enjoy in this Central American gem.
            ',
                'currency' => 'Panamanian balboa',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 1900 networks.',
                'electricity' => '110V, 60Hz',
                'active' => false,
                'sortOrder' => 180,
            ],
            [
                'countryCode' => 'PG',
                'countryName' => 'Papua New Guinea',
                'regionCode' => 'OCEANIA',
                'capital' => 'Port Moresby',
                'shortDescription' => '
            Papua New Guinea is a country of incredible natural beauty, boasting pristine rainforests, stunning beaches, and diverse wildlife. Visitors can immerse themselves in the rich cultural heritage of the country, explore remote tribal villages, and embark on unique adventures such as hiking the Kokoda Trail or diving in the world-renowned waters of Milne Bay.
            ',
                'longDescription' => '
            Papua New Guinea is a country located in the southwestern Pacific Ocean, occupying the eastern half of the island of New Guinea and numerous smaller islands. It is known for its remarkable cultural diversity, stunning natural landscapes, and rich biodiversity.

The country is home to more than 800 distinct ethnic groups, each with its own unique traditions, languages, and customs. Exploring the cultural heritage of Papua New Guinea is a fascinating experience, with opportunities to witness traditional ceremonies, vibrant festivals, and intricate artwork, including woodcarvings and traditional masks.

One of the top attractions in Papua New Guinea is its natural beauty. The country boasts lush rainforests, rugged mountains, pristine beaches, and diverse marine ecosystems. The Kokoda Track, a renowned trekking route, takes visitors through the rugged highlands and dense rainforests, offering an immersive journey into the country\'s history and natural wonders.

The remote Sepik River region is known for its tribal villages and intricate woodcarvings. It provides a unique opportunity to explore traditional village life and witness age-old customs and rituals. The region\'s art and artifacts are highly regarded for their cultural significance and craftsmanship.

For diving enthusiasts, the waters surrounding Papua New Guinea offer some of the best diving sites in the world. The coral reefs, underwater caves, and diverse marine life make it a paradise for underwater exploration. Destinations such as Milne Bay, Kimbe Bay, and Tufi are particularly popular among divers.

Nature lovers will also enjoy exploring the country\'s national parks and wildlife sanctuaries. The country is home to an incredible array of flora and fauna, including unique bird species such as the colorful birds of paradise. The Baining Mountains, Tari Basin, and the remote Highlands are great places to immerse yourself in Papua New Guinea\'s natural wonders.

Papua New Guinea\'s cultural and natural diversity, coupled with warm and welcoming locals, make it an exceptional destination for adventurous travelers seeking authentic experiences. Whether you\'re interested in cultural immersion, trekking through breathtaking landscapes, or diving into pristine waters, Papua New Guinea offers a truly memorable and off-the-beaten-path travel experience.
            ',
                'currency' => 'Papua New Guinean kina',
                'language' => 'Tok Pisin, English, Hiri Motu',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '240V, 50Hz',
                'active' => false,
                'sortOrder' => 181,
            ],
            [
                'countryCode' => 'PY',
                'countryName' => 'Paraguay',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Asuncion',
                'shortDescription' => '
            Paraguay is a landlocked country in South America known for its unique blend of indigenous and colonial cultures. Visitors can explore the historic city of Asunción, discover the Jesuit ruins of Trinidad and Jesús, and experience the stunning natural beauty of the Gran Chaco region, making it a captivating destination for those seeking cultural immersion and off-the-beaten-path exploration.
            ',
                'longDescription' => '
            Paraguay is a landlocked country located in the heart of South America. It is known for its rich indigenous culture, historic sites, vibrant festivals, and diverse natural landscapes.

The capital city of Paraguay is Asunción, which is a mix of modern architecture and colonial buildings. Exploring the historic center, visitors can admire landmarks such as the Palacio de los López, the seat of the government, and the Panteón Nacional de los Héroes, a mausoleum honoring national heroes.

One of the top destinations in Paraguay is the Jesuit Missions of La Santísima Trinidad de Paraná and Jesús de Tavarangue, both UNESCO World Heritage Sites. These well-preserved ruins showcase the architectural and cultural legacy of the Jesuit missionaries who settled in the region during the 17th and 18th centuries.

Paraguay is also famous for its lively festivals and celebrations. The Carnival of Encarnación, held in February, is one of the biggest and most colorful festivals in the country, featuring parades, music, dance, and elaborate costumes. The Ñanduti Festival in Itauguá celebrates traditional lace-making, a renowned craft in Paraguay.

Nature lovers will find plenty to explore in Paraguay. The Pantanal, a vast wetland shared with Brazil and Bolivia, is a haven for wildlife enthusiasts, with diverse ecosystems and abundant wildlife, including jaguars, capybaras, and caimans. The Ybycuí National Park and the Cerro Corá National Park offer opportunities for hiking, birdwatching, and enjoying the country\'s natural beauty.

Paraguay is also known for its traditional mate tea culture. Visitors can experience the local customs by participating in a mate ceremony, where the bitter herbal drink is shared among friends and family.

Paraguay\'s warm and friendly people, combined with its cultural heritage and natural attractions, make it an intriguing destination for travelers seeking an authentic South American experience. Whether you\'re interested in history, cultural traditions, or exploring the country\'s diverse landscapes, Paraguay has much to offer.
            ',
                'currency' => 'Paraguayan guarani',
                'language' => 'Spanish, Guarani',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 1900 networks.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 182,
            ],
            [
                'countryCode' => 'PE',
                'countryName' => 'Peru',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Lima',
                'shortDescription' => '
            Peru is a country of ancient wonders, from the iconic Machu Picchu to the enigmatic Nazca Lines and the vibrant city of Cusco. With its diverse landscapes encompassing the Andes Mountains, the Amazon rainforest, and the stunning coastline, Peru offers a rich cultural heritage, breathtaking natural beauty, and unparalleled opportunities for adventure and exploration.
            ',
                'longDescription' => '
            Peru is a captivating country located in western South America, known for its rich history, ancient ruins, diverse landscapes, and vibrant culture. It offers a wide range of attractions that cater to different interests, making it a popular destination for travelers.

One of the most iconic sites in Peru is Machu Picchu, an ancient Inca citadel perched high in the Andes Mountains. This UNESCO World Heritage site attracts visitors from around the world who come to marvel at its impressive architecture, breathtaking mountain views, and mysterious history. The trek to Machu Picchu along the Inca Trail is a popular adventure for those seeking a challenging and rewarding experience.

Another must-visit location in Peru is Cusco, the former capital of the Inca Empire. This charming city is a blend of Inca and Spanish colonial influences, with cobblestone streets, ancient temples, and colonial architecture. Cusco serves as a gateway to many other attractions in the region, including the Sacred Valley, Pisac Ruins, and the colorful Rainbow Mountain.

The Amazon Rainforest covers a significant portion of Peru, offering incredible biodiversity and unique wildlife encounters. The city of Iquitos serves as the main gateway to the Peruvian Amazon, where visitors can embark on immersive jungle tours, explore wildlife-rich reserves, and interact with indigenous communities.

The coastal region of Peru is home to the capital city, Lima, known for its vibrant culinary scene and colonial architecture. Travelers can indulge in delicious Peruvian cuisine, which is internationally acclaimed for its fusion of flavors and diverse ingredients.

For nature enthusiasts, the Colca Canyon in southern Peru is a must-see. This stunning natural wonder is one of the world\'s deepest canyons, offering breathtaking views, trekking opportunities, and the chance to spot Andean condors soaring above the canyon walls.

Peru\'s cultural heritage is also showcased in its numerous festivals and traditions. The Inti Raymi festival in Cusco, celebrating the Inca sun god, is a vibrant spectacle of music, dance, and colorful costumes. The Qoyllur Rit\'i pilgrimage, held in the Ausangate mountain region, is a fascinating display of indigenous traditions and religious ceremonies.

In summary, Peru is a country of remarkable diversity, offering a blend of ancient history, natural beauty, and vibrant culture. From exploring ancient ruins to trekking through breathtaking landscapes, indulging in culinary delights to immersing oneself in traditional festivals, Peru promises a truly unforgettable travel experience.
            ',
                'currency' => 'Peruvian nuevo sol',
                'language' => 'Spanish, Quechua, Aymara',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 1900 networks.',
                'electricity' => '220V, 60Hz',
                'active' => false,
                'sortOrder' => 183,
            ],
            [
                'countryCode' => 'PH',
                'countryName' => 'Philippines',
                'regionCode' => 'ASIA',
                'capital' => 'Manila',
                'shortDescription' => '
            The Philippines is a tropical paradise with over 7,000 islands, offering pristine beaches, crystal-clear waters, and vibrant marine life for snorkeling and diving enthusiasts. With its warm hospitality, rich cultural heritage, and stunning natural landscapes such as the Banaue Rice Terraces and Chocolate Hills, the Philippines offers a diverse array of experiences and attractions for every traveler.
            ',
                'longDescription' => '
            The Philippines is an archipelagic country located in Southeast Asia, known for its stunning beaches, rich biodiversity, vibrant culture, and warm hospitality. With over 7,000 islands, it offers a diverse range of attractions and experiences that cater to every traveler\'s interests.

One of the top destinations in the Philippines is Boracay, a world-famous island known for its pristine white sand beaches and crystal-clear turquoise waters. It offers a vibrant nightlife scene, water sports activities, and luxurious resorts, making it a popular choice for beach lovers and adventure seekers.

The capital city, Manila, is a bustling metropolis that blends modern skyscrapers with Spanish colonial architecture. It is home to historical sites like Intramuros, a walled city that dates back to the Spanish colonial era, as well as vibrant markets, shopping malls, and a vibrant food scene.

Palawan, often referred to as the "Last Frontier," is a province renowned for its breathtaking landscapes. It is home to the stunning Puerto Princesa Underground River, a UNESCO World Heritage Site, as well as the idyllic islands of El Nido and Coron, known for their limestone cliffs, hidden lagoons, and vibrant coral reefs.

Cebu is another popular destination, offering a mix of urban amenities and natural wonders. The city of Cebu is a bustling hub with historical landmarks, while nearby destinations like Moalboal and Malapascua Island offer world-class diving sites, including the chance to swim with thresher sharks.

For adventure enthusiasts, the Philippines offers opportunities for hiking, trekking, and exploring volcanoes. Mount Mayon in Albay and Mount Pulag in Benguet are popular choices for hikers, providing stunning views and challenging trails.

The Philippines is also known for its festivals, with each region celebrating its unique cultural heritage. The Sinulog Festival in Cebu and the Ati-Atihan Festival in Kalibo are vibrant and colorful celebrations that showcase traditional dances, music, and religious processions.

In addition to its natural and cultural attractions, the Philippines is home to a warm and welcoming population known for their hospitality. Filipinos are known for their friendliness, making visitors feel at home and ensuring a memorable travel experience.

In summary, the Philippines is a tropical paradise that offers a diverse range of experiences, from pristine beaches and underwater wonders to historical sites and vibrant festivals. Whether you\'re seeking relaxation, adventure, or cultural immersion, the Philippines has something to offer for every type of traveler.
            ',
                'currency' => 'Philippine peso',
                'language' => 'Filipino, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '220V, 60Hz',
                'active' => false,
                'sortOrder' => 184,
            ],
            [
                'countryCode' => 'PN',
                'countryName' => 'Pitcairn',
                'regionCode' => 'OCEANIA',
                'capital' => 'Adamstown',
                'shortDescription' => '
            Pitcairn, a remote British territory in the Pacific, is home to a small community of friendly locals and offers a unique opportunity to experience a tranquil and secluded island life. Visitors can explore the island\'s rugged beauty, pristine beaches, and learn about the fascinating history of the mutineers from the HMS Bounty who settled here, making it an intriguing destination for those seeking adventure and a peaceful escape.
            ',
                'longDescription' => '
            Pitcairn is a remote group of four volcanic islands located in the South Pacific Ocean. It is the last remaining British Overseas Territory in the Pacific and is known for its isolated and untouched natural beauty. The main island, also called Pitcairn, is the only inhabited island in the group, with a population of around 50 people.

Pitcairn Island is famous for being the final refuge of the mutineers from the HMS Bounty in the late 18th century. Visitors to Pitcairn have the opportunity to learn about the fascinating history of the island and its connection to the famous mutiny. The island is also home to the descendants of the mutineers, and visitors can interact with the friendly and welcoming local community.

The natural beauty of Pitcairn is another major attraction. The island is surrounded by pristine turquoise waters, offering excellent opportunities for snorkeling, diving, and swimming. The coral reefs are teeming with marine life, including colorful fish, turtles, and even dolphins. Hiking is also popular on Pitcairn, with various trails leading to stunning viewpoints and secluded beaches.

Pitcairn is a destination for those seeking tranquility and a break from the modern world. With limited internet and mobile phone access, visitors can truly disconnect and enjoy the untouched beauty of the island. The absence of large-scale tourism means that the environment remains unspoiled and the natural ecosystems are well-preserved.

Visiting Pitcairn requires careful planning, as there are no regular transportation links to the island. The best way to reach Pitcairn is by joining a cruise ship that includes a stopover at the island. Once on Pitcairn, visitors can stay in guesthouses operated by local families, providing an authentic and immersive experience.

In summary, Pitcairn offers a unique and off-the-beaten-path travel experience. It is a place of rich history, stunning natural beauty, and warm hospitality. For those seeking an escape from the modern world and a chance to connect with nature and a small, close-knit community, Pitcairn is a hidden gem worth exploring.
            ',
                'currency' => 'New Zealand dollar',
                'language' => 'English, Pitkern',
                'atm' => '',
                'mobilePhone' => 'Mobile phones work on GSM 900 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 185,
            ],
            [
                'countryCode' => 'PL',
                'countryName' => 'Poland',
                'regionCode' => 'EUROPE',
                'capital' => 'Warsaw',
                'shortDescription' => '
            Poland is a country rich in history, boasting magnificent medieval architecture, charming old towns, and a vibrant cultural scene. From exploring the historic city of Krakow to visiting the stunning Wieliczka Salt Mine and experiencing the natural beauty of the Tatra Mountains, Poland offers a diverse range of attractions and a warm hospitality that makes it a must-visit destination for travelers.
            ',
                'longDescription' => '
            Poland, located in Central Europe, is a country known for its rich history, vibrant culture, and picturesque landscapes. It is bordered by Germany to the west, the Czech Republic and Slovakia to the south, Ukraine and Belarus to the east, and Lithuania and Russia (Kaliningrad Oblast) to the northeast.

With its diverse range of attractions, Poland offers something for every traveler. Warsaw, the capital city, showcases a mix of modern architecture and reconstructed historic buildings, symbolizing the country\'s resilience and determination. Kraków, a UNESCO World Heritage site, is famous for its well-preserved medieval Old Town and the stunning Wawel Castle. The city is also the gateway to the Auschwitz-Birkenau concentration camp, a significant site of remembrance.

Nature enthusiasts will be captivated by Poland\'s stunning landscapes. The Tatra Mountains in the south, part of the Carpathian Mountain range, offer breathtaking hiking trails, ski resorts, and picturesque alpine scenery. The Białowieża Forest, a UNESCO World Heritage site, is one of the last and largest remaining parts of the primeval forest that once covered much of Europe.

Poland is also renowned for its rich cultural heritage. The historic city of Gdańsk on the Baltic Sea is known for its beautifully restored Gothic architecture and maritime history. Wrocław, often called the "Venice of Poland," boasts a charming Old Town with numerous bridges and canals. The city of Poznań is famous for its colorful Old Market Square and lively atmosphere, especially during the traditional St. Martin\'s Croissant Festival.

Visitors to Poland should also explore the country\'s culinary delights. Polish cuisine is hearty and diverse, with dishes like pierogi (dumplings), bigos (hunter\'s stew), and kielbasa (sausage) being popular favorites. The country is also known for its fine vodka production and vibrant craft beer scene.

In summary, Poland offers a mix of historical treasures, stunning natural landscapes, and a vibrant cultural scene. From its beautiful cities to its picturesque countryside, Poland is a destination that will leave travelers with a deep appreciation for its history, culture, and warm hospitality.
            ',
                'currency' => 'Polish zloty',
                'language' => 'Polish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 186,
            ],
            [
                'countryCode' => 'PT',
                'countryName' => 'Portugal',
                'regionCode' => 'EUROPE',
                'capital' => 'Lisbon',
                'shortDescription' => '
            Poland is a country rich in history, boasting magnificent medieval architecture, charming old towns, and a vibrant cultural scene. From exploring the historic city of Krakow to visiting the stunning Wieliczka Salt Mine and experiencing the natural beauty of the Tatra Mountains, Poland offers a diverse range of attractions and a warm hospitality that makes it a must-visit destination for travelers.
            ',
                'longDescription' => '
            Portugal, located on the western coast of the Iberian Peninsula in Southern Europe, is a captivating country known for its rich history, stunning landscapes, and warm hospitality. It is bordered by Spain to the east and the Atlantic Ocean to the west.

Portugal is famous for its enchanting cities and towns. Lisbon, the capital city, offers a perfect blend of old-world charm and modern vibrancy. Its hilly streets, colorful buildings, and historic landmarks such as the Belém Tower and Jerónimos Monastery make it a must-visit destination. Porto, known for its port wine production, boasts a picturesque riverside setting, charming streets, and the iconic Dom Luís I Bridge. The city of Sintra is a UNESCO World Heritage site, with its fairytale-like castles and palaces nestled amidst lush green hills.

The country is blessed with diverse natural beauty. The Algarve region in the south is famous for its stunning coastline, golden beaches, and dramatic cliffs. The Douro Valley is renowned for its terraced vineyards, producing the world-famous Port wine. The Peneda-Gerês National Park offers breathtaking mountain landscapes, pristine lakes, and hiking trails, making it a paradise for nature lovers.

Portugal is also known for its rich maritime heritage. The Age of Discoveries played a significant role in shaping the country\'s history, and this can be explored in cities like Belem, where iconic monuments like the Monument to the Discoveries and the Tower of Belem stand as reminders of Portugal\'s maritime past. The city of Évora, a UNESCO World Heritage site, showcases Roman ruins, medieval architecture, and a well-preserved old town.

The Portuguese cuisine is a delightful experience for food lovers. Fresh seafood, grilled sardines, hearty stews like cozido à portuguesa, and the famous pastel de nata (custard tart) are just a few highlights of the country\'s gastronomy. Pairing these culinary delights with a glass of local wine or a shot of traditional port wine creates a truly memorable dining experience.

In summary, Portugal offers a captivating mix of history, natural beauty, and gastronomic delights. From its charming cities to its breathtaking landscapes, visitors to Portugal will find themselves immersed in a warm and welcoming culture, surrounded by a treasure trove of experiences
            ',
                'currency' => 'Euro',
                'language' => 'Portuguese',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 187,
            ],
            [
                'countryCode' => 'PR',
                'countryName' => 'Puerto Rico',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'San Juan',
                'shortDescription' => '
            Puerto Rico is a Caribbean island known for its stunning beaches, vibrant culture, and historic sites such as Old San Juan. Visitors can enjoy a mix of tropical beauty, rich history, delicious cuisine, and exciting outdoor activities, making it an ideal destination for beach lovers, history enthusiasts, and adventure seekers alike.
            ',
                'longDescription' => '
            Puerto Rico, officially known as the Commonwealth of Puerto Rico, is a tropical paradise located in the northeastern Caribbean Sea. As a territory of the United States, it combines the best of both worlds - the vibrant Latin American culture and the convenience of being a U.S. destination.

One of the top attractions in Puerto Rico is its stunning beaches. From the pristine white sands of Flamenco Beach on Culebra Island to the vibrant shores of Isla Verde in San Juan, there are numerous beaches to choose from. Visitors can enjoy swimming, snorkeling, sunbathing, and water sports in the crystal-clear waters of the Caribbean.

San Juan, the capital city of Puerto Rico, is a cultural and historical gem. The city\'s UNESCO-listed Old San Juan is a charming colonial district with narrow cobblestone streets, colorful buildings, and historic sites such as the Castillo San Felipe del Morro and Castillo de San Cristóbal. The city also offers a vibrant nightlife scene, world-class restaurants, and boutique shopping.

El Yunque National Forest is a must-visit destination for nature enthusiasts. It is the only tropical rainforest in the U.S. National Forest System and offers lush vegetation, beautiful waterfalls, and numerous hiking trails. Exploring the forest allows visitors to witness its unique flora and fauna and enjoy breathtaking panoramic views from elevated trails.

For adventure seekers, the bioluminescent bays of Puerto Rico are a magical experience. Mosquito Bay in Vieques Island is known as the brightest bioluminescent bay in the world, where microscopic organisms emit a blue glow in the water, creating a surreal scene during night kayaking tours.

Puerto Rico is also home to a vibrant and diverse culinary scene. From traditional Puerto Rican dishes such as mofongo (mashed plantains) and lechón (roast pork) to fusion cuisine and international flavors, the island offers a wide range of gastronomic delights.

In summary, Puerto Rico offers a perfect blend of natural beauty, rich history, vibrant culture, and warm hospitality. Its stunning beaches, historic sites, lush rainforests, and unique experiences like bioluminescent bays make it an ideal destination for travelers seeking a tropical getaway with a touch of American convenience.
            ',
                'currency' => 'United States dollar',
                'language' => 'Spanish, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on CDMA 1900 networks.',
                'electricity' => '120V, 60Hz',
                'active' => false,
                'sortOrder' => 188,
            ],
            [
                'countryCode' => 'QA',
                'countryName' => 'Qatar',
                'regionCode' => 'ASIA',
                'capital' => 'Doha',
                'shortDescription' => '
            Qatar is a small but affluent country in the Middle East known for its modern architecture, luxury shopping, and rich cultural heritage. Visitors can explore the impressive skyline of Doha, indulge in world-class dining and shopping experiences, and discover the country\'s fascinating history and traditions, making it an attractive destination for both leisure and business travelers.
            ',
                'longDescription' => '
            Qatar, officially known as the State of Qatar, is a small country located on the northeastern coast of the Arabian Peninsula in the Middle East. Despite its small size, Qatar is a fascinating destination known for its modern architecture, rich culture, and natural beauty.

The capital city of Qatar is Doha, a vibrant and cosmopolitan metropolis that showcases the country\'s rapid development. Doha is home to an impressive skyline filled with towering skyscrapers, including the iconic Burj Qatar and the futuristic buildings of the West Bay area. The city also boasts a thriving arts and culture scene, with world-class museums like the Museum of Islamic Art and the National Museum of Qatar.

One of the highlights of Qatar is its stunning desert landscapes. Just outside Doha, visitors can experience the beauty of the Qatari desert with its rolling sand dunes, where activities such as dune bashing, camel riding, and sandboarding are popular. The inland sea of Khor Al Adaid, a UNESCO-recognized natural reserve, is another must-visit destination offering a unique combination of desert and sea.

For those interested in history and heritage, Qatar has a rich cultural heritage. The Souq Waqif in Doha is a traditional marketplace where visitors can immerse themselves in the sights, sounds, and scents of Qatari culture. The nearby Msheireb Museums offer insights into Qatar\'s past, showcasing the country\'s history, heritage, and traditions.

Qatar is also renowned for its world-class hospitality and luxury experiences. The country is home to a range of luxury hotels, exquisite dining options, and high-end shopping malls, including the famous Villaggio Mall. Visitors can indulge in fine dining, shop for international brands, and enjoy luxurious spa experiences.

In recent years, Qatar has gained international attention as a host of major sporting events, including the 2022 FIFA World Cup. The country has invested in state-of-the-art sports facilities, and sports enthusiasts can witness top-level sporting events and immerse themselves in the excitement of the international sporting scene.

In summary, Qatar offers a captivating mix of modernity, culture, and natural beauty. With its stunning architecture, rich heritage, desert adventures, and warm hospitality, Qatar provides a unique travel experience for visitors seeking a blend of tradition and contemporary charm in the Middle East.

            ',
                'currency' => 'Qatari riyal',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '240V, 50Hz',
                'active' => false,
                'sortOrder' => 189,
            ],
            [
                'countryCode' => 'RE',
                'countryName' => 'Réunion',
                'regionCode' => 'AFRICA',
                'capital' => 'Saint-Denis',
                'shortDescription' => '
            Réunion, a French overseas department in the Indian Ocean, is known for its stunning natural beauty, including lush forests, volcanic peaks, and pristine beaches. Visitors can indulge in outdoor activities such as hiking, canyoning, and snorkeling, while also immersing themselves in the unique Creole culture and savoring delicious local cuisine, making it a perfect destination for nature lovers and adventure seekers alike.
            ',
                'longDescription' => '
            Réunion is a French overseas department located in the Indian Ocean, east of Madagascar. It is known for its stunning natural beauty, diverse landscapes, and unique blend of cultures.

The island is dominated by Piton de la Fournaise, one of the world\'s most active volcanoes. Hiking to the summit of Piton de la Fournaise is a popular activity, offering breathtaking views of the surrounding lunar-like landscapes and the opportunity to witness volcanic activity up close.

Réunion\'s rugged terrain also features three Cirques (natural amphitheaters): Cirque de Cilaos, Cirque de Mafate, and Cirque de Salazie. These areas are a haven for outdoor enthusiasts, offering a network of hiking trails that lead to cascading waterfalls, lush forests, and picturesque villages tucked away in the mountains.

The island\'s coastal areas boast beautiful beaches, coral reefs, and opportunities for water sports such as snorkeling, diving, and surfing. Saint-Gilles-les-Bains and Saint-Pierre are popular beach towns, offering a vibrant atmosphere, seaside resorts, and a range of water activities.

Réunion is known for its rich cultural heritage, influenced by French, African, Indian, and Chinese cultures. The island\'s capital, Saint-Denis, is a melting pot of cultures, featuring colonial architecture, bustling markets, and a vibrant street food scene where visitors can taste Creole delicacies.

The island\'s cuisine is a fusion of flavors and traditions, combining French culinary techniques with local spices and ingredients. Try traditional dishes like rougail saucisse (sausage stew), carry (a Creole curry), and samoussas (stuffed pastries) for a taste of Réunion\'s unique culinary heritage.

Nature lovers will find an abundance of endemic flora and fauna on the island, including rare bird species and unique plant life. The Réunion National Park, a UNESCO World Heritage site, is a paradise for nature enthusiasts, offering breathtaking landscapes, hiking trails, and the opportunity to spot endangered species.

In summary, Réunion is a destination that offers a blend of natural beauty, outdoor adventure, cultural richness, and culinary delights. Whether exploring the volcanic landscapes, hiking through the Cirques, relaxing on the beaches, or immersing oneself in the vibrant local culture, visitors to Réunion are in for an unforgettable experience.
            ',
                'currency' => 'Euro',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 191,
            ],
            [
                'countryCode' => 'RO',
                'countryName' => 'Romania',
                'regionCode' => 'EUROPE',
                'capital' => 'Bucharest',
                'shortDescription' => '
            Romania, a country located in Eastern Europe, is known for its picturesque landscapes, medieval towns, and rich cultural heritage. Visitors can explore the stunning Carpathian Mountains, visit the legendary Transylvania region with its charming castles and folklore, and experience the vibrant capital city of Bucharest, offering a blend of history, architecture, and a thriving arts scene, making it a fascinating destination for history enthusiasts and nature lovers alike.
            ',
                'longDescription' => '
            Romania is a beautiful country located in Eastern Europe, bordered by several countries including Ukraine, Bulgaria, Serbia, Hungary, and Moldova. It is known for its diverse landscapes, rich history, and vibrant culture.

One of the top attractions in Romania is the region of Transylvania, famous for its medieval towns, stunning castles, and breathtaking landscapes. Bran Castle, commonly known as Dracula\'s Castle, is a must-visit landmark, perched on a hilltop and surrounded by a picturesque setting. The city of Sibiu, with its well-preserved historic center, is another highlight, offering charming cobblestone streets, colorful buildings, and lively festivals.

The capital city, Bucharest, is a bustling metropolis with a mix of architectural styles ranging from communist-era buildings to elegant Belle Époque structures. Visitors can explore the Palace of Parliament, the second-largest administrative building in the world, stroll through the charming Lipscani district with its vibrant nightlife, and visit the Village Museum to get a glimpse of Romania\'s rural heritage.

Nature enthusiasts will be captivated by the beauty of the Carpathian Mountains, which span across the northern part of the country. The region offers excellent opportunities for hiking, skiing, and wildlife spotting. The Danube Delta, a UNESCO Biosphere Reserve, is a unique ecosystem where visitors can take boat tours and observe a wide variety of bird species.

Romania is also known for its painted monasteries, particularly in the region of Bucovina. These monasteries are adorned with vibrant frescoes that depict religious scenes and are considered masterpieces of Byzantine art.

The country has a rich cultural heritage, and its traditional villages provide a glimpse into rural life and customs. The Maramureș region is famous for its wooden churches and traditional wooden gates, while the Saxon villages of Transylvania showcase a unique blend of German and Romanian architecture.

Romanian cuisine is diverse and flavorful, influenced by its neighboring countries. Visitors can indulge in dishes such as sarmale (cabbage rolls), mămăligă (polenta), and delicious pastries like cozonac and papanasi.

In summary, Romania offers a mix of historical landmarks, stunning landscapes, and a vibrant cultural scene. Whether exploring its medieval towns, enjoying outdoor activities in the Carpathian Mountains, or immersing oneself in the local traditions, Romania has something to offer every traveler.
            ',
                'currency' => 'Romanian leu',
                'language' => 'Romanian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks. Internet access is available in major towns.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 192,
            ],
            [
                'countryCode' => 'RU',
                'countryName' => 'Russia',
                'regionCode' => 'EUROPE',
                'capital' => 'Moscow',
                'shortDescription' => '
            Russia, the largest country in the world, offers a diverse range of attractions and experiences. From the historic city of Moscow with its iconic Red Square and the Kremlin, to the cultural capital of St. Petersburg with its grand palaces and world-class museums, visitors can immerse themselves in Russia\'s rich history, art, and architecture, as well as explore its stunning natural landscapes such as Lake Baikal and the Kamchatka Peninsula.
            ',
                'longDescription' => '
            Russia, officially known as the Russian Federation, is the largest country in the world, spanning across Eastern Europe and northern Asia. It is known for its vast landscapes, rich history, diverse culture, and iconic landmarks.

One of the most famous cities in Russia is Moscow, the capital and political center. Moscow is home to the Kremlin, a fortified complex that houses the official residence of the President of Russia and several historic cathedrals. The iconic Red Square, with its colorful St. Basil\'s Cathedral and the grandeur of the State Historical Museum, is a must-visit attraction. The city also offers world-class museums like the State Tretyakov Gallery and the Pushkin Museum of Fine Arts.

Another popular destination is St. Petersburg, often referred to as the cultural capital of Russia. The city is renowned for its stunning architecture, elegant palaces, and picturesque canals. The State Hermitage Museum, housed in the opulent Winter Palace, is one of the largest and most impressive art museums in the world. Other notable landmarks include the Peter and Paul Fortress, the Church of the Savior on Spilled Blood, and the beautiful gardens of Peterhof Palace.

For nature enthusiasts, Russia offers breathtaking landscapes such as Lake Baikal, the deepest freshwater lake in the world, and the stunning Kamchatka Peninsula, known for its volcanic activity and diverse wildlife. The Golden Ring, a group of historic cities northeast of Moscow, showcases Russia\'s medieval heritage with its ancient towns, monasteries, and picturesque countryside.

Russia is also famous for its rich cultural heritage, including its ballet and classical music. The Bolshoi Theatre in Moscow and the Mariinsky Theatre in St. Petersburg are world-renowned for their ballet and opera performances. Traditional Russian cuisine is a treat for food lovers, with dishes like borscht (beet soup), pelmeni (dumplings), and blini (pancakes) being popular favorites.

In summary, Russia offers a wide range of attractions and experiences, from its vibrant cities with iconic landmarks to its stunning natural landscapes and cultural treasures. Whether you\'re interested in history, art, nature, or culinary delights, Russia has something to offer every traveler.
            ',
                'currency' => 'Russian ruble',
                'language' => 'Russian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on CDMA 1900 networks. Internet access is available in major towns.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 193,
            ],
            [
                'countryCode' => 'RW',
                'countryName' => 'Rwanda',
                'regionCode' => 'AFRICA',
                'capital' => 'Kigali',
                'shortDescription' => '
            Rwanda, known as the "Land of a Thousand Hills," is a country of breathtaking natural beauty and remarkable wildlife. Visitors can witness the majestic mountain gorillas in Volcanoes National Park, explore the scenic landscapes of Nyungwe Forest, and learn about the country\'s inspiring journey of reconciliation and resilience, making it an ideal destination for those seeking adventure, wildlife encounters, and cultural experiences.
            ',
                'longDescription' => '
            Rwanda, known as the "Land of a Thousand Hills," is a small country located in East Africa. Despite its tragic past, Rwanda has made significant progress in recent years and has become a popular destination for travelers seeking natural beauty, wildlife encounters, and cultural experiences.

One of the top attractions in Rwanda is Volcanoes National Park, home to the endangered mountain gorillas. Trekking through the lush forests to encounter these gentle giants in their natural habitat is a truly unforgettable experience. The park also offers opportunities for hiking, birdwatching, and exploring the stunning volcanic landscapes.

In the capital city of Kigali, visitors can explore the Genocide Memorial sites that commemorate the 1994 genocide and learn about Rwanda\'s history and remarkable recovery. Kigali is a vibrant city with a growing arts and cultural scene, modern infrastructure, and a variety of restaurants, cafes, and markets where you can experience the local cuisine and crafts.

For nature enthusiasts, Akagera National Park is a must-visit destination. It is home to a diverse range of wildlife, including elephants, lions, giraffes, hippos, and numerous bird species. Exploring the park on a safari allows you to witness the beauty of Rwanda\'s savannah landscapes and encounter its incredible biodiversity.

Lake Kivu, located in the western part of the country, offers a peaceful retreat with stunning views of the surrounding hills. Visitors can enjoy water activities like swimming, kayaking, and boat trips while taking in the serene beauty of the lake.

Rwanda\'s cultural heritage is also rich and vibrant. Traditional dance performances, music, and arts and crafts provide insight into the country\'s cultural traditions. Visiting local communities and engaging in community-based tourism activities can provide a deeper understanding of the Rwandan way of life.

Rwanda is known for its commitment to conservation and sustainability. The country has made significant efforts to protect its natural resources and promote responsible tourism practices. Visitors can learn about conservation initiatives, visit community projects, and support local efforts to preserve Rwanda\'s unique ecosystems and wildlife.

In summary, Rwanda offers a blend of natural beauty, wildlife encounters, cultural experiences, and a chance to learn about its remarkable history. With its welcoming and friendly people, Rwanda provides a unique and rewarding travel experience for those seeking to explore this vibrant African nation.
            ',
                'currency' => 'Rwandan franc',
                'language' => 'Kinyarwanda, French, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 194,
            ],
            [
                'countryCode' => 'BL',
                'countryName' => 'Saint Barthélemy',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Gustavia',
                'shortDescription' => '
            Saint Barthélemy, commonly known as St. Barts, is a Caribbean island paradise renowned for its pristine beaches, luxury resorts, and vibrant French culture. With its turquoise waters, upscale dining and shopping options, and a laid-back island atmosphere, St. Barts offers a glamorous and relaxing getaway for those seeking sun, sea, and a taste of the good life.
            ',
                'longDescription' => '
            Saint Barthélemy, commonly known as St. Barts, is a small Caribbean island located in the northeastern Caribbean Sea. It is a popular destination for luxury travelers, known for its stunning beaches, upscale resorts, and vibrant atmosphere.

The island is famous for its beautiful white sandy beaches, crystal-clear turquoise waters, and lush tropical landscapes. Some of the most renowned beaches include St. Jean Beach, Flamands Beach, and Shell Beach, each offering its own unique charm and character. Visitors can relax on the pristine shores, engage in water activities such as swimming, snorkeling, and sailing, or simply soak up the sun in a tranquil setting.

Gustavia, the capital of St. Barts, is a picturesque town with a charming blend of Caribbean and French influences. Its harbor is lined with luxury yachts, and the town itself is filled with boutique shops, art galleries, and high-end restaurants. Visitors can explore the narrow streets, admire the colonial architecture, and indulge in the island\'s gourmet cuisine and vibrant nightlife.

Nature lovers will appreciate the island\'s diverse landscapes, which include rocky cliffs, rolling hills, and lush green valleys. Hiking enthusiasts can explore trails that offer breathtaking views of the island and its surrounding waters. Colombier Hill, located on the northwestern side of the island, is a popular spot for hiking and provides panoramic views of the coastline.

St. Barts is also known for its annual sailing regatta, Les Voiles de Saint Barth. This internationally renowned event attracts sailing enthusiasts from around the world and offers a thrilling experience for both participants and spectators.

One of the unique features of St. Barts is its tax-free shopping. Visitors can find a wide range of high-end fashion, jewelry, and designer goods in the island\'s boutiques and duty-free shops. The island is also known for its local craftsmanship, including handmade jewelry and traditional crafts that make for perfect souvenirs.

In summary, Saint Barthélemy offers a luxurious and idyllic getaway with its stunning beaches, upscale resorts, vibrant nightlife, and tax-free shopping. Whether you\'re seeking relaxation on pristine shores, indulging in gourmet dining, or exploring the natural beauty of the island, St. Barts provides a truly memorable and upscale Caribbean experience.
            ',
                'currency' => 'Euro',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 195,
            ],
            [
                'countryCode' => 'SH',
                'countryName' => 'Saint Helena',
                'regionCode' => 'AFRICA',
                'capital' => 'Jamestown',
                'shortDescription' => '
            Saint Helena, a remote island in the South Atlantic Ocean, is a destination of unique natural beauty and historical significance. Visitors can explore its dramatic landscapes, including towering cliffs and lush valleys, and discover its intriguing history as the final resting place of Napoleon Bonaparte. With its serene atmosphere and rich heritage, Saint Helena offers a truly off-the-beaten-path experience for adventurous travelers.
            ',
                'longDescription' => '
            Saint Helena is a remote island located in the South Atlantic Ocean, known for its unique and isolated beauty. It is part of the British Overseas Territory of Saint Helena, Ascension, and Tristan da Cunha. The island is famous for being the place of Napoleon Bonaparte\'s exile and his final resting place.

The main town on the island is Jamestown, which is known for its historic charm and picturesque setting. Visitors can explore the town\'s narrow streets lined with Georgian architecture, visit the Saint James\' Church, and learn about the island\'s history at the Museum of Saint Helena. Jamestown is also home to the famous Jacob\'s Ladder, a staircase consisting of 699 steps that provides a challenging climb and rewarding views from the top.

Saint Helena boasts stunning natural landscapes, including dramatic cliffs, lush valleys, and secluded beaches. One of the must-visit attractions is the Napoleon\'s Tomb, located in the Sane Valley. This site holds the remains of Napoleon Bonaparte and offers a glimpse into the island\'s historical significance.

Another popular destination on the island is Diana\'s Peak National Park, a protected area that showcases the island\'s rich biodiversity. Visitors can hike through the park\'s trails and witness unique flora and fauna, including endemic species such as the Saint Helena Plover and the Wirebird.

For those seeking outdoor adventures, Saint Helena offers opportunities for diving, fishing, and exploring the island\'s coastal waters. The waters surrounding the island are known for their abundant marine life, including vibrant coral reefs, tropical fish, and sea turtles.

Saint Helena\'s remote location and limited tourism infrastructure provide a peaceful and off-the-beaten-path experience. It is a destination for nature lovers, history enthusiasts, and those seeking tranquility amidst stunning natural surroundings. The island\'s warm and welcoming local community adds to the charm of this unique travel destination.
            ',
                'currency' => 'Saint Helena pound',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on CDMA 1900 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 196,
            ],
            [
                'countryCode' => 'KN',
                'countryName' => 'Saint Kitts and Nevis',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Basseterre',
                'shortDescription' => '
            Saint Kitts and Nevis, located in the Caribbean, is a charming destination known for its pristine beaches, lush mountains, and warm hospitality. Visitors can indulge in outdoor adventures such as hiking and snorkeling, immerse themselves in the rich history and culture, and enjoy a relaxing getaway in a picturesque setting. With its laid-back vibe and natural beauty, Saint Kitts and Nevis offers a perfect escape for those seeking a tropical paradise.
            ',
                'longDescription' => '
            Saint Kitts and Nevis, officially known as the Federation of Saint Kitts and Nevis, is a dual-island nation located in the Caribbean Sea. It is the smallest sovereign state in the Americas in terms of both land area and population.

The capital city of Saint Kitts and Nevis is Basseterre, situated on the larger island of Saint Kitts. Basseterre is known for its charming colonial architecture, historic sites, and vibrant atmosphere. Visitors can explore attractions such as Independence Square, the National Museum, and the imposing Brimstone Hill Fortress National Park, a UNESCO World Heritage Site.

One of the highlights of Saint Kitts is its stunning natural beauty. The island offers beautiful beaches with crystal-clear waters, perfect for swimming, snorkeling, and sunbathing. South Friars Bay, Cockleshell Bay, and Frigate Bay are among the popular beach destinations. For outdoor enthusiasts, hiking to the top of Mount Liamuiga, a dormant volcano on Saint Kitts, provides breathtaking panoramic views of the island and surrounding seas.

Nevis, the smaller sister island, is known for its tranquil and idyllic atmosphere. It offers pristine beaches, charming plantation inns, and lush tropical landscapes. The historic town of Charlestown showcases Georgian-style architecture, the Nevis Museum, and the birthplace of Alexander Hamilton, one of the Founding Fathers of the United States. The Nevis Peak, a dormant volcano covered in rainforest, offers hiking opportunities and rewarding vistas.

Both islands of Saint Kitts and Nevis are known for their warm and friendly locals, rich cultural heritage, and vibrant music and culinary traditions. Visitors can immerse themselves in the vibrant local culture by attending lively festivals, sampling delicious Caribbean cuisine, and enjoying the rhythms of calypso and reggae music.

Saint Kitts and Nevis is a hidden gem in the Caribbean, offering a perfect blend of natural beauty, history, and warm hospitality. Whether you\'re looking for relaxation on pristine beaches, outdoor adventures, or cultural exploration, this twin-island nation has something for everyone.
            ',
                'currency' => 'East Caribbean dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on TDMA 850 networks.',
                'electricity' => '230V, 60Hz',
                'active' => false,
                'sortOrder' => 197,
            ],
            [
                'countryCode' => 'LC',
                'countryName' => 'Saint Kitts and Nevis',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Castries',
                'shortDescription' => '
            Saint Lucia, a Caribbean island nation, captivates visitors with its stunning landscapes of lush rainforests, volcanic peaks, and pristine beaches. Known for its luxury resorts, vibrant culture, and warm hospitality, Saint Lucia offers a perfect blend of relaxation and adventure, making it an ideal destination for beach lovers, nature enthusiasts, and those seeking a romantic getaway.
            ',
                'longDescription' => '
            Saint Lucia, located in the eastern Caribbean Sea, is a stunning island nation known for its natural beauty, lush landscapes, and vibrant culture. It is a popular destination for both beach lovers and adventure seekers.

The capital and largest city of Saint Lucia is Castries, where visitors can explore colorful markets, historic sites, and sample local cuisine. The city is also a gateway to the island\'s beautiful beaches and natural attractions.

One of the top highlights of Saint Lucia is the iconic Pitons, two volcanic peaks rising dramatically from the sea. Gros Piton and Petit Piton offer breathtaking views and are a haven for hikers and nature enthusiasts. The Pitons are a UNESCO World Heritage Site and provide a stunning backdrop for the island.

Marigot Bay, often referred to as one of the most beautiful bays in the Caribbean, is a picturesque destination known for its clear turquoise waters and lush greenery. It offers opportunities for boating, yachting, and enjoying waterfront dining.

For beach lovers, Saint Lucia boasts numerous pristine beaches with powdery white sand and crystal-clear waters. Popular beach destinations include Reduit Beach, Anse Chastanet, and Sugar Beach. These beaches offer excellent swimming, snorkeling, and water sports activities.

Saint Lucia is also famous for its natural wonders, including the Sulphur Springs, the world\'s only drive-in volcano. Visitors can take a guided tour to witness the bubbling hot springs and enjoy a mud bath or mineral-rich soak in the therapeutic waters.

The island\'s rich cultural heritage can be experienced through its vibrant music, dance, and cuisine. Saint Lucia\'s annual events, such as the Saint Lucia Jazz Festival and Carnival, showcase the island\'s lively culture and provide a chance to immerse oneself in local traditions.

With its stunning natural landscapes, diverse activities, and warm hospitality, Saint Lucia offers a perfect blend of relaxation and adventure. Whether you\'re seeking a romantic getaway, family vacation, or outdoor exploration, Saint Lucia has something to offer every traveler.
            ',
                'currency' => 'East Caribbean dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on TDMA 850 networks.',
                'electricity' => '230V, 60Hz',
                'active' => false,
                'sortOrder' => 198,
            ],
            [
                'countryCode' => 'MF',
                'countryName' => 'Saint Martin',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Marigot',
                'shortDescription' => '
            Saint Martin, a small island shared by France and the Netherlands, boasts beautiful beaches, crystal-clear waters, and a lively atmosphere. Visitors can indulge in water sports, enjoy delicious cuisine, explore charming towns, and experience the unique blend of French and Dutch cultures, making it a must-visit destination for beach lovers, food enthusiasts, and those seeking a vibrant Caribbean getaway.
            ',
                'longDescription' => '
            Saint Martin, also known as Sint Maarten, is a unique island located in the Caribbean Sea. It is divided into two parts: the French side (Saint Martin) and the Dutch side (Sint Maarten). The island is renowned for its stunning beaches, vibrant culture, and delightful cuisine.

On the French side, visitors can explore the charming capital, Marigot, known for its picturesque harbor, quaint streets, and French-inspired architecture. Marigot offers a variety of shops, boutiques, and restaurants where you can indulge in delicious French pastries and cuisine. The nearby Grand Case is famous for its "Gourmet Capital" status, with an array of exquisite dining options showcasing the island\s culinary delights.

The Dutch side, on the other hand, is known for its bustling capital, Philipsburg, which offers a vibrant atmosphere with duty-free shopping, lively casinos, and beachfront bars. Visitors can stroll along the boardwalk, known as the Great Bay Beach, and enjoy the beautiful views of the turquoise Caribbean Sea.

One of the highlights of Saint Martin is its breathtaking beaches. Orient Bay Beach, located on the French side, is renowned for its crystal-clear waters, water sports activities, and beachfront bars and restaurants. Maho Beach, situated on the Dutch side, is famous for its proximity to the airport runway, where planes fly overhead, creating a unique experience for beachgoers.

For nature enthusiasts, a visit to the Loterie Farm Nature Reserve is a must. Located on the French side, this lush tropical oasis offers hiking trails, zip-lining, and a tranquil swimming pool nestled in the heart of nature.

Saint Martin is also a gateway to exploring other nearby islands, such as Anguilla and St. Barts. Day trips or boat tours can be arranged to discover these pristine destinations and enjoy their unique charm.

With its blend of French and Dutch influences, stunning beaches, and vibrant atmosphere, Saint Martin offers a diverse and memorable experience for travelers seeking relaxation, adventure, and cultural exploration in the Caribbean.
            ',
                'currency' => 'Euro',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 199,
            ],
            [
                'countryCode' => 'PM',
                'countryName' => 'Saint Martin',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Saint-Pierre',
                'shortDescription' => '
            Saint Pierre and Miquelon, an overseas collectivity of France, offers a unique opportunity to experience a taste of Europe in North America. Visitors can explore the charming villages, enjoy fresh seafood, learn about the region\'s history, and witness the fusion of French and North American cultures, making it an intriguing destination for those seeking a distinctive and off-the-beaten-path travel experience.
            ',
                'longDescription' => '
            Saint Pierre and Miquelon is a group of small islands located off the coast of Newfoundland, Canada. It is a French overseas territory and is the only remaining part of France\'s former North American empire. The islands are known for their rich history, unique cultural blend, and beautiful natural landscapes.

Saint Pierre is the main island and serves as the capital of the territory. It features charming architecture with colorful houses, cobblestone streets, and quaint shops and cafes. The island has a strong French influence, offering visitors a taste of authentic French cuisine, including fresh seafood and delicious pastries. The Museum of St. Pierre and Miquelon is a notable attraction, providing insight into the islands\' history, fishing industry, and cultural heritage.

Miquelon-Langlade is the larger of the two islands and is known for its picturesque landscapes. It offers opportunities for outdoor activities such as hiking, birdwatching, and exploring the stunning coastline. The Grand Barachois, a lagoon located on Miquelon Island, is a popular spot for nature enthusiasts, with its diverse flora and fauna.

One of the unique aspects of Saint Pierre and Miquelon is its blend of French and North American cultures. Visitors can experience a mix of French traditions and customs, combined with the warmth and hospitality of the local residents. The islands also have a distinct maritime heritage, with fishing being a vital part of the local economy and culture.

Exploring the surrounding waters is a popular activity, whether it\'s by boat, kayak, or on a guided tour. Visitors can spot a variety of marine wildlife, including seals, dolphins, and seabirds. Fishing charters are also available for those who want to try their hand at catching their own fresh seafood.

Overall, Saint Pierre and Miquelon offer a unique and off-the-beaten-path destination for travelers seeking a taste of France in a North American setting. The islands\' charming atmosphere, natural beauty, and intriguing history make it a captivating place to visit.
            ',
                'currency' => 'Euro',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 200,
            ],
            [
                'countryCode' => 'VC',
                'countryName' => 'Saint Vincent and the Grenadines',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Kingstown',
                'shortDescription' => '
            Saint Vincent and the Grenadines is a stunning Caribbean destination known for its beautiful beaches, crystal-clear waters, and lush tropical landscapes. With a laid-back island vibe, visitors can enjoy snorkeling, sailing, and exploring the picturesque islands and charming towns, making it an ideal getaway for those seeking relaxation and natural beauty in a Caribbean setting.
            ',
                'longDescription' => '
            Saint Vincent and the Grenadines is a stunning Caribbean nation consisting of the main island of Saint Vincent and a chain of smaller islands known as the Grenadines. Located in the southern Caribbean Sea, it is renowned for its pristine beaches, crystal-clear waters, and lush tropical landscapes.

Saint Vincent, the largest island, boasts a rugged volcanic terrain, with lush rainforests, cascading waterfalls, and the iconic La Soufriere volcano. The island offers opportunities for hiking, nature walks, and exploring its natural wonders. The Botanical Gardens in Kingstown, the capital city, is a must-visit attraction, featuring a wide variety of tropical plants and beautiful landscapes.

The Grenadines, a collection of 32 smaller islands and cays, offer a more secluded and exclusive experience. Popular destinations in the Grenadines include Mustique, known for its luxurious resorts and celebrity sightings, and Bequia, a charming island with picturesque beaches and a lively local culture. The Tobago Cays, a group of uninhabited islands and protected marine parks, are a paradise for snorkeling, diving, and sailing enthusiasts.

Water activities are a major highlight of a visit to Saint Vincent and the Grenadines. The islands offer excellent opportunities for swimming, snorkeling, diving, and yachting in their pristine waters. The coral reefs and marine life around the islands are teeming with vibrant colors and provide unforgettable underwater experiences.

Cultural experiences are also abundant in Saint Vincent and the Grenadines. The Garifuna people, known for their unique culture and history, have a strong presence on the island. Visitors can explore local markets, taste traditional cuisine, and immerse themselves in the lively music and dance of the Caribbean.

With its natural beauty, idyllic beaches, and warm hospitality, Saint Vincent and the Grenadines offers a perfect getaway for those seeking relaxation, adventure, and a taste of Caribbean charm. Whether you\'re looking to unwind on pristine beaches, explore lush landscapes, or indulge in water sports, this Caribbean gem has something for everyone.

            ',
                'currency' => 'East Caribbean dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on TDMA 850 networks.',
                'electricity' => '230V, 60Hz',
                'active' => false,
                'sortOrder' => 201,
            ],
            [
                'countryCode' => 'WS',
                'countryName' => 'Samoa',
                'regionCode' => 'OCEANIA',
                'capital' => 'Apia',
                'shortDescription' => '
            Samoa, located in the South Pacific, is a paradise destination known for its pristine beaches, vibrant coral reefs, and lush rainforests. Visitors can immerse themselves in the rich Polynesian culture, witness traditional ceremonies, explore stunning waterfalls, and indulge in delicious local cuisine, making it a perfect choice for those seeking a tropical escape and cultural experience.
            ',
                'longDescription' => '
          Samoa, located in the South Pacific, is an island nation consisting of two main islands, Upolu and Savai\'i, along with several smaller islands. It is famous for its breathtaking natural beauty, including pristine beaches, turquoise waters, lush rainforests, and stunning waterfalls. The warm and welcoming Polynesian culture, with its vibrant music, dance, and traditional ceremonies, is also a significant draw for travelers.
    Apia: The capital city of Samoa, Apia, is a bustling hub offering a mix of cultural heritage, modern amenities, and natural attractions. Visitors can explore the vibrant Maketi Fou Market, visit historical sites like Robert Louis Stevenson Museum, and relax on the nearby beautiful beaches.
    Lalomanu Beach: Located on the southeastern coast of Upolu, Lalomanu Beach is often referred to as one of the most picturesque beaches in Samoa. With its crystal-clear waters, powdery white sand, and fringing palm trees, it is an idyllic spot for swimming, snorkeling, and sunbathing.
    Saleaula Lava Fields: On the island of Savai\'i, the Saleaula Lava Fields offer a unique sightseeing experience. These ancient lava fields were formed during the eruption of Mt. Matavanu in the early 20th century. Visitors can witness the stark landscape, explore the remains of buried villages, and even see a church partially covered in volcanic ash.

People should visit Samoa to experience its unspoiled natural wonders, immerse themselves in the warm Polynesian culture, and find tranquility in its pristine beaches and lush landscapes. Whether it\'s exploring vibrant markets, diving into turquoise waters, hiking through tropical rainforests, or simply relaxing on secluded shores, Samoa offers a perfect blend of adventure, relaxation, and cultural immersion for travelers seeking a unique South Pacific experience.
            ',
                'currency' => 'Samoan tala',
                'language' => 'Samoan, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on CDMA 1900 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 202,
            ],
            [
                'countryCode' => 'SM',
                'countryName' => 'San Marino',
                'regionCode' => 'EUROPE',
                'capital' => 'San Marino',
                'shortDescription' => '
            San Marino, nestled in the Apennine Mountains, is a microstate and the world\'s oldest surviving republic. Known for its medieval architecture, stunning hilltop location, and panoramic views, visitors can explore its historic city center, visit ancient fortresses, and enjoy the charming atmosphere of this small yet culturally rich country. People should visit San Marino to experience its unique blend of history, picturesque landscapes, and preserved traditions, offering a glimpse into a bygone era and providing a delightful escape from the hustle and bustle of modern life.
            ',
                'longDescription' => '
            San Marino, officially known as the Republic of San Marino, is a small landlocked country situated in southern Europe. It is surrounded by Italy and is located on the northeastern side of the Apennine Mountains. Despite its small size, San Marino is renowned for its rich history, stunning landscapes, and charming medieval architecture.

The capital city of San Marino, also named San Marino, is perched on the slopes of Mount Titano and is a UNESCO World Heritage Site. The city is known for its well-preserved medieval fortress and towers, including the iconic Three Towers of San Marino: Guaita, Cesta, and Montale. These towers offer breathtaking panoramic views of the surrounding countryside.

Visitors to San Marino can explore the narrow cobblestone streets of the old town, stroll through charming piazzas, and visit historic landmarks such as the Basilica of San Marino and the Government Palace. The city is also home to several museums that showcase the country\'s history, art, and cultural heritage.

Nature lovers will appreciate the stunning landscapes that San Marino has to offer. The country is characterized by rolling hills, picturesque valleys, and scenic countryside. Visitors can enjoy hiking and walking trails, offering opportunities to explore the beautiful natural surroundings and enjoy panoramic views.

One of the main attractions in San Marino is its shopping. The country is known for its duty-free status, attracting shoppers from all over the world. The main shopping areas are found in the capital city, where visitors can find a wide range of products, including fashion, electronics, jewelry, and more, at competitive prices.

San Marino also hosts various cultural events and festivals throughout the year, including the San Marino Jazz Festival and the Medieval Days. These events showcase the country\'s cultural traditions, music, and arts, providing a vibrant and lively atmosphere.

In addition to its historical and cultural attractions, San Marino is also known for its excellent cuisine. Visitors can indulge in traditional Sammarinese dishes, influenced by Italian cuisine, and savor local delicacies such as torta tre monti (a layered cake), piadina (flatbread), and cacciatello (a type of sausage).

Overall, San Marino offers a unique blend of history, natural beauty, and cultural experiences. Whether you are interested in exploring medieval architecture, enjoying panoramic views, immersing yourself in the local culture, or simply relaxing in a picturesque setting, San Marino has something to offer for every traveler.
            ',
                'currency' => 'Euro',
                'language' => 'Italian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 203,
            ],
            [
                'countryCode' => 'ST',
                'countryName' => 'Sao Tome and Principe',
                'regionCode' => 'AFRICA',
                'capital' => 'São Tomé',
                'shortDescription' => '
            São Tomé and Príncipe, a small island nation off the coast of Central Africa, offers unspoiled natural beauty, lush rainforests, pristine beaches, and a rich cultural heritage. Visitors can explore the islands\' diverse flora and fauna, hike through tropical forests, relax on secluded beaches, and immerse themselves in the local culture, making it an ideal destination for nature lovers and those seeking an off-the-beaten-path experience.
            ',
                'longDescription' => '
            São Tomé and Príncipe is a small island nation located in the Gulf of Guinea, off the western coast of Central Africa. It consists of two main islands, São Tomé and Príncipe, as well as several smaller islets. Known for its lush tropical landscapes, pristine beaches, and rich biodiversity, São Tomé and Príncipe offers a unique and off-the-beaten-path travel experience.

The capital city, São Tomé, is located on the island of the same name and serves as the country\'s cultural and economic center. Here, visitors can explore the vibrant markets, colonial-era architecture, and historic landmarks such as the São Sebastião Museum and the Presidential Palace. The city also offers a lively atmosphere with bustling cafes, restaurants, and a vibrant music scene.

Príncipe, the smaller of the two islands, is a haven for nature lovers. It is characterized by dense rainforests, dramatic volcanic peaks, and pristine beaches. The island is a UNESCO Biosphere Reserve, known for its unique flora and fauna, including rare bird species and endemic plants. Exploring the rainforests, trekking to Pico de Príncipe (the highest peak), and relaxing on secluded beaches are among the top activities on Príncipe.

For beach enthusiasts, São Tomé and Príncipe boast stunning coastlines with pristine sandy beaches and crystal-clear waters. Some of the popular beach destinations include Praia das Conchas, Praia dos Tamarindos, and Praia Jalé. These beaches offer opportunities for swimming, snorkeling, diving, and simply unwinding in a tranquil tropical setting.

Nature lovers will appreciate the diverse wildlife found in São Tomé and Príncipe. The Obo National Park on São Tomé is home to various endemic bird species, primates, and reptiles. Visitors can embark on guided hikes or bird-watching tours to spot the unique flora and fauna of the islands.

Cultural enthusiasts can immerse themselves in the vibrant local culture of São Tomé and Príncipe. The islands have a rich history shaped by Portuguese colonial influence, which is reflected in the local architecture, cuisine, and traditions. Exploring the quaint fishing villages, visiting the colonial-era plantations, and sampling the local cuisine are excellent ways to experience the cultural heritage of the islands.

In summary, São Tomé and Príncipe offer a pristine and untouched destination for travelers seeking natural beauty, cultural experiences, and a relaxed island atmosphere. With its stunning landscapes, tropical beaches, unique wildlife, and rich history, São Tomé and Príncipe provide a memorable getaway for those looking to explore off-the-beaten-path destinations in Africa.
            ',
                'currency' => 'São Tomé and Príncipe dobra',
                'language' => 'Portuguese',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 204,
            ],
            [
                'countryCode' => 'SA',
                'countryName' => 'Saudi Arabia',
                'regionCode' => 'ASIA',
                'capital' => 'Riyadh',
                'shortDescription' => '
            Saudi Arabia, located in the Arabian Peninsula, is known for its rich history, ancient archaeological sites, stunning landscapes, and vibrant culture. Visitors can explore iconic landmarks like the UNESCO World Heritage Site of Al-Ula, experience the hospitality of Saudi Arabian locals, and witness the blend of tradition and modernity in cities like Riyadh and Jeddah, making it a fascinating destination for those interested in cultural exploration and immersive travel experiences.
            ',
                'longDescription' => '
            Saudi Arabia, officially known as the Kingdom of Saudi Arabia, is a country located in the Middle East on the Arabian Peninsula. It is famous for its rich cultural heritage, historical landmarks, and unique landscapes.

Riyadh, the capital city, is a modern metropolis that showcases the blend of traditional Arabian culture with contemporary architecture. Visitors can explore the historic Diriyah district, visit the King Abdulaziz Historical Center, and immerse themselves in the vibrant markets, known as souks, where they can shop for traditional crafts, spices, and textiles.

Jeddah, the gateway to the holy cities of Mecca and Medina, is a major port city with a diverse cultural scene. Its historic district, Al-Balad, is a UNESCO World Heritage site and features beautifully preserved traditional architecture. Visitors can also enjoy the vibrant Corniche waterfront, visit the King Fahd Fountain, and explore the bustling souks.

For those interested in historical and archaeological sites, Saudi Arabia is home to numerous ancient treasures. The Nabatean city of AlUla, with its stunning rock formations and UNESCO World Heritage site of Madain Saleh (Al-Hijr), offers a glimpse into the ancient Arabian civilizations. The ancient city of Diriyah, with its mud-brick buildings and historical significance, is another notable site.

Saudi Arabia is also known for its natural wonders. The Empty Quarter, or Rub\' al Khali, is the largest continuous sand desert in the world and offers breathtaking views of vast dunes. The Asir Mountains in the southwest provide opportunities for hiking, exploring traditional villages, and enjoying cooler temperatures and lush landscapes. The Red Sea coastline is a paradise for diving and snorkeling enthusiasts, with its vibrant coral reefs and marine life.

Cultural experiences are abundant in Saudi Arabia, with opportunities to witness traditional dances, attend festivals, and savor authentic Arabian cuisine. The country is also home to several museums, such as the National Museum in Riyadh and the Museum of Islamic Art in Jeddah, which showcase the rich heritage of the region.

In summary, Saudi Arabia offers a diverse range of attractions, from modern cities to ancient archaeological sites, stunning natural landscapes, and a rich cultural heritage. Visitors to Saudi Arabia can immerse themselves in the traditions and history of the region while enjoying its natural beauty and warm hospitality.
            ',
                'currency' => 'Saudi riyal',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '127/220V, 60Hz',
                'active' => false,
                'sortOrder' => 205,
            ],
            [
                'countryCode' => 'SN',
                'countryName' => 'Senegal',
                'regionCode' => 'AFRICA',
                'capital' => 'Dakar',
                'shortDescription' => '
            Senegal, situated on the west coast of Africa, is renowned for its vibrant music scene, bustling markets, and diverse landscapes including the UNESCO World Heritage Site of Djoudj National Bird Sanctuary and the stunning beaches of Cap Skirring. Visitors can immerse themselves in the rich cultural heritage of Senegal, explore its historical sites such as the Island of Gorée, and indulge in the delicious local cuisine, making it an ideal destination for those seeking a blend of history, culture, and natural beauty.
            ',
                'longDescription' => '
            Senegal is a vibrant country located in West Africa, known for its rich culture, stunning landscapes, and welcoming people. Here is some travel guide information about Senegal:

Situated on the westernmost point of the African continent, Senegal is known for its diverse geography. From the bustling capital city of Dakar to the picturesque coastal towns and the vast Sahelian plains, Senegal offers a unique blend of urban and natural experiences.

Dakar, the capital and largest city of Senegal, is a vibrant metropolis that serves as the country\'s cultural and economic hub. Visitors can explore the bustling markets, vibrant neighborhoods, and enjoy the lively music and art scenes. The iconic African Renaissance Monument, the historic Gorée Island, and the vibrant markets of Sandaga and Kermel are popular attractions in Dakar.

The Petite Côte, located south of Dakar, is a stretch of beautiful coastline dotted with charming beach towns such as Saly and Somone. This region offers stunning beaches, resorts, and water activities like swimming, snorkeling, and fishing.

The Senegalese countryside is characterized by its natural beauty and wildlife. The Djoudj National Bird Sanctuary, a UNESCO World Heritage site, is a paradise for birdwatchers, with thousands of migratory birds visiting the wetlands. The Bandia Reserve is home to a variety of wildlife, including giraffes, rhinos, and antelopes, and offers thrilling safari experiences.

Saint-Louis, the former capital of French West Africa, is a UNESCO World Heritage site and a city rich in history and charm. Its colonial architecture, vibrant markets, and the scenic Langue de Barbarie National Park make it a must-visit destination.

Senegal is also known for its vibrant music and cultural festivals. The Saint-Louis Jazz Festival and the Dakar Biennale (Dak\'Art) are renowned events that showcase the country\'s artistic talent and cultural heritage.

The Senegalese people are known for their warmth and hospitality, making interactions with locals an enriching part of the travel experience. Visitors can savor the delicious Senegalese cuisine, which includes dishes like thieboudienne (a rice and fish dish), yassa (marinated chicken or fish), and the popular national drink, bissap (hibiscus tea).

In summary, Senegal offers a rich blend of cultural heritage, natural beauty, and warm hospitality. Whether exploring the bustling streets of Dakar, relaxing on the beautiful beaches, or immersing oneself in the country\'s vibrant music and art scene, Senegal is sure to leave visitors with unforgettable memories.
            ',
                'currency' => 'CFA franc',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 206,
            ],
            [
                'countryCode' => 'RS',
                'countryName' => 'Serbia',
                'regionCode' => 'EUROPE',
                'capital' => 'Belgrade',
                'shortDescription' => '
            Serbia, located in the heart of the Balkans, offers a mix of fascinating history, vibrant cities like Belgrade and Novi Sad, and breathtaking natural landscapes such as Đavolja Varoš and Đerdap National Park. With its warm hospitality, rich cultural heritage, and delicious cuisine, Serbia provides visitors with a unique and authentic travel experience that encompasses both historical sites and natural wonders.
            ',
                'longDescription' => '
            Serbia is a landlocked country located in the Balkans region of Europe. Known for its rich history, cultural heritage, and stunning landscapes, Serbia offers a diverse range of experiences for travelers. Here is some travel guide information about Serbia:

Belgrade, the capital and largest city of Serbia, is a vibrant and dynamic metropolis. It is often referred to as the "White City" and offers a fascinating mix of historical landmarks, thriving nightlife, and a vibrant arts and music scene. Visitors can explore the iconic Belgrade Fortress, stroll along the lively Knez Mihailova Street, and experience the bohemian atmosphere of the Skadarlija neighborhood.

Novi Sad, the second-largest city in Serbia, is known for its charming architecture, cultural festivals, and the famous Petrovaradin Fortress. The city hosts the renowned EXIT Festival, one of Europe\'s largest music festivals, attracting visitors from around the world.

The Serbian countryside is adorned with picturesque landscapes, charming villages, and national parks. The UNESCO-listed Đavolja Varoš (Devil\'s Town) offers unique rock formations, while Tara National Park and Kopaonik National Park are perfect for outdoor enthusiasts, offering hiking, skiing, and breathtaking scenery.

The historical region of Šumadija is home to numerous medieval monasteries and charming towns. The vibrant city of Niš, located in the south, boasts ancient Roman ruins, including the well-preserved Niš Fortress and the birthplace of Constantine the Great.

The Serbian Orthodox monasteries, such as Studenica and Sopoćani, are renowned for their architectural beauty and spiritual significance. These monasteries provide a glimpse into Serbia\'s rich religious and cultural heritage.

Serbia is also known for its delicious cuisine, influenced by Turkish, Hungarian, and Mediterranean flavors. Visitors can indulge in traditional dishes such as čevapi (grilled meat), pljeskavica (Serbian burger), and sarma (stuffed cabbage rolls). Rakija, a popular fruit brandy, is a must-try beverage in Serbia.

Hospitality is highly valued in Serbian culture, and visitors can expect warm and friendly encounters with the locals. Traditional folklore dances, music, and festivals showcase the vibrant cultural traditions of Serbia.

In summary, Serbia offers a fascinating blend of history, culture, natural beauty, and warm hospitality. From exploring the lively streets of Belgrade to immersing in the tranquility of national parks and experiencing the rich traditions of Serbian culture, the country has much to offer for every type of traveler.

            ',
                'currency' => 'Serbian dinar',
                'language' => 'Serbian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 207,
            ],
            [
                'countryCode' => 'SC',
                'countryName' => 'Seychelles',
                'regionCode' => 'AFRICA',
                'capital' => 'Victoria',
                'shortDescription' => '
            Seychelles, an archipelago in the Indian Ocean, is renowned for its stunning beaches, crystal-clear waters, and vibrant coral reefs, making it a paradise for beach lovers and snorkeling enthusiasts. With its diverse marine life, lush nature reserves, and luxurious resorts, Seychelles offers a tranquil and idyllic escape for those seeking relaxation, adventure, and a taste of tropical paradise.
            ',
                'longDescription' => '
            Seychelles is an archipelago country located in the Indian Ocean off the eastern coast of Africa. Renowned for its stunning natural beauty, pristine beaches, and vibrant marine life, Seychelles is a paradise destination for travelers. Here is some travel guide information about Seychelles:

The main island of Mahé is home to the capital city, Victoria, and serves as the gateway to Seychelles. Visitors can explore the charming town, visit the iconic Clock Tower, and immerse themselves in the local culture by visiting the bustling markets and art galleries.

Praslin Island is famous for its breathtaking beaches, including the renowned Anse Lazio and Anse Georgette. It is also home to the Vallée de Mai Nature Reserve, a UNESCO World Heritage site, where visitors can admire the unique Coco de Mer palm trees and discover various endemic plant and bird species.

La Digue Island offers a laid-back atmosphere and is known for its stunning beaches such as Anse Source d\'Argent, which is often considered one of the most beautiful beaches in the world. The island is best explored by bicycle, allowing visitors to discover its picturesque villages and enjoy the tranquility of the surroundings.

Seychelles boasts numerous marine parks and nature reserves, providing excellent opportunities for snorkeling, diving, and exploring the vibrant underwater world. The Aldabra Atoll, a UNESCO World Heritage site, is home to a diverse range of marine species, including giant tortoises.

Nature lovers can also visit the Curieuse Island, famous for its population of Aldabra giant tortoises, and the Aride Island Nature Reserve, known for its rich birdlife and endemic species.

Seychelles is known for its luxury resorts and idyllic private islands, offering a high level of comfort and seclusion for those seeking a romantic getaway or a relaxing vacation.

Creole cuisine is a highlight of Seychelles, combining African, French, Indian, and Chinese influences. Visitors can savor the fresh seafood, including delicious grilled fish and curry dishes, as well as tropical fruits and local specialties like octopus curry and coconut-based desserts.

The warm and welcoming Seychellois people contribute to the charm of the destination, offering a genuine and friendly hospitality that enhances the overall travel experience.

In summary, Seychelles is a tropical paradise with stunning beaches, crystal-clear waters, and abundant natural beauty. Whether you seek relaxation, adventure, or immersion in nature, Seychelles offers a diverse range of experiences that will captivate and inspire you.
            ',
                'currency' => 'Seychellois rupee',
                'language' => 'Seychellois Creole, English, French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '240V, 50Hz',
                'active' => false,
                'sortOrder' => 208,
            ],
            [
                'countryCode' => 'SL',
                'countryName' => 'Sierra Leone',
                'regionCode' => 'AFRICA',
                'capital' => 'Freetown',
                'shortDescription' => '
            Sierra Leone, located on the West Coast of Africa, is known for its pristine beaches, wildlife reserves, and rich cultural heritage. Visitors can explore its stunning coastline, witness wildlife in national parks, and experience the warm hospitality of its people, making it an ideal destination for nature lovers and cultural enthusiasts seeking an off-the-beaten-path adventure.
            ',
                'longDescription' => '
            Sierra Leone, located on the west coast of Africa, is a country known for its beautiful landscapes, rich cultural heritage, and vibrant history. Here is some travel guide information about Sierra Leone:

Sierra Leone offers a diverse range of natural attractions, including pristine beaches, lush rainforests, and scenic mountains. The country is home to stunning beach destinations such as Banana Island, Lumley Beach, and River No. 2 Beach, where visitors can relax, swim, and engage in water sports activities.

The capital city, Freetown, is a vibrant and bustling metropolis with a mix of colonial and modern architecture. The city is known for its lively markets, including the famous Big Market, where visitors can shop for local crafts, textiles, and fresh produce. Freetown is also home to historical landmarks like the Cotton Tree and the National Museum.

The Outamba-Kilimi National Park is a haven for wildlife enthusiasts. Located in the northern part of the country, the park is home to diverse species, including elephants, chimpanzees, hippos, and various bird species. Visitors can embark on guided safaris and nature walks to explore the park\'s natural wonders.

The Tacugama Chimpanzee Sanctuary, located near Freetown, is a must-visit for animal lovers. The sanctuary works to rehabilitate and protect chimpanzees and offers visitors the opportunity to observe these fascinating creatures in a natural habitat.

Sierra Leone has a rich cultural heritage, and visitors can immerse themselves in the local traditions and customs. The country is known for its lively music and dance, with genres like "Bubu" and "Susu" gaining international recognition. The National Dance Troupe and other cultural groups showcase traditional performances that captivate audiences.

For history buffs, the old slave trading outpost of Bunce Island and the historic settlement of Freetown provide insight into Sierra Leone\'s past. These sites offer a somber reminder of the country\'s involvement in the transatlantic slave trade and its subsequent journey towards independence.

Sierra Leone is also a destination for ecotourism, with opportunities for hiking, birdwatching, and exploring its natural wonders. The Gola Rainforest National Park, a UNESCO World Heritage site, is home to diverse flora and fauna and offers trekking trails for adventurous travelers.

The local cuisine of Sierra Leone reflects the country\'s cultural diversity and includes dishes like cassava leaves, jollof rice, and fresh seafood. Visitors can savor the flavors of Sierra Leone by trying street food, visiting local restaurants, and engaging in culinary tours.

The warmth and hospitality of the Sierra Leonean people further enhance the travel experience. Interacting with locals and learning about their traditions and way of life can provide a deeper understanding of the country\'s culture and create lasting memories.

In summary, Sierra Leone offers a unique blend of natural beauty, cultural heritage, and historical significance. Whether you are seeking relaxation on pristine beaches, wildlife encounters in national parks, or an immersive cultural experience, Sierra Leone has something to offer every traveler.

            ',
                'currency' => 'Sierra Leonean leone',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 209,
            ],
            [
                'countryCode' => 'SG',
                'countryName' => 'Singapore',
                'regionCode' => 'ASIA',
                'capital' => 'Singapore',
                'shortDescription' => '
            Singapore is a vibrant city-state known for its modern skyline, diverse culture, and culinary delights. Visitors can explore its iconic landmarks like Marina Bay Sands, Gardens by the Bay, and Sentosa Island, indulge in shopping and dining experiences, and immerse themselves in the blend of cultures that make Singapore a unique and cosmopolitan destination.
            ',
                'longDescription' => '
            Singapore, officially known as the Republic of Singapore, is a vibrant and modern city-state located in Southeast Asia. Known for its efficient infrastructure, multicultural society, and impressive skyline, Singapore is a popular destination for both business and leisure travelers. Here is some travel guide information about Singapore:

The city-state of Singapore is situated at the southern tip of the Malay Peninsula, and it consists of the main island of Singapore and more than 60 smaller islands. Singapore is famous for its efficient transportation system, clean streets, and modern architecture, which create a safe and pleasant environment for visitors.

One of the top attractions in Singapore is the Marina Bay Sands complex, featuring the iconic Marina Bay Sands Hotel with its rooftop infinity pool. The area is known for its stunning views, luxury shopping malls, and world-class dining options. The nearby Gardens by the Bay is another popular destination, with its futuristic Supertrees, flower domes, and skywalk offering panoramic views of the city.

For a glimpse into Singapore\'s cultural heritage, visitors can explore neighborhoods such as Chinatown, Little India, and Kampong Glam. These areas are rich in history, vibrant colors, and aromatic food stalls, offering a diverse cultural experience. The temples, mosques, and traditional shophouses in these neighborhoods provide a glimpse into Singapore\'s multicultural heritage.

Nature lovers will find plenty to explore in Singapore\'s green spaces. The Singapore Botanic Gardens, a UNESCO World Heritage site, is a serene oasis in the heart of the city. It features various gardens, including the National Orchid Garden, showcasing a wide variety of stunning orchids. Another nature reserve worth visiting is the Bukit Timah Nature Reserve, offering hiking trails through a tropical rainforest.

Sentosa Island is a popular destination for entertainment and leisure activities. It features beautiful beaches, theme parks such as Universal Studios Singapore, and attractions like the S.E.A. Aquarium and Adventure Cove Waterpark. Visitors can enjoy a range of recreational activities, including zip-lining, beach volleyball, and water sports.

Food plays a central role in Singaporean culture, and the city-state is renowned as a culinary paradise. From hawker centers offering affordable and delicious local dishes to high-end restaurants serving international cuisine, Singapore has a diverse culinary scene. Must-try dishes include Hainanese chicken rice, laksa, chili crab, and roti prata.

Singapore\'s efficient public transportation system makes it easy to get around the city. The Mass Rapid Transit (MRT) is a clean and reliable subway system that connects various parts of the city, while buses and taxis are also readily available. Walking is another great way to explore Singapore, especially in areas like Orchard Road and the Singapore River.

In summary, Singapore offers a unique blend of modernity, cultural diversity, and natural beauty. With its impressive skyline, vibrant neighborhoods, world-class attractions, and culinary delights, Singapore has something for everyone. Whether you\'re interested in shopping, exploring nature, or immersing yourself in a multicultural experience, Singapore is sure to leave a lasting impression.
            ',
                'currency' => 'Singapore dollar',
                'language' => 'English, Malay, Mandarin, Tamil',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 210,
            ],
            [
                'countryCode' => 'SX',
                'countryName' => 'Saint Martin',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Philipsburg',
                'shortDescription' => '
            Sint Maarten is a picturesque Caribbean island known for its stunning beaches, crystal-clear waters, and vibrant nightlife. Visitors can enjoy sunbathing, water sports, and exploring the charming capital of Philipsburg, while also experiencing the unique blend of Dutch and French cultures that make Sint Maarten a fascinating destination to visit.
            ',
                'longDescription' => '
            Sint Maarten, also known as St. Maarten, is a small island located in the Caribbean Sea. It is divided into two parts: the southern Dutch side, known as Sint Maarten, and the northern French side, known as Saint-Martin. Here is some travel guide information about Sint Maarten:

Sint Maarten is famous for its stunning beaches, crystal-clear turquoise waters, and vibrant atmosphere. The island offers a mix of Caribbean charm and European sophistication, making it a popular destination for beach lovers, water sports enthusiasts, and those seeking a lively vacation experience.

One of the top attractions in Sint Maarten is its beautiful beaches. Orient Bay Beach is known for its white sand, clear waters, and beach bars, offering a lively and energetic atmosphere. Maho Beach is famous for its close proximity to the Princess Juliana International Airport, where planes fly just a few meters above beachgoers during takeoff and landing, creating a unique and thrilling experience. Other popular beaches include Cupecoy Beach, Mullet Bay Beach, and Simpson Bay Beach.

Sint Maarten is also renowned for its duty-free shopping. The capital city, Philipsburg, is a bustling hub of shops, boutiques, and duty-free outlets. Front Street, the main shopping street, offers a wide range of items such as jewelry, clothing, electronics, and local souvenirs. Visitors can find great deals on luxury goods, including watches, perfumes, and designer brands.

For those interested in exploring the natural beauty of the island, a visit to Loterie Farm is a must. This lush nature reserve offers hiking trails, zip-lining adventures, and a serene pool area where visitors can relax amidst the tropical surroundings. Another popular attraction is the Butterfly Farm, where you can admire various species of butterflies in a colorful garden setting.

Food enthusiasts will enjoy the diverse culinary scene in Sint Maarten. The island offers a wide range of dining options, from local Caribbean cuisine to international flavors. The traditional dish of the island is called "Johnny Cake," a fried bread usually filled with meat or fish. Visitors can also savor fresh seafood, such as lobster and conch, as well as other Caribbean specialties like jerk chicken and plantains.

Water sports activities are abundant in Sint Maarten, with opportunities for snorkeling, diving, sailing, and jet skiing. The calm and clear waters make it an ideal destination for exploring vibrant coral reefs and marine life. Boat tours and catamaran cruises are also popular, allowing visitors to discover the island\'s scenic coastline and neighboring islands.

Sint Maarten is easily accessible, with direct flights from various international destinations. The island has its own airport, Princess Juliana International Airport, which is well-connected to major cities in the United States, Canada, and Europe.

In summary, Sint Maarten offers a blend of beautiful beaches, exciting water sports, vibrant culture, and duty-free shopping. Whether you\'re seeking relaxation, adventure, or a taste of Caribbean charm, Sint Maarten has something to offer every traveler.
            ',
                'currency' => 'Netherlands Antillean guilder',
                'language' => 'Dutch, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM networks.',
                'electricity' => '110/220V, 60Hz',
                'active' => false,
                'sortOrder' => 211,
            ],
            [
                'countryCode' => 'SK',
                'countryName' => 'Slovakia',
                'regionCode' => 'EUROPE',
                'capital' => 'Bratislava',
                'shortDescription' => '
            Slovakia is a beautiful country located in Central Europe, known for its stunning natural landscapes including the High Tatras mountains, picturesque castles, and charming towns. Visitors can enjoy outdoor activities like hiking and skiing, explore historical sites, indulge in delicious cuisine, and experience the warm hospitality of the Slovak people, making it a great destination for nature lovers and history enthusiasts alike.
            ',
                'longDescription' => '
            Slovakia, officially known as the Slovak Republic, is a landlocked country located in Central Europe. Here is some travel guide information about Slovakia:

Slovakia is famous for its picturesque landscapes, medieval castles, and charming towns. The country offers a mix of natural beauty, historical sites, and outdoor activities, making it an ideal destination for nature lovers, history enthusiasts, and adventure seekers.

Bratislava, the capital and largest city of Slovakia, is a popular starting point for exploring the country. It is known for its well-preserved historic center, dominated by Bratislava Castle, which offers panoramic views of the city. Visitors can stroll along the cobbled streets, admire the beautiful architecture, and explore landmarks such as the St. Martin\'s Cathedral and the Old Town Hall.

The High Tatras mountain range is a major highlight of Slovakia. Located in the northern part of the country, this area offers stunning alpine scenery, with rugged peaks, deep valleys, and pristine lakes. Hiking and trekking opportunities are plentiful, ranging from gentle walks to challenging mountain ascents. The popular resort town of Zakopane is a gateway to the High Tatras and offers a range of outdoor activities, including skiing in the winter.

Slovakia is home to numerous medieval castles, showcasing its rich history. Spiš Castle, a UNESCO World Heritage Site, is one of the largest castle complexes in Central Europe and provides a fascinating glimpse into the past. Bojnice Castle, with its fairytale-like appearance, is another must-visit attraction. Orava Castle, located on a rocky hilltop, is known for its dramatic setting and is often featured in movies.

The Slovak Paradise National Park is a paradise indeed for outdoor enthusiasts. It features a network of trails, gorges, and waterfalls, offering breathtaking scenery and thrilling experiences. Visitors can hike through the stunning gorges, cross wooden ladders and bridges, and enjoy the natural beauty of the park.

Slovakia is also known for its traditional folk culture, which can be experienced in various ways. The village of Čičmany is famous for its well-preserved wooden houses decorated with unique folk patterns. Folk festivals, such as the Východná Folklore Festival, showcase traditional music, dance, and costumes, providing a glimpse into Slovak culture and traditions.

Food in Slovakia is hearty and delicious, with influences from neighboring countries. Traditional dishes include bryndzové halušky (potato dumplings with sheep cheese), goulash, and kapustnica (sauerkraut soup). Visitors can also enjoy local wines, such as Tokaj, as well as Slovak beers.

Slovakia has a well-developed network of hiking and cycling trails, offering opportunities to explore its diverse landscapes. The country also has several thermal spa resorts, such as Piešťany and Rajecké Teplice, where visitors can relax and rejuvenate in mineral-rich thermal waters.

In summary, Slovakia is a hidden gem in Central Europe, offering a blend of natural beauty, historical sites, and cultural experiences. Whether you\'re interested in exploring majestic mountains, discovering medieval castles, or immersing yourself in Slovak traditions, Slovakia has something to offer for every traveler.
            ',
                'currency' => 'Euro',
                'language' => 'Slovak',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 212,
            ],
            [
                'countryCode' => 'SI',
                'countryName' => 'Slovenia',
                'regionCode' => 'EUROPE',
                'capital' => 'Ljubljana',
                'shortDescription' => '
            Slovenia, nestled in the heart of Europe, offers a diverse range of attractions including breathtaking alpine scenery, charming coastal towns, and vibrant cities like Ljubljana. With its stunning landscapes, rich cultural heritage, outdoor activities such as hiking and skiing, and delicious cuisine, Slovenia is a must-visit destination for nature lovers, adventure enthusiasts, and those seeking a blend of history and natural beauty.
            ',
                'longDescription' => '
            Slovenia is a small but charming country located in Central Europe, bordered by Italy to the west, Austria to the north, Hungary to the northeast, Croatia to the south and southeast, and the Adriatic Sea to the southwest. Here is some travel guide information about Slovenia:

Slovenia is famous for its stunning natural landscapes, including the Julian Alps, picturesque lakes, lush forests, and underground caves. Lake Bled is one of the country\'s most iconic destinations, known for its beautiful turquoise lake, a medieval castle perched on a hilltop, and an island with a charming church. Visitors can enjoy activities such as boating, hiking, and cycling around the lake.

The capital city of Slovenia is Ljubljana, renowned for its vibrant atmosphere, architectural beauty, and relaxed lifestyle. Ljubljana Castle overlooks the city and offers panoramic views. The old town, with its cobblestone streets and colorful buildings, is filled with cafes, restaurants, and shops. Visitors can explore the Triple Bridge, Dragon Bridge, and the famous open-air Central Market.

Slovenia is home to Triglav National Park, which encompasses the Julian Alps and Mount Triglav, the highest peak in the country. The park is a paradise for outdoor enthusiasts, offering hiking trails, mountain climbing, skiing, and breathtaking alpine scenery. The picturesque Soča River with its emerald-green waters is a popular spot for water sports such as rafting and kayaking.

The Postojna Cave and Škocjan Caves are remarkable natural wonders that attract visitors from around the world. These underground cave systems feature vast chambers, intricate stalactite formations, and subterranean rivers. Guided tours allow visitors to explore the fascinating underground world.

Slovenia has a rich cultural heritage and boasts numerous historical sites and charming towns. The coastal town of Piran, with its Venetian architecture and narrow streets, offers a taste of Mediterranean charm. The medieval town of Ptuj, known for its castle and annual Kurentovanje carnival, showcases the country\'s traditional culture. The Lipica Stud Farm, where Lipizzaner horses are bred, is another popular attraction.

Slovenian cuisine is diverse and influenced by neighboring countries. Traditional dishes include potica (rolled pastry with various fillings), štruklji (rolled dumplings), and Kranjska klobasa (Carniolan sausage). Slovenia is also known for its excellent wines, particularly white wines from the wine-growing regions of Primorska and Podravje.

Slovenia is a nature lover\'s paradise, offering opportunities for outdoor activities throughout the year. From hiking and skiing in the Alps to exploring caves and enjoying the coastal areas, the country has something for everyone. It is also known for its commitment to sustainability and eco-tourism, with many eco-friendly accommodations and initiatives.

In summary, Slovenia is a small but captivating country with a diverse range of attractions. Whether you\'re seeking natural beauty, cultural experiences, or outdoor adventures, Slovenia has it all. Its compact size makes it easy to explore, and its warm hospitality and natural wonders will leave a lasting impression on any traveler.

            ',
                'currency' => 'Euro',
                'language' => 'Slovene',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 213,
            ],
            [
                'countryCode' => 'SB',
                'countryName' => 'Solomon Islands',
                'regionCode' => 'OCEANIA',
                'capital' => 'Honiara',
                'shortDescription' => '
            The Solomon Islands, located in the South Pacific, boast pristine white-sand beaches, crystal-clear waters teeming with marine life, and lush tropical rainforests. With its rich cultural heritage, world-class diving and snorkeling opportunities, and the chance to explore remote islands and unspoiled natural beauty, the Solomon Islands offer a unique and unforgettable travel experience for those seeking adventure, relaxation, and a deep connection with nature.
            ',
                'longDescription' => '
            The Solomon Islands is a beautiful archipelago located in the South Pacific Ocean, east of Papua New Guinea. Here is some travel guide information about the Solomon Islands:

The Solomon Islands are famous for their pristine natural beauty, consisting of lush rainforests, stunning coral reefs, white sandy beaches, and crystal-clear turquoise waters. The islands offer excellent opportunities for diving, snorkeling, fishing, and other water activities. The underwater world is teeming with colorful marine life, including tropical fish, sea turtles, and vibrant coral gardens.

Honiara, the capital city of the Solomon Islands, is situated on the island of Guadalcanal. It serves as the main gateway to the country and offers a blend of traditional Melanesian culture and modern amenities. Visitors can explore the National Museum, Central Market, and visit WWII historical sites such as the Guadalcanal American Memorial and Bloody Ridge.

The Western Province is a popular destination in the Solomon Islands, known for its stunning landscapes and cultural experiences. Gizo, the provincial capital, offers access to beautiful dive sites, including the famous Kennedy Island, which is known for its WWII history. The pristine Marovo Lagoon, a UNESCO World Heritage Site, is also located in the Western Province and is renowned for its breathtaking beauty.

The Solomon Islands are home to numerous traditional villages where visitors can experience the local Melanesian culture firsthand. Customary practices, traditional dances, and handicrafts are an integral part of the cultural heritage. Tavanipupu Island and Uepi Island are known for their luxury resorts and offer opportunities to immerse yourself in the local culture while enjoying the beauty of the surrounding nature.

For nature enthusiasts, the Solomon Islands offer a wide range of ecotourism activities. The diverse ecosystems, including rainforests, mangroves, and volcanic islands, provide excellent opportunities for hiking, birdwatching, and wildlife spotting. The Kolombangara Island and Rennell Island are particularly popular among nature lovers.

The cuisine of the Solomon Islands is heavily influenced by the local resources and traditional cooking methods. Fresh seafood, tropical fruits, root crops, and coconut are staples of the diet. Visitors can savor delicious dishes such as fish curry, coconut rice, and various seafood delicacies.

The Solomon Islands have a rich history, with World War II playing a significant role. The islands were the site of fierce battles between the Allied forces and the Japanese, and remnants of this history can still be found in the form of wrecks, memorials, and historical sites.

In summary, the Solomon Islands offer a unique blend of natural beauty, cultural experiences, and historical significance. Whether you\'re seeking adventure, relaxation, or an immersion into traditional Melanesian culture, the Solomon Islands provide a memorable and authentic travel experience.
            ',
                'currency' => 'Solomon Islands dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 3G networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 214,
            ],
            [
                'countryCode' => 'SO',
                'countryName' => 'Somalia',
                'regionCode' => 'AFRICA',
                'capital' => 'Mogadishu',
                'shortDescription' => '
            Somalia, located in the Horn of Africa, is a country with a diverse landscape, including beautiful beaches, ancient ruins, and wildlife-rich national parks. While the country still faces security challenges, adventurous travelers may be interested in exploring its historical sites, experiencing its unique culture, and discovering its natural treasures with the guidance of local experts.
            ',
                'longDescription' => '
            Somalia is a country located in the Horn of Africa, bordered by the Gulf of Aden and the Indian Ocean. Here is some travel guide information about Somalia:

Somalia is famous for its stunning coastline, which stretches for thousands of kilometers and features pristine white sandy beaches, crystal-clear turquoise waters, and diverse marine life. The beaches offer opportunities for sunbathing, swimming, snorkeling, and water sports such as diving and fishing.

Mogadishu, the capital city of Somalia, is known for its rich history and cultural heritage. Visitors can explore historical sites such as the Mogadishu Cathedral, the Tomb of the Unknown Soldier, and the Palace of the Sultan. The Bakara Market is a bustling hub where visitors can experience the vibrant local culture and purchase traditional crafts, spices, and other goods.

Hargeisa, the capital of the self-declared state of Somaliland, is another popular destination in Somalia. It is known for its vibrant street markets, lively atmosphere, and the vibrant Somali arts scene. Visitors can explore the Hargeisa Cultural Center, visit the Laas Geel rock art site, and enjoy the local cuisine at traditional Somali restaurants.

The Somali people have a rich cultural heritage, and traditional nomadic practices are still prevalent in some parts of the country. Visitors can immerse themselves in the Somali culture by visiting traditional villages, engaging with local communities, and experiencing traditional music, dance, and cuisine.

Somalia is home to several national parks and nature reserves that offer opportunities for wildlife viewing and nature exploration. The Jazeera National Park is known for its diverse ecosystems, including acacia woodlands, savannahs, and wetlands. It is home to a variety of wildlife, including elephants, giraffes, zebras, and various bird species.

The Somali cuisine is a reflection of the country\'s nomadic heritage and coastal location. Staple foods include rice, pasta, camel meat, goat meat, and fish. Somali dishes often feature a variety of spices, including coriander, cumin, cardamom, and turmeric. Visitors can savor traditional dishes such as camel meat stew, rice and meat dishes, and flavorful seafood.

While Somalia has experienced political instability and security challenges in the past, there are areas that have become safer for travel in recent years. It is essential to stay updated on the current security situation and follow travel advisories and guidelines from reliable sources before planning a trip to Somalia.

In summary, Somalia offers a unique blend of natural beauty, cultural heritage, and historical significance. It is a destination for adventurous travelers seeking off-the-beaten-path experiences and an opportunity to explore a country with a rich cultural heritage and stunning natural landscapes.
            ',
                'currency' => 'Somali shilling',
                'language' => 'Somali, Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 3G networks.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 215,
            ],
            [
                'countryCode' => 'ZA',
                'countryName' => 'South Africa',
                'regionCode' => 'AFRICA',
                'capital' => 'Pretoria',
                'shortDescription' => '
            South Africa is a diverse and vibrant country known for its stunning natural beauty, wildlife reserves, and cultural heritage. Visitors can embark on thrilling safari experiences, explore breathtaking landscapes such as the iconic Table Mountain, and immerse themselves in the rich history and vibrant cities like Cape Town and Johannesburg.
            ',
                'longDescription' => '
            South Africa is a diverse and vibrant country located at the southernmost tip of the African continent. Here is some travel guide information about South Africa:

South Africa is famous for its stunning landscapes, wildlife, and cultural diversity. The country is home to iconic landmarks such as Table Mountain in Cape Town, the Kruger National Park, the beautiful beaches of the Garden Route, and the picturesque Drakensberg Mountains.

Cape Town is one of the top destinations in South Africa, known for its breathtaking scenery, vibrant city life, and rich cultural heritage. Visitors can explore the iconic Table Mountain, visit the colorful Bo-Kaap neighborhood, enjoy the stunning coastline along the Cape Peninsula, and indulge in world-class cuisine and wine in the nearby Cape Winelands.

The Kruger National Park is a world-renowned wildlife sanctuary and one of the largest game reserves in Africa. It offers incredible opportunities for wildlife viewing, including the Big Five (elephant, rhino, lion, leopard, and buffalo), as well as a wide variety of bird species and other animals.

The Garden Route is a scenic coastal stretch that runs along the south-eastern coast of South Africa. It offers a diverse range of attractions, including pristine beaches, lush forests, charming coastal towns, and thrilling adventure activities like bungee jumping and shark cage diving.

Johannesburg, the largest city in South Africa, is a vibrant metropolis with a rich history and cultural scene. Visitors can explore the Apartheid Museum, visit the vibrant neighborhood of Soweto, and enjoy the city\'s thriving art, music, and culinary scenes.

South Africa is known for its cultural diversity, and visitors can experience a blend of different cultures and traditions. They can visit historical sites such as the Robben Island, where Nelson Mandela was imprisoned, and learn about the country\'s challenging past and inspiring journey towards democracy.

The country is also famous for its delicious cuisine, which reflects its diverse heritage. Visitors can indulge in traditional dishes such as braai (barbecue), bobotie (a spiced meat dish), biltong (dried and cured meat), and potjiekos (a slow-cooked stew).

South Africa offers a wide range of outdoor activities, including hiking, safaris, whale watching, surfing, and wine tasting. The country\'s natural beauty, diverse wildlife, and adventure opportunities make it a paradise for outdoor enthusiasts.

It\'s important to note that South Africa, like any other destination, has areas with varying safety levels. It\'s advisable to stay informed about the current situation, follow travel advisories, and take necessary precautions to ensure a safe and enjoyable trip.

In summary, South Africa is a captivating destination that offers a wealth of experiences for travelers. From its breathtaking landscapes and wildlife encounters to its vibrant cities and rich cultural heritage, South Africa has something to offer every visitor.
            ',
                'currency' => 'South African rand',
                'language' => 'Afrikaans, English, Southern Ndebele, Northern Sotho, Southern Sotho, Swazi, Tsonga, Tswana, Venda, Xhosa, Zulu',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 216,
            ],
            [
                'countryCode' => 'GS',
                'countryName' => 'South Georgia and the South Sandwich Islands',
                'regionCode' => 'ANTARCTICA',
                'capital' => 'King Edward Point',
                'shortDescription' => '
            South Georgia and the South Sandwich Islands are remote and pristine destinations located in the southern Atlantic Ocean. They offer breathtaking landscapes, including towering glaciers, abundant wildlife, and a unique opportunity to explore one of the most remote and untouched regions on Earth, making it a must-visit for nature enthusiasts and adventure seekers.
            ',
                'longDescription' => '
            South Georgia and the South Sandwich Islands are remote and uninhabited territories located in the Southern Atlantic Ocean. Here is some information about these unique destinations:

South Georgia is an island located about 1,400 kilometers east of the Falkland Islands. It is known for its stunning natural beauty, including rugged mountains, glaciers, and fjords. The island is home to a variety of wildlife, including large populations of seals, penguins, and seabirds. Visitors can explore the island\'s abundant wildlife, take part in hiking expeditions, and learn about its fascinating history, including its role in the whaling and exploration industries.

The South Sandwich Islands are a group of volcanic islands located about 700 kilometers southeast of South Georgia. This archipelago consists of several uninhabited islands, including Zavodovski, Bellingshausen, and Saunders. These islands are known for their active volcanoes, rugged coastlines, and unique wildlife, including colonies of penguins and seals. Due to their remote location and challenging weather conditions, access to the South Sandwich Islands is limited, and visitors are primarily researchers and scientific expeditions.

Traveling to South Georgia and the South Sandwich Islands requires careful planning and preparation. The islands are remote and have no permanent human population, so visitors typically arrive by expedition cruise ships or chartered vessels. The best time to visit is during the southern hemisphere summer months (November to March), when weather conditions are more favorable.

When visiting these islands, it\'s important to adhere to strict environmental guidelines to protect the fragile ecosystems and wildlife. Visitors should respect the rules and regulations in place to ensure the preservation of these pristine environments.

In summary, South Georgia and the South Sandwich Islands offer a unique opportunity to experience untouched nature, incredible wildlife, and remote landscapes. These destinations are ideal for nature enthusiasts, wildlife lovers, and those seeking a sense of adventure in some of the most remote parts of the world.

            ',
                'currency' => 'Pound sterling',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '240V, 50Hz',
                'active' => false,
                'sortOrder' => 217,
            ],
            [
                'countryCode' => 'KR',
                'countryName' => 'South Korea',
                'regionCode' => 'ASIA',
                'capital' => 'Seoul',
                'shortDescription' => '
            South Korea is a dynamic country that seamlessly blends ancient traditions with modern innovation. From bustling cities like Seoul to beautiful natural landscapes, South Korea offers a rich cultural experience, vibrant food scene, fascinating history, and unique opportunities to explore ancient palaces, temples, and traditional markets, making it an ideal destination for those seeking a blend of tradition and modernity.
            ',
                'longDescription' => '
            South Korea, officially known as the Republic of Korea, is a vibrant and culturally rich country located in East Asia. Here is some travel guide information about South Korea:

South Korea is famous for its unique blend of traditional and modern attractions. The country is known for its bustling cities, stunning landscapes, rich history, delicious cuisine, and technological advancements. It offers a diverse range of experiences, from exploring ancient palaces and temples to enjoying vibrant nightlife and shopping districts.

Seoul, the capital city, is a must-visit destination. It is a modern metropolis with towering skyscrapers, lively street markets, and a thriving K-pop culture. Visitors can explore historical landmarks such as Gyeongbokgung Palace, visit bustling neighborhoods like Myeongdong for shopping and street food, and experience the vibrant nightlife of Gangnam.

Another popular city is Busan, located on the southeastern coast. It is known for its beautiful beaches, including Haeundae and Gwangalli, as well as its vibrant seafood markets, such as Jagalchi Market. Busan also offers cultural attractions like the Gamcheon Cultural Village and the stunning Beomeosa Temple.

Jeju Island, located off the southern coast, is a popular tourist destination known for its natural beauty. It is home to stunning volcanic landscapes, pristine beaches, and unique attractions such as the UNESCO World Heritage Site Jeju Volcanic Island and Lava Tubes. Jeju Island is a great place for outdoor activities like hiking, exploring lava caves, and enjoying the local cuisine.

Visitors to South Korea should also explore the country\'s rich cultural heritage. They can visit historic sites such as the ancient city of Gyeongju, which is filled with historical relics and UNESCO World Heritage Sites. The traditional village of Hanok in Bukchon, Seoul, offers a glimpse into the country\'s traditional architecture and way of life.

In summary, South Korea offers a captivating blend of tradition and modernity. From its vibrant cities to its natural wonders, there is something for everyone to enjoy. Whether it\'s exploring historical landmarks, indulging in delicious cuisine, or immersing oneself in the dynamic K-pop culture, South Korea provides a memorable travel experience.
            ',
                'currency' => 'South Korean won',
                'language' => 'Korean',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on CDMA and GSM networks. 3G is available.',
                'electricity' => '220V, 60Hz',
                'active' => false,
                'sortOrder' => 218,
            ],
            [
                'countryCode' => 'SS',
                'countryName' => 'South Sudan',
                'regionCode' => 'AFRICA',
                'capital' => 'Juba',
                'shortDescription' => '
            South Sudan is a country with a diverse cultural heritage and breathtaking natural beauty, including vast savannahs, wildlife reserves, and the magnificent Nile River. Despite its challenges, South Sudan offers visitors the opportunity to experience authentic tribal cultures, witness incredible wildlife, and explore unspoiled landscapes, making it a destination for adventure seekers and those interested in cultural exploration.
            ',
                'longDescription' => '
            South Sudan is a landlocked country located in East-Central Africa. Here is some travel guide information about South Sudan:

South Sudan is known for its vast and diverse landscapes, rich cultural heritage, and wildlife. The country offers a unique and off-the-beaten-path travel experience for adventurous explorers.

Juba, the capital city, is a vibrant and bustling city with a mix of modern and traditional elements. Visitors can explore the local markets, visit historical sites such as the Juba Cathedral and the South Sudan National Museum, and experience the lively street life.

For nature enthusiasts, the Boma National Park is a must-visit destination. It is one of the largest wildlife reserves in Africa, home to a variety of wildlife including elephants, giraffes, lions, and numerous bird species. Visitors can embark on safari tours, enjoy bird watching, and experience the raw beauty of South Sudan\'s natural landscapes.

The town of Nimule, located near the border with Uganda, offers opportunities for outdoor activities and wildlife encounters. The Nimule National Park is home to diverse flora and fauna, including elephants, hippos, crocodiles, and antelopes. Visitors can enjoy guided nature walks, boat trips along the Nile River, and camping in the wilderness.

South Sudan also has a rich cultural heritage with over 60 ethnic groups. Visitors can immerse themselves in the local cultures and traditions by visiting remote villages, attending cultural events, and interacting with the local communities. The Dinka and Nuer tribes are particularly renowned for their cultural practices and vibrant traditional ceremonies.

It is important to note that South Sudan is a developing country with ongoing political and security challenges. Before planning a trip, it is advisable to check the travel advisories and consult with local authorities or travel agencies for the latest information and guidance.

In summary, South Sudan offers unique opportunities for adventurous travelers to explore its diverse landscapes, encounter wildlife, and engage with local cultures. It is a destination for those seeking off-the-beaten-path experiences and an appreciation of Africa\'s raw beauty and cultural heritage.
            ',
                'currency' => 'South Sudanese pound',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 219,
            ],
            [
                'countryCode' => 'ES',
                'countryName' => 'Spain',
                'regionCode' => 'EUROPE',
                'capital' => 'Madrid',
                'shortDescription' => '
            Spain is a vibrant and diverse country known for its rich history, stunning architecture, and vibrant culture. From the lively streets of Barcelona and Madrid to the sun-soaked beaches of the Mediterranean and the charming towns of Andalusia, Spain offers visitors a mix of cultural experiences, delicious cuisine, and breathtaking landscapes that make it a must-visit destination for travelers.
            ',
                'longDescription' => '
            Spain is a country located in southwestern Europe, occupying the majority of the Iberian Peninsula. Here is some travel guide information about Spain:

Spain is famous for its rich history, diverse culture, stunning landscapes, and vibrant cities. From ancient monuments to beautiful beaches, there is something for every traveler in Spain.

One of the top destinations in Spain is Barcelona, known for its unique architecture, including the famous works of Antoni Gaudí such as the Sagrada Familia and Park Güell. Barcelona offers a vibrant atmosphere, beautiful beaches, and a thriving culinary scene.

Madrid, the capital city of Spain, is another must-visit location. It is home to world-class museums like the Prado Museum, vibrant markets like Mercado de San Miguel, and beautiful parks like Retiro Park. Madrid is also known for its lively nightlife and traditional Spanish cuisine.

Seville, located in the southern region of Andalusia, is famous for its Moorish architecture, flamenco dancing, and vibrant festivals like the Feria de Abril. The Alcazar of Seville, a UNESCO World Heritage site, and the Gothic Seville Cathedral are among the city\'s main attractions.

Beyond the cities, Spain offers stunning natural landscapes. The Costa del Sol and Costa Brava are renowned for their picturesque beaches, while the Pyrenees and Sierra Nevada mountains attract outdoor enthusiasts for hiking, skiing, and mountaineering.

Spain is also known for its diverse cuisine and regional specialties. From paella in Valencia to tapas in the Basque Country, food lovers will find a wide variety of flavors and culinary experiences across the country. Spanish wines, particularly those from regions like Rioja and Ribera del Duero, are also highly regarded.

In summary, Spain is a country with a rich cultural heritage, diverse landscapes, and a vibrant atmosphere. Whether you\'re interested in history, art, food, or outdoor adventures, Spain offers a wide range of experiences for travelers to enjoy.

            ',
                'currency' => 'Euro',
                'language' => 'Spanish, Catalan, Galician, Basque',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 220,
            ],
            [
                'countryCode' => 'LK',
                'countryName' => 'Sri Lanka',
                'regionCode' => 'ASIA',
                'capital' => 'Colombo',
                'shortDescription' => '
            Sri Lanka, known as the "Pearl of the Indian Ocean," is a tropical paradise with stunning beaches, lush landscapes, and ancient cultural sites. Visitors can explore ancient cities like Sigiriya, relax on beautiful beaches in Bentota, and encounter wildlife in national parks, making Sri Lanka a captivating destination for those seeking a blend of natural beauty, cultural heritage, and warm hospitality.
            ',
                'longDescription' => '
            Sri Lanka, officially known as the Democratic Socialist Republic of Sri Lanka, is a beautiful island country located in South Asia. Here is some travel guide information about Sri Lanka:

Sri Lanka is famous for its stunning natural landscapes, rich history, vibrant culture, and warm hospitality. The country offers a diverse range of attractions, from pristine beaches and lush tea plantations to ancient ruins and wildlife-rich national parks.

One of the top destinations in Sri Lanka is the cultural triangle, which includes the ancient cities of Anuradhapura, Polonnaruwa, and Sigiriya. These UNESCO World Heritage sites showcase impressive ruins, such as ancient temples, palaces, and giant stone statues. The iconic Sigiriya Rock Fortress, with its breathtaking views, is a must-visit attraction.

The city of Kandy is another popular destination, known for its sacred Buddhist sites and the Temple of the Tooth Relic, which houses a tooth relic of Lord Buddha. Kandy is also famous for its annual Esala Perahera, a grand procession with beautifully adorned elephants, dancers, and musicians.

For nature lovers, Sri Lanka offers an abundance of natural beauty. The hill country, including places like Nuwara Eliya and Ella, is known for its scenic landscapes, tea plantations, and mist-covered mountains. The stunning beaches in places like Mirissa, Unawatuna, and Arugam Bay offer opportunities for relaxation, water sports, and whale watching.

Wildlife enthusiasts should not miss a visit to Yala National Park, home to a variety of wildlife species, including elephants, leopards, and birds. Other national parks like Udawalawe and Minneriya also offer incredible wildlife experiences.

Sri Lanka\'s cuisine is diverse and flavorful, with influences from Indian, Malay, and Dutch cuisines. Don\'t forget to try traditional dishes like rice and curry, hoppers, and kottu roti. The country is also known for its high-quality tea, so a visit to a tea estate for a tea tasting experience is highly recommended.

In summary, Sri Lanka is a country that offers a blend of natural beauty, cultural heritage, and warm hospitality. Whether you\'re exploring ancient ruins, relaxing on beautiful beaches, or embarking on wildlife safaris, Sri Lanka promises a memorable travel experience.

            ',
                'currency' => 'Sri Lankan rupee',
                'language' => 'Sinhala, Tamil',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 221,
            ],
            [
                'countryCode' => 'SD',
                'countryName' => 'Sudan',
                'regionCode' => 'AFRICA',
                'capital' => 'Khartoum',
                'shortDescription' => '
            Sudan, the largest country in Africa, offers a rich tapestry of history, culture, and natural wonders. From the ancient pyramids of Meroe and the bustling markets of Khartoum to the vast expanse of the Sahara Desert and the lush landscapes of the Nile River, Sudan is a destination for adventurers and history enthusiasts seeking unique experiences off the beaten path.
            ',
                'longDescription' => '
            Sudan, officially known as the Republic of the Sudan, is a country located in Northeast Africa. Here is some travel guide information about Sudan:

Sudan is famous for its rich history, diverse culture, and remarkable archaeological sites. It is home to ancient civilizations, such as the Nubian and Kushite kingdoms, which have left behind impressive ruins and monuments.

One of the top destinations in Sudan is the city of Khartoum, the capital and largest city of the country. Khartoum offers a mix of modern and traditional elements, with attractions like the National Museum, which houses a collection of ancient artifacts and archaeological treasures. The confluence of the Blue Nile and White Nile rivers, known as the "Mogran," is another notable sight in Khartoum.

For history enthusiasts, the UNESCO World Heritage Site of Meroe is a must-visit. Located north of Khartoum, Meroe is an ancient city that was once the capital of the Kingdom of Kush. It is renowned for its pyramids, which are smaller but similar in design to the Egyptian pyramids.

The Nubian Desert in northern Sudan offers unique landscapes and the opportunity for desert adventures. Visitors can explore the rugged terrain, sand dunes, and ancient rock art found in this region. The Bayuda Desert and the Meroe Desert are particularly popular for their scenic beauty.

Sudan is also known for its vibrant markets, where you can experience the local culture and find traditional handicrafts, spices, and textiles. The Omdurman Market in Khartoum is a bustling market that offers a wide range of products, from food items to souvenirs.

In terms of natural beauty, Sudan has several national parks and nature reserves worth exploring. Dinder National Park, located near the Ethiopian border, is known for its diverse wildlife, including elephants, giraffes, and antelopes. The Red Sea coastline of Sudan is also a popular destination for diving and snorkeling, with coral reefs and abundant marine life.

It\'s important to note that Sudan has a diverse cultural heritage, with various ethnic groups and traditions. Interacting with the local people and learning about their customs and way of life can greatly enhance your travel experience.

In summary, Sudan offers a unique blend of historical sites, natural wonders, and cultural experiences. From ancient ruins to vibrant markets and stunning landscapes, Sudan has much to offer to those seeking an off-the-beaten-path destination with a rich history and culture.

            ',
                'currency' => 'Sudanese pound',
                'language' => 'Arabic, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => '',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 222,
            ],
            [
                'countryCode' => 'SR',
                'countryName' => 'Suriname',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Paramaribo',
                'shortDescription' => '
            Suriname, located on the northeastern coast of South America, is a hidden gem with a mix of diverse cultures, pristine rainforests, and stunning biodiversity. Visitors can explore the historic capital of Paramaribo, embark on river cruises through the Amazon rainforest, and encounter unique wildlife, making Suriname a paradise for nature lovers and adventure seekers.
            ',
                'longDescription' => '
            Suriname, officially known as the Republic of Suriname, is a small country located on the northeastern coast of South America. Here is some travel guide information about Suriname:

Suriname is famous for its incredible biodiversity, pristine rainforests, and cultural diversity. It offers a unique blend of Caribbean, African, Indian, and Dutch influences, making it a fascinating destination to explore.

One of the top attractions in Suriname is the capital city, Paramaribo. Paramaribo is a UNESCO World Heritage Site and showcases a charming mix of colonial architecture, vibrant markets, and cultural landmarks. The historic inner city is filled with wooden buildings that reflect the Dutch colonial past.

Nature lovers will find Suriname to be a paradise. The country is home to vast expanses of untouched rainforests and pristine rivers, offering ample opportunities for wildlife spotting and outdoor adventures. The Central Suriname Nature Reserve, a UNESCO World Heritage Site, is a prime destination for hiking, birdwatching, and exploring the lush rainforest.

The Maroon communities of Suriname provide an immersive cultural experience. The Maroons are descendants of African slaves who escaped from plantations and formed their own societies in the interior rainforests. Visiting these communities offers a glimpse into their unique traditions, music, dance, and cuisine.

The Surinamese cuisine is a delightful blend of various influences. Make sure to try traditional dishes such as roti, pom, and bakabana (fried plantains). The bustling local markets, such as the Central Market in Paramaribo, are great places to sample local flavors and buy fresh produce.

The Galibi Nature Reserve, located on the northeastern coast, is famous for its sea turtle nesting sites. Visitors have the opportunity to witness the incredible sight of turtles coming ashore to lay their eggs, particularly the endangered giant leatherback turtles.

Suriname is also known for its vibrant festivals and cultural events. The most popular festival is "Keti Koti," which commemorates the emancipation of slaves. During this celebration, you can experience lively parades, traditional music, dance performances, and delicious Surinamese cuisine.

For adventure seekers, the interior of Suriname offers opportunities for river cruises, jungle treks, and exploration of remote villages. The Suriname River, one of the country\'s major waterways, is a popular spot for boat trips and fishing.

In summary, Suriname is a hidden gem in South America, offering a rich blend of natural beauty, cultural diversity, and unique experiences. From its vibrant capital city to its pristine rainforests and cultural communities, Suriname has much to offer to travelers seeking an off-the-beaten-path destination with a wealth of history, nature, and cultural immersion.
            ',
                'currency' => 'Surinamese dollar',
                'language' => 'Dutch',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '127V, 60Hz',
                'active' => false,
                'sortOrder' => 223,
            ],
            [
                'countryCode' => 'SJ',
                'countryName' => 'Svalbard and Jan Mayen',
                'regionCode' => 'EUROPE',
                'capital' => 'Longyearbyen',
                'shortDescription' => '
            Svalbard and Jan Mayen, located in the Arctic Ocean, offer extraordinary landscapes of glaciers, fjords, and wildlife, providing a unique experience for adventurous travelers. Visitors can witness polar bears in their natural habitat, explore remote wilderness, and marvel at the stunning northern lights, making it a destination of unparalleled beauty and wilderness.
            ',
                'longDescription' => 'Svalbard and Jan Mayen is a country located in Europe. It is known for its lush greenery, vibrant culture, and rich history. Svalbard and Jan Mayen offers a range of outdoor activities, including trekking, hiking, and birdwatching.',
                'currency' => 'Norwegian krone',
                'language' => 'Norwegian',
                'atm' => '',
                'mobilePhone' => '',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 224,
            ],
            [
                'countryCode' => 'SZ',
                'countryName' => 'Swaziland',
                'regionCode' => 'AFRICA',
                'capital' => 'Mbabane',
                'shortDescription' => '
            Swaziland, officially known as Eswatini, is a small landlocked kingdom in Southern Africa known for its rich cultural heritage and natural beauty. Visitors can immerse themselves in Swazi traditions, witness vibrant festivals, and explore the country\'s diverse landscapes, including wildlife reserves, stunning mountains, and picturesque valleys, making it an ideal destination for cultural and nature enthusiasts alike.
            ',
                'longDescription' => '
            Swaziland, officially known as the Kingdom of Eswatini, is a small landlocked country located in Southern Africa. Please note that as of September 2018, the country\'s official name changed to Eswatini, but some references may still use the former name, Swaziland. Here is some travel guide information about Eswatini:

Eswatini is famous for its stunning landscapes, rich cultural heritage, and vibrant traditions. It offers visitors a chance to experience the authentic African way of life in a country that has preserved its cultural identity.

One of the top attractions in Eswatini is the beautiful Ezulwini Valley, also known as the "Valley of Heaven." This scenic valley is home to lush green landscapes, rolling hills, and traditional Swazi villages. Visitors can explore craft markets, visit cultural centers, and learn about the Swazi way of life.

Mlilwane Wildlife Sanctuary is another popular destination in Eswatini. Located in the Ezulwini Valley, this sanctuary offers a unique opportunity to see a variety of wildlife up close, including zebras, wildebeests, antelopes, and an abundance of bird species. The sanctuary provides walking and biking trails, making it an ideal place for nature enthusiasts.

For those interested in history and culture, the Mantenga Cultural Village is a must-visit. This living museum showcases traditional Swazi culture, including traditional dances, music, crafts, and a replica of a Swazi homestead. Visitors can learn about the customs, traditions, and beliefs of the Swazi people.

Hlane Royal National Park is a haven for wildlife enthusiasts. It is home to a diverse range of animals, including elephants, lions, rhinos, and giraffes. Visitors can enjoy guided game drives, walking safaris, and birdwatching excursions in this pristine wilderness.

The Ngwenya Glass Factory is a unique attraction in Eswatini. It is known for its exquisite hand-blown glassware, and visitors can witness the skilled artisans in action. The factory offers guided tours where you can learn about the glass-making process and purchase beautiful glassware as souvenirs.

Eswatini hosts several vibrant cultural festivals throughout the year, including the Umhlanga Reed Dance and the Incwala Ceremony. These festivals provide a fascinating glimpse into Swazi traditions and are accompanied by traditional music, dance performances, and colorful ceremonies.

Outdoor enthusiasts can explore the scenic hiking trails in Malolotja Nature Reserve, which is known for its breathtaking mountain views, waterfalls, and diverse plant and animal life. The reserve offers various hiking trails catering to different fitness levels.

The local cuisine of Eswatini features dishes such as "sishwala" (maize porridge), "sukuma wiki" (a vegetable dish), and "braaied" (barbecued) meats. Visitors can enjoy these traditional flavors at local restaurants and markets.

In summary, Eswatini offers a blend of natural beauty, cultural experiences, and wildlife encounters. With its warm and welcoming people, stunning landscapes, and vibrant traditions, Eswatini provides a unique travel experience that showcases the best of Africa\'s rich heritage.
            ',
                'currency' => 'Swazi lilangeni',
                'language' => 'Swati, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 225,
            ],
            [
                'countryCode' => 'SE',
                'countryName' => 'Sweden',
                'regionCode' => 'EUROPE',
                'capital' => 'Stockholm',
                'shortDescription' => '
            Sweden, located in Northern Europe, is renowned for its captivating blend of stunning natural landscapes, vibrant cities, and a strong emphasis on quality of life. Visitors can enjoy the majestic beauty of the Swedish countryside, explore the vibrant streets of Stockholm, experience the unique cultural traditions, and indulge in outdoor activities such as hiking, skiing, and kayaking, making it an ideal destination for nature lovers, culture enthusiasts, and adventure seekers alike.
            ',
                'longDescription' => '
            Sweden, officially known as the Kingdom of Sweden, is a country located in Northern Europe. Here is some information about Sweden:

Geography: Sweden is the largest country in Northern Europe and is bordered by Norway to the west, Finland to the northeast, and Denmark to the southwest. It has a diverse landscape that includes forests, lakes, mountains, and coastline along the Baltic Sea.

Stockholm: The capital and largest city of Sweden is Stockholm, situated on 14 islands connected by bridges. Stockholm is known for its beautiful architecture, historic sites, cultural attractions, and vibrant nightlife. The city is home to the Royal Palace, Gamla Stan (Old Town), the Vasa Museum, and many other museums and galleries.

Nature and Outdoor Activities: Sweden is renowned for its stunning natural landscapes, which offer a wide range of outdoor activities. The country has numerous national parks, including Abisko National Park, Sarek National Park, and Tyresta National Park, where visitors can explore hiking trails, go skiing, enjoy wildlife spotting, and experience the unique Swedish wilderness.

Midsummer Celebration: Midsummer is one of the most important holidays in Sweden. It is celebrated on the weekend closest to the summer solstice (around June 21st) and involves traditional rituals, such as raising maypoles, dancing, singing, and feasting on herring and other traditional foods.

Nordic Cuisine: Swedish cuisine is known for its simplicity, use of local ingredients, and focus on fresh seafood, berries, and game meat. Traditional Swedish dishes include meatballs (köttbullar), gravlax (cured salmon), smörgåsbord (a buffet-style meal with a variety of dishes), and cinnamon buns (kanelbullar).

Swedish Design: Sweden has a strong design culture and is famous for its modern and minimalist design aesthetics. Swedish design influences can be seen in architecture, furniture, fashion, and home decor. Stockholm Design Week and the Stockholm Furniture & Light Fair are important events that showcase Swedish design.

Music and Festivals: Sweden has made significant contributions to the music industry, particularly in pop music. The annual Eurovision Song Contest is popular in Sweden, and Swedish artists have achieved international success. The country also hosts several music festivals, including the Way Out West festival in Gothenburg and the Bråvalla Festival.

Social Welfare: Sweden is known for its high standard of living, social welfare system, and emphasis on equality and sustainability. The country has a well-developed healthcare system, free education, and a strong commitment to environmental conservation.

Swedish Language: The official language of Sweden is Swedish. However, many Swedes also speak English, making it easy for visitors to communicate.

In summary, Sweden offers a mix of natural beauty, cultural heritage, and modern design. Whether you\'re exploring the picturesque archipelago of Stockholm, enjoying outdoor activities in the Swedish countryside, or immersing yourself in Swedish traditions and cuisine, Sweden has something to offer for every traveler.
            ',
                'currency' => 'Swedish krona',
                'language' => 'Swedish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 226,
            ],
            [
                'countryCode' => 'CH',
                'countryName' => 'Switzerland',
                'regionCode' => 'EUROPE',
                'capital' => 'Bern',
                'shortDescription' => '
            Switzerland, nestled in the heart of the Alps, offers breathtaking mountain landscapes, pristine lakes, charming towns, and world-renowned Swiss hospitality. Visitors can enjoy a wide range of outdoor activities, indulge in delicious Swiss cuisine, explore picturesque cities like Zurich and Geneva, and experience the country\'s rich cultural heritage, making it a must-visit destination for nature lovers, adventure enthusiasts, and those seeking a blend of natural beauty and cultural charm.
            ',
                'longDescription' => '
            Switzerland, officially known as the Swiss Confederation, is a landlocked country located in Central Europe. Here is some information about Switzerland:

Geography: Switzerland is known for its stunning landscapes, including the Swiss Alps, beautiful lakes, and picturesque villages. It is bordered by Germany to the north, France to the west, Italy to the south, and Austria and Liechtenstein to the east.

Cities: Switzerland is home to several notable cities, including Zurich, Geneva, Basel, Bern, and Lucerne. Each city has its own unique charm and offers a mix of cultural attractions, historical sites, and natural beauty.

Alps and Outdoor Activities: The Swiss Alps are a major draw for visitors to Switzerland. The country is known for its excellent skiing and snowboarding opportunities during the winter months, with popular destinations such as Zermatt, St. Moritz, and Verbier. In the summer, the Alps offer opportunities for hiking, mountaineering, and mountain biking.

Swiss Watches and Chocolate: Switzerland is famous for its precision watches and luxurious timepieces. Swiss watchmaking is renowned for its craftsmanship and quality. Additionally, Switzerland is known for its high-quality chocolate production. Swiss chocolate is beloved worldwide, and visitors can explore chocolate factories and indulge in various chocolate-related experiences.

Multilingual and Cultural Diversity: Switzerland has four national languages: German, French, Italian, and Romansh. The country\'s linguistic diversity is reflective of its cultural richness. Each region has its own distinct traditions, customs, and cuisine, adding to the multicultural fabric of the country.

Neutrality and International Organizations: Switzerland is known for its long-standing policy of neutrality and is home to many international organizations. Geneva, in particular, hosts several important global institutions, including the United Nations Office at Geneva, the International Red Cross and Red Crescent Museum, and the World Health Organization.

Scenic Train Journeys: Switzerland boasts a well-developed and efficient railway system. Traveling by train is not only convenient but also offers breathtaking scenic routes. The Glacier Express and the Bernina Express are two iconic train journeys that traverse spectacular landscapes, including mountain passes, glaciers, and charming Swiss villages.

Cheese and Fondue: Switzerland is renowned for its cheese production. Swiss cheeses, such as Emmental and Gruyère, are enjoyed worldwide. Cheese lovers can visit cheese factories and experience cheese tastings. Swiss fondue, a traditional dish of melted cheese, is also a popular culinary experience.

Environmental Stewardship: Switzerland takes great pride in its commitment to environmental conservation. The country is known for its clean and well-preserved natural spaces. Switzerland has an extensive network of hiking trails and nature parks, allowing visitors to explore its pristine landscapes.
V
In summary, Switzerland offers a combination of natural beauty, cultural diversity, and precision craftsmanship. Whether you\'re exploring the majestic Swiss Alps, enjoying the vibrant cities, indulging in Swiss chocolate and cheese, or experiencing Swiss hospitality, Switzerland offers a wealth of experiences for every traveler.
            ',
                'currency' => 'Swiss franc',
                'language' => 'German, French, Italian, Romansh',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 227,
            ],
            [
                'countryCode' => 'SY',
                'countryName' => 'Syria',
                'regionCode' => 'ASIA',
                'capital' => 'Damascus',
                'shortDescription' => '
            Due to the ongoing conflict and safety concerns, the situation in Syria is highly volatile, and non-essential travel to the country is strongly discouraged. It is important to prioritize personal safety and follow travel advisories issued by your government.
            ',
                'longDescription' => '
            Syria, officially known as the Syrian Arab Republic, is a country located in Western Asia. Here is some information about Syria:

Geography: Syria shares borders with several countries, including Turkey to the north, Iraq to the east, Jordan to the south, Israel and Lebanon to the southwest, and the Mediterranean Sea to the west. The country has diverse landscapes, including the fertile plains of the west, the deserts of the east, and the mountain ranges of the coastal region.

History: Syria has a rich historical and cultural heritage. The region has been inhabited for thousands of years, with civilizations such as the ancient Mesopotamians, Hittites, Assyrians, and Persians leaving their mark. Syria was also part of the Roman Empire, Byzantine Empire, and the Islamic Caliphates. It has been shaped by various empires and dynasties throughout history.

Capital: The capital city of Syria is Damascus, one of the oldest continuously inhabited cities in the world. Damascus has a rich history and is known for its ancient architecture, bustling markets, and religious sites, including the Umayyad Mosque.

Languages: Arabic is the official language of Syria, and it is widely spoken. Kurdish, Armenian, and Circassian are also spoken by minority communities.

Culture: Syrian culture is diverse and influenced by various civilizations and ethnic groups. The country has a rich tradition of literature, music, and arts. Syrian cuisine is known for its flavorful dishes, such as kebabs, falafel, and meze (a variety of small dishes served as appetizers).

Conflict: Syria has faced significant challenges due to an ongoing civil war that began in 2011. The conflict has resulted in immense human suffering and displacement, with millions of Syrians affected. The situation has had a profound impact on the country\'s infrastructure, economy, and social fabric.

Historical Sites: Syria is home to numerous historical and archaeological sites. Palmyra, an ancient city located in the Syrian desert, was a major trading hub and is renowned for its well-preserved ruins. The ancient cities of Aleppo and Bosra, as well as the Krak des Chevaliers castle, are also notable UNESCO World Heritage sites.

Natural Beauty: Despite the conflict, Syria has areas of natural beauty. The coastal region offers picturesque Mediterranean beaches, and the country has several national parks and nature reserves with diverse ecosystems.

It\'s important to note that the situation in Syria remains complex and volatile due to the ongoing conflict. Travel to Syria is not recommended, and it\'s crucial to stay informed about the current situation through reliable sources if you are planning to visit or have concerns regarding the country.

            ',
                'currency' => 'Syrian pound',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks. 3G is available.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 228,
            ],
            [
                'countryCode' => 'TW',
                'countryName' => 'Taiwan',
                'regionCode' => 'ASIA',
                'capital' => 'Taipei',
                'shortDescription' => '
            Taiwan is a vibrant island nation known for its stunning natural landscapes, bustling cities, and rich cultural heritage. From the bustling streets of Taipei to the scenic beauty of Taroko Gorge and Sun Moon Lake, Taiwan offers a unique blend of modernity and traditional charm, making it a must-visit destination for food lovers, nature enthusiasts, and those interested in exploring East Asian culture.
            ',
                'longDescription' => '
            Taiwan, officially known as the Republic of China (ROC), is an island nation located in East Asia. Here is some information about Taiwan:

Geography: Taiwan is situated in the western Pacific Ocean and is separated from the southeastern coast of China by the Taiwan Strait. The island is characterized by mountainous terrain, with the Central Mountain Range running from north to south. Taiwan also has beautiful coastal areas and is known for its hot springs and scenic landscapes.

Capital: The capital and largest city of Taiwan is Taipei. Taipei is a vibrant metropolis known for its modern architecture, bustling night markets, and iconic landmarks such as Taipei 101, once the tallest building in the world.

Political Status: Taiwan\'s political status is complex. It operates as a separate political entity with its own government, constitution, and military, but it is not universally recognized as a sovereign state. China considers Taiwan as part of its territory, while Taiwan considers itself an independent and sovereign nation.

Culture: Taiwanese culture is a blend of indigenous traditions, Chinese influences, and Western influences. The people of Taiwan are known for their hospitality, delicious cuisine, and rich cultural heritage. Taiwanese cuisine, including iconic dishes like beef noodle soup, bubble tea, and stinky tofu, is highly regarded and enjoyed worldwide.

Economy: Taiwan has a highly developed and export-oriented economy. It is known for its advanced technology industry, particularly in electronics and information technology. Companies such as Acer, Asus, and HTC have gained international recognition. Taiwan is also a major player in global semiconductor manufacturing.

Tourism: Taiwan offers a wide range of attractions for visitors. The island boasts stunning natural landscapes, including Taroko Gorge, Sun Moon Lake, and Kenting National Park. Its cities are vibrant and modern, with historical sites like the Chiang Kai-shek Memorial Hall and Longshan Temple. Taiwan is also famous for its festivals, such as the Lantern Festival and Dragon Boat Festival, which showcase its cultural traditions.

Language: Mandarin Chinese is the official language of Taiwan, and it is widely spoken. Taiwanese Hokkien, also known as Taiwanese, is also spoken by many people in Taiwan. English is commonly understood in major cities and tourist areas.

Traveling to Taiwan: Taiwan is a popular tourist destination, offering a blend of natural beauty, cultural experiences, and culinary delights. Visitors can enjoy exploring vibrant cities, relaxing on picturesque beaches, hiking in stunning national parks, and immersing themselves in the rich local culture. It\'s important to check travel advisories and requirements before visiting Taiwan, including visa regulations and health and safety guidelines.

Please note that the political status of Taiwan is a complex and sensitive issue, and it\'s important to respect different perspectives when discussing the topic.
            ',
                'currency' => 'New Taiwan dollar',
                'language' => 'Mandarin',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on GSM 900/1800 networks.',
                'electricity' => '110V, 60Hz',
                'active' => false,
                'sortOrder' => 229,
            ],
            [
                'countryCode' => 'TJ',
                'countryName' => 'Tajikistan',
                'regionCode' => 'ASIA',
                'capital' => 'Dushanbe',
                'shortDescription' => '
            Tajikistan is a hidden gem in Central Asia, offering breathtaking mountain landscapes, pristine lakes, and ancient Silk Road cities. With its rugged beauty, adventurous treks, and warm hospitality, Tajikistan is a paradise for outdoor enthusiasts and culture seekers, providing a unique and off-the-beaten-path travel experience.
            ',
                'longDescription' => '
            Tajikistan, officially known as the Republic of Tajikistan, is a landlocked country located in Central Asia. Here is some information about Tajikistan:

Geography: Tajikistan is bordered by Afghanistan to the south, China to the east, Kyrgyzstan to the north, and Uzbekistan to the west. It is a mountainous country, with more than 90% of its territory covered by mountains. The Pamir Mountains, known as the "Roof of the World," dominate the eastern part of the country, and the Fann Mountains offer stunning landscapes and opportunities for outdoor activities.

Capital: The capital and largest city of Tajikistan is Dushanbe. Situated in the western part of the country, Dushanbe is a vibrant city with a mix of Soviet-era architecture and modern developments. It is home to various museums, parks, and markets that showcase Tajik culture.

Culture: Tajikistan has a rich cultural heritage influenced by Persian, Islamic, and Central Asian traditions. The Tajik people are known for their hospitality, craftsmanship, and love for music and dance. Traditional arts and crafts, such as carpet weaving, metalwork, and pottery, are still practiced and celebrated.

Language: Tajik, a dialect of Persian (Farsi), is the official language of Tajikistan. Russian is also widely spoken, especially in urban areas and among older generations. English is not widely spoken, but some younger people and those involved in the tourism industry may have basic knowledge of English.

Religion: Islam is the dominant religion in Tajikistan, with the majority of the population practicing Sunni Islam. However, the country embraces religious diversity, and other religious and ethnic groups, such as Ismaili Muslims, Orthodox Christians, and followers of Zoroastrianism, also coexist.

Economy: Tajikistan is primarily an agricultural country, with cotton, fruits, and vegetables being major agricultural products. It also has significant mineral resources, including aluminum, gold, and silver. Hydroelectric power is an important sector, with numerous dams and power plants harnessing the energy of the country\'s rivers.

Tourism: Tajikistan is gaining recognition as an emerging tourist destination, offering breathtaking landscapes, cultural experiences, and adventure opportunities. The Pamir Highway, one of the world\'s highest and most scenic roads, attracts adventurous travelers. The country also boasts stunning lakes, such as Iskanderkul and Karakul, where visitors can enjoy hiking, trekking, and camping. Cultural attractions include ancient Silk Road cities, mosques, mausoleums, and traditional festivals.

Traveling to Tajikistan: Before traveling to Tajikistan, it is essential to check travel advisories and ensure you have the necessary visas and permits. The country has a visa requirement for most visitors. The best time to visit is during the summer months, from June to September, when the weather is generally pleasant for outdoor activities. It\'s recommended to dress modestly and respect local customs and traditions during your stay.

Please note that while Tajikistan is generally a safe destination, it\'s always important to stay informed about the current situation and follow any travel advisories or guidelines issued by your home country\'s government.
            ',
                'currency' => 'Tajikistani somoni',
                'language' => 'Tajik, Russian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 230,
            ],
            [
                'countryCode' => 'TZ',
                'countryName' => 'Tanzania',
                'regionCode' => 'AFRICA',
                'capital' => 'Dodoma',
                'shortDescription' => '
            Tanzania is a captivating destination known for its diverse wildlife, stunning landscapes, and the iconic Serengeti National Park. From the majestic Mount Kilimanjaro to the incredible wildlife encounters in the Ngorongoro Crater and the pristine beaches of Zanzibar, Tanzania offers an unforgettable safari experience and an opportunity to immerse oneself in the rich African culture and natural beauty of the country.
            ',
                'longDescription' => '
            Tanzania, officially known as the United Republic of Tanzania, is a country located in East Africa. Here is some information about Tanzania:

Geography: Tanzania is bordered by Kenya and Uganda to the north, Rwanda, Burundi, and the Democratic Republic of the Congo to the west, and Zambia, Malawi, and Mozambique to the south. It also has a coastline along the Indian Ocean to the east. The country is known for its diverse geography, which includes the Serengeti Plains, Mount Kilimanjaro (the highest peak in Africa), the Ngorongoro Crater, and the tropical beaches of Zanzibar.

Capital: The capital city of Tanzania is Dodoma. However, Dar es Salaam is the largest city and the major economic hub of the country. Dar es Salaam is located on the eastern coast and serves as Tanzania\'s main port and business center.

Culture: Tanzania is home to a rich and diverse cultural heritage with over 120 ethnic groups. The largest ethnic groups include the Sukuma, Chagga, Haya, and Nyamwezi. The country\'s culture is influenced by Bantu, Arab, and European traditions. Tanzanian music, dance, and art are vibrant and reflect the country\s cultural diversity.

Language: The official languages of Tanzania are Swahili and English. Swahili, also known as Kiswahili, is widely spoken throughout the country and serves as a lingua franca among different ethnic groups. English is also widely used, particularly in business, education, and government institutions.

Religion: The majority of Tanzanians practice Christianity, Islam, or traditional African religions. Christianity and Islam are the largest religions in the country, with a significant portion of the population practicing a blend of the two or incorporating traditional beliefs into their religious practices.

Wildlife and Conservation: Tanzania is renowned for its wildlife and is home to some of Africa\'s most famous national parks and game reserves, including the Serengeti National Park, Ngorongoro Conservation Area, and Selous Game Reserve. These areas offer opportunities for wildlife safaris and witnessing the annual wildebeest migration. Tanzania is committed to wildlife conservation and has implemented various measures to protect its diverse flora and fauna.

Economy: The Tanzanian economy is based mainly on agriculture, which employs a significant portion of the population. The country is a major producer of crops such as coffee, tea, cotton, tobacco, and various fruits. Tanzania also has significant mineral resources, including gold, diamonds, and natural gas. Tourism is an important sector, attracting visitors from around the world to experience its wildlife, natural landscapes, and cultural heritage.

Tourism: Tanzania is a popular destination for tourists seeking wildlife safaris, mountain climbing, and beach holidays. In addition to its national parks, the country offers opportunities for trekking on Mount Kilimanjaro, exploring the historical and cultural sites of Zanzibar, and visiting the vibrant markets and bustling streets of cities like Arusha and Stone Town.

Traveling to Tanzania: Before traveling to Tanzania, it is advisable to check travel advisories and ensure you have the necessary visas and permits. It\'s also recommended to take precautions regarding health and safety, such as obtaining appropriate vaccinations and following local guidelines. The best time to visit Tanzania depends on the specific activities and regions you plan to explore, as different areas may have varying weather patterns and wildlife movements.

Please note that while Tanzania is generally a safe destination for travelers, it\'s always important to stay informed about the current situation and follow any travel advisories or guidelines issued by your home country\s government.
            ',
                'currency' => 'Tanzanian shilling',
                'language' => 'Swahili, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 231,
            ],
            [
                'countryCode' => 'TH',
                'countryName' => 'Thailand',
                'regionCode' => 'ASIA',
                'capital' => 'Bangkok',
                'shortDescription' => '
            Thailand is a vibrant country renowned for its breathtaking beaches, bustling cities, and rich cultural heritage. From exploring ancient temples in Bangkok to relaxing on the idyllic islands of Phuket and Krabi, Thailand offers a perfect blend of adventure, relaxation, and culinary delights, making it a must-visit destination for travelers seeking diverse experiences and warm hospitality.
            ',
                'longDescription' => '
            Thailand, officially known as the Kingdom of Thailand, is a country located in Southeast Asia. Here is some information about Thailand:

Geography: Thailand shares borders with Myanmar (Burma) to the northwest, Laos to the northeast, Cambodia to the southeast, and Malaysia to the south. It has coastlines along the Gulf of Thailand and the Andaman Sea. The country is known for its diverse landscapes, which include mountains, plains, and tropical beaches.

Capital: The capital city of Thailand is Bangkok. It is the country\'s largest city and serves as the political, economic, and cultural center of Thailand. Bangkok is known for its vibrant street life, ornate temples, and bustling markets.

Culture: Thai culture is influenced by Buddhism, which is the predominant religion in the country. The Thai people are known for their warm hospitality, respect for elders, and adherence to traditional customs and rituals. Thai cuisine, with its unique flavors and spices, is popular worldwide.

Language: The official language of Thailand is Thai. It is the native language of the Thai people and is spoken by the majority of the population. English is also widely spoken in tourist areas and by those working in the hospitality and service industries.

Religion: Buddhism is the primary religion in Thailand, with a large majority of the population practicing Theravada Buddhism. The country is dotted with beautiful temples, or "wats," which serve as important religious and cultural landmarks.

Monarchy: Thailand is a constitutional monarchy, with the King as the head of state. The Thai royal family is highly revered and holds a significant place in Thai society.

Tourism: Thailand is a popular tourist destination known for its rich cultural heritage, stunning beaches, and vibrant cities. The country offers a wide range of attractions, including ancient temples, historical sites, tropical islands, and bustling markets. Popular tourist destinations include Bangkok, Chiang Mai, Phuket, Krabi, and Pattaya.

Food: Thai cuisine is renowned for its flavors, spices, and balance of sweet, sour, spicy, and salty tastes. Traditional Thai dishes such as Pad Thai, Green Curry, and Tom Yum soup have gained international popularity. Street food stalls and local markets are common, offering a wide variety of delicious and affordable food.

Economy: Thailand has a diverse economy with agriculture, manufacturing, and services sectors contributing to its growth. The country is a major exporter of goods such as rice, textiles, electronics, and automobiles. Tourism also plays a significant role in the economy, attracting millions of visitors each year.

Traveling to Thailand: Before traveling to Thailand, it is important to check travel advisories and ensure you have the necessary visas and permits. Thailand has a well-developed tourism infrastructure, including airports, hotels, and transportation networks. It\'s advisable to respect local customs and traditions, particularly when visiting temples and religious sites. Thailand has a tropical climate, and the best time to visit may vary depending on the region and activities you plan to engage in.

It\'s important to stay informed about the current situation and follow any travel advisories or guidelines issued by your home country\'s government or relevant authorities.
            ',
                'currency' => 'Thai baht',
                'language' => 'Thai',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 232,
            ],
            [
                'countryCode' => 'TG',
                'countryName' => 'Togo',
                'regionCode' => 'AFRICA',
                'capital' => 'Lomé',
                'shortDescription' => '
            Togo, located in West Africa, offers visitors a mix of cultural richness, stunning landscapes, and vibrant markets. Travelers can explore the bustling capital city of Lomé, experience traditional voodoo ceremonies, and discover the country\'s beautiful beaches and national parks, making it an ideal destination for those seeking an authentic African experience.
            ',
                'longDescription' => '
            Togo, officially known as the Togolese Republic, is a country located in West Africa. Here is some information about Togo:

Geography: Togo is bordered by Ghana to the west, Benin to the east, Burkina Faso to the north, and has a coastline along the Gulf of Guinea to the south. The country is relatively small in size and has a diverse landscape that includes coastal plains, plateaus, and hilly regions. The capital city of Togo is Lomé, situated along the coast.

Culture: Togo is home to a rich cultural heritage influenced by various ethnic groups. The official language is French, and several indigenous languages are spoken throughout the country. Togolese culture is known for its traditional music, dance, and art, which reflect the customs and traditions of different ethnic communities.

People: The majority of the population in Togo consists of ethnic groups such as the Ewe, Kabre, and Kabye. The Togolese people are known for their warmth, hospitality, and strong sense of community.

Economy: Agriculture is the mainstay of Togo\'s economy, with the majority of the population engaged in subsistence farming. Major crops include cocoa, coffee, cotton, yams, and corn. Togo also has significant phosphate deposits, which contribute to its mineral exports. The country is working towards diversifying its economy and developing sectors such as tourism and services.

Politics: Togo is a presidential republic with a multi-party political system. The President is both the head of state and the head of government. Political stability has been a significant focus for Togo in recent years, with efforts made towards democratic reforms and inclusive governance.

Tourism: Togo offers a range of attractions for visitors. The country\'s coastline is known for its beautiful beaches and fishing villages, while the hilly regions offer opportunities for hiking and exploring nature. Lomé, the capital city, features colonial-era buildings, vibrant markets, and a lively atmosphere. Other notable sites include the Togoville village on Lake Togo and the Koutammakou region, which is a UNESCO World Heritage Site known for its traditional mud houses.

Religion: The majority of the population in Togo practices indigenous beliefs, while Christianity and Islam are also followed by significant portions of the population.

Transportation: Togo has a transportation network that includes roads, railways, and airports. Lomé-Tokoin Airport is the main international airport in the country, connecting Togo with various destinations. Public transportation options within the country include taxis, minibusses, and motorcycle taxis known as "zémidjans."

It\'s important to stay informed about the current situation and follow any travel advisories or guidelines issued by your home country\'s government or relevant authorities before planning a trip to Togo.
            ',
                'currency' => 'West African CFA franc',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 233,
            ],
            [
                'countryCode' => 'TK',
                'countryName' => 'Tokelau',
                'regionCode' => 'OCEANIA',
                'capital' => 'Nukunonu',
                'shortDescription' => '
            Tokelau is a remote and idyllic territory in the South Pacific known for its pristine beaches, crystal-clear waters, and rich marine life. With its tranquil and untouched atmosphere, Tokelau offers a peaceful escape from the modern world, perfect for those seeking a serene tropical getaway and an opportunity to immerse themselves in nature.
            ',
                'longDescription' => '
            Tokelau is a group of three coral atolls located in the South Pacific Ocean. It is a dependent territory of New Zealand. Here are some key details about Tokelau:

Geography: Tokelau consists of three main atolls named Atafu, Nukunonu, and Fakaofo. The atolls are situated approximately halfway between Hawaii and New Zealand. Tokelau is known for its beautiful coral reefs, lagoons, and sandy beaches. The land area is relatively small, with a total landmass of about 10 square kilometers.

Population: The population of Tokelau is relatively small, with around 1,500 residents. The majority of the population is of Tokelauan descent and the official languages are Tokelauan and English. Many Tokelauans also live in New Zealand, and there is a significant diaspora community there.

Culture: Tokelauan culture is strongly influenced by Polynesian traditions. The people of Tokelau have a close connection to the ocean and rely on fishing and agriculture for their livelihood. The community is known for its strong family ties and communal values. Traditional arts and crafts, such as weaving and wood carving, are still practiced in Tokelau.

Governance: Tokelau is a non-self-governing territory under the sovereignty of New Zealand. It has a political system that combines traditional governance structures with democratic processes. The Administrator of Tokelau represents the government of New Zealand in the territory.

Economy: The economy of Tokelau is primarily based on subsistence agriculture, fishing, and remittances from Tokelauans living abroad. Coconut, pandanus, and breadfruit are important crops, while fishing provides a significant source of protein and income. Tokelau uses the New Zealand dollar as its currency and relies on financial assistance from New Zealand for its public services and infrastructure development.

Transportation: Due to its remote location, there are no airports or airstrips in Tokelau. The primary mode of transportation between the atolls is by boat. Tokelau operates its own inter-island vessel, the MV Mataliki, which connects the three atolls.

Internet Domain: Tokelau has its own internet country code top-level domain (ccTLD), which is .tk. This domain is popular worldwide due to its availability and is often used for various online purposes.

Environment: Tokelau is vulnerable to the impacts of climate change, including rising sea levels and increased frequency of storms. The territory is actively involved in efforts to mitigate and adapt to these challenges.

It\'s important to note that Tokelau is a remote and isolated destination. Travel to Tokelau is limited and requires careful planning and coordination. Visitors typically require permission and must arrange transportation through specific charter services.
            ',
                'currency' => 'New Zealand dollar',
                'language' => 'Tokelauan, English',
                'atm' => 'ATMs are not available.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 234,
            ],
            [
                'countryCode' => 'TO',
                'countryName' => 'Tonga',
                'regionCode' => 'OCEANIA',
                'capital' => 'Nukuʻalofa',
                'shortDescription' => '
            Tonga is a Polynesian kingdom consisting of 170 islands known for their stunning beaches, vibrant coral reefs, and warm hospitality. Visitors can enjoy activities such as snorkeling, diving, whale watching, and exploring traditional Tongan culture, making it an ideal destination for nature lovers and those seeking an authentic Pacific island experience.
            ',
                'longDescription' => '
            Tonga, officially known as the Kingdom of Tonga, is a Polynesian country located in the South Pacific Ocean. Here are some key details about Tonga:

Geography: Tonga is an archipelago consisting of 169 islands, of which 36 are inhabited. The country is located east of Fiji, south of Samoa, and west of Niue. The islands are known for their stunning beaches, coral reefs, and lush tropical vegetation. The capital city and largest urban center is Nuku\'alofa, situated on the main island of Tongatapu.

Population: Tonga has a population of around 100,000 people. The majority of the population is of Tongan ethnicity, and Tongan, an Austronesian language, is the official language. English is widely spoken and taught in schools. The culture of Tonga is deeply rooted in traditional Polynesian customs, with a strong emphasis on respect for family, community, and hierarchy.

Culture: Tongan culture is vibrant and rich, with traditional music, dance, and art playing a significant role. The Tongan language, known for its poetic nature, is preserved and celebrated. The country is also famous for its skilled handicrafts, including woven mats, tapa cloth, and wood carvings. Rugby is the most popular sport in Tonga, and the national rugby team, known as the "Ikale Tahi," enjoys strong support.

Government: Tonga is a constitutional monarchy with a parliamentary system. The reigning monarch is King Tupou VI, who is the head of state. The Prime Minister is the head of government and is elected by the members of the Tongan parliament. Tonga has a mixed legal system, incorporating elements of British common law and traditional customary law.

Economy: The economy of Tonga is primarily based on agriculture, fishing, and remittances from Tongan communities overseas. Agriculture products include coconuts, bananas, vanilla, and root crops. Tourism is also an important sector, with visitors attracted to the natural beauty, cultural heritage, and water-based activities such as snorkeling and diving. The country is working on developing renewable energy sources to reduce reliance on imported fossil fuels.

Transportation: Tonga has international airports on the main islands of Tongatapu and Vava\'u, which receive flights from various Pacific countries. Domestic flights connect the different islands within Tonga. The inter-island transportation mainly relies on boats and ferries. Road networks are present on the main islands, but public transportation options are limited.

Education and Health: Tonga has a well-established education system with high literacy rates. The healthcare system is primarily government-funded and provides essential medical services. However, specialized medical care may require travel to other countries, such as New Zealand or Australia.

Environment: Tonga is known for its pristine marine ecosystems and is a popular destination for diving and snorkeling enthusiasts. The country is part of the "Polynesian Triangle," which is a region with high biodiversity and unique marine life. However, like many Pacific island nations, Tonga is vulnerable to the impacts of climate change, including rising sea levels and extreme weather events.
V
It\'s important to note that Tonga is a relatively remote destination, and travel arrangements should be made in advance. Visitors are advised to respect local customs and traditions during their stay in Tonga.
            ',
                'currency' => 'Tongan paʻanga',
                'language' => 'Tongan, English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900 MHz networks.',
                'electricity' => '240V, 50Hz',
                'active' => false,
                'sortOrder' => 235,
            ],
            [
                'countryCode' => 'TT',
                'countryName' => 'Trinidad and Tobago',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Port of Spain',
                'shortDescription' => '
            Trinidad and Tobago is a dual-island nation in the Caribbean known for its lively carnival celebrations, vibrant cultural scene, and stunning beaches. Visitors can enjoy a mix of cultural diversity, delicious cuisine, and outdoor adventures, including exploring tropical rainforests, diving along colorful coral reefs, and experiencing the energetic music and dance traditions of the region.
            ',
                'longDescription' => '
            Trinidad and Tobago is a twin-island nation located in the southern Caribbean Sea, just off the coast of Venezuela. Here are some key details about Trinidad and Tobago:

Geography: Trinidad is the larger and more populous island, while Tobago is smaller and less populated. The country is known for its diverse landscapes, including rolling hills, lush rainforests, beautiful beaches, and the Caroni Swamp, home to a variety of bird species. The capital city, Port of Spain, is located on the island of Trinidad.

Population: Trinidad and Tobago has a population of approximately 1.4 million people. The population is ethnically diverse, with people of African, Indian, Chinese, and European descent, among others. English is the official language, but Trinidad and Tobago is known for its vibrant multilingual culture, with various local dialects and languages spoken.

Culture: The culture of Trinidad and Tobago is a rich blend of African, Indian, European, and indigenous influences. The country is famous for its Carnival celebration, a vibrant and colorful festival featuring music, dance, elaborate costumes, and street parades. Calypso and soca music are integral to the cultural scene, and steelpan, a musical instrument invented in Trinidad and Tobago, is a national symbol.

Government: Trinidad and Tobago is a parliamentary democracy, with a president as the head of state and a prime minister as the head of government. The country operates under a two-party political system. The legal system is based on English common law, with influences from French civil law and local statutes.

Economy: Trinidad and Tobago has a mixed economy, with significant sectors including energy, petrochemicals, manufacturing, services, and tourism. The country is known for its petroleum and natural gas resources, which have been important drivers of the economy. Tourism is also a significant industry, with visitors attracted to the beaches, diving spots, historical sites, and cultural events.

Transportation: Trinidad and Tobago has several airports, including the Piarco International Airport in Trinidad and the Arthur Napoleon Raymond Robinson International Airport in Tobago, which handle both domestic and international flights. The islands are connected by air and sea transportation. Public transportation options include buses, taxis, and ferries.

Education and Healthcare: Trinidad and Tobago has a well-developed education system, with free primary and secondary education provided by the government. The country has several universities and tertiary institutions. Healthcare services are provided by both public and private sectors, with public healthcare available through the Ministry of Health and regional health authorities.

Environment: Trinidad and Tobago is known for its biodiversity and natural beauty. The islands are home to diverse ecosystems, including coral reefs, mangroves, and tropical rainforests. The country has made efforts to protect its environment and has established nature reserves and protected areas. However, like many countries, Trinidad and Tobago faces challenges related to deforestation, pollution, and climate change.

Trinidad and Tobago is a popular tourist destination, offering a unique blend of cultural experiences, natural attractions, and warm hospitality. Visitors can enjoy activities such as exploring the islands\' natural landscapes, experiencing local cuisine, attending festivals and events, and engaging in water sports.
            ',
                'currency' => 'Trinidad and Tobago dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 1800 MHz networks. 3G is available.',
                'electricity' => '115/230V, 60Hz',
                'active' => false,
                'sortOrder' => 236,
            ],
            [
                'countryCode' => 'TN',
                'countryName' => 'Tunisia',
                'regionCode' => 'AFRICA',
                'capital' => 'Tunis',
                'shortDescription' => '
            Tunisia is a North African country that offers a unique blend of ancient history, Mediterranean charm, and stunning landscapes. From exploring the ruins of Carthage and the medinas of Tunis to relaxing on the beautiful beaches of Hammamet and experiencing the Sahara Desert, visitors can immerse themselves in rich cultural heritage and enjoy diverse travel experiences in Tunisia.
            ',
                'longDescription' => '

            ',
                'currency' => 'Tunisian dinar',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 237,
            ],
            [
                'countryCode' => 'TR',
                'countryName' => 'Turkey',
                'regionCode' => 'ASIA',
                'capital' => 'Ankara',
                'shortDescription' => '
            Turkey is a captivating country that bridges Europe and Asia, offering a rich tapestry of history, culture, and natural beauty. With iconic landmarks such as Istanbul\'s Hagia Sophia and the ancient city of Ephesus, breathtaking landscapes like Cappadocia\'s fairy chimneys, and delectable cuisine, Turkey provides a memorable travel experience filled with architectural wonders, vibrant markets, and warm hospitality.
            ',
                'longDescription' => '
            Tunisia, officially known as the Republic of Tunisia, is a country located in North Africa. Here are some key details about Tunisia:

Geography: Tunisia is situated on the Mediterranean coast of North Africa and is bordered by Algeria to the west and Libya to the southeast. The country has a diverse landscape, including coastal plains, the Atlas Mountains in the north, and the Sahara Desert in the south. The capital city is Tunis.

Population: Tunisia has a population of approximately 11.8 million people. The majority of the population is Arab-Berber, and Arabic is the official language. French is also widely spoken, and English is commonly understood in tourist areas.

Culture: Tunisia has a rich cultural heritage influenced by its history and various civilizations. The country is known for its vibrant traditional music, including genres like Malouf and Mezoued. Traditional crafts such as pottery, carpet weaving, and ceramics are also an important part of the cultural identity. The local cuisine features a blend of Mediterranean and North African flavors, with dishes like couscous, tagine, and brik being popular.

History: Tunisia has a long and diverse history, with influences from Phoenician, Roman, Arab, Ottoman, and French civilizations, among others. The country gained independence from France in 1956 and has since undergone significant political and social changes. Tunisia played a pivotal role in the Arab Spring protests of 2010-2011, which led to the overthrow of the long-standing regime and paved the way for democratic reforms.

Government: Tunisia is a parliamentary republic with a multi-party system. The president serves as the head of state, while the prime minister is the head of government. The country has made efforts to establish a democratic system following the Arab Spring, and Tunisia is often seen as a model for political transition in the region.

Economy: Tunisia has a mixed economy, with key sectors including manufacturing, services, agriculture, and tourism. The country has a diverse industrial base, producing textiles, automotive parts, electronics, and agricultural products. Tourism is an important source of revenue, with visitors attracted to Tunisia\'s historical sites, coastal resorts, and desert landscapes. The government has implemented economic reforms to attract foreign investment and promote private sector growth.

Education and Healthcare: Tunisia has a relatively well-developed education system, with primary and secondary education being compulsory and provided by the government. The country has several universities and institutes of higher education. Healthcare services are provided by both public and private sectors, and Tunisia has made significant progress in improving healthcare access and infrastructure.

Tourism: Tunisia is known for its tourism industry, offering a range of attractions for visitors. Popular tourist destinations include the ancient city of Carthage, the Roman amphitheater of El Jem, the coastal resort of Hammamet, and the desert oasis of Douz. The country\'s rich history, cultural heritage, and diverse landscapes make it a compelling destination for travelers.

Tunisia is a country with a unique blend of history, culture, and natural beauty. Its strategic location on the Mediterranean coast, combined with its warm hospitality and diverse attractions, make it a fascinating destination for exploration and discovery.
            ',
                'currency' => 'Turkish lira',
                'language' => 'Turkish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 238,
            ],
            [
                'countryCode' => 'TM',
                'countryName' => 'Turkmenistan',
                'regionCode' => 'ASIA',
                'capital' => 'Ashgabat',
                'shortDescription' => '
            Turkmenistan is a country located in Central Asia, known for its unique blend of ancient traditions and modern architecture. With attractions like the ancient city of Merv, the stunning landscapes of the Karakum Desert, and the grandiose buildings of Ashgabat, visitors can immerse themselves in the country\'s rich history and cultural heritage, while also experiencing its warm hospitality and authentic local traditions.
            ',
                'longDescription' => 'Turkmenistan is a country located in Asia. It is known for its lush greenery, vibrant culture, and rich history. Turkmenistan offers a range of outdoor activities, including trekking, hiking, and birdwatching.',
                'currency' => 'Turkmenistan manat',
                'language' => 'Turkmen, Russian',
                'atm' => 'ATMs are available in major towns.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 239,
            ],
            [
                'countryCode' => 'TC',
                'countryName' => 'Turks and Caicos Islands',
                'regionCode' => 'CARIBBEAN',
                'capital' => 'Cockburn Town',
                'shortDescription' => '
            The Turks and Caicos Islands are a tropical paradise in the Caribbean, famous for their pristine white sandy beaches, crystal-clear turquoise waters, and abundant marine life. With world-class resorts, water sports activities, and opportunities for relaxation and rejuvenation, the islands offer an idyllic getaway for beach lovers, snorkelers, divers, and those seeking a luxurious and tranquil vacation.
            ',
                'longDescription' => '
            The Turks and Caicos Islands are a British Overseas Territory located in the Caribbean. Here are some key details about the Turks and Caicos Islands:

Geography: The Turks and Caicos Islands consist of a group of islands and cays in the Atlantic Ocean, southeast of the Bahamas. The islands are divided into two main groups: the Turks Islands and the Caicos Islands. The capital and largest city is Cockburn Town, located on the island of Grand Turk.

Population: The population of the Turks and Caicos Islands is approximately 38,000 people. The majority of the population is of African descent, with a mix of other ethnic groups such as Europeans and Hispanics. The official language is English.

Culture: The culture of the Turks and Caicos Islands is influenced by its history and diverse population. The traditional music of the islands is known as "ripsaw," which features the use of a handsaw as a musical instrument. The islands also have a vibrant art scene, with local artists creating paintings, sculptures, and crafts inspired by the natural beauty of the islands. Seafood is a significant part of the local cuisine, with dishes like conch fritters and grilled fish being popular.

Economy: The economy of the Turks and Caicos Islands relies heavily on tourism, offshore financial services, and fishing. The islands are known for their pristine beaches, clear turquoise waters, and abundant marine life, attracting tourists from around the world. The financial services sector provides a significant contribution to the economy, with the islands serving as an offshore financial center. Agriculture, primarily focused on fishing and conch farming, is also important.

Government: The Turks and Caicos Islands are a British Overseas Territory, which means they have a governor appointed by the British Crown who represents the Queen. The islands have a parliamentary system of government with a House of Assembly. While the islands have some degree of self-governance, the British government retains responsibility for defense and foreign affairs.

Tourism: The Turks and Caicos Islands are renowned for their stunning natural beauty, including world-class beaches, coral reefs, and crystal-clear waters. Tourism is the primary industry, with visitors coming for beach vacations, snorkeling, scuba diving, and water sports. The islands offer a range of luxury resorts, villas, and eco-friendly accommodations to cater to different types of travelers.

Nature and Wildlife: The Turks and Caicos Islands are home to a diverse range of flora and fauna, both on land and in the surrounding marine environment. The islands are known for their pristine coral reefs, which provide excellent opportunities for snorkeling and diving. The islands also serve as an important breeding ground for various bird species, including the endangered Turks and Caicos Islands rock iguana.

The Turks and Caicos Islands offer a tranquil and picturesque Caribbean getaway with beautiful beaches, rich marine life, and a welcoming atmosphere. Whether you\'re looking to relax on the beach, explore the underwater world, or immerse yourself in the unique culture, the Turks and Caicos Islands have something to offer for every visitor.
            ',
                'currency' => 'United States dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900 MHz networks.',
                'electricity' => '120V, 60Hz',
                'active' => false,
                'sortOrder' => 240,
            ],
            [
                'countryCode' => 'TV',
                'countryName' => 'Tuvalu',
                'regionCode' => 'OCEANIA',
                'capital' => 'Funafuti',
                'shortDescription' => '
            Tuvalu is a remote island nation in the Pacific Ocean known for its stunning turquoise waters, palm-fringed beaches, and vibrant marine life. With its untouched natural beauty and warm hospitality of the locals, Tuvalu offers a unique opportunity to experience an off-the-beaten-path destination, indulge in water activities like snorkeling and diving, and immerse oneself in the laid-back island lifestyle.
            ',
                'longDescription' => '
            Tuvalu is a small island nation located in the Pacific Ocean, composed of nine coral atolls. Known for its pristine beaches, crystal-clear turquoise waters, and abundant marine life, Tuvalu is a paradise for beach lovers and nature enthusiasts. Its remote location and limited tourism infrastructure contribute to its untouched beauty and serene atmosphere.

The capital of Tuvalu is Funafuti, a picturesque atoll with stunning lagoons and white sandy beaches. Visitors can explore the local markets, admire traditional handicrafts, and witness the vibrant culture of the Tuvaluan people. Nanumea, another atoll in Tuvalu, is renowned for its beautiful coral reefs, offering excellent opportunities for snorkeling and diving. The marine life here is diverse and colorful, including tropical fish, sea turtles, and vibrant coral formations.

Nui, the third-largest atoll in Tuvalu, is a tranquil destination known for its secluded beaches and peaceful ambiance. It is an ideal spot for relaxation, beachcombing, and enjoying the breathtaking sunsets. Whether you\'re looking to unwind on pristine beaches, immerse yourself in the local culture, or explore the vibrant marine life, Tuvalu offers a unique and authentic travel experience. With its untouched natural beauty and warm hospitality of the locals, Tuvalu provides a peaceful escape from the hustle and bustle of modern life.
            ',
                'currency' => 'Tuvaluan dollar',
                'language' => 'Tuvaluan, English',
                'atm' => 'ATMs are available in major towns.',
                'mobilePhone' => 'Mobile phones work on 900 MHz networks.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 241,
            ],
            [
                'countryCode' => 'UG',
                'countryName' => 'Uganda',
                'regionCode' => 'AFRICA',
                'capital' => 'Kampala',
                'shortDescription' => '
            Uganda, located in East Africa, is a country known for its stunning natural beauty, diverse wildlife, and warm hospitality. Visitors should visit Uganda to embark on unforgettable safaris, witness the majestic mountain gorillas in their natural habitat, explore picturesque national parks, and experience the vibrant culture and traditions of the Ugandan people.
            ',
                'longDescription' => '
            Tuvalu, officially known as the Tuvalu Islands, is a small island nation located in the Pacific Ocean. Here are some key details about Tuvalu:

Geography: Tuvalu is composed of nine coral atolls and reef islands, situated in the western part of the Pacific Ocean. The country is located about midway between Hawaii and Australia. The nine islands are Funafuti, Nanumea, Nanumanga, Niutao, Nui, Nukufetau, Nukulaelae, Vaitupu, and Niulakita. Funafuti is the capital and largest city, where the government offices are located.

Population: Tuvalu has a population of approximately 11,000 people. The people of Tuvalu are predominantly Polynesian, with Tuvaluan being the main language spoken. English is also widely understood and used for official purposes.

Culture: The culture of Tuvalu is deeply rooted in Polynesian traditions. Music, dance, and storytelling play important roles in Tuvaluan culture, with traditional songs and dances often performed during special occasions and festivals. Traditional crafts, such as weaving and wood carving, are also practiced. The people of Tuvalu have a close connection to the ocean and rely on fishing and subsistence farming for their livelihood.

Environment: Tuvalu is known for its vulnerability to climate change, particularly the rising sea levels that threaten the low-lying islands. The nation has been actively advocating for global action on climate change and has become a symbol for the impacts of rising sea levels on small island states. The country is committed to sustainable development and the preservation of its natural resources.

Economy: The economy of Tuvalu is primarily based on subsistence farming, fishing, and remittances from Tuvaluans working abroad. The nation has limited natural resources and relies heavily on external aid and revenue generated from the sale of fishing licenses to foreign vessels. Tuvalu has also established a trust fund called the Tuvalu Trust Fund, which provides a source of income to support the country\'s development.

Government: Tuvalu is a parliamentary democracy and a constitutional monarchy, with the British monarch as the ceremonial head of state. The government is headed by a prime minister who is elected by the Parliament. The country is a member of the Commonwealth of Nations.

Tourism: Although tourism is a growing industry in Tuvalu, the country receives a relatively small number of visitors each year. Travelers are attracted to the pristine natural environment, including white sandy beaches, turquoise waters, and vibrant coral reefs. The traditional way of life and unique culture of the Tuvaluan people also provide a distinctive experience for visitors.

Tuvalu is a remote and peaceful nation that offers visitors a glimpse into the Polynesian way of life. Its natural beauty, friendly people, and cultural heritage make it a unique destination for those seeking an authentic Pacific island experience.
            ',
                'currency' => 'Ugandan shilling',
                'language' => 'English, Swahili',
                'atm' => 'ATMs are available in major towns.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '240V, 50Hz',
                'active' => false,
                'sortOrder' => 242,
            ],
            [
                'countryCode' => 'UA',
                'countryName' => 'Ukraine',
                'regionCode' => 'EUROPE',
                'capital' => 'Kyiv',
                'shortDescription' => '
            Ukraine, located in Eastern Europe, offers a rich blend of history, culture, and natural beauty. Visitors should explore its charming cities, such as Kyiv and Lviv, admire its architectural wonders, delve into its fascinating history, and enjoy the breathtaking landscapes, including the Carpathian Mountains and the Black Sea coast.
            ',
                'longDescription' => '
            Ukraine, officially known as Ukraine, is a country located in Eastern Europe. Here are some key details about Ukraine:

Geography: Ukraine is the largest country entirely within Europe, bordered by several countries including Russia to the east, Belarus to the north, Poland, Slovakia, and Hungary to the west, and Romania and Moldova to the southwest. The country has diverse geographical features, including the Carpathian Mountains in the west, the vast fertile plains of the central region, and the Black Sea coastline in the south.

Population: Ukraine has a population of over 44 million people. The majority of the population consists of ethnic Ukrainians, with significant minority groups including Russians, Belarusians, and others. Ukrainian is the official language, while Russian and other minority languages are also spoken.

History: Ukraine has a rich and complex history. It has been inhabited since ancient times and has been part of various empires and kingdoms throughout history. Ukraine declared its independence from the Soviet Union in 1991 and has since undergone significant political, social, and economic changes.

Culture: Ukrainian culture is diverse and influenced by its history, traditions, and geographical location. It is known for its folk traditions, music, dance, and literature. The country has a rich cultural heritage, with notable contributions in fields such as literature, art, music, and cinema. Traditional Ukrainian cuisine, which includes dishes like borscht, varenyky (dumplings), and salo (cured pork fat), is also well-regarded.

Economy: Ukraine has a mixed economy, with agriculture, industry, and services sectors playing important roles. It is known for its fertile soil, making it one of the largest agricultural producers in Europe. Industries such as steel, energy, aerospace, and IT also contribute to the economy. However, Ukraine faces economic challenges and has been working towards implementing reforms and attracting foreign investment.

Government: Ukraine is a unitary semi-presidential republic with a democratic system of government. The President is the head of state, while the Prime Minister is the head of government. The Parliament, known as the Verkhovna Rada, is responsible for passing laws and exercising legislative power.

Tourism: Ukraine has a rich cultural and historical heritage, with numerous tourist attractions. Cities like Kyiv, Lviv, and Odessa offer a mix of stunning architecture, historical sites, vibrant nightlife, and cultural events. The Carpathian Mountains are popular for outdoor activities such as hiking and skiing, while the Black Sea coast attracts tourists with its resorts and beaches. Chernobyl, the site of the infamous nuclear disaster, also draws visitors interested in history and the eerie atmosphere.

Ukraine\'s geographical diversity, cultural heritage, and historical significance make it an intriguing destination for travelers interested in exploring Eastern Europe. Its blend of ancient traditions, modern cities, and natural beauty offers a wide range of experiences for visitors.
            ',
                'currency' => 'Ukrainian hryvnia',
                'language' => 'Ukrainian',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks. 3G is available.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 243,
            ],
            [
                'countryCode' => 'AE',
                'countryName' => 'United Arab Emirates',
                'regionCode' => 'ASIA',
                'capital' => 'Abu Dhabi',
                'shortDescription' => '
            The United Arab Emirates is a Middle Eastern country known for its stunning modern architecture, luxury shopping, and vibrant nightlife. Visitors should explore the iconic city of Dubai, home to the world\'s tallest building, Burj Khalifa, and experience the traditional Emirati culture in Abu Dhabi, including the grand Sheikh Zayed Mosque, making it a perfect destination for both leisure and adventure.
            ',
                'longDescription' => '
            The United Arab Emirates (UAE) is a country located in the Middle East, on the Arabian Peninsula. Here are some key details about the UAE:

Geography: The UAE is bordered by Oman to the east and Saudi Arabia to the south and shares maritime borders with Qatar and Iran. It is situated on the southeastern coast of the Arabian Peninsula and is primarily a desert country. The UAE\'s coastline stretches along the Persian Gulf and the Gulf of Oman.

Emirates: The UAE is a federation of seven emirates, which are individual states with their own ruling families. The seven emirates are Abu Dhabi, Dubai, Sharjah, Ajman, Umm Al Quwain, Ras Al Khaimah, and Fujairah. Abu Dhabi serves as the capital city of the UAE.

Population: The UAE has a diverse population composed of both Emirati citizens and expatriate residents from various countries. The population is estimated to be around 10 million, with Emiratis forming a minority. The majority of the population consists of expatriate workers from countries such as India, Pakistan, Bangladesh, and the Philippines.

Culture: The UAE\'s culture is influenced by its Islamic heritage, Bedouin traditions, and a blend of modern influences. Islam is the official religion, and Arabic is the official language. The UAE has a rich cultural heritage that includes traditional music, dance, handicrafts, and cuisine. Traditional Emirati dishes, such as machboos (a spiced rice dish with meat), harees (a wheat and meat porridge), and luqaimat (sweet dumplings), are popular.

Economy: The UAE has a highly developed economy driven by oil and gas resources, as well as a diversified range of sectors such as finance, tourism, real estate, construction, and logistics. The country is known for its modern infrastructure, skyscrapers, and luxury developments. Dubai, in particular, has emerged as a global business and tourism hub.

Government: The UAE is a federation of absolute monarchies, with each emirate having its own ruler. The President of the UAE is elected by the Supreme Council of Rulers, which consists of the rulers of the seven emirates. The Prime Minister of the UAE is the ruler of Dubai. The UAE follows a federal system with powers delegated to the individual emirates, while certain matters such as defense and foreign affairs are under federal jurisdiction.

Landmarks and Attractions: The UAE is known for its iconic landmarks and modern architecture. The Burj Khalifa in Dubai, the tallest building in the world, is a popular tourist attraction. Other notable landmarks include the Sheikh Zayed Grand Mosque in Abu Dhabi, the Palm Jumeirah, the Burj Al Arab, and the Dubai Mall. The UAE also has stunning desert landscapes, offering opportunities for desert safaris and outdoor activities.

Tourism: The UAE has become a popular tourist destination, attracting visitors from around the world. Dubai, in particular, offers a range of attractions, including luxury shopping, world-class hotels, entertainment venues, and vibrant nightlife. Abu Dhabi is known for its cultural landmarks, museums, and the Formula 1 Grand Prix. The UAE\'s coastal areas provide opportunities for water sports, beach activities, and island getaways.

The United Arab Emirates has transformed rapidly over the past few decades, establishing itself as a global player in various sectors. Its blend of modernity, rich cultural heritage, and impressive infrastructure makes it an appealing destination for business, leisure, and cultural experiences.
            ',
                'currency' => 'United Arab Emirates dirham',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 244,
            ],
            [
                'countryCode' => 'GB',
                'countryName' => 'United Kingdom',
                'regionCode' => 'EUROPE',
                'capital' => 'London',
                'shortDescription' => '
            The United Kingdom is a diverse country that offers a rich blend of history, culture, and natural beauty. Visitors should explore iconic landmarks like Big Ben and Buckingham Palace in London, immerse themselves in the vibrant arts and music scene, and discover the picturesque countryside of Scotland, Wales, and Northern Ireland, making it a must-visit destination for its unique blend of tradition and modernity.
            ',
                'longDescription' => '
             The United Kingdom (UK) is a fascinating country located in northwestern Europe. It consists of four constituent countries: England, Scotland, Wales, and Northern Ireland. The UK is famous for its rich history, vibrant culture, and stunning landscapes. From the bustling streets of London to the breathtaking Scottish Highlands, there is something for every traveler to explore.

London: The capital city of the UK, London, is a must-visit destination for its iconic landmarks such as the Tower of London, Buckingham Palace, and the British Museum. Immerse yourself in the vibrant atmosphere of the city, visit world-class museums and galleries, and indulge in diverse culinary experiences.

Edinburgh: The capital of Scotland, Edinburgh, is renowned for its historic charm and stunning architecture. Explore the UNESCO World Heritage-listed Old Town, visit the famous Edinburgh Castle, and witness the vibrant festivities during the annual Edinburgh Festival.

Stonehenge: Located in Wiltshire, England, Stonehenge is a prehistoric monument that continues to captivate visitors. Marvel at the mysterious stone circles and immerse yourself in the ancient history and legends surrounding this iconic site.

The Lake District: Nestled in northwest England, the Lake District National Park is a haven for nature lovers. With its picturesque lakes, rolling hills, and charming villages, it offers a perfect escape for hiking, boating, and immersing oneself in the beauty of nature.

Giant\'s Causeway: Situated in Northern Ireland, the Giant\'s Causeway is a UNESCO World Heritage site known for its unique hexagonal basalt columns. Explore the dramatic coastline, hike along stunning cliff-top trails, and uncover the myths and legends of this natural wonder.

The United Kingdom offers a blend of history, culture, and natural beauty, making it an ideal destination for travelers. Whether you are interested in exploring vibrant cities, immersing yourself in rich heritage, enjoying outdoor adventures, or experiencing the warm hospitality of the locals, the UK has something to offer for everyone. Indulge in traditional afternoon tea, immerse yourself in the vibrant theater scene, hike in breathtaking landscapes, and discover the unique charm of each region. The United Kingdom promises a memorable travel experience that combines the best of old-world charm and modern delights.
           ',
                'currency' => 'Pound sterling',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 245,
            ],
            [
                'countryCode' => 'US',
                'countryName' => 'United States',
                'regionCode' => 'NORTH_AMERICA',
                'capital' => 'Washington, D.C.',
                'shortDescription' => '
            The United States is a vast and diverse country offering a wide range of attractions and experiences. From the stunning natural landscapes of national parks like Yellowstone and the Grand Canyon to vibrant cities like New York and Los Angeles, visitors can explore diverse cultures, enjoy world-class entertainment, and discover iconic landmarks, making it an ideal destination for those seeking adventure, cultural immersion, and unforgettable experiences.
            ',
                'longDescription' => '
            The United States is a vast and diverse country located in North America. It is known for its stunning natural landscapes, vibrant cities, cultural diversity, and iconic landmarks. From the bustling streets of New York City to the breathtaking beauty of the Grand Canyon, the United States offers an incredible array of travel experiences.

New York City: The city that never sleeps, New York City, is a vibrant and iconic destination known for its towering skyscrapers, world-class museums, Broadway shows, and diverse neighborhoods like Times Square, Central Park, and the Statue of Liberty. Experience the energy and excitement of this cultural hub and indulge in its rich culinary scene.

Los Angeles: Located in California, Los Angeles is famous for its glamorous entertainment industry and stunning beaches. Explore Hollywood, stroll along the famous Walk of Fame, visit Universal Studios, and soak up the sun on the beautiful beaches of Santa Monica or Venice.

Grand Canyon: Situated in Arizona, the Grand Canyon is a natural wonder that attracts millions of visitors each year. Marvel at the immense size and beauty of the canyon, hike along its trails, or take a scenic helicopter tour to witness its breathtaking vistas.

Miami: Located in Florida, Miami is a vibrant city known for its beautiful beaches, diverse culture, and vibrant nightlife. Enjoy the warm weather, explore the art deco architecture of South Beach, and savor delicious Latin American cuisine.

Yellowstone National Park: Spanning across Wyoming, Montana, and Idaho, Yellowstone National Park is the first national park in the United States and a UNESCO World Heritage site. Discover its geothermal wonders, including the iconic Old Faithful geyser, wildlife-rich landscapes, and majestic waterfalls.

The United States offers a diverse range of attractions and experiences that cater to every traveler\'s interests. Whether you\'re seeking natural beauty, cultural immersion, adventure, or urban exploration, the US has it all. From exploring the bustling streets of iconic cities to discovering the breathtaking landscapes of its national parks, there is something for everyone. Immerse yourself in the country\'s rich history, experience its vibrant cultural scenes, indulge in its diverse cuisine, and create unforgettable memories in the land of opportunity.
            ',
                'currency' => 'United States dollar',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 850/1900 MHz networks. 3G is available.',
                'electricity' => '120V, 60Hz',
                'active' => false,
                'sortOrder' => 246,
            ],
            [
                'countryCode' => 'UY',
                'countryName' => 'Uruguay',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Montevideo',
                'shortDescription' => '
            Uruguay is a small South American country known for its beautiful beaches, charming colonial towns, and rich cultural heritage. Visitors can enjoy the relaxed atmosphere, indulge in delicious cuisine, explore historic sites like Colonia del Sacramento, and experience the vibrant nightlife of Montevideo, making it a perfect destination for those seeking a blend of natural beauty, history, and vibrant urban life.
            ',
                'longDescription' => '
            Uruguay is a small country located in South America, bordered by Brazil to the north and Argentina to the west and south. Known for its beautiful beaches, charming colonial towns, and rich cultural heritage, Uruguay offers a unique travel experience for visitors. Despite its small size, Uruguay boasts a diverse landscape that includes pristine coastlines, rolling hills, and fertile plains.

Montevideo: The capital city of Uruguay, Montevideo, is a bustling metropolis with a rich history and vibrant cultural scene. Explore its charming old town, known as Ciudad Vieja, with its colonial architecture, bustling markets, and lively street art. Enjoy the beautiful waterfront promenades, visit museums and art galleries, and immerse yourself in the local culture by attending a tango performance or indulging in traditional Uruguayan cuisine.

Punta del Este: Located on the southern coast of Uruguay, Punta del Este is a glamorous resort city known for its stunning beaches and vibrant nightlife. It attracts both local and international visitors who come to enjoy its upscale resorts, indulge in water sports, and relax on its sandy shores. Punta del Este is also famous for its iconic sculpture known as "La Mano" (The Hand) that emerges from the sand on Playa Brava.

Colonia del Sacramento: A UNESCO World Heritage site, Colonia del Sacramento is a historic city on the shores of the Rio de la Plata. Its cobblestone streets, colorful colonial buildings, and picturesque waterfront make it a popular destination for history and architecture enthusiasts. Stroll through the historic quarter, visit the lighthouse, and enjoy the charming cafes and restaurants along the riverfront.

Uruguay offers visitors a combination of natural beauty, cultural heritage, and a relaxed lifestyle. Its pristine beaches, charming towns, and warm hospitality make it an ideal destination for those seeking a laid-back and authentic travel experience. Whether you want to explore the bustling streets of Montevideo, relax on the sandy beaches of Punta del Este, or immerse yourself in the colonial charm of Colonia del Sacramento, Uruguay has something to offer for every traveler.
            ',
                'currency' => 'Uruguayan peso',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 850/1900 MHz networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 247,
            ],
            [
                'countryCode' => 'UZ',
                'countryName' => 'Uzbekistan',
                'regionCode' => 'ASIA',
                'capital' => 'Tashkent',
                'shortDescription' => '
            Uzbekistan is a Central Asian country famous for its stunning Islamic architecture, ancient Silk Road heritage, and vibrant cultural traditions. Visitors can explore the historic cities of Samarkand, Bukhara, and Khiva, marvel at the intricate tilework and majestic mosques, and immerse themselves in the rich history and hospitality of the Uzbek people, making it an ideal destination for those seeking a blend of history, culture, and adventure.
            ',
                'longDescription' => '
            Uzbekistan is a landlocked country located in Central Asia, bordered by Kazakhstan to the north, Kyrgyzstan to the northeast, Tajikistan to the southeast, Afghanistan to the south, and Turkmenistan to the southwest. It is renowned for its ancient Silk Road cities, stunning Islamic architecture, and rich cultural heritage. With its vibrant bazaars, magnificent mosques, and well-preserved historic sites, Uzbekistan offers a fascinating travel experience for history and culture enthusiasts.

Samarkand: Known as the jewel of the Silk Road, Samarkand is a city that has captivated travelers for centuries. It is home to architectural wonders such as the Registan Square, a majestic complex of madrasas adorned with intricate tile work, and the grand mausoleum of Tamerlane, Gur-e-Amir. The city\'s stunning blue-domed mosques, bustling bazaars, and the ancient Ulugh Beg Observatory are must-visit attractions that showcase the grandeur of the Timurid era.

Bukhara: Another UNESCO World Heritage site, Bukhara is one of the best-preserved historic cities in Central Asia. Its labyrinthine streets are lined with magnificent mosques, madrasas, and minarets that date back to the Islamic Golden Age. The iconic sights of Bukhara include the Kalon Mosque and Minaret, the Ark Fortress, and the beautifully tiled Poi Kalyan complex. The city\'s rich history and well-preserved architecture create a captivating atmosphere that takes visitors back in time.

Khiva: Step into a living open-air museum when you visit Khiva, a city that has remained relatively unchanged for centuries. Surrounded by massive fortress walls, the old city of Khiva is a UNESCO World Heritage site filled with stunning monuments. Explore the intricate tile work and ornate courtyards of the Khiva\'s palaces, mosques, and madrasas. The highlight of Khiva is the Itchan Kala complex, which contains numerous architectural treasures and offers a glimpse into the region\'s past.

Uzbekistan is a destination that combines history, culture, and architectural marvels. Its ancient Silk Road cities, adorned with stunning Islamic architecture and vibrant bazaars, provide a unique travel experience. Travelers can immerse themselves in the rich history and cultural heritage of Samarkand, Bukhara, and Khiva while exploring the well-preserved landmarks that have stood the test of time. Uzbekistan offers an opportunity to step back in time and witness the grandeur of the Silk Road era, making it a compelling destination for travelers seeking a blend of history, culture, and adventure.
            ',
                'currency' => 'Uzbekistani soʻm',
                'language' => 'Uzbek',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 248,
            ],
            [
                'countryCode' => 'VU',
                'countryName' => 'Vanuatu',
                'regionCode' => 'OCEANIA',
                'capital' => 'Port Vila',
                'shortDescription' => '
            Vanuatu is a tropical paradise in the South Pacific known for its pristine beaches, turquoise waters, and vibrant coral reefs. With its diverse culture, lush landscapes, and adventure opportunities such as snorkeling, diving, and volcano hiking, Vanuatu offers an unforgettable escape for nature lovers, beach enthusiasts, and those seeking a unique cultural experience.
            ',
                'longDescription' => '
            Vanuatu is a tropical paradise located in the South Pacific Ocean, northeast of Australia. Comprising of 83 islands, Vanuatu is known for its pristine beaches, crystal-clear waters, and rich cultural heritage. The country offers a diverse range of activities for travelers, from exploring active volcanoes and lush rainforests to immersing in the unique customs and traditions of the local communities. Vanuatu\'s natural beauty, warm hospitality, and adventurous spirit make it a captivating destination for nature lovers and adventure seekers alike.

Port Vila: The capital city of Vanuatu, Port Vila, is a bustling hub with a picturesque waterfront and a vibrant market. The city offers a mix of modern amenities and traditional charm, with a range of accommodations, restaurants, and shops to cater to travelers. Visit the Mele Cascades, a series of stunning waterfalls nestled in the lush rainforest just outside the city, or take a boat trip to explore the nearby Hideaway Island, known for its pristine marine life and underwater post office.

Tanna Island: Tanna Island is famous for its active volcano, Mount Yasur, which offers a mesmerizing and unique experience. Visitors can hike up to the volcano\'s rim and witness its dramatic eruptions up close. Tanna Island is also home to the fascinating Yakel village, where travelers can learn about the traditional customs and way of life of the local Yakel people. The island\'s untouched natural beauty, including beautiful beaches and lush landscapes, adds to its appeal.

Espiritu Santo: Known as the "Island of Adventure," Espiritu Santo is a paradise for divers and snorkelers. The island is renowned for its clear turquoise waters, coral reefs, and underwater wonders, including the famous SS President Coolidge wreck. Visitors can explore pristine beaches, swim in freshwater blue holes, and hike through lush jungles to discover hidden waterfalls. Espiritu Santo\'s natural beauty and sense of tranquility make it a perfect destination for relaxation and outdoor activities.

Vanuatu offers a unique blend of natural beauty, cultural heritage, and adventure. Whether it\'s exploring the active volcanoes of Tanna Island, diving into the crystal-clear waters of Espiritu Santo, or immersing in the vibrant markets of Port Vila, Vanuatu has something to offer every traveler. The warm and welcoming spirit of the local communities, along with the country\'s stunning landscapes and rich cultural traditions, make it a destination that leaves a lasting impression. From thrilling outdoor activities to serene beachside relaxation, Vanuatu promises an unforgettable travel experience in the heart of the South Pacific.
            ',
                'currency' => 'Vanuatu vatu',
                'language' => 'Bislama, English, French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 249,
            ],
            [
                'countryCode' => 'VE',
                'countryName' => 'Venezuela',
                'regionCode' => 'SOUTH_AMERICA',
                'capital' => 'Caracas',
                'shortDescription' => '
            Venezuela is a country of stunning natural beauty, from the breathtaking Angel Falls to the idyllic Caribbean coast. With its rich cultural heritage, diverse landscapes, and vibrant cities, Venezuela offers a unique blend of adventure, history, and relaxation, making it an appealing destination for travelers seeking both natural wonders and cultural experiences.
            ',
                'longDescription' => '
            Venezuela is a vibrant country located on the northern coast of South America, bordered by the Caribbean Sea. Known for its stunning natural landscapes, Venezuela is a paradise for outdoor enthusiasts and adventure seekers. From its pristine beaches and tropical islands to its dense rainforests and majestic waterfalls, the country offers a diverse range of travel experiences. Venezuela is also famous for its rich cultural heritage, colorful festivals, and delicious cuisine, making it a captivating destination for those seeking a unique and authentic South American experience.

Caracas: The capital city of Venezuela, Caracas, is a bustling metropolis nestled in a valley surrounded by mountains. Visitors can explore the historic Old Town, visit the impressive Avila National Park, and experience the vibrant street life. The city is known for its art and cultural scene, with numerous museums, galleries, and theaters. Caracas also serves as a gateway to the breathtaking Caribbean coast and the stunning archipelago of Los Roques, known for its crystal-clear waters and coral reefs.

Angel Falls: Located in Canaima National Park, Angel Falls is the world\'s highest waterfall, plunging approximately 979 meters (3,212 feet) in a majestic cascade. The falls are an iconic natural wonder and a bucket-list destination for many travelers. Visitors can take a boat ride and hike through the dense rainforest to reach the base of the falls, where they can witness the awe-inspiring sight and feel the misty spray. The surrounding landscapes of Canaima National Park, including its tabletop mountains and vibrant flora and fauna, add to the allure of this incredible destination.

Los Llanos: The vast plains of Los Llanos offer a unique wildlife experience in Venezuela. This region is known for its diverse ecosystem, rich biodiversity, and the opportunity to spot a wide variety of animal species. Visitors can embark on safari-style tours to observe capybaras, caimans, anacondas, and a plethora of bird species in their natural habitat. The area is also famous for its traditional cowboy culture, providing a glimpse into the rural way of life in Venezuela.

Venezuela is a country of breathtaking natural beauty and cultural richness. From the vibrant capital city of Caracas to the awe-inspiring Angel Falls and the wildlife-filled plains of Los Llanos, the country offers a range of experiences that cater to different interests. Whether it\'s exploring the stunning landscapes, engaging with the local culture, or embarking on thrilling adventures, Venezuela is a destination that promises unforgettable memories. However, it\'s important to note that travel to Venezuela may require careful planning and research due to the current socio-political situation. It is advisable to stay updated on travel advisories and consult with local authorities or reputable travel agencies before planning a trip to Venezuela.
            ',
                'currency' => 'Venezuelan bolívar',
                'language' => 'Spanish',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '120V, 60Hz',
                'active' => false,
                'sortOrder' => 250,
            ],
            [
                'countryCode' => 'VN',
                'countryName' => 'Vietnam',
                'regionCode' => 'ASIA',
                'capital' => 'Hanoi',
                'shortDescription' => '
            Vietnam is a country of captivating landscapes, from the lush rice terraces of Sapa to the stunning limestone formations of Halong Bay. With its rich history, vibrant cities, and delicious cuisine, Vietnam offers a unique blend of cultural immersion, natural beauty, and culinary delights, making it an enticing destination for travelers seeking an unforgettable Southeast Asian experience.
            ',
                'longDescription' => '
            Vietnam is a captivating country located in Southeast Asia, bordered by China to the north and Laos and Cambodia to the west. With a rich history, stunning landscapes, and vibrant culture, Vietnam has become a popular destination for travelers from around the world. The country is famous for its bustling cities, ancient temples, lush rice terraces, and beautiful coastline. From the bustling streets of Hanoi to the tranquil waters of Ha Long Bay and the historic town of Hoi An, Vietnam offers a diverse range of experiences that appeal to every type of traveler.

Hanoi: The capital city of Vietnam, Hanoi, is a vibrant and chaotic metropolis that perfectly blends the old and the new. Visitors can explore the charming Old Quarter with its narrow streets filled with shops, markets, and street food stalls. The city is home to numerous historical sites, including the iconic Hoan Kiem Lake and the Temple of Literature. Hanoi also serves as a gateway to the stunning natural landscapes of northern Vietnam, such as the famous rice terraces in Sapa and the breathtaking landscapes of Ninh Binh.

Ha Long Bay: One of the most iconic natural wonders of Vietnam, Ha Long Bay is a UNESCO World Heritage Site and a must-visit destination. Known for its emerald waters, towering limestone karsts, and floating villages, Ha Long Bay offers a mesmerizing experience. Visitors can take a cruise through the bay, kayak between the karsts, and explore the magnificent caves and grottoes. The stunning landscapes and serene atmosphere of Ha Long Bay make it a dream destination for nature lovers and photographers.

Hoi An: Located on the central coast of Vietnam, Hoi An is a charming ancient town that transports visitors back in time. The UNESCO World Heritage Site is famous for its well-preserved architecture, colorful lanterns, and vibrant markets. Hoi An is renowned for its tailoring shops, where visitors can have custom-made clothing created within a short time. The town also offers a delightful culinary experience, with its street food stalls, local dishes, and cooking classes. The nearby An Bang Beach provides a relaxing retreat with its golden sands and turquoise waters.

Vietnam is a country that offers a unique blend of natural beauty, rich history, and warm hospitality. From the bustling streets of Hanoi to the stunning landscapes of Ha Long Bay and the charming ancient town of Hoi An, there is something for everyone in Vietnam. Whether it\'s exploring the bustling cities, immersing in the local culture, or indulging in the delicious cuisine, Vietnam promises a memorable and enriching travel experience. Visitors will be captivated by the country\'s diverse landscapes, friendly locals, and the opportunity to uncover its fascinating history and traditions.
            ',
                'currency' => 'Vietnamese đồng',
                'language' => 'Vietnamese',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks. 3G is available.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 251,
            ],
            [
                'countryCode' => 'WF',
                'countryName' => 'Wallis and Futuna',
                'regionCode' => 'OCEANIA',
                'capital' => 'Mata-Utu',
                'shortDescription' => '
            Wallis and Futuna, located in the South Pacific, is a remote French overseas territory known for its pristine beaches, turquoise lagoons, and traditional Polynesian culture. Travelers should visit to enjoy the untouched beauty of its islands, indulge in water activities like snorkeling and diving, and immerse themselves in the warm hospitality of the local people.
            ',
                'longDescription' => '
            Wallis and Futuna, officially known as the Territory of the Wallis and Futuna Islands, is a French overseas territory located in the South Pacific Ocean. Comprising three main volcanic islands, namely Wallis, Futuna, and Alofi, this remote destination offers a unique and off-the-beaten-path travel experience.

Wallis, the largest island in the archipelago, is known for its stunning lagoons, beautiful beaches, and traditional Polynesian culture. Visitors can explore the royal tombs and ancient Polynesian temples, known as "marae," which provide insights into the rich history and cultural heritage of the island. The island also offers opportunities for water activities such as snorkeling, diving, and fishing, allowing visitors to immerse themselves in the pristine marine environment.

Futuna, the second largest island, is characterized by its rugged landscapes, volcanic peaks, and lush greenery. The island is ideal for nature lovers and hikers, with various trails leading to breathtaking viewpoints and secluded beaches. The village of Sigave is worth visiting to admire the traditional Fale houses and witness the local way of life. Futuna also offers opportunities for snorkeling and exploring its vibrant underwater world.

Alofi, the smallest island of the archipelago, is uninhabited and mostly covered by dense forests. It is a perfect destination for nature enthusiasts looking to experience untouched wilderness. The island offers hiking trails that lead to hidden waterfalls, cascading rivers, and natural pools. Alofi is a paradise for birdwatching, with several endemic bird species inhabiting its forests.

Visiting Wallis and Futuna provides a unique opportunity to discover a lesser-known and untouched part of the Pacific. The islands offer a tranquil and peaceful atmosphere, with an abundance of natural beauty and a rich Polynesian culture. From exploring ancient archaeological sites to indulging in water activities and immersing in the local way of life, Wallis and Futuna offer a serene and authentic travel experience away from the crowds.
            ',
                'currency' => 'CFP franc',
                'language' => 'French',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 252,
            ],
            [
                'countryCode' => 'EH',
                'countryName' => 'Western Sahara',
                'regionCode' => 'AFRICA',
                'capital' => 'El Aaiún',
                'shortDescription' => '
            Western Sahara is a disputed territory located in North Africa, known for its vast desert landscapes, rugged mountains, and rich cultural heritage. While the political situation makes it challenging to visit, adventurous travelers can explore its unique natural beauty, experience camel trekking across the desert, and learn about the indigenous Sahrawi culture and history.
            ',
                'longDescription' => '
            Western Sahara is a disputed territory located in North Africa, bordering Morocco, Algeria, and Mauritania. It is known for its vast desert landscapes, unique culture, and rich history. The territory\'s status is still a subject of dispute, and travel to Western Sahara requires careful consideration of the current situation and travel advisories.

One of the main attractions of Western Sahara is its expansive Sahara Desert, which covers a significant portion of the territory. The desert offers awe-inspiring sand dunes, vast plains, and star-filled night skies. Visitors can embark on camel treks or 4x4 desert expeditions to explore this remote and captivating landscape. The town of Dakhla, located on the Atlantic coast, is a popular destination for water sports enthusiasts, with its favorable wind and wave conditions attracting kitesurfers and windsurfers from around the world.

Laayoune, the largest city in Western Sahara, serves as the administrative capital and offers glimpses into the daily life of the locals. Visitors can explore the bustling markets, sample traditional Sahrawi cuisine, and visit cultural landmarks such as the Moroccan Royal Palace and the El Mchawar Souq. The city also serves as a gateway to nearby attractions, including the scenic coastal town of Boujdour and the birdwatching hotspot of Oued Jenna.

Smara, another prominent city in Western Sahara, is known for its historical significance. It was once the capital of the Sahrawi Arab Democratic Republic and features several landmarks that reflect the region\'s struggle for independence. Visitors can learn about the local history and culture by visiting the Sahrawi Museum and exploring the Mausoleum of Maa El Ainain.

Traveling to Western Sahara offers a unique opportunity to experience the stark beauty of the Sahara Desert and engage with the Sahrawi culture. It is a destination for adventurous travelers seeking off-the-beaten-path experiences and a chance to understand the complex geopolitical situation of the region. From desert expeditions to cultural encounters, Western Sahara provides a glimpse into a distinct way of life and a landscape that is both rugged and captivating. However, it is important to stay informed about the current situation and follow travel advisories before planning a trip to Western Sahara.
            ',
                'currency' => 'Moroccan dirham',
                'language' => 'Hassaniya Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '220V, 50Hz',
                'active' => false,
                'sortOrder' => 253,
            ],
            [
                'countryCode' => 'YE',
                'countryName' => 'Yemen',
                'regionCode' => 'ASIA',
                'capital' => 'Sana\'a',
                'shortDescription' => '
            Yemen, located in the Arabian Peninsula, offers a fascinating blend of ancient history, stunning landscapes, and rich cultural traditions. Despite ongoing conflicts, those seeking off-the-beaten-path adventures can explore its historical sites such as the Old City of Sana\'a and Shibam, marvel at the unique architecture, and experience the warmth and hospitality of its people. However, it\'s crucial to stay updated on the current security situation and travel advisories before considering a visit.
            ',
                'longDescription' => '
            Yemen is a country located in the southern part of the Arabian Peninsula, bordered by Saudi Arabia and Oman. It is known for its rich history, stunning landscapes, and unique cultural heritage. However, it is essential to note that Yemen has been experiencing a complex political situation and ongoing conflicts, and travel to the country is currently not recommended due to safety concerns. It is important to stay updated with travel advisories and consider the security situation before planning any trips to Yemen.

Sana\'a, the capital city of Yemen, is a UNESCO World Heritage Site and one of the oldest continuously inhabited cities in the world. It is famous for its magnificent architecture, including the iconic mud-brick skyscrapers known as "tower houses" or "qamariyas." The Old City of Sana\'a showcases traditional Yemeni architecture, with its narrow alleys, bustling markets, and ornate mosques. Visitors can immerse themselves in the vibrant local culture, explore historical sites such as the Great Mosque of Sana\'a and the Bab al-Yaman gate, and browse through the colorful souks offering spices, textiles, and handicrafts.

Aden, a port city in southern Yemen, is renowned for its strategic location along the Red Sea. It has a fascinating blend of historical landmarks and beautiful beaches. One of the highlights of Aden is the ancient fortress of Qal\'at al-Mu\'izz, which offers panoramic views of the city and the sea. Aden also boasts pristine beaches, including Little Aden Beach and Al-Mansoura Beach, where visitors can relax, swim, and enjoy water sports such as snorkeling and diving.

The island of Socotra is a natural wonder and a biodiversity hotspot that attracts adventurous travelers. Located off the coast of mainland Yemen, Socotra is known for its unique flora and fauna, including the iconic Dragon\'s Blood Tree and the Socotra Starling. The island offers breathtaking landscapes, pristine beaches, and opportunities for hiking, camping, and exploring the diverse ecosystems. Socotra is a remote and untouched destination, providing a truly off-the-beaten-path experience for nature lovers and outdoor enthusiasts.

Yemen, with its rich history, architectural marvels, and natural beauty, has the potential to be a captivating travel destination. However, given the current security situation, it is crucial to prioritize safety and follow travel advisories from your government or relevant authorities. The country\'s cultural heritage, ancient cities, and stunning landscapes make it a place of immense intrigue and exploration. However, until stability is restored, it is recommended to wait for a more opportune time to visit Yemen.
            ',
                'currency' => 'Yemeni rial',
                'language' => 'Arabic',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks. 3G is available.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 254,
            ],
            [
                'countryCode' => 'ZM',
                'countryName' => 'Zambia',
                'regionCode' => 'AFRICA',
                'capital' => 'Lusaka',
                'shortDescription' => '
            Zambia, known as the "Real Africa," offers diverse wildlife, magnificent landscapes, and the mighty Victoria Falls. With its national parks and game reserves, visitors can embark on thrilling safari experiences, witness the annual wildebeest migration, and explore the pristine wilderness. Additionally, Zambia is renowned for its warm hospitality, making it an ideal destination for those seeking an authentic African adventure.
            ',
                'longDescription' => '
                Located in southern Africa, Zambia is a landlocked country known for its stunning natural beauty and abundant wildlife. It is bordered by eight countries, including Tanzania, Malawi, Mozambique, Zimbabwe, Botswana, Namibia, Angola, and the Democratic Republic of the Congo. Zambia is famous for its magnificent Victoria Falls, one of the seven natural wonders of the world. This awe-inspiring waterfall attracts visitors from all over the globe, offering breathtaking views and thrilling activities like white-water rafting and bungee jumping.

In addition to Victoria Falls, Zambia is renowned for its national parks and game reserves, which provide incredible opportunities for wildlife viewing and safaris. The South Luangwa National Park is one of the most popular destinations, known for its high concentration of leopards and other big game. Zambia also offers the opportunity to explore the mighty Zambezi River, go on walking safaris, and discover the diverse landscapes that range from vast plains to lush wetlands.

    Livingstone: As the gateway to Victoria Falls, Livingstone is a vibrant town that offers a variety of adventure activities, including river cruises, helicopter tours, and visits to the Mosi-oa-Tunya National Park. Explore the town\'s colonial history, enjoy sunset cruises on the Zambezi River, and experience the local culture.

    South Luangwa National Park: This park is a haven for wildlife enthusiasts. It is home to a wide array of animals, including elephants, lions, hippos, and more than 400 bird species. Embark on thrilling game drives and walking safaris led by experienced guides to get up close to the incredible wildlife in their natural habitat.

    Lower Zambezi National Park: Located along the Zambezi River, this national park offers a pristine wilderness experience. Enjoy boat safaris, canoeing trips, and game drives to spot elephants, buffalos, crocodiles, and a variety of bird species. The park is known for its stunning landscapes, with the Zambezi River as a focal point.

    Zambia is a destination that showcases the true essence of Africa. From the majestic Victoria Falls to the untamed wilderness of its national parks, the country offers an authentic African experience. Travelers are drawn to Zambia for its breathtaking natural wonders, exciting wildlife encounters, and adrenaline-pumping adventure activities. Whether you\'re seeking the thrill of white-water rafting, the tranquility of a sunset cruise on the Zambezi River, or the chance to spot Africa\'s iconic animals in their natural habitat, Zambia has something to offer. Its warm and welcoming people, rich cultural heritage, and diverse landscapes make it a destination that leaves a lasting impression. Visit Zambia for an unforgettable journey into the heart of Africa\'s wild beauty.
            ',
                'currency' => 'Zambian kwacha',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 255,
            ],
            [
                'countryCode' => 'ZW',
                'countryName' => 'Zimbabwe',
                'regionCode' => 'AFRICA',
                'capital' => 'Harare',
                'shortDescription' => '
            Zimbabwe, the land of majestic wildlife and rich cultural heritage, is home to iconic attractions such as Victoria Falls, Hwange National Park, and the ancient ruins of Great Zimbabwe. Visitors can indulge in thrilling safaris, witness the power of the mighty Victoria Falls, and immerse themselves in the vibrant local culture, making Zimbabwe a must-visit destination for nature lovers and adventure seekers alike.
            ',
                'longDescription' => '
                Located in southern Africa, Zimbabwe is a landlocked country known for its rich history, diverse landscapes, and iconic wildlife. It is bordered by South Africa, Botswana, Mozambique, and Zambia. Zimbabwe is famous for its extraordinary natural wonders, including the magnificent Victoria Falls, which it shares with neighboring Zambia. These awe-inspiring waterfalls are a UNESCO World Heritage Site and offer breathtaking views and adrenaline-pumping activities like white-water rafting and bungee jumping.

Zimbabwe is also home to several incredible national parks, such as Hwange National Park, known for its vast elephant herds, and Mana Pools National Park, renowned for its stunning riverine landscapes and incredible opportunities for walking safaris. The country\'s diverse landscapes range from the lush forests of the Eastern Highlands to the dramatic granite hills of Matobo National Park, which is home to ancient rock art and a thriving population of wildlife.

    Victoria Falls: One of the most famous natural wonders in the world, Victoria Falls is a must-visit destination in Zimbabwe. Experience the power and grandeur of the falls as you take in the breathtaking views from various vantage points. Enjoy activities like helicopter rides, scenic walks, and river cruises to fully appreciate the beauty and majesty of this incredible natural wonder.

    Hwange National Park: Known for its abundant wildlife, Hwange National Park is a paradise for safari enthusiasts. It boasts an impressive variety of animals, including elephants, lions, giraffes, and zebras. Embark on thrilling game drives and guided walks to encounter the incredible wildlife and explore the diverse ecosystems of the park.

    Great Zimbabwe: This UNESCO World Heritage Site is an ancient archaeological marvel that showcases the country\'s rich history. Explore the impressive stone ruins of Great Zimbabwe, which date back to the 11th century and provide fascinating insights into the civilization that once thrived there. Marvel at the intricate stone masonry and learn about the cultural and historical significance of this ancient site.

    Summary of why people should visit Zimbabwe:
    Zimbabwe offers a unique and unforgettable travel experience. From the breathtaking Victoria Falls to the incredible wildlife encounters in its national parks, the country is a haven for nature lovers and adventure seekers. Explore the diverse landscapes, witness incredible sunsets over vast plains, and embark on exhilarating safaris to spot the Big Five. Immerse yourself in the rich cultural heritage and ancient history of Zimbabwe, from the impressive ruins of Great Zimbabwe to the vibrant arts and crafts scene. The warmth and hospitality of the Zimbabwean people further enhance the experience, making visitors feel welcome and ensuring a memorable stay. Visit Zimbabwe for an authentic African adventure filled with natural wonders, wildlife encounters, and cultural discoveries.
            ',
                'currency' => 'Botswana pula',
                'language' => 'English',
                'atm' => 'ATMs are available in major towns, and credit cards are not widely accepted.',
                'mobilePhone' => 'Mobile phones work on 900/1800 MHz networks.',
                'electricity' => '230V, 50Hz',
                'active' => false,
                'sortOrder' => 256,
            ],
        ];

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
            'longDescription' => 'Tourists are drawn to Africa for its rich cultural heritage, breathtaking landscapes, incredible wildlife, and unique experiences. The continent offers a diverse range of attractions that cater to different interests and preferences, making it a captivating destination for travelers from around the world.

One of the major attractions of Africa is its abundant wildlife. The continent is home to some of the most iconic and sought-after species, including the African elephant, lion, leopard, rhinoceros, and buffalo. Visitors have the opportunity to embark on thrilling safari adventures in renowned national parks and reserves such as the Serengeti in Tanzania, Kruger in South Africa, and Masai Mara in Kenya. Witnessing these magnificent animals in their natural habitats is an unforgettable experience that draws tourists to Africa.

Africa\'s landscapes are equally mesmerizing. From the vast savannahs of the Serengeti to the towering sand dunes of the Namib Desert and the lush rainforests of the Congo Basin, the continent offers a diverse range of environments to explore. Visitors can go trekking in the Rwenzori Mountains, witness the thundering Victoria Falls in Zambia and Zimbabwe, or cruise along the scenic waterways of the Okavango Delta in Botswana. The varied landscapes of Africa provide opportunities for outdoor adventures and breathtaking natural beauty.

The cultural richness of Africa is another major attraction. The continent is home to a multitude of diverse and vibrant cultures, each with its own traditions, languages, and artistic expressions. Travelers can immerse themselves in the Maasai culture in East Africa, explore the ancient ruins of Egypt and Zimbabwe, or experience the rhythmic music and dance of West Africa. Local markets, festivals, and cultural tours allow visitors to engage with local communities and gain insights into African traditions and ways of life.

Additionally, Africa offers unique experiences that are hard to find elsewhere. Adventurous travelers can climb Mount Kilimanjaro, the highest peak in Africa, or track gorillas in the misty mountains of Uganda and Rwanda. The continent also presents opportunities for volunteering and community-based tourism, allowing visitors to make a positive impact and contribute to local development projects.

Africa\'s warm hospitality and welcoming spirit add to its allure. Locals are known for their friendliness, generosity, and willingness to share their culture and stories with visitors. This genuine hospitality creates a memorable and immersive experience for tourists.

In summary, Africa\'s rich cultural heritage, breathtaking landscapes, incredible wildlife, and unique experiences make it a captivating travel destination. Whether it\'s the thrill of a safari adventure, the exploration of ancient civilizations, the immersion in vibrant cultures, or the pursuit of outdoor activities, Africa offers something for every traveler seeking an unforgettable journey of discovery.
            ',
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
            'longDescription' => 'Asia attracts tourists with its rich history, diverse cultures, stunning landscapes, vibrant cities, and unique experiences. The continent offers a blend of ancient traditions and modern marvels, making it a fascinating destination for travelers from around the globe.

One of the major attractions of Asia is its historical and cultural heritage. The region is home to iconic landmarks and ancient sites, such as the Great Wall of China, Angkor Wat in Cambodia, Taj Mahal in India, and the temples of Kyoto in Japan. These historical sites offer glimpses into the rich civilizations that have shaped Asia\'s history and provide opportunities for cultural exploration and appreciation.

Asia\'s diverse cultures and traditions are another draw for tourists. From the intricate art of traditional Chinese calligraphy to the serene meditation practices of Buddhist temples, each country in Asia has its own unique cultural tapestry. Travelers can experience the vibrant festivals like Chinese New Year, Diwali in India, Songkran in Thailand, and the Lantern Festival in Taiwan, immersing themselves in local customs and celebrations.

The continent\'s natural beauty is awe-inspiring. From the lush rice terraces in Bali to the stunning beaches of Thailand and the towering Himalayan peaks in Nepal, Asia offers breathtaking landscapes. Visitors can explore the surreal landscapes of Halong Bay in Vietnam, trek through the picturesque valleys of Bhutan, or relax on the pristine beaches of the Maldives. The natural wonders of Asia provide opportunities for outdoor adventures, relaxation, and scenic beauty.

Asia\'s vibrant cities are also major attractions. Bustling metropolises like Tokyo, Shanghai, Seoul, and Singapore showcase modern architecture, cutting-edge technology, and a dynamic urban lifestyle. Visitors can explore vibrant street markets, indulge in delicious street food, and experience the energetic nightlife. These cities offer a blend of ancient traditions and modern innovations, providing a unique cultural experience.

Additionally, Asia offers a wide range of unique experiences. Travelers can witness the enchanting cherry blossoms in Japan, participate in traditional tea ceremonies, learn martial arts, or embark on culinary journeys exploring the diverse cuisines of Asia, from spicy curries in Thailand to delicate sushi in Japan.

In summary, Asia\'s rich history, diverse cultures, stunning landscapes, vibrant cities, and unique experiences make it an enticing travel destination. Whether it\'s the exploration of ancient civilizations, the immersion in vibrant traditions, the discovery of breathtaking natural beauty, or the excitement of cosmopolitan cities, Asia offers a myriad of attractions and experiences for every type of traveler.
            ',
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
            'longDescription' => 'The Caribbean region attracts tourists with its pristine beaches, crystal-clear turquoise waters, vibrant culture, rich history, and a wide range of recreational activities. It offers a perfect tropical getaway for travelers seeking relaxation, adventure, and a taste of island life.

The primary attraction of the Caribbean is its breathtaking beaches. From the powdery white sands of the Bahamas to the secluded coves of the Virgin Islands, the region is famous for its picturesque shorelines. Visitors can soak up the sun, swim in the warm waters, and indulge in various water sports like snorkeling, scuba diving, and sailing.

The Caribbean\'s diverse cultures and vibrant music scene are also major draws. Each island has its own distinct cultural heritage influenced by indigenous people, European colonizers, and African traditions. Travelers can immerse themselves in the rhythms of reggae in Jamaica, salsa in Puerto Rico, or calypso in Trinidad and Tobago. Local festivals like Carnival bring communities together in a riot of colors, music, and dancing.

The region\'s rich history and colonial architecture provide further intrigue for tourists. Cities like Havana in Cuba, Santo Domingo in the Dominican Republic, and Bridgetown in Barbados are UNESCO World Heritage Sites with beautifully preserved colonial buildings, forts, and museums. Exploring these historical landmarks offers insights into the Caribbean\'s past and the impact of European colonization.

Furthermore, the Caribbean offers a plethora of recreational activities for adventure enthusiasts. Visitors can go hiking through lush rainforests, explore underground caves, zip-line through tropical canopies, or embark on exhilarating boat tours. Water sports enthusiasts can enjoy world-class snorkeling and diving spots, kiteboarding, deep-sea fishing, and even swimming with dolphins or sharks.

The Caribbean\'s vibrant culinary scene adds another layer of attraction. Each island boasts its own traditional dishes and flavors influenced by African, European, and indigenous ingredients. Travelers can indulge in spicy jerk chicken in Jamaica, savory roti in Trinidad and Tobago, or fresh seafood in the Bahamas. Local markets and street food stalls offer a chance to taste authentic Caribbean flavors and experience the fusion of culinary traditions.

In summary, the Caribbean\'s pristine beaches, turquoise waters, vibrant culture, rich history, and array of recreational activities make it a sought-after travel destination. Whether it\'s lounging on the beach, immersing in local cultures, exploring historical sites, or embarking on thrilling adventures, the Caribbean offers a diverse range of attractions and experiences that cater to every traveler\'s desires.
            ',
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
            'longDescription' => 'Europe attracts tourists with its rich history, diverse cultures, iconic landmarks, stunning architecture, and a wide range of attractions and activities. The continent offers a captivating blend of ancient traditions and modern innovations, making it a sought-after destination for travelers from all over the world.

One of the main attractions of Europe is its historical heritage. The region is home to numerous UNESCO World Heritage Sites, such as the Acropolis in Athens, the Colosseum in Rome, the Eiffel Tower in Paris, and the Tower of London. These iconic landmarks showcase Europe\'s rich history and offer opportunities for cultural exploration and appreciation.

Europe\'s diverse cultures and traditions are another major draw. With each country having its own unique customs, languages, and cuisines, travelers can experience a rich tapestry of cultures. From savoring traditional Italian pasta and pizza in Italy to indulging in hearty German sausages and beer, Europe is a culinary delight. Festivals like Oktoberfest in Munich, St. Patrick\'s Day in Dublin, and La Tomatina in Spain allow visitors to immerse themselves in local celebrations.

The continent\'s architectural wonders and stunning landscapes are also significant attractions. From the charming canals of Amsterdam to the medieval castles of Scotland, Europe offers a diverse range of architectural styles and landscapes. Travelers can explore picturesque villages in the Swiss Alps, cruise along the stunning fjords of Norway, or relax on the beautiful beaches of the Mediterranean coast.

Europe\'s vibrant cities are magnets for tourists. From the romantic streets of Paris to the bustling markets of Istanbul, the cosmopolitan cities of Europe offer a wealth of attractions and experiences. Visitors can explore world-class museums and art galleries, enjoy theater and music performances, shop in fashionable boutiques, and indulge in the vibrant nightlife.

Additionally, Europe\'s excellent transportation infrastructure makes it easy for tourists to navigate and explore. The extensive network of trains, buses, and budget airlines allows travelers to visit multiple countries and cities within a short period, making it convenient to experience the diverse landscapes, cultures, and attractions that Europe has to offer.

Furthermore, Europe is known for its outdoor adventures and natural beauty. From hiking in the Scottish Highlands to skiing in the Swiss Alps, the continent offers a wide range of outdoor activities for nature enthusiasts. National parks like Plitvice Lakes in Croatia, the Lake District in England, and the Alps in France provide opportunities for hiking, wildlife spotting, and scenic drives.

In summary, Europe\'s rich history, diverse cultures, iconic landmarks, stunning architecture, and range of attractions and activities make it a captivating travel destination. Whether it\'s exploring historical sites, immersing in local cultures, enjoying culinary delights, marveling at architectural masterpieces, or embarking on outdoor adventures, Europe offers a wealth of experiences that cater to every traveler\'s interests and desires.
            ',
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
            'longDescription' => 'The Middle East attracts tourists with its rich history, ancient civilizations, cultural heritage, stunning landscapes, and unique experiences. The region offers a blend of tradition and modernity, making it a captivating destination for travelers seeking a diverse and immersive travel experience.

One of the major attractions of the Middle East is its historical significance. The region is home to iconic historical sites, such as the Pyramids of Egypt, the ancient city of Petra in Jordan, and the ruins of Persepolis in Iran. These sites offer a glimpse into the ancient civilizations that once thrived in the Middle East and provide a fascinating window into the region\'s past.

The Middle East\'s cultural heritage is another draw for tourists. The region is known for its vibrant traditions, colorful festivals, and warm hospitality. Visitors can witness traditional dances like belly dancing, attend local festivals and markets, and immerse themselves in the unique customs and rituals of the Middle East. The Middle Eastern cuisine, with its aromatic spices and flavors, is also a highlight, offering a tantalizing culinary experience.

The stunning landscapes of the Middle East contribute to its allure. From the vast deserts of Saudi Arabia and the United Arab Emirates to the lush green valleys of Lebanon and the breathtaking coastlines of Oman, the region showcases diverse natural beauty. Travelers can explore the magical Wadi Rum desert in Jordan, go snorkeling in the Red Sea, or hike in the magnificent mountains of Iran.

Furthermore, the Middle East is home to modern architectural marvels. Cities like Dubai and Abu Dhabi in the United Arab Emirates boast futuristic skyscrapers, luxury resorts, and innovative infrastructure. Visitors can experience the opulence of world-class shopping malls, indulge in high-end dining experiences, and enjoy thrilling entertainment options, such as indoor skiing and desert safaris.

Religious and spiritual tourism is also significant in the Middle East. The region is the birthplace of major world religions, including Islam, Christianity, and Judaism. Pilgrims and religious tourists flock to sites such as the Dome of the Rock in Jerusalem, the Al-Masjid an-Nabawi in Medina, and the Church of the Holy Sepulchre in Jerusalem, seeking spiritual enlightenment and a connection to their faith.

Lastly, the Middle East offers unique experiences that cannot be found elsewhere. Travelers can explore the bustling markets and souks of Marrakech in Morocco, sail on traditional dhows in the Arabian Gulf, visit ancient monasteries in Egypt\'s Sinai Peninsula, or relax in luxurious resorts along the shores of the Dead Sea. The Middle East provides a blend of ancient traditions and modern luxuries, catering to a variety of interests and preferences.

In summary, the Middle East\'s rich history, cultural heritage, stunning landscapes, modern architecture, and unique experiences make it an enticing travel destination. Whether it\'s exploring ancient civilizations, immersing in vibrant traditions, enjoying diverse natural beauty, marveling at modern infrastructure, or seeking spiritual enlightenment, the Middle East offers a wealth of attractions and experiences that cater to every traveler\'s interests and desires.
            ',
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
            'longDescription' => 'Oceania, also known as the South Pacific, attracts tourists with its stunning natural landscapes, diverse ecosystems, unique wildlife, rich indigenous cultures, and adventure activities. The region offers a paradise-like experience for travelers seeking a blend of relaxation, exploration, and outdoor adventures.

The primary attraction of Oceania is its breathtaking natural beauty. From the pristine beaches and turquoise waters of the Great Barrier Reef in Australia to the majestic fjords and mountains of New Zealand\'s South Island, the region is home to some of the world\'s most picturesque landscapes. Visitors can explore lush rainforests, hike through volcanic terrains, witness stunning waterfalls, and relax on secluded islands, immersing themselves in the tranquility of nature.

The unique and diverse ecosystems of Oceania are also major draws for tourists. Australia\'s wildlife, including kangaroos, koalas, and the elusive platypus, captivates animal lovers. New Zealand\'s endemic species, such as the kiwi bird and the tuatara, provide opportunities for wildlife encounters. The marine life of Oceania is unparalleled, with opportunities for snorkeling, diving, and swimming alongside colorful coral reefs, tropical fish, dolphins, and even whales.

Oceania is a melting pot of indigenous cultures that have deep connections to the land and sea. Travelers can learn about the rich traditions, art, and storytelling of the Aboriginal and Torres Strait Islander peoples in Australia, experience the Maori culture in New Zealand, or discover the Polynesian heritage in places like Fiji and Samoa. Traditional ceremonies, music, dance performances, and cultural festivals offer a glimpse into the vibrant indigenous cultures of the region.

Adventure activities abound in Oceania, attracting thrill-seekers from around the world. New Zealand is renowned for its adventure tourism, offering activities like bungee jumping, skydiving, white-water rafting, and heli-skiing. Australia\'s vast landscapes provide opportunities for camping, hiking, surfing, and exploring the Outback. Oceania is also a haven for water sports enthusiasts, with world-class surfing spots, kayaking, paddleboarding, and sailing in the Pacific Ocean.

Furthermore, Oceania offers unique experiences like no other region. Travelers can visit the mystical landscapes of Uluru in Australia, witness the geothermal wonders of Rotorua in New Zealand, explore the remote islands of French Polynesia, or embark on a cultural journey through the traditional villages of Papua New Guinea. Luxury resorts and eco-retreats offer a range of accommodation options that blend comfort and sustainability, allowing visitors to relax and rejuvenate in harmony with nature.

In summary, Oceania\'s stunning natural landscapes, diverse ecosystems, rich indigenous cultures, adventure activities, and unique experiences make it a captivating travel destination. Whether it\'s exploring pristine beaches, encountering unique wildlife, immersing in indigenous cultures, indulging in thrilling adventures, or simply unwinding in the beauty of nature, Oceania offers a multitude of attractions and experiences that cater to every traveler\'s desires.
            ',
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
            'longDescription' => 'North America attracts tourists with its diverse landscapes, vibrant cities, cultural attractions, historical landmarks, and world-class entertainment. The region offers a wide range of experiences, catering to different interests and preferences, making it a popular destination for travelers from around the globe.

One of the main attractions of North America is its natural beauty. From the stunning national parks of the United States, such as Yellowstone and Yosemite, to the majestic Canadian Rockies, the region is home to breathtaking landscapes. Travelers can explore rugged mountains, pristine lakes, cascading waterfalls, and vast forests, providing ample opportunities for outdoor activities like hiking, camping, wildlife spotting, and scenic drives.

The vibrant cities of North America also draw tourists. From the iconic skyline of New York City to the cultural hub of Toronto, the region boasts dynamic urban centers that offer a blend of history, modernity, and entertainment. Visitors can experience world-class museums, art galleries, theaters, and music venues, sample diverse cuisines, and immerse themselves in the buzzing nightlife of cities like Los Angeles, Chicago, and Montreal.

Cultural attractions and historical landmarks are significant draws for tourists in North America. The United States is home to iconic landmarks such as the Statue of Liberty, the White House, and the Grand Canyon. Mexico showcases ancient Mayan ruins like Chichen Itza, while Canada offers historical sites like Quebec City\'s Old Town. The region also celebrates vibrant cultural events and festivals that showcase the diverse heritage of its people, including Mardi Gras in New Orleans and the Calgary Stampede in Canada.

North America is renowned for its entertainment industry, with Hollywood in Los Angeles leading the way. Visitors can explore the famous Universal Studios, walk along the Hollywood Walk of Fame, or attend live shows and performances. The region is also home to theme parks like Disneyland and Universal Orlando Resort, offering thrilling rides and family-friendly entertainment.

Moreover, North America offers unique experiences that cater to various interests. Adventure enthusiasts can explore the vast wilderness of Alaska, go whale watching in British Columbia, or enjoy skiing and snowboarding in Colorado. Food lovers can indulge in diverse culinary delights, from gourmet cuisine in New York City to street tacos in Mexico. Sports fans can catch games of popular North American sports like basketball, baseball, football, and ice hockey.

In summary, North America\'s diverse landscapes, vibrant cities, cultural attractions, historical landmarks, and world-class entertainment make it an enticing travel destination. Whether it\'s exploring natural wonders, immersing in the vibrant city life, delving into history and culture, enjoying thrilling entertainment, or indulging in unique experiences, North America offers a wealth of attractions and activities that cater to every traveler\'s interests and preferences.
            ',
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
            'longDescription' => 'Central America attracts tourists with its rich biodiversity, ancient ruins, stunning beaches, vibrant culture, and adventure activities. The region offers a unique blend of natural wonders, historical treasures, and authentic experiences, making it an attractive destination for travelers seeking a diverse and immersive travel experience.

One of the main attractions of Central America is its incredible biodiversity. The region is home to lush rainforests, cloud forests, and national parks teeming with diverse flora and fauna. Travelers can embark on eco-tours and nature hikes to discover exotic wildlife, including colorful birds, monkeys, jaguars, and sea turtles. Popular destinations like Costa Rica and Belize offer opportunities for canopy tours, zip-lining, wildlife spotting, and eco-friendly adventures that showcase the region\'s natural beauty.

Central America is also known for its rich historical and cultural heritage. Ancient ruins such as Tikal in Guatemala, Copán in Honduras, and Chichen Itza in Mexico provide a glimpse into the ancient Mayan civilization. Visitors can explore these archaeological sites, marvel at impressive pyramids, and learn about the fascinating history of the region. Additionally, Central America boasts charming colonial cities like Antigua in Guatemala and Granada in Nicaragua, where travelers can wander through cobblestone streets, visit historic churches, and immerse themselves in the local culture.

The region\'s stunning beaches and coastline are major attractions. From the crystal-clear waters of the Caribbean Sea to the Pacific Ocean\'s picturesque shores, Central America offers a variety of beach destinations. Travelers can relax on white sandy beaches, snorkel or scuba dive in vibrant coral reefs, surf the waves, or simply soak up the sun while enjoying the laid-back atmosphere of beach towns like Tulum in Mexico or Roatán in Honduras.

Central America\'s vibrant culture and traditions add to its allure. Each country in the region has its unique customs, festivals, and traditional arts and crafts. Travelers can experience lively music, dance, and folklore performances, savor local cuisine, and interact with friendly locals who are proud of their cultural heritage. Markets, such as the Mercado de Artesanías in Guatemala or the Mercado de San Juan in Mexico City, offer a chance to shop for authentic handicrafts and souvenirs.

Adventure seekers will find plenty to do in Central America. The region offers thrilling activities like whitewater rafting, volcano hiking, zip-lining, and jungle treks. Travelers can hike up volcanoes in Costa Rica, explore underground caves in Belize, or go on multi-day trekking adventures in the highlands of Guatemala. Central America\'s diverse landscapes provide a playground for adrenaline-pumping experiences and outdoor adventures.

In summary, Central America\'s rich biodiversity, ancient ruins, stunning beaches, vibrant culture, and adventure activities make it a captivating travel destination. Whether it\'s exploring lush rainforests, delving into ancient civilizations, relaxing on picturesque beaches, immersing in local traditions, or embarking on thrilling adventures, Central America offers a range of attractions and experiences that cater to every traveler\'s interests and create unforgettable memories.
            ',
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
            'longDescription' => 'South America attracts tourists with its breathtaking landscapes, vibrant culture, ancient civilizations, diverse wildlife, and unique experiences. The region offers a wealth of attractions that appeal to adventurers, nature enthusiasts, history buffs, and those seeking authentic cultural encounters.

One of the main draws of South America is its awe-inspiring natural beauty. From the magnificent peaks of the Andes Mountains to the vast Amazon rainforest and the stunning Iguazu Falls, the region boasts diverse and breathtaking landscapes. Travelers can embark on unforgettable hikes, explore vibrant ecosystems, spot rare wildlife species, and marvel at the power and beauty of natural wonders.

South America is also renowned for its rich cultural heritage and ancient civilizations. The iconic Machu Picchu in Peru, the enigmatic Nazca Lines in Peru, and the mysterious Moai statues on Easter Island are just a few examples of the region\'s archaeological treasures. Visitors can delve into the history of the Incas, explore colonial cities like Cusco and Cartagena, and immerse themselves in the vibrant indigenous cultures that still thrive in many parts of the continent.

The vibrant and diverse culture of South America is a major attraction for tourists. From the tango rhythms of Argentina to the samba beats of Brazil, the region is a hub of music, dance, and artistic expression. Travelers can experience lively festivals, such as Carnival in Rio de Janeiro or Inti Raymi in Cusco, where they can join in the colorful parades and celebrations that showcase the unique cultural traditions of each country.

South America\'s wildlife is another major draw. The Galapagos Islands in Ecuador offer a once-in-a-lifetime opportunity to witness a remarkable array of unique species, including giant tortoises, marine iguanas, and blue-footed boobies. The Pantanal in Brazil and the Amazon rainforest are biodiversity hotspots, providing opportunities for wildlife enthusiasts to observe jaguars, capybaras, monkeys, and an incredible variety of birds and insects.

Adventure seekers flock to South America for its outdoor activities. The continent offers thrilling experiences such as hiking the Inca Trail to Machu Picchu, trekking through Patagonia\'s rugged landscapes, whitewater rafting in the Andean rivers, and sandboarding in the dunes of Huacachina in Peru. Travelers can also enjoy surfing, paragliding, zip-lining, and mountain biking in various destinations throughout the region.

South America\'s gastronomy is a delight for food lovers. Each country offers its culinary specialties, from the savory steaks and wines of Argentina to the ceviche and pisco sour of Peru. Travelers can indulge in unique flavors, explore local markets, and sample traditional dishes that showcase the region\'s rich culinary traditions.

In summary, South America\'s breathtaking landscapes, vibrant culture, ancient civilizations, diverse wildlife, and unique experiences make it an enticing travel destination. Whether it\'s exploring ancient ruins, immersing in local traditions, encountering rare wildlife, embarking on thrilling adventures, or indulging in mouthwatering cuisine, South America offers a wealth of attractions and opportunities for travelers to create unforgettable memories.
            ',
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
            'longDescription' => 'Antarctica attracts tourists with its pristine wilderness, breathtaking landscapes, unique wildlife, and the opportunity to witness one of the last untouched frontiers on Earth. Despite being the coldest, driest, and windiest continent, it captivates adventurous travelers who are drawn to its remote and extreme environment.

The main attraction of Antarctica is its untouched natural beauty. Vast expanses of ice, towering glaciers, and snow-covered mountains create a stunning and otherworldly landscape. Travelers can witness mesmerizing ice formations, massive icebergs, and surreal blue hues reflected in the surrounding waters. The ethereal beauty of Antarctica provides a once-in-a-lifetime experience that leaves a lasting impression on visitors.

Antarctica is also home to a diverse range of wildlife that has adapted to the harsh conditions. Travelers can encounter iconic species such as penguins, seals, and whales. Observing colonies of penguins, including the famous Emperor penguins, in their natural habitat is a truly unforgettable experience. Visitors may also have the chance to see humpback whales breaching the surface or leopard seals basking on ice floes. Antarctica offers a unique opportunity to observe wildlife in their pristine and untouched environment.

The scientific significance of Antarctica is another allure for tourists. The continent serves as a vital research site for scientists from around the world. Travelers can learn about ongoing research projects and gain insights into climate change, glaciology, and marine biology. Some expeditions offer the opportunity to visit research stations and interact with scientists, providing a deeper understanding of the environmental challenges facing our planet.

The sense of adventure and exploration is an intrinsic part of an Antarctic journey. Travelers can embark on expeditions that allow them to experience the remote and untouched nature of the continent. Activities such as kayaking, camping, and mountaineering offer unique ways to immerse oneself in the Antarctic environment. Cruises that traverse the icy waters provide opportunities to navigate through iceberg-filled channels and visit remote islands, where visitors can set foot on the Antarctic continent itself.

The historical significance of Antarctica also fascinates many tourists. Expeditions to Antarctica follow in the footsteps of famous explorers such as Shackleton and Amundsen. Visiting historic sites, including the huts and artifacts from early Antarctic explorations, allows travelers to connect with the continent\'s storied past and the courageous individuals who braved its challenges.

Antarctica\'s remoteness and pristine environment also appeal to those seeking a break from the modern world. With limited infrastructure and strict regulations to preserve its delicate ecosystem, Antarctica offers a unique opportunity for solitude and contemplation. Travelers can disconnect from the noise and distractions of everyday life and immerse themselves in the vastness and tranquility of the Antarctic wilderness.

In summary, Antarctica\'s untouched natural beauty, unique wildlife, scientific significance, sense of adventure, historical allure, and remote environment make it a highly sought-after travel destination. The continent\'s breathtaking landscapes, including towering glaciers and icebergs, provide a surreal and ethereal backdrop. The opportunity to observe penguins, seals, and whales in their natural habitat is a rare and unforgettable experience. Antarctica\'s remoteness and limited accessibility add to its allure, attracting adventurous and curious travelers who seek a once-in-a-lifetime expedition to one of the last frontiers on Earth.
            ',
            'ranking' => 10,
            'sortOrder' => 10,
            'createdBy' => 'SYSTEM',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        /*
        RegionFactory::createSequence(
            function () {
                foreach ($this->regions as $region) {
                    yield [
                        'regionCode' => $region['regionCode'],
                        'regionName' => $region['regionName'],
                        'briefDescription' => $region['briefDescription'],
                        'shortDescription' => $region['shortDescription'],
                        'longDescription' => $region['longDescription'],
                        'ranking' => $region['ranking'],
                        'sortOrder' => $region['sortOrder'],
                        'createdBy' => $region['createdBy'],
                    ];
                }
            }
        );

        $countryIndex = 1;

        CountryFactory::createSequence(
            function () use (&$countryIndex) {
                foreach ($this->countries as $country) {
                    yield [
                        'countryCode' => $country['countryCode'],
                        'countryName' => $country['countryName'],
                        'capital' => $country['capital'],
                        'briefDescription' => 'Brief description',
                        'shortDescription' => $country['shortDescription'],
                        'longDescription' => $country['longDescription'],
                        'currency' => $country['currency'],
                        'language' => $country['language'],
                        'atm' => $country['atm'],
                        'mobilePhone' => $country['mobilePhone'],
                        'electricity' => $country['electricity'],
                        'active' => $country['active'],
                        'sortOrder' => $country['sortOrder'],
                        'createdBy' => 'SYSTEM',
                        'region' => RegionFactory::find(['regionCode' => $country['regionCode']]),
                    ];
                    ++$countryIndex;
                }
            }
        );
         */
    }
}
