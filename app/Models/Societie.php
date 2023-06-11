<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Societie extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
}