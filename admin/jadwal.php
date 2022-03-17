<?php include('include/header.php'); ?>

<body>
	<div class="wrapper">
		<!-- Sidebar in posyandu/include -->
		<?php include('include/sidebar.php'); ?>

		<div class="main">
			<!-- Header top in posyandu/include -->
			<?php include('include/header_top.php'); ?>
			
			<div class="card">
				<div class="card-body">
					<div class="row">
						<h2> <span class="badge bg-success mb-3">JADWAL POSYANDU</span></h2>
						<div class="row">
							<div class="col- mb-3">
								<a class="btn btn-primary" href="#" role="button">Input Jadwal</a>
							</div>
						</div> 
						<table class="table" id="scheduleTable">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal</th>
									<th>Tempat</th>
									<th class="d-none d-xl-table-cell">Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>01/01/2021</td>
									<td>Puskesmas Pamulang</td>
									<td class="d-none d-xl-table-cell"><span class="badge bg-success">Akan Dilaksanakan</span></td>
									<td>  
											<a class="btn btn-sm btn-warning" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
											<a class="btn btn-sm btn-danger"  title="Hapus" href="#"><i class="align-middle" data-feather="book"></i></a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>01/01/2021</td>
									<td>Puskesmas Pamulang</td>
									<td class="d-none d-xl-table-cell"><span class="badge bg-success">Akan Dilaksanakan</span></td>
									<td>  
											<a class="btn btn-sm btn-warning" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
											<a class="btn btn-sm btn-danger"  title="Hapus" href="#"><i class="align-middle" data-feather="book"></i></a>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>01/01/2021</td>
									<td>Puskesmas Pamulang</td>
									<td class="d-none d-xl-table-cell"><span class="badge bg-success">Akan Dilaksanakan</span></td>
									<td>  
											<a class="btn btn-sm btn-warning" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
											<a class="btn btn-sm btn-danger"  title="Hapus" href="#"><i class="align-middle" data-feather="book"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div> 
				</div>
			</div> 
									
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<!-- Source of javascript for this role -->
	<?php include('include/javascript.php'); ?>

</body>

</html>