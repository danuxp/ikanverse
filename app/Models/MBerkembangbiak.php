<?php

namespace App\Models;

use CodeIgniter\Model;

class MBerkembangbiak extends Model
{
    protected $table            = 'tbl_berkembangbiak';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['cara_berkembangbiak', 'id_ikan'];

    // public function getData($id = false)
    // {
    //     if ($id === false) {
    //         return $this->findAll();
    //     } else {
    //         return $this->getWhere(['id' => $id]);
    //     }
    // }

    public function getDataJoin()
    {
        $builder = $this->db->table($this->table);
        $query = $builder->join('tbl_ikan', 'tbl_ikan.id_ikan = ' . $this->table . '.id_ikan');
        $query = $builder->join('tbl_jenisikan', 'tbl_jenisikan.id_jenis = tbl_ikan.id_jenis');
        $query = $builder->get()->getResultArray();
        return $query;
    }
}
