<?php

    include "koneksi.php";

    $tag = $_POST['tag'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];

   $query="INSERT INTO guru SET  tag='$tag',nama='$nama',mapel='$mapel'";
   $sql="DELETE from tambah where tag='$tag'";
mysqli_query($koneksi, $query);
mysqli_query($koneksi, $sql);
header("location:update.php");
?>