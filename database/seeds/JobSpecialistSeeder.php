<?php

use Illuminate\Database\Seeder;

class JobSpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *php artisan db:seed --class=JobSpecialistSeeder
     * @return void
     */
    public function run()
    {
        //
        DB::table('job_specialist')->insert([
            [
                "name" => "Accounting"
            ],
            [
                "name" => "Human Resources"
            ],
            [
                "name" => "Sales / Marketing"
            ],
            [
                "name" => "Arts/Media/Communications"
            ],
            [
                "name" => "Hotel / Restaurant"
            ],
            [
                "name" => "Education / Training"
            ],
            [
                "name" => "Computer/Information Technology/IT"
            ],
            [
                "name" => "Technical"
            ],
            [
                "name" => "Manufacture"
            ],
            [
                "name" => "Building/Construction"
            ],
            [
                "name" => "Sains"
            ],
            [
                "name" => "Health services"
            ],

            [
                "name" => "Others"
            ]
        ]);

    }
}
