<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\VaccinationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('v1/auth/login', [AuthenticationController::class, 'login']);
Route::get('v1/auth/logout', [AuthenticationController::class, 'logout'])->middleware(['auth:sanctum']);

Route::get('v1/consultations', [ConsultationController::class, 'index'])->middleware(['auth:sanctum']);
Route::post('v1/consultations', [ConsultationController::class, 'store'])->middleware(['auth:sanctum']);

Route::get('v1/spots', [SpotController::class, 'index'])->middleware('auth:sanctum');
Route::get('v1/spots/{id}', [SpotController::class, 'show'])->middleware('auth:sanctum');

Route::get('v1/vaccinations', [VaccinationController::class, 'index'])->middleware('auth:sanctum');