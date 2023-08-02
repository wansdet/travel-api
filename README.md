# travel-api

Uses 
[Symfony](https://symfony.com/),
[API Platform](https://api-platform.com/),
[Doctrine](https://www.doctrine-project.org/) and
[MySQL](https://www.mysql.com/)

1. Create MySQL Database e.g. TRAVEL

2. Copy .env.dev.dist to .env.dev.local and set DATABASE_URL

3. Install dependencies
```sh
composer install
```

4. Run composer dump-env for dev environment
```sh
composer dump-env dev
```

5. Create data fixtures 
```sh
php bin/console doctrine:fixtures:load
```
or
```sh
symfony console doctrine:fixtures:load
```
6. Run server
```sh
symfony server:start --no-tls
```

7. Open http://localhost:8000/api to view API documentation


8. Run unit tests
```sh
php bin/phpunit
```
