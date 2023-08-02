<?php

declare(strict_types=1);

namespace App\Factory;

use App\Entity\FeaturedImage;
use App\Repository\FeaturedImageRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<FeaturedImage>
 *
 * @method        FeaturedImage|Proxy                     create(array|callable $attributes = [])
 * @method static FeaturedImage|Proxy                     createOne(array $attributes = [])
 * @method static FeaturedImage|Proxy                     find(object|array|mixed $criteria)
 * @method static FeaturedImage|Proxy                     findOrCreate(array $attributes)
 * @method static FeaturedImage|Proxy                     first(string $sortedField = 'id')
 * @method static FeaturedImage|Proxy                     last(string $sortedField = 'id')
 * @method static FeaturedImage|Proxy                     random(array $attributes = [])
 * @method static FeaturedImage|Proxy                     randomOrCreate(array $attributes = [])
 * @method static FeaturedImageRepository|RepositoryProxy repository()
 * @method static FeaturedImage[]|Proxy[]                 all()
 * @method static FeaturedImage[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static FeaturedImage[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static FeaturedImage[]|Proxy[]                 findBy(array $attributes)
 * @method static FeaturedImage[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static FeaturedImage[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 *
 * @phpstan-method        Proxy<FeaturedImage> create(array|callable $attributes = [])
 * @phpstan-method static Proxy<FeaturedImage> createOne(array $attributes = [])
 * @phpstan-method static Proxy<FeaturedImage> find(object|array|mixed $criteria)
 * @phpstan-method static Proxy<FeaturedImage> findOrCreate(array $attributes)
 * @phpstan-method static Proxy<FeaturedImage> first(string $sortedField = 'id')
 * @phpstan-method static Proxy<FeaturedImage> last(string $sortedField = 'id')
 * @phpstan-method static Proxy<FeaturedImage> random(array $attributes = [])
 * @phpstan-method static Proxy<FeaturedImage> randomOrCreate(array $attributes = [])
 * @phpstan-method static RepositoryProxy<FeaturedImage> repository()
 * @phpstan-method static list<Proxy<FeaturedImage>> all()
 * @phpstan-method static list<Proxy<FeaturedImage>> createMany(int $number, array|callable $attributes = [])
 * @phpstan-method static list<Proxy<FeaturedImage>> createSequence(iterable|callable $sequence)
 * @phpstan-method static list<Proxy<FeaturedImage>> findBy(array $attributes)
 * @phpstan-method static list<Proxy<FeaturedImage>> randomRange(int $min, int $max, array $attributes = [])
 * @phpstan-method static list<Proxy<FeaturedImage>> randomSet(int $number, array $attributes = [])
 */
final class FeaturedImageFactory extends ModelFactory
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
        return FeaturedImage::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'filePath' => self::faker()->text(255),
            'orientation' => self::faker()->text(20),
            'pageType' => self::faker()->text(10),
            'ranking' => self::faker()->numberBetween(1, 32767),
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
        // ->afterInstantiate(function(FeaturedImage $featuredImage): void {})
    }
}
