@extends('master2')

@section('konten')
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Tambah Pegawai
    </h3>

    <a href = "/pegawai" class = "btn btn-primary"> Kembali </a>

    <br/>
    <br/>

    <form action = "/pegawai/store" method = "post">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "nama" class = "control-label col-sm-2 font-weight-bold"> Nama </label>
            <div class = "col-sm-4">
                <input name = "nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan nama pegawai">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "jabatan" class = "control-label col-sm-2 font-weight-bold"> Jabatan </label>
            <div class = "col-sm-4">
                <input name = "jabatan" type = "text" class = "form-control" id = "jabatan" placeholder = "Masukkan jabatan pegawai">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "umur" class = "control-label col-sm-2 font-weight-bold"> Umur </label>
            <div class = "col-sm-4">
                <input name = "umur" type = "text" class = "form-control" id = "umur" placeholder = "Masukkan umur pegawai">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "alamat" class = "control-label col-sm-2 font-weight-bold"> Alamat </label>
            <div class = "col-sm-4">
                <input name = "alamat" type = "text" class = "form-control" id = "alamat" placeholder = "Masukkan alamat pegawai">
            </div>
        </div>

        <div class = "form-group row">
            <div class = "offset-sm-2 col-sm-10 pull-right">
                <button type = "submit" class = "btn btn-primary"> Simpan Data </button>
            </div>
        </div>
    </form>
@endsection
