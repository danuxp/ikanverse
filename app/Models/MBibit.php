<?php

namespace App\Models;

use CodeIgniter\Model;

class MBibit extends Model
{
    protected $table            = 'tbl_bibitikan';
    protected $primaryKey       = 'id_bibit';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_bibit', 'harga', 'gambar', 'tersedia', 'stok', 'id_jenis'];

    public function getData($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_bibit' => $id]);
        }
    }

    public function getDataJoin(int $page)
    {
        // $builder = $this->db->table($this->table);
        $query = $this->select()->join('tbl_jenisikan', 'tbl_jenisikan.id_jenis = ' . $this->table . '.id_jenis')->paginate($page);
        // $query = $builder->join('tbl_jenisikan', 'tbl_jenisikan.id_jenis = ' . $this->table . '.id_jenis');
        // $query = $builder->get()->getResultArray();
        return $query;
    }
}
