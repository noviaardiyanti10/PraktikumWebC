<?php 
   if (isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $nim = $_POST['nim'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/style.css">
    <title>Hasil Nilai</title>
</head>
<body class="bgindex1">
    <div class="card shadow pb-2" id="B-index1">
        <form action="index.php" method="POST">
            <h4 class="text-center p-4 text-white">Hasil Nilai Akhir Mahasiswa</h4>
                <div class="row">
                    <div class="form-group col-md-8 ml-4 mt-3">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?=$nama?>" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8  ml-4">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control" value="<?=$nim?>" readonly>
                    </div>
                </div>
                <h5 class="text-center display 4 mt-4 p-4">
                    <?php

                        $nilai_akhir = 0;
                        if (isset($_POST['submit'])){
                                $tugas = $_POST['nt'];
                                $uts = $_POST['uts'];
                                $uas = $_POST['uas']; 
                                $nilai_akhir = ($uts + $uas + $tugas)/3;

                                if($nilai_akhir >= 80){
                                    echo "Nilai Akhir: " . $nilai_akhir . "<br> "; 
                                    echo "Anda dinyatakan lulus dengan predikat A";
                                }

                                else if($nilai_akhir >= 70){
                                    echo "Nilai Akhir: " . $nilai_akhir . "<br> ";
                                    echo "Anda dinyatakan lulus dengan predikat B";
                                }
                                else if($nilai_akhir >= 60){
                                    echo "Nilai Akhir: " . $nilai_akhir . "<br> "; 
                                    echo "Anda dinyatakan lulus dengan predikat C";
                                }
                                else{
                                    echo "Nilai Akhir: " . $nilai_akhir . "<br> ";
                                    echo "Anda dinyatakan tidak lulus";
                                }
                            }
                        ?>
                </h5>
                <button class="btn btn-primary" type="submit" name="submit" >Back</button>
        </form>
        
    </div>
</body>
</html>