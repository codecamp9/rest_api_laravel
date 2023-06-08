<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Medical;
use App\Models\Societie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Consultation::factory()->count(10)->create();
    }
}