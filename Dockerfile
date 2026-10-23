FROM php:8.3-cli

RUN apt-get update && apt-get install -y zip unzip git libzip-dev default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql zip

WORKDIR /var/www/html
COPY . .

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

EXPOSE 8080
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
