<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sends',function(Blueprint $table){
            $table->increments('send_id');
            $table->date('send_day');
        });
        Schema::table('sends',function(Blueprint $table){
            $table->unsignedInteger('stocks_id');
            $table->foreign('stocks_id')->references('stock_id')->on('stocks');
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
        Schema::dropIfExists('sends');
        Schema::table('sends',function(Blueprint $table){
            $table->dropForeign('sends_stocks_id_foreign');
        });
        Schema::table('sends',function(Blueprint $table){
            $table->dropForeign('sends_payments_id_foreign');
        });
        Schema::table('sends',function(Blueprint $table){
            $table->dropForeign('sends_products_id_foreign');
        });
        Schema::table('sends',function(Blueprint $table){
            $table->dropForeign('sends_receives_id_foreign');
        });
    }
}
