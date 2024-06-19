<?php
include("koneksi.php");

$npm = $_GET['id'];
$proses = mysqli_query($koneksi, "DELETE FROM mahasiswa where id = $npm")
             or die(mysqli_error($koneksi));

             if($proses){
                echo "<script>
                alert('Data Berhasil Dihapus');
                window.location.href='pertemuan12.php';
                </script>";
            } else{
                echo "<script>
                alert('Data Gagal Dihapus');
                window.location.href='pertemuan12.php';
                </script>";
            }
?>