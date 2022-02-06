<?php include 'koneksi.php'; ?>
<?php include 'head.php'; ?>
<?php include 'menu.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Halaman Data User</h1>
                    </div>
                    <div class="card mb-4">
                            <div class="card-header">
                                <a href="input_user.php"><button type="submit" class="btn btn-success">Tambah Data</button></a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr><?php $nomor=1 ?>
                                            <th>No.</th>
                                            <th>ID User</th>
                                            <th>Nama User</th>
                                            <th>Password</th>
                                            <th>No. Telepon</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr><?php $nomor=1 ?>
                                            <th>No.</th>
                                            <th>ID User</th>
                                            <th>Nama User</th>
                                            <th>Password</th>
                                            <th>No. Telepon</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php $tampil_data = $koneksi->query("SELECT * FROM user"); ?>
                                      <?php while ($user = $tampil_data->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $user['id_user']; ?></td>
                                            <td><?php echo $user['nama_user']; ?></td>
                                            <td><?php echo $user['password']; ?></td>
                                            <td><?php echo $user['no_telp']; ?></td>
                                            <td><?php echo $user['alamat']; ?></td>
                                            <td><a href="delete_user.php?id_user=<?php echo $user['id_user']; ?>"><button type="submit" class="btn btn-danger">Hapus</a>
                                            <a href="edit_user.php?id_user=<?php echo $user['id_user']; ?>"><button type="submit" class="btn btn-warning">Perbarui</a></td>
                                            
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </main>
<?php include 'footer.php'; ?>