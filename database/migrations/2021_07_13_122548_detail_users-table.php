<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('detail-users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fullname')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('gender')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('etnics')->nullable();
            $table->string('address')->nullable();
            $table->string('LiveInArea')->nullable();
            $table->string('Education')->nullable();
            $table->string('Organization')->nullable();
            $table->string('JobSpecialist')->nullable();
            $table->string('file')->nullable();
            $table->string('file_name')->nullable();
            $table->string('Skills')->nullable();
            $table->string('customer_id')->nullable();
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
        Schema::dropIfExists('detail-users');
    }
}
