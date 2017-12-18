<?php include('../template/header.php'); ?>

<?php include('./sidebar.php'); ?>

<?php include('./functions.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Production Planning & Control
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-bar-chart"></i> Home</a></li>
            <li><a href="#">PPC</a></li>
            <li class="active">Daftar SPP</li>
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
                    <span>Berhasil menyimpan Surat Perintah Produksi</span>
                </div>
        <?php
            }
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Surat Perintah Produksi</h3>
                    </div>

                    <div class="box-header">
                    <a href="create_spp.php">
                        <button type="button" class="btn btn-primary">Buat Surat Perintah Produksi</button>
                    </a>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Nomor SPP</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Deskripsi</th>
                                <th>Target</th>
                                <th>Status</th>
                            </tr>
                            </thead>
							<?php

							$availableStatuses = [
                                'Direncanakan untuk Produksi',
                                'Mulai Produksi',
                                'Selesai Produksi',
                                'Terjadwal untuk pengiriman',
                                'Disetujui QC',
                                'Terkirim',
                                'Inovice terbit',
                                'Terbayar'
							];

							for ($i = 1; $i <= 100; $i++) {
								$date = getRandomDate();
								$poId = "SPP" . str_pad($i, 5, '0', STR_PAD_LEFT);
								?>
                                <tr>
                                    <td>
                                        <a href="detail.php?poId=<?php echo $poId; ?>">
											<?php echo $poId; ?>
                                        </a>
                                    </td>
                                    <td><?php echo getRandomNamaBarang() ?></td>
                                    <td><?php echo number_format(rand(1000, 10000), 0, ',', '.') . " liter" ; ?></td>
                                    <td><?php echo getRandomDeskripsi() ?></td>
                                    <td><?php echo $date; ?></td>
                                    <td><?php echo $availableStatuses[rand(0, 7)]; ?></td>
                                </tr>
								<?php

							}

							?>
                            <tfoot>
                            <tr>
                                <th>Nomor SPP</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Deskripsi</th>
                                <th>Target</th>
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
