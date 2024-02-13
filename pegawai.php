<head>
<title>Data Pegawai</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h3> Data Pegawai Hotel Jebaskut </h3>

<table border="1">
    <tr>
        <th>No</th>
        <td>ID Pegawai</td>
        <td>Nama Pegawai</td>
        <td>E-Mail</td>
        <td>Nomor Telepon</td>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi_hotel.php";

    $no=1;
    $ambildata = mysqli_query($conn,"select * from pegawai");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pegawai]</td>
            <td>$tampil[nama_pegawai]</td>
            <td>$tampil[email]</td>
            <td>$tampil[nomor_telepon]</td>
            <td><a href='?id_pegawai=$tampil[id_pegawai]'> Hapus </a></td>
            <td><a href='ubah-pegawai.php?id_pegawai=$tampil[id_pegawai]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi_hotel.php";

    if(isset($_GET['id_pegawai'])){
    mysqli_query($conn,"delete  from pegawai where id_pegawai='$_GET[id_pegawai]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='pegawai.php'>";
    }
    
    ?>
    </table>
    <a href="input-pegawai.php"> Tambahkan Data Baru </a>
    </html>