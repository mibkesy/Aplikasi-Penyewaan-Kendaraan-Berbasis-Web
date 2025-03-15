<?php
include("koneksi.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Change Payment Type Data</title>
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
    <!--CSS Bootstrap-->
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
    <div class="container">
        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-19">
                        <div class="clearfix">
                            <div class="float-left">
                                <div class="col card-header text-left">
                                    <h1 class="h1 mb-5 font-weight-bold text-gray-900">Data Jenis Pembayaran</h1>
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
                                    <h1 class="h1 mb-5 font-weight-bold text-primary">Ubah Data Jenis Pembayaran</h1>
                                </div>
                                <div class="card-body">
                                    <form action="prosesubahjenispembayaran.php" method="post" encytype="multipart/form-data">
                                    <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="number" name="harga" class="form-control" value="<?php echo $row['harga']; ?>" <?php echo number_format($row['harga'],0,',','.'); ?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="transaksi_kendaraan">Transaksi Kendaraan</label>
                                            <input type="number" name="transaksi_pembayaran" class="form-control" value="<?php echo $row['transaksi_pembayaran']; ?>" <?php echo number_format($row->harga,0,',','.'); ?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_pinjam">Tanggal Peminjaman</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_kembali">Tanggal Kembali</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_bayar">Jenis Transaksi Pembayaran</label>
                                            <select name="pilih" class="btn-block">Pilih
                                                <option>Silahkan Pilih</option> 
                                                <option>Periksa (Checking)</option>        
                                                <option>Giro</option>
                                                <option>Nota Debit</option>
                                                <option>Kredit</option>
                                                <option>Kartu Kredit</option> 
                                                <option>Kartu Debit</option> 
                                                <option>E-Money</option>
                                                <option>E-Wallet</option>
                                                <option>QRIS</option>
                                                <option>Mobile Banking</option>  
                                            </select>       
                                        </div>
                                        <div class="form-group">
                                            <label for="denda">Denda</label>
                                            <input type="number" name="denda" class="form-control" value="<?php echo $row['denda']; ?>" <?php echo number_format($row['denda'],0,',','.'); ?>>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block" onClick="return confirm('This data have been already change!')"><i class="fa fa-edit"></i>&nbsp;Change</button>
                                        <button type="reset" class="btn btn-danger btn-block" onClick="return confirm('This data have been already canceled!')"><i class="fa fa-times"></i>&nbsp;Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
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