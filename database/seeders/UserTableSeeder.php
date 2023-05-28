<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'name_game'=>'THE LAST OF US',
            'deskripsi_game'=> 'ahgdfkuaywgrfkuagwufyawfawrfarg',
            'kategori_id' => '1',
            'Poster_file' => 'tlou.png',
            'gameplay_file' => 'gow2.jpeg',
            'banner_file' => 'gowasli.png'

        ]);
    }
}
