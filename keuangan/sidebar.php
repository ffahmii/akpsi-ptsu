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
					<i class="fa fa-bar-chart"></i> <span>Keuangan</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				<ul class="treeview-menu">
                    <?php
                        $uri = explode('/', $_SERVER['REQUEST_URI']);
                        $currentFile = $uri[count($uri)-1];
                    ?>					
					<li class="<?php echo $currentFile === 'list_purchase_order.php' ? 'active' : ''; ?>"><a href="list_purchase_order.php"><i class="fa fa-circle-o"></i> Lihat Purchase Order</a></li>
					<li class="<?php echo $currentFile === 'blacklist.php' ? 'active' : ''; ?>"><a href="blacklist.php"><i class="fa fa-circle-o"></i> Lihat Blacklist</a></li>					
					<li class="<?php echo $currentFile === 'create_invoice.php' ? 'active' : ''; ?>"><a href="create_invoice.php"><i class="fa fa-circle-o"></i> Buat Invoice</a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
