# Symfony Application - symfony_app

- Composer - version 2.4.4
- Nginx version: nginx/1.18.0 (Ubuntu)
- Symfony version: 6.1
- PHP: 8.1

## Docker part (installation and configuration)

- [X] [Docker](https://docs.docker.com/engine/install/)
- [X] [Docker Compose](https://docs.docker.com/compose/install/)
- [X] Docker PHP & Nginx
- [X] [Create Symfony Application](https://symfony.com/doc/current/setup.html)

### Usefull commands for this part 
(Most of these in Makefile):
 - ```id $USER; sudo chown -R www-data:www-data /var/log/nginx; sudo chmod -R 755 /var/log/nginx;```
 - ```docker-compose -f ./docker/docker-compose.yml build```
 - ```docker-compose -f ./docker/docker-compose.yml up```
 - ```docker-compose -f ./docker/docker-compose.yml --env-file ./docker/.env exec -u www-data php-fpm bash```
 - ```composer create-project symfony/skeleton:"6.1.*" my_project_directory```

## Debugging
- [X] [Install Xdebug](https://xdebug.org/docs/install#pecl)
- [X] [Configure Xdebug in PhpStorm](https://www.jetbrains.com/help/phpstorm/configuring-xdebug.html)

### Usefull commands:
- ```make dc_stop dc_build dc_up```
- ```make app_bash```
- ```php -m```
- ```make check```

## PHP Unit Testing
- [X] [Install PHPUnit](https://symfony.com/doc/current/testing.html#the-phpunit-testing-framework)
- [X] [Integrate PHPUnit with a PhpStorm project](https://symfony.com/doc/current/testing.html#the-phpunit-testing-framework)

### useful commands
- ```composer require --dev phpunit/phpunit symfony/test-pack```
- ```sudo apt install php-xml```
- ```sudo apt-get install php-mbstring```
- ```composer require --dev symfony/phpunit-bridge```

### Clean Architecture

- [X] [Onion Architecture](https://blog.cleancoder.com/uncle-bob/2012/08/13/the-clean-architecture.html)
- [X] [Monolith First](https://martinfowler.com/bliki/MonolithFirst.html)

### useful commands
- ```mkdir Domain Application Infrastructure```

### Databases and the Doctrine ORM

- [X] [Installing Doctrine](https://symfony.com/doc/current/doctrine.html)
- [X] [Setting up a Database](https://symfony.com/doc/current/the-fast-track/en/7-database.html)
- [X] [Mapping](https://www.doctrine-project.org/projects/doctrine-orm/en/current/reference/xml-mapping.html)
- [X] [Migrations](https://symfony.com/doc/current/doctrine.html#migrations-creating-the-database-tables-schema)
- [X] [Repository](https://symfony.com/doc/current/doctrine.html#querying-for-objects-the-repository)
- [X] [Database Testing](https://symfony.com/doc/current/testing/database.html)
- [X] [Fixtures](https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html)

### useful commands
- ```composer require symfony/orm-pack```
- ```docker ps```
- ```docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' [container_id] #get ip for conteiner```
- ```composer require symfony/uid```
- ```php bin/console doctrine:schema:validate```
- ```php bin/console doctrine:migrations:diff```
- ```apt-get install php-pgsql```
- ```php bin/console doctrine:migrations:migrate```
- ```composer require fakerphp/faker```
- ```composer require --dev orm-fixtures```
- ```php bin/console doctrine:fixtures:load  --env=test```
- [composer require --dev liip/test-fixtures-bundle:^2.0.0](https://github.com/liip/LiipTestFixturesBundle/blob/2.x/doc/installation.md)
- ```composer require --dev dama/doctrine-test-bundle```

## CQRS
- [X] [CQRS pattern](https://docs.microsoft.com/en-us/azure/architecture/patterns/cqrs)
- [X] [Symfony Messenger](https://symfony.com/doc/current/messenger.html)

### useful commands
```composer require symfony/messenger```

## Auth (JWT) 2 Bundels

```composer require "lexik/jwt-authentication-bundle"```
```composer require doctrine/orm doctrine/doctrine-bundle gesdinet/jwt-refresh-token-bundle```
```php bin/console doctrine:migrations:migrate -n```
```php bin/console lexik:jwt:generate-keypair```
```composer require webmozart/assert```
