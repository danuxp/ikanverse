<?php

namespace App\Controllers;

class Budidaya extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('budidaya');
    }

    public function biak()
    {
        // return view('welcome_message');
        return view('biak');
    }

    public function sterilisasi()
    {
        // return view('welcome_message');
        return view('sterilisasi');
    }

    public function jenispakan()
    {
        return view('jenispakan');
    }
}