<?php


//function menampilkan data
function select($query)
{
    //panggil koneksi database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

//fungsi menambahkan data barang
function create_data($post)
{
    global $db;

    $masalah    = $post['masalah'];
    $waktu      = $post['waktu'];
    $pelapor    = $post['pelapor'];
    $solusi     = $post['solusi'];
    $durasi     = $post['durasi'];
    $status     = $post['status'];

    //query tambah data

    $query = "INSERT INTO data_laporan VALUES(null, '$masalah','$waktu','$pelapor','$solusi','$durasi','$status')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi mengubah data laporan
function update_laporan($post)
{
    global $db;

    $id         = $post['id'];
    $masalah    = $post['masalah'];
    $waktu      = $post['waktu'];
    $pelapor    = $post['pelapor'];
    $solusi     = $post['solusi'];
    $durasi     = $post['durasi'];
    $status     = $post['status'];

    //query ubah data

    $query = "UPDATE data_laporan SET masalah = '$masalah', waktu= '$waktu', pelapor= '$pelapor', solusi= '$solusi', durasi= '$durasi', status= '$status' WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi hapus data

function delete_data($id)
{
    global $db;

    $query = "DELETE FROM data_laporan WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

?>


