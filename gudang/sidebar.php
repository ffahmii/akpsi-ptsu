<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="https://placehold.it/160x160/00a65a/ffffff/&amp;text=JD" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>John Doe</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="active treeview">
				<a href="#">
					<i class="fa fa-bar-chart"></i> <span>Gudang</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				<ul class="treeview-menu">
                    <?php
                        $uri = explode('/', $_SERVER['REQUEST_URI']);
                        $currentFile = $uri[count($uri)-1];
                    ?>
					<li class="<?php echo $currentFile === 'status-produksi-list.php' ? 'active' : ''; ?>"><a href="status-produksi-list.php"><i class="fa fa-circle-o"></i> Lihat Status Produksi</a></li>
					<li class="<?php echo $currentFile === 'delivery-order-list.php' ? 'active' : ''; ?>"><a href="delivery-order-list.php"><i class="fa fa-circle-o"></i> Delivery Order</a></li>
                    <li class="<?php echo $currentFile === 'create_po_bahan_baku.php' ? 'active' : ''; ?>"><a href="create_po_bahan_baku.php"><i class="fa fa-circle-o"></i> Buat PO Bahan Baku</a></li>
					
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
