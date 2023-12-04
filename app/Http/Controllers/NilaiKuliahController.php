<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        // Mengambil data dari table nilai kuliah
        $nilaikuliah = DB::table('nilaikuliah') -> get();

        // Mengirim data pegawai ke view index
        return view('indexnilaikuliah', ['nilaikuliah' => $nilaikuliah]);
    }

    // Method untuk menampilkan view form tambah nilai kuliah
    public function tambah()
    {
        // Memanggil view tambah
        return view('tambahnilaikuliah');
    }

    // Method untuk insert data ke table nilai kuliah
    public function store(Request $request)
    {
        // Insert data ke table nilai kuliah
        DB::table('nilaikuliah') -> insert([
            'ID' => $request -> ID,
            'NRP' => $request -> NRP,
            'NilaiAngka' => $request -> NilaiAngka,
            'SKS' => $request -> SKS
            ]);

        // Alihkan halaman ke halaman pegawai
        return redirect('/nilaikuliah');
    }
}
