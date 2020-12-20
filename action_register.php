<?php
include 'action_config.php';

// Deklarasi variable
$namalengkap = $_POST['namalengkap'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$level = $_POST['level'];
$submit =$_POST['submit'];

if(isset($submit)){

 if(empty($namalengkap) or empty($username) or empty($email) or empty($password)){

  echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('user_ppdb-register.php') </script>";
 }else{

//   $pass = md5($_POST['password']);
  $query = "INSERT INTO `tb_user`(`nama`, `username`, `email`, `password`, `level`) VALUES ('$namalengkap','$username','$email','$password','$level')";
  $sql = mysqli_query($con, $query);
  echo "<script>alert('Hallo $username, Pendaftaran Akun berhasil'); window.location=('index.php');</script>";
 }
}

?>