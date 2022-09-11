<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (session()->get('isLogin') == false) {
            return redirect()->to('/');
        }
        // return view('welcome_message');
        return view('dashboard');
    }
}
