@extends('master2')

@section('konten')
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Detail Pegawai
    </h3>

    <a href = "/pegawai" class = "btn btn-primary"> Kembali </a>

    <br/>
    <br/>

    <div class = "container">
        <div class = "row">
            <div class = "col-md-6">
                <!-- Kiri (Isi kosong) -->
            </div>

            <div class = "col-md-6">
                <table class = "table table-hover">
                    <tr>
                        <th> Nama </th>
                        <td> {{ $pegawai->pegawai_nama }} </td>
                    </tr>

                    <tr>
                        <th> Jabatan </th>
                        <td> {{ $pegawai->pegawai_jabatan }} </td>
                    </tr>

                    <tr>
                        <th> Umur </th>
                        <td> {{ $pegawai->pegawai_umur }} </td>
                    </tr>

                    <tr>
                        <th> Alamat </th>
                        <td> {{ $pegawai->pegawai_alamat }} </td>
                    </tr>
                </table>

                <br>

                <a href = "/pegawai" class = "btn btn-primary float-left"> OK </a>
            </div>
        </div>
    </div>
@endsection
