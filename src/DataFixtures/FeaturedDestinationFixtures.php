<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Factory\FeaturedDestinationFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class FeaturedDestinationFixtures extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    private array $featuredDestinations = [
        /*
         * Discover Europe's Hidden Gems: Unforgettable City Breaks Await!"
"Uncover the Magic of Europe: Your Ultimate City Break Adventure!"
"European Escapes Made Easy: Dive into Vibrant Cities on Your City Break!"
"Embrace Europe's Urban Charm: Explore Iconic Cities on a Perfect City Break!"
"Escape to Europe's Urban Wonderland: Unleash Your Wanderlust on a City Break!"
"Captivating Cities, Endless Adventures: Experience Europe on a City Break!"
"City Break Delights: Immerse Yourself in Europe's Cultural Tapestry!"
"Fall in Love with Europe: Unforgettable Memories Await on a City Break!"
"Discover Europe's Urban Treasures: Create Lasting Moments on a City Break!"
"Unlock Europe's Rich Heritage: Embark on a Memorable City Break Experience!"
         */
        [
            'pageType' => 'home',
            'section' => 1,
            'title' => 'City Breaks',
            'description' => 'Unlock Europe\'s Rich Heritage',
            'sortOrder' => 1,
        ],
        [
            'pageType' => 'home',
            'section' => 2,
            'title' => 'City Breaks',
            'description' => 'Immerse Yourself in Europe\'s Cultural Tapestry!',
            'sortOrder' => 2,
        ],
        /*
         * Unleash Your Sense of Wonder: Explore Exotic Asia on Your Dream Holiday!"
"Embark on an Asian Odyssey: Unforgettable Adventures Await!"
"Discover the Allure of Asia: Dive into a World of Diversity on Your Holiday!"
"Experience Asia's Timeless Beauty: Create Lasting Memories on Your Journey!"
"Journey to the Heart of Asia: Uncover Hidden Gems on Your Dream Holiday!"
"Escape to Asia's Enchanting Destinations: Let Your Imagination Soar on Your Holiday!"
"Asian Escapes Made Extraordinary: Indulge in Authentic Experiences on Your Holiday!"
"Savor the Flavors of Asia: Delight Your Senses on a Culinary Holiday Adventure!"
"Rejuvenate Your Soul in Asia: Find Peace and Serenity on Your Blissful Holiday!"
"Asia's Wonders Await: Immerse Yourself in Rich Cultures on Your Unforgettable Holiday!"
         */
        [
            'pageType' => 'home',
            'section' => 2,
            'title' => 'Asia',
            'description' => 'Explore Exotic Asia on Your Dream Holiday!',
            'sortOrder' => 3,
        ],
        /*
         * Unforgettable Adventures Await: Experience the Best of North America on Your Dream Holiday!"
"Discover the Magic of North America: Embark on an Extraordinary Holiday Adventure!"
"Explore the Vast Beauty of North America: Create Lifelong Memories on Your Holiday!"
"From Coast to Coast: Unleash Your Wanderlust on an Epic North American Holiday!"
"Indulge in North America's Rich Tapestry: Immerse Yourself in Diverse Cultures on Your Holiday!"
"North America Beckons: Journey to Iconic Landmarks and Hidden Gems on Your Dream Holiday!"
"Uncover the Treasures of North America: Dive into Nature, History, and Adventure on Your Holiday!"
"Experience the Allure of North America: Let Your Spirit Roam Free on Your Unforgettable Holiday!"
"Immerse Yourself in North America's Vibrant Cities: Discover Urban Delights on Your Holiday!"
"Nature's Playground Awaits: Embark on a Thrilling Outdoor Adventure in North America!"
         */
        [
            'pageType' => 'home',
            'section' => 2,
            'title' => 'North America',
            'description' => 'Unleash Your Wanderlust on an Epic North American Holiday!',
            'sortOrder' => 4,
        ],
        /*
        [
            'pageType' => 'home',
            'section' => 1,
            'title' => '',
            'description' => '',
            'sortOrder' => 1,
        ],
         */
    ];

    public function getDependencies(): array
    {
        return [
            PlaceImageFixturesUSA::class,
        ];
    }

    public static function getGroups(): array
    {
        return ['place_image', 'all'];
    }

    public function load(ObjectManager $manager): void
    {
        $featuredDestinationsIndex = 1;
        FeaturedDestinationFactory::createSequence(
            function () use (&$featuredDestinationsIndex) {
                foreach ($this->featuredDestinations as $featuredDestination) {
                    yield [
                        'pageType' => $featuredDestination['pageType'],
                        'section' => $featuredDestination['section'],
                        'title' => $featuredDestination['title'],
                        'description' => $featuredDestination['description'],
                        'sortOrder' => $featuredDestination['sortOrder'],
                    ];
                    ++$featuredDestinationsIndex;
                }
            }
        );
    }
}
