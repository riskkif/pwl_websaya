<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resprodiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Mahasiswa websaya.com";
        $slug = "mahasiswa";
        $dataProdi = $this->show();
        return view('mhs.prodi', compact('title', 'slug', 'dataProdi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id ="")
    {
        $id = array(
            ['kode' => '433001',
            'prodi' => 'D4 PERANCANGAN MANUFAKTUR',
            'jurusan' => 'Teknik Mesin'],
            ['kode' => '433002',
            'prodi' => 'D4 REKAYASA PERANGKAT LUNAK',
            'jurusan' => 'Teknik Informatika'],
            ['kode' => '433007',
            'prodi' => 'D4 SISTEM INFORMASI KOTA CERDAS',
            'jurusan' => 'Teknik Informatika'],
            ['kode' => '433008',
            'prodi' => 'D4 TEKNOLOGI REKAYASA INSTRUMENTASI DAN KONTROL',
            'jurusan' => 'Teknik Pendingin dan Tata Udara'],
            ['kode' => '433003',
            'prodi' => 'D3 KEPERAWATAN',
            'jurusan' => 'Teknik Informatika'],
            ['kode' => '433004',
            'prodi' => 'D3 TEKNIK MESIN',
            'jurusan' => 'Teknik Mesin'],
            ['kode' => '433005',
            'prodi' => 'D3 TEKNIK INFORMATIKA',
            'jurusan' => 'Teknik Informatika'],
            ['kode' => '433006',
            'prodi' => 'D3 PENDINGIN DAN TATA UDARA',
            'jurusan' => 'Teknik Pendingin dan Tata Udara']
        );
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
