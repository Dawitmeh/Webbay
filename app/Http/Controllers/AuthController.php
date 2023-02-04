<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        // /** @var \App\Models\User $user */
        // dd($data);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);

        $token = $user->createToken('main')->plainTextToken;
        return response([
            'user' => $user,
            'token' => $token
        ]);
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        
         if (!Auth::attempt($credentials)) {
             return response([
                 'error' => 'The Provided credentials are not correct'
             ], 422);
         }

         $user = Auth::user();
         $token = $user->createToken('main')->plainTextToken;

        return $token;
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
