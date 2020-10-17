<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' =>1,
            'name' =>'Mr Admin',
            'username' =>'admin',
            'email' =>'admin@blog.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('password')
        ]);
          DB::table('users')->insert([
            'role_id' =>2,
            'name' =>'Mr Author',
            'username' =>'author',
            'email' =>'author@blog.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('password')
        ]);
    }
}
