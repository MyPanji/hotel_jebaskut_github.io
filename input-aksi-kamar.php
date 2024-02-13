<?php
include 'koneksi_hotel.php';

$id_kamar = $_POST['id_kamar'];
$nama_kamar = $_POST['nama_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$harga = $_POST['harga'];

mysqli_query($conn, "insert into kamar values('$id_kamar','$nama_kamar','$jenis_kamar','$harga')");
header("location:kamar.php");
?>
