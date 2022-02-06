<?php include 'koneksi.php'; ?>
<?php include 'head.php'; ?>
<?php include 'menu.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Halaman Pembaruan Data User</h1>
                    </div>
                    <div>
                      <?php
                      $tampil_data = $koneksi->query("SELECT * FROM user WHERE id_user='$_GET[id_user]'");
                      $detail_user = $tampil_data->fetch_assoc();
                      ?>
                    <form method="post">
                        <div class="row col-md-8">
                          <label>Nama User</label>
                          <input type="text" name="nama_user" class="form-control" value="<?php echo $detail_user['nama_user']; ?>">
                          <label>Password</label>
                          <input type="text" name="password" class="form-control" value="<?php echo $detail_user['password']; ?>">
                          <label>No. Telepon</label>
                          <input type="text" name="no_telp" class="form-control" value="<?php echo $detail_user['no_telp']; ?>">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control" ><?php echo $detail_user['alamat']; ?></textarea>
                          <button type="submit" class="btn btn-primary" name="update">Perbarui</button>
                        </div>
                      </form>
                      <?php
                      if (isset($_POST['update'])){
                        $koneksi->query("UPDATE user SET nama_user='$_POST[nama_user]', password='$_POST[password]', no_telp='$_POST[no_telp]', alamat='$_POST[alamat]' WHERE id_user='$_GET[id_user]'");
                        echo "<script>alert('Data User Berhasil Diperbarui')</script>";
                        echo "<script>location='data_user.php';</script>";
                      }
                      ?>
                    </div>
                </main>
<?php include 'footer.php'; ?>