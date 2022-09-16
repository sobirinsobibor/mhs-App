
<?php

require '../functions.php';

$id = $_GET['id'];

$rows = query("SELECT * FROM mahasiswa WHERE id = '$id'");

if(isset($_POST['update_btn'])){
    if(update($_POST, $id)>0){
        echo 
        "<script>
                alert('Data berhasil diubah')
                document.location.href = '../index.php';
        </script>";
    }else{
        echo 
        "<script>
                alert('Data tidak berhasil diubah')
                document.location.href = '../index.php';
        </script>";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistem Informasi Mahasiswa</title>
  </head>
  <body>
    <nav class="navbar navbar-dark" style="background-color: #4a4c94;">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Sistem Informasi Mahasiswa</span>
        </div>
    </nav>

    <div class="container">
        <div class="mt-3">
            <nav class="navbar navbar-dark" style="background-color: #4a4c94;">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Ubah Mahasiswa</span>
                </div>
            </nav>
            <?php
                foreach($rows as $row):
            ?>
            <form method="post">
                <div class="mb-1">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim" value="<?=$row['nim']?>">
                </div>
                <div class="mb-1">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama" value="<?=$row['nama']?>">
                </div>
                <div class="mb-1">
                    <label for="fakultas" class="form-label">Fakultas</label>
                    <select class="form-select" aria-label="Default select example" name="fakultas" value="<?=$row['fakultas']?>">
                        <option value="0">Pilih Fakultas</option>
                        <option value="Fakultas Ekonomi dan Bisnis"  <?php if($row['fakultas']=="Fakultas Ekonomi dan Bisnis") echo "selected=\"selected\"";?>>Fakultas Ekonomi dan Bisnis</option>
                        <option value="Fakultas Hukum" <?php if($row['fakultas']=="Fakultas Hukum") echo "selected=\"selected\"";?>>Fakultas Hukum</option>
                        <option value="Fakultas Vokasi" <?php if($row['fakultas']=="Fakultas Vokasi") echo "selected=\"selected\"";?>>Fakultas Vokasi</option>
                    </select>
                </div>
                <div class="mb-1">
                    <label for="prodi" class="form-label">Program Studi</label>
                    <select class="form-select" aria-label="Default select example" name="prodi">
                        <option value="0">Pilih Program Studi</option>
                        <option value="0" style="font-weight: bold;">Fakultas Ekonomi dan Bisnis</option>
                        <option value="Ekonomi" <?php if($row['prodi']=="Ekonomi") echo "selected=\"selected\"";?> >Ekonomi </option>
                        <option value="Manajemen" <?php if($row['prodi']=="Manajemen") echo "selected=\"selected\"";?>>Manajemen </option>
                        <option value="Akuntansi"  <?php if($row['prodi']=="Akuntansi") echo "selected=\"selected\"";?>>Akuntansi </option>
                        <option value="0" style="font-weight: bold;">Fakultas Hukum</option>
                        <option value="Ilmu Hukum"  <?php if($row['prodi']=="Ilmu Hukum") echo "selected=\"selected\"";?> >Ilmu Hukum</option>
                        <option value="Ilmu Hukum Syariah" <?php if($row['prodi']=="Ilmu Hukum Syariah") echo "selected=\"selected\"";?> >Ilmu Hukum Syariah</option>
                        <option value="Ilmu Hukum Keluarga" <?php if($row['prodi']=="Ilmu Hukum Keluarga") echo "selected=\"selected\"";?>>Ilmu Hukum keluarga</option>
                        <option value="0" style="font-weight: bold;">Fakultas Vokasi</option>
                        <option value="Sistem Informasi" <?php if($row['prodi']=="Sistem Informasi") echo "selected=\"selected\"";?>>Sistem Informasi</option>
                        <option value="Manajemen Pemasaran" <?php if($row['prodi']=="Manajemen Pemasaran") echo "selected=\"selected\"";?>>Manajemen Pemasaran</option>
                        <option value="Kesehatan dan Keselamatan Kerja" <?php if($row['prodi']=="Kesehatan dan Keselamatan Kerja") echo "selected=\"selected\"";?>>Kesehatan dan Keselamatan Kerja</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3" name="update_btn">Update</button>
            </form>
            <?php
                endforeach;
            ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>