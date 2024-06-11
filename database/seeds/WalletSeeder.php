<?php

use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Bitcoin', 'short_code' => 'BTC'],
            ['name' => 'Litecoin', 'short_code' => 'LTC']
        ];
        \App\WalletService::insert($data);
        \App\Invoice::query()->update(['wallet_service_id' => 1]);
    }
}
