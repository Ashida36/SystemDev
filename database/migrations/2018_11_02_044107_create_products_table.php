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
            $table->boolean('confirm')->default(true);
            $table->boolean('confirm_trade')->default(true);
            $table->integer('who_trade')->default(0);
        });
        Schema::table('products',function(Blueprint $table){
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('products',function(Blueprint $table){
            $table->dropForeign('products_user_id_foreign');
        });
    }
}
