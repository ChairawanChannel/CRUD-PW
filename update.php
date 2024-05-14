<?php
include "Koneksi.php";
$nm = $_POST["nama"];
$email = $_POST["mail"];
$id = $_POST["id"];
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$sql = "UPDATE mahasiswa SET nama_mahasiswa = '$nm', email_mahasiswa = '$email', tanggal = '$tanggal' WHERE id_mhs = '$id'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    echo "Data berhasil dirubah!";
    header('Location: tampil-data.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>