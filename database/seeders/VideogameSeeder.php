<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videogames')->insert([
            'titulo'=>'L4D2',
            'consola'=>'PC',
            'esrb'=>'T',
            'user_id'=>'1',
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('videogames')->insert([
            'titulo'=>'Minecraft',
            'consola'=>'XBox',
            'esrb'=>'E',
            'user_id'=>'2',
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('videogames')->insert([
            'titulo'=>'Skyrim',
            'consola'=>'PlayStation',
            'esrb'=>'M',
            'user_id'=>'3',
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('videogames')->insert([
            'titulo'=>'Wii Sports',
            'consola'=>'Nintendo Wii',
            'esrb'=>'E',
            'user_id'=>'1',
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('videogames')->insert([
            'titulo'=>'Super Mario Bros',
            'consola'=>'Nintendo',
            'esrb'=>'E',
            'user_id'=>'2',
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('videogames')->insert([
            'titulo'=>'Call of Duty',
            'consola'=>'PC',
            'esrb'=>'T',
            'user_id'=>'3',
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('videogames')->insert([
            'titulo'=>'Diablo III',
            'consola'=>'PC',
            'esrb'=>'T',
            'user_id'=>'1',
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('videogames')->insert([
            'titulo'=>'FIFA 18',
            'consola'=>'XBox',
            'esrb'=>'E',
            'user_id'=>'2',
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('videogames')->insert([
            'titulo'=>'Gears of War',
            'consola'=>'XBox',
            'esrb'=>'T',
            'user_id'=>'3',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
