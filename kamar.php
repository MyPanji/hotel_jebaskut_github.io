<head>
<title>Data Kamar</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h3> Data Hotel Jebaskut </h3>

<table border="1">
    <tr>
        <th>No</th>
        <td>ID Kamar</td>
        <td>Nama Kamar</td>
        <td>Jenis Kamar</td>
        <td>Harga</td>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi_hotel.php";

    $no=1;
    $ambildata = mysqli_query($conn,"select * from kamar");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_kamar]</td>
            <td>$tampil[nama_kamar]</td>
            <td>$tampil[jenis_kamar]</td>
            <td>$tampil[harga]</td>
            <td><a href='kamar.php?id_kamar=$tampil[id_kamar]'> Hapus </a></td>
            <td><a href='ubah-kamar.php?id_kamar=$tampil[id_kamar]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi_hotel.php";

    if(isset($_GET['id_kamar'])){
    mysqli_query($conn,"delete from kamar where id_kamar='$_GET[id_kamar]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='kamar.php'>";
    }
    
    ?>
    </table>
    <a href="input-kamar.php"> Tambahkan Data Baru </a>
    </html>