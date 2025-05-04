<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function checkUser(Request $request){
        $request->validate(
            // rulles
            [
                "text-username" => "required|email",
                "password" => "required"
            ],
            // messages
            [
                "text-username.required" => "Este campo é obrigatório",
                "text-username.email" => "Este não é um e-mail válido",

                "password.required" => "Este campo é obrigatório"
            ]
            );
    }
}
