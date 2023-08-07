# travel-api

Uses
[Symfony](https://symfony.com/),
[API Platform](https://api-platform.com/),
[Doctrine](https://www.doctrine-project.org/),
[MySQL](https://www.mysql.com/),
[PHPUnit](https://phpunit.de/) and
[Behat](https://behat.org/)

1. Install Symfony CLI if not previously installed (https://symfony.com/download)

2. Create MySQL Database e.g. TRAVEL

3. Copy .env.dev.dist to .env.dev.local and set DATABASE_URL

4. Install dependencies
```sh
composer install
```

5. Run composer dump-env for dev environment
```sh
composer dump-env dev
```

6. Run doctrine migrations
```sh
php bin/console doctrine:migrations:migrate
```
or
```sh
symfony console doctrine:migrations:migrate
```

7. Create data fixtures
```sh
php bin/console doctrine:fixtures:load
```
or
```sh
symfony console doctrine:fixtures:load
```

8. Run server
```sh
symfony server:start --no-tls
```

9. Open http://localhost:8000/api to view API documentation


10. Run unit tests
```sh
php bin/phpunit
```

11. Run API tests
```sh
php vendor/bin/behat
```
