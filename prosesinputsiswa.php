<?php
include"koneksi.php";
if(isset($_POST['simpan'])){
    $namasiswa=$_POST['namasiswa'];
    $nis=$_POST['nis'];
    $jurusan=$_POST['jurusan'];

    $simpan=mysqli_query($conn,"insert into tbsiswa(namasiswa,nis,jurusan)values('$namasiswa','$nis','$jurusan')");
   

    if($simpan){
        echo "<script>alert('Data successfully saved!')</script>";
        echo "<script>window.open('tampilsiswa.php','_self')</script>";

    }else{
        echo "Perubahan data gagal=</br>".mysql_error();
    }
}
?>