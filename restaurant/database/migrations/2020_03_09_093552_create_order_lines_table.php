<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('meal_id')->unsigned();
            $table->unsignedBigInteger('order_id')->unsigned();
            $table->unsignedInteger('quantity_ordered')->unsigned();
            $table->double('price_each',8,3);
            $table->foreign('meal_id')->references('id')->on('meals');
            $table->foreign('order_id')->references('id')->on('orders');





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_lines');
    }
}
