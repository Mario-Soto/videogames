<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name'=>'Mario',
            'email'=>'mario@gmail.com',
            'password'=>Hash::make('mario12345'),
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name'=>'Alejandra',
            'email'=>'alejandra@gmail.com',
            'password'=>Hash::make('alejandra'),
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name'=>'Daniel',
            'email'=>'daniel@gmail.com',
            'password'=>Hash::make('daniel12345'),
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
