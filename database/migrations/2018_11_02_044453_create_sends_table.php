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
        Schema::dropIfExists('sends');
        Schema::table('sends',function(Blueprint $table){
            $table->dropForeign('sends_stocks_id_foreign');
        });
        Schema::table('sends',function(Blueprint $table){
            $table->dropForeign('sends_payments_id_foreign');
        });
    }
}
