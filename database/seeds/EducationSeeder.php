<?php

use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=EducationSeeder
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('education')->insert([
            [
                "name" => "Elementary School"
            ],
            [
                "name" => "Middle School"
            ],
            [
                "name" => "High School"
            ],
            [
                "name" => "College"
            ],
            [
                "name" => "Bachelor"
            ]
        ]);
    }
}
