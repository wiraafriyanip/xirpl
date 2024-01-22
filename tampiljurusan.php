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
        <h4>tampil data jurusan</h4>
        <table class="table">
            <tr>
                <td>NO</td>
                <td>NAMA JURUSAN</td>
                <td>NAMA KAJUR</td>
                <td>JUMLAH SISWA</td>
                <td>ACTION</td>
            </tr>
            <?php
            $no=0;
            include_once("koneksi.php");
            $result=mysqli_query($conn,"select * from tbjurusan ORDER BY namajurusan ASC");
            while($datajurusan=mysqli_fetch_array($result))
            {
                $no++;
                ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $datajurusan['namajurusan'];?></td>
                <td><?php echo $datajurusan['namakajur'];?></td>
                <td><?php echo $datajurusan['jmlsiswa'];?></td>
                <td> <a href="editjurusan.php?idjurusan=<?php echo $datajurusan['idjurusan']; ?>" class="btn btn-primary">EDIT</a>
                <a href="hapusjurusan.php?idjurusan=<?php echo $datajurusan['idjurusan']; ?>" class="btn btn-danger">HAPUS</a></td>
               
              
            </tr>
           <?php } ?>

        </table> 

    </div>
    
</body>
</html>