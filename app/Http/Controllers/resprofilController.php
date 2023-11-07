<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resprofilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Mahasiswa websaya.com";
        $slug = "mahasiswa";
        $dataProfil = $this->show();
        return view('mhs.profil', compact('title', 'slug', 'dataProfil'));
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
            ['nama' => 'Riski Firmansah',
            'nim' => '2203026',
            'kelas' => 'D3TI.2A',
            'prodi' => 'D3 Teknik Informatika'
            ]
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
