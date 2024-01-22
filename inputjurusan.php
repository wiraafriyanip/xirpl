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
    <div class="container">
        <h4>form input data jurusan</h4>
        <form action="prosesinputjurusan.php" method="POST">
            <div class="mb-3">
                <label class="form-label">NAMA JURUSAN</label>
                <input type="text" class="form-control" name="namajurusan" >
            </div>   
            <div class="mb-3">
                <label class="form-label">NAMA KAJUR</label>
                <input type="text" class="form-control" name="namakajur" >
            </div>  
            <div class="mb-3">
                <label class="form-label">JUMLAH SISWA</label>
                <input type="text" class="form-control" name="jmlsiswa" >
            </div>  
            <button type="submit" class="btn-btn-primary" name="simpan">Submit</button>             
        </form>
    </div>    
</body>
</html>