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
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addInformasi"><i class="align-middle me-2" data-feather="plus"></i>
							  Input Informasi
							</button> 
							</div>
						</div> 
						<table class="table" id="scheduleTable">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode</th>
									<th>Judul</th>
									<th>Tanggal</th>
									
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$i=1;
									$sql="select * from informasi_gizi";
									$r=mysqli_query($conn,$sql);
									while($rs=mysqli_fetch_array($r)){
										?>
										<tr>
											<td><?php echo $i?></td>
											<td><?php echo $rs['kode_informasi']?></td>
											<td><?php echo $rs['judul_informasi']?></td>
											<td><?php echo $rs['tanggal_informasi']?></td>
											
											<td class="text-center"> 
												<button class="btn btn-sm btn-primary"  onclick="detail_informasi(<?php echo $rs['rec_id']?>)"><i class="align-middle" data-feather="eye"></i></button>
												
												<!-- <a class="btn btn-sm btn-warning" title="Edit" href="#"><i class="align-middle" data-feather="edit"></i></a> -->
												<button class="btn btn-sm btn-warning"  onclick="edit_informasi(<?php echo $rs['rec_id']?>)"><i class="align-middle" data-feather="edit"></i></button>
												<button class="btn btn-sm btn-danger"  onclick="delete_informasi(<?php echo $rs['rec_id']?>)"><i class="align-middle" data-feather="trash-2"></i></button>
											</td>
										</tr>
										<?php
										$i++;
									}
								?>
								
								
							</tbody>
						</table>
					</div> 
				</div>
			</div> 
			<?php include('modal/detail_informasi.php'); ?>	
			<?php include('modal/add_informasi.php'); ?>	
			<?php include('modal/edit_informasi.php'); ?>	
			<?php include('include/footer.php'); ?>

		</div>
	</div>
	<!-- Source of javascript for this role -->
	<?php include('include/javascript.php'); ?>

</body>

</html>