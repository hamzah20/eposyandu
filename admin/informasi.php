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
						<h2> <span class="badge bg-success mb-3">INFORMASI GIZI</span></h2>
						<div class="row">
							<div class="col- mb-3">
								<a class="btn btn-primary" href="#" role="button">Input Informasi</a>
							</div>
						</div> 
						<table class="table" id="scheduleTable">
							<thead>
								<tr>
									<th>No</th>
									<th>Judul</th>
									<th>Tanggal</th>
									<th class="d-none d-xl-table-cell">Deskripsi</th>
									<th class="d-none d-xl-table-cell">Gambar</th>  
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>13 Nutrisi yang Dibutuhkan Ibu Selama Kehamilan</td>
									<td>01/01/2021</td>
									<td class="d-none d-xl-table-cell">Asupan makanan yang memenuhi kebutuhan ...</td>
									<td class="d-none d-xl-table-cell">Gambar</td>
									<td> 
										<a class="btn btn-sm btn-primary" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
											<a class="btn btn-sm btn-warning" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
											<a class="btn btn-sm btn-danger"  title="Hapus" href="#"><i class="align-middle" data-feather="book"></i></a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>13 Nutrisi yang Dibutuhkan Ibu Selama Kehamilan</td>
									<td>01/01/2021</td>
									<td class="d-none d-xl-table-cell">Asupan makanan yang memenuhi kebutuhan ...</td>
									<td class="d-none d-xl-table-cell">Gambar</td>
									<td> 
										<a class="btn btn-sm btn-primary" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
											<a class="btn btn-sm btn-warning" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
											<a class="btn btn-sm btn-danger"  title="Hapus" href="#"><i class="align-middle" data-feather="book"></i></a>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>13 Nutrisi yang Dibutuhkan Ibu Selama Kehamilan</td>
									<td>01/01/2021</td>
									<td class="d-none d-xl-table-cell">Asupan makanan yang memenuhi kebutuhan ...</td>
									<td class="d-none d-xl-table-cell">Gambar</td>
									<td> 
										<a class="btn btn-sm btn-primary" title="Edit" href="#"><i class="align-middle" data-feather="book"></i></a>
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