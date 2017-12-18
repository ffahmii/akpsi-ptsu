<?php include('../template/header.php'); ?>

<?php include('./sidebar.php'); ?>

<?php include('./functions.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Modul Marketing
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-line-chart"></i> Home</a></li>
            <li><a href="#">Marketing</a></li>
            <li class="active">Tambah</li>
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
                    <span>Berhasil menyimpan Permintaan Produksi Delivery Order (PPDO)</span>
                </div>
        <?php
            }
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Permintaan Produksi Delivery Order (PPDO)</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Nomor PPDO</th>
                                <th>Nomor PO</th>
                                <th>Tanggal Dibuat</th>
                                <th>Pelanggan</th>
                                <th>Total Biaya</th>
                                <th>Status</th>
                            </tr>
                            </thead>
							<?php


							$availableStatuses = [
                                'Persiapan Produksi',
                                'Direncanakan untuk Produksi',
                                'Mulai Produksi',
                                'Selesai Produksi',
                                'Terjadwal untuk pengiriman',
                                'Disetujui QC',
                                'Terkirim',
                                'Inovice terbit',
                                'Terbayar'      
							];

							for ($i = 1; $i <= 10; $i++) {
								$date = getRandomDate();
								$ppdoId = str_pad($i, 5, '0', STR_PAD_LEFT);
								$poId = str_pad($i + rand($i, 100), 5, '0', STR_PAD_LEFT);
								?>
                                <tr>
                                    <td>
                                        <a href="detail.php?<?php echo 'ppdoId=' . 'PPDO' . $ppdoId . '&status=' . $availableStatuses[$i-1]; ?>">
											<?php echo 'PPDO' . $ppdoId; ?>
                                        </a>
                                    </td>
                                    <td><?php echo 'PO' . $poId; ?></td>
                                    <td><?php echo $date; ?></td>
                                    <td><?php echo getRandomCustomer() ?></td>
                                    <td><?php echo "Rp. " . number_format(rand(10000000, 150000000), 2, ',', '.'); ?></td>
                                    <td><?php echo $availableStatuses[rand($i, 100) % count($availableStatuses)]; ?></td>
                                </tr>
								<?php
							}

							for ($i = 11; $i <= 100; $i++) {
								$date = getRandomDate();
								$ppdoId = str_pad($i, 5, '0', STR_PAD_LEFT);
								$poId = str_pad($i + rand($i, 100), 5, '0', STR_PAD_LEFT);
								?>
                                <tr>
                                    <td>
                                        <a href="detail.php?ppdoId=<?php echo $ppdoId; ?>">
											<?php echo 'PPDO' . $ppdoId; ?>
                                        </a>
                                    </td>
                                    <td><?php echo 'PO' . $poId; ?></td>
                                    <td><?php echo $date; ?></td>
                                    <td><?php echo getRandomCustomer() ?></td>
                                    <td><?php echo "Rp. " . number_format(rand(10000000, 150000000), 2, ',', '.'); ?></td>
                                    <td><?php echo $availableStatuses[rand($i, 100) % count($availableStatuses)]; ?></td>
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
