<?php
        include '../config.php';
        
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $lulusan = $_POST['lulusan'];
        
        
        //Query penyimpanan
        $query = "INSERT into tb_dosen VALUES (NULL,'$nip', '$nama','$jenis_kelamin','$alamat','$lulusan')";
        $action = mysqli_query($koneksi,$query);  

//echo $query; echo '<BR>';
     
 header('Location: ../dosen');
?>