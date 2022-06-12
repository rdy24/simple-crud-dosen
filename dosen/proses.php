<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO tb_dosen VALUES(NULL, '$nip', '$nama', '$tanggal_lahir', '$jenis_kelamin', '$alamat')";

    if(empty($nip) || empty($nama) || empty($tanggal_lahir) || empty($alamat)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'create.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Data Dosen Berhasil Ditambahkan');
                window.location = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'create.php';
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id     = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE tb_dosen SET
            nip = '$nip',
            nama = '$nama', 
            tanggal_lahir = '$tanggal_lahir', 
            jenis_kelamin = '$jenis_kelamin', 
            alamat = '$alamat'
            WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Dosen Berhasil Diubah');
                window.location = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'edit.php';
            </script>
        ";
    }
}
?>
