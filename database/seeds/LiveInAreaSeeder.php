<?php

use Illuminate\Database\Seeder;

class LiveInAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *php artisan db:seed --class=LiveInAreaSeeder
     * @return void
     */
    public function run()
    {
        //
        DB::table('live_in_area')->insert([
            [
                "name" => "Center City"
            ],
            [
                "name" => "South Philadelphia"
            ],
            [
                "name" => "Southwest Philadelphia"
            ],
            [
                "name" => "West Philadelphia"
            ],
            [
                "name" => "Lower North Philadelphia"
            ],
            [
                "name" => "Upper North Philadelphia"
            ],
            [
                "name" => "Bridesburge-Kensington-Port Richmond"
            ],
            [
                "name" => "Roxborough-Manayunk"
            ],

            [
                "name" => "Germantown-Chestnut Hill"
            ],
            [
                "name" => "Olney-Oak Lane"
            ],
            [
                "name" => "Near Northeast Philadelphia"
            ],
            [
                "name" => "Far Northeast Philadelphia"
            ]
        ]);
    }
}
