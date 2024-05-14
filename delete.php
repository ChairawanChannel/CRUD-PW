<?php
include "Koneksi.php";
$id = $_GET['hapus_id'];
$sql = "DELETE FROM mahasiswa WHERE id_mhs = '$id'";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if ($query) {
    echo "Data berhasil dihapus!";
    header('Location: tampil-data.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>