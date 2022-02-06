<?php include 'koneksi.php'; ?>
<?php include 'head.php'; ?>
<?php include 'menu.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Halaman Tambah Anggota</h1>
                    </div>
                    <div>
                      <form method="post">
                        <div class="row col-md-8">
                          <label>Nama Anggota</label>
                          <input type="text" name="nama_anggota" class="form-control" placeholder="Masukkan Nama Anggota" required>
                          <label>Jenis Kelamin</label>
                          <select name="jenis_kelamin" class="form-control">
                            <option value="">-Pilih-</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
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
                        $koneksi->query("INSERT INTO anggota (nama_anggota, jenis_kelamin, no_telp, alamat) VALUES ('$_POST[nama_anggota]', '$_POST[jenis_kelamin]', '$_POST[no_telp]', '$_POST[alamat]')");
                        echo "<script>alert('Data Anggota Berhasil Disimpan')</script>";
                        echo "<script>location='data_anggota.php';</script>";
                      }
                      ?>
                    </div>
                </main>
<?php include 'footer.php'; ?>