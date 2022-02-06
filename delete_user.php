<?php include 'koneksi.php'; ?>
<?php
$koneksi->query("DELETE FROM user WHERE id_user='$_GET[id_user]'");
echo "<script>alert('Data User Berhasil Dihapus')</script>";
echo "<script>location='data_user.php';</script>";
?>