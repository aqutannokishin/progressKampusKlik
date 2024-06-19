<?php 
include "tampilkan_data.php";

include "edit_data.php";

$data_edit=mysqli_fetch_assoc($proses_ambil)
?>
<html>
    <header>
        <title>
        </title>

<link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/assets/styles.css" rel="stylesheet" media="screen">
<script src="bootstrap/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </header>

    <body>

    <div class="span9" id="content">

        <div class="row-fluid">

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Input Nilai Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">

                    <?php
                    if($_GET['id'] != ''){
                        //proses edit data
                    ?>
                        <form action="edit_data.php?id=<?php echo $data_edit['id'] ?>&proses=1" method="POST">
                    <?php
                    }else{
                    ?>
                    <form action="proses_pertemuan_12.php" method="POST">
                        <?php
                    }
                    ?>
                    
                        <fieldset>
                            <legend>Input Nilai Mahasiswa</legend>

                            <div class="control-group">
                                <label class="control-label" for="NPM">NAMA MAHASISWA : </label>
                                <div class="controls">
                                <input type="hidden" class="input-xlarge focused" id="nama" name="nama"
                                value="<?php if($data_edit['id'] != "")echo $data_edit['id'];?>">
                                    <input type="text" class="input-xlarge focused" id="nama" name="nama"
                                    value="<?php if($data_edit['nama_mahasiswa'] != "")echo $data_edit['nama_mahasiswa'];?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="prodi">PRODI MAHASISWA : </label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="prodi" name="prodi"
                                    value="<?php if($data_edit['prodi'] != "")echo $data_edit['prodi'];?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="NPM">ULANGI : </label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="NPM" name="ulangi">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">PROSES</button>
                                <button type="reset" class="btn">Cancel</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="row-fluid">

    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Data mahasiswa</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NPM Mahasiswa</th>
                            <th>Nama Mahasiswa</th>
                            <th>Prodi Mahasiswa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        while($data = mysqli_fetch_assoc($proses)){
                            ?>

                            <tr>
                                <td><?php echo $data['id'] ?></td>
                                <td><?php echo $data['nama_mahasiswa'] ?></td>
                                <td><?php echo $data['prodi'] ?></td>
                                <td><a href="pertemuan_12.php?id=<?php echo $data['id']; ?>"> Edit </a>
                            <a href="hapus_data.php?id=<?php echo $data['id']; ?>"> Hapus </a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>

        </div>
</body>
    </html>