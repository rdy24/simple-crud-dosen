<?php
include '../koneksi.php';
        if (isset($_GET['id'])) {$id = $_GET['id'];} else {$id=0;}  
        $id= trim(preg_replace('/[^0-9]/','',$id)); 
        
        
        $query = "DELETE FROM tb_dosen WHERE id = '$id'";
        mysqli_query($koneksi,$query);

        header('Location: ../dosen');
?>