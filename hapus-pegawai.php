<?php
include 'koneksi_hotel.php';

$id_pegawai= $_GET['id'];
mysqli_query($conn,"DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'");

header("location:pegawai.php");
?>