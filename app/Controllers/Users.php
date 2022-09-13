<?php

namespace App\Controllers;

use App\Models\MUsers;


use App\Controllers\BaseController;

class Users extends BaseController
{
    public function __construct()
    {
        $this->user = new MUsers();
        helper("form");
    }

    public function index()
    {
        // if (session()->get('isLogin') == false) {
        //     return redirect()->to('/');
        // }
        $data = [
            'judul' => 'Users',
            'validation' => \Config\Services::validation(),
            'getData' => $this->user->getData()

        ];
        return view('users', $data);
    }

    public function tambah()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi'
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'username' => $this->request->getVar("username"),
            'password' => password_hash($this->request->getVar("username"), PASSWORD_DEFAULT),
            'role' => 1
        ];

        $this->user->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function hapus($id)
    {
        $this->model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }
}
