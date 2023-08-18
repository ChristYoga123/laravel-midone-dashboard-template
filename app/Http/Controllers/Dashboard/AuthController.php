<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_index()
    {
        return view("pages.dashboard.auth.login")->with([
            "title" => "Login"
        ]);
    }

    public function register_index()
    {
        return view("pages.dashboard.auth.register")->with([
            "title" => "Register"
        ]);
    }
}
