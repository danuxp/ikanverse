<?php

namespace App\Models;

use CodeIgniter\Model;

class MPakan extends Model
{
    protected $table            = 'tbl_jenispakan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['cara_jenispakan', 'id_ikan'];

    public function getDataJoin()
    {
        $builder = $this->db->table($this->table);
        $query = $builder->join('tbl_ikan', 'tbl_ikan.id_ikan = ' . $this->table . '.id_ikan');
        $query = $builder->join('tbl_jenisikan', 'tbl_jenisikan.id_jenis = tbl_ikan.id_jenis');
        $query = $builder->get()->getResultArray();
        return $query;
    }
}
