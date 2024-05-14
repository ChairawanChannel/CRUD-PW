<?php
include "koneksi.php";
$nip = $_POST["nip"];
$nama = $_POST["nama"];
$mail = $_POST["mail"];
$jenis_kelamin = $_POST["jenis_kelamin"]; // Menangkap jenis kelamin dari formulir
$id = $_POST["id"];

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');

$sql = "UPDATE guru SET nip = '$nip', nama_guru = '$nama', email_guru = '$mail', jenis_kelamin = '$jenis_kelamin', tanggal = '$tanggal' WHERE id_guru = '$id'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "Data berhasil diubah!";
    header('Location: tampil-data(guru).php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
