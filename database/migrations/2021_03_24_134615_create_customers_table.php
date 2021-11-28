<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 100)->unique();
            $table->string('email', 150)->unique();
            $table->string('password', 200);
            $table->string('refferal_code', 100);
            $table->string('is_group', 100);
            $table->string('number_phone', 100);
            $table->string('permission', 10);
            $table->string('is_active', 10);
            $table->string('jobs_id', 100);
            $table->rememberToken();
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
        Schema::dropIfExists('customers');
    }
}
