<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders',function(Blueprint $table){
            $table->increments('order_id');
            $table->date('order_day');
        });
        Schema::table('orders',function(Blueprint $table){
            $table->unsignedInteger('receives_id');
            $table->foreign('receives_id')->references('receive_id')->on('receives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::table('orders',function(Blueprint $table){
            $table->dropForeign('orders_receives_id_foreign');
        });
    }
}
