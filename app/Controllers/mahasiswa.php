<?php

namespace App\Controllers;

use App\Models\ModelMahasiswa;

class Mahasiswa extends BaseController
{
    protected $ModelMahasiswa;
    public function __construct()
    {
        $this->ModelMahasiswa = new ModelMahasiswa();
    }
    public function index ()
    {
        $mhs = $this->ModelMahasiswa->findAll();
        
        $data = [
            'tittle' => 'Daftar Mahasiswa',
            'mhs' => $mhs
        ];

        return view ('mahasiswa/index', $data);
    }
}