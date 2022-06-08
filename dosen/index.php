<?php 
 include '../config.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2 class="text-center mt-4">Data Dosen</h2>
    <a href="Form_Tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <tr class="text-center">
            <td>No</td>
            <td>NIP</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>Lulusan</td>
            <td>Aksi</td>

        </tr>
        <?php  
        $query = "SELECT * FROM tb_dosen";
        $action = mysqli_query($koneksi,$query);
        if(mysqli_num_rows($action) > 0)
        {
            
            $no = 1;
            echo '<tbody>';
            
            while ($list = mysqli_fetch_array($action))
            { 
                $T1 = $list['nip'];  
                $T2 = $list['nama'];
                $T3 = $list['jenis_kelamin'];  
                $T4 = $list['alamat'];
                $T5 = $list['lulusan'];
                $T6 = $list['id'];  
                
                
            echo '<tr class="text-center">
            <td>'.$no.'</td>
            <td>'.$T1.'</td>
            <td>'.$T2.'</td>
            <td>'.$T3.'</td>
            <td>'.$T4.'</td>
            <td>'.$T5.'</td>
            <td>
            <a class="btn btn-info" href="Form_Edit.php?id='.$T6.'"> <i class="glyphicon glyphicon-ok"></i> Edit </a> :: 
            <a class="btn btn-danger remove_fields" href="hapus.php?id='.$T6.'"> <i class="glyphicon glyphicon-trash"></i> Hapus </a>

            </td></tr>';
            $no++;
            }
            
        }
        else
        {
            echo '<tr class="text-center"><td colspan="7"><h4>&nbsp;Belum ada data dosen!</h4></td></tr>';
        }


        ?>
    
    </table>   
</div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</body>
</html>