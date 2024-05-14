<!DOCTYPE html>
<html>
<head>
    <title>Rubah Data</title>
</head>
<body>
    <h3>Rubah Data</h3>
    <?php
    include "Koneksi.php";
    if (isset($_GET['rubah_id'])) {
        $id = $_GET['rubah_id'];
        $sql = "SELECT * FROM mahasiswa WHERE id_mhs = '$id'";
        $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
        if (mysqli_num_rows($query) > 0) {
            $data = mysqli_fetch_array($query);
        } else {
            echo "Data tidak ditemukan!";
            exit();
        }
    } else {
        echo "ID tidak ditemukan!";
        exit();
    }
    ?>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id_mhs']; ?>">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama_mahasiswa']; ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="mail" value="<?php echo $data['email_mahasiswa']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="3">
                    
                <input type="submit" name="edit" value="Rubah">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>