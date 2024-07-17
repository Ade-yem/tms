#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
chown -R www-data:www-data /var/www/html/storage
chown -R www-data:www-data /var/www/html/bootstrap/cache
chown -R www-data:www-data /var/www/html/storage/logs

chmod 777 /var/www/html/storage
chmod 777 /var/www/html/storage/logs

chmod 777 /var/www/html/bootstrap/cache

composer install --no-dev --working-dir=/var/www/html

echo "generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force
