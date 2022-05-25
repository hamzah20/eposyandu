<?php include('include/header.php'); ?>

<body>
	<div class="wrapper">
		<!-- Sidebar in posyandu/include -->
		<?php include('include/sidebar.php'); ?>

		<div class="main">
			<!-- Header top in posyandu/include -->
			<?php include('include/header_top.php'); ?>

			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Ibu Hamil</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="user"></i>
									</div>
								</div>
							</div>
							<?php 
								$sql_pasien = "SELECT COUNT(*) AS TOTAL_PASIEN FROM ibu_hamil";
            					$r_pasien 	= mysqli_query($conn,$sql_pasien);
            					$rs_pasien 	= mysqli_fetch_array($r_pasien); 
							?>
							<h1 class="mt-1 mb-3 text-success"><?= $rs_pasien['TOTAL_PASIEN']; ?></h1>
						</div>
					</div>
				</div>	
				<div class="col">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Kader Posyandu</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="user"></i>
									</div>
								</div>
							</div>
							<?php 
								$sql_kader  = "SELECT COUNT(*) AS TOTAL_KADER FROM kader_posyandu";
            					$r_kader 	= mysqli_query($conn,$sql_kader);
            					$rs_kader 	= mysqli_fetch_array($r_kader); 
							?>
							<h1 class="mt-1 mb-3 text-success"><?= $rs_kader['TOTAL_KADER']; ?></h1>
						</div>
					</div>
				</div>	
			</div>
			
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Bidan Posyandu</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="user"></i>
									</div>
								</div>
							</div>
							<?php 
								$sql_bidan  = "SELECT COUNT(*) AS TOTAL_BIDAN FROM bidan";
            					$r_bidan 	= mysqli_query($conn,$sql_bidan);
            					$rs_bidan 	= mysqli_fetch_array($r_bidan); 
							?>
							<h1 class="mt-1 mb-3 text-success"><?= $rs_bidan['TOTAL_BIDAN']; ?></h1>
						</div>
					</div>
				</div>	
				<div class="col">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Laporan</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="flag"></i>
									</div>
								</div>
							</div>
							<?php 
								$sql_laporan = "SELECT COUNT(*) AS TOTAL_LAPORAN FROM laporan";
            					$r_laporan   = mysqli_query($conn,$sql_laporan);
            					$rs_laporan  = mysqli_fetch_array($r_laporan); 
							?>
							<h1 class="mt-1 mb-3 text-success"><?= $rs_laporan['TOTAL_LAPORAN']; ?></h1>
						</div>
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