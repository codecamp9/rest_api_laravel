<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;

    public function Societies()
    {
        return $this->belongsToMany(Societie::class);
    }

    public function Spots()
    {
        return $this->belongsToMany(Spot::class);
    }

    public function Vaccines()
    {
        return $this->belongsToMany(Vaccine::class);
    }

    public function Medicals()
    {
        return $this->belongsToMany(Medical::class);
    }
}