<?php
include 'koneksi_hotel.php';

$id_kamar = $_POST['id_kamar'];
$nama_kamar = $_POST['nama_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$harga = $_POST['harga'];

mysqli_query($conn,"UPDATE kamar SET id_kamar='$id_kamar', nama_kamar='$nama_kamar',
jenis_kamar='$jenis_kamar',harga='$harga' WHERE id_kamar='$id_kamar'");
header("location: kamar.php"); 

?>