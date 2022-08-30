<?php

namespace App\Controllers;

use App\Models\MBibit;
use App\Models\MJenisIkan;
use App\Models\MOlahbibit;

class Olahbibit extends BaseController
{
    public function __construct()
    {
        $this->bibit = new MBibit();
        $this->jenis_ikan = new MJenisIkan();
        $this->olah = new MOlahbibit();
        helper("form");
    }

    public function olahbibit()
    {
        if (session()->get('isLogin') == false) {
            return redirect()->to('/');
        }
        $data = [
            'judul' => 'Olah Bibit',
            'bibit' => $this->bibit->getData(),
            'getData' => $this->olah->getDataJoin(),
            'jenis_ikan' => $this->jenis_ikan->getData()

        ];
        return view('olahbibit', $data);
    }

    public function tambah_olahbibit()
    {
        $data = [
            'olahbibit' => $this->request->getVar("olahbibit"),
            'id_bibit' => $this->request->getVar("id_bibit")
        ];

        $this->olah->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function edit_olahbibit()
    {
        $data = [
            'id' => $this->request->getVar("id"),
            'olahbibit' => $this->request->getVar("olahbibit"),
            'id_bibit' => $this->request->getVar("id_bibit")
        ];

        $this->olah->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->back();
    }

    public function hapus_olahbibit($id)
    {
        $this->olah->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }
}
