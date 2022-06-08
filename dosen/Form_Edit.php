<?php 
 include '../config.php'; 
   $id = $_GET['id'];
   $query = "SELECT * FROM tb_dosen WHERE id='$id'";
   $action = mysqli_query($koneksi,$query);
   if(mysqli_num_rows($action) > 0)
   {
    $no = 1;
    while ($list = mysqli_fetch_array($action))
     {          
        $T1 = $list['nip'];  
        $T2 = $list['nama'];
        $T3 = $list['jenis_kelamin'];  
        $T4 = $list['alamat'];
        $T5 = $list['lulusan'];
        $T6 = $list['id'];       
       
      }
    } 
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mt-4">Edit Data Dosen</h1>
      <form action="edit_data.php" method="post">
        <input type="hidden" name="id" value="<?php echo $T6; ?>">
        <div class="form-group mb-3">
          <label for="nip">NIP</label>
          <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" value="<?php echo $T1; ?>">
        </div>
        <div class="form-group mb-3">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?php echo $T2; ?>">
        </div>
        <div class="form-group mb-3">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group mb-3">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="<?php echo $T4; ?>">
        </div>
        <div class="form-group mb-3">
          <label for="lulusan">Lulusan</label>
          <select class="form-select" id="lulusan" name="lulusan">
            <option value="S2">S2</option>
            <option value="S3">S3</option>
            <option value="Profesor">Profesor</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>