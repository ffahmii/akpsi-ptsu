<?php include('../template/header.php'); ?>

<?php include('./sidebar.php'); ?>

<?php include('./functions.php'); ?>

<?php

	if (isset($_POST['save_blacklist']) && $_POST['save_blacklist'] === 'submit') {
		header('Location: list_purchase_order.php?message=success');
	}

?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Modul Keuangan
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-bar-chart"></i> Home</a></li>
			<li><a href="#">Keuangan</a></li>
			<li class="active">Tambah ke Blacklist</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<form method="POST">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Tambah ke Blacklist</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Pelanggan</label>
										<select class="form-control select2" style="width: 100%;">
											<?php
											for ($i = 0; $i < 30; $i++) {
												echo '<option>' . getRandomCustomer() . '</option>';
											}
											?>
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-2">
									<div class="form-group">
										<label>&nbsp;</label>
										<a href="../customer/create.php">
											<button type="button" class="btn btn-block btn-default">Tambah Pelanggan</button>
										</a>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Alamat</label>
										<input type="text" class="form-control">
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->							

							<!-- /.row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>No. Telepon</label>
										<input name='phoneNo' type="text" class="form-control">
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Piutang</label>
										<input type="text" class="form-control">
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->							
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Alasan</label>
										<input type="textarea" class="form-control">
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" name="save_blacklist" value="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>

<?php include('../template/footer.php'); ?>

