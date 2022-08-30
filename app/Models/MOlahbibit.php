<?php

namespace App\Models;

use CodeIgniter\Model;

class MOlahbibit extends Model
{
    protected $table            = 'tbl_olahbibit';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [];

    public function getDataJoin()
    {
        $builder = $this->db->table($this->table);
        $query = $builder->join('tbl_bibitikan', 'tbl_bibitikan.id_bibit = ' . $this->table . '.id_bibit');
        $query = $builder->join('tbl_jenisikan', 'tbl_jenisikan.id_jenis = tbl_bibitikan.id_jenis');
        $query = $builder->get()->getResultArray();
        return $query;
    }
}
