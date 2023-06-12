<?php

namespace App\Http\Controllers;

use App\Http\Resources\consultations\ConsultationResource;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    public function index()
    {
        $datas = Consultation::with('medical:id,name')->get();

        return ConsultationResource::collection($datas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'disease_history' => 'required',
            'current_symptoms' => 'required',
        ]);

        $request['status'] = 'pending';
        $request['doctor_notes'] = 'menunggu konfirmasi dokter';
        $request['society_id'] = Auth::user()->id;

        Consultation::insert($request->all());
        
        return Response()->json([
            'message' => 'Requset consultation sent successful',
        ], 200);
    }
}