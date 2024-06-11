<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([WalletSeeder::class]);

	\App\User::Create([
		'name'  => 'admin',
		'email' => 'admin@satzbb.com',
		'email_verified_at' => now(),
        	'password' => bcrypt('YourAdminPassword'),
        	'remember_token' => Str::random(10),
		'auth_token' => Str::random(10),
		'super' => 1,
		'admin' => 1, 
 		]);
    }
}
