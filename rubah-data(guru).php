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
        $sql = "SELECT * FROM guru WHERE id_guru = '$id'";
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
    <form action="update(guru).php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id_guru']; ?>">
        <table>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="number" name="nip" value="<?php echo $data['nip']; ?>" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama_guru']; ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="mail" value="<?php echo $data['email_guru']; ?>" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if ($data['jenis_kelamin'] == 'Laki-Laki')
                    echo 'checked'; ?>>Laki Laki</td>
                <td><input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan')
                    echo 'checked'; ?>>Perempuan</td>
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