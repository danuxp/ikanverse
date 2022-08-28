<?php

namespace App\Models;

use CodeIgniter\Model;

class MSterilisasi extends Model
{
    protected $table            = 'tbl_sterilisasi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['cara_sterilisasi', 'id_ikan'];

    public function getDataJoin()
    {
        $builder = $this->db->table($this->table);
        $query = $builder->join('tbl_ikan', 'tbl_ikan.id_ikan = ' . $this->table . '.id_ikan');
        $query = $builder->join('tbl_jenisikan', 'tbl_jenisikan.id_jenis = tbl_ikan.id_jenis');
        $query = $builder->get()->getResultArray();
        return $query;
    }
}
