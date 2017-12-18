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
					<i class="fa fa-bar-chart"></i> <span>Menu</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				<ul class="treeview-menu">
                    <?php
                        $uri = explode('/', $_SERVER['REQUEST_URI']);
                        $currentFile = $uri[count($uri)-1];
                    ?>
					<li class="<?php echo $currentFile === './sales/index.php' ? 'active' : ''; ?>"><a href="./sales/index.php"><i class="fa fa-circle-o"></i> SALES</a></li>
					<li class="<?php echo $currentFile === './keuangan/index.php' ? 'active' : ''; ?>"><a href="./keuangan/index.php"><i class="fa fa-circle-o"></i> KEUANGAN</a></li>
                    <li class="<?php echo $currentFile === './marketing/index.php' ? 'active' : ''; ?>"><a href="./marketing/index.php"><i class="fa fa-circle-o"></i> MARKETING</a></li>
					<li class="<?php echo $currentFile === './ppc/index.php' ? 'active' : ''; ?>"><a href="./ppc/index.php"><i class="fa fa-circle-o"></i> PPC</a></li>
					<li class="<?php echo $currentFile === './produksi/index.php' ? 'active' : ''; ?>"><a href="./produksi/index.php"><i class="fa fa-circle-o"></i> PRODUCTION</a></li>
                    <li class="<?php echo $currentFile === './qcontrol/index.php' ? 'active' : ''; ?>"><a href="./qcontrol/index.php"><i class="fa fa-circle-o"></i> QC</a></li>
                    <li class="<?php echo $currentFile === './gudang2/index.php' ? 'active' : ''; ?>"><a href="./gudang2/index.php"><i class="fa fa-circle-o"></i> GUDANG</a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
