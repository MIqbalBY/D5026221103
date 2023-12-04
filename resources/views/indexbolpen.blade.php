@extends('master2')

@section('title', "Database Bolpen")

@section('judul_halaman')
    <h3>
        Data Bolpen
    </h3>

    <a href = "/bolpen/tambah" class = "btn btn-primary"> Tambah Bolpen Baru </a>

    <br>
    <br>
@endsection

@section('konten')
    <form action = "/bolpen/cari" method = "GET" class = "search-form">
        <input class = "form-control search-input" type = "text" name = "cari" placeholder = "Cari bolpen berdasarkan merk ..." value = "{{ old('cari') }}">
        <input type = "submit" value = "Cari" class = "btn btn-primary">
    </form>

    <br>

    <table class = "table table-bordered table-striped table-hover">
        <tr class = "text-center">
            <th> Kode Bolpen </th>
            <th> Merk Bolpen </th>
            <th> Stock Bolpen </th>
            <th> Tersedia </th>
            <th> Opsi </th>
        </tr>

        @foreach($bolpen as $b)
            <tr>
                <td class = "text-center"> {{ $b -> kodebolpen }} </td>
                <td> {{ $b -> merkbolpen }} </td>
                <td class = "text-center"> {{ $b -> stockbolpen }} </td>
                <td class = "text-center"> {{ $b -> tersedia }} </td>
                <td class = "text-center">
                    <a href = "/bolpen/view/{{ $b -> kodebolpen }}" class = "btn btn-success"> View </a>
                    <a href = "/bolpen/edit/{{ $b -> kodebolpen }}" class = "btn btn-warning"> Edit </a>
                    <a href = "/bolpen/hapus/{{ $b -> kodebolpen }}" class = "btn btn-danger"> Hapus </a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $bolpen -> links() }}
@endsection
