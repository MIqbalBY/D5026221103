    @extends('master2')

    @section('title', "Database Kategori")

    @section('judul_halaman')
        <h3>
            Data Kategori (EAS Kelas D Kode Soal CC)
        </h3>

        <br/>
    @endsection

    @section('konten')
        <h4>
            Pilih Kategori
        </h4>

        <br>

        <div class ="container">
            <div class = "form-group">
                <select class = "form-control" id = "pilihKategori">
                    @foreach($kategori as $k)
                        <option value = "{{ $k -> ID }}"> {{ $k -> Nama }} </option>
                    @endforeach
                </select>
            </div>

            <button type = "button" class = "btn btn-primary" onclick = "kirim()"> Kirim </button>
        </div>

        <br>

        <table class = "table table-bordered table-striped table-hover">
            <tr class = "text-center">
                <th> ID </th>
                <th> Nama </th>
            </tr>

            @foreach($kategori as $k)
                <tr class = "text-center">
                    <td>{{ $k -> ID }}</td>
                    <td>{{ $k -> Nama }}</td>
                </tr>
            @endforeach
        </table>

        <script>
            function kirim()
            {
                var ID = document.getElementById("pilihKategori").value;
                window.location.href = "/hasilcombo/" + ID;
            }
        </script>
    @endsection
