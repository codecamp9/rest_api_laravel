<?php

namespace App\Http\Controllers;

use App\Http\Resources\Vaccinations\vaccinationResource;
use App\Models\Vaccination;
use Illuminate\Http\Request;

class VaccinationController extends Controller
{
    public function index()
    {
        $datas = Vaccination::with('spot:id,name,address,serve,capacity,regional_id')->get();

        return vaccinationResource::collection($datas);
    }
}