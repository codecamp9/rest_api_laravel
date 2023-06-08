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
        // Medical::factory()
        // ->count(10)
        // ->create()
        // ->each(function ($spotVaccine) {
        //     $spotVaccine->spots()->attach(Spot::factory()->count(5)->create());
        //     $spotVaccine->vaccines()->attach(User::factory()->count(5)->create());
        // });

        Medical::factory()->count(10)->create();
    }
}