<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MBerkembangbiak;
use App\Models\MBudidaya;
use App\Models\MHabitat;
use App\Models\MPakan;
use App\Models\MPengolahan;
use App\Models\MSifatikan;
use App\Models\MSterilisasi;


class Home extends BaseController
{
    public function __construct()
    {
        $this->m_budidaya = new MBudidaya();
        $this->m_biak = new MBerkembangbiak();
        $this->m_pakan = new MPakan();
        $this->m_sterilisasi = new MSterilisasi();
        $this->m_habitat = new MHabitat();
        $this->m_sifat = new MSifatikan();
        $this->m_olah = new MPengolahan();
    }
    public function index()
    {
        $data = [
            'judul' => 'Ikan Verse'
        ];
        return view('home', $data);
    }

    public function tentang()
    {
        $data = [
            'judul' => 'Tentang Ikan Verse'
        ];
        return view('about', $data);
    }
    public function budidaya()
    {
        $data = [
            'judul' => 'Cara Budidaya',
            'budidaya' => $this->m_budidaya->getDataJoin(10, 'budidaya'),
            'pager' => $this->m_budidaya->pager,

        ];
        return view('home_budidaya/budidaya', $data);
    }
    public function berkembang_biak()
    {
        $data = [
            'judul' => 'Berkembang Biak',
            'berkembang_biak' => $this->m_biak->getDataJoin(10, 'berkembang_biak'),
            'pager' => $this->m_biak->pager,

        ];
        return view('home_budidaya/berkembang_biak', $data);
    }
    public function sterilisasi()
    {
        $data = [
            'judul' => 'Sterilisasi',
            'sterilisasi' => $this->m_sterilisasi->getDataJoin(10, 'sterilisasi'),
            'pager' => $this->m_sterilisasi->pager,


        ];
        return view('home_budidaya/sterilisasi', $data);
    }
    public function pakan()
    {
        $data = [
            'judul' => 'Pakan Ikan',
            'pakan' => $this->m_pakan->getDataJoin(10, 'pakan'),
            'pager' => $this->m_pakan->pager,


        ];
        return view('home_budidaya/pakan', $data);
    }

    public function pengolahan()
    {
        $data = [
            'judul' => 'Pengolahan Ikan',
            'olah' => $this->m_olah->getDataJoin(10, 'olah'),
            'pager' => $this->m_olah->pager,
        ];
        return view('home_pengetahuan/pengolahan', $data);
    }

    public function sifat_ikan()
    {
        $data = [
            'judul' => 'Sifat Ikan',
            'sifat' => $this->m_sifat->getDataJoin(10, 'sifat'),
            'pager' => $this->m_sifat->pager,


        ];
        return view('home_pengetahuan/sifat_ikan', $data);
    }

    public function habitat_ikan()
    {
        $data = [
            'judul' => 'Habitat Ikan',
            'habitat' => $this->m_habitat->getDataJoin(10, 'habitat'),
            'pager' => $this->m_habitat->pager,
        ];
        return view('home_pengetahuan/habitat', $data);
    }
}
