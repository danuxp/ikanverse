<?php

namespace App\Models;

use CodeIgniter\Model;

class MSetting extends Model
{
    protected $table            = 'tbl_setting';
    protected $allowedFields    = ['nama_perusahaan', 'alamat', 'no_telp', 'email', 'instagram', 'facebook'];
}
