@extends('master')

@section('isihalaman')
    <form action = "/formulir/proses" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        Nama: <input type = "text" name = "nama"> <br/>
        NRP: <input type = "text" name = "nrp"> <br/>

        <input class = "btn btn-success" type = "submit" value = "Simpan">
    </form>
@endsection
