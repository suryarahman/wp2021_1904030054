<?php include 'koneksi.php'; ?>
<?php
$koneksi->query("DELETE FROM anggota WHERE id_anggota='$_GET[id_anggota]'");
echo "<script>alert('Data Anggota Berhasil Dihapus')</script>";
echo "<script>location='data_anggota.php';</script>";
?>