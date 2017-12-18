<?php include('../template/header.php'); ?>

<?php include('./sidebar.php'); ?>

<?php include('./functions.php'); ?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Modul Purchase Order
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-bar-chart"></i> Home</a></li>
			<li><a href="#">Purchase Order</a></li>
			<li><a href="#">Detail</a></li>
			<li class="active"><?php echo isset($_GET['poId']) ? $_GET['poId'] : '00001'; ?></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Detail Purchase Order</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-xs-12">
								<h4>
									Order #<?php echo isset($_GET['poId']) ? $_GET['poId'] : '00001'; ?>
								</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2">
								<label>Customer</label>
							</div>
							<div class="col-xs-4">
								PT. Kapal Laut Indonesia
							</div>
							<div class="col-xs-2">
								<label>Tanggal Dibuat</label>
							</div>
							<div class="col-xs-4">
								<?php echo getRandomDate(); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2">
								<label>Alamat Pengiriman</label>
							</div>
							<div class="col-xs-4">
								<address>
									PT. Kapal Laut Indonesia<br>
									Jalan Kemang Timur No.22, RT.14/RW.8,<br>
									Pasar Minggu, Kota Jakarta Selatan,<br>
									Daerah Khusus Ibukota Jakarta,<br>
									12510
								</address>
							</div>

							<div class="col-xs-2">
								<label>Alamat Invoice</label>
							</div>
							<div class="col-xs-4">
								<address>
									PT. Kapal Laut Indonesia<br>
									Jalan Kemang Timur No.22, RT.14/RW.8,<br>
									Pasar Minggu, Kota Jakarta Selatan,<br>
									Daerah Khusus Ibukota Jakarta,<br>
									12510
								</address>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2">
								<label>Metode Pengiriman</label>
							</div>
							<div class="col-xs-4">
								Normal
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2">
								<label>Cara Pembayaran</label>
							</div>
							<div class="col-xs-4">
								Tunai
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2">
								<label>Waktu Penyerahan</label>
							</div>
							<div class="col-xs-4">
								<?php echo getRandomDate(); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2">
								<label>Status</label>
							</div>
							<div class="col-xs-4">
								Diproduksi
							</div>
						</div>
						<!-- /.row -->

						<!-- Table row -->
						<div class="row">
							<div class="col-xs-12">
								<label>Order Item</label>
							</div>
							<div class="col-xs-12 table-responsive">
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
										<td>Cat Lapisan Kapal</td>
										<td>100</td>
										<td>Rp. 2.000.000,00</td>
										<td>5%</td>
										<td>2.5%</td>
										<td>Kualitas A</td>
									</tr>
									<tr>
										<td>Cat Dekoratif</td>
										<td>50</td>
										<td>Rp. 1.000.000,00</td>
										<td>0%</td>
										<td>2.5%</td>
										<td>Kualitas A</td>
									</tr>
									<tr>
										<td>Cat Lapisan Pelindung</td>
										<td>30</td>
										<td>Rp. 5.000.000,00</td>
										<td>0%</td>
										<td>2.5%</td>
										<td>Kualitas B</td>
									</tr>
									<tr>
										<td>Cat Industri</td>
										<td>60</td>
										<td>Rp. 2.000.000,00</td>
										<td>0%</td>
										<td>2.5%</td>
										<td>Kualitas B</td>
									</tr>
									</tbody>
								</table>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->

						<div class="row">
							<!-- accepted payments column -->
							<div class="col-xs-6">
							</div>
							<!-- /.col -->
							<div class="col-xs-6">
								<div class="table-responsive">
									<table class="table">
										<tr>
											<th style="width:50%">Subtotal:</th>
											<td>Rp. 520.000.000,00</td>
										</tr>
										<tr>
											<th>Biaya Pengiriman:</th>
											<td>Rp. 20.000.000,00</td>
										</tr>
										<tr>
											<th>Total:</th>
											<td>Rp. 540.000.000,00</td>
										</tr>
										<tr>
											<th>Harga Penawaran:</th>
											<td>Rp. 500.000.000,00</td>
										</tr>
									</table>
								</div>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->

						<!-- this row will not appear when printing -->
						<a href="list.php">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
						</a>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>

<?php include('../template/footer.php'); ?>
