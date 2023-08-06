<?php

namespace Database\Seeders;

use App\Models\Data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
for($i =1;$i<11;$i++) {
    Data::create([
        'name' => 'Test User',
        'price' => '23234',

    ]);
}
    }
}
