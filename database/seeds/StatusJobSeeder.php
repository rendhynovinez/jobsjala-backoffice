<?php

use Illuminate\Database\Seeder;

class StatusJobSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *php artisan db:seed --class=StatusJobSeeder
     * @return void
     */
    public function run()
    {
        DB::table('status-job')->insert([
            [
                "name" => "On Review"
            ],
            [
                "name" => "Interview"
            ],
            [
                "name" => "Unsuitable"
            ],
            [
                "name" => "Complete"
            ]
        ]);
    }
}
