<?php
include("koneksi.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data Pemesan Kendaraan</title>
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/brands.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/regular.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/solid.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/solid.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/svg-with-js.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/svg-with-js.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/v4-shims.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/v4-shims.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Numito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <!--CSS Admins-->
    <link rel="stylesheet" type="text/css" href="css/sb-admin-2.css">
    <link rel="stylesheet" type="text/css" href="css/sb-admin-2.min.css">
    <!--CSS Bootstrap and Signin as well as also Style-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--Custom Style Bootstrap-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css.map">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-reboot.min.css.map">
    <!-- Custom Style DataTables-->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/dataTables.bootstrap4.css">
</head>
<body id="page-top">
    <div id="wrapper">
        <?php include("navbar.php"); ?>
        <div id="content-wrapper" class="d-fex-column">
            <div id="content">
                <?php include("topbar.php"); ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-19">
                            <div class="clearfix">
                                <div class="float-left">
                                    <h1 class="h1 mb-5 text-gray-900">Data Pemesan Kendaraan</h1>
                                </div>
                                <br>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-19">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-19">
                            <div class="card-shadow">
                                <div class="card-header">
                                    <h1 class="m-0 font-weight-bold text-primary">Tambah Data</h1>
                                </div>
                                <div class="card-body">
                                    <form action="prosestambahpemesan.php" method="post" encytype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="nama">Nama Pemesan</label>
                                            <input type="text" name="nama" require="required" placeholder="Enter Order Name" class="form-control">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <input type="radio" name="jenis_kelamin" value="male">&nbsp;Laki-laki
                                            <input type="radio" name="jenis_kelamin" value="female">&nbsp;Perempuan
                                            <button type="submit" class="btn btn-success" name="save"><i class="fa fa-save"></i>&nbsp;Save</button>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" id="alamat" cols="30" rows="9" class="form-control" placeholder="Enter Address"></textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="foto">Foto Pemesan</label>
                                            <input type="file" name="foto" require="required" placeholder="Enter Order Photos" class="form-control">
                                            <small><b>Maaf, ukuran foto wajib harus 300pxX300px</b></small>
                                        </div>
                                            <button type="submit" class="btn btn-success btn-block" name="add"><i class="fa fa-plus"></i>&nbsp;Add</button>
                                            <button type="reset" class="btn btn-danger btn-block" name="cancel"><i class="fa fa-times"></i>&nbsp;Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-19">
                            <div class="card-shadow">
                                <div class="card-header">
                                    <h1 class="m-0 font-weight-bold text-gray-900">Daftar Pemesanan</h1>
                                </div>
							        <div class="card-body">
                                        <table class="table table-bordered" id="dataTable" width="" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Alamat</th>
                                                    <th>Foto</th>
                                                    <th>AKSI</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Alamat</th>
                                                    <th>Foto</th>
                                                    <th>AKSI</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                include("koneksi.php");
                                                $sql="INSERT INTO `tblpemesan`(`id_pemesan`, `nama`, `alamat`, `jenis_kelamin`, `foto`) VALUES ('?','?','?','?','?')";
                                                $no=1;
                                                $tblpemesan = mysqli_query($koneksi,"SELECT * FROM tblpemesan");
                                                while ($data = mysqli_fetch_array($tblpemesan)) : 
                                                ?>
                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td><?= $data['nama']; ?></td>
                                                        <td><?= $data['jenis_kelamin']; ?></td>
                                                        <td><?= $data['alamat']; ?></td>
                                                        <td><?= $data['foto']; ?></td>
                                                        <td>
                                                            <a href="ubahdatapemesan.php?id=<?= $data['id_pemesan']; ?>" class="btn btn-info"><i class="fa fa-edit"></i>&nbsp;Ubah</a>
                                                            <a href="hapuspemesan.php?id=<?= $data['id_pemesan']; ?>" class="btn btn-danger" onClick="return confirm('Are you sure want to delete this data!')"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php endwhile; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php include("footer.php") ?>
<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery/jquery.min.map"></script>
<script src="vendor/jquery/jquery.slim.js"></script>
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/jquery/jquery.slim.min.map"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.compatibility.js"></script>
<script src="vendor/js/bootstrap.js"></script>
<script src="vendor/js/bootstrap.min.js"></script>
<script src="vendor/js/bootstrap.min.js.map"></script>
<script src="vendor/js/bootstrap.bundle.min.js.map"></script>
<script src="vendor/js/bootstrap.bundle.min.js"></script>
<script src="vendor/js/bootstrap.bundle.js.map"></script>
<script src="js/sb-admin-2.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/js/bootstrap.bundle.js"></script>
<script src="vendor/js/bootstrap.bundle.js.map"></script>
<script src="vendor/js/bootstrap.bundle.min.js"></script>
<script src="vendor/js/bootstrap.bundle.min.js.map"></script>
<script src="vendor/js/bootstrap.js"></script>
<script src="vendor/js/bootstrap.js.map"></script>
<script src="vendor/js/bootstrap.min.js"></script>
<script src="vendor/js/bootstrap.min.js.map"></script>
<script src="vendor/fontawesome-free/js/all.js"></script>
<script src="vendor/fontawesome-free/js/all.min.js"></script>
<script src="vendor/fontawesome-free/js/brands.js"></script>
<script src="vendor/fontawesome-free/js/brands.min.js"></script>
<script src="vendor/fontawesome-free/js/conflict-detection.js"></script>
<script src="vendor/fontawesome-free/js/conflict-detection.min.js"></script>
<script src="vendor/fontawesome-free/js/fontawesome.js"></script>
<script src="vendor/fontawesome-free/js/fontawesome.min.js"></script>
<script src="vendor/fontawesome-free/js/regular.js"></script>
<script src="vendor/fontawesome-free/js/regular.min.js"></script>
<script src="vendor/fontawesome-free/js/solid.js"></script>
<script src="vendor/fontawesome-free/js/solid.min.js"></script>
<script src="vendor/fontawesome-free/js/v4-shims.js"></script>
<script src="vendor/fontawesome-free/js/v4-shims.min.js"></script>
</body>
</html>