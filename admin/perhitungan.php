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
						<h2> <span class="badge bg-success mb-3">PERHITUNGAN GIZI</span></h2> 
						<table class="table" id="scheduleTable">
							<thead>
								<tr>
									<th>No</th>
									<th>ID Pasien</th>
									<th>Nama Pasien</th>
									<th>Kehamilan</th> 
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>P-22030001</td>
									<td>Aulia Astika</td>
									<td>Pertama</td>
									<td class="text-center">  
										<a class="btn btn-sm btn-success" title="Hitung" href="#">Hitung</a> 
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>P-22030002</td>
									<td>Aulia Astika</td>
									<td>Pertama</td>
									<td class="text-center">  
										<a class="btn btn-sm btn-success" title="Hitung" href="#">Hitung</a> 
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>P-22030003</td>
									<td>Aulia Astika</td>
									<td>Pertama</td>
									<td class="text-center">  
										<a class="btn btn-sm btn-success" title="Hitung" href="#">Hitung</a> 
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

	<!-- Source of modal add kader -->
	<?php include('modal/add_kader.php'); ?>
</body>

</html>