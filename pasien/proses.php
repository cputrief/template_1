<?php
//  1. membuat koneksi 
include_once("../koneksi.php");

//  2. mengambil value dari form
$nm_pasienkKinik = $_POST['nm_pasienkKinik'];
$tgl_lahirPasien = $_POST['tgl_lahirPasien'];
$jenis_kelaminPasien = $_POST['jenis_kelaminPasien'];
$alamat_pasien = $_POST['alamat_pasien'];

//  3. simpan
$qry = mysqli_query($koneksi,"INSERT INTO pasien (nm_pasienkKinik,tgl_lahirPasien,jenis_kelaminPasien,alamat_pasien) VALUES ('$nm_pasienkKinik','$tgl_lahirPasien','$jenis_kelaminPasien','$alamat_pasien')");

//  4. jalankan query


// <!-- 5. mengalihkan halaman menggunakan js ✓  -->
header("location:index.php");
?>
