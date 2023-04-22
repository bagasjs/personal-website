FROM php:8.1-fpm

RUN mkdir -p /var/www
COPY . /var/www
WORKDIR /var/www

COPY ./docker/nginx/nginx.conf /etc/nginx/web.conf

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install
RUN php artisan key:generate
RUN php artisan migrate:fresh

CMD nginx