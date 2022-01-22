<?php
require 'functions.php';
if(isset($_POST['tambah'])){
  if(tambah($_POST) > 0){
    echo
    "<script>
    alert('Data Berhasil di Tambah');
    document.location.href = 'index.php';
    </script>";
  } else{
    echo
    "<script>
    alert('Data Gagal di Tambah');
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
    <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="tema/fontawesome/css/all.min.css" rel="stylesheet">

    <title>CRUD</title>
  </head>
  <body>
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">SIPEMABA || Kampus Kita</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
      </ul>
      <div class="text-white">
          <?php 
          echo date ('l, d-m-y');
          ?>
      </div>
    </div>
  </div>
</nav>

<!-- sidebar -->
<div class="row mt-4">
    <div class="col-md-2 mt-2 pr-3 pt-4 bg-secondary">
        <!-- menu -->
        <ul class="nav flex-column ">
  <li class="nav-item">
    <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a><hr class="bg-dark">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="index.php"><i class="fas fa-user"></i> Calon Mahasiswa</a><hr class="bg-dark">
  </li>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="tambah.php"><i class="fas fa-user-edit"></i> Input Camaba</a><hr class="bg-dark">
  </li>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a><hr class="bg-dark">
  </li>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt"></i> Jadwal Kuliah</a><hr class="bg-dark">
  </li>
  </li>
</ul>
    </div>
    <div class="col-md-10 p-5 pt-5">
        <!-- content -->
        <h3><i class="fas fa-user"></i> Input Data Calon Mahasiswa</h3><hr> 
        <form method="POST" action="">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama : </label>
    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" autofocus required autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat : </label>
    <input type="text" class="form-control" id="alamat" placeholder="Alamat Anda" name="alamat" required autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="jenis_kelamin" class="form-label">Jenis Kelamin : </label>
    <input type="text" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin Anda" name="jenis_kelamin" required autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="agama" class="form-label">Agama : </label>
    <input type="text" class="form-control" id="agama" placeholder="Agama" name="agama" required autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="sekolah_asal" class="form-label">Sekolah Asal : </label>
    <input type="text" class="form-control" id="sekolah_asal" placeholder="Asal Sekolah Anda" name="sekolah_asal" required autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="foto_maba" class="form-label">Foto : </label>
    <input type="text" class="form-control" id="" placeholder="Foto Anda" name="foto_maba" required autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
</form>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/um d/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>