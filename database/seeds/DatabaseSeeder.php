<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        DB::table("users")->truncate();
        DB::table('users')->insert([
            "first_name" => "admin",
            "last_name" => "admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt('password'),
            "is_admin" => 1
        ]);
    
        DB::table('users')->insert([
            "first_name" => "Super",
            "last_name" => "admin",
            "email" => "superAdmin@gmail.com",
            "password" => bcrypt('password'),
            "is_admin" => 2
        ]);
    }
}
