		<nav id="sidebar" class="sidebar js-sidebar ">
			<div class="sidebar-content js-simplebar bg-info">
				<a class="sidebar-brand  py-1" href="index.html">
          			<!-- <span class="align-middle">Eposyandu</span> -->
          			<img src="../boostrap/img/images/dashboard-kemenkes.png" alt="Charles Hall" class="img-fluidr" width="130" />
        		</a>

				<ul class="sidebar-nav bg-info">
					<li class="sidebar-header  bg-info">Pages</li>
					<li class="sidebar-item active  bg-info">
						<a class="sidebar-link bg-info" href="index.html">
             				<i class="align-middle" data-feather="sliders"></i> 
             			 	<span class="align-middle">Dashboard</span>
            			</a>
					</li> 
					<?php if($_SESSION['user_group'] == 'Kader Posyandu' OR $_SESSION['user_group'] == 'Bidan Posyandu'){ ?>
						<li class="sidebar-item bg-info">
							<a class="sidebar-link bg-info" href="perhitungan.php">
	              				<i class="align-middle" data-feather="book"></i> <span class="align-middle">Master Perhitungan</span>
	            			</a>
						</li> 
					<?php } ?>

					<?php if($_SESSION['user_group'] == 'Kader Posyandu'){ ?>
						<li class="sidebar-item  bg-info">
							<a class="sidebar-link  bg-info" href="jadwal.php">
	              				<i class="align-middle" data-feather="book"></i> <span class="align-middle">Master Jadwal</span>
	            			</a>
						</li>
					<?php } ?>

					<?php if($_SESSION['user_group'] == 'Bidan Posyandu'){ ?>
						<li class="sidebar-item  bg-info">
							<a class="sidebar-link  bg-info" href="informasi.php">
	              				<i class="align-middle" data-feather="book"></i> <span class="align-middle">Master Informasi Gizi</span>
	            			</a>
						</li>
						<li class="sidebar-item  bg-info">
							<a class="sidebar-link  bg-info" href="makanan.php">
	              				<i class="align-middle" data-feather="book"></i> <span class="align-middle">Master Menu Makanan</span>
	            			</a>
						</li>
					<?php } ?>

					<?php if($_SESSION['user_group'] == 'Kader Posyandu'){ ?>
						<li class="sidebar-item bg-info">
							<a class="sidebar-link  bg-info" href="ibu_hamil.php">
	             				<i class="align-middle" data-feather="user"></i> <span class="align-middle">Ibu Hamil</span>
	            			</a>
						</li> 
						<li class="sidebar-item  bg-info">
							<a class="sidebar-link bg-info" href="bidan.php">
	             				<i class="align-middle" data-feather="user"></i> <span class="align-middle">Bidan</span>
	            			</a>
						</li> 
						<li class="sidebar-item  bg-info">
							<a class="sidebar-link bg-info" href="kader.php">
	             				<i class="align-middle" data-feather="user"></i> <span class="align-middle">Kader Posyandu</span>
	            			</a>
						</li>  
					<?php } ?>
						<li class="sidebar-item bg-info">
							<a class="sidebar-link bg-info" href="pages-sign-in.html">
	              				<i class="align-middle" data-feather="log-out"></i> 
	              				<span class="align-middle">Sign Out</span>
	            			</a>
						</li>  
			</div>
		</nav>