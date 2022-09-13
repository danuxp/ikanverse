<?php

namespace App\Models;

use CodeIgniter\Model;

class MHabitat extends Model
{
    protected $table            = 'tbl_habitat';
    // protected $primaryKey       = 'id';
    // protected $useAutoIncrement = true;
    protected $allowedFields    = ['habitat', 'id_ikan'];

    public function getDataJoin(int $page)
    {
        // $builder = $this->db->table($this->table);
        $query = $this->select()->join('tbl_ikan', 'tbl_ikan.id_ikan = ' . $this->table . '.id_ikan')->join('tbl_jenisikan', 'tbl_jenisikan.id_jenis = tbl_ikan.id_jenis')->paginate($page);
        // $query = $builder->join('tbl_ikan', 'tbl_ikan.id_ikan = ' . $this->table . '.id_ikan');
        // $query = $builder->join('tbl_jenisikan', 'tbl_jenisikan.id_jenis = tbl_ikan.id_jenis');
        // $query = $builder->get()->getResultArray();
        return $query;
    }
}
