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
							<h2 class="box-title">Buat Delivery Order</h2>
						</div>
						<!-- /.box-header -->
						<?php for ($i = 1; $i <= 36; $i++) {
									$poId = str_pad($i, 7, '0', STR_PAD_LEFT);} ?>
						<div class="box-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>No: <?php echo $poId; ?></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Pelanggan</label>
										<p>PT. ABC (Joko Widodo)</p>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							
								<!-- /.col -->
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Tujuan</label>
                                        <textarea id="textarea_address"class="form-control pull-right" disabled>Jl. Djuanda No. 1, Jakarta Pusat</textarea>
									</div>
                                    <div style="margin-bottom: 10px;" id="div_change_address">
                                        <a href="#">Ubah</a>
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
														<th>Quantity</th>
														<!-- <th>Harga Per Unit</th> -->
														<!-- <th>Diskon</th>
														<th>Pajak</th> -->
														<th>Deskripsi</th>
													</tr>
													<tr>
														<td>Cat Kapal</td>
														<td>120</td>
														<!-- <td>Rp. 2.000.000,00</td> -->
														<!-- <td>5%</td>
														<td>2.5%</td> -->
														<td>Cat kapal kualitas A</td>
													</tr>
													<tr>
														
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
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Tanggal Pengiriman</label>
										    <div class="input-group date">
						           		    <div class="input-group-addon">
					                    		<i class="fa fa-calendar"></i>
					                  		</div>
					                  	<input type="text" class="form-control pull-right" id="datepicker">
					                </div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Dikirim dari</label>
										<select class="form-control select2" style="width: 100%;" name="order_item_product_supplier" type="text" form="modal_add_order_item">
																<?php
                                                                $gudangList = [
                                                                    'Gudang Jakarta',
																	'Gudang Surabaya',
																	'Gudang Semarang',
																	'Gudang Papua',
                                                                ];
																	for ($i = 0; $i < 30; $i++) {
																	echo '<option>' . $gudangList[$i%count($gudangList)] . '</option>';
																	}
																?>
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							
								<!-- /.col -->
							</div>
							<!-- /.row -->
							
							<!-- /.row -->
							
							<!-- /.row -->
							
							<!-- /.row -->
							
							<!-- /.row -->
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" name="save_purchase_order" value="submit" class="btn btn-primary">Buat</button>
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

