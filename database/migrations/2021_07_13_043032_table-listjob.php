<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableListjob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list-job', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('itemCompany')->nullable();
            $table->string('itemDueDate')->nullable();
            $table->string('itemSalary')->nullable();
            $table->string('itemTitle')->nullable();
            $table->string('itemPostDescription')->nullable();
            $table->string('ItemDetailDescription')->nullable();
            $table->string('itemAdress')->nullable();
            $table->string('itemStatus')->nullable();
            $table->string('itemImg')->nullable();
            $table->string('ItemCategory')->nullable();
            $table->string('ItemRequirements')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('list-job');
    }
}
