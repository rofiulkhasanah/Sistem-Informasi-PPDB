<?php

include 'action_config.php';

// Action Tambah Data
if (isset($_POST)) {
    $id_user = $_POST['id_user'];
    $nsm = $_POST['nsm'];
    $npsn = $_POST['npsn'];
    $status_siswa = $_POST['status_siswa'];
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tahun_ajaran = $_POST['tahun_ajaran'];
    $tingkat_kelas = $_POST['tingkat_kelas'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $jumlah_saudara = $_POST['jumlah_saudara'];
    $anak_ke = $_POST['anak_ke'];
    $nama_sekolah_asal = $_POST['nama_sekolah_asal'];
    $npsn_sekolah_asal = $_POST['npsn_sekolah_asal'];
    $alamat_sekolah_asal = $_POST['alamat_sekolah_asal'];
    $tanggal_daftar = date("Y-m-d H:i:s");
    $kelas_paralel = $_POST['kelas_paralel'];

    //     var_dump($nsm);
    // var_dump($npsn);
    // var_dump($status_siswa);
    // var_dump($nama);
    // var_dump($nisn);
    // var_dump($nik);
    // var_dump($tahun_ajaran);
    // var_dump($tingkat_kelas);
    // var_dump($tanggal_masuk);
    // var_dump($asal_sekolah);
    // var_dump($tempat_lahir);
    // var_dump($tanggal_lahir);
    // var_dump($jenis_kelamin);
    // var_dump($agama);
    // var_dump($hobi);
    // var_dump($cita_cita);
    // var_dump($nama_sekolah_asal);
    // var_dump($npsn_sekolah_asal);
    // var_dump($alamat_sekolah_asal);
    // var_dump($tanggal_daftar);


    $query_tambah = "INSERT INTO tb_pendaftaran (nama, NSM, NPSN, status_siswa, NISN, NIK, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, hobi, cita_cita, jumlah_saudara, tanggal_masuk, asal_sekolah, tahun_ajaran, tingkat, kelas_paralel, anak_ke, npsn_sekolah_asal, nama_sekolah_asal, alamat_sekolah_asal, tanggal_daftar, id_user) VALUES ('$nama','$nsm','$npsn','$status_siswa','$nisn','$nik','$tempat_lahir','$tanggal_lahir', '$jenis_kelamin','$agama','$hobi','$cita_cita','$jumlah_saudara','$tanggal_masuk','$asal_sekolah','$tahun_ajaran','$tingkat_kelas','$kelas_paralel','$anak_ke','$npsn_sekolah_asal','$nama_sekolah_asal','$alamat_sekolah_asal','$tanggal_daftar','$id_user')";
    $sql = mysqli_query($con, $query_tambah);
    echo "<script>window.location=('user_page-detail-ppdb.php?id_user=$id_user') </script>";

}
