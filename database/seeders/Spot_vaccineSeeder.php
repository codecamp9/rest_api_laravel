<?php

namespace Database\Seeders;

use App\Models\Spot;
use App\Models\Spot_vaccine;
use App\Models\Vaccine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Spot_vaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spot_vaccine::factory(Spot::factory(Vaccine::factory()->count(10)))->count(5)->create();
    }
}