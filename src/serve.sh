#!/usr/bin/env bash

if [[ ! -e .env ]]; then
    cp .env.example .env
fi

composer install

php artisan key:generate
php artisan migrate:install
php artisan migrate

# delay 1 second before serving
sleep 1
php artisan serve --host=0.0.0.0 --port=8000

