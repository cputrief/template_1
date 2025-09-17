<?php
//  1. membuat koneksi 
include_once("../koneksi.php");

//  2. mengambil value dari form
$nama_dokter  = $_POST['nama_dokter'];
$nama_poli  = $_POST['nama_poli'];

//  3. simpan
$qry = mysqli_query($koneksi,"INSERT INTO dokter (nama_dokter,poli_id) VALUES ('$nama_dokter','$nama_poli')");

//  4. jalankan query


// <!-- 5. mengalihkan halaman menggunakan js ✓  -->
header("location:index.php");
?>
