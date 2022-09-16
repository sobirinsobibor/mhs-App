<?php

require 'functions.php';

$query = "SELECT *  FROM mahasiswa";
$rows = query($query);

if(isset($_POST['input_btn'])){
    if(input($_POST)>0){
        echo
        "<script>
            alert('Data berhasil ditambahkan')
        </script>";
    }else{
        "<script>
            alert('Data tidak berhasil ditambahkan')
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

    <title>Sistem Informasi Kemahasiswaan</title>
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
                    <span class="navbar-brand mb-0 h1">Tambah Mahasiswa</span>
                </div>
            </nav>
            <form method="post">
                <div class="mb-1">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim" aria-describedby="emailHelp">
                </div>
                <div class="mb-1">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-1">
                    <label for="fakultas" class="form-label">Fakultas</label>
                    <select class="form-select" aria-label="Default select example" name="fakultas">
                        <option value="0">Pilih Fakultas</option>
                        <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
                        <option value="Fakultas Hukum">Fakultas Hukum</option>
                        <option value="Fakultas Vokasi">Fakultas Vokasi</option>
                    </select>
                </div>
                <div class="mb-1">
                    <label for="prodi" class="form-label">Program Studi</label>
                    <select class="form-select" aria-label="Default select example" name="prodi">
                        <option value="0">Pilih Program Studi</option>
                        <option value="0" style="font-weight: bold;">Fakultas Ekonomi dan Bisnis</option>
                        <option value="Ekonomi">Ekonomi </option>
                        <option value="Manajemen">Manajemen </option>
                        <option value="Akuntansi">Akuntansi </option>
                        <option value="0" style="font-weight: bold;">Fakultas Hukum</option>
                        <option value="Ilmu Hukum">Ilmu Hukum</option>
                        <option value="Ilmu Hukum Syariah">Ilmu Hukum Syariah</option>
                        <option value="Ilmu Hukum Keluarga">Ilmu Hukum Keluarga</option>
                        <option value="0" style="font-weight: bold;">Fakultas Vokasi</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
                        <option value="Kesehatan dan Keselamatan Kerja">Kesehatan dan Keselamatan Kerja</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3" name="input_btn">Submit</button>
            </form>
        </div>

        <div class="mt-3">
            <nav class="navbar navbar-dark" style="background-color: #4a4c94;">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Daftar Mahasiswa</span>
                </div>
            </nav>
            <table class="table  table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama </th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Progam Studi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $number = 1;
                        foreach($rows as $row):
                    ?>
                  <tr>
                    <th scope="row"><?=$number?></th>
                    <td><?=$row['nim']?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['fakultas']?></td>
                    <td><?=$row['prodi']?></td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <a href="CRUD/update.php?id=<?=$row['id']?>">
                                    <button type="button" class="btn btn-primary btn-sm">Update</button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="CRUD/delete.php?id=<?=$row['id']?>">
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </a>
                            </div>
                        </div>
                    </td>
                  </tr>
                    <?php
                        $number++;
                        endforeach;
                    ?>
                </tbody>
              </table>
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