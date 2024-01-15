<?php
//include koneksi database
include('../koneksi.php');
//get data dari form
$kd_matpel = $_POST['kd_matpel'];
$nama_matpel = $_POST['nama_matpel'];
$jumlah_jam = $_POST['jumlah_jam'];
$tingkat = $_POST['tingkat'];
$nip = $_POST['nip'];
//query update data ke dalam database berdasarkan ID
$query = "UPDATE matpel SET kd_matpel = '$kd_matpel', nama_matpel = '$nama_matpel',
jumlah_jam = '$jumlah_jam', tingkat = '$tingkat', nip = '$nip' WHERE kd_matpel = '$kd_matpel'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php
    header("location: matpel.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
