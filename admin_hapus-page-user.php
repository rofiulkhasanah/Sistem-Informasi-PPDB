<?php
include 'action_config.php';

$id   = $_GET['id'];
mysqli_query($con, "DELETE FROM tb_user WHERE id_user = '$id'");
// mengalihkan ke halaman index.php
header("location:admin_page-add-admin.php");
?>