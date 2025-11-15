<?php namespace App\Models;
use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'biodata';
    protected $allowedFields = ['nama_lengkap', 'foto_profil', 'judul_profesi', 'summary', 'email', 'telepon', 'alamat'];
}