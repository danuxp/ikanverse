<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MJenisIkan;

class JenisIkan extends BaseController
{
    public function __construct()
    {
        $this->model = new MJenisIkan();
        helper("form");
    }

    public function index()
    {
        $data = [
            'judul' => 'Jenis Ikan',
            'validation' => \Config\Services::validation(),
            'getData' => $this->model->getData()

        ];
        return view('jenisikan', $data);
    }

    public function tambah()
    {
        if (!$this->validate([
            'jenis_ikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis ikan harus diisi'
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'nama_jenis_ikan' => $this->request->getVar("jenis_ikan"),
        ];

        $this->model->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function edit()
    {
        $id = $this->request->getVar('id');
        $data = [
            'id_jenis' => $id,
            'nama_jenis_ikan' => $this->request->getVar("jenis_ikan"),
        ];

        $this->model->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->back();
    }

    public function hapus($id)
    {
        $this->model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }
}
