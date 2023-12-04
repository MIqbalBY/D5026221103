@extends('master2')

@section('title', "Detail Bolpen")

@section('konten')
    <h3>
        Detail Bolpen
    </h3>

    <a href = "/bolpen" class = "btn btn-primary"> Kembali </a>

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
                        <th> Kode Bolpen </th>
                        <td> {{ $bolpen -> kodebolpen }} </td>
                    </tr>

                    <tr>
                        <th> Merk Bolpen </th>
                        <td> {{ $bolpen -> merkbolpen }} </td>
                    </tr>

                    <tr>
                        <th> Stock Bolpen </th>
                        <td> {{ $bolpen -> stockbolpen }} </td>
                    </tr>

                    <tr>
                        <th> Tersedia </th>
                        <td> {{ $bolpen -> tersedia }} </td>
                    </tr>
                </table>

                <br>

                <a href = "/bolpen" class = "btn btn-primary float-left"> OK </a>
            </div>
        </div>
    </div>
@endsection
