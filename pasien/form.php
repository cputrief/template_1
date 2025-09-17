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
                       <h3>👩‍💻Form Data Pasien</h3> 
                    </div>
                    <div class="card-body">
                    <!-- atribut wajib di form -->
                    <form action="proses.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NAMA PASIEN</label>
                                <input name="nm_pasienkKinik" placeholder="Masukkan nama Lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">TANGGAL LAHIR</label>
                            <input type="date" name="tgl_lahirPasien" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3" >
                            <label for="exampleInputPassword1" class="form-label">JENIS KELAMIN</label><br>
                            <input type="radio" name="jenis_kelaminPasien" value="perempuan" id="radioDefault2">Perempuan<br>
                            <input type="radio" name="jenis_kelaminPasien" value="laki-laki" id="radioDefault2">Laki - Laki
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
                                <input type="text" name="alamat_pasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
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