<?php

$title = 'Detail Pegawai';
include 'layout/header.php';


//menampilkan id pegawai dari url
$id = (int)$_GET['id'];

//menampilkan data pegawai
$data_pegawai = select("SELECT * FROM pegawai WHERE id = $id")[0];

?>

<div class="container mt-5">
        <h1>Data <?= $data_pegawai['nama'];  ?></h1>
        <hr>

        

        <table class="table table-bordered table-striped mt-3" >
            <tr>
                <td>NIP/NIK</td>
                <td>: <?= $data_pegawai['nip_nik']; ?></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>: <?= $data_pegawai['nama']; ?></td>
            </tr>

            <tr>
                <td>Jabatan</td>
                <td>: <?= $data_pegawai['jabatan']; ?></td>
            </tr>

            <tr>
                <td>Golongan Ruang</td>
                <td>: <?= $data_pegawai['gol_ruang']; ?></td>
            </tr>

            <tr>
                <td>Bidang Tugas</td>
                <td>: <?= $data_pegawai['bid_tugas']; ?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td>: <?= $data_pegawai['email']; ?></td>
            </tr>
            
            <tr>
                <td width="50%">Foto</td>
                <td>
                    <a href="asset/img/shiddiq.png">
                        <img src="asset/img/shiddiq.png" alt="foto" width="30%">
                    </a>
                </td>
            </tr>
        </table>

        <a href="pegawai.php" class="btn btn-secondary btn-sm" style="float: right;">Kembali</a>
    </div>


<?php include 'layout/footer.php' ?>