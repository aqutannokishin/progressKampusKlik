<?php
include "koneksi.php";
$npm = $_GET['id'];
$apakah_proses = $_GET['proses'];


$proses_ambil = mysqli_query($koneksi, "SELECT * from MAHASISWA WHERE id = '".$npm."'")
or die(mysqli_error($koneksi));

if($apakah_proses ==1){
    $nm_mhs = $_POST['nama'];
    $prodi_mhs = $_POST['prodi'];
    
    $proses_update_data = mysqli_query($koneksi, "UPDATE MAHASISWA SET nama_mahasiswa 
    = '$nm_mhs', prodi = '$prodi_mhs' WHERE id = '".$npm."'")
    or die(mysqli_error($koneksi));

    if($proses_update_data){
        echo 
        "<script>
        alert('Data Berhasil Diupdate');
        window.location.href='pertemuan_12.php';
        </script>";
    } else{
        echo "<script>alert('Data Gagal Diupdate');
        window.location.href='pertemuan_12.php';
        </script>";
    }
}

?>