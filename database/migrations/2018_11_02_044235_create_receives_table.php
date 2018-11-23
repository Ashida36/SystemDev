<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receives',function(Blueprint $table){
            $table->increments('receive_id');
            $table->date('receive_day');
            $table->integer('member_id');
            $table->boolean('confirm')->default(true);
            $table->boolean('nyuuko')->default(false);
            $table->boolean('syukko')->default(false);
            $table->boolean('nyuukin')->default(false);
        });
        Schema::table('receives',function(Blueprint $table){
            $table->unsignedInteger('products_id');
            $table->foreign('products_id')->references('product_id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receives');
        Schema::table('receives',function(Blueprint $table){
            $table->dropForeign('receives_products_id_foreign');
        });
    }
}
