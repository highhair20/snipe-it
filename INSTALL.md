```
cd <install-dir>
curl -sS https://getcomposer.org/installer | php
php composer.phar install --no-dev --prefer-source
```

```
sudo find . -type f -exec chmod 664 {} \;
sudo chmod -R 775 ./storage
sudo chmod -R 775 ./public/uploads
sudo chmod -R 775 ./bootstrap/cache
```

Create the database tables and data;

```
php artisan migrate
php artisan db:seed --class=GraceFMCategorySeeder
```

php artisan serve

In .env update
```
APP_LOCALE=en
```
to
```
APP_LOCALE=en-US
```

After any changes to .env run the following:
```
php artisan config:cache
```

Run the server
```
php artisan serve
```

Make sure to set Asset Tag to auto increment.