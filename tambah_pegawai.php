<?php
$title = 'Tambah Pegawai';

include 'layout/header.php';

//cek apakah tombol tambah ditekan
if (isset($_POST['tambah'])){
    if (create_pegawai($_POST) > 0){
        echo "<script>
            alert('Data Barang Berhasil Ditambahkan');
            document.location.href = 'pegawai.php';
            </script>";
        
    } else{
        
        echo "<script>
            alert('Data Barang Gagal Ditambahkan');
            document.location.href = 'pegawai.php';
            </script>";
    }
}

?>

<div class="container mt-5">
    <h1>Tambah Pegawai</h1>
    <hr>

    <form action="" method="post">
        <div class="mb-3">
            <label for="masalah" class="form-label">Masalah</label>
            <input type="text" class="form-control" id="masalah" name="masalah" placeholder="Masalah" required>
        </div>
       
        <button type="submit" name="tambah" class="btn btn-primary" style="float:right">Tambah</button>
    </form>

</div>


<?php include 'layout/footer.php'; ?>