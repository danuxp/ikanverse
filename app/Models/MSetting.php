<?php

namespace App\Models;

use CodeIgniter\Model;

class MSetting extends Model
{
    protected $table            = 'tbl_setting';
    protected $allowedFields    = ['nama_perusahaan', 'alamat', 'no_telp', 'email', 'instagram', 'facebook'];

    public function getData($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function getLimit()
    {
        $builder = $this->db->table($this->table);
        $builder->select('*')->limit(1);
        $query = $builder->get();
        return $query;
    }
}
