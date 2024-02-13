<h3>Tambahkan Data Pemesanan</h3>
<a href="pemesanan.php">kembali</a>
    <form method="post" action="input-aksi-pemesanan.php">
        <table>
            <tr>
                <td>ID Pemesanan</td>
                <td><input type="number" name="id_pemesanan"></td>
            </tr>
            <tr>
                <td>ID Pelanggan</td>
                <td><input type="number" name="id_pelanggan"></td>
            </tr>
            <tr>
                <td>ID Kamar</td>
                <td><input type="number" name="id_kamar"></td>
            </tr>
            <tr>
                <td>ID Pegawai</td>
                <td><input type="number" name="id_pegawai"></td>
            </tr>
            <tr>
                <td>Check In</td>
                <td><input type="date" name="check_in"></td>
            </tr>
            <tr>
                <td>Check Out</td>
                <td><input type="date" name="check_out"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>