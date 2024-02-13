<?php
include 'koneksi_hotel.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$email = $_POST['email'];
$nomor_telepon = $_POST['nomor_telepon'];

mysqli_query($conn,"UPDATE pelanggan SET id_pelanggan='$id_pelanggan', nama_pelanggan='$nama_pelanggan',
email='$email',nomor_telepon='$nomor_telepon' WHERE id_pelanggan='$id_pelanggan'");
header("location: pelanggan.php"); 

?>