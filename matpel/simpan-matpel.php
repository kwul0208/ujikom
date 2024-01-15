<?php
//include koneksi database
include('../koneksi.php');
//get data dari form
$kd_matpel = $_POST['kd_matpel'];
$nama_matpel = $_POST['nama_matpel'];
$jumlah_jam = $_POST['jumlah_jam'];
$tingkat = $_POST['tingkat'];
$nip = $_POST['nip'];
//query insert data ke dalam database
$query = "INSERT INTO matpel (kd_matpel, nama_matpel, jumlah_jam, tingkat, nip) VALUES ('$kd_matpel',
'$nama_matpel', '$jumlah_jam', '$tingkat', '$nip')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php
    header("location: matpel.php");
} else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
