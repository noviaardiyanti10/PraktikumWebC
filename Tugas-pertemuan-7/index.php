<?php
include 'koneksi.php';
if($_SESSION){
    $nama = $_SESSION["nama"];
    if($_SESSION["tingkatan_user"] == 'admin'){
        header("Location: index-admin.php");
    }
}else{
    header("Location: login.php");
}
$result = mysqli_query($koneksi, "SELECT * FROM data ORDER BY id_data ASC;");


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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/style.css">
    <title>Index</title>

</head>
<body class="index-admin">
    <header>
        <?php include 'assets/layout/navbar.php'?>
    </header>
    <div class="container">
        <div class="card shadow mt-4">
            <h3 class= "text-center bg-secondary text-white p-4">Data Mahasiswa</h3>    
            <div class="table table-responsive mt-4">
            <a href="tambah-data.php" class="btn btn-success mr-4 ml-3 mb-3">+ Tambah Data</a>  
                <table class="table table-fixed tableFixHead">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach($result as $row):
                        ?>
                        <tr>
                            <td><?php echo$no++; ?></td>
                            <td><?php echo $row['nim']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['telepon'];?></td>
                            <td><?php echo $row['alamat']; ?></td>

                            <td>
                                <button class="btn btn-dark" type="submit"><a href="update-data.php?id_data=<?= $row["id_data"]; ?>" class="text-white"><i class="fa fa-edit fa-md"></i></a></button>
                            </td>
                        </tr>
                        <?php
                        endforeach
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <footer>
        <?php include  'assets/layout/footer.php'?>
    </footer>
</body>
</html>