<?php
//  1. membuat koneksi 
include("../koneksi.php");

//  2. mengambil value dari form
$id = $_GET["id"];

// 3. menjalankan query hapus
$qry = mysqli_query($koneksi, "SELECT * FROM pasien WHERE pasienKlinik_id = '$id'");

//  4. MEMISAHKAN FIELD KOLOM TABEL PASIEN
$row = mysqli_fetch_array($qry);

$nm_pasienkKinik = $row['nm_pasienkKinik'];
$tgl_lahirPasien = $row['tgl_lahirPasien'];
$jenis_kelaminPasien = $row['jenis_kelaminPasien'];
$alamat_pasien = $row['alamat_pasien'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>form</title>
</head>
<body>
<?php
include('../navbar.php');
?>
    <!-- form -->
    <div class="container">
        <div class="row">
            <div class="col-10 m-auto mt-5">
                <div class="card">
                    <div class="card-header text-center">
                       <h3>👩‍💻Form Edit Data Pasien</h3> 
                    </div>
                    <div class="card-body">
                    <!-- atribut wajib di form -->
                    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                         <input type="hidden" value="<?=$id?>" name="idedit" id="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NAMA PASIEN</label>
                                <input name="nm_pasienkKinik" value="<?=$nm_pasienkKinik?>" placeholder="Masukkan nama Lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">TANGGAL LAHIR</label>
                            <input type="date" value="<?=$tgl_lahirPasien?>" name="tgl_lahirPasien" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3" >
                            <label for="exampleInputPassword1" class="form-label">JENIS KELAMIN</label><br>
                            <input type="radio" name="jenis_kelaminPasien" value="perempuan" id="radioDefault2"  <?=($jenis_kelaminPasien=="perempuan") ? 'checked' : ''?>>Perempuan<br>
                            <input type="radio" name="jenis_kelaminPasien" value="laki-laki" id="radioDefault2" <?=($jenis_kelaminPasien=="laki-laki") ? 'checked' : ''?>>Laki - Laki
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
                                <input type="text" value="<?=$alamat_pasien?>" name="alamat_pasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
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
