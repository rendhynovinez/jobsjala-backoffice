<?php

use Illuminate\Database\Seeder;

class EtnicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=EtnicsSeeder
     * @return void
     */
    public function run()
    {

        DB::table('etnics')->insert([
            [
                "name" => "Asia"
            ],
            [
                "name" => "Afrika"
            ],
            [
                "name" => "Spanish"
            ],
            [
                "name" => "American"
            ]
        ]);
    }
}
