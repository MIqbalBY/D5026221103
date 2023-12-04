@extends('master2')

@section('title', "Edit Data Pegawai")

@section('konten')
    <h3>
        Edit Data Pegawai
    </h3>

    <a href = "/pegawai" class = "btn btn-primary"> Kembali </a>

    <br/>
    <br/>

    @foreach($pegawai as $p)
        <div class = "container">
            <form action = "/pegawai/update" method = "post">
                {{ csrf_field() }}

                <input type = "hidden" name = "id" value = "{{ $p -> pegawai_id }}">

                <div class = "form-group row">
                    <label for = "nama" class = "control-label col-sm-2 font-weight-bold"> Nama </label>
                    <div class = "col-sm-4">
                        <input type = "text" required = "required" name = "nama" class = "form-control" value = "{{ $p -> pegawai_nama }}">
                    </div>
                </div>

                <div class = "form-group row">
                    <label for = "jabatan" class = "control-label col-sm-2 font-weight-bold"> Jabatan </label>
                    <div class = "col-sm-4">
                        <input type = "text" required = "required" name = "jabatan" class = "form-control" value = "{{ $p -> pegawai_jabatan }}">
                    </div>
                </div>

                <div class = "form-group row">
                    <label for = "umur" class = "control-label col-sm-2 font-weight-bold"> Umur </label>
                    <div class = "col-sm-4">
                        <input type = "number" required = "required" name = "umur" class = "form-control" value = "{{ $p -> pegawai_umur }}">
                    </div>
                </div>

                <div class = "form-group row">
                    <label for = "alamat" class = "control-label col-sm-2 font-weight-bold"> Alamat </label>
                    <div class = "col-sm-4">
                        <textarea required = "required" name = "alamat" class = "form-control"> {{ $p -> pegawai_alamat }} </textarea>
                    </div>
                </div>

                <div class = "form-group row">
                    <div class = "offset-sm-2 col-sm-10 pull-right">
                        <button type = "submit" class = "btn btn-primary"> Simpan Data </button>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
@endsection
