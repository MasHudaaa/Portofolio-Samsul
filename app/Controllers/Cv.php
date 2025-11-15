<?php

namespace App\Controllers;

// Panggil semua Model yang kita butuhkan
use App\Models\BiodataModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\SkillsModel;
// (Opsional) Jika masih mau pakai portofolio
// use App\Models\ProjectModel; // 

class Cv extends BaseController
{
    // Siapkan variabel untuk menampung model
    protected $biodataModel;
    protected $pendidikanModel;
    protected $pengalamanModel;
    protected $skillsModel;
    // protected $projectModel; // 

    public function __construct()
    {
        // Inisialisasi semua model di sini
        $this->biodataModel = new BiodataModel();
        $this->pendidikanModel = new PendidikanModel();
        $this->pengalamanModel = new PengalamanModel();
        $this->skillsModel = new SkillsModel();
        // $this->projectModel = new ProjectModel(); // 
    }

  public function index()
{
    // Siapkan 1 'data' besar yang berisi SEMUA data CV
    $data = [
        'biodata'    => $this->biodataModel->first(),
        'pendidikan' => $this->pendidikanModel->findAll(),
        'pengalaman' => $this->pengalamanModel->findAll(),
        'skills'     => $this->skillsModel->findAll()
    ];
    return view('cv_view', $data);
}
    }
