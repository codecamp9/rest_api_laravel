<?php

namespace Database\Seeders;

use App\Models\Spot;
use App\Models\Spot_vaccine;
use App\Models\Vaccine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Spot_vaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spot_vaccine::factory()->count(10)->create();
    }
}