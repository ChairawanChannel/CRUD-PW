<?php
include "koneksi.php";
$nip = $_POST["nip"];
$nama = $_POST["nama_guru"];
$email = $_POST["email_guru"];
$jenis_kelamin = $_POST["jenis_kelamin"]; // Perbaikan disini
date_default_timezone_set("Asia/Jakarta");
$tanggal = date("Y-m-d");
$sql = "INSERT INTO guru (nip, nama_guru, email_guru, jenis_kelamin, tanggal) VALUES ('$nip', '$nama', '$email', '$jenis_kelamin', '$tanggal')";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if ($query) {
    echo "<br>Data berhasil diinsert";
    header('location: tampil-data(guru).php');
} else {
    echo "ERROR: " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>
