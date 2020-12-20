<?php
include 'action_config.php';

$id   = $_GET['id'];
mysqli_query($con, "DELETE FROM tb_agama WHERE id_agama = '$id'");
// mengalihkan ke halaman index.php
header("location:admin_page-agama.php");
?>