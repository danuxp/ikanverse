<?php

namespace App\Controllers;

use App\Models\MBibit;
use App\Models\MIkan;
use App\Models\MJenisIkan;

class JualBeli extends BaseController
{
    public function __construct()
    {
        $this->model = new MIkan();
        $this->jenis_ikan = new MJenisIkan();
        $this->model2 = new MBibit();
        helper("form");
    }

    public function index()
    {
        if (session()->get('isLogin') == false) {
            return redirect()->to('/');
        }
        $data = [
            'judul' => 'Jual Beli',
            'validation' => \Config\Services::validation(),
            'getData' => $this->model->getDataJoin(),
            'getData2' => $this->model2->getDataJoin(),
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
            'tersedia' => ($this->request->getVar('tersedia') == true) ? $this->request->getVar('tersedia') : 0,
            'stok' => $this->request->getVar("stok"),
            'id_jenis' => $this->request->getVar("jenis_ikan"),
        ];

        $this->model->save($data);
        session()->setFlashdata('pesan-ikan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
        // dd($data);
    }

    public function edit_ikan()
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'is_image[gambar]' . '|mime_in[gambar,image/jpg,image/jpeg,image/png]' . '|max_size[gambar,2048]',
                'errors' => [
                    'is_image' => 'Yang Anda Upload Bkan Gambar',
                    'mime_in' => 'File extension harus format jpg/jpeg/png',
                    'max_size' => 'Ukuran file maksimal 2MB'
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        }

        $gambar = $this->request->getFile('gambar');
        $gambarLama = $this->request->getVar('gambarLama');

        if ($gambar->getError() == 4) {
            $fileName = $gambarLama;
        } else {
            $fileName = $gambar->getRandomName();
            $gambar->move('uploads/', $fileName);
            unlink('upload/' . $gambarLama);
        }

        $data = [
            'id_ikan' => $this->request->getVar("id_ikan"),
            'nama_ikan' => $this->request->getVar("nama_ikan"),
            'harga' => $this->request->getVar("harga"),
            'gambar' => $fileName,
            'tersedia' => $this->request->getVar('tersedia'),
            'stok' => $this->request->getVar("stok"),
            'id_jenis' => $this->request->getVar("jenis_ikan"),
        ];

        $this->model->save($data);
        session()->setFlashdata('pesan-ikan', 'Data Berhasil Diedit');
        return redirect()->back();
        // dd($data);
    }

    public function hapus_ikan($id)
    {
        $fileGambar = $this->request->getVar("gambar");
        $this->model->delete($id);
        unlink('uploads/' . $fileGambar);
        session()->setFlashdata('pesan-ikan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function tambah_bibit()
    {
        if (!$this->validate([
            'gambar_bibit' => [
                'rules' => 'uploaded[gambar_bibit]' . '|mime_in[gambar_bibit,image/jpg,image/jpeg,image/png]' . '|max_size[gambar_bibit,2048]',
                'errors' => [
                    'uploaded' => 'Gambar tidak boleh kosong',
                    'mime_in' => 'File extension harus format jpg/jpeg/png',
                    'max_size' => 'Ukuran file maksimal 2MB'
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        }

        $gambar = $this->request->getFile('gambar_bibit');
        $fileName = $gambar->getRandomName();
        $gambar->move('uploads/', $fileName);

        $data = [
            'nama_bibit' => $this->request->getVar("nama_bibit"),
            'harga' => $this->request->getVar("harga"),
            'gambar' => $fileName,
            'tersedia' => ($this->request->getVar('tersedia') == true) ? $this->request->getVar('tersedia') : 0,
            'stok' => $this->request->getVar("stok"),
            'id_jenis' => $this->request->getVar("jenis_ikan"),
        ];

        $this->model2->save($data);
        session()->setFlashdata('pesan-bibit', 'Data Berhasil Ditambahkan');
        return redirect()->back();
        // dd($data);
    }

    public function edit_bibit()
    {
        if (!$this->validate([
            'gambar_bibit' => [
                'rules' => 'is_image[gambar_bibit]' . '|mime_in[gambar_bibit,image/jpg,image/jpeg,image/png]' . '|max_size[gambar_bibit,2048]',
                'errors' => [
                    'is_image' => 'Yang Anda Upload Bkan Gambar',
                    'mime_in' => 'File extension harus format jpg/jpeg/png',
                    'max_size' => 'Ukuran file maksimal 2MB'
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        }

        $gambar = $this->request->getFile('gambar_bibit');
        $gambarLama = $this->request->getVar('gambarLama');

        if ($gambar->getError() == 4) {
            $fileName = $gambarLama;
        } else {
            $fileName = $gambar->getRandomName();
            $gambar->move('uploads/', $fileName);
            unlink('upload/' . $gambarLama);
        }

        $data = [
            'id_bibit' => $this->request->getVar("id_bibit"),
            'nama_bibit' => $this->request->getVar("nama_bibit"),
            'harga' => $this->request->getVar("harga"),
            'gambar' => $fileName,
            'tersedia' => $this->request->getVar('tersedia'),
            'stok' => $this->request->getVar("stok"),
            'id_jenis' => $this->request->getVar("jenis_ikan"),
        ];

        $this->model2->save($data);
        session()->setFlashdata('pesan-bibit', 'Data Berhasil Diedit');
        return redirect()->back();
        // dd($data);
    }

    public function hapus_bibit($id)
    {
        $fileGambar = $this->request->getVar("gambar_bibit");
        $this->model2->delete($id);
        unlink('uploads/' . $fileGambar);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }
}
