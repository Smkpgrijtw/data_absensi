<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$No  = $_POST['No'];
$tag           = $_POST['tag'];
$nama           = $_POST['nama'];
$kelas     = $_POST['mapel'];
// query SQL untuk insert data
$query="UPDATE guru SET tag='$tag',nama='$nama',mapel='$mapel' where No='$No'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:dataguru.php");
?>