#!/bin/bash

set -xe

php artisan key:generate
php artisan migrate:fresh

php-fpm