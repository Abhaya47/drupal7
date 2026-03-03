From php:8.2-apache

RUN a2enmod rewrite

# System deps + PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    mariadb-client \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install \
        gd \
        mysqli \
        pdo \
        pdo_mysql \
        zip \
    && rm -rf /var/lib/apt/lists/*

# PHP config
COPY php.ini /usr/local/etc/php/

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Drush 8 (Drupal 7 compatible)
# RUN composer global require drush/drush:^8 \
#     && ln -s /root/.composer/vendor/bin/drush /usr/local/bin/drush

# Permissions
RUN chown -R www-data:www-data /var/www/html

WORKDIR /var/www/html