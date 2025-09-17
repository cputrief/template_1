<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Pasien</title>
</head>
<body onload="window.print()" style="background-color: #EFF5D2;">
<!-- form -->
    <div class="container">
        <div class="row">
            <div class="col-10 m-auto mt-5">
                <div class="card">                    
                    <div class="card-body">
                        <h1 class="text-center">Laporan Pasien</h1><br>                        
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr class="table table-success table-striped text-center">
                                <th scope="col">No</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // koneksi
                                    include('../koneksi.php');

                                    // menuliskan query
                                    $qry = "SELECT * FROM pasien";

                                    // menjalankan query
                                    $result = mysqli_query($koneksi,$qry);

                                    // melakukan looping data pasien
                                    $nomor =1;
                                    foreach($result as $row){
                                        $tgl_lahir = date_create($row['tgl_lahirPasien']);
                                        $tgl_lahir = date_format($tgl_lahir,'D, d F Y')
                                ?>
                                <tr>
                                <th scope="row" class="text-center"><?=$nomor++?></th>
                                <td><?=$row['nm_pasienkKinik']?></td>
                                <td><?=$tgl_lahir?></td>
                                <td><?=$row['jenis_kelaminPasien']?></td>
                                <td><?=$row['alamat_pasien']?></td>                            
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