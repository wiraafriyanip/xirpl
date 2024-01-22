<?php
include"koneksi.php";
if(isset($_POST['update']))
{
    $idsiswa=$_POST['idsiswa'];
    $namasiswa=$_POST['namasiswa'];
    $nis=$_POST['nis'];
    $jurusan=$_POST['jurusan'];

    $result=mysqli_query($conn,"update  tbsiswa set 
    namasiswa='$namasiswa',
    nis='$nis',
    jurusan='$jurusan' 
    where idsiswa='$idsiswa'"
    );
    header("location:tampilsiswa.php");
}
?>