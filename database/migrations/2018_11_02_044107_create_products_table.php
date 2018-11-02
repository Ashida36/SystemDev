<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::table('stocks',function(Blueprint $table){
            $table->dropForeign('stocks_products_id_foreign');
        });
    }
}
