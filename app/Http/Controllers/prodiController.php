<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;

class prodiController extends Controller
{
    public function index(){
        $title = "Program Study Websaya.com";
        $slug = "Prodi";
        $mhs = "Riski";
        $dataProdi = prodi::all();
        return view("prodi.index",compact("mhs","title","slug","slug","dataProdi"));
}

    public function create()
    {
        $dataProdi = new prodi();
        $dataProdi->kd_prodi = 'D3TI';
        $dataProdi->nama_prodi = 'D3 Teknik Informatika';
        $dataProdi->created_at = now();
        $dataProdi->updated_at = now();
        $dataProdi->save();


        prodi::insert(array(
            [
            'kd_prodi'=> 'D4RPL',
            'nama_prodi'=> 'D4 Rekayasa Perangkat Lunak',
            'created_at'=> now(),
            'updated_at'=> now()
            ],
            [
            'kd_prodi'=> 'D3KP',
            'nama_prodi'=> 'D3 Keperawatan',
            'created_at'=> now(),
            'updated_at'=> now()
            ],
        )) ;
        echo "Data Berhasil Ditambahkan, <a href='/prodi'> Kembali</a>";
    }

    public function update(){
        prodi::where("kd_prodi","=","D3KP")->update(['nama_prodi' => 'Keperawatan']);  
        echo "Data Berhasil Diperbaharui, <a href='/prodi'> Kembali</a>";
    }
    public function destroy(){
        prodi::where("kd_prodi","D3KP")->delete();  
        return redirect('/prodi');
    }
}