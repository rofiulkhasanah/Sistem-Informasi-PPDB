<?php
include 'action_config.php';

// Action Tambah Data
if (isset($_POST['submit'])) {
    $nama_daftarsekolah = $_POST['nama_daftarsekolah'];
    $npsn_daftarsekolah = $_POST['npsn_daftarsekolah'];
    $nsm_daftarsekolah = $_POST['nsm_daftarsekolah'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $query_tambah = "INSERT INTO `tb_daftarsekolah`(`nama_daftarsekolah`, `npsn_daftarsekolah`, `nsm_daftarsekolah`, `deskripsi`, `tanggal_masuk`) VALUES ('$nama_daftarsekolah','$npsn_daftarsekolah','$nsm_daftarsekolah','$deskripsi','$tanggal_masuk')";
    $sql = mysqli_query($con, $query_tambah);
    echo "<script>alert('data berhasil ditambahkan'); window.location=('admin_page-daftar-sekolah.php');</script>";
}

include 'admin_header.php';
?>

<section>
    <div class="content-wrapper" style="margin-top: 22px;">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

              <h1 class="m-0 text-dark">Daftar Sekolah</h1>
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
                <th scope="col">Nama Sekolah</th>
                <th scope="col">NPSN Sekolah</th>
                <th scope="col">NSM Sekolah</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col" colspan="2" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            $no = 1;
            $query = 'SELECT * FROM tb_daftarsekolah ORDER BY deskripsi ASC';
            $sql = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($sql)) {
                ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $row['nama_daftarsekolah']; ?></td>
                <td><?php echo $row['npsn_daftarsekolah']; ?></td>
                <td><?php echo $row['nsm_daftarsekolah']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['tanggal_masuk']; ?></td>
                <td style="text-align: center;"><a href="admin_edit-page-daftar-sekolah.php?id=<?php echo $row['id_daftarsekolah']; ?>" style="text-decoration: none; text-align: center">Edit</a>
                </td>
                <td style="text-align: center;">
                  <a href="admin_hapus-page-daftar-sekolah.php?id=<?php echo $row['id_daftarsekolah']; ?>" style="text-decoration: none; text-align: center">Hapus</a>
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
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data Asal Sekolah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                  <div class="form-group">
                    <label >Nama Sekolah</label>
                    <input type="text" class="form-control" name="nama_daftarsekolah">
                    <br>
                    <label >NPSN Sekolah</label>
                    <input type="text" class="form-control" name="npsn_daftarsekolah">
                    <br>
                    <label >NSM Sekolah</label>
                    <input type="text" class="form-control" name="nsm_daftarsekolah">
                    <br>
                    <label >Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi">
                    <br>
                    <label >Tanggal Masuk</label>
                    <input type="date" class="form-control" name="tanggal_masuk">
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