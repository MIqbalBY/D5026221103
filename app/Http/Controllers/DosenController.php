<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $a = 3;
        $b = 7;
        $c = $a * $b;
        return "<h1>Hasil Perkalian = " . (string)$c . "</h1>";
    }

    public function showBlog()
    {
        $nama = "Dinda";
        $alamat = "Tuban";
        $umur = 18;
        return view('week10', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }
}
