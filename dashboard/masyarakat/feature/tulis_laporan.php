<?php

require '../../server/config.php';

$sql = "SELECT * FROM masyarakat WHERE nik='$_SESSION[nik]'";
$query = mysqli_query($connect, $sql);

$data = $query->fetch_assoc();
?>

<div class="card">
    <div class="card-header">
        <h4>Tulis Laporan Pengaduan</h4>
    </div>
    <div class="card-body">
        <form action="../../server/tulis_laporan.php" method="post" enctype="multipart/form-data">
            <div class="row m-0">
                <div class="form-group col-sm-4">
                    <label for="nik" class="form-label font-weight-bold">NIK :</label>
                    <input class="form-control" id="nik" type="text" name="nik" value="<?= $data['nik'] ?>" style="border-radius: 10px;" readonly>
                </div>
                <div class="form-group col-sm-4">
                    <label for="nama" class="form-label font-weight-bold">Nama :</label>
                    <input class="form-control text-center" id="nama" type="text" name="nama" value="<?= $data['nama'] ?>" style="border-radius: 10px;" readonly>
                </div>
                <div class="form-group col-sm-4">
                    <label for="tgl_laporan" class="form-label font-weight-bold">Tanggal Laporan :</label>
                    <input class="form-control text-center" id="tgl_laporan" type="text" name="tgl_laporan" value="<?= date('Y-m-d') ?>" style="border-radius: 10px;" readonly>
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label for="judul_laporan" class="form-label font-weight-bold">Judul Laporan :</label>
                <input class="form-control" id="judul_laporan" type="text" name="judul_laporan" style="border-radius: 10px;" required>
            </div>
            <div class="form-group col-sm-12">
                <label for="isi_laporan" class="form-label font-weight-bold">Isi Laporan :</label>
                <textarea class="form-control" id="isi_laporan" type="text" name="isi_laporan" style="border-radius: 10px;" rows="6" required></textarea>
            </div>
            <div class="input-group mt-4 col-sm-12">
                <div class="input-group-prepend">
                    <span class="input-group-text font-weight-bold">Bukti Foto</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto" name="foto" required>
                    <label class="custom-file-label" for="foto">Pilih file</label>
                </div>
            </div>
            <div class="mt-5 col-sm-12">
                <button type="submit" name="submit" class="btn btn-primary pl-4 pr-4 font-weight-bold">Lapor!</button>
                <button type="reset" name="reset" class="btn btn-warning pl-4 pr-4 font-weight-bold">Reset</button>
            </div>
        </form>
    </div>
</div>