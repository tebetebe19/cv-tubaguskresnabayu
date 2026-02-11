#
# Composer Dependencies
#
FROM composer:2 as composer
WORKDIR /var/www/html
COPY composer.json composer.lock ./
RUN composer install --ignore-platform-reqs --no-scripts --no-autoloader --prefer-dist --no-dev --no-interaction

#
# Runtime
#
FROM serversideup/php:8.1-fpm-nginx

# Install PHP extensions
USER root

RUN install-php-extensions bcmath calendar exif gd intl pdo_pgsql \
    && pecl install excimer \
    && docker-php-ext-enable excimer

# COPY .docker/zzz-custom-php.ini /usr/local/etc/php/conf.d/
# COPY --chown=www-data:www-data .docker/horizon.sh ./horizon.sh
# COPY --chown=www-data:www-data .docker/cron.sh ./cron.sh
# RUN chmod +x ./horizon.sh
# RUN chmod +x ./cron.sh

# Switch to www-data user for security
USER www-data

# Set working directory
WORKDIR /var/www/html
# Copy application files and installed dependencies
# COPY .docker/nginx/supervisord.conf /etc/supervisord.conf

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY --chown=www-data --from=composer /var/www/html/vendor ./vendor
COPY --chown=www-data:www-data ./ ./

# Run necessary commands
# RUN composer dump-autoload \
#     && composer clear-cache 
    # && php artisan livewire:publish --assets \
    # && php artisan filament:assets