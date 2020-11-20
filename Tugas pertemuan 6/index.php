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
    <title>Index</title>
</head>
<body class="bgindex">
    <div class="card mt-3 shadow pb-2 mb-4" id="B-index">
        <form action="hasil.php" method="POST">
            <h4 class="text-center p-3 text-white">Form Penilaian Mahasiswa</h4>
            <div class="row">
                <div class="form-group col-md-8 ml-4 mt-1">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8 ml-4">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-5 ml-4">
                    <label for="nt">Nilai Tugas</label>
                    <input type="number" name="nt" id="nt" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-5 ml-4">
                    <label for="uts">Nilai UTS</label>
                    <input type="number" name="uts" id="uts" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-5 ml-4">
                    <label for="uas">Nilai UAS</label>
                    <input type="number" name="uas" id="uas" class="form-control" required>
                </div>
            </div>

            <button class="btn btn-primary" type="submit" name="submit" >Submit</button>
        </form>
    </div>
</body>
</html>