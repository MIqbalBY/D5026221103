@extends('master2')

@section('title', "Tambah Data Bolpen Baru")

@section('konten')
    <h3>
        Tambah Data Bolpen
    </h3>

    <a href = "/bolpen" class = "btn btn-primary"> Kembali </a>

    <br/>
    <br/>

    <form action = "/bolpen/store" method = "post">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "merkbolpen" class = "control-label col-sm-2 font-weight-bold"> Merk Bolpen </label>
            <div class = "col-sm-4">
                <input name = "merkbolpen" type = "text" class = "form-control" id = "merkbolpen" placeholder = "Masukkan merk bolpen">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "stockbolpen" class = "control-label col-sm-2 font-weight-bold"> Stock Bolpen </label>
            <div class = "col-sm-4">
                <input name = "stockbolpen" type = "text" class = "form-control" id = "stockbolpen" placeholder = "Masukkan stock bolpen">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "tersedia" class = "control-label col-sm-2 font-weight-bold"> Tersedia </label>
            <div class = "col-sm-4">
                <input name = "tersedia" type = "text" class = "form-control" id = "tersedia" placeholder = "Masukkan ketersediaan bolpen (Y/N)">
            </div>
        </div>

        <div class = "form-group row">
            <div class = "offset-sm-2 col-sm-10 pull-right">
                <button type = "submit" class = "btn btn-primary"> Simpan Data </button>
            </div>
        </div>
    </form>
@endsection
