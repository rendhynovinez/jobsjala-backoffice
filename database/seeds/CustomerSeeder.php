<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=CustomerSeeder
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            [
                "id"=>"2",
                "username" => "Elfath",
                "email" =>"elfath@gmail.com",
                "password"=>"$2y$10$67sShUukGv07CXozCCPJouWqV2pXBgYI1mt4j8EYlt9.pgw9u9VWy",
                "remember_token"=>null,
                "refferal_code"=>null,
                "permission"=>"1",
                "is_active"=>"1",
                "jobs_id"=>null,
                "created_at"=>"2021-03-24 14:19:33",
                "updated_at"=>"2021-07-13 16:25:16"
            ],
            [
                "id"=>"3",
                "username" => "Rendy",
                "email" =>"rendy@gmail.com",
                "password"=>"$2y$10$67sShUukGv07CXozCCPJouWqV2pXBgYI1mt4j8EYlt9.pgw9u9VWy",
                "remember_token"=>null,
                "refferal_code"=>null,
                "permission"=>"1",
                "is_active"=>"1",
                "jobs_id"=>null,
                "created_at"=>"2021-03-24 14:19:33",
                "updated_at"=>"2021-07-13 16:25:16"
            ]
          ]);


            
    }
}
