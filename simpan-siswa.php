<?php
//include koneksi database
include('koneksi.php');
//get data dari form
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_lahir = $_POST['tgl_lahir'];
//query insert data ke dalam database
$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat, kota, jenis_kelamin, tgl_lahir) VALUES ('$nisn',
'$nama_lengkap', '$alamat', '$kota', '$jenis_kelamin', '$tgl_lahir')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php
    header("location: dashboard.php");
} else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
