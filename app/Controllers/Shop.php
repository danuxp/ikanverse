<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MBibit;
use App\Models\MIkan;
use App\Models\MJenisIkan;


class Shop extends BaseController
{
    public function __construct()
    {
        $this->jenis_ikan = new MJenisIkan();
        $this->ikan = new MIkan();
        $this->bibit = new MBibit();
    }
    public function index()
    {
        $data = [
            'judul' => 'Jual Beli',
            'jenis_ikan' => $this->jenis_ikan->getData(),
            'ikan' => $this->ikan->getDataJoin(12, 'ikan'),
            'bibit' => $this->bibit->getDataJoin(12, 'bibit'),
            'pager_ikan' => $this->ikan->pager,
            'pager_bibit' => $this->bibit->pager,

        ];
        return view('shop', $data);
    }
}
