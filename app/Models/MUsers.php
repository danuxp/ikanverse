<?php

namespace App\Models;

use CodeIgniter\Model;

class MUsers extends Model
{
    protected $table            = 'tbl_user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['username', 'password', 'role'];

    public function getData($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_user' => $id]);
        }
    }
}
