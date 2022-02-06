<?php include 'koneksi.php'; ?>
<?php include 'head.php'; ?>
<?php include 'menu.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Halaman Tambah User</h1>
                    </div>
                    <div>
                      <form method="post">
                        <div class="row col-md-8">
                          <label>Nama User</label>
                          <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama User" required>
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                          <label>No. Telepon</label>
                          <input type="text" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon" required>
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat" required></textarea>
                          <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                        </div>
                      </form>
                      <?php
                      if(isset ($_POST['simpan']))
                      {
                        $koneksi->query("INSERT INTO user (nama_user, password, no_telp, alamat) VALUES ('$_POST[nama_user]', '$_POST[password]', '$_POST[no_telp]', '$_POST[alamat]')");
                        echo "<script>alert('Data User Berhasil Disimpan')</script>";
                        echo "<script>location='data_user.php';</script>";
                      }
                      ?>
                    </div>
                </main>
<?php include 'footer.php'; ?>