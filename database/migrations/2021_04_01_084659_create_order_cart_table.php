<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_cart', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('order_numb')->nullable();
            $table->string('id_product')->nullable();
            $table->string('qty')->nullable();
            $table->string('img')->nullable();
            $table->string('height')->nullable();
            $table->string('length')->nullable();
            $table->string('price')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('title')->nullable();
            $table->string('weight')->nullable();
            $table->string('width')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_cart');
    }
}
