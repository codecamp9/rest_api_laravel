<?php

namespace Database\Seeders;

use App\Models\Medical;
use App\Models\Spot;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medical::factory()->count(10)->create();
    }
}