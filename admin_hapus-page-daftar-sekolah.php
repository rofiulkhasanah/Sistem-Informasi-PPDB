<?php
include 'action_config.php';

$id   = $_GET['id'];
mysqli_query($con, "DELETE FROM tb_daftarsekolah WHERE id_daftarsekolah = '$id'");
// mengalihkan ke halaman index.php
header("location:admin_page-daftar-sekolah.php");
?>