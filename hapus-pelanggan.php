<?php
include 'koneksi_hotel.php';

$id_pelanggan= $_GET['id'];
mysqli_query($conn,"DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");

header("location:pelanggan.php");
?>