<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([

        ]);
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([

        ]);
    }


    public function logout()
    {
        /** @var User $user */
        $user = Auth::user();
        // Revoke the token that was used to authenticate the current request
        $user->currentAccessToken()->delete();


        return response([
            'success' => true
        ]);
    }
}
