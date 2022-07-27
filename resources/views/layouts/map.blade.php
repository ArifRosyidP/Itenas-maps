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
    <link rel="stylesheet" href={{ asset('css/stylenavbar.css') }}>
    <link rel="stylesheet" href={{ asset('css/stylesidebar.css') }}>
    <script src={{ asset('js/script.js') }}></script>

    <!-- Icon title -->
    <link href="https://tik.itenas.ac.id/front/assets/img/logo-tik-favicon.png" rel="icon">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        @include('part.sidebar')
    </header>
    <div class="all-comp">
        <!-- Legenda -->
        <div class="legend-info">

        </div>

        <div class="interactive-map">

            @if ($info === 'Jaringan')
                <img src={{ asset('img/map-itenas-ed3-ja.jpg') }} class="mx-auto d-block imageMaps"
                    alt="Image Problem">
                <div class="container details">
                    <div class="row">
                        <div class="col">
                            <div class="detail-table">
                                <a href="/jtable" class="text-decoration-none">
                                    <button type="button" class="btn btn-dark ">Detail</button>
                                </a>
                            </div>
                        </div>
                        <div class="col">

                            <div class="server-table server-sebaran">
                                <a href="/list-server" class="text-decoration-none">
                                    <button type="button" class="btn btn-dark ">Sebaran Server</button>
                                </a>
                            </div>
                        </div>
                        <div class="col">

                            <div class="server-table server-kondisi">
                                <a href="/kondisi-server" class="text-decoration-none">
                                    <button type="button" class="btn btn-dark ">Kondisi Server</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @include('part.Jaringan.gd1')
                @include('part.Jaringan.gd2')
                @include('part.Jaringan.gd3')
                @include('part.Jaringan.gd4')
                @include('part.Jaringan.gd5a')
                @include('part.Jaringan.gd5b')
                @include('part.Jaringan.gd5c')
                @include('part.Jaringan.gd6a')
                @include('part.Jaringan.gd6b')
                @include('part.Jaringan.gd8')
                @include('part.Jaringan.gd9')
                @include('part.Jaringan.gd10')
                @include('part.Jaringan.gd11')
                @include('part.Jaringan.gd12')
                @include('part.Jaringan.gd13')
                @include('part.Jaringan.gd14')
                @include('part.Jaringan.gd14a')
                @include('part.Jaringan.gd15')
                @include('part.Jaringan.gd16')
                @include('part.Jaringan.gd17')
                @include('part.Jaringan.gd18')
                @include('part.Jaringan.gd19a')
                @include('part.Jaringan.gd19b')
                @include('part.Jaringan.gd20')
                @include('part.Jaringan.gd21')
                @include('part.Jaringan.gd22')
                @include('part.Jaringan.gd23')
                @include('part.Jaringan.gd24')
                @include('part.Jaringan.gd25')
            @elseif ($info === 'Aset')
                <img src={{ asset('img/map-itenas-ed3-as.jpg') }} class="mx-auto d-block imageMaps"
                    alt="Image Problem">
                    <div class="container details">
                        <div class="row">
                            <div class="col">
                                <div class="detail-aset">
                                    <a href="https://aset.itenas.ac.id/login" class="text-decoration-none">
                                        <button type="button" class="btn btn-dark ">Detail Aset</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @include('part.Aset.gd1')
                @include('part.Aset.gd2')
                @include('part.Aset.gd3')
                @include('part.Aset.gd4')
                @include('part.Aset.gd5a')
                @include('part.Aset.gd5b')
                @include('part.Aset.gd5c')
                @include('part.Aset.gd6a')
                @include('part.Aset.gd6b')
                @include('part.Aset.gd8')
                @include('part.Aset.gd9')
                @include('part.Aset.gd10')
                @include('part.Aset.gd11')
                @include('part.Aset.gd12')
                @include('part.Aset.gd13')
                @include('part.Aset.gd14')
                @include('part.Aset.gd14a')
                @include('part.Aset.gd15')
                @include('part.Aset.gd16')
                @include('part.Aset.gd17')
                @include('part.Aset.gd18')
                @include('part.Aset.gd19a')
                @include('part.Aset.gd19b')
                @include('part.Aset.gd20')
                @include('part.Aset.gd21')
                @include('part.Aset.gd22')
                @include('part.Aset.gd23')
                @include('part.Aset.gd24')
                @include('part.Aset.gd25')
            @endif



        </div>
    </div>
    <footer>

    </footer>
</body>


</html>
