<?php
include 'action_config.php';

$id   = $_GET['id'];
mysqli_query($con, "DELETE FROM tb_hobi WHERE id_hobi = '$id'");
// mengalihkan ke halaman index.php
header("location:admin_page-hobi.php");
?>