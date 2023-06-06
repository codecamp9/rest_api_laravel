<?php

namespace Database\Seeders;

use App\Models\Medical;
use App\Models\Spot;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medical::factory(Spot::factory(User::factory()->count(10)))->count(5)->create();
    }
}