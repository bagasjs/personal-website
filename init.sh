set -xe

composer install
php artisan key:generate
php artisan migrate:fresh
nginx