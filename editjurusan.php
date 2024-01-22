<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include"navbar.php"; ?>
    <?php
            include_once("koneksi.php");
            $idjurusan=$_GET['idjurusan'];
            $result=mysqli_query($conn,"select * from tbjurusan where idjurusan='$idjurusan'");
            while($datajurusan=mysqli_fetch_array($result))
            {
    ?>
     <div class="container">
    <form action="proseseditjurusan.php" method="POST">
            <div class="mb-3">
                <label class="form-label">NAMA JURUSAN</label>
                <input type="text" class="form-control" name="namajurusan" value="<?php echo $datajurusan['namajurusan']; ?>">
            </div>   
            <div class="mb-3">
                <label class="form-label">NAMA KAJUR</label>
                <input type="text" class="form-control" name="namakajur" value="<?php echo $datajurusan['namakajur']; ?>"> 
            </div>  
            <div class="mb-3">
                <label class="form-label">JUMLAH SISWA</label>
                <input type="text" class="form-control" name="jmlsiswa" value="<?php echo $datajurusan['jmlsiswa']; ?>"> 
            </div> 
            <input type="hidden" name="idjurusan" value="<?php echo $datajurusan['idjurusan']; ?>">
            <button type="submit"  name="update" class="btn-btn-primary">Submit</button>       
                 
    </form>
        <?php } ?>
</body>
</html>