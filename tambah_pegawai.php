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
        <div class="row">
            <div class="mb-3 col-6">
                <label for="nip_nik" class="form-label">NIP / NIK</label>
                <input type="text" class="form-control" id="nip_nik" name="nip_nik" placeholder="NIP / NIK" required>
            </div>
            
            <div class="mb-3 col-6">
                <label for="nama" class="nama">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai" required>
            </div>
            <div class="mb-3 col-6">
                <label for="jabatan" class="jabatan">Jabatan</label>
                <select name="jabatan" id="jabatan" class="form-control" required>
                    <option value="">Pilih Jabatan</option>
                    <option value="Tenaga Penunjang Teknisi">Tenaga Penunjang Teknisi</option>
                    <option value="Staff Referensi & Literasi Informasi">Staff Referensi & Literasi Informasi</option>
                    <option value="Staff Repositori">Staff Repositori</option>
                </select>
            </div>
            
            <div class="mb-3 col-6">
                <label for="gol_ruang" class="gol_ruang">Golongan Ruang</label>
                <select name="gol_ruang" id="gol_ruang" class="form-control" required>
                    <option value="">Pilih Golongan Ruang</option>
                    <option value="Honorer">Honorer</option>
                    <option value="PNS">PNS</option>
                    <option value="Pegawai Non PNS">Pegawai Non PNS</option>
                </select>
            </div> 
            <!--
            <div class="mb-3 col-6">
                <label for="bid_tugas" class="bid_tugas">Bidang Tugas</label>
                <select name="bid_tugas" id="bid_tugas" class="form-control" required>
                    <option value="">Pilih Bidang Tugas</option>
                    <option value="Sub Bidang Referensi dan Literasi Informasi">Sub Bidang Referensi dan Literasi Informasi</option>
                    <option value="Sub Bidang Infrastruktur Teknologi Informasi">Sub Bidang Infrastruktur Teknologi Informasi</option>
                    <option value="Sub Bidang Repositori">Sub Bidang Repositori</option>
                </select>
            </div>
            
            <div class="mb-3 col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" placeholder="Foto" required>
        </div> -->
        <button type="submit" name="tambah" class="btn btn-primary" style="float:right">Tambah</button>
    </form>

</div>


<?php include 'layout/footer.php'; ?>