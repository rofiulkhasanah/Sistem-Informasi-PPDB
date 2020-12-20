<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'action_config.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($con,"SELECT * from tb_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
    while ($data = mysqli_fetch_assoc($login)) {
		$id_user = $data['id_user'];
    // cek jika user login sebagai admin
        if ($data['level']=="admin") {
 
        // buat session login dan username
            $_SESSION['username'] = $username;
			$_SESSION['id_user'] = $id_user;
			$_SESSION['level'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:admin_page-DataPendaftar.php?id_user=".$id_user);
 
        // cek jika user login sebagai pegawai
        } elseif ($data['level']=="pendaftar") {
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['id_user'] = $id_user;
            $_SESSION['level'] = "pendaftar";
            // alihkan ke halaman dashboard pegawai
            header("location:user_index.php?id_user=".$id_user);
        } else {
 
        // alihkan ke halaman login kembali
            header("location:index.php?pesan=gagal");
        }
    }
}else{
	header("location:index.php?pesan=gagal");
}
 
?>