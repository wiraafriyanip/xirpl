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
        <h4 align="center">tampil data siswa</h4>
        <table class="table">
            <tr>
                <td>NO</td>
                <td>NAMA SISWA</td>
                <td>NIS</td>
                <td>JURUSAN</td>
                <td>ACTION</td>
            </tr>
            <?php
            $no=0;
            include_once("koneksi.php");
            $result=mysqli_query($conn,"select * from tbsiswa ORDER BY namasiswa ASC");
            while($datasiswa=mysqli_fetch_array($result))
            {
                $no++;
                ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $datasiswa['namasiswa'];?></td>
                <td><?php echo $datasiswa['nis'];?></td>
                <td><?php echo $datasiswa['jurusan'];?></td>
                <td><a href="editsiswa.php?idsiswa=<?php echo $datasiswa['idsiswa'];?>" class="btn btn-danger">EDIT</a>
                <a href="hapussiswa.php?idsiswa=<?php echo $datasiswa['idsiswa'];?>" onclick="return confirm('yakin hapus?')" class="btn btn-success">HAPUS</a></td>
              
            </tr>
           <?php } ?>

        </table> 

    </div>
    
</body>
</html>