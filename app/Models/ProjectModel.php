<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    // Nama tabel yang akan digunakan
    protected $table            = 'projects';
    
    // Kolom yang boleh diisi/diubah
    protected $allowedFields    = ['title', 'description', 'image'];
}