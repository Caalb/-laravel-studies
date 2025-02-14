<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function logout()
    {
        echo "";
    }

    public function loginSubmit(Request $request)
    {
        // form validation
        $request->validate(
            [
                "text_username" => "required|email",
                "text_password" => "required|min:6|max:16",
            ],
            [
                "text_username.required" => "O username é obrigatório",
                "text_username.email" => "O username deve ser um email válido",
                "text_password.required" => "A password é obrigatória",
                "text_password.min" => "A password deve ter pelo menos 6 caracteres",
                "text_password.max" => "A password deve ter no máximo 16 caracteres",
            ]
        );

        // ger user input
        $username = $request->input("text_username");
        $password = $request->input("text_password");

        echo "OK";
    }
}
