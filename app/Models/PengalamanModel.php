<?php namespace App\Models;
use CodeIgniter\Model;

class PengalamanModel extends Model
{
    protected $table = 'pengalaman';
    
    // PASTIKAN INI ADA SEMUA
    protected $allowedFields = ['posisi', 'perusahaan', 'tahun_mulai', 'tahun_selesai', 'deskripsi'];
}