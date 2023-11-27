@extends('master2')

@section('konten')
        <h2>
            <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
        </h2>

        <h3>
            Tambah Pegawai
        </h3>

        <a href = "/pegawai"> Kembali </a>

        <br/>
        <br/>

        <form action = "/pegawai/store" method = "post" class = "form-horizontal">
            {{ csrf_field() }}

            <label for = "nama" class = "col-sm-2 control-label"> Nama </label>
            <div class = "col-sm-4">
               <input name = "nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan nama pegawai">
            </div>

            <label for = "jabatan" class = "col-sm-2 control-label"> Jabatan </label>
            <div class = "col-sm-4">
               <input name = "jabatan" type = "text" class = "form-control" id = "jabatn" placeholder = "Masukkan jabatan pegawai">
            </div>

            <label for = "umur" class = "col-sm-2 control-label"> Umur </label>
            <div class = "col-sm-4">
               <input name = "umur" type = "text" class = "form-control" id = "umur" placeholder = "Masukkan umur pegawai">
            </div>

            <label for = "alamat" class = "col-sm-2 control-label"> Alamat </label>
            <div class = "col-sm-4">
               <input name = "alamat" type = "text" class = "form-control" id = "alamat" placeholder = "Masukkan alamat pegawai">
            </div>

            <br>
            
            <input type = "submit" class = "btn btn-primary" value = "Simpan Data">
        </form>
@endsection
    </body>
</html>
