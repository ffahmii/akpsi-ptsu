<?php

	if (isset($_POST['save_purchase_order']) && $_POST['save_purchase_order'] === 'submit') {
		header('Location: list.php?message=success');
	}

?>

<?php include('../template/header.php'); ?>

<?php include('./sidebar.php'); ?>

<?php include('./functions.php'); ?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Production Planning & Control
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-bar-chart"></i> Home</a></li>
			<li><a href="#">Surat Perintah Produksi</a></li>
			<li class="active">Tambah</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<form method="POST">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Tambah Surat Perintah Produksi</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Barang</label>
										<select class="form-control select2" style="width: 100%;">
											<?php
											for ($i = 0; $i < 4; $i++) {
												echo '<option>' . getNamaBarang($i) . '</option>';
											}
											?>
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Deskripsi</label>
											<select class="form-control select2" style="width: 100%;">
											<?php
											for ($i = 0; $i < 3; $i++) {
												echo '<option>' . getDeskripsi($i) . '</option>';
											}
											?>
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Jumlah</label>
										<input type="text" class="form-control">
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>

							<div class="row">
								<!-- Date -->
					            <div class="col-md-6">
					            	<label>Target</label>
						                <div class="input-group date">
						           		    <div class="input-group-addon">
					                    		<i class="fa fa-calendar"></i>
					                  		</div>
					                  	<input type="text" class="form-control pull-right" id="datepicker">
					                </div>
					                <!-- /.input group -->
					            </div>
					            <!-- /.form group -->
							</div>
							<!-- /.row -->

						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" name="save_purchase_order" value="submit" class="btn btn-primary">Simpan</button>
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

