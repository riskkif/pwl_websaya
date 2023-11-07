<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mhsController extends Controller
{
    public function index(){
        $mhs = "Riski";
        $title = "Mahasiswa websaya.com";
        $slug = "mahasiswa";
        $dataMhs = $this->dataMahasiswa();
        return view('konten.mhs', compact('mhs','title', 'slug', 'dataMhs'));
    }

    public function dataMahasiswa(){
        $dataMhs = array(
            ['nim' => '2203001',
            'nama' => 'abdur',
            'prodi' => 'D3 Teknik Informatika',
            'angkatan' => '2022'],
            ['nim' => '2203010',
            'nama' => 'fbagja',
            'prodi' => 'D3 Teknik Informatika',
            'angkatan' => '2022'],
            ['nim' => '2203015',
            'nama' => 'nadia',
            'prodi' => 'D3 Teknik Informatika',
            'angkatan' => '2022']
        );
        return $dataMhs;
    }
}