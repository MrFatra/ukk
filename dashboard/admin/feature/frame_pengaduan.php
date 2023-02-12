<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="card">
        <div class="card-header">
            Data Laporan Pengaduan
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Pengaduan</th>
                            <th>Nama Pelapor</th>
                            <th>Nama Penanggap</th>
                            <th>Tanggal Laporan</th>
                            <th>Judul Laporan</th>
                            <th>Isi Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        require '../../../server/config.php';

                        $sql = "SELECT * FROM masyarakat, pengaduan, tanggapan WHERE pengaduan.nik=masyarakat.nik AND pengaduan.id_pengaduan=tanggapan.id_pengaduan";
                        $query = mysqli_query($connect, $sql);
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?= $data['id_pengaduan'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['id_petugas'] ?></td>
                                <td><?= $data['tgl_pengaduan'] ?></td>
                                <td><?= $data['judul_laporan'] ?></td>
                                <td><?= $data['isi_laporan'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../js/demo/chart-area-demo.js"></script>
    <script src="../../../js/demo/chart-pie-demo.js"></script>

</body>

</html>