<?php include 'koneksi.php'; ?>
<?php include 'head.php'; ?>
<?php include 'menu.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Halaman Pembaruan Data Buku</h1>
                    </div>
                    <div>
                      <?php
                      $tampil_data = $koneksi->query("SELECT * FROM buku WHERE id_buku='$_GET[id_buku]'");
                      $detail_buku = $tampil_data->fetch_assoc();
                      ?>
                    <form method="post">
                        <div class="row col-md-8">
                          <label>Nama Buku</label>
                          <input type="text" name="nama_buku" class="form-control" value="<?php echo $detail_buku['nama_buku']; ?>">
                          <label>Jenis Buku</label>
                          <input type="text" name="jenis_buku" class="form-control" value="<?php echo $detail_buku['jenis_buku']; ?>">
                          <label>Stok Buku</label>
                          <input type="text" name="qty" class="form-control" value="<?php echo $detail_buku['qty']; ?>">
                          <label>Penerbit</label>
                          <input type="text" name="penerbit" class="form-control" value="<?php echo $detail_buku['penerbit']; ?>">
                          <label>No. Rak</label>
                          <input type="text" name="no_rak" class="form-control" value="<?php echo $detail_buku['no_rak']; ?>">
                          <button type="submit" class="btn btn-primary" name="update">Perbarui</button>
                        </div>
                      </form>
                      <?php
                      if (isset($_POST['update'])){
                        $koneksi->query("UPDATE buku SET nama_buku='$_POST[nama_buku]', jenis_buku='$_POST[jenis_buku]', qty='$_POST[qty]', penerbit='$_POST[penerbit]', no_rak='$_POST[no_rak]' WHERE id_buku='$_GET[id_buku]'");
                        echo "<script>alert('Data Buku Berhasil Diperbarui')</script>";
                        echo "<script>location='data_buku.php';</script>";
                      }
                      ?>
                    </div>
                </main>
<?php include 'footer.php'; ?>