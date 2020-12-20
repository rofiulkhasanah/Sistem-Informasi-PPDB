<?php 
include 'admin_header.php';

if(isset($_POST['submit_edit'])){
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

    $query_edit = "UPDATE `tb_pendaftaran` SET `nama`='$nama',`NSM`='$nsm',`NPSN`='$npsn',`status_siswa`='$status_siswa',`NISN`='$nisn',`NIK`='$nik',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`jenis_kelamin`='$jenis_kelamin',`agama`='$agama',`hobi`='$hobi',`cita_cita`='$cita_cita',`jumlah_saudara`='$jumlah_saudara',`tanggal_masuk`='$tanggal_masuk',`asal_sekolah`='$asal_sekolah',`tahun_ajaran`='$tahun_ajaran',`tingkat`='$tingkat_kelas',`kelas_paralel`='$kelas_paralel',`anak_ke`='$anak_ke',`npsn_sekolah_asal`='$npsn_sekolah_asal',`nama_sekolah_asal`='$nama_sekolah_asal',`alamat_sekolah_asal`='$alamat_sekolah_asal',`tanggal_daftar`='$tanggal_daftar' WHERE id_user='$id_user'";
      $sql = mysqli_query($con, $query_edit);
      echo "<script>alert('data berhasil diubah'); window.location=('admin_page-DataPendaftar.php');</script>";
  }
?>

<section>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

              <h1 class="m-0 text-dark">Tingkat Kelas</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#inputdata" style="margin-bottom: 10px">Tambah Data</button>
          <!-- Info boxes -->
          <div class="row">
          <!-- Mulai Table -->
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr >
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NSM</th>
                <th scope="col">NPSN</th>
                <th scope="col">Status Siswa</th>
                <th scope="col">NISN</th>
                <th scope="col">NIK</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Hobi</th>
                <th scope="col">Cita-cita</th>
                <th scope="col">Jumlah Saudara</th>
                <th scope="col">Anak ke-</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">Tahun Ajaran</th>
                <th scope="col">Tingkat</th>
                <th scope="col">Kelas Paralel</th>
                <th scope="col">Sekolah Asal</th>
                <th scope="col" colspan="2" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            $no = 1;
            $query = 'SELECT * FROM tb_pendaftaran';
            $sql = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($sql)) {
                ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['NSM']; ?></td>
                <td><?php echo $row['NPSN']; ?></td>
                <td><?php echo $row['status_siswa']; ?></td>
                <td><?php echo $row['NISN']; ?></td>
                <td><?php echo $row['NIK']; ?></td>
                <td><?php echo $row['tempat_lahir']; ?></td>
                <td><?php echo $row['tanggal_lahir']; ?></td>
                <td><?php echo $row['jenis_kelamin']; ?></td>
                <td><?php echo $row['agama']; ?></td>
                <td><?php echo $row['hobi']; ?></td>
                <td><?php echo $row['cita_cita']; ?></td>
                <td><?php echo $row['jumlah_saudara']; ?></td>
                <td><?php echo $row['anak_ke']; ?></td>
                <td><?php echo $row['tanggal_masuk']; ?></td>
                <td><?php echo $row['asal_sekolah']; ?></td>
                <td><?php echo $row['tahun_ajaran']; ?></td>
                <td><?php echo $row['tingkat']; ?></td>
                <td><?php echo $row['kelas_paralel']; ?></td>
                <td><?php echo $row['nama_sekolah_asal']; ?></td>
                <td style="text-align: center;"><a href="admin_edit-page-agama.php?id=<?php echo $row['id_agama']; ?>" style="text-decoration: none; text-align: center">Edit</a>
                </td>
                <td style="text-align: center;">
                  <a href="admin_hapus-page-agama.php?id=<?php echo $row['id_agama']; ?>" style="text-decoration: none; text-align: center">Hapus</a>
                </td>
              </tr>
            </tbody>
            <?php
            }
            ?>
          </table>
          <!-- Akhir Table -->
          </div>
        </div>

        <!-- MULAI MODAL TAMBAH -->
                <!-- MODAL TAMBAH -->
                <div class="modal fade" id="inputdata" tabindex="-1" role="dialog" aria-labelledby="inputdata" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data Pendaftar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                  <div class="form-group">
                <label for="">NSM</label>
                <p><input  placeholder="NSM" oninput="this.className = ''" name="nsm"></p>  
                
                <label for="">NPSN</label>
                <p><input  placeholder="NPSN" oninput="this.className = ''" name="npsn"></p>

                <label for="">Status Siswa</label>
                <p><input value="Siswa Baru" placeholder="NSM" oninput="this.className = ''" name="status_siswa" style="background: #F1F1F1" readonly></p>
                
                <label for="">Nama Lengkap</label>
                <p><input placeholder="NSM" oninput="this.className = ''" name="nama"></p>
                
                <label for="">NISN</label>
                <p><input placeholder="NISN" oninput="this.className = ''" name="nisn"></p>
                
                <label for="">NIK</label>
                <p><input placeholder="NIK" oninput="this.className = ''" name="nik"></p>
                
                <label for="">Tahun Ajaran</label>
                <p><input placeholder="Tahun Ajaran" value="2020 - 2021" oninput="this.className = ''" name="tahun_ajaran" style="background: #F1F1F1" readonly></p>
                
                <label for="">Tingkat Kelas</label>
                    <p><select  name="tingkat_kelas">
                        <option selected disabled>Pilih Skala</option>
                        <?php
                            $sql_tingkat_kelas = mysqli_query($con, "SELECT * FROM `tb_tingkat_kelas`");
                            $no=1;
                            while ($a = mysqli_fetch_assoc($sql_tingkat_kelas)){
                        ?>
                        
                        <option value ="<?php echo $a['id_tingkat_kelas']?>">
                            <?php echo $a['nama_tingkat_kelas']?>
                        </option>

                        <?php
                            }
                        ?>
                    </select></p>
                    
                    <label for="">Tanggal Masuk</label>
                    <p><input placeholder="Tanggal Masuk" type="date" oninput="this.className = ''" name="tanggal_masuk" ></p>

                    <label for="">Asal Sekolah</label>
                <p>
                    <select  name="asal_sekolah">
                        <option selected disabled>Pilih Asal Sekolah</option>
                        <?php
                            $sql_asal_sekolah = mysqli_query($con, "SELECT * FROM `tb_asal_sekolah`");
                            $no=1;
                            while ($row_asal_sekolah = mysqli_fetch_assoc($sql_asal_sekolah)){
                        ?>
                        
                        <option value ="<?php echo $row_asal_sekolah['id_asal_sekolah']?>">
                            <?php echo $row_asal_sekolah['nama_asal_sekolah']?>
                        </option>

                        <?php
                            }
                        ?>
                    </select>
                </p>

                <label for="">Tempat Lahir</label>
                <p><input placeholder="Tahun Ajaran" oninput="this.className = ''" name="tempat_lahir" ></p>
                
                <label for="">Tanggal Lahir</label>
                <p><input placeholder="Tahun Ajaran" type="date" oninput="this.className = ''" name="tanggal_lahir" ></p>

                <label for="">Jenis Kelamin</label>
                <p>
                    <select name="jenis_kelamin" id="">
                        <option selected disabled>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </p>

                <label for="">Agama</label>
                <p>
                    <select  name="agama">
                        <option selected disabled>Pilih Agama</option>
                        <?php
                            $sql_agama = mysqli_query($con, "SELECT * FROM `tb_agama`");
                            $no=1;
                            while ($row_agama = mysqli_fetch_assoc($sql_agama)){
                        ?>
                        <option value ="<?php echo $row_agama['id_agama']?>">
                            <?php echo $row_agama['nama_agama']?>
                        </option>

                        <?php
                            }
                        ?>
                    </select>
                </p>

                <label for="">Hobi</label>
                <p>
                    <select  name="hobi">
                        <option selected disabled>Pilih Hobi</option>
                        <?php
                            $sql_hobi = mysqli_query($con, "SELECT * FROM `tb_hobi`");
                            $no=1;
                            while ($row_hobi = mysqli_fetch_assoc($sql_hobi)){
                        ?>
                        <option value ="<?php echo $row_hobi['id_hobi']?>">
                            <?php echo $row_hobi['nama_hobi']?>
                        </option>

                        <?php
                            }
                        ?>
                    </select>
                </p>

                <label for="">Cita-cita</label>
                <p>
                    <select name="cita_cita">
                        <option selected disabled>Pilih CIta-cita</option>
                        <?php
                            $sql_citacita = mysqli_query($con, "SELECT * FROM `tb_citacita`");
                            $no=1;
                            while ($row_citacita = mysqli_fetch_assoc($sql_citacita)){
                        ?>
                        <option value ="<?php echo $row_citacita['id_citacita']?>">
                            <?php echo $row_citacita['nama_citacita']?>
                        </option>

                        <?php
                            }
                        ?>
                    </select>
                </p>

                <label for="">Jumlah Saudara</label>
                <p><input placeholder="Jumlah Saudara" oninput="this.className = ''" name="jumlah_saudara"></p>

                <label for="">Anak ke-</label>
                <p><input placeholder="Anak ke-" oninput="this.className = ''" name="anak_ke"></p>

                <label for="">Nama Sekolah Asal</label>
                <p><input placeholder="Tahun Ajaran" oninput="this.className = ''" name="nama_sekolah_asal" ></p>
                
                <label for="">NPSN Sekolah Asal</label>
                <p><input placeholder="Tahun Ajaran" oninput="this.className = ''" name="npsn_sekolah_asal" ></p>
                
                <label for="">Alamat Sekolah Asal</label>
                <p><input placeholder="Tahun Ajaran" oninput="this.className = ''" name="alamat_sekolah_asal" ></p>

                <label for="">Kelas Paralel</label>
                <p><input oninput="this.className = ''" name="kelas_paralel" value="1" style="background: #F1F1F1" readonly></p>

                <p><input type="hidden" oninput="this.className = ''" name="id_user" value="<?php echo $id_user ?>" readonly></p>

                  </div>
                  <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- AKHIR MODAL TAMBAH -->



        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
                   <!--  MULAI MODAL EDIT -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Data data_pendaftar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <?php
				$id = $_GET['id'];
				$data = mysqli_query($con,"SELECT * from tb_data_pendaftar where id_data_pendaftar='$id'");
				while($baris = mysqli_fetch_array($data)){
			?>
                <form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="hidden" class="form-control" name="id_user" value="<?php echo $baris['id_user'];?>">
                    <input type="text" class="form-control" name="name" value="<?php echo $baris['nama'];?>">
                    <label >NSM</label>
                    <input type="text" class="form-control" name="nsm" value="<?php echo $baris['NSM'];?>" readonly>
                    <label >NPSN</label>
                    <input type="text" class="form-control" name="npsm" value="<?php echo $baris['NPSN'];?>" readonly>
                    <label >Status Siswa</label>
                    <input type="text" class="form-control" name="status_siswa" value="<?php echo $baris['status_siswa'];?>" readonly>
                    <label >NISN</label>
                    <input type="text" class="form-control" name="nisn" value="<?php echo $baris['NISN'];?>">
                    <label >NIK</label>
                    <input type="text" class="form-control" name="nik" value="<?php echo $baris['NIK'];?>">
                    <label >Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $baris['tempat_lahir'];?>">
                    <label >Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $baris['tanggal_lahir'];?>">
                    <label >Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $baris['jenis_kelamin'];?>">
                    <label for="">Agama</label>
                    <p>
                        <select  name="agama">
                            <option selected disabled>Pilih Agama</option>
                            <?php
                                $sql_agama = mysqli_query($con, "SELECT * FROM `tb_agama`");
                                $no=1;
                                while ($row_agama = mysqli_fetch_assoc($sql_agama)){
                            ?>
                            <option value ="<?php echo $row_agama['id_agama']?>">
                                <?php echo $row_agama['nama_agama']?>
                            </option>

                            <?php
                                }
                            ?>
                        </select>
                    </p>
                    <label for="">Hobi</label>
                    <p>
                        <select  name="hobi">
                            <option selected disabled>Pilih Hobi</option>
                            <?php
                                $sql_hobi = mysqli_query($con, "SELECT * FROM `tb_hobi`");
                                $no=1;
                                while ($row_hobi = mysqli_fetch_assoc($sql_hobi)){
                            ?>
                            <option value ="<?php echo $row_hobi['id_hobi']?>">
                                <?php echo $row_hobi['nama_hobi']?>
                            </option>

                            <?php
                                }
                            ?>
                        </select>
                    </p>
                    <label for="">Cita-cita</label>
                    <p>
                        <select name="cita_cita">
                            <option selected disabled>Pilih CIta-cita</option>
                            <?php
                                $sql_citacita = mysqli_query($con, "SELECT * FROM `tb_citacita`");
                                $no=1;
                                while ($row_citacita = mysqli_fetch_assoc($sql_citacita)){
                            ?>
                            <option value ="<?php echo $row_citacita['id_citacita']?>">
                                <?php echo $row_citacita['nama_citacita']?>
                            </option>

                            <?php
                                }
                            ?>
                        </select>
                    </p>
                    <label for="">Jumlah Saudar</label>
                    <input type="text" class="form-control" name="jumlah_saudara" value="<?php echo $baris['jumlah_saudara'];?>">
                    <label for="">Tanggal Masuk</label>
                    <input type="date" class="form-control" name="tanggal_masuk" value="<?php echo $baris['tanggal_masuk'];?>" readonly>
                    <label for="">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah" value="<?php echo $baris['asal_sekolah'];?>">
                    <label for="">Tahun Ajaran</label>
                    <input type="text" class="form-control" name="tahun_ajaran" value="<?php echo $baris['tahun_ajaran'];?>">
                    <label for="">Tingkat Kelas</label>
                    <input type="text" class="form-control" name="tingkat" value="<?php echo $baris['tingkat_kelas'];?>">
                    <label for="">Alamat Sekolah Asal</label>
                    <p><input oninput="this.className = ''" name="kelas_paralel" value="1" style="background: #F1F1F1" readonly></p>
                    <label for="">Anak ke-</label>
                    <input type="text" class="form-control" name="anak_ke" value="<?php echo $baris['anak_ke'];?>">
                    <label for="">NPSN Sekolah Asal</label>
                    <input type="text" class="form-control" name="npsn_sekolah_asal" value="<?php echo $baris['npsn_sekolah_asal'];?>">
                    <label for="">Nama Sekolah Asal</label>
                    <input type="text" class="form-control" name="nama_sekolah_asal" value="<?php echo $baris['nama_sekolah_asal'];?>">
                    <label for="">Alamat Sekolah Asal</label>
                    <input type="text" class="form-control" name="alamat_sekolah_asal" value="<?php echo $baris['alamat_sekolah_asal'];?>">
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit_edit">Submit</button>
                </form>

                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
    </div>
</section>

<?php
include 'footer.php';
?>