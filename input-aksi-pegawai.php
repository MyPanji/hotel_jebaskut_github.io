<?php
include 'koneksi_hotel.php';

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$email = $_POST['email'];
$nomor_telepon = $_POST['nomor_telepon'];

mysqli_query($conn, "insert into pegawai values('$id_pegawai','$nama_pegawai','$email','$nomor_telepon')");
header("location:pegawai.php");
?>