<?php

namespace App\Models;

use CodeIgniter\Model;

class MBudidaya extends Model
{
    protected $table            = 'tbl_budidaya';
    protected $allowedFields    = ['cara_budidaya', 'id_ikan'];

    public function getData($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function getDataJoin(int $page)
    {
        // $builder = $this->db->table($this->table);
        $query = $this->select()->join('tbl_ikan', 'tbl_ikan.id_ikan = ' . $this->table . '.id_ikan')->join('tbl_jenisikan', 'tbl_jenisikan.id_jenis = tbl_ikan.id_jenis')->paginate($page);
        // $query = $builder->join('tbl_ikan', 'tbl_ikan.id_ikan = ' . $this->table . '.id_ikan');
        // $query = $builder->join('tbl_jenisikan', 'tbl_jenisikan.id_jenis = tbl_ikan.id_jenis');
        // $query = $builder->paginate($page);
        // $query = $builder->get()->getResultArray();
        return $query;
    }
}
