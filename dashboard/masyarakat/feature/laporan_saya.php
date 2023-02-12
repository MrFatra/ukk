<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="align-middle">
                    <tr>
                        <th class="text-center">NO</th>
                        <th>Tanggal Laporan</th>
                        <th>Judul Laporan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php
                    require '../../server/config.php';

                    $i = 1;
                    $sql = "SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]'";
                    $query = mysqli_query($connect, $sql);

                    if ($query) {
                        while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                            <tr class="text-center">
                                <td><?= $i++ ?></td>
                                <td><?= $data['tgl_pengaduan'] ?></td>
                                <td><?= $data['judul_laporan'] ?></td>
                                <td><?= $data['status'] ?></td>
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