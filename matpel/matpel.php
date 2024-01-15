<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Matpel</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA Matpel
                    </div>
                    <div class="card-body">
                        <a href="tambah-matpel.php" class="btn btn-md btn-success" style="marginbottom: 10px">TAMBAH DATA</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">KD. MATPEL</th>
                                    <th scope="col">NAMA MATPEL</th>
                                    <th scope="col">JUMLAH JUMLAH</th>
                                    <th scope="col">TINGKAT</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../koneksi.php');
                                $no = 1;
                                $query = mysqli_query($connection, "SELECT * FROM matpel");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['kd_matpel'] ?></td>
                                        <td><?php echo $row['nama_matpel'] ?></td>
                                        <td><?php echo $row['jumlah_jam'] ?></td>
                                        <td><?php echo $row['tingkat'] ?></td>
                                        <td><?php echo $row['nip'] ?></td>
                                        <td class="text-center">
                                            <a href="edit-matpel.php?id=<?php echo $row['kd_matpel'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <a href="hapus-matpel.php?id=<?php echo $row['kd_matpel'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus?')">HAPUS</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src = "//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" >
        </script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
</body>

</html>