<?php include('../template/header.php'); ?>

<?php include('./sidebar.php'); ?>

<?php include('./functions.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Modul Keuangan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-bar-chart"></i> Home</a></li>
            <li><a href="#">Keuangan</a></li>
            <li class="active">Daftar Blacklist</li>
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
                    <span>Berhasil menyimpan blacklist</span>
                </div>
        <?php
            }
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Blacklist</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No. Blacklist</th> 
                                <th>Tanggal Blacklist</th>                             
                                <th>Nama</th>
                                <th>No. Telp</th>
                                <th>Alamat</th>
                                <th>Piutang</th>
                                <th>Alasan</th>                                                                
                            </tr>
                            </thead>
							<?php							

							for ($i = 1; $i <= 100; $i++) {
								$date = getRandomDate();
								$blkId = "BL" . str_pad($i, 5, '0', STR_PAD_LEFT);
								?>
                                <tr>
                                    <td><?php echo $blkId; ?></td>
                                    <td><?php echo $date; ?></td>
                                    <td><?php echo getRandomCustomer() ?></td>
                                    <td><?php echo "0812" . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9); ?></td>
                                    <td><?php echo getRandomAddress() ?></td>  
                                    <td><?php echo "Rp. " . number_format(rand(10000000, 150000000), 2, ',', '.'); ?></td>
                                    <td><?php echo getRandomReason() ?></td>                                    
                                </tr>
								<?php

							}

							?>
                            <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal Blacklist</th>
                                <th>Pelanggan</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Alasan</th>
                                <th>Piutang</th>                                
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
