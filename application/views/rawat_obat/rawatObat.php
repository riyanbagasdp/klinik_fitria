<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Star Admin2 </title>

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
	<title>Klinik Fitria</title>
</head>

<body>
	<div class="container-scroller">
		<!-- partial:../../partials/_navbar.html -->
		<?php $this->load->view('layout/navbar') ?>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:../../partials/_settings-panel.html -->
			<div class="theme-setting-wrapper">
				<div id="settings-trigger"><i class="ti-settings"></i></div>
				<div id="theme-settings" class="settings-panel">
					<i class="settings-close ti-close"></i>
					<p class="settings-heading">SIDEBAR SKINS</p>
					<div class="sidebar-bg-options selected" id="sidebar-light-theme">
						<div class="img-ss rounded-circle bg-light border me-3"></div>Light
					</div>
					<div class="sidebar-bg-options" id="sidebar-dark-theme">
						<div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
					</div>
					<p class="settings-heading mt-2">HEADER SKINS</p>
					<div class="color-tiles mx-0 px-4">
						<div class="tiles success"></div>
						<div class="tiles warning"></div>
						<div class="tiles danger"></div>
						<div class="tiles info"></div>
						<div class="tiles dark"></div>
						<div class="tiles default"></div>
					</div>
				</div>
			</div>
			<div id="right-sidebar" class="settings-panel">
				<i class="settings-close ti-close"></i>
				<ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab"
							aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
							aria-controls="chats-section">CHATS</a>
					</li>
				</ul>
				<div class="tab-content" id="setting-content">
					<div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
						aria-labelledby="todo-section">
						<div class="add-items d-flex px-3 mb-0">
							<form class="form w-100">
								<div class="form-group d-flex">
									<input type="text" class="form-control todo-list-input" placeholder="Add To-do">
									<button type="submit" class="add btn btn-primary todo-list-add-btn"
										id="add-task">Add</button>
								</div>
							</form>
						</div>
						<div class="list-wrapper px-3">
							<ul class="d-flex flex-column-reverse todo-list">
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Team review meeting at 3.00 PM
										</label>
									</div>
									<i class="remove ti-close"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Prepare for presentation
										</label>
									</div>
									<i class="remove ti-close"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Resolve all the low priority tickets due today
										</label>
									</div>
									<i class="remove ti-close"></i>
								</li>
								<li class="completed">
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox" checked>
											Schedule meeting for next week
										</label>
									</div>
									<i class="remove ti-close"></i>
								</li>
								<li class="completed">
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox" checked>
											Project review
										</label>
									</div>
									<i class="remove ti-close"></i>
								</li>
							</ul>
						</div>
						<h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
						<div class="events pt-4 px-3">
							<div class="wrapper d-flex mb-2">
								<i class="ti-control-record text-primary me-2"></i>
								<span>Feb 11 2018</span>
							</div>
							<p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
							<p class="text-gray mb-0">The total number of sessions</p>
						</div>
						<div class="events pt-4 px-3">
							<div class="wrapper d-flex mb-2">
								<i class="ti-control-record text-primary me-2"></i>
								<span>Feb 7 2018</span>
							</div>
							<p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
							<p class="text-gray mb-0 ">Call Sarah Graves</p>
						</div>
					</div>
					<!-- To do section tab ends -->
					<div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
						<div class="d-flex align-items-center justify-content-between border-bottom">
							<p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
							<small
								class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See
								All</small>
						</div>
						<ul class="chat-list">
							<li class="list active">
								<div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span
										class="online"></span></div>
								<div class="info">
									<p>Thomas Douglas</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">19 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span
										class="offline"></span></div>
								<div class="info">
									<div class="wrapper d-flex">
										<p>Catherine</p>
									</div>
									<p>Away</p>
								</div>
								<div class="badge badge-success badge-pill my-auto mx-2">4</div>
								<small class="text-muted my-auto">23 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span
										class="online"></span></div>
								<div class="info">
									<p>Daniel Russell</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">14 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span
										class="offline"></span></div>
								<div class="info">
									<p>James Richardson</p>
									<p>Away</p>
								</div>
								<small class="text-muted my-auto">2 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span
										class="online"></span></div>
								<div class="info">
									<p>Madeline Kennedy</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">5 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span
										class="online"></span></div>
								<div class="info">
									<p>Sarah Graves</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">47 min</small>
							</li>
						</ul>
					</div>
					<!-- chat tab ends -->
				</div>
			</div>
			<!-- partial -->
			<!-- partial:../../partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="beranda">
							<i class="mdi mdi-grid-large menu-icon"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item nav-category">UI Elements</li>
					<li class="nav-item">
						<a class="nav-link" href="pasien">
							<i class="mdi mdi-grid-large menu-icon"></i>
							<span class="menu-title">Pasien</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="dokter">
							<i class="mdi mdi-grid-large menu-icon"></i>
							<span class="menu-title">Dokter</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="obat">
							<i class="mdi mdi-grid-large menu-icon"></i>
							<span class="menu-title">Obat</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tindakan">
							<i class="mdi mdi-grid-large menu-icon"></i>
							<span class="menu-title">Tindakan</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
							aria-controls="ui-basic">
							<i class="menu-icon mdi mdi-floor-plan"></i>
							<span class="menu-title">Perawatan</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="ui-basic">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="rawat">Rawat</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="<?php echo base_url('RawatTindakan') ?>">Rawat Tindakan</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="<?php echo base_url('RawatObat') ?>">Rawat Obat</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item nav-category">Forms and Datas</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
							aria-controls="form-elements">
							<i class="menu-icon mdi mdi-card-text-outline"></i>
							<span class="menu-title">Form elements</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="form-elements">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic
										Elements</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
							aria-controls="charts">
							<i class="menu-icon mdi mdi-chart-line"></i>
							<span class="menu-title">Charts</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="charts">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false"
							aria-controls="tables">
							<i class="menu-icon mdi mdi-table"></i>
							<span class="menu-title">Tables</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="tables">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic
										table</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false"
							aria-controls="icons">
							<i class="menu-icon mdi mdi-layers-outline"></i>
							<span class="menu-title">Icons</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="icons">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item nav-category">pages</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
							aria-controls="auth">
							<i class="menu-icon mdi mdi-account-circle-outline"></i>
							<span class="menu-title">User Pages</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="auth">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="login/login.html"> Login </a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item nav-category">help</li>
					<li class="nav-item">
						<a class="nav-link"
							href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
							<i class="menu-icon mdi mdi-file-document"></i>
							<span class="menu-title">Documentation</span>
						</a>
					</li>
				</ul>
			</nav>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-lg-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Data Pasien</h4>
									<button class="btn btn-primary mb-3" data-bs-toggle="modal"
										data-bs-target="#add">Tambah</button>
									<div class="table-responsive">
										<table class="table table-hover" id="table">
											<thead class="table-info">
												<tr>
													<th>ID Rawat Obat</th>
													<th>ID Rawat</th>
													<th>ID Obat</th>
													<th>Jumlah</th>
													<th>Harga</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($data_rawat_obat as $row) { ?>
												<tr>
													<td> <?php echo $row['id_rawat_obat']; ?> </td>
													<td> <?php echo $row['id_rawat']; ?> </td>
													<td> <?php echo $row['id_obat']; ?> </td>
													<td> <?php echo $row['jumlah']; ?> </td>
													<td> <?php echo $row['harga']; ?> </td>
													<td>
														<a href="rawatobat/edit/<?php echo $row['id_rawat'];?>"
															class="btn btn-warning">Edit</a>
														<button class="btn btn-danger" data-bs-toggle="modal"
															data-bs-target="#delete">Hapus</button>
													</td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
										<!-- Modal -->
										<div class="modal fade" id="add" tabindex="-1"
											aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="row">
														<div class="col-12 grid-margin stretch-card">
															<div class="card">
																<div class="card-body">
																	<h4 class="card-title">Formulir Rawat Obat</h4>
																	<p class="card-description">
																		Lorem ipsum dolor sit, amet consectetur
																		adipisicing elit. Id, alias.
																	</p>
																	<form class="forms-sample"
																		action="<?php echo base_url('rawatobat/insert'); ?>"
																		method="POST">
																		<div class="form-group">
																			<label for="id_rawat">ID Rawat</label>
																			<select class="form-control"
																				name="id_rawat">
																				<?php foreach($data_rawat as $row) { 
								echo '<option value="'.$row['id_rawat'].'">'.$row['id_rawat'].'</option>';
							} ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<label for="id_obat">ID Obat</label>
																			<select class="form-control"
																				name="id_obat">
																				<?php foreach($data_obat as $row) { 
								echo '<option value="'.$row['id_obat'].'">'.$row['id_obat'].'</option>';
							}?>
																		<div class="form-group">
																			<label for="total_tindakan">Jumlah</label>
																			<input type="text" class="form-control"
																				name="total_tindakan" required
																				oninvalid="this.setCustomValidity('Nama harus di isi!')"
																				oninput="this.setCustomValidity('')">
																		</div>

																		<div class="form-group">
																			<label for="harga">Harga</label>
																			<select class="form-control"
																				name="harga">
																				<?php foreach($data_obat as $row) { 
								echo '<option value="'.$row['harga'].'">'.$row['harga'].'</option>';
							}?>
																		</div>
																		<button type="submit"
																			class="btn btn-primary me-2">Simpan</button>
																		<button type="reset"
																			class="btn btn-light">Reset</button>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="delete" tabindex="-1"
											aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Hapus Data Rawat Obat
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal"
															aria-label="Close"></button>
													</div>
													<div class="modal-body">
														Apakah anda yakin untuk menghapus data ini?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary"
															data-bs-dismiss="modal">Tidak</button>
														<a href="rawatObat/delete/<?php echo $row['id_rawat_obat'];?>"
															type="button" class="btn btn-primary">Ya</a>
													</div>
												</div>
											</div>
										</div>
										<!-- End of modal for delete -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:../../partials/_footer.html -->
				<footer class="footer">
					<div class="d-sm-flex justify-content-center justify-content-sm-between">
						<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a
								href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from
							BootstrapDash.</span>
						<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All
							rights reserved.</span>
					</div>
				</footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->

	<!-- plugins:js -->
	<script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="<?php echo base_url('assets/vendors/chart.js/Chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendors/progressbar.js/progressbar.min.js') ?>"></script>

	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo base_url('assets/js/off-canvas.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/hoverable-collapse.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/template.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/settings.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/todolist.js')?> "></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="<?php echo base_url('assets/js/jquery.cookie.js')?>"></script>
	<script src="<?php echo base_url('assets/js/dashboard.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/Chart.roundedBarCharts.js') ?>"></script>
	<!-- End custom js for this page-->
	<script src="<?php echo base_url('assets/Bootstrap/js/bootstrap.min.js') ?>"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			// 	$.ajax({
			// 		url: "https://rosihanari.net/api/api.php?get=dokter",
			// 		type: "GET",
			// 		dataType: "json",
			// 		success: function(result) {
			// 			result.forEach(element => {
			// 				const tr = document.createElement("tr");
			// 				const td = document.createElement("td");
			// 				td.innerHTML = element.iddokter;
			// 				tr.appendChild(td);
			// 				const td2 = document.createElement("td");
			// 				td2.innerHTML = element.namadokter;
			// 				tr.appendChild(td2);
			// 				document.getElementById("dokter").appendChild(tr);
			// 			});
			// 		}
			// 	})
			// });

			$('#table').DataTable({
				processing: true,
				ordering: false,
			});
		});

	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script cript src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
	<script src="<?php echo base_url('assets/Bootstrap/js/bootstrap.min.js') ?>"></script>
</body>

</html>
