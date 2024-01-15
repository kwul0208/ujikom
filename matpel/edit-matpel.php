<?php

include('../koneksi.php');

$id = $_GET['id'];


$query = "SELECT * FROM matpel WHERE kd_matpel = '$id' LIMIT 1";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
// var_dump($row);
// return null;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Matpel</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT MATPEL
                    </div>
                    <div class="card-body">
                        <form action="update-matpel.php" method="POST">
                        <input type="hidden" name="kd_matpel" value="<?php echo $row['kd_matpel']?>">
                            <div class="form-group">
                                <label>kd Matpel</label>
                                <input type="text" name="kd_matpel" value="<?php echo $row['kd_matpel'] ?>" placeholder="Masukkan Kode Matpel" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Matpel</label>
                                <input type="text" name="nama_matpel" value="<?php echo $row['nama_matpel'] ?>" placeholder="Masukkan Nama Matpel" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Jam</label>
                                <input type="number" class="form-control" name="jumlah_jam" value="<?php echo $row['jumlah_jam'] ?>" placeholder="Masukkan Jumlah Jam Matpel"></input>
                            </div>
                            <div class="form-group">
                                <label>Tingkat</label>
                                <input type="number" class="form-control" name="tingkat" value="<?php echo $row['tingkat'] ?>" placeholder="Masukkan Tingkat Matpel"></input>
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="number" class="form-control" name="nip" value="<?php echo $row['nip'] ?>" placeholder="Masukkan Nip Matpel"></input>
                            </div>
                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>