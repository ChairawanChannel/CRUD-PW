<?php
$server ="localhost";
$user ="root";
$pass ="";
$dbase ="xi-rpl-3";
$koneksi = mysqli_connect($server, $user, $pass, $dbase);
if(!$koneksi){
	die ("koneksi gagal :" .mysqli_connect_error());
}
	echo "koneksi berhasil";
?>