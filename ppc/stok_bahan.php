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
            <li class="active">Daftar Bahan</li>
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
                        <h3 class="box-title">Stok Bahan Baku</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Kode Bahan</th>
                                <th>Nama Bahan</th>
                                <th>Jumlah</th>
                                <th>Masa Berlaku</th>
                            </tr>
                            </thead>
							<?php

							for ($i = 1; $i <= 100; $i++) {
								$date = getRandomDate();
								$poId = "BB" . str_pad($i, 5, '0', STR_PAD_LEFT);
								?>
                                <tr>
                                    <td><?php echo $poId; ?></td>
                                    <td><?php echo getRandomNamaBahan() ?></td>
                                    <td><?php echo number_format(rand(1000, 10000), 0, ',', '.') . " liter" ; ?></td>
                                    <td><?php echo $date; ?></td>
                                </tr>
								<?php

							}

							?>
                            <tfoot>
                            <tr>
                                <th>Kode Bahan</th>
                                <th>Nama Bahan</th>
                                <th>Jumlah</th>
                                <th>Masa Berlaku</th>
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
