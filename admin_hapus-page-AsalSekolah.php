<?php
include 'action_config.php';

$id   = $_GET['id'];
mysqli_query($con, "DELETE FROM tb_asal_sekolah WHERE id_asal_sekolah = '$id'");
// mengalihkan ke halaman index.php
header("location:admin_page-AsalSekolah.php");
?>