@extends('master2')

@section('title', "Tambah Data Mahasiswa Baru")

@section('konten')
    <h3>
        Tambah Data Mahasiswa Baru
    </h3>

    <a href = "/nilai_kuliah" class = "btn btn-primary"> Kembali </a>

    <br/>
    <br/>

    <form action = "/nilai_kuliah/store" method = "post">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "NRP" class = "control-label col-sm-2 font-weight-bold"> NRP </label>
            <div class = "col-sm-4">
                <input name = "NRP" type = "text" class = "form-control" id = "NRP" placeholder = "Masukkan NRP mahasiswa">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "NilaiAngka" class = "control-label col-sm-2 font-weight-bold"> Nilai Angka </label>
            <div class = "col-sm-4">
                <input name = "NilaiAngka" type = "text" class = "form-control" id = "NilaiAngka" placeholder = "Masukkan nilai angka mahasiswa">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "SKS" class = "control-label col-sm-2 font-weight-bold"> SKS </label>
            <div class = "col-sm-4">
                <input name = "SKS" type = "text" class = "form-control" id = "SKS" placeholder = "Masukkan SKS mahasiswa">
            </div>
        </div>

        <div class = "form-group row">
            <div class = "offset-sm-2 col-sm-10 pull-right">
                <button type = "submit" class = "btn btn-primary"> Simpan Data </button>
            </div>
        </div>
    </form>
@endsection
