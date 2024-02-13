<head>
<title>Data Pelanggan</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h3> Data Pelanggan Hotel Jebaskut </h3>

<table border="1">
    <tr>
        <th>No</th>
        <td>ID Pelanggan</td>
        <td>Username</td>
        <td>E-Mail</td>
        <td>Nomor Telepon</td>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi_hotel.php";

    $no=1;
    $ambildata = mysqli_query($conn,"select * from pelanggan");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pelanggan]</td>
            <td>$tampil[username]</td>
            <td>$tampil[email]</td>
            <td>$tampil[nomor_telepon]</td>
            <td><a href='?id_pelanggan=$tampil[id_pelanggan]'> Hapus </a></td>
            <td><a href='ubah-pelanggan.php?id_pelanggan=$tampil[id_pelanggan]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi_hotel.php";

    if(isset($_GET['id_pelanggan'])){
    mysqli_query($conn,"delete  from pelanggan where id_pelanggan='$_GET[id_pelanggan]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='pelanggan.php'>";
    }
    
    ?>
    </table>
    <a href="input-pelanggan.php"> Tambahkan Data Baru </a>
    </html>