<?php
$title = 'Tambah Pegawai';

include 'layout/header.php';

//cek apakah tombol tambah ditekan
if (isset($_POST['tambah'])){
    if (create_pegawai($_POST) > 0){
        echo "<script>
            alert('Data Pegawai Berhasil Ditambahkan');
            document.location.href = 'pegawai.php';
            </script>";
        
    } else{
        echo "<script>
            alert('Data Pegawai Gagal Ditambahkan');
            document.location.href = 'pegawai.php';
            </script>";
    }
}

?>

<div class="container mt-5">
    <h1>Tambah Data Pegawai</h1>
    <hr>

    <form action="" method="post">
        <div class="mb-3">
            <label for="nip_nik" class="form-label">NIP_NIK</label>
            <input type="text" class="form-control" id="nip_nik" name="nip_nik" placeholder="NIM / NIK" required>
        </div>

        <div class="mb-3">
            <label for="nama" class="nama">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai" required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required>
        </div>

        <div class="mb-3">
            <label for="gol_ruang" class="gol_ruang">Golongan Ruang</label>
            <input type="text" class="form-control" id="gol_ruang" name="gol_ruang" placeholder="Golongan Ruang" required>
        </div>

        <div class="mb-3">
            <label for="bid_tugas" class="bid_tugas">Bidang Tugas</label>
            <input type="text" class="form-control" id="bid_tugas" name="bid_tugas" placeholder="Bidang Tugas" required>
        </div>

        <div class="mb-3">
            <label for="email" class="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="foto">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" placeholder="Foto" required>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary" style="float:right">Tambah</button>
    </form>

</div>


<?php include 'layout/footer.php'; ?>