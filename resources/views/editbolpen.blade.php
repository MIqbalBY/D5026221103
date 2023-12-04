@extends('master2')

@section('title', "Edit Data Bolpen")

@section('konten')
    <h3>
        Edit Data Bolpen
    </h3>

    <a href = "/bolpen" class = "btn btn-primary"> Kembali </a>

    <br/>
    <br/>

    @foreach($bolpen as $b)
        <div class = "container">
            <form action = "/bolpen/update" method = "post">
                {{ csrf_field() }}

                <input type = "hidden" name = "kodebolpen" value = "{{ $b -> kodebolpen }}">

                <div class = "form-group row">
                    <label for = "kodebolpen" class = "control-label col-sm-2 font-weight-bold"> Kode Bolpen </label>
                    <div class = "col-sm-4">
                        <input type = "number" required = "required" name = "kodebolpen" class = "form-control" value = "{{ $b -> kodebolpen }}"">
                    </div>
                </div>

                <div class = "form-group row">
                    <label for = "merkbolpen" class = "control-label col-sm-2 font-weight-bold"> Merk Bolpen </label>
                    <div class = "col-sm-4">
                        <input type = "text" required = "required" name = "merkbolpen" class = "form-control" value = "{{ $b -> merkbolpen }}">
                    </div>
                </div>

                <div class = "form-group row">
                    <label for = "stockbolpen" class = "control-label col-sm-2 font-weight-bold"> Stock Bolpen </label>
                    <div class = "col-sm-4">
                        <input type = "number" required = "required" name = "stockbolpen" class = "form-control" value = "{{ $b -> stockbolpen }}">
                    </div>
                </div>

                <div class = "form-group row">
                    <label for = "tersedia" class = "control-label col-sm-2 font-weight-bold"> Tersedia </label>
                    <div class = "col-sm-4">
                        <input type = "text" required = "required" name = "tersedia" class = "form-control" value = "{{ $b -> tersedia }}">
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
