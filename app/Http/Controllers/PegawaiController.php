<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        // Mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai') -> get();
        $pegawai = DB::table('pegawai') -> paginate(15);

        // Mengirim data pegawai ke view index
        return view('indexpegawai', ['pegawai' => $pegawai]);
    }

    // Method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // Memanggil view tambah
        return view('tambahpegawai');
    }

    // Method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // Insert data ke table pegawai
        DB::table('pegawai') -> insert([
            'pegawai_nama' => $request -> nama,
            'pegawai_jabatan' => $request -> jabatan,
            'pegawai_umur' => $request -> umur,
            'pegawai_alamat' => $request -> alamat
            ]);

        // Alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    // Method untuk edit data pegawai
    public function edit($id)
    {
        // Mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai') -> where('pegawai_id', $id) -> get();

        // Passing data pegawai yang didapat ke view edit.blade.php
        return view('editpegawai', ['pegawai' => $pegawai]);
    }

    // Method untuk update data pegawai
    public function update(Request $request)
    {
        // Update data pegawai
        DB::table('pegawai') -> where('pegawai_id', $request -> id) -> update([
            'pegawai_nama' => $request -> nama,
            'pegawai_jabatan' => $request -> jabatan,
            'pegawai_umur' => $request -> umur,
            'pegawai_alamat' => $request -> alamat
        ]);

        // Alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    // Method untuk hapus data pegawai
    public function hapus($id)
    {
        // Menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai') -> where('pegawai_id', $id) -> delete();

        // Alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    // Method untuk mencari data pegawai
    public function cari(Request $request)
	{
		// Menangkap data pencarian
		$cari = $request -> cari;

    		// Mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
                    -> where('pegawai_nama', 'like', "%".$cari."%")
                    -> paginate();

    		// Mengirim data pegawai ke view index
		return view('indexpegawai', ['pegawai' => $pegawai]);
	}

    public function view($selectedCategoryID)
    {
        // Mengambil data kategori berdasarkan ID
        $kategori = DB::table('kategori') -> where('ID', $ID) -> first();

        // Mengirim data kategori ke view viewkategori.blade.php
        return view('viewkategori', ['kategori' => $kategori]);
    }
}
