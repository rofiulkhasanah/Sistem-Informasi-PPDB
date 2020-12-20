<?php 
include 'action_config.php';

// Action Tambah Data
if(isset($_POST['submit'])){
  $nama_tingkat_kelas = $_POST['tingkat_kelas'];
  $query_tambah = "INSERT INTO tb_tingkat_kelas (nama_tingkat_kelas) VALUES ('$nama_tingkat_kelas')";
    $sql = mysqli_query($con, $query_tambah);
    echo "<script>alert('data berhasil ditambahkan'); window.location=('admin_page-TIngkatKelas.php');</script>";
}


include 'admin_header.php';
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
                <th scope="col">Tingkat Kelas</th>
                <th scope="col" colspan="2" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            $no = 1;
            $query = "SELECT * FROM tb_tingkat_kelas";
            $sql = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($sql)) {
            ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $no++;?></th>
                <td><?php echo $row['nama_tingkat_kelas']; ?></td>
                <td style="text-align: center;"><a href="admin_edit-page-TingkatKelas.php?id=<?php echo $row['id_tingkat_kelas'];?>" style="text-decoration: none; text-align: center">Edit</a>
                </td>
                <td style="text-align: center;">
                  <a href="admin_hapus-page-TingkatKelas.php?id=<?php echo $row['id_tingkat_kelas'];?>" style="text-decoration: none; text-align: center">Hapus</a>
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

        <!--  MULAI MODAL TAMBAH -->
        <div class="modal fade" id="inputdata" tabindex="-1" role="dialog" aria-labelledby="inputdata" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data Agama</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                  <div class="form-group">
                    <label >Tingkat Kelas</label>
                    <input type="text" class="form-control" name="tingkat_kelas">
                  </div>
                  <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- AKHIR MODAL TAMBAH  -->

      </section>
    </div>
</section>

<?php
include 'footer.php';
?>