<?php
include "koneksi.php";

$id = $_POST['hapusData'];

$sql = "delete from mahasiswa where nim='$id'";
$hasil=mysqli_query($kon,$sql);
?>