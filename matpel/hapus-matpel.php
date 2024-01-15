<?php
include('../koneksi.php');
//get id
$id = $_GET['id'];
$query = "DELETE FROM matpel WHERE kd_matpel = '$id'";
if ($connection->query($query)) {
    header("location: matpel.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
