<html>
<head>
    <title>Tambah data</title>
</head>
<body>
    <h3>Tambah data</h3>
    <form action="insert.php" method="POST">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="mail"></td>
            </tr><tr>
                <td></td>
                <td></td>
                <input type="submit" name="kirim" value="SIMPAN">
                <input type="reset" name="clear" value="BATAL">
            </td>
        </tr>
    </table>
</form>
</body>
</html>