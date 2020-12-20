<?php
include 'admin_header.php';

if (isset($_POST['submit_edit'])) {
    $id = $_POST['id_user'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    $query_edit = "UPDATE `tb_user` SET `nama`='$nama',`username`='$username',`email`='$email',`password`='$password',`level`='$level' WHERE id_user='$id'";
    $sql = mysqli_query($con, $query_edit);
    echo "<script>alert('data berhasil diubah'); window.location=('admin_page-add-admin.php');</script>";
}
?>

<section>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

              <h1 class="m-0 text-dark">User</h1>
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
                <th scope="col">Username</th>
                <th scope="col">E-mail</th>
                <th scope="col">Password</th>
                <th scope="col">Level</th>
                <th scope="col" colspan="2" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            $no = 1;
            $query = 'SELECT * FROM tb_user ORDER BY level ASC ';
            $sql = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($sql)) {
                ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['level']; ?></td>
                <td style="text-align: center;"><a href="admin_edit-page-user.php?id=<?php echo $row['id_user']; ?>" style="text-decoration: none; text-align: center">Edit</a>
                </td>
                <td style="text-align: center;">
                  <a href="admin_hapus-page-user.php?id=<?php echo $row['id_user']; ?>" style="text-decoration: none; text-align: center">Hapus</a>
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

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Data tingkat_kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <?php
                $id = $_GET['id'];
                $data = mysqli_query($con, "SELECT * from tb_user where id_user='$id'");
                while ($baris = mysqli_fetch_array($data)) {
                    ?>
                <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $baris['nama']; ?>">
                    <label >Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $baris['username']; ?>">
                    <label >Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $baris['email']; ?>">
                    <label >Password</label>
                    <input type="text" class="form-control" name="password" value="<?php echo $baris['password']; ?>">
                    <label for="">Level</label>
                    <br>
                    <select name="level" id="">
                      <option selected disabled>Pilih Level</option>
                        <option value="admin">admin</option>
                        <option value="pendaftar">Pendaftar</option>
                    </select>              
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
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data Agama</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control" name="nama">
                    <label >Username</label>
                    <input type="text" class="form-control" name="username">
                    <label >Email</label>
                    <input type="text" class="form-control" name="email">
                    <label >Password</label>
                    <input type="text" class="form-control" name="password">
                    <label for="">Level</label>
                    <br>
                    <select name="level" id="">
                      <option selected disabled>Pilih Level</option>
                        <option value="admin">admin</option>
                        <option value="pendaftar">Pendaftar</option>
                    </select>              
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