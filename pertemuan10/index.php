!doctype html>
<?php
// date_default_timezone_get("Asia/Jakarta");
require 'functions.php';
$camaba = query("SELECT * FROM calon_mhs");
?>
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
        <h3><i class="fas fa-user"></i> Daftar Calon Mahasiswa</h3><hr> 
        <table class="table table-striped">
        <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Foto</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no=1?>
      <?php foreach($camaba as $cmb) : ?>
    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $cmb['nama']; ?></td>
      <td><img src="image/<?php echo $cmb['foto_maba']; ?>" width="50px" alt=""></td>
      <td><a href="detail.php?id=<? $cmb['id']; ?>" class="btn btn-warning" role="button">Detail</a></td>
    </tr>
    <?php $no++?>
    <?php endforeach ?>
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