<?php include('../template/header.php'); ?>

<?php include('./sidebar.php'); ?>

<?php include('./functions.php'); ?>

<?php

	if (isset($_POST['save_purchase_order']) && $_POST['save_purchase_order'] === 'submit') {
		header('Location: list.php?message=success');
	}

?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Modul Purchase Order
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-bar-chart"></i> Home</a></li>
			<li><a href="#">Purchase Order</a></li>
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
							<h3 class="box-title">Tambah Purchase Order</h3>
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
										<label>Metode Pengiriman</label>
										<input type="text" class="form-control">
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<label>Order Item</label>
										<div class="box">
											<!-- /.box-header -->
											<div class="box-body no-padding">
												<table class="table table-striped" id="table_order_item">
													<tbody><tr>
														<th>Nama Produk</th>
														<th>Jumlah Order</th>
														<th>Harga Per Unit</th>
														<th>Diskon</th>
														<th>Pajak</th>
														<th>Deskripsi</th>
													</tr>
													<tr>
														<td>Cat Kapal</td>
														<td>120</td>
														<td>Rp. 2.000.000,00</td>
														<td>5%</td>
														<td>2.5%</td>
														<td>Cat kapal kualitas A</td>
													</tr>
													<tr>
														<td>
															<a data-toggle="modal" data-target="#modal_add_order_item" style="cursor: pointer;">
																<i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Tambah Order Item
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

								<div class="modal fade" id="modal_add_order_item">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Tambah Order Item</h4>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Nama Produk</div>
															<div class="col-sm-8">
																<input name="order_item_product_name" type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Jumlah Order</div>
															<div class="col-sm-8">
																<input name="order_item_total_order" type="number" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Harga Per Unit</div>
															<div class="col-sm-8">
																<div class="input-group">
																	<span class="input-group-addon">Rp.</span>
																	<input name="order_item_price_per_unit" type="number" class="form-control">
																	<span class="input-group-addon">,00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Diskon</div>
															<div class="col-sm-8">
																<div class="input-group">
																	<input name="order_item_discount" type="number" class="form-control">
																	<span class="input-group-addon">%</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Pajak</div>
															<div class="col-sm-8">
																<div class="input-group">
																	<input name="order_item_tax" type="number" class="form-control">
																	<span class="input-group-addon">%</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="form-group">
															<div class="col-sm-4 control-label">Deskripsi</div>
															<div class="col-sm-8">
																<textarea name="order_item_description" class="form-control" rows="3" ></textarea>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
												<button type="button" id="button_add_order_item" class="btn btn-primary">Save changes</button>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
								<!-- /.modal -->
							</div>
							<!-- /.row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Biaya Pengiriman</label>
										<div class="input-group">
											<span class="input-group-addon">Rp.</span>
											<input name="purchase_order_shipping_costs" type="number" class="form-control">
											<span class="input-group-addon">,00</span>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Total Harga</label>
										<input name='purchase_order_total_costs' type="text" class="form-control">
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-2">
									<div class="form-group">
										<label>&nbsp;</label>
										<button type="button" id="button_calculate_total_costs" class="btn btn-block btn-default">Hitung Total Harga</button>
									</div>
									<!-- /.form-group -->
								</div>
							</div>
							<!-- /.row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Harga Penawaran</label>
										<div class="input-group">
											<span class="input-group-addon">Rp.</span>
											<input type="number" class="form-control">
											<span class="input-group-addon">,00</span>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Metode Pembayaran</label>
										<input type="text" class="form-control">
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
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

