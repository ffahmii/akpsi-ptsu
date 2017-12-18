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
            <li class="active">Daftar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
            if (isset($_GET['message']) && $_GET['message'] === 'success') {
        ?>
                <div class="callout callout-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>Success</h4>
                    <span>Berhasil menyimpan Purchase Order</span>
                </div>
        <?php
            }
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Pelanggan</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Nomor Pelanggan</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                            </tr>
                            </thead>
							<?php


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
								$date = getRandomDate();
								$cId = "C". str_pad($i, 5, '0', STR_PAD_LEFT);
								?>
                                <tr>
                                    <td>
                                        <a href="detail_pelanggan.php?cId=<?php echo $cId; ?>">
											<?php echo $cId; ?>
                                        </a>
                                    </td>
                                    <td><?php $cust = getRandomCustomer(); echo $cust; ?></td>
                                    <td><?php $pelanggan = explode(" ", $cust); echo strtolower($pelanggan[1]).".".$pelanggan[2]."@co.id" ?></td>
                                    <td><?php echo getRandomPhone(); ?></td>
                                    <td><?php echo getRandomAddress(); ?></td>
                                </tr>
								<?php

							}

							?>
                            <tfoot>
                            <tr>
                                <th>Nomor Pelanggan</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
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
