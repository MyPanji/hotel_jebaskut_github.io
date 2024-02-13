<?php
include 'koneksi_hotel.php';

$id_pemesanan= $_GET['id'];
mysqli_query($conn,"DELETE FROM pemesanan WHERE id_pemesanan='$id_pemesanan'");

header("location:pemesanan.php");
?>