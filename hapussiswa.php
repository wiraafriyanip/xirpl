<?php
include_once('koneksi.php');
$idsiswa=$_GET['idsiswa'];
$result=mysqli_query($conn,"delete from tbsiswa where idsiswa='$idsiswa'");
header("location:tampilsiswa.php");
?>