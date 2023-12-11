@extends('master2')

@section('title', "Detail Kategori")

@section('konten')
    <h3>
        Anda telah memilih Kategori dengan Kode: {{ $ID -> ID }}
    </h3>

    <br>

    <a href = "/combo" class = "btn btn-primary"> Kembali </a>
@endsection
