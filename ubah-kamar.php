<h3>Ubah Data Kamar</h3>
<?php
include 'koneksi_hotel.php';
$id_kamar= $_GET['id_kamar'];
$data = mysqli_query($conn,"SELECT * FROM kamar WHERE id_kamar='$id_kamar'");
while($tampil=mysqli_fetch_array($data)){
?>
<a href="kamar.php">kembali</a>
<form method="post" action="ubah-aksi-kamar.php">
<table>
    <tr>
        <td>ID Kamar</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Kamar</td>
        <td><input type="text" name="nama_kamar" value="<?php echo $tampil['nama_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Jenis Kamar</td>
        <td><input type="text" name="jenis_kamar" value="<?php echo $tampil['jenis_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="text" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>