<?php

namespace App\Controllers;

use App\Models\MHabitat;
use App\Models\MIkan;
use App\Models\MJenisIkan;
use App\Models\MPengolahan;
use App\Models\MSifatikan;

class Pengetahuanikan extends BaseController
{
    public function __construct()
    {
        $this->ikan = new MIkan();
        $this->jenis_ikan = new MJenisIkan();
        $this->pengolahan = new MPengolahan();
        $this->sifat_ikan = new MSifatikan();
        $this->habitat = new MHabitat();
        helper("form");
    }

    public function index()
    {
        if (session()->get('isLogin') == false) {
            return redirect()->to('/');
        }
        $data = [
            'judul' => 'Pengolahan Ikan',
            'ikan' => $this->ikan->getData(),
            'getData' => $this->pengolahan->getDataJoin(),
            'jenis_ikan' => $this->jenis_ikan->getData()

        ];
        return view('pengolahanikan', $data);
    }

    public function tambah_pengolahan()
    {
        $data = [
            'cara_pengolahan' => $this->request->getVar("cara_pengolahan"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->pengolahan->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function edit_pengolahan()
    {
        $data = [
            'id' => $this->request->getVar("id"),
            'cara_pengolahan' => $this->request->getVar("cara_pengolahan"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->pengolahan->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->back();
    }

    public function hapus_pengolahan($id)
    {
        $this->pengolahan->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    // #################### B A T A S ####################
    // #################### B A T A S ####################
    // #################### B A T A S ####################


    public function sifatikan()
    {
        if (session()->get('isLogin') == false) {
            return redirect()->to('/');
        }
        $data = [
            'judul' => 'Sifat Ikan',
            'ikan' => $this->ikan->getData(),
            'getData' => $this->sifat_ikan->getDataJoin(),
            'jenis_ikan' => $this->jenis_ikan->getData()

        ];
        return view('sifatikan', $data);
    }

    public function tambah_sifatikan()
    {
        $data = [
            'sifatikan' => $this->request->getVar("sifatikan"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->sifat_ikan->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function edit_sifatikan()
    {
        $data = [
            'id' => $this->request->getVar("id"),
            'sifatikan' => $this->request->getVar("sifatikan"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->sifat_ikan->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->back();
    }

    public function hapus_sifatikan($id)
    {
        $this->sifat_ikan->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    // #################### B A T A S ####################
    // #################### B A T A S ####################
    // #################### B A T A S ####################


    public function habitatikan()
    {
        if (session()->get('isLogin') == false) {
            return redirect()->to('/');
        }
        $data = [
            'judul' => 'Habitat Ikan',
            'ikan' => $this->ikan->getData(),
            'getData' => $this->habitat->getDataJoin(),
            'jenis_ikan' => $this->jenis_ikan->getData()

        ];
        return view('habitatikan', $data);
    }

    public function tambah_habitat()
    {
        $data = [
            'habitat' => $this->request->getVar("habitat"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->habitat->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function edit_habitat()
    {
        $data = [
            'id' => $this->request->getVar("id"),
            'habitat' => $this->request->getVar("habitat"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->habitat->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->back();
    }

    public function hapus_habitat($id)
    {
        $this->habitat->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }
}
