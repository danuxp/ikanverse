<?php

namespace App\Controllers;

use App\Models\MUsers;


class Login extends BaseController
{
    public function index()
    {

        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('login', $data);
    }

    public function cek_login()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username tidak boleh kosong'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong'
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        }

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $login = new MUsers();

        $data = $login->where('username', $username)->first();
        if ($data) {
            $session = session();
            if (password_verify($password, $data['password'])) {
                //create session
                $login = [
                    'islogin' => true,
                    'username' => $data['username'],
                    // 'name' => $data['name']
                ];
                $session->set($login);
                return redirect()->to('dashboard');
            } else {
                $session->setFlashdata('pesan', 'Email/Password invalid');
                return redirect()->back();
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function registrasi()
    {
        return view('registrasi');
    }
}
