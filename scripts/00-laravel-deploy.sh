#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
chown -R www-data:www-data /var/www/html/storage
chmod 775 /var/www/html/storage

composer install --no-dev --working-dir=/var/www/html

echo "generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force
