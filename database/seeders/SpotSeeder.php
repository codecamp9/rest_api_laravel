<?php

namespace Database\Seeders;

use App\Models\Regional;
use App\Models\Spot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spot::factory(Regional::factory()->count(5))->count(5)->create();
    }
}