<?php
include("koneksi.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Paket Kendaraan</title>
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
        <div id="content-wrapper" class="d-flex-column">
            <?php include("topbar.php"); ?>
            <div id="content">
                <div clas="container-fluid">
                    <div class="row">
                        <div class="col-sm-19">
                            <di class="clearfix">
                                <div class="float-left">
                                    <h1 class="h1 mb-5 font-weight-bold text-gray-900">&nbsp;Data Paket</h1>
                                </div>
                                <div class="col card-header text-right">
                                    <a href="index.php" class="btn btn-secondary" onClick="return confirm('Are you sure want to back!')"><i class="fa fa-reply"></i>&nbsp;Back</a>
                                </div>
                            </div>
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
                                    <h1 class="h1 mb-5 font-weight-bold text-primary">Add Data</h1>
                                </div>
                                <div class="card-body">
                                    <form action="prosestambahpaket.php" method="post" encytype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="number" name="harga" class="form-control" value="" placeholder="Enter Price">
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea name="keterangan" id="alamat" cols="30" rows="9" class="form-control"></textarea>
                                        </div>
                                            <button type="submit" name="Save" class="btn btn-success btn-block" class="form-control" onClick="return confirm('This data have been added!')"><i class="fa fa-plus"></i>&nbsp;Add</button>
                                            <button type="reset" name="cancel" class="btn btn-danger btn-block" class="form-control" onClick="return confirm('Are you sure want to reset this data!')"><i class="fa fa-times"></i>&nbsp;Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-19">
                                <div class="card-shadow">
                                    <div class="card-header">
                                        <h1 class="h1 mb-5 font-weight-bold text-gray-900">Data Paket</h1>
                                        <div class="card-body">
                                            <table class="table table-bordered" id="dataTable" width="" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Harga</th>
                                                        <th>Keterangan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Harga</th>
                                                        <th>Keterangan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php include("koneksi.php");
                                                    $sql="SELECT * FROM tblpaket";
                                                    $no=1;
                                                    $tblpaketrental = mysqli_query($koneksi,"SELECT * FROM tblpaketrental");
                                                    while ($data = mysqli_fetch_array($tblpaketrental)) :
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $data['harga']; ?></td>
                                                            <td><?= $data['keterangan']; ?></td>
                                                            <td>
                                                                <a href="ubahpaket.php?id=<?= $data['id_paket']; ?>" class="btn btn-primary" name="change">&nbsp;Change</a>
                                                                <a href="hapuspaket.php?id=<?= $data['id_paket']; ?>" class="btn btn-danger" name="delete" onClick="return confirm('Are you sure want to delete this data!')">&nbsp;Delete</a>
                                                            </td>
                                                        </tr>
                                                    <?php endwhile; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("footer.php"); ?>
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