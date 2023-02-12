<?php

require '../../server/config.php';

$sql = "SELECT * FROM pengaduan, masyarakat WHERE id_pengaduan='$_GET[id]'";
$query = mysqli_query($connect, $sql);
if ($query) {
    $data = mysqli_fetch_assoc($query);
?>

    <div class="card">
        <div class="card-header">
            Detail Laporan Pengaduan
        </div>
        <div class="card-body">
            <div class="wrap-form">
                <form action="../../server/verifikasi_laporan.php" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="form-group">
                                <label for="id_pengaduan" class="form-label font-weight-bold">ID Pengaduan :</label>
                                <input type="text" name="id_pengaduan" id="id_pengaduan" class="form-control" value="<?= $data['id_pengaduan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="nama" class="form-label font-weight-bold">Nama Pelapor :</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="tgl_laporan" class="form-label font-weight-bold">Tanggal Laporan :</label>
                                <input type="text" name="tgl_laporan" id="tgl_laporan" class="form-control" value="<?= $data['tgl_pengaduan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="judul_laporan" class="form-label font-weight-bold">Judul Laporan :</label>
                                <input type="text" name="judul_laporan" id="judul_laporan" class="form-control" value="<?= $data['judul_laporan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="isi_laporan" class="form-label font-weight-bold">Isi Laporan :</label>
                                <textarea type="text" name="isi_laporan" id="isi_laporan" class="form-control" placeholder="<?= $data['isi_laporan'] ?>" readonly rows="6"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="foto" class="form-label font-weight-bold">Bukti Foto :</label>
                                <img id="foto" src="foto/<?= $data['foto'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="tanggapan" class="form-label font-weight-bold">Tanggapan :</label>
                                <textarea type="text" name="tanggapan" id="tanggapan" class="form-control" placeholder="Sertakan tanggapan anda disini..." rows="6" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <button class="btn btn-icon-split btn-success" name="submit">
                                    <span class="icon">
                                        <i class="fas fa-check-circle"></i>
                                    </span>
                                    <span class="text">Verifikasi</span>
                                </button>
                            </div>
                        </div>
                </form>
            </div>
            <div class="wrap-form">
                <div class="container">
                    <form action="../../server/verifikasi_laporan.php" method="post">
                        <input type="hidden" name="id_pengaduan" value="<?= $data['id_pengaduan'] ?>">
                        <div class="row">
                            <div class="form-group">
                                <button class="btn btn-icon-split btn-danger" name="delete">
                                    <span class="icon">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Laporan Sesat!</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
} else {
?>

    <p class="text-danger font-weight-bold">Mohon maaf, data yang ditujukan tidak tersedia untuk saat ini.</p>

<?php
}
?>