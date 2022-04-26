<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/feather/feather.css">
    <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />

    <!-- plugins:css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendors/feather/feather.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendors/ti-icons/css/themify-icons.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendors/typicons/typicons.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendors/simple-line-icons/css/simple-line-icons.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css') ?>">

        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/js/select.dataTables.min.css') ?>">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/vertical-layout-light/style.css') ?>">
        <!-- endinject -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo/logo.jpg')?>" />
</head>
<body>
	<div class="container">
		<h3>Tambah Data User</h3>
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<form action="<?php echo base_url('login/insert') ?>" method="post" enctype="multipart/form-data">
						<div class="mb-3">
							<label for="nama" class="form-label">Nama</label>
							<input type="text" name="nama" class="form-control">
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" name="email" class="form-control">
						</div>
                        <div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" name="password" class="form-control">
						</div>
                        <div class="mb-3">
							<label for="alamat" class="form-label">Alamat</label>
							<input type="text" name="alamat" class="form-control">
						</div>
                        <div class="mb-3">
							<label for="telepon" class="form-label">Telepon</label>
							<input type="text" name="telepon" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- load bootstrap js file -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>