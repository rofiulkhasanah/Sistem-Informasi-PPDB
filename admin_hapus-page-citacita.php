<?php
include 'action_config.php';

$id   = $_GET['id'];
mysqli_query($con, "DELETE FROM tb_citacita WHERE id_citacita = '$id'");
// mengalihkan ke halaman index.php
header("location:admin_page-cita.php");
?>