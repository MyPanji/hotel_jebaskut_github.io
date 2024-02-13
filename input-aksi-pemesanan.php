<?php
include 'koneksi_hotel.php';

$id_pemesanan = $_POST['id_pemesanan'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_kamar = $_POST['id_kamar'];
$id_pegawai = $_POST['id_pegawai'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];

mysqli_query($conn, "insert into pemesanan values('$id_pemesanan','$id_pelanggan','$id_kamar','$id_pegawai','$check_in','$check_out')");
header("location:pemesanan.php");
?>