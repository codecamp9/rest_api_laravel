<?php

namespace Database\Seeders;

use App\Models\Regional;
use App\Models\Societie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocietieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Regional::factory()
            ->has(Societie::factory()->count(5))
            ->count(5)
            ->create();
    }
}