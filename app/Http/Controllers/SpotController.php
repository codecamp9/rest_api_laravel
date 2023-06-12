<?php

namespace App\Http\Controllers;

use App\Http\Resources\Spots\SpotDetailResource;
use App\Http\Resources\Spots\SpotResource;
use App\Models\Spot;

class SpotController extends Controller
{
    public function index()
    {
        $datas = Spot::get();

        return SpotResource::collection($datas);
    }

    public function show(string $id)
    {
        $data = Spot::findOrFail($id);

        return new SpotDetailResource($data);
    }
}