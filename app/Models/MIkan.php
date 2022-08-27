<?php

namespace App\Models;

use CodeIgniter\Model;

class MIkan extends Model
{
    protected $table            = 'tbl_ikan';
    protected $primaryKey       = 'id_ikan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_ikan', 'harga', 'gambar', 'ketersediaan', 'stok', 'id_jenis'];

    public function getData($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_ikan' => $id]);
        }
    }
}
