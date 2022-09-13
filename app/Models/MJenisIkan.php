<?php

namespace App\Models;

use CodeIgniter\Model;

class MJenisIkan extends Model
{
    protected $table            = 'tbl_jenisikan';
    protected $primaryKey       = 'id_jenis';
    protected $allowedFields    = ['nama_jenis_ikan'];

    public function getData($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_jenis' => $id]);
        }
    }
}
