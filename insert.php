<?php
include "koneksi.php";
$nm = $_POST["nama"];
$em = $_POST["mail"];
date_default_timezone_set ("Asia/Jakarta");
$tgl = date("Y:m:d");
$sql = "INSERT INTO mahasiswa (nama_mahasiswa, email_mahasiswa, tanggal) VALUES ('$nm', '$em', '$tgl')";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
if ($query) {
    echo "<br>Data berhasil di insert";
    header ('location: tampil-data.php');
} else {
    echo "ERROR : " .$sql. "<br>".mysqli_error ($koneksi);
}
    mysqli_close($koneksi);

?>