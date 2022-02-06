<?php include 'koneksi.php'; ?>
<?php include 'head.php'; ?>
<?php include 'menu.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Halaman Data Buku</h1>
                    </div>
                    <div class="card mb-4">
                            <div class="card-header">
                                <a href="input_buku.php"><button type="submit" class="btn btn-success">Tambah Data</button></a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr><?php $nomor=1 ?>
                                            <th>No.</th>
                                            <th>ID Buku</th>
                                            <th>Nama Buku</th>
                                            <th>Jenis Buku</th>
                                            <th>Qty</th>
                                            <th>Penerbit</th>
                                            <th>No. Rak</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr><?php $nomor=1 ?>
                                        <th>No.</th>
                                            <th>ID Buku</th>
                                            <th>Nama Buku</th>
                                            <th>Jenis Buku</th>
                                            <th>Qty</th>
                                            <th>Penerbit</th>
                                            <th>No. Rak</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php $tampil_data = $koneksi->query("SELECT * FROM buku"); ?>
                                      <?php while ($buku = $tampil_data->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $buku['id_buku']; ?></td>
                                            <td><?php echo $buku['nama_buku']; ?></td>
                                            <td><?php echo $buku['jenis_buku']; ?></td>
                                            <td><?php echo $buku['qty']; ?></td>
                                            <td><?php echo $buku['penerbit']; ?></td>
                                            <td><?php echo $buku['no_rak']; ?></td>
                                            <td><a href="delete_buku.php?id_buku=<?php echo $buku['id_buku']; ?>"><button type="submit" class="btn btn-danger">Hapus</a>
                                            <a href="edit_buku.php?id_buku=<?php echo $buku['id_buku']; ?>"><button type="submit" class="btn btn-warning">Perbarui</a></td>
                                            
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </main>
<?php include 'footer.php'; ?>