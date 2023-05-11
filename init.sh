#!/bin/bash

set -xe

# if [ ! -f "vendor/autoload.php" ]; then
#     echo "Installing composer dependencies"
#     composer install --no-interaction
# fi

if [ ! -f ".env" ]; then
    echo "Creating .env file"
    cp .env.example .env
fi

# php artisan key:generate
# php artisan migrate:fresh
