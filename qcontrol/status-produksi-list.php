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
            <li><a href="#">Quality Control</a></li>
            <li class="active">Approval</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="callout callout-info" style="display: none">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Success</h4>
            <span>Berhasil menyimpan Delivery Order</span>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Status Produksi</h3>
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
                                <th>Aksi</th>
                            </tr>
                            </thead>
							<?php


							$availableStatuses = [
								
                                'Selesai Produksi',
                                'Direncanakan untuk diproduksi',
                                'Disetujui Keuangan',
                                'Diajukan',
								'Ditolak'
								
								
								
								// 'Terjadwal untuk pengiriman',
								
								// 'Terkirim',
								// 'Inovice terbit',
								// 'Terbayar'
							];
                            
                            

							for ($i = 1; $i <= 36; $i++) {
								$date = getRandomDate();
								$poId = str_pad($i, 7, '0', STR_PAD_LEFT);
                                $aksi = $availableStatuses[(($i-1)/(36/5))]
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
                                    <td><?php echo 'Selesai Produksi' ?></td>
                                    
                                    <?php
                                    if ($aksi === 'Selesai Produksi') {
                                        echo  '<td><button type="button" class="btn btn-primary btn-sm button_set_setujui" data-dismiss="modal"><i class="fa fa-paper-plane"></i> Set Setujui</button></td>';
                                    } 

                                    else {
                                        echo

                                    "<td>Tidak ada aksi</td>";
                                } ?>
                                    

                                    


                            
                                        
                                        
                                    
                                    
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
                                <th>Aksi</th>
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
