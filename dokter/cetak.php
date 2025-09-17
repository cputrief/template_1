<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Data Dokter</title>
</head>
<body onload="window.print()" style="background-color: #EFF5D2;">
<!-- form -->
    <div class="container">
        <div class="row">
            <div class="col-7 m-auto mt-5">
                <div class="card">                    
                    <div class="card-body">
                        <h1 class="text-center">Laporan Data Dokter</h1><br>                       
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr class="table table-success table-striped text-center">
                                <th scope="col">No</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Nama Poli</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // koneksi
                                    include('../koneksi.php');

                                    // menuliskan query
                                    $qry = "SELECT * FROM dokter INNER JOIN poli ON dokter.poli_id = poli.poli_id ORDER BY dokter.dokter_id ASC";

                                    // menjalankan query
                                    $result = mysqli_query($koneksi,$qry);

                                    // melakukan looping data pasien
                                    $nomor =1;
                                    foreach($result as $row){
                                ?>
                                <tr>
                                    <th scope="row" class="text-center"><?=$nomor++?></th>
                                    <td><?=$row['nama_dokter']?></td>
                                    <td><?=$row['nama_poli']?></td>                                                                       
                                </tr>
                                    
                            </div>
                            </tr>
                                <?php
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
    
        </div>
    </div>

    <script src="../js/bootstrap.js"></script> 
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>