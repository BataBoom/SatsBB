<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //Create wallets
        Schema::create('wallet_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('short_code')->unique();
            $table->boolean('active')->default(1);
        });

        //Update invoices table, add wallet_id
        Schema::table('invoices', function(Blueprint $table) {
            $table->unsignedInteger('wallet_service_id')->after('site_id')->nullable();
        });

        //Insert wallets update existing invoices
       /* Artisan::call('db:seed', [
            '--class' => WalletSeeder::class,
        ]);*/

        //Add relationships
        Schema::enableForeignKeyConstraints();
        Schema::table('invoices', function(Blueprint $table) {
            $table->foreign('wallet_service_id')->references('id')->on('wallet_services')->onUpdate('restrict')->onDelete('restrict');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
}
