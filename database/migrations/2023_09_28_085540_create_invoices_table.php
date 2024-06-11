<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id', false, true)->nullable();
            $table->string('invoice_no')->nullable();
            $table->integer('user_id', false, true);
            $table->float('amount',16,8)->nullable();
            $table->float('amount_received',16,8)->default("0.00");
            $table->float('amount_original', 16, 2)->default("0.00");
            $table->string('hash', 60)->unique();
            $table->string('wallet')->unique()->nullable();
            $table->tinyInteger('status', false, true)->default(0);
            $table->tinyInteger('api', false, true)->default(0);
            $table->string('ip', 45)->nullable();
            $table->timestamps();
            $table->unique(['site_id', 'invoice_no']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
