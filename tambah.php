<?php
$title = 'Tambah Laporan';

include 'layout/header.php';

//cek apakah tombol tambah ditekan
if (isset($_POST['tambah'])){
    if (create_data($_POST) > 0){
        echo "<script>
            alert('Data Barang Berhasil Ditambahkan');
            document.location.href = 'index.php';
            </script>";
        
    } else{
        echo "<script>
            alert('Data Barang Gagal Ditambahkan');
            document.location.href = 'index.php';
            </script>";
    }
}

?>

<div class="container mt-5">
    <h1>Tambah Barang</h1>
    <hr>

    <form action="" method="post">
        <div class="mb-3">
            <label for="masalah" class="form-label">Masalah</label>
            <input type="text" class="form-control" id="masalah" name="masalah" placeholder="Masalah" required>
        </div>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Waktu" required>
        </div>
        <div class="mb-3">
            <label for="pelapor" class="form-label">Pelapor</label>
            <input type="text" class="form-control" id="pelapor" name="pelapor" placeholder="Pelapor" required>
        </div>
        <div class="mb-3">
            <label for="solusi" class="form-label">Solusi</label>
            <input type="text" class="form-control" id="solusi" name="solusi" placeholder="solusi" required>
        </div>
        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi</label>
            <input type="text" class="form-control" id="durasi" name="durasi" placeholder="durasi" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" placeholder="status" required>
        </div>

        <button type="submit" name="tambah" class="btn btn-primary" style="float:right">Tambah</button>
    </form>

</div>


<?php include 'layout/footer.php'; ?>