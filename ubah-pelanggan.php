<h3>Ubah Data Pelanggan</h3>
<?php
include 'koneksi_hotel.php';
$id_pelanggan= $_GET['id_pelanggan'];
$data = mysqli_query($conn,"SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
while($tampil=mysqli_fetch_array($data)){
?>
<a href="kamar.php">kembali</a>
<form method="post" action="ubah-aksi-pelanggan.php">
<table>
    <tr>
        <td>ID Pelanggan</td>
        <td><input type="number" name="id_pelanggan" value="<?php echo $tampil['id_pelanggan']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Pelanggan</td>
        <td><input type="text" name="nama_pelanggan" value="<?php echo $tampil['nama_pelanggan']; ?>"></td>
    </tr>
    <tr>
        <td>E-Mail</td>
        <td><input type="text" name="email" value="<?php echo $tampil['email']; ?>"></td>
    </tr>
    <tr>
        <td>Nomor Telepon</td>
        <td><input type="number" name="nomor_telepon" value="<?php echo $tampil['nomor_telepon']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>