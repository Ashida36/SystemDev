<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SystemDevelop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products',function(Blueprint $table){
            $table->increments('product_id');
            $table->string('product_category');
            $table->string('product_name');
            $table->integer('product_price');
        });
        Schema::table('products',function(Blueprint $table){
            $table->unsignedInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
        });

        Schema::create('receives',function(Blueprint $table){
            $table->increments('receive_id');
            $table->date('receive_day');
        });
        Schema::table('receives',function(Blueprint $table){
            $table->unsignedInteger('products_id');
            $table->foreign('products_id')->references('product_id')->on('products');
        });

        Schema::create('orders',function(Blueprint $table){
            $table->increments('order_id');
            $table->date('order_day');
        });
        Schema::table('orders',function(Blueprint $table){
            $table->unsignedInteger('receives_id');
            $table->foreign('receives_id')->references('receive_id')->on('receives');
        });

        Schema::create('manages',function(Blueprint $table){
            $table->increments('manage_id');
            $table->integer('manage_account');
            $table->string('manage_postal');
            $table->string('manage_address');
        });

        Schema::create('stocks',function(Blueprint $table){
            $table->increments('stock_id');
            $table->date('stock_day');
        });
        Schema::table('stocks',function(Blueprint $table){
            $table->unsignedInteger('products_id');
            $table->foreign('products_id')->references('product_id')->on('products');
            $table->unsignedInteger('orders_id');
            $table->foreign('orders_id')->references('order_id')->on('orders');
        });

        Schema::create('payments',function(Blueprint $table){
            $table->increments('payment_id');
            $table->boolean('payment_confirm');
        });
        Schema::table('payments',function(Blueprint $table){
            $table->unsignedInteger('manages_id');
            $table->foreign('manages_id')->references('manage_id')->on('manages');
        });

        Schema::create('sends',function(Blueprint $table){
            $table->increments('send_id');
            $table->date('send_day');
        });
        Schema::table('sends',function(Blueprint $table){
            $table->unsignedInteger('stocks_id');
            $table->foreign('stocks_id')->references('stock_id')->on('stocks');
            $table->unsignedInteger('payments_id');
            $table->foreign('payments_id')->references('payment_id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('stocks');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('sends');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('manages');
        Schema::dropIfExists('receives');

        Schema::table('stocks',function(Blueprint $table){
            $table->dropForeign('stocks_products_id_foreign');
        });
        Schema::table('products',function(Blueprint $table){
            $table->dropForeign('products_users_id_foreign');
        });
        Schema::table('stocks',function(Blueprint $table){
            $table->dropForeign('stocks_orders_id_foreign');
        });
        Schema::table('orders',function(Blueprint $table){
            $table->dropForeign('orders_receives_id_foreign');
        });
        Schema::table('sends',function(Blueprint $table){
            $table->dropForeign('sends_stocks_id_foreign');
        });
        Schema::table('sends',function(Blueprint $table){
            $table->dropForeign('sends_payments_id_foreign');
        });
        Schema::table('payments',function(Blueprint $table){
            $table->dropForeign('payments_manages_id_foreign');
        });
        Schema::table('receives',function(Blueprint $table){
            $table->dropForeign('receives_products_id_foreign');
        });
    }
}
