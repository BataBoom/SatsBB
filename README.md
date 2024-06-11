Self-hosted Crypto Merchant

Supports Laravel 6.x - 10.x based off the branch titled the desired version number.

The only requirement is that you provide your own Litecoin and/or Bitcoin RPC.

```
cp .env.example .env
define mysql in .env
composer install
php artisan migrate
php artisan db:seed
```

- http://yourdomain.com/admin/payments
- admin@satzbb.com
- YourAdminPassword (or as defined in seeder)

Add a site in the admin panel

define a Litecoin and Bitcoin RPC Login in .env then run 

```
php artisan config:clear
```
