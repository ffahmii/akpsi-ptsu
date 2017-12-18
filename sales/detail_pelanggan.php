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
			<li><a href="#">Detail</a></li>
			<li class="active"><?php echo isset($_GET['cId']) ? $_GET['cId'] : '00001'; ?></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Detail Pelanggan</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-xs-12">
								<h4>
									Pelanggan #<?php echo isset($_GET['cId']) ? $_GET['cId'] : '00001'; ?>
								</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2">
								<label>Nama</label>
							</div>
							<div class="col-xs-4">
								PT. Kapal Laut Indonesia
							</div>
							<div class="col-xs-2">
								<label>Tipe</label>
							</div>
							<div class="col-xs-4">
								Perusahaan
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2">
								<label>Alamat Pelanggan</label>
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

						</div>
						<div class="row">

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
								<label>Nomor Telepon</label>
							</div>
							<div class="col-xs-4">
								0873289478
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2">
								<label>email</label>
							</div>
							<div class="col-xs-4">
								kapal.laut@gmail.com
							</div>
						</div><br>
						<!-- /.row -->

						<!-- Table row -->
						<div class="row">
							<div class="col-xs-12">
								<label>Contact Person</label>
							</div>
							<div class="col-xs-12 table-responsive">
								<table class="table table-striped" id="table_order_item">
									<tbody><tr>
										<th>Nama</th>
										<th>Posisi Pekerjaan</th>
										<th>Email</th>
										<th>Nomor Telepon</th>
									</tr>
									<tr>
										<td>Fransisco</td>
										<td>Sales</td>
										<td>fransisco@gmail.com</td>
										<td>08583247823</td>
									</tr>
									<tr>
										<td>Iman</td>
										<td>Sales</td>
										<td>iman@gmail.com</td>
										<td>08563287282</td>
									</tr>
									</tbody>
								</table>
							</div>
							<!-- /.col -->
						</div><br>


						<div class="row">
							<div class="col-xs-12">
								<label>Informasi Rekening</label>
							</div>
							<div class="col-xs-12 table-responsive">
								<table class="table table-striped" id="table_order_item">
									<tbody><tr>
										<th>Nama Rekening</th>
										<th>Nomor Rekening</th>
										<th>Nama Bank</th>
										<th>Cabang Bank</th>
									</tr>
									<tr>
										<td>PT. Kapal Laut Indonesia</td>
										<td>324798328492</td>
										<td>Bank BCA</td>
										<td>KCP Plaza Central</td>
									</tr>
									</tbody>
								</table>
							</div>
							<!-- /.col -->
						</div><br>
						<!-- /.row -->

						<!-- this row will not appear when printing -->
						<a href="list_pelanggan.php">
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
