<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\kategori;
use App\Models\User;
use App\Models\role;
use App\Models\profil;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {
        User::create([
            'name' => 'fajar',
            'email' => 'fajar.gamer.id@gmail.com',
            'password' => '3k4120805',
            'role_id' => '1',
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Testi User',
        //     'email' => 'tesfft@example.com',
        // ]);
        // kategori::create([
        //     'kategori_name' => 'FPS',
        // ]);

        // kategori::create([
        //     'kategori_name' => 'SIMULATOR',
        // ]);
        // kategori::create([
        //     'kategori_name' => 'RPG',
        // ]);
        // kategori::create([
        //     'kategori_name' => 'ACTION',
        // ]);

        // role::create([
        //     'role_name' => 'admin'
        // ]);
        // role::create([
        //     'role_name' => 'user'
        // ]);

        // \App\Models\profil::create([
        //     'username' => 'ekakun',
        //     'profil_img' => 'fajar.png',
        //     'user_id' => '1'
        // ]);
        // User::factory(5)->create();
    }
}
