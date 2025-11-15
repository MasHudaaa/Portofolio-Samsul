<?php namespace App\Models;
use CodeIgniter\Model;

class SkillsModel extends Model
{
    protected $table = 'skills';
    
    // PASTIKAN INI ADA
    protected $allowedFields = ['nama_skill', 'persentase'];
}