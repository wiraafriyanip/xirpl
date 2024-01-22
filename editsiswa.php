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
            $idsiswa=$_GET['idsiswa'];
            $result=mysqli_query($conn,"select * from tbsiswa where idsiswa='$idsiswa'");
            while($datasiswa=mysqli_fetch_array($result))
            {
    ?>
    <div class="container">
        <h4>from input data siswa</h4>
    <form action="proseseditsiswa.php" method="POST">                               
            <div class="mb-3">
                <label class="form-label">NAMA SISWA</label>
                <input type="text" class="form-control" name="namasiswa" value="<?php echo $datasiswa['namasiswa']; ?>">
            </div>   
            <div class="mb-3">
                <label class="form-label">NIS</label>
               <input type="text" class="form-control" name="nis" value="<?php echo $datasiswa['nis']; ?>">
            </div>  
            <div class="mb-3">
                <label class="form-label">JURUSAN</label>
                <input type="text" class="form-control" name="jurusan" value="<?php echo $datasiswa['jurusan']; ?>">
            </div>  
            <input type="hidden" name="idsiswa" value="<?php echo $datasiswa['idsiswa']; ?>">
            
            <button type="submit" class="btn-btn-primary" name="update">Submit</button>          
        </form>
        <?php } ?>
       
</body>
</html>