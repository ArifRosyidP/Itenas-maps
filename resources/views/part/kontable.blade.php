<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Icon -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://kit.fontawesome.com/57a5f9b5e4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>

    <!-- Custom -->
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/stylesidebar.css') }}>
    <link rel="stylesheet" href="css/stylenavbar.css">
    <script src={{ asset('js/script.js') }}></script>

    <!-- Icon title -->
    <link href="https://tik.itenas.ac.id/front/assets/img/logo-tik-favicon.png" rel="icon">

    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- datatable.js --}}

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</head>

<body>
    <header>

    </header>

    <!-- <div class="container details"> -->
    <div class="container kembali">
        <div class="detail-table">
            <a href="/" class="text-decoration-none">
                <button type="button" class="btn btn-dark ">Kembali</button>
            </a>
        </div>
    </div>

    <div class="table-wrap kon">

        <div class="titlet text-center my-3">
            <h1>{{ $title }}</h1>
        </div>

        <div class="row justify-content-center mt-3 mb-3">
            <div class="col-md-6">
                <form action="/kondisi-server">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- The Table -->
        <div class="container">
            {{-- <table class="table table-responsive-sm table-hover text-center" id="table_id"> --}}
            <table id="table_id" class="display">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">CPU</th>
                        <th scope="col">Memory(GB)</th>
                        <th scope="col">Qty (Unit)</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $num = 1;
                    @endphp
                    @foreach ($konservers as $konserver)
                        <tr>
                            <th scope="row" class="align-middle">{{ $num++ }}</th>
                            <td class="align-middle">{{ $konserver->tipe === '' ? '-' : $konserver->tipe }}</td>
                            <td class="align-middle">{{ $konserver->cpu === '' ? '-' : $konserver->cpu }}</td>
                            <td class="align-middle">{{ $konserver->memori === '' ? '-' : $konserver->memori }}</td>
                            <td class="align-middle">{{ $konserver->qty === '' ? '-' : $konserver->qty }}</td>
                            <td class="align-middle">{{ $konserver->kondisi === '' ? '-' : $konserver->kondisi }}</td>
                            <td class="align-middle">{{ $konserver->tahun === '' ? '-' : $konserver->tahun }}</td>
                            {{-- <td>{{ $konserver->gambar === '' ? '-' : $konserver->gambar }}</td> --}}
                            <td class="align-middle"> <img src="{{ asset('img/img-server/' . $konserver->gambar) }}"
                                    alt="" height="150"> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <footer>

    </footer>
</body>

<style>
</style>

<script></script>

</html>
