<?php 
###### PROSES TAMBAH DATA ######
#1. koneksi ke database
include("../koneksi.php");

#2. mengambil value dari setiap input
$id = $_POST['idedit'];
$nm_pasienkKinik = $_POST["nm_pasienkKinik"];
$tgl_lahirPasien = $_POST["tgl_lahirPasien"];
$jenis_kelaminPasien = $_POST["jenis_kelaminPasien"];
$alamat_pasien = $_POST["alamat_pasien"];

#3. menuliskan query tambah data ke tabel
$qry = mysqli_query($koneksi,"UPDATE pasien SET nm_pasienkKinik='$nm_pasienkKinik', 
tgl_lahirPasien='$tgl_lahirPasien',jenis_kelaminPasien='$jenis_kelaminPasien', alamat_pasien='$alamat_pasien' 
WHERE pasienKlinik_ID='$id'");

#5. pengalihan halaman jika proses tambah selesai
header("location:index.php");
?>

<!-- tambahkan validasi minimal tanggal lahir lebih kecil dari hari ini, jika gagal kembalikan ke form.php dan berikan pesan error -->