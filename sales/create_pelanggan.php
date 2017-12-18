<?php

	if (isset($_POST['save_pelanggan']) && $_POST['save_pelanggan'] === 'submit') {
		header('Location: list_pelanggan.php?message=success');
	}

?>

<?php include('../template/header.php'); ?>

<?php include('./sidebar.php'); ?>

<?php include('./functions.php'); ?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Modul Sales
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-bar-chart"></i> Home</a></li>
			<li><a href="#">Pelanggan</a></li>
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
							<h3 class="box-title">Tambah Pelanggan</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<div class="radio">
											<div class="col-md-6">
												<label>
													<input type="radio" name="opsi">Individu
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<input type="radio" name="opsi">Perusahaan
												</label>
											</div>
										</div>
									</div>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nomor Telepon</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<!-- /.row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>


							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Alamat Pelanggan</label>
										<textarea name="alamat" class="form-control" rows="2" ></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Alamat Pengiriman</label>
										<textarea name="alamat" class="form-control" rows="2" ></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Alamat Invoice</label>
										<textarea name="alamat" class="form-control" rows="2" ></textarea>
									</div>
								</div>
							</div><br>

							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<label>Contact Person</label>
										<div class="box">
											<!-- /.box-header -->
											<div class="box-body no-padding">
												<table class="table table-striped" id="table_contact_person">
													<tbody><tr>
														<th>Nama</th>
														<th>Posisi Pekerjaan</th>
														<th>Email</th>
														<th>Nomor Telepon</th>
													</tr>
													<tr>
														<td>
															<a data-toggle="modal" data-target="#modal_add_order_item" style="cursor: pointer;">
																<i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Tambah Contact Person
															</a>
														</td>
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

								<div class="modal fade" id="modal_add_order_item">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Tambah Contact Person</h4>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Nama</div>
															<div class="col-sm-8">
																<input name="cp_nama" type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Posisi Pekerjaan</div>
															<div class="col-sm-8">
																<input name="cp_pekerjaan" type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Email</div>
															<div class="col-sm-8">
																<input name="cp_email" type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Nomor Telepon</div>
															<div class="col-sm-8">
																<input name="cp_phone" type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
												<button type="button" id="button_add_contact_person" class="btn btn-primary">Save changes</button>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
								<!-- /.modal -->
							</div><br>
							<!-- /.row -->

							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<label>Informasi Rekening</label>
										<div class="box">
											<!-- /.box-header -->
											<div class="box-body no-padding">
												<table class="table table-striped" id="table_contact_person">
													<tbody><tr>
														<th>Nama Rekening</th>
														<th>Nomor Rekening</th>
														<th>Nama Bank</th>
														<th>Cabang Bank</th>
													</tr>
													<tr>
														<td>
															<input name="nama_rekening" type="text" class="form-control">
														</td>
														<td>
															<input name="nomor_rekening" type="text" class="form-control">
														</td>
														<td>
															<input name="nama_bank" type="text" class="form-control">
														</td>
														<td>
															<input name="cabang_bank" type="text" class="form-control">
														</td>
													</tr>
													</tbody>
												</table>
											</div>
											<!-- /.box-body -->
										</div>
									</div>
									<!-- /.form-group -->
								</div>

								
							</div>
							<!-- /.row -->
							
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" name="save_pelanggan" value="submit" class="btn btn-primary">Simpan</button>
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

