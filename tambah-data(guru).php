<html>

<head>
    <title>Tambah data Guru</title>
</head>

<body>
    <h3>Tambah data Guru</h3>
    <form action="insert-guru.php" method="POST">
        <table>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="number" name="nip" id=""></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_guru"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email_guru"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki Laki</td>
                <td><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="SIMPAN">
                    <input type="reset" name="clear" value="BATAL">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
