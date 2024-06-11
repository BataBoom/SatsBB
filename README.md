Self-hosted Crypto Merchant

Laravel 9.x using PHP 8.1
```
cp .env.example .env
define mysql in .env
composer install
/usr/bin/php8.1 artisan migrate
/usr/bin/php8.1 artisan db:seed
```
- http://yourdomain.com/admin/payments
- admin@satzbb.com
- YourAdminPassword (or as defined in seeder)

Add a site in the admin panel

define a Litecoin and Bitcoin RPC Login in .env then run 

```
/usr/bin/php8.1 artisan config:clear
```
