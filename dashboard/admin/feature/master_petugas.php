<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="align-middle">
                    <tr>
                        <th class="text-center">ID Petugas</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Nomor Telepon</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php
                    require '../../server/config.php';

                    $sql = "SELECT * FROM petugas WHERE id_petugas <> '$_SESSION[id_petugas]'";
                    $query = mysqli_query($connect, $sql);

                    if ($query) {
                        while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                            <tr class="text-center">
                                <td class="align-middle"><?= $data['id_petugas'] ?></td>
                                <td class="align-middle"><?= $data['nama_petugas'] ?></td>
                                <td class="align-middle"><?= $data['username'] ?></td>
                                <td class="align-middle"><?= $data['telepon'] ?></td>
                                <td class="align-middle"><?= $data['level'] ?></td>
                                <td class="align-middle">
                                    <a class="btn btn-primary btn-icon-split" href="index.php?url=edit_petugas&id=<?= $data['id_petugas'] ?>">
                                        <span class="icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Edit Data</span>
                                    </a>
                                    <a class="btn btn-danger btn-icon-split" href="../../server/remove_petugas.php?id=<?= $data['id_petugas'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        <span class="icon">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus Data</span>
                                    </a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>