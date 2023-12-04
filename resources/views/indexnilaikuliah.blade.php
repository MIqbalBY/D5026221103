@extends('master2')

@section('title', "Database Nilai Kuliah")

@section('judul_halaman')
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Data Nilai Kuliah
    </h3>

    <a href = "/nilaikuliah/tambah" class = "btn btn-primary"> Tambah Mahasiswa Baru </a>

    <br/>
    <br/>
@endsection

@section('konten')

@php
function angkaToHuruf($nilai)
{
    if ($nilai >= 81 && $nilai <= 100)
    {
        return 'A';
    }

    elseif ($nilai >= 61 && $nilai <= 80)
    {
        return 'B';
    }

    elseif ($nilai >= 41 && $nilai <= 60)
    {
        return 'C';
    }

    elseif ($nilai >= 0 && $nilai <= 40)
    {
        return 'D';
    }

    else
    {
        return 'Nilai tidak valid';
    }
}
@endphp

    <table class = "table table-striped table-hover">
        <tr>
            <th> ID </th>
            <th> NRP </th>
            <th> NilaiAngka </th>
            <th> SKS </th>
            <th> Nilai Huruf </th>
            <th> Bobot   </th>
        </tr>

		@foreach($nilaikuliah as $n)
		<tr>
			<td> {{ $n -> ID }} </td>
			<td> {{ $n -> NRP }} </td>
			<td> {{ $n -> NilaiAngka }} </td>
			<td> {{ $n -> SKS }} </td>
            <td> {{ angkaToHuruf($n -> NilaiAngka) }} </td>
            <td> {{$n -> NilaiAngka * $n -> SKS}} </td>
		</tr>
		@endforeach
    </table>
@endsection
