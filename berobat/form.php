<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>form Dokter</title>
</head>
<body>
<?php
include('../navbar.php');
?>
    <!-- form -->
     <div class="container">
        <div class="row">
            <div class="col-7 m-auto mt-5 mb-5">
                <div class="card">
                    <div class="card-header text-center">
                       <h3>👩‍⚕️Welcome To Data Dokter</h3> 
                    </div>
                    <div class="card-body">
                        <form method="post" action="proses.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Transaksi</label>
                                <input name="no_transaksi" type="text" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Pasien</label>
                                <select name="nm_pasienkKinik" class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Pasien</option>
                                    <?php
                                        include('../koneksi.php');
                                        $qry = mysqli_query($koneksi,"SELECT * FROM pasien");
                                        foreach ($qry as $row) {
                                            ?>
                                            <option value="<?=$row['pasienKlinik_id']?>"><?=$row['nm_pasienkKinik']?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Berobat</label>
                                <div class="row">
                                        <div class="col-4">
                                            <select class="form-control" name="tgl" id="">
                                                <option value="">Pilih Tanggal</option>
                                                <?php
                                                    for( $i= 1; $i<= 31; $i++ ) {
                                                        ?>
                                                        <option value="<?=$i?>"><?=$i?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-control" name="bln" id="">
                                                <option value="">Pilih Bulan</option>
                                                <?php
                                                $bulan = array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'November',12=>'Desember');
                                                    foreach($bulan as $k => $v){
                                                        ?>
                                                        <option value="<?=$k?>"><?=$v?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <input type="number" name="thn" class="form-control" placeholder="Masukkan Tahun" id="">
                                        </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Dokter</label>
                                <select name="nama_dokter" class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Dokter</option>
                                    <?php
                                        include('../koneksi.php');
                                        $qry = mysqli_query($koneksi,"SELECT * FROM dokter");
                                        foreach ($qry as $row) {
                                            ?>
                                            <option value="<?=$row['dokter_id']?>"><?=$row['nama_dokter']?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keluhan Pasien</label>
                                <input name="keluhan_pasien" type="text" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Biaya Administrasi</label>
                                <input name="biaya_adm" type="number" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                             <button type="reset" class="btn btn-danger">Reset</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.js"></script> 
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>