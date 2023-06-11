<?php

namespace App\Http\Controllers;

use App\Models\Societie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'id_card_number' => 'required',
            'password' => 'required',
        ]);

        $socitetie = Societie::where('id_card_number', $request->id_card_number)->first();

        if(!$socitetie || !Hash::check($request->password, $socitetie->password)){
            throw ValidationException::withMessages([
                'massage' => 'ID card Number or password incorrect',
            ]);
        }

        return $socitetie->createToken($request->password)->plainTextToken;
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return Response()->json([
            'message' => 'Logout success',
        ], 200);
    }

    public function me()
    {
        return response()->json(Auth::user());
    }
}