<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
</head>
<body>
    <a href="tambah-data(guru).php">Tambah Data</a>
    <h3>Tampil Data</h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Guru</th>
                <th>Email Guru</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "Koneksi.php";
            $sql = "SELECT * FROM guru ORDER BY id_guru ASC";
            $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
                $id = $data['id_guru'];
                $nip = $data['nip'];
                $nm = $data['nama_guru'];
                $email = $data['email_guru'];
                $jeniskelamin = $data['jenis_kelamin'];
                $tgl = $data['tanggal'];
                echo "<tr>
                        <td>$no</td>
                        <td>$nip</td>
                        <td>$nm</td>
                        <td>$email</td>
                        <td>$jeniskelamin</td>
                        <td>$tgl</td>
                        <td><a href='rubah-data(guru).php?rubah_id=$id'>Rubah</a></td>
                        <td><a href='deleteguru.php?hapus_id=$id'>Hapus</a></td>
                      </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>