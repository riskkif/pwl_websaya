<?php

namespace App\Http\Controllers;


use App\Models\mhs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswaController extends Controller
{
    public function index(){
        $title = "Program Study Websaya.com";
        $slug = "Mhs";
        $mhs = "Riski";
        $dataMhs = mhs::all();
        return view("mhs.index",compact("mhs","title","slug","slug","dataMhs"));
}

    public function create()
    {
        $dataMhs = new mhs();
        $dataMhs->nim = '2203026';
        $dataMhs->nama = 'Riski Firmansah';
        $dataMhs->prodi = 'D3 Teknik Informatika';
        $dataMhs->angkatan = '2023';
        $dataMhs->created_at = now();
        $dataMhs->updated_at = now();
        $dataMhs->save();


        mhs::insert(array(
            [
            'nim'=> '2203055',
            'nama'=> 'Bintanbg',
            'prodi'=> 'D4 Rekayasa Perangkat Lunak',
            'angkatan'=> '2022',
            'created_at'=> now(),
            'updated_at'=> now()
            ],
            [
            'nim'=> '2204033',
            'nama'=> 'Ryanjiro',
            'prodi'=> 'D3 Keperawatan',
            'angkatan'=> '2022',
            'created_at'=> now(),
            'updated_at'=> now()
            ],
        )) ;
        echo "Data Berhasil Ditambahkan, <a href='/mahasiswa'> Kembali</a>";
    }

    public function update(){
        mhs::where("nama","=","Ryanjiro")->update(['angkatan' => '1945']);  
        echo "Data Berhasil Diperbaharui, <a href='/mahasiswa'> Kembali</a>";
    }
    public function destroy(){
        mhs::where("nama","Ryanjiro")->delete();  
        return redirect('/mahasiswa');
    }
}

