<?php
include_once('koneksi.php');
$idjurusan=$_GET['idjurusan'];
$result=mysqli_query($conn,"delete from tbjurusan where idjurusan='$idjurusan'");
header("location:tampiljurusan.php");
?>