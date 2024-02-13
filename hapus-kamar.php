<?php
include 'koneksi_hotel.php';

$id_kamar= $_GET['id'];
mysqli_query($conn,"DELETE FROM kamar WHERE id_kamar='$id_kamar'");

header("location:kamar.php");
?>