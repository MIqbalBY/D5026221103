<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
	<p>
        Ini Adalah Halaman Kontak
    </p>

	<table class = "table table-hover">
		<tr>
			<td> Nama </td>
			<td> : </td>
			<td> Muhammad Iqbal Baiduri Yamani </td>
		</tr>

        <tr>
			<td> Alamat </td>
			<td> : </td>
			<td> Asrama Mahasiswa ITS Blok H-318 </td>
		</tr>

        <tr>
			<td> Email </td>
			<td> : </td>
			<td> mikbalby@gmail.com </td>
		</tr>

		<tr>
			<td> Nomor HP </td>
			<td> : </td>
			<td> <a href = "https://wa.me/085790714547"> 0857-9071-4547 </a> </td>
		</tr>

        @for($i = 1; $i < 5; $i++)
            <tr>
                <td> Loop Ke- </td>
                <td> : </td>
                <td> {{ $i }} </td>
            </tr>
        @endfor
	</table>
@endsection
