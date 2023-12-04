<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BolpenController extends Controller
{
    public function index()
    {
        $bolpen = DB::table('bolpen') -> paginate(15);

        // Mengirim data bolpen ke view index
        return view('indexbolpen', ['bolpen' => $bolpen]);
    }

    // Method untuk menampilkan view form tambah bolpen
    public function tambah()
    {
        // Memanggil view tambah
        return view('tambahbolpen');
    }

    // Method untuk insert data ke table bolpen
    public function store(Request $request)
    {
        // Insert data ke table bolpen
        DB::table('bolpen') -> insert([
            'kodebolpen' => $request -> kodebolpen,
            'merkbolpen' => $request -> merkbolpen,
            'stockbolpen' => $request -> stockbolpen,
            'tersedia' => $request -> tersedia
            ]);

        // Alihkan halaman ke halaman bolpen
        return redirect('/bolpen');
    }

    // Method untuk edit data bolpen
    public function edit($kodebolpen)
    {
        // Mengambil data bolpen berdasarkan kode bolpen yang dipilih
        $bolpen = DB::table('bolpen') -> where('kodebolpen', $kodebolpen) -> get();

        // Passing data bolpen yang didapat ke view editbolpen.blade.php
        return view('editbolpen', ['bolpen' => $bolpen]);
    }

    // Method untuk update data bolpen
    public function update(Request $request)
    {
        // Update data bolpen
        DB::table('bolpen') -> where('kodebolpen', $request -> kodebolpen) -> update([
            'kodebolpen' => $request -> kodebolpen,
            'merkbolpen' => $request -> merkbolpen,
            'stockbolpen' => $request -> stockbolpen,
            'tersedia' => $request -> tersedia
        ]);

        // Alihkan halaman ke halaman bolpen
        return redirect('/bolpen');
    }

    // Method untuk hapus data bolpen
    public function hapus($kodebolpen)
    {
        // Menghapus data bolpen berdasarkan id yang dipilih
        DB::table('bolpen') -> where('kodebolpen', $kodebolpen) -> delete();

        // Alihkan halaman ke halaman bolpen
        return redirect('/bolpen');
    }

    // Method untuk mencari data bolpen
    public function cari(Request $request)
	{
		// Menangkap data pencarian
		$cari = $request -> cari;

    		// Mengambil data dari table bolpen sesuai pencarian data
		$bolpen = DB::table('bolpen')
                    -> where('merkbolpen', 'like', "%".$cari."%")
                    -> paginate();

    		// Mengirim data bolpen ke view index
		return view('indexbolpen', ['bolpen' => $bolpen]);
	}

    public function view($kodebolpen)
    {
        // Mengambil data bolpen berdasarkan id
        $bolpen = DB::table('bolpen') -> where('kodebolpen', $kodebolpen) -> first();

        // Mengirim data bolpen ke view tampilkan.blade.php
        return view('viewbolpen', ['bolpen' => $bolpen]);
    }
}
