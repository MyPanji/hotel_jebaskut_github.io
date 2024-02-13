<?php
include 'koneksi_hotel.php';

$id_pelanggan = $_POST['id_pelanggan'];
$username = $_POST['username'];
$email = $_POST['email'];
$nomor_telepon = $_POST['nomor_telepon'];
$password = $_POST['password'];

mysqli_query($conn, "insert into pelanggan values('$id_pelanggan','$username','$email','$nomor_telepon','$password')");
header("location:pelanggan.php");
?>