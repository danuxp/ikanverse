<?php

namespace App\Controllers;

class Pengetahuanikan extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('pengolahanikan');
    }

    public function jenisikan()
    {
        // return view('welcome_message');
        return view('jenisikan');
    }

    public function sifatikan()
    {
        // return view('welcome_message');
        return view('sifatikan');
    }

    public function habitatikan()
    {
        return view('habitatikan');
    }
}