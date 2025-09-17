<?php 
###### PROSES TAMBAH DATA ######
#1. koneksi ke database
include("../koneksi.php");

#2. mengambil value dari setiap input
$id = $_POST['idedit'];
$nama_dokter  = $_POST["nama_dokter"];
$nama_poli  = $_POST["nama_poli"];

#3. menuliskan query tambah data ke tabel
$qry = mysqli_query($koneksi,"UPDATE dokter SET nama_dokter ='$nama_dokter', poli_id ='$nama_poli' WHERE dokter_id = '$id'");

#5. pengalihan halaman jika proses tambah selesai
header("location:index.php");
?>

<!-- tambahkan validasi minimal tanggal lahir lebih kecil dari hari ini, jika gagal kembalikan ke form.php dan berikan pesan error -->