<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>form poli</title>
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
                       <h3>👩‍💻Form Data Poli</h3> 
                    </div>
                    <div class="card-body">
                    <!-- atribut wajib di form -->
                    <form action="proses.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NAMA POLI</label>
                                <input name="nama_poli" placeholder="Masukkan nama Poli" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
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