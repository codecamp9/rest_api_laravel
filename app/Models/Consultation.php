<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    public function Societies()
    {
        return $this->belongsToMany(Societie::class);
    }

    public function Medicals()
    {
        return $this->belongsToMany(Medical::class);
    }
}