<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'society_id',
        'medical_id',
        'medical_id',
        'disease_history',
        'current_symptoms',
        'doctor_notes',
    ];

    public function medical()
    {
        return $this->belongsTo(Medical::class);
    }

    public function societie()
    {
        return $this->belongsTo(Societie::class);
    }
}