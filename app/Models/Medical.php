<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    use HasFactory;

    public function Spots()
    {
        return $this->belongsToMany(Spot::class);
    }

    public function Users()
    {
        return $this->belongsToMany(User::class);
    }
}