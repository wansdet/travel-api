<?php

declare(strict_types=1);

namespace App\Factory;

use App\Entity\FeaturedDestination;
use App\Repository\FeaturedDestinationRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<FeaturedDestination>
 *
 * @method        FeaturedDestination|Proxy                     create(array|callable $attributes = [])
 * @method static FeaturedDestination|Proxy                     createOne(array $attributes = [])
 * @method static FeaturedDestination|Proxy                     find(object|array|mixed $criteria)
 * @method static FeaturedDestination|Proxy                     findOrCreate(array $attributes)
 * @method static FeaturedDestination|Proxy                     first(string $sortedField = 'id')
 * @method static FeaturedDestination|Proxy                     last(string $sortedField = 'id')
 * @method static FeaturedDestination|Proxy                     random(array $attributes = [])
 * @method static FeaturedDestination|Proxy                     randomOrCreate(array $attributes = [])
 * @method static FeaturedDestinationRepository|RepositoryProxy repository()
 * @method static FeaturedDestination[]|Proxy[]                 all()
 * @method static FeaturedDestination[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static FeaturedDestination[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static FeaturedDestination[]|Proxy[]                 findBy(array $attributes)
 * @method static FeaturedDestination[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static FeaturedDestination[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 *
 * @phpstan-method        Proxy<FeaturedDestination> create(array|callable $attributes = [])
 * @phpstan-method static Proxy<FeaturedDestination> createOne(array $attributes = [])
 * @phpstan-method static Proxy<FeaturedDestination> find(object|array|mixed $criteria)
 * @phpstan-method static Proxy<FeaturedDestination> findOrCreate(array $attributes)
 * @phpstan-method static Proxy<FeaturedDestination> first(string $sortedField = 'id')
 * @phpstan-method static Proxy<FeaturedDestination> last(string $sortedField = 'id')
 * @phpstan-method static Proxy<FeaturedDestination> random(array $attributes = [])
 * @phpstan-method static Proxy<FeaturedDestination> randomOrCreate(array $attributes = [])
 * @phpstan-method static RepositoryProxy<FeaturedDestination> repository()
 * @phpstan-method static list<Proxy<FeaturedDestination>> all()
 * @phpstan-method static list<Proxy<FeaturedDestination>> createMany(int $number, array|callable $attributes = [])
 * @phpstan-method static list<Proxy<FeaturedDestination>> createSequence(iterable|callable $sequence)
 * @phpstan-method static list<Proxy<FeaturedDestination>> findBy(array $attributes)
 * @phpstan-method static list<Proxy<FeaturedDestination>> randomRange(int $min, int $max, array $attributes = [])
 * @phpstan-method static list<Proxy<FeaturedDestination>> randomSet(int $number, array $attributes = [])
 */
final class FeaturedDestinationFactory extends ModelFactory
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
        return FeaturedDestination::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'description' => self::faker()->text(255),
            'pageType' => self::faker()->text(10),
            'section' => self::faker()->numberBetween(1, 32767),
            'sortOrder' => self::faker()->numberBetween(1, 32767),
            'title' => self::faker()->text(30),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this;
        // ->afterInstantiate(function(FeaturedDestination $featuredDestination): void {})
    }
}
