<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments',function(Blueprint $table){
            $table->increments('payment_id');
            $table->boolean('payment_confirm');
        });
        Schema::table('payments',function(Blueprint $table){
            $table->unsignedInteger('manages_id');
            $table->foreign('manages_id')->references('manage_id')->on('manages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
        Schema::table('payments',function(Blueprint $table){
            $table->dropForeign('payments_manages_id_foreign');
        });
    }
}
