<?php
include"koneksi.php";
if(isset($_POST['update'])){
    $idjurusan=$_POST['idjurusan'];
    $namajurusan=$_POST['namajurusan'];
    $namakajur=$_POST['namakajur'];
    $jmlsiswa=$_POST['jmlsiswa'];

    $result=mysqli_query($conn,"update  tbjurusan set namajurusan='$namajurusan',namakajur='$namakajur',jmlsiswa='$jmlsiswa' where idjurusan='$idjurusan'");
    header("location:tampiljurusan.php");
}
?>