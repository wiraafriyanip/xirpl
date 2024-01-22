<?php
include"koneksi.php";
if(isset($_POST['simpan'])){
    $namajurusan=$_POST['namajurusan'];
    $namakajur=$_POST['namakajur'];
    $jmlsiswa=$_POST['jmlsiswa'];

    $simpan=mysqli_query($conn,"insert into tbjurusan(namajurusan,namakajur,jmlsiswa)values('$namajurusan','$namakajur','$jmlsiswa')");
    header("location:tampiljurusan.php");
}
?>