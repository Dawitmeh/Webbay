<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //
    }
}
