<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Tambah Obat</title>
</head>

<body>
	<?php
    $this->load->view('layout/navbar');
  ?>
	<div class="container">
		<h3>Tambah Obat</h3>
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<form action="<?php echo base_url('obat/insert') ?>" method="post" enctype="multipart/form-data">
						<div class="mb-3">
							<label for="nama_obat" class="form-label">Nama Obat</label>
							<input type="text" name="nama_obat" class="form-control">
						</div>
						<div class="mb-3">
							<label for="harga" class="form-label">Harga</label>
							<input type="text" name="harga" class="form-control">
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
