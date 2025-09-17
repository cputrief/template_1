<?php 
###### PROSES TAMBAH DATA ######
#1. koneksi ke database
include("../koneksi.php");

#2. mengambil value dari setiap input
$no_transaksi = $_POST["no_transaksi"];
$nm_pasienkKinik = $_POST["nm_pasienkKinik"];
$tgl = $_POST["tgl"];
$bln = $_POST["bln"];
$thn = $_POST["thn"];
$tanggal = $thn."-".$bln."-".$tgl;
$nama_dokter = $_POST["nama_dokter"];
$keluhan_pasien = $_POST["keluhan_pasien"];
$biaya_adm = $_POST["biaya_adm"];

#3. menuliskan query tambah data ke tabel
$qry = mysqli_query($koneksi,"INSERT INTO berobat (no_transaksi,pasienKlinik_id,tgl_berobat,dokter_id,keluhan_pasien,biaya_adm)
VALUES('$no_transaksi','$nm_pasienkKinik','$tanggal','$nama_dokter','$keluhan_pasien','$biaya_adm')");

#5. pengalihan halaman jika proses tambah selesai
header("location:index.php");
?>

<!-- tambahkan validasi minimal tanggal lahir lebih kecil dari hari ini, jika gagal kembalikan ke form.php dan berikan pesan error -->