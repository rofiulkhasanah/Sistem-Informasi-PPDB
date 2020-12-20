<?php
include 'action_config.php';

$id   = $_GET['id'];
mysqli_query($con, "DELETE FROM tb_tingkat_kelas WHERE id_tingkat_kelas = '$id'");
// mengalihkan ke halaman index.php
header("location:admin_page-TingkatKelas.php");
?>