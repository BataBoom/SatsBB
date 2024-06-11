<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteWalletServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_wallet_services', function (Blueprint $table) {
            $table->unsignedInteger('site_id');
            $table->unsignedInteger('wallet_service_id');
            $table->index('site_id');
            $table->unique(['site_id', 'wallet_service_id']);
        });

        Schema::enableForeignKeyConstraints();
        Schema::table('site_wallet_services', function (Blueprint $table) {
            $table->foreign('site_id')->references('id')->on('sites')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('wallet_service_id')->references('id')->on('wallet_services')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_wallet_services');
    }
}
