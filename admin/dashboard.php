<?php include('include/header.php'); ?>

<body>
	<div class="wrapper">
		<!-- Sidebar in posyandu/include -->
		<?php include('include/sidebar.php'); ?>

		<div class="main">
			<!-- Header top in posyandu/include -->
			<?php include('include/header_top.php'); ?>

			<?php if($_SESSION['user_group'] == 'Kader Posyandu'){ ?>
			<div class="row">
				<div class="col">
					<a href="ibu_hamil.php">
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
					</a>
				</div>	
				<div class="col">
					<a href="kader.php">
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
					</a>
				</div>	
			</div>
			
			<div class="row">
				<div class="col">
					<a href="bidan.php">
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
					</a>
				</div>	
				<div class="col">
					<a href="laporan.php">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Laporan</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="bookmark"></i>
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
					</a>
				</div>	
			</div> 
			<?php } ?>

			<?php if($_SESSION['user_group'] == 'Bidan Posyandu'){ ?>
			<div class="row">
				<div class="col">
					<a href="informasi.php">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Informasi Kehamilan</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="bookmark"></i>
									</div>
								</div>
							</div>
							<?php 
								$sql_informasi  = "SELECT COUNT(*) AS TOTAL_INFORMASI FROM informasi_gizi";
            					$r_informasi 	= mysqli_query($conn,$sql_informasi);
            					$rs_informasi 	= mysqli_fetch_array($r_informasi); 
							?>
							<h1 class="mt-1 mb-3 text-success"><?= $rs_informasi['TOTAL_INFORMASI']; ?></h1>
						</div>
					</div>
					</a>
				</div>	
				<div class="col">
					<a href="makanan.php">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Menu Makanan</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="bookmark"></i>
									</div>
								</div>
							</div>
							<?php 
								$sql_makanan  = "SELECT COUNT(*) AS TOTAL_MAKANAN FROM menu_makanan";
            					$r_makanan 	  = mysqli_query($conn,$sql_makanan);
            					$rs_makanan   = mysqli_fetch_array($r_makanan); 
							?>
							<h1 class="mt-1 mb-3 text-success"><?= $rs_makanan['TOTAL_MAKANAN']; ?></h1>
						</div>
					</div>
					</a>
				</div>	
			</div>
			<?php } ?>

			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<!-- Source of javascript for this role -->
	<?php include('include/javascript.php'); ?>

</body>

</html>