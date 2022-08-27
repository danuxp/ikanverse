<?php

namespace App\Controllers;

use App\Models\MIkan;
use App\Models\MJenisIkan;

class JualBeli extends BaseController
{
    public function __construct()
    {
        $this->model = new MIkan();
        $this->jenis_ikan = new MJenisIkan();
        helper("form");
    }

    public function index()
    {
        $data = [
            'judul' => 'Jual Beli',
            'validation' => \Config\Services::validation(),
            'getData' => $this->model->getData(),
            'jenis_ikan' => $this->jenis_ikan->getData()
        ];

        return view('jualbeli', $data);
    }

    public function tambah_ikan()
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]' . '|mime_in[gambar,image/jpg,image/jpeg,image/png]' . '|max_size[gambar,2048]',
                'errors' => [
                    'uploaded' => 'Gambar tidak boleh kosong',
                    'mime_in' => 'File extension harus format jpg/jpeg/png',
                    'max_size' => 'Ukuran file maksimal 2MB'
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        }

        $gambar = $this->request->getFile('gambar');
        $fileName = $gambar->getRandomName();
        $gambar->move('uploads/', $fileName);

        $data = [
            'nama_ikan' => $this->request->getVar("nama_ikan"),
            'harga' => $this->request->getVar("harga"),
            'gambar' => $fileName,
            'tersedia' => $this->request->getVar("tersedia"),
            'stok' => $this->request->getVar("stok"),
            'id_jenis' => $this->request->getVar("jenis_ikan"),
        ];

        $this->model->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
        // dd($data);
    }
}
