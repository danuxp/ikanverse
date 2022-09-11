<?php

namespace App\Controllers;

use App\Models\MBerkembangbiak;
use App\Models\MBudidaya;
use App\Models\MIkan;
use App\Models\MJenisIkan;
use App\Models\MPakan;
use App\Models\MSterilisasi;

class Budidaya extends BaseController
{
    public function __construct()
    {
        $this->ikan = new MIkan();
        $this->budidaya = new MBudidaya();
        $this->berkembangbiak = new MBerkembangbiak();
        $this->jenis_ikan = new MJenisIkan();
        $this->steril = new MSterilisasi();
        $this->pakan = new MPakan();
        helper("form");
    }

    public function index()
    {
        if (session()->get('isLogin') == false) {
            return redirect()->to('/');
        }
        $data = [
            'judul' => 'Cara Budidaya',
            'ikan' => $this->ikan->getData(),
            'getData' => $this->budidaya->getDataJoin(10, 'getData'),

            'pager' => $this->budidaya->pager,
            'jenis_ikan' => $this->jenis_ikan->getData()

            // 'validation' => \Config\Services::validation(),

        ];
        return view('budidaya', $data);
    }

    public function tambah_budidaya()
    {
        $data = [
            'cara_budidaya' => $this->request->getVar("cara_budidaya"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->budidaya->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function edit_budidaya()
    {
        $data = [
            'id' => $this->request->getVar("id"),
            'cara_budidaya' => $this->request->getVar("cara_budidaya"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->budidaya->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->back();
    }

    public function hapus_budidaya($id)
    {
        $this->budidaya->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    // #################### B A T A S ####################
    // #################### B A T A S ####################
    // #################### B A T A S ####################


    public function berkembang_biak()
    {
        if (session()->get('isLogin') == false) {
            return redirect()->to('/');
        }
        $data = [
            'judul' => 'Cara Berkembang Biak',
            'ikan' => $this->ikan->getData(),
            'getData' => $this->berkembangbiak->getDataJoin(10, 'getData'),
            'jenis_ikan' => $this->jenis_ikan->getData(),
            'pager' => $this->berkembangbiak->pager,

        ];
        return view('biak', $data);
    }

    public function tambah_berkembangbiak()
    {
        $data = [
            'cara_berkembangbiak' => $this->request->getVar("cara_berkembangbiak"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->berkembangbiak->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function edit_berkembangbiak()
    {
        $data = [
            'id' => $this->request->getVar("id"),
            'cara_berkembangbiak' => $this->request->getVar("cara_berkembangbiak"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->berkembangbiak->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->back();
    }

    public function hapus_berkembangbiak($id)
    {
        $this->berkembangbiak->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    // #################### B A T A S ####################
    // #################### B A T A S ####################
    // #################### B A T A S ####################


    public function sterilisasi()
    {
        if (session()->get('isLogin') == false) {
            return redirect()->to('/');
        }
        $data = [
            'judul' => 'Cara Sterilisasi',
            'ikan' => $this->ikan->getData(),
            'getData' => $this->steril->getDataJoin(10, 'getData'),
            'jenis_ikan' => $this->jenis_ikan->getData(),
            'pager' => $this->steril->pager,

        ];
        return view('sterilisasi', $data);
    }

    public function tambah_steril()
    {
        $data = [
            'cara_sterilisasi' => $this->request->getVar("cara_steril"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->steril->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function edit_steril()
    {
        $data = [
            'id' => $this->request->getVar("id"),
            'cara_sterilisasi' => $this->request->getVar("cara_steril"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->steril->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->back();
    }

    public function hapus_steril($id)
    {
        $this->steril->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    // #################### B A T A S ####################
    // #################### B A T A S ####################
    // #################### B A T A S ####################

    public function jenispakan()
    {
        if (session()->get('isLogin') == false) {
            return redirect()->to('/');
        }
        $data = [
            'judul' => 'Cara Pakan',
            'ikan' => $this->ikan->getData(),
            'getData' => $this->pakan->getDataJoin(10, 'getData'),
            'jenis_ikan' => $this->jenis_ikan->getData(),
            'pager' => $this->pakan->pager,

        ];
        return view('jenispakan', $data);
    }

    public function tambah_pakan()
    {
        $data = [
            'cara_jenispakan' => $this->request->getVar("pakan"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->pakan->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function edit_pakan()
    {
        $data = [
            'id' => $this->request->getVar("id"),
            'cara_jenispakan' => $this->request->getVar("pakan"),
            'id_ikan' => $this->request->getVar("id_ikan")
        ];

        $this->pakan->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->back();
    }

    public function hapus_pakan($id)
    {
        $this->pakan->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->back();
    }
}
