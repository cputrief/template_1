<!-- proses edit -->
<?php
###### PROSES EDIT DATA ######
#1. koneksi ke database
include("../koneksi.php");

#2. mengambil value dari setiap input
$no_transaksi = $_POST["no_transaksi"];
$pasien = $_POST["nm_pasienkKinik"];
$tgl = $_POST["tgl"];
$bln = $_POST["bln"];
$thn = $_POST["thn"];
$tanggal = $thn."-".$bln."-".$tgl;
$dokter = $_POST["nama_dokter"];
$keluhan_pasien = $_POST["keluhan_pasien"];
$biaya_adm = $_POST["biaya_adm"];

#3. menuliskan query edit data ke tabel
$qry = mysqli_query($koneksi,"UPDATE berobat SET pasienKlinik_id ='$pasien', tgl_berobat ='$tanggal', dokter_id ='$dokter', keluhan_pasien ='$keluhan_pasien', biaya_adm ='$biaya_adm' WHERE no_transaksi = '$no_transaksi'");

#5. pengalihan halaman jika proses edit selesai
header("location:index.php");
?>
