@extends('master2')

@section('title', "Database Nilai Kuliah")

@section('judul_halaman')
    <h3>
        Data Nilai Kuliah
    </h3>

    <a href = "/nilai_kuliah/tambah" class = "btn btn-primary"> Tambah Mahasiswa Baru </a>

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

    <table class = "table table-bordered table-striped table-hover">
        <tr  class = "text-center">
            <th> ID </th>
            <th> NRP </th>
            <th> NilaiAngka </th>
            <th> SKS </th>
            <th> Nilai Huruf </th>
            <th> Bobot   </th>
        </tr>

		@foreach($nilaikuliah as $n)
		<tr class = "text-center">
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
