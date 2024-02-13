<h3>Ubah Data Pegawai</h3>
<?php
include 'koneksi_hotel.php';
$id_pegawai= $_GET['id_pegawai'];
$data = mysqli_query($conn,"SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
while($tampil=mysqli_fetch_array($data)){
?>
<a href="kamar.php">kembali</a>
<form method="post" action="ubah-aksi-pegawai.php">
<table>
    <tr>
        <td>ID Pegawai</td>
        <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Pegawai</td>
        <td><input type="text" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']; ?>"></td>
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