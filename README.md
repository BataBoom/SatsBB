Self-hosted Crypto Merchant

Laravel 10.x using PHP 8.2
```
cp .env.example .env
define mysql in .env
composer install
/usr/bin/php8.2 artisan migrate
/usr/bin/php8.2 artisan db:seed
```

- http://yourdomain.com/admin/payments
- admin@satzbb.com
- YourAdminPassword (or as defined in seeder)

Add a site in the admin panel, ensure the site has a valid callback URL accepting POST Requests. Data will be forwarded to that URL after a payment is complete. 

define a Litecoin and Bitcoin RPC Login in .env then run 

```
/usr/bin/php8.2 artisan config:clear
```

Next create an invoice: https://github.com/BataBoom/SatsBB/wiki/Create-Invoice

Finally set your cron

```
* * * * * cd /var/www/merchant && php artisan schedule:run >> /dev/null 2>&1
```

Mark your initial "test" invoices as paid in the admin panel. You should be redirected to admin panel, with invoice marked as paid w/o any errors. If there are errors examine the log and re-check the steps. 

Future updates + wiki to come. Donations welcome.

- LTC: ltc1qcjzvjfvs4lrx4r7cet0pvewkqpd0gvgwgzxwvd
- BTC: bc1q33vpvccrc85wazke69na369ajw0983jn8eu8wc
