For install vendor

cp .env.example .env

docker-compose up -d --build

docker exec php composer install

docker exec php artisan key:generate

docker exec php artisan migrate

App is listening on :8080 port
