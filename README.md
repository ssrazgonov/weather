Steps to install:

1) cp .env.example .env

2) configure `OPEN_WEATHER_TOKEN` param

3) run commands:

`docker-compose up -d --build`

`docker exec php composer install`

`docker exec php artisan key:generate`

`docker exec php artisan migrate`

**App is listening on :8080 port**
