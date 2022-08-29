<?php
$title = 'Daftar Pegawai';

include 'layout/header.php';



//menampilkan data pegawai
$data_pegawai = select("SELECT * FROM pegawai ORDER BY id DESC");

?>

<div class="container mt-5">
        <h1>Data Pegawai</h1>
        <hr>

        <a href="tambah_pegawai.php" class="btn btn-primary mb-1">Tambah</a>

            <table class="table table-bordered table-striped mt-3" id="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIP/NIK</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Golongan Ruang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_pegawai as $pegawai) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $pegawai['nip_nik']; ?></td>
                        <td><?= $pegawai['nama']; ?></td>
                        <td><?= $pegawai['jabatan']; ?></td>
                        <td><?= $pegawai['gol_ruang']; ?></td>
                        <td><?= $pegawai['bid_tugas']; ?></td>
                        <td class="text-center" width="20%">
                            <a href="detail_pegawai.php?id=<?= $pegawai['id'];?>" class="btn btn-secondary btn-sm">Detail</a>
                            <a href="" class="btn btn-success btn-sm">Ubah</a>
                            <a href="" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
    </div>


<?php include 'layout/footer.php' ?>