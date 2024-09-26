<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id="")
    {
        
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        setcookie(
            name: 'access_token',
            value: '123-XYZ',
            expires_or_options: time() + (1 * 60),
            path: '/',
            domain: $_SERVER['SERVER_NAME'],
            secure: false,
            httponly: true
        );

        return response()->json( data: $data, status: 200);
    }
}