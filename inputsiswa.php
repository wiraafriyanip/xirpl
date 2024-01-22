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
        <h4>form input data siswa</h4>
        <form action="prosesinputsiswa.php" method="POST">
            <div class="mb-3">
                <label class="form-label">NAMA SISWA</label>
                <input type="text" class="form-control" name="namasiswa" >
            </div>   
            <div class="mb-3">
                <label class="form-label">NIS</label>
                <input type="text" class="form-control" name="nis" >
            </div>  
            <div class="mb-3">
                <label class="form-label">JURUSAN</label>
                <input type="text" class="form-control" name="jurusan" >
            </div>  
            <button type="submit" class="btn-btn-primary" name="simpan">Submit</button>             
        </form>
    </div>    
</body>
</html>