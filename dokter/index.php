<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Poli</title>
</head>
<body>
<?php
include('../navbar.php');
?>
<!-- form -->
    <div class="container">
        <div class="row">
            <div class="col-7 m-auto mt-5">
                <div class="card">
                    <div class="card-header text-center">
                       <h3>👩‍⚕️Welcome To Data Dokter</h3> 
                    </div>
                    <div class="card-body">
                        <a href="form.php" class="btn btn-primary mb-3">Tambah Data</a>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr class="table table-success table-striped text-center">
                                <th scope="col">No</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Nama Poli</th>
                                <th scope="col">Aksi</th>
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
                                    <td>
                                    <a href="edit.php?id=<?=$row['dokter_id']?>" class="btn btn-info btn-sm">🖊️Edit</a>
                                        <!-- Tombol hapus memanggil modal dengan id unik -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?=$row['dokter_id']?>">
                                            ⛔Hapus
                                        </button>
                                    </td>
                                </tr>
                                    <!-- Modal hapus dengan id unik -->
                                    <div class="modal fade" id="staticBackdrop<?=$row['dokter_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?=$row['dokter_id']?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel<?=$row['dokter_id']?>">Peringatan⚠️</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                yakin data dokter <b><?=$row['nama_dokter']?></b> ingin dihapus?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <a href="hapus.php?id=<?=$row['dokter_id']?>" class="btn btn-danger">hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
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