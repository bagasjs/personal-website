FROM php:8.1-fpm

ARG user
ARG uid

# Install system dependencies
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

RUN useradd -u $uid -G www-data $user

COPY --chown=$user:www-data . /var/www
RUN chown -R $user:www-data /var/www/storage
RUN chmod -R ug+w /var/www/storage

WORKDIR /var/www

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN composer install

USER $user

CMD php-fpm

# CMD /bin/sh init.sh