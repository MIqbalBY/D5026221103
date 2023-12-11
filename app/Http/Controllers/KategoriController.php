<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        // Mengambil data dari table kategori
        $kategori = DB::table('kategori') -> get();

        // Mengirim data pegawai ke view index
        return view('indexkategori', ['kategori' => $kategori]);
    }

    public function view($selectedCategoryID)
    {
        // Mengambil data kategori berdasarkan ID
        $category = DB::table('kategori') -> where('ID', $selectedCategoryID) -> first();

        // Mengirim data kategori ke view viewkategori.blade.php
        return view('viewkategori', ['ID' => $category]);
    }
}
