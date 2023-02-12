<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="align-middle">
                    <tr>
                        <th class="text-center">ID Pengaduan</th>
                        <th>Tanggal Laporan</th>
                        <th>Judul Laporan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php
                    require '../../server/config.php';

                    $sql = "SELECT * FROM pengaduan WHERE status='proses'";
                    $query = mysqli_query($connect, $sql);

                    if ($query) {
                        while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                            <tr class="text-center">
                                <td class="align-middle"><?= $data['id_pengaduan'] ?></td>
                                <td class="align-middle"><?= $data['tgl_pengaduan'] ?></td>
                                <td class="align-middle"><?= $data['judul_laporan'] ?></td>
                                <td class="align-middle">
                                    <a class="btn btn-primary btn-icon-split" href="?url=detail_verifikasi&id=<?= $data['id_pengaduan'] ?>">
                                        <span class="icon">
                                            <i class="fas fa-info"></i>
                                        </span>
                                        <span class="text">Verifikasi & Detail</span>
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