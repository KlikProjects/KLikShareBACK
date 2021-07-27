<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Message;

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


        User::factory()->create([
            'name' => 'root',
            'email' => 'root@mail.com',
            'is_Admin' => true
        ]);
        User::factory()->create([
            'name' => 'vendedor1',
            'email' => 'vendedor1@mail.com',
            'is_Admin' => false
        ]);
        User::factory()->create([
            'name' => 'vendedor2',
            'email' => 'vendedor2@mail.com',
            'is_Admin' => false
        ]);
        User::factory()->create([
            'name' => 'comprador1',
            'email' => 'comprador1@mail.com',
            'is_Admin' => false
        ]);
        User::factory()->create([
            'name' => 'comprador2',
            'email' => 'comprador2@mail.com',
            'is_Admin' => false
        ]);


        Product::factory(10)->create();
        
    }
}
