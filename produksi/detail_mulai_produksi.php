<?php include('../template/header.php'); ?>

<?php include('./sidebar.php'); ?>

<?php include('./functions.php'); ?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Modul Production
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-bar-chart"></i> Home</a></li>
			<li><a href="#">Surat Perintah Produksi</a></li>
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
						<h3 class="box-title">Detail Surat Perintah Produksi</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-xs-12">
								<h4>
									SPP #<?php echo isset($_GET['poId']) ? $_GET['poId'] : '00001'; ?>
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
		                                <th>Nama Barang</th>
		                                <th>Jumlah</th>
		                                <th>Deskripsi</th>
		                                <th>Target</th>
		                                <th>Status</th>
									</tr>
									<tr>
										<td>Cat Lapisan Kapal</td>
										<td>1500</td>
										<td>Kualitas A</td>
										<td>8 Desember 2017</td>
										<td>Dipoduksi</td>
									</tr>
									</tbody>
								</table>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
						
						<!-- this row will not appear when printing -->
						
							<button type="button" id="mulaiProduksi" title="Mulai Produksi" class="btn btn-success pull-left" data-dismiss="modal">Mulai Produksi</button>
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
