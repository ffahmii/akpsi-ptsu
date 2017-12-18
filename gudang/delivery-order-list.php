<?php include('../template/header.php'); ?>

<?php include('./sidebar.php'); ?>

<?php include('./functions.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gudang
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-bar-chart"></i> Home</a></li>
            <li><a href="#">Gudang</a></li>
            <li class="active">Delivery Order</li>
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
                    <span>Berhasil menyimpan Delivery Order</span>
                </div>
        <?php
            }
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Delivery Order</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <a href="delivery-order-buat.php">
                            <button type="button" class="btn btn-primary">Buat Delivery Order</button>
                        </a>
                    </div>
                     <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Nomor DO</th>
                                <th>Tanggal Dibuat</th>
                                <th>Pelanggan</th>
                                <th>Total Biaya</th>
                                <th>Status</th>
                            </tr>
                            </thead>
							<?php


							$availableStatuses = [
                                'Terkirim',
                                'Inovice terbit',
                                'Terbayar'
							];

							for ($i = 1; $i <= 100; $i++) {
								$date = getRandomDate();
								$poId = str_pad($i, 5, '0', STR_PAD_LEFT);
								?>
                                <tr>
                                    <td>
                                        <a href="detail.php?poId=<?php echo $poId; ?>">
											<?php echo $poId; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $date; ?></td>
                                    <td><?php echo getRandomCustomer() ?></td>
                                    <td><?php echo "Rp. " . number_format(rand(10000000, 150000000), 2, ',', '.'); ?></td>
                                    <td><?php echo $availableStatuses[rand(0, 2)]; ?></td>
                                </tr>
								<?php

							}

							?>
                            <tfoot>
                            <tr>
                                <th>Nomor DO</th>
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
