@extends('master2')

@section('title', "Database Pegawai")

@section('judul_halaman')
    <h3>
        Data Pegawai
    </h3>

    <a href = "/pegawai/tambah" class = "btn btn-primary"> Tambah Pegawai Baru </a>

    <br/>
    <br/>
@endsection

@section('konten')
    <form action = "/pegawai/cari" method = "GET" class = "search-form">
        <input class = "form-control search-input" type = "text" name = "cari" placeholder = "Cari pegawai berdasarkan nama ..." value = "{{ old('cari') }}">
        <input type = "submit" value = "Cari" class = "btn btn-primary">
    </form>

    <br>

    <table class = "table table-bordered table-striped table-hover">
        <tr class = "text-center">
            <th> Nama </th>
            <th> Jabatan </th>
            <th> Umur </th>
            <th> Alamat </th>
            <th> Opsi </th>
        </tr>

        @foreach($pegawai as $p)
            <tr>
                <td> {{ $p -> pegawai_nama }} </td>
                <td> {{ $p -> pegawai_jabatan }} </td>
                <td class = "text-center"> {{ $p -> pegawai_umur }} </td>
                <td> {{ $p -> pegawai_alamat }} </td>
                <td class="text-center opsi-column">
                    <a href = "/pegawai/view/{{ $p -> pegawai_id }}" class = "btn btn-success"> View </a>
                    <a href = "/pegawai/edit/{{ $p -> pegawai_id }}" class = "btn btn-warning"> Edit </a>
                    <a href = "/pegawai/hapus/{{ $p -> pegawai_id }}" class = "btn btn-danger"> Hapus </a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $pegawai -> links() }}
@endsection
