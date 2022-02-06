<?php include 'koneksi.php'; ?>
<?php include 'head.php'; ?>
<?php include 'menu.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Halaman Data Anggota</h1>
                    </div>
                    <div class="card mb-4">
                            <div class="card-header">
                                <a href="input_anggota.php"><button type="submit" class="btn btn-success">Tambah Data</button></a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr><?php $nomor=1 ?>
                                            <th>No.</th>
                                            <th>ID Anggota</th>
                                            <th>Nama Anggota</th>
                                            <th>Jenis Keamin</th>
                                            <th>No. Telepon</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr><?php $nomor=1 ?>
                                            <th>No.</th>
                                            <th>ID Anggota</th>
                                            <th>Nama Anggota</th>
                                            <th>Jenis Keamin</th>
                                            <th>No. Telepon</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php $tampil_data = $koneksi->query("SELECT * FROM anggota"); ?>
                                      <?php while ($anggota = $tampil_data->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $anggota['id_anggota']; ?></td>
                                            <td><?php echo $anggota['nama_anggota']; ?></td>
                                            <td><?php echo $anggota['jenis_kelamin']; ?></td>
                                            <td><?php echo $anggota['no_telp']; ?></td>
                                            <td><?php echo $anggota['alamat']; ?></td>
                                            <td><a href="delete_anggota.php?id_anggota=<?php echo $anggota['id_anggota']; ?>"><button type="submit" class="btn btn-danger">Hapus</a>
                                            <a href="edit_anggota.php?id_anggota=<?php echo $anggota['id_anggota']; ?>"><button type="submit" class="btn btn-warning">Perbarui</a></td>
                                            
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </main>
<?php include 'footer.php'; ?>