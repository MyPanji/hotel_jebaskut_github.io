<head>
<title>Data Pemesanan</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h3> Data Pemesanan Hotel Jebaskut </h3>

<table border="1">
    <tr>
        <th>No</th>
        <td>ID Pemesanan</td>
        <td>ID Pelanggan</td>
        <td>ID Kamar</td>
        <td>ID Pegawai</td>
        <td>Check In</td>
        <td>Check Out</td>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi_hotel.php";

    $no=1;
    $ambildata = mysqli_query($conn,"select * from pemesanan");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pemesanan]</td>
            <td>$tampil[id_pelanggan]</td>
            <td>$tampil[id_kamar]</td>
            <td>$tampil[id_pegawai]</td>
            <td>$tampil[check_in]</td>
            <td>$tampil[check_out]</td>
            <td><a href='?id_pemesanan=$tampil[id_pemesanan]'> Hapus </a></td>
            <td><a href='ubah-pemesanan.php?id_pemesanan=$tampil[id_pemesanan]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi_hotel.php";

    if(isset($_GET['id_pemesanan'])){
    mysqli_query($conn,"delete  from pemesanan where id_pemesanan='$_GET[id_pemesanan]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='pemesanan.php'>";
    }
    
    ?>
    </table>
    <a href="input-pemesanan.php"> Tambahkan Data Baru </a>
    </html>