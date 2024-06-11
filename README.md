Self-hosted Crypto Merchant

Laravel 8.x using PHP 7.4
```
cp .env.example .env
define mysql in .env
composer install
/usr/bin/php7.4 artisan migrate
/usr/bin/php7.4 artisan db:seed
```
- http://yourdomain.com/admin/payments
- admin@satzbb.com
- YourAdminPassword (or as defined in seeder)

Add a site in the admin panel

define a Litecoin and Bitcoin RPC Login in .env then run 

```
/usr/bin/php7.4 artisan config:clear
```
