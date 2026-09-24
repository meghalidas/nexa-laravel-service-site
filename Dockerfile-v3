# Laravel 11 / PHP 8.3 runtime for Render and other Docker-based hosts
FROM php:8.3-cli-bookworm

WORKDIR /var/www/html

RUN apt-get update \
    && apt-get install -y --no-install-recommends git unzip libzip-dev libicu-dev libxml2-dev libonig-dev libsqlite3-dev \
    && docker-php-ext-install pdo_sqlite mbstring intl xml zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader --no-scripts

COPY . .

RUN mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs bootstrap/cache database \
    && touch database/database.sqlite \
    && chmod -R ug+rw storage bootstrap/cache database

RUN php artisan package:discover --ansi

ENV APP_ENV=production APP_DEBUG=false LOG_CHANNEL=stderr
EXPOSE 10000

CMD ["sh", "-c", "php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
