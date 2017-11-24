<?php include('../template/header.php'); ?>

<?php include('./sidebar.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Modul Purchase Order
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-bar-chart"></i> Home</a></li>
            <li><a href="#">Purchase Order</a></li>
            <li class="active">Daftar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Purchase Order</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Nomor PO</th>
                                <th>Tanggal Dibuat</th>
                                <th>Pelanggan</th>
                                <th>Total Biaya</th>
                                <th>Status</th>
                            </tr>
                            </thead>
							<?php

							$customerFirstNames = [
								'Vanita',
								'Nicolasa',
								'Illa',
								'Nereida',
								'Donnette',
								'Melita',
								'Signe',
								'Claretta',
								'Jennell',
								'Robert'
							];
							$customerLastNames = [
								'Jessenia',
								'Luciana',
								'Elinore',
								'Elizabet',
								'Carmelo',
								'Kiyoko',
								'Leticia',
								'Wyatt',
								'Imelda',
								'Rupert'
							];
							$availableStatuses = [
								'Diajukan',
								'Ditolak',
								'Disetujui Keuangan',
								'Direncanakan untuk diproduksi',
								'Diproduksi',
								'Terjadwal untuk pengiriman',
								'Disetujui QC',
								'Terkirim',
								'Inovice terbit',
								'Terbayar'
							];

							for ($i = 1; $i <= 100; $i++) {
								$date = date("d F Y H:i:s", mt_rand(1511457239, 1514049238));
								?>
                                <tr>
                                    <td><?php echo str_pad($i, 5, '0', STR_PAD_LEFT); ?></td>
                                    <td><?php echo $date; ?></td>
                                    <td><?php echo $customerFirstNames[rand($i, 100) % count($customerFirstNames)] . ' ' . $customerLastNames[rand($i, 100) % count($customerLastNames)]; ?></td>
                                    <td><?php echo "Rp. " . number_format(rand(10000000, 150000000), 2, ',', '.'); ?></td>
                                    <td><?php echo $availableStatuses[rand(0, 9)]; ?></td>
                                </tr>
								<?php

							}

							?>
                            <tfoot>
                            <tr>
                                <th>Nomor PO</th>
                                <th>Tanggal Dibuat</th>
                                <th>Pelanggan</th>
                                <th>Total Biaya</th>
                                <th>Status</th>
                            </tr>
                            </tfoot>
                        </table>
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
