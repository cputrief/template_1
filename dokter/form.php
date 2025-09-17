<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>form Dokter</title>
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
                       <h3>👩‍💻Form Data Dokter</h3> 
                    </div>
                    <div class="card-body">
                    <!-- atribut wajib di form -->
                    <form action="proses.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NAMA DOKTER</label>
                                <input name="nama_dokter" placeholder="Masukkan nama Dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
                        </div>
                         <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">NAMA POLI</label>
                                <select name="nama_poli" class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Poli</option>
                                    <?php
                                        include('../koneksi.php');
                                        $qry = mysqli_query($koneksi,"SELECT * FROM poli");
                                        foreach ($qry as $row) {
                                            ?>
                                            <option value="<?=$row['poli_id']?>"><?=$row['nama_poli']?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
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