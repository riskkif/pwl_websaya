<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        echo "<a href='". route('home')."'>Home </a>";
        echo " - ";
        echo "<a href='". route('mhs')."'>Mahasiswa </a>";
        echo " - ";
        echo "<a href='". route('prodi')."'>Prodi </a><hr>";
        echo "<h1>Page > Home</h1>";
    }
}
