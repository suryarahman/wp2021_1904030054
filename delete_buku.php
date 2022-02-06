<?php include 'koneksi.php'; ?>
<?php
$koneksi->query("DELETE FROM buku WHERE id_buku='$_GET[id_buku]'");
echo "<script>alert('Data Buku Berhasil Dihapus')</script>";
echo "<script>location='data_buku.php';</script>";
?>