<?php 
include 'action_config.php';

// Action Tambah Data
if(isset($_POST['submit'])){
  $nama_kegiatan = $_POST['kegiatan'];
  $query_tambah = "INSERT INTO tb_kegiatan (nama_kegiatan) VALUES ('$nama_kegiatan')";
    $sql = mysqli_query($con, $query_tambah);
    echo "<script>alert(''); window.location=('admin_page-kegiatan.php');</script>";
}

include 'admin_header.php';
?>

<section>
    <div class="content-wrapper" style="margin-top: 25px;">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

              <h1 class="m-0 text-dark">Kegiatan</h1>
              
            </div>
          </div>
          <hr>
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
                <th scope="col">kegiatan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Teks</th>
                <th scope="col">Foto</th>
                <th scope="col" colspan="2" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            $no = 1;
            $query = "SELECT * FROM tb_kegiatan";
            $sql = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($sql)) {
            ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $no++;?></th>
                <td><?php echo $row['nama_kegiatan']; ?></td>
                <td><?php echo $row['tanggal_kegiatan']; ?></td>
                <td><?php echo $row['deskripsi_kegiatan']; ?></td>
                <td><?php echo $row['foto_kegiatan']; ?></td>
                <td style="text-align: center;"><a href="admin_edit-page-kegiatan.php?id=<?php echo $row['id_kegiatan'];?>" style="text-decoration: none; text-align: center">Edit</a>
                </td>
                <td style="text-align: center;">
                  <a href="admin_hapus-page-kegiatan.php?id=<?php echo $row['id_kegiatan'];?>" style="text-decoration: none; text-align: center">Hapus</a>
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
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                  <div class="form-group">
                    <label >kegiatan</label>
                    <input type="text" class="form-control" name="kegiatan">
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