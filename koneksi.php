<?php
$host = "localhost";	//nama host
$user = "u772447709_admin";	//username phpMyAdmin
$pass = "danfi880693";	//password phpMyAdmin
$name = "u772447709_yukml";	//nama database

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>