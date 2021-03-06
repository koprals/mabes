<script type="text/javascript" src="<?php echo $this->webroot; ?>js/demo_dashboard.js"></script>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Beranda</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

		<!-- START WIDGETS -->
		<div class="row">
				<div class="col-md-3">

						<!-- START WIDGET SLIDER -->
						<div class="widget widget-default widget-carousel">
								<div class="owl-carousel" id="owl-example">
										<div>
												<div class="widget-title">Total Personel</div>
												<div class="widget-title">Studi</div>
												<div class="widget-int"><?php echo $totalStudiAja['0']['0']['total_studi']; ?></div>
										</div>
										<!--
										<div>
												<div class="widget-title">Total Personel</div>
												<div class="widget-title">Studi</div>
												<div class="widget-int">6</div>
										</div>
										<div>
												<div class="widget-title">Total Personel</div>
												<div class="widget-title">Studi</div>
												<div class="widget-int">6</div>
										</div>
									-->
								</div>
								<div class="widget-controls">
										<a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
								</div>
						</div>
						<!-- END WIDGET SLIDER -->

				</div>
				<div class="col-md-3">

						<!-- START WIDGET MESSAGES -->
						<div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
								<div class="widget-item-left">
										<span class="fa fa-envelope"></span>
								</div>
								<div class="widget-data">
										<div class="widget-int num-count">2</div>
										<div class="widget-title">Pesan Baru</div>
										<div class="widget-subtitle">Di dalam inbox</div>
								</div>
								<div class="widget-controls">
										<a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
								</div>
						</div>
						<!-- END WIDGET MESSAGES -->

				</div>
				<div class="col-md-3">

						<!-- START WIDGET REGISTRED -->
						<div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
								<div class="widget-item-left">
										<span class="fa fa-user"></span>
								</div>
								<div class="widget-data">
										<div class="widget-int num-count"><?php echo $totalPersonnelStudi['0']['0']['total_personnel']; ?></div>
										<div class="widget-title">Personel Terdaftar</div>
								</div>
								<div class="widget-controls">
										<a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
								</div>
						</div>
						<!-- END WIDGET REGISTRED -->

				</div>
				<div class="col-md-3">

						<!-- START WIDGET CLOCK -->
						<div class="widget widget-danger widget-padding-sm">
							<br>
								<div class="widget-big-int plugin-clock">00:00</div>
								<div class="widget-subtitle plugin-date">Loading...</div>
							</br>
						</div>
						<!-- END WIDGET CLOCK -->

				</div>
		</div>
		<!-- END WIDGETS -->

		<div class="row">
				<div class="col-md-8">

						<!-- START SALES BLOCK -->
						<div class="panel panel-default">
								<div class="panel-heading">
										<div class="panel-title-box">
												<h3>Laporan Pelaksanaan Pendidikan</h3>
												<span>Aktivitas Personel Selama Melakukan Studi</span>
										</div>
										<ul class="panel-controls panel-controls-title">
												<li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
												<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
														<ul class="dropdown-menu">
																<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
																<li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
														</ul>
												</li>
										</ul>

								</div>
								<div class="panel-body">
										<div class="row stacked">
												<div class="col-md-4">
														<div class="progress-list">
															<div class="pull-left"><strong>Total Laporan Bulan Ini</strong></div>
															<div class="pull-right" id="process-summary-1"></div>
															<div class="progress progress-small progress-striped active">
																<div id="process-summary-1-bar" class="progress-bar progress-bar-primary" style="width: 0%;"></div>
															</div>
														</div>
														<div class="progress-list">
															<div class="pull-left"><strong>Sudah Melapor</strong></div>
															<div class="pull-right" id="process-summary-2"></div>
															<div class="progress progress-small progress-striped active">
																<div id="process-summary-2-bar" class="progress-bar progress-bar-primary" style="width: 0%;"></div>
															</div>
														</div>
														<div class="progress-list">
															<div class="pull-left"><strong class="text-danger">Belum Melapor</strong></div>
															<div class="pull-right" id="process-summary-3"></div>
															<div class="progress progress-small progress-striped active">
																<div id="process-summary-3-bar" class="progress-bar progress-bar-danger" style="width: 0%;"></div>
															</div>
														</div>
														<p style="text-align:justify"><span class="fa fa-warning"></span> Data akan di perbarui setiap jam. Anda dapat melihat update laporan dengan menekan tombol refresh di sisi kanan atas kolom ini.</p>
												</div>
												<div class="col-md-8">
														<div id="dashboard-map-seles" style="width: 100%; height: 200px"></div>
												</div>
										</div>
								</div>
						</div>
						<!-- END SALES BLOCK -->

				</div>
				<div class="col-md-4">

						<!-- START PROJECTS BLOCK -->
						<div class="panel panel-default">
								<div class="panel-heading">
										<div class="panel-title-box">
												<h3>Status Personel</h3>
												<span>Aktivitas Personel Studi</span>
										</div>
										<ul class="panel-controls" style="margin-top: 2px;">
												<li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
										</ul>
								</div>
								<div class="panel-body panel-body-table">

										<div class="table-responsive">
												<table class="table table-condensed table-bordered table-striped">
														<thead>
																<tr>
																		<th width="50%">Nama</th>
																		<th width="20%">Status</th>
																</tr>
														</thead>
														<tbody>
															<?php foreach($lastPersonnelStudi as $data): ?>
																<tr>
																	<td><strong><?php echo $data['Personnel']['personnel_name']; ?></strong></td>
																	<td>
																		<?php
																			if($data['Process']['status'] == 0){
																				echo "<span class='label label-success'>".$data['Process']['SStatus']."</span>";
																			} elseif ($data['Process']['status'] == 1) {
																				echo "<span class='label label-info'>".$data['Process']['SStatus']."</span>";
																			} else {
																				echo "<span class='label label-danger'>".$data['Process']['SStatus']."</span>";
																			}
																		?>

																	</td>
																</tr>
															<?php endforeach; ?>
														</tbody>
												</table>
										</div>

								</div>
						</div>
						<!-- END PROJECTS BLOCK -->
				</div>
		</div>

		<div class="row">
				<div class="col-md-4">

						<!-- START SALES & EVENTS BLOCK -->
						<div class="panel panel-default">
								<div class="panel-heading">
										<div class="panel-title-box">
												<h3>Jumlah Personel Studi</h3>
												<span>Personel Yang Berangkat Studi</span>
										</div>
										<ul class="panel-controls" style="margin-top: 2px;">
												<li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
												<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
														<ul class="dropdown-menu">
																<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
																<li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
														</ul>
												</li>
										</ul>
								</div>
								<div class="panel-body padding-0">
										<div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
								</div>
						</div>
						<!-- END SALES & EVENTS BLOCK -->

				</div>
				<div class="col-md-4">

						<!-- START USERS ACTIVITY BLOCK -->
						<div class="panel panel-default">
								<div class="panel-heading">
										<div class="panel-title-box">
												<h3>Aktivitas Pendaftar Studi</h3>
												<span>Personel Diterima vs Personel Ditolak</span>
										</div>
										<ul class="panel-controls" style="margin-top: 2px;">
												<li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
												<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
														<ul class="dropdown-menu">
																<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
																<li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
														</ul>
												</li>
										</ul>
								</div>
								<div class="panel-body padding-0">
										<div class="chart-holder" id="dashboard-bar-1" style="height: 200px;"></div>
								</div>
						</div>
						<!-- END USERS ACTIVITY BLOCK -->

				</div>
				<div class="col-md-4">

						<!-- START VISITORS BLOCK -->
						<div class="panel panel-default">
								<div class="panel-heading">
										<div class="panel-title-box">
												<h3>Aplikasi Calon Personel</h3>
												<span>Pendaftar Studi Saat Ini</span>
										</div>
										<ul class="panel-controls" style="margin-top: 2px;">
												<li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
												<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
														<ul class="dropdown-menu">
																<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
																<li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
														</ul>
												</li>
										</ul>
								</div>
								<div class="panel-body padding-0">
										<div class="chart-holder" id="dashboard-donut-1" style="height: 200px;"></div>
								</div>
						</div>
						<!-- END VISITORS BLOCK -->

				</div>
		</div>

		<!-- START DASHBOARD CHART -->
		<!-- <div class="block-full-width">
				<div id="dashboard-chart" style="height: 250px; width: 100%; float: left;"></div>
				<div class="chart-legend">
						<div id="dashboard-legend"></div>
				</div>
		</div> -->
		<!-- END DASHBOARD CHART -->

</div>
<!-- END PAGE CONTENT WRAPPER -->
