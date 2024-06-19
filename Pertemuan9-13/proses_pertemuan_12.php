<?php

include("koneksi.php");


$npm_mhs = $_POST['nama'];
$prodi_mhs = $_POST['prodi'];
$perulangan = $_POST['ulangi'];

$proses = mysqli_query($koneksi, "INSERT INTO mahasiswa(nama_mahasiswa, prodi)
        VALUES ('".$npm_mhs."', '".$prodi_mhs."') ")
or die (mysqli_error($koneksi));

if($proses){
    echo 
    "<script>
    alert('Data Berhasil Disimpan');
    window.location.href='pertemuan_12.php';
    </script>";
} else{
    echo "<script>alert('Data Gagal Disimpan');
    window.location.href='pertemuan_12.php';
    </script>";
}
?>
