<?php 
include 'admin_header.php';

if(isset($_POST['submit_edit'])){
    $id = $_POST['id_hobi'];
    $nama_hobi = $_POST['hobi'];
    $query_edit = "UPDATE `tb_hobi` SET `nama_hobi`='$nama_hobi' WHERE `id_hobi` = '$id'";
      $sql = mysqli_query($con, $query_edit);
      echo "<script>alert('data berhasil diubah'); window.location=('admin_page-hobi.php');</script>";
  }
?>

<section>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

              <h1 class="m-0 text-dark">Hobi</h1>
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
                <th scope="col">Hobi</th>
                <th scope="col" colspan="2" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            $no = 1;
            $query = "SELECT * FROM tb_hobi";
            $sql = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($sql)) {
            ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $no++;?></th>
                <td><?php echo $row['nama_hobi']; ?></td>
                <td style="text-align: center;"><a href="admin_edit-page-hobi.php?id=<?php echo $row['id_hobi'];?>" style="text-decoration: none; text-align: center">Edit</a>
                </td>
                <td style="text-align: center;">
                  <a href="admin_hapus-page-hobi.php?id=<?php echo $row['id_hobi'];?>" style="text-decoration: none; text-align: center">Hapus</a>
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

        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
                   <!--  MULAI MODAL EDIT -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Data Hobi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <?php
				$id = $_GET['id'];
				$data = mysqli_query($con,"SELECT * from tb_hobi where id_hobi='$id'");
				while($baris = mysqli_fetch_array($data)){
			?>
                <form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                  <div class="form-group">
                    <label >hobi</label>
                    <input type="hidden" class="form-control" name="id_hobi" value="<?php echo $baris['id_hobi'];?>">
                    <input type="text" class="form-control" name="hobi" value="<?php echo $baris['nama_hobi'];?>">
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

            <!--  MULAI MODAL TAMBAH -->
            <div class="modal fade" id="inputdata" tabindex="-1" role="dialog" aria-labelledby="inputdata" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data hobi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                  <div class="form-group">
                    <label >hobi</label>
                    <input type="text" class="form-control" name="hobi">
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