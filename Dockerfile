FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update -y 
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx
# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

RUN php artisan cache:clear
RUN php artisan config:clear
RUN php artisan key:generate

ENTRYPOINT [ "docker/init.sh" ]