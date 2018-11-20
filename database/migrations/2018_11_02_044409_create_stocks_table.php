<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks',function(Blueprint $table){
            $table->increments('stock_id');
            $table->date('stock_day');
        });
        Schema::table('stocks',function(Blueprint $table){
            $table->unsignedInteger('products_id');
            $table->foreign('products_id')->references('product_id')->on('products');
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
        Schema::dropIfExists('stocks');
        Schema::table('stocks',function(Blueprint $table){
            $table->dropForeign('stocks_products_id_foreign');
        });
        Schema::table('stocks',function(Blueprint $table){
            $table->dropForeign('stocks_receives_id_foreign');
        });
    }
}
