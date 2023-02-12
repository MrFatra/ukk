<?php

require '../../server/config.php';

$sql = "SELECT * FROM petugas WHERE id_petugas='$_GET[id]'";
$query = mysqli_query($connect, $sql);

if ($query) {
    $data = mysqli_fetch_assoc($query);
?>
    <div class="card">
        <div class="card-header">
            Edit petugas
        </div>
        <div class="card-body">
            <form action="../../server/edit_petugas.php?id=<?= $_GET['id'] ?>" method="post">
                <div class="form-group">
                    <label class="form-label" for="nama">Nama Petugas : </label>
                    <input type="text" class="form-control" id="nama" name="nama_petugas" value="<?= $data['nama_petugas'] ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="username">Username : </label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="telepon">Nomor Telepon : </label>
                    <input type="number" class="form-control" id="telepon" name="telepon" value="<?= $data['telepon'] ?>">
                </div>
                <div class="row">
                    <div class="form-group">
                        <button class="btn btn-icon-split btn-success" name="submit">
                            <span class="icon">
                                <i class="fas fa-check-circle"></i>
                            </span>
                            <span class="text">Simpan</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php

}

?>