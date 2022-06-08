<?php

   include '../config.php';
        
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $lulusan = $_POST['lulusan'];
        $id = $_POST['id'];

    
        
        //Query penyimpanan
        $query = "UPDATE tb_dosen SET nip = '$nip', nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', lulusan = '$lulusan'
        WHERE id = '$id' ";
        $action = mysqli_query($koneksi,$query); 
    //   echo  $query;
    header('Location: ../dosen');

?>