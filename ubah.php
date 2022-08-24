<?php

$title = 'Ubah Laporan';

include 'layout/header.php';

//Mengambil id barang dari url
$id= (int)$_GET['id'];

$laporan = select("SELECT * FROM data_laporan where id = $id")[0];

//cek apakah tombol tambah ditekan
if (isset($_POST['ubah'])){
    if (update_laporan($_POST) > 0){
        echo "<script>
            alert('Data Barang Berhasil Diubah');
            document.location.href = 'index.php';
            </script>";
        
    } else{
        echo "<script>
            alert('Data Barang Gagal Diubah');
            document.location.href = 'index.php';
            </script>";
    }
}

?>

<div class="container mt-5">
    <h1>Ubah Barang</h1>
    <hr>

    <form action="" method="post">

    <input type="hidden" name="id" value="<?= $laporan['id'];?>">

        <div class="mb-3">
            <label for="masalah" class="form-label">Masalah</label>
            <input type="text" class="form-control" id="masalah" name="masalah" value="<?= $laporan['masalah']?>" placeholder="Masalah" required>
        </div>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <input type="text" class="form-control" id="waktu" name="waktu" value="<?= $laporan['waktu']?>" placeholder="Waktu" required>
        </div>
        <div class="mb-3">
            <label for="pelapor" class="form-label">Pelapor</label>
            <input type="text" class="form-control" id="pelapor" name="pelapor" value="<?= $laporan['pelapor']?>" placeholder="Pelapor" required>
        </div>
        <div class="mb-3">
            <label for="solusi" class="form-label">Solusi</label>
            <input type="text" class="form-control" id="solusi" name="solusi" value="<?= $laporan['solusi']?>" placeholder="solusi" required>
        </div>
        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi</label>
            <input type="text" class="form-control" id="durasi" name="durasi" value="<?= $laporan['durasi']?>" placeholder="durasi" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="<?= $laporan['status']?>" placeholder="status" required>
        </div>

        <button type="submit" name="ubah" class="btn btn-primary" style="float:right">Ubah</button>
    </form>

</div>


<?php include 'layout/footer.php'; ?>