<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tabel Jaringan</title>


    <!-- Icon -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://kit.fontawesome.com/57a5f9b5e4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/style/tstyle.css"> -->
    <script src="assets/scripts/script.js"></script>
</head>

<body>
    <?php
    include("controller/connection.php");

    // SELECT g.nama_gedung, d.id_lantai, l.keterangan, id_ssid, nama_ssid, status, s_download, s_upload FROM detailssid d JOIN gedung g ON g.id_gedung = d.id_gedung JOIN lantai l ON l.id_lantai = d.id_lantai;

    // ubah table detailssd aja jika ingin menambahkan sesuatu

    // $result = mysqli_query($conn, "SELECT g.nama_gedung, d.id_lantai, l.keterangan, id_ssid, nama_ssid, status, s_download, s_upload FROM detailssid d LEFT JOIN gedung g ON g.id_gedung = d.id_gedung LEFT JOIN lantai l ON l.id_lantai = d.id_lantai");

    // $result = mysqli_query($conn, "SELECT g.nama_gedung, d.id_lantai, l.keterangan, id_ssid, nama_ssid, status, s_download, s_upload FROM detailssid d JOIN gedung g ON g.id_gedung = d.id_gedung JOIN lantai l ON l.id_lantai = d.id_lantai");

    // $result = mysqli_query($conn, "SELECT g.nama_gedung, d.id_lantai, l.keterangan, id_ssid, nama_ssid, s.nama_status, s_download, s_upload FROM detailssid d LEFT JOIN gedung g ON g.id_gedung = d.id_gedung LEFT JOIN lantai l ON l.id_lantai = d.id_lantai LEFT JOIN status s ON s.id_status = d.id_status");

    $result = mysqli_query($conn, "SELECT g.nama_gedung, d.id_lantai, l.keterangan, id_ssid, nama_ssid, s.nama_status FROM detailssid d LEFT JOIN gedung g ON g.id_gedung = d.id_gedung LEFT JOIN lantai l ON l.id_lantai = d.id_lantai LEFT JOIN status s ON s.id_status = d.id_status");

    ?>

    <header>

    </header>

    <!-- <div class="container details"> -->
    <div class="container details position-absolute">
        <div class="detail-table">
            <a href="." class="text-decoration-none">
                <button type="button" class="btn btn-success ">Kembali</button>
            </a>
        </div>
    </div>

    <div class="titlet text-center my-3">
        <h1>Detail Jaringan</h1>
    </div>

    <!-- The Table -->
    <div class="container">
        <table class="table table-responsive-sm table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Gedung</th>
                    <!-- <th scope="col">Id Lantai</th>  -->
                    <th scope="col">Lantai</th>
                    <!-- <th scope="col">Id SSID</th> -->
                    <th scope="col">Nama SSID</th>
                    <th scope="col">Status</th>
                    <!-- <th scope="col">Speed Download</th> -->
                    <!-- <th scope="col">Speed Upload</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $num = 1;
                while ($truangan = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $num++ . "</td>";
                    echo "<td>" . $truangan['nama_gedung'] . "</td>";
                    // echo "<td>" . $truangan['id_lantai'] . "</td>";
                    echo "<td>" . $truangan['keterangan'] . "</td>";
                    // echo "<td>" . $truangan['id_ssid'] . "</td>";
                    echo "<td>" . $truangan['nama_ssid'] . "</td>";
                    echo "<td>" . $truangan['nama_status'] . "</td>";
                    // if (is_null($truangan['s_download'])) {
                    //     echo "<td>" . $truangan['s_download'] . " - </td>";
                    // } else {
                    //     echo "<td>" . $truangan['s_download'] . " Mbps </td>";
                    //     // echo $data['s_download'];
                    // }
                    // if (is_null($truangan['s_upload'])) {
                    //     echo "<td>" . $truangan['s_upload'] . " - </td>";
                    // } else {
                    //     echo "<td>" . $truangan['s_upload'] . " Mbps </td>";
                    // }
                }
                ?>
            </tbody>
        </table>
    </div>


    <footer>

    </footer>
</body>

<style>
</style>

</html>