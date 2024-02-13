<h3>Ubah Data Pemesanan</h3>
<?php
include 'koneksi_hotel.php';
$id_pemesanan= $_GET['id_pemesanan'];
$data = mysqli_query($conn,"SELECT * FROM pemesanan WHERE id_pemesanan='$id_pemesanan'");
while($tampil=mysqli_fetch_array($data)){
?>
<a href="kamar.php">kembali</a>
<form method="post" action="ubah-aksi-pemesanan.php">
<table>
    <tr>
        <td>ID Pemesanan</td>
        <td><input type="number" name="id_pemesanan" value="<?php echo $tampil['id_pemesanan']; ?>"></td>
    </tr>
    <tr>
        <td>ID Pelanggan</td>
        <td><input type="number" name="id_pelanggan" value="<?php echo $tampil['id_pelanggan']; ?>"></td>
    </tr>
    <tr>
        <td>ID Kamar</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>ID Pegawai</td>
        <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>Check In</td>
        <td><input type="date" name="check_in" value="<?php echo $tampil['check_in']; ?>"></td>
    </tr>
    <tr>
        <td>Check Out</td>
        <td><input type="date" name="check_out" value="<?php echo $tampil['check_out']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>