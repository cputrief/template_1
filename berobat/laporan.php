<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Berobat</title>
</head>
<body>
<?php
include('../navbar.php');
?>
<!-- form -->
<div class="container">
    <div class="row">
        <div class="col-12 m-auto mt-5">
            <div class="card">
                <div class="card-header text-center">
                   <h3>👩‍⚕️Welcome To Data Berobat</h3> 
                </div>
                <div class="card-body">
                    <a href="cetak.php" class="btn btn-primary mb-3">Print</a>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr class="table table-success table-striped text-center">
                                <th scope="col">No Transaksi</th>
                                <th scope="col">Tgl Berobat</th>
                                <th scope="col">Nama Pasien</th> 
                                <th scope="col">Usia</th>   
                                <th scope="col">Jenis Kelamin</th> 
                                <th scope="col">Keluhan Pasien</th>
                                <th scope="col">Nama Poli</th>
                                <th scope="col">Nama Dokter</th>                                
                                <th scope="col">Biaya ADM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                // koneksi
                                include('../koneksi.php');

                                // menuliskan query
                                $qry = "SELECT * FROM berobat 
                                        INNER JOIN pasien ON berobat.pasienKlinik_id=pasien.pasienKlinik_id 
                                        INNER JOIN dokter ON berobat.dokter_id=dokter.dokter_id
                                        INNER JOIN poli ON dokter.poli_id=poli.poli_id";

                                // menjalankan query
                                $result = mysqli_query($koneksi, $qry);

                                // melakukan looping data pasien
                                $nomor = 1;
                                foreach($result as $row){
                                    $tgl_berobat = date_create($row['tgl_berobat']);
                                    $tgl_berobat = date_format($tgl_berobat, 'd-m-Y');

                                    // membuat usia pasien
                                    $tanggal_lahir = new DateTime($row['tgl_lahirPasien']);
                                    $sekarang = new DateTime("today");
                                    $usia = $sekarang->diff($tanggal_lahir)->y;


                                    // menformat biaya menjadi format rupiah dan ada pemisah ribuan
                                    $biaya_adm = $row['biaya_adm'];
                                    $biaya_adm = number_format($biaya_adm,0,',','.');

                      

                            ?>
                            <tr>
                                <td><?=$row['no_transaksi']?></td>                            
                                <td><?=$tgl_berobat?></td>
                                <td><?=$row['nm_pasienkKinik']?></td>                            
                                <td><?=$usia?></td>
                                <td><?=$row['jenis_kelaminPasien']?></td>                               
                                <td><?=$row['keluhan_pasien']?></td>
                                <td><?=$row['nama_poli']?></td>
                                <td><?=$row['nama_dokter']?></td>
                                <td>Rp <?=$biaya_adm?></td>                              

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