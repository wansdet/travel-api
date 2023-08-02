<?php

declare(strict_types=1);

namespace App\Factory;

use App\Entity\Place;
use App\Repository\PlaceRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Place>
 *
 * @method        Place|Proxy                     create(array|callable $attributes = [])
 * @method static Place|Proxy                     createOne(array $attributes = [])
 * @method static Place|Proxy                     find(object|array|mixed $criteria)
 * @method static Place|Proxy                     findOrCreate(array $attributes)
 * @method static Place|Proxy                     first(string $sortedField = 'id')
 * @method static Place|Proxy                     last(string $sortedField = 'id')
 * @method static Place|Proxy                     random(array $attributes = [])
 * @method static Place|Proxy                     randomOrCreate(array $attributes = [])
 * @method static PlaceRepository|RepositoryProxy repository()
 * @method static Place[]|Proxy[]                 all()
 * @method static Place[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Place[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Place[]|Proxy[]                 findBy(array $attributes)
 * @method static Place[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Place[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 *
 * @phpstan-method        Proxy<Place> create(array|callable $attributes = [])
 * @phpstan-method static Proxy<Place> createOne(array $attributes = [])
 * @phpstan-method static Proxy<Place> find(object|array|mixed $criteria)
 * @phpstan-method static Proxy<Place> findOrCreate(array $attributes)
 * @phpstan-method static Proxy<Place> first(string $sortedField = 'id')
 * @phpstan-method static Proxy<Place> last(string $sortedField = 'id')
 * @phpstan-method static Proxy<Place> random(array $attributes = [])
 * @phpstan-method static Proxy<Place> randomOrCreate(array $attributes = [])
 * @phpstan-method static RepositoryProxy<Place> repository()
 * @phpstan-method static list<Proxy<Place>> all()
 * @phpstan-method static list<Proxy<Place>> createMany(int $number, array|callable $attributes = [])
 * @phpstan-method static list<Proxy<Place>> createSequence(iterable|callable $sequence)
 * @phpstan-method static list<Proxy<Place>> findBy(array $attributes)
 * @phpstan-method static list<Proxy<Place>> randomRange(int $min, int $max, array $attributes = [])
 * @phpstan-method static list<Proxy<Place>> randomSet(int $number, array $attributes = [])
 */
final class PlaceFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    protected static function getClass(): string
    {
        return Place::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'bestTimeToVisit' => self::faker()->text(1000),
            'briefDescription' => self::faker()->text(500),
            'country' => CountryFactory::new(),
            'createdAt' => self::faker()->dateTime(),
            'createdBy' => self::faker()->text(100),
            'longDescription' => self::faker()->text(4000),
            'placeName' => self::faker()->text(100),
            'ranking' => self::faker()->numberBetween(1, 32767),
            'slug' => self::faker()->text(255),
            'thingsToDo' => self::faker()->text(1500),
            'travelInformation' => self::faker()->text(1000),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this;
        // ->afterInstantiate(function(Place $place): void {})
    }
}
