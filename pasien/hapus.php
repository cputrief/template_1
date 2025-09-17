<?php
// proses hapus
// 1. membuat koneksi
include("../koneksi.php");

// 2. mangambil value id hapus
$id = $_GET["id"];

// 3. menjalankan query hapus
$qry = mysqli_query($koneksi, "DELETE FROM pasien WHERE pasienKlinik_id = '$id'");

// 4. mengalihkan halaman jika sudah terhapus
header("location:index.php");

?>