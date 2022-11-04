# Symfony Application - symfony_app

- Composer - version 2.4.4
- Nginx version: nginx/1.18.0 (Ubuntu)
- Symfony version: 6.1
- PHP: 8.1

### Docker part (installation and configuration)

- [X] [Docker](https://docs.docker.com/engine/install/)
- [X] [Docker Compose](https://docs.docker.com/compose/install/)
- [X] Docker PHP & Nginx
- [X] [Create Symfony Application](https://symfony.com/doc/current/setup.html)

## Usefull commands for this part (Most of these in Makefile):
 - id $USER; sudo chown -R www-data:www-data /var/log/nginx; sudo chmod -R 755 /var/log/nginx;
 - docker-compose -f ./docker/docker-compose.yml build
 - docker-compose -f ./docker/docker-compose.yml up
 - docker-compose -f ./docker/docker-compose.yml --env-file ./docker/.env exec -u www-data php-fpm bash
 - composer create-project symfony/skeleton:"6.1.*" my_project_directory
