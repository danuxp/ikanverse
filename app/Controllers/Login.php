<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('login');
    }

    public function registrasi()
    {
        return view('registrasi');
    }
}