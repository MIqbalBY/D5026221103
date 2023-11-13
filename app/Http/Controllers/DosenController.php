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
        $nama = "Iqbal";
        $alamat = "Nganjuk";
        $umur = 19;
        return view('week10', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function showNama($nama)
    // $nama = nama di web.php
    {
        return "Nama Anda adalah: " . $nama;
    }

    public function formulir()
    {
        // Cek tentang hak akses
    	return view('formulir');
    }

    public function proses(Request $request)
    {
        $nama = $request -> input('nama');
     	$alamat = $request -> input('nrp');
        return "Nama: ".$nama.", NRP: ".$alamat;
    }
}
