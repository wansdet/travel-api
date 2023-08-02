<?php

declare(strict_types=1);

namespace App\Factory;

use App\Entity\PlaceImage;
use App\Repository\PlaceImageRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<PlaceImage>
 *
 * @method        PlaceImage|Proxy                     create(array|callable $attributes = [])
 * @method static PlaceImage|Proxy                     createOne(array $attributes = [])
 * @method static PlaceImage|Proxy                     find(object|array|mixed $criteria)
 * @method static PlaceImage|Proxy                     findOrCreate(array $attributes)
 * @method static PlaceImage|Proxy                     first(string $sortedField = 'id')
 * @method static PlaceImage|Proxy                     last(string $sortedField = 'id')
 * @method static PlaceImage|Proxy                     random(array $attributes = [])
 * @method static PlaceImage|Proxy                     randomOrCreate(array $attributes = [])
 * @method static PlaceImageRepository|RepositoryProxy repository()
 * @method static PlaceImage[]|Proxy[]                 all()
 * @method static PlaceImage[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static PlaceImage[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static PlaceImage[]|Proxy[]                 findBy(array $attributes)
 * @method static PlaceImage[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static PlaceImage[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 *
 * @phpstan-method        Proxy<PlaceImage> create(array|callable $attributes = [])
 * @phpstan-method static Proxy<PlaceImage> createOne(array $attributes = [])
 * @phpstan-method static Proxy<PlaceImage> find(object|array|mixed $criteria)
 * @phpstan-method static Proxy<PlaceImage> findOrCreate(array $attributes)
 * @phpstan-method static Proxy<PlaceImage> first(string $sortedField = 'id')
 * @phpstan-method static Proxy<PlaceImage> last(string $sortedField = 'id')
 * @phpstan-method static Proxy<PlaceImage> random(array $attributes = [])
 * @phpstan-method static Proxy<PlaceImage> randomOrCreate(array $attributes = [])
 * @phpstan-method static RepositoryProxy<PlaceImage> repository()
 * @phpstan-method static list<Proxy<PlaceImage>> all()
 * @phpstan-method static list<Proxy<PlaceImage>> createMany(int $number, array|callable $attributes = [])
 * @phpstan-method static list<Proxy<PlaceImage>> createSequence(iterable|callable $sequence)
 * @phpstan-method static list<Proxy<PlaceImage>> findBy(array $attributes)
 * @phpstan-method static list<Proxy<PlaceImage>> randomRange(int $min, int $max, array $attributes = [])
 * @phpstan-method static list<Proxy<PlaceImage>> randomSet(int $number, array $attributes = [])
 */
final class PlaceImageFactory extends ModelFactory
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
        return PlaceImage::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            // 'place' => PlaceFactory::new(),
            'orientation' => self::faker()->text(20),
            'sortOrder' => self::faker()->numberBetween(1, 32767),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this;
        // ->afterInstantiate(function(PlaceImage $placeImage): void {})
    }
}
