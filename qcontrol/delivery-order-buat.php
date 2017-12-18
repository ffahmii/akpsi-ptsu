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
			Gudang
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-bar-chart"></i> Home</a></li>
			<li><a href="#">Status Produksi</a></li>
			<li class="active">Delivery Order</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<form method="POST">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Buat Delivery Order</h3>
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

