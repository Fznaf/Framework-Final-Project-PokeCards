<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         \App\Models\Cards::factory(10)->create();

         \App\Models\Cards::factory()->create([
             'name' => 'Ampharos',
             'mktprice' => '19.99',
             'type' => 'electric',
         ]);
    }
}
