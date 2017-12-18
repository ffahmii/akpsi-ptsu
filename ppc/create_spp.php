
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
			<li><a href="#">PPC</a></li>
			<li class="active">Tambah SPP</li>
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
										<label>Nomor PPDO</label>
										<select class="form-control select2" style="width: 100%;">
											<?php
											for ($i = 1; $i < 10; $i++) {
												$ppdoId = "PPDO" . str_pad($i, 5, '0', STR_PAD_LEFT);
												echo '<option>' . $ppdoId . '</option>';
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
								<div class="col-md-10">
									<div class="form-group">
										<label>Bahan Baku</label>
										<div class="box">
											<!-- /.box-header -->
											<div class="box-body no-padding">
												<table class="table table-striped" id="table_bahan">
													<tbody><tr>
														<th>Kode Bahan</th>
														<th>Nama Bahan</th>
														<th>Jumlah</th>
													</tr>
													<tr>
														<td>
															<a data-toggle="modal" data-target="#modal_add_bahan" style="cursor: pointer;">
																<i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Tambah Bahan Baku
															</a>
														</td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													</tbody>
												</table>
											</div>
											<!-- /.box-body -->
										</div>
									</div>
									<!-- /.form-group -->
								</div>

								<div class="modal fade" id="modal_add_bahan">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Tambah Bahan Baku</h4>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Kode Bahan</div>
															<div class="col-sm-8">
																<select class="form-control" name="kode_bahan" style="width: 100%;">
																	<?php
																	for ($i = 0; $i < 4; $i++) {
																		echo '<option>' . getKodeBahan($i) . '</option>';
																		}
																	?>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Nama Bahan</div>
															<div class="col-sm-8">
																<select class="form-control" name="nama_bahan" style="width: 100%;">
																	<?php
																	for ($i = 0; $i < 4; $i++) {
																		echo '<option>' . getNamaBahan($i) . '</option>';
																		}
																	?>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Jumlah</div>
															<div class="col-sm-8">
																<div class="input-group">
																	<input name="jumlah_bahan" type="number" class="form-control">
																	<span class="input-group-addon"> liter</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
												<button type="button" id="button_add_bahan" class="btn btn-primary">Save changes</button>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
								<!-- /.modal -->
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

