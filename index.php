
<?php

$title = "Data Laporan";

include 'layout/header.php';

$data_pegawai = select("SELECT * FROM data_laporan ORDER BY id DESC");
?>

<div class="container mt-5">
        <h1>Data Laporan</h1>
        <hr>

        <a href="tambah.php" class="btn btn-primary mb-1">Tambah</a>

            <table class="table table-bordered table-striped mt-3" id="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Masalah</th>
                    <th>Waktu</th>
                    <th>Pelapor</th>
                    <th>Solusi</th>
                    <th>Durasi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_pegawai as $laporan) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $laporan['masalah']; ?></td>
                    <td><?= $laporan['waktu']; ?></td>
                    <td><?= $laporan['pelapor']; ?> </td>
                    <td><?= $laporan['solusi']; ?></td>
                    <td><?= $laporan['durasi']; ?> </td>
                    <td><?= $laporan['status']; ?></td>
                    <td width="15%" class="text-center">
                        <a href="ubah.php?id=<?= $laporan['id'];?>" class="btn btn-success">Ubah</a>
                        <a href="hapus.php?id=<?= $laporan['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin Menghapus Data?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
    </div>


    <?php include 'layout/footer.php'; ?>
