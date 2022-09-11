<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MSetting;


class Setting extends BaseController
{
    public function __construct()
    {
        $this->model = new MSetting();
        helper("form");
    }

    public function index()
    {
        $data = [
            'judul' => 'Setting',
            'getData' => $this->model->where('id', 1)->first()
        ];
        return view('setting', $data);
    }

    public function profile()
    {
        $data = [
            'judul' => 'Profile',
            'getData' => $this->model->where('id', 1)->first()
        ];

        return view('profile', $data);
    }

    public function edit()
    {
        $data = [
            'id' => 1,
            'nama_perusahaan' => $this->request->getVar("nama"),
            'alamat' => $this->request->getVar("alamat"),
            'no_telp' => $this->request->getVar("no_telp"),
            'email' => $this->request->getVar("email"),
            'instagram' => $this->request->getVar("instagram"),
            'facebook' => $this->request->getVar("facebook"),
        ];

        $this->model->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('profile');
    }
}
