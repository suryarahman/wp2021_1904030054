<?php include 'koneksi.php'; ?>
<?php include 'head.php'; ?>
<?php include 'menu.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Halaman Tambah Buku</h1>
                    </div>
                    <div>
                      <form method="post">
                        <div class="row col-md-8">
                          <label>Nama Buku</label>
                          <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan Nama Buku" required>
                          <label>Jenis Buku</label>
                          <input type="text" name="jenis_buku" class="form-control" placeholder="Masukkan Jenis Buku" required>
                          <label>Stok Buku</label>
                          <input type="text" name="qty" class="form-control" placeholder="Masukkan Stok Buku" required>
                          <label>Penerbit</label>
                          <input type="text" name="penerbit" class="form-control" placeholder="Masukkan Nama Penerbit" required>
                          <label>No. Rak</label>
                          <input type="text" name="no_rak" class="form-control" placeholder="Masukkan Nomor Rak Buku" required>
                          <button type="submit" class="btn btn-primary" name="update">Simpan</button>
                        </div>
                      </form>
                      <?php
                      if(isset ($_POST['update']))
                      {
                        $koneksi->query("INSERT INTO buku (nama_buku, jenis_buku, qty, penerbit, no_rak) VALUES ('$_POST[nama_buku]', '$_POST[jenis_buku]', '$_POST[qty]', '$_POST[penerbit]', '$_POST[no_rak]')");
                        echo "<script>alert('Data Buku Berhasil Disimpan')</script>";
                        echo "<script>location='data_buku.php';</script>";
                      }
                      ?>
                    </div>
                </main>
<?php include 'footer.php'; ?>