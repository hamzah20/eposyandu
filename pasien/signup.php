<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../boostrap/img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Sign Up | EPosyandu</title>

	<link href="../boostrap/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle"> 
						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="../boostrap/img/images/logo-kemenkes.png" alt="Charles Hall" class="img-fluid" width="200" height="200" />
									</div>
									<form action="controller/signup_p.php?role=TAMBAH_PASIEN" method="POST">
										<div class="mb-3">
											<label class="form-label">Nama Lengkap</label>
											<input class="form-control form-control-lg" type="text" name="txt_nama"/>
										</div>
										<div class="mb-2">
											<label class="form-label">Tanggal Lahir</label>
											<input class="form-control form-control-lg" type="date" name="txt_tanggal"/> 
										</div>
										<div class="mb-2">
											<label class="form-label">No Telp</label>
											<input class="form-control form-control-lg" type="text" name="txt_telp"/> 
										</div>
										<div class="mb-2">
											<label class="form-label">Alamat</label>
											<input class="form-control form-control-lg" type="text" name="txt_alamat"/> 
										</div>
										<hr>
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="txt_username" />
										</div>
										<div class="mb-2">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="txt_password" /> 
										</div>
										<p>Do you have account? <a href="login.php">Sign In</a></p>  
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign Up</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="../boostrap/js/app.js"></script>

</body>

</html>