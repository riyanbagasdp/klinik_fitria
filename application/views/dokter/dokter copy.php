<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Klinik Fitria</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/Bootstrap/css/bootstrap.min.css') ?>">
</head>

<body>
	<?php $this->load->view("layout/navbar") ?>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header">
				<h1>DATA DOKTER DARI API</h1>
			</div>
			<div class="card-body">
				<table class="table display" id="example">
					<thead>
						<tr>
							<th>ID Dokter</th>
							<th>Nama</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>

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
			
			$('#example').DataTable({
				serverSide: true,
				processing: true,
				ordering: false,
				searching: false,
				paging: false,
				info: false,
				ajax:{
					url: 'https://rosihanari.net/api/api.php?get=dokter',
					dataSrc: ''
				},
				'columns' : [
					{data: 'iddokter'},
					{data: 'namadokter'},
				],
				scrollY: 200,
				scroller: {
				},
			});
		});

	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script cript src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
	<script src="<?php echo base_url('assets/Bootstrap/js/bootstrap.min.js') ?>"></script>

	<!-- <script>
		$(document).ready(function() {
    		$('#table').DataTable();
		} );
	</script> -->
</body>

</html>
