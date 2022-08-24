<?php


include 'config/app.php';
//Menerima id laporan yang dipilih pengguna
$id = (int)$_GET['id'];

if (delete_data($id) > 0){
    echo "<script>
            alert('Data berhasil Dihapus');
            document.location.href = 'index.php';
            </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus');
            document.location.href = 'index.php';
        </script>";
}