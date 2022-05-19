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
						<h2> <span class="badge bg-success mb-3">LAPORAN</span></h2>
						<div class="row">
							<div class="col- mb-3">
								<form action="laporan.php" method="POST">
									<input type="date" name="txt_start_date" class="form-control" placeholder="Date Start" style="margin-left:10px;width: 200px;float: left;">
									<input type="date" name="txt_end_date" class="form-control" placeholder="Date End" style="margin-left:10px;width: 200px;float: left;">
									<input type="submit" value="Cari" class="btn btn-primary" style="margin-left:10px;width: 100px;float: left;">
								</form>
								<a href="controller/master_p.php?role=EXPORT_EXCEL_LAPORAN&start_date=<?php echo $_POST['txt_start_date']?>&end_date=<?php echo $_POST['txt_end_date']?>" style="margin-left:10px;float: left;font-size: 24px;"><span class="iconify" data-icon="mdi:microsoft-excel"></span></a> 
								
							</div>
						</div> 
						<table class="table" id="scheduleTable">
							<thead>
								<tr>
									<th>No</th>
									<th>Id Ibu Hamil</th>
									<th>Nama</th>
									<th>BB</th> 
									<th>TB</th> 
									<th>USIA</th> 
									<th>BEE</th> 
									<th>TEE</th> 
									<th>Tanggal Laporan</th> 
									<th>Bidan</th> 
									<th>Catatan</th> 
									<th>Keluhan</th> 
									
								</tr>
							</thead>
							<tbody>
								<?php
									$i=1;
									$date=date('Y-m-d');
									if(empty($_POST['txt_start_date'])){
										$sql="SELECT * FROM v_laporan  ";
									}
									else{
										$sql="SELECT * FROM v_laporan  where tanggal_laporan>='".$_POST['txt_start_date']."' and tanggal_laporan<='".$_POST['txt_end_date']."'";
									}
									$r=mysqli_query($conn,$sql);
									while($rs=mysqli_fetch_array($r)){
										?>
										<tr>
											<td><?php echo $i;?></td>
												
											<td><?php echo $rs['id_ibu_hamil']?></td>
										
											<td><?php echo $rs['nama_ibu_hamil']?></td>
										
											<td><?php echo $rs['berat_badan']?></td>
										
											<td><?php echo $rs['tinggi_badan']?></td>
										
											<td><?php echo $rs['usia_ibu_hamil']?></td>
										
											<td><?php echo $rs['bee']?></td>
										
											<td><?php echo $rs['tee']?></td>
											<td><?php echo $rs['tanggal_laporan']?></td>
											<td><?php echo $rs['nama_bidan']?></td>	
											<td><?php echo $rs['catatan']?></td>	
											<td><?php echo $rs['keluhan']?></td>	
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
									
			<?php include('modal/add_keluhan.php'); ?>
			<?php include('modal/add_perhitungan.php'); ?>
			<?php include('modal/view_perhitungan.php'); ?>
			<?php include('include/footer.php'); ?>
		</div>

	</div>
	
	<!-- Source of javascript for this role -->
	<?php include('include/javascript.php'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#txt_tb").keyup(function(){
			  //alert('test tb');
			  var tb = $('#txt_tb').val();
			  var bb = $('#txt_bb').val();
			  var usia = $('#txt_usia').val();

			  var bmr=655+(9.6*bb)+(1.8*tb)-(4.7*usia);

			  //alert(bmr);
			  $('#txt_bmr').val(bmr);
			});
			$("#txt_bb").keyup(function(){
			  //alert('test tb');
			  var tb = $('#txt_tb').val();
			  var bb = $('#txt_bb').val();
			  var usia = $('#txt_usia').val();

			  var bmr=655+(9.6*bb)+(1.8*tb)-(4.7*usia);

			  //alert(bmr);
			  $('#txt_bmr').val(bmr);
			});
			$("#txt_usia").keyup(function(){
			  //alert('test tb');
			  var tb = $('#txt_tb').val();
			  var bb = $('#txt_bb').val();
			  var usia = $('#txt_usia').val();

			  var bmr=655+(9.6*bb)+(1.8*tb)-(4.7*usia);

			  //alert(bmr);
			  $('#txt_bmr').val(bmr);
			});
		});
	</script>

	<!-- Source of modal add kader -->
	<?php include('modal/add_kader.php'); ?>
</body>

</html>