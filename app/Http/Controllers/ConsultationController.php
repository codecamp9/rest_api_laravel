<?php

namespace App\Http\Controllers;

use App\Http\Resources\consultations\ConsultationCollection;
use App\Http\Resources\consultations\ConsultationResource;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    public function index()
    {
        $datas = Consultation::with('medical')->get();

        return new ConsultationCollection($datas);
    }

    public function show(string $id)
    {
        $data = Consultation::find($id);

        return new ConsultationResource($data);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['society_id'] = $request->user()->id;
        $data['status'] = 'pending';
        $data['doctor_notes'] = 'menunggu konfirmasi dokter';

        request()->user()->consultations()->insert($data);

        return Response()->json([
            'message' => 'Requset consultation sent successful',
        ], 200);
    }
}