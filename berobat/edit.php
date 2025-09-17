<?php
//  1. membuat koneksi 
include("../koneksi.php");

//  2. mengambil value dari form
$id = $_GET["id"];

// 3. menjalankan query hapus
$qry = mysqli_query($koneksi, "SELECT * FROM berobat WHERE no_transaksi = '$id'");

//  4. MEMISAHKAN FIELD KOLOM TABEL PASIEN
$row = mysqli_fetch_array($qry);

// Ambil data pasien dan dokter untuk select option
$no_transaksi = $row['no_transaksi'];
$pasien = $row['pasienKlinik_id'];

$tgl_berobat = $row['tgl_berobat'];
$pecah_tgl = explode('-', $tgl_berobat);
$thn = $pecah_tgl[0];
$bln = $pecah_tgl[1];
$tgl = $pecah_tgl[2];


$dokter = $row['dokter_id'];
$keluhan_pasien = $row['keluhan_pasien'];
$biaya_adm = $row['biaya_adm'];

?>


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
                        <form method="post" action="proses_edit.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Transaksi</label>
                                <input name="no_transaksi" value="<?=$no_transaksi?>" type="text" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
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
                                            <option <?php echo ($pasien==$row['pasienKlinik_id']) ? 'selected' : '' ?> value="<?= $row['pasienKlinik_id'] ?>"><?= $row['nm_pasienkKinik'] ?></option>
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
                                                        <option <?php echo ($tgl==$i) ? 'selected' : '' ?> value="<?=$i?>"><?=$i?></option>
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
                                                        <option <?php echo ($bln==$k) ? 'selected' : '' ?> value="<?=$k?>"><?=$v?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <input type="number" value="<?=$thn?>" name="thn" class="form-control" placeholder="Masukkan Tahun" id="">
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
                                            <option <?php echo ($dokter==$row['dokter_id']) ? 'selected' : '' ?> value="<?=$row['dokter_id']?>"><?=$row['nama_dokter']?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keluhan Pasien</label>
                                <input name="keluhan_pasien" value="<?=$keluhan_pasien?>" type="text" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Biaya Administrasi</label>
                                <input name="biaya_adm" value="<?=$biaya_adm?>" type="number" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
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
