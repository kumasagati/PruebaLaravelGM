<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "usu_name" => "Juan Pablo Olaya Suaza",
            "usu_email" => "juanpa-1920@hotmail.com",
            "usu_document" => "1005715067",
            "usu_password" => bcrypt("wasd1234"),
            "usu_email_verified_at" => now()
        ]);
    }
}
