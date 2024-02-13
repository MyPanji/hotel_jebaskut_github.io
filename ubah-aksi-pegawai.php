<?php
include 'koneksi_hotel.php';

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$email = $_POST['email'];
$nomor_telepon = $_POST['nomor_telepon'];

mysqli_query($conn,"UPDATE pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai',
email='$email',nomor_telepon='$nomor_telepon' WHERE id_pegawai='$id_pegawai'");
header("location: pegawai.php"); 

?>