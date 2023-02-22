<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin', 
            'email' => 'ramon@thesequel.nl',
            'username' => 'ramon',
            'password' => 'test'
        ]);

        // Users::create([
        //     'name' => 'Admin', 
        //     'email' => 'ramon@thesequel.nl',
        //     'username' => 'ramon',
        //     'password' => 'test'
        // ]);
    }
}
