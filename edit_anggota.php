<?php include 'koneksi.php'; ?>
<?php include 'head.php'; ?>
<?php include 'menu.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Halaman Pembaruan Data Anggota</h1>
                    </div>
                    <div>
                      <?php
                      $tampil_data = $koneksi->query("SELECT * FROM anggota WHERE id_anggota='$_GET[id_anggota]'");
                      $detail_anggota = $tampil_data->fetch_assoc();
                      ?>
                    <form method="post">
                        <div class="row col-md-8">
                          <label>Nama Anggota</label>
                          <input type="text" name="nama_anggota" class="form-control" value="<?php echo $detail_anggota['nama_anggota']; ?>">
                          <label>Jenis Kelamin</label>
                          <select name="jenis_kelamin" class="form-control">
                            <option value="<?php echo $detail_anggota['jenis_kelamin']; ?>">-Pilih-</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                          <label>No. Telepon</label>
                          <input type="text" name="no_telp" class="form-control" value="<?php echo $detail_anggota['no_telp']; ?>">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control" ><?php echo $detail_anggota['alamat']; ?></textarea>
                          <button type="submit" class="btn btn-primary" name="update">Perbarui</button>
                        </div>
                      </form>
                      <?php
                      if (isset($_POST['update'])){
                        $koneksi->query("UPDATE anggota SET nama_anggota='$_POST[nama_anggota]', jenis_kelamin='$_POST[jenis_kelamin]', no_telp='$_POST[no_telp]', alamat='$_POST[alamat]' WHERE id_anggota='$_GET[id_anggota]'");
                        echo "<script>alert('Data Anggota Berhasil Diperbarui')</script>";
                        echo "<script>location='data_anggota.php';</script>";
                      }
                      ?>
                    </div>
                </main>
<?php include 'footer.php'; ?>