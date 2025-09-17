<?php
//  1. membuat koneksi 
include("../koneksi.php");

//  2. mengambil value dari form
$id = $_GET["id"];

// 3. menjalankan query hapus
$qry = mysqli_query($koneksi, "SELECT * FROM poli WHERE poli_id  = '$id'");

//  4. MEMISAHKAN FIELD KOLOM TABEL PASIEN
$row = mysqli_fetch_array($qry);

$poli_id  = $row['poli_id'];
$nama_poli  = $row['nama_poli'];


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
                       <h3>👩‍💻Form Edit Data Poli</h3> 
                    </div>
                    <div class="card-body">
                    <!-- atribut wajib di form -->
                    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                         <input type="hidden" value="<?=$id?>" name="idedit" id="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NAMA POLI</label>
                                <input name="nama_poli" value="<?=$nama_poli ?>" placeholder="Masukkan nama Poli" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
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
