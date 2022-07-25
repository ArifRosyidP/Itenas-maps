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

    <div class="table-wrap">

        <div class="titlet text-center my-3">
            <h1>{{ $title }}</h1>
        </div>

        <div class="container p-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="/jtable">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-dark" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- The Table -->
        <div class="container cus-table">
            <table class="table table-responsive-sm table-hover text-center">
                <thead class="table-dark">
                    <tr>
<<<<<<< HEAD
                        <th scope="row">{{ $num++ }}</th>
                        <td>{{ $ssid->Gedung->name === '' ? '-' : $ssid->Gedung->name }}</td>
                        <td>{{ $ssid->Lantai->keterangan === '' ? '-' : $ssid->Lantai->keterangan }}</td>
                        <td>{{ $ssid->nama_ssid === '' ? '-' : $ssid->nama_ssid }}</td>
                        <td>{{ $ssid->Status->nama_status === '' ? '-' : $ssid->Status->nama_status }}</td>
=======
                        <th scope="col">No</th>
                        <th scope="col">Nama Gedung</th>
                        <!-- <th scope="col">Id Lantai</th>  -->
                        <th scope="col">Lantai</th>
                        <!-- <th scope="col">Id SSID</th> -->
                        <th scope="col">Nama SSID</th>
                        <th scope="col">Status</th>
                        <!-- <th scope="col">Speed Download</th> -->
                        <!-- <th scope="col">Speed Upload</th> -->
>>>>>>> origin
                    </tr>
                </thead>
                <tbody>
                    @php
                        $num = 1;
                    @endphp
                    @foreach ($ssids as $ssid)
                        <tr>
                            <th scope="row">{{ $num++ }}</th>
                            <td>{{ $ssid->Gedung->name === '' ? '-' : $ssid->Gedung->name }}</td>
                            <td>{{ $ssid->lantai->keterangan === '' ? '-' : $ssid->lantai->keterangan }}</td>
                            <td>{{ $ssid->nama_ssid === '' ? '-' : $ssid->nama_ssid }}</td>
                            <td>{{ $ssid->Status->nama_status === '' ? '-' : $ssid->Status->nama_status }}</td>
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

</html>
