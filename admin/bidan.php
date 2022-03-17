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
						<h2> <span class="badge bg-success mb-3">BIDAN POSYANDU</span></h2>
						<div class="row">
							<div class="col- mb-3">
								<a class="btn btn-primary" href="#" role="button">Tambah Data Bidan</a>
							</div>
						</div> 
						<table class="table" id="scheduleTable">
							<thead>
								<tr>
									<th>No</th>
									<th>Data Bidan</th>
									<th>Tempat Tanggal Lahir</th> 
									<th>Pendidikan</th> 
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>
										<strong>Nama :</strong> Adelya Faramita <br>
										<strong>NIP :</strong> 9999999999 <br>
										<strong>Agama :</strong> Islam <br> 
										<strong>No Telp :</strong> +62 8829336786
									</td>
									<td>
										Bogor, 29 September 1997
									</td>
									<td>
										S1 Kedokteran
									</td>
									<td>  
											<a class="btn btn-sm btn-warning" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
											<a class="btn btn-sm btn-danger"  title="Hapus" href="#"><i class="align-middle" data-feather="book"></i></a>
									</td>
								</tr>
								<tr>
									<td>1</td>
									<td>
										<strong>Nama :</strong> Adelya Faramita <br>
										<strong>NIP :</strong> 9999999999 <br>
										<strong>Agama :</strong> Islam <br> 
										<strong>No Telp :</strong> +62 8829336786
									</td>
									<td>
										Bogor, 29 September 1997
									</td>
									<td>
										S1 Kedokteran
									</td>
									<td>  
											<a class="btn btn-sm btn-warning" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
											<a class="btn btn-sm btn-danger"  title="Hapus" href="#"><i class="align-middle" data-feather="book"></i></a>
									</td>
								</tr>
								<tr>
									<td>1</td>
									<td>
										<strong>Nama :</strong> Adelya Faramita <br>
										<strong>NIP :</strong> 9999999999 <br>
										<strong>Agama :</strong> Islam <br> 
										<strong>No Telp :</strong> +62 8829336786
									</td>
									<td>
										Bogor, 29 September 1997
									</td>
									<td>
										S1 Kedokteran
									</td>
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