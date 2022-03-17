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
						<h2> <span class="badge bg-success mb-3">PASIEN POSYANDU</span></h2>
						<div class="row">
							<div class="col- mb-3">
								<a class="btn btn-primary" href="#" role="button">Tambah Data Ibu Hamil</a>
							</div>
						</div> 
						<table class="table" id="scheduleTable">
							<thead>
								<tr>
									<th>No</th>
									<th>Detail Pasien</th>
									<th>Data Lainnya</th> 
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>
										<strong class="strong">Nama :</strong> Nida Fitrillah <br>
										<strong>Tempat Lahir :</strong> Cirebon <br>
										<strong>Tanggal Lahir :</strong> 2022/01/01 <br>
										<strong>Alamat :</strong> Mulyasari, Kota Tangerang Selatan <br>
										<strong>No Telp :</strong> +62 8829336786
									</td>
									<td>
										<strong>Gol Darah :</strong> AB <br>
										<strong>Pekerjaan :</strong> Ibu Rumah Tangga <br>
										<strong>Kehamilan :</strong> Pertama <br>
										<strong>Suami :</strong> Andi Wardana 
									</td>
									<td>  
											<a class="btn btn-sm btn-warning" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
											<a class="btn btn-sm btn-danger"  title="Hapus" href="#"><i class="align-middle" data-feather="book"></i></a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>
										<strong>Nama :</strong> Nida Fitrillah <br>
										<strong>Tempat Lahir :</strong> Cirebon <br>
										<strong>Tanggal Lahir :</strong> 2022/01/01 <br>
										<strong>Alamat :</strong> Mulyasari, Kota Tangerang Selatan <br>
										<strong>No Telp :</strong> +62 8829336786
									</td>
									<td>
										<strong>Gol Darah :</strong> AB <br>
										<strong>Pekerjaan :</strong> Ibu Rumah Tangga <br>
										<strong>Kehamilan :</strong> Pertama <br>
										<strong>Suami :</strong> Andi Wardana 
									</td>
									<td>  
											<a class="btn btn-sm btn-warning" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
											<a class="btn btn-sm btn-danger"  title="Hapus" href="#"><i class="align-middle" data-feather="book"></i></a>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>
										<strong>Nama :</strong> Nida Fitrillah <br>
										<strong>Tempat Lahir :</strong> Cirebon <br>
										<strong>Tanggal Lahir :</strong> 2022/01/01 <br>
										<strong>Alamat :</strong> Mulyasari, Kota Tangerang Selatan <br>
										<strong>No Telp :</strong> +62 8829336786
									</td>
									<td>
										<strong>Gol Darah :</strong> AB <br>
										<strong>Pekerjaan :</strong> Ibu Rumah Tangga <br>
										<strong>Kehamilan :</strong> Pertama <br>
										<strong>Suami :</strong> Andi Wardana 
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