<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utsController extends Controller
{
    public function index()
    {
        $title = "utsTakeHome";
        $slug = "mahasiswa";
        $konten = "Ini adalah konten WebSaya.Com";
        $nim = "2203026";
        $nama = "Riski Firmansah";
        return view("konten.uts", compact("title","slug","konten","nim","nama"));
    }
}
