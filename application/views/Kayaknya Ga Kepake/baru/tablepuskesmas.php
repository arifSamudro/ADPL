<!DOCTYPE html>
<html lang="en">
<head>
<title>Dinkes Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/bootstrap.min.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/bootstrap-responsive.min.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/fullcalendar.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/maruti-style.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/maruti-media.css'?>" class="skin-color" />
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Dinkes Admin</a></h1>
</div>
	<!--close-Header-part--> 

	<!--top-Header-messaages-->
	<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
	<!--close-top-Header-messaages--> 

	<!--top-Header-menu-->
	<div id="user-nav" class="navbar navbar-inverse">
	  <ul class="nav">
	    <li class=""><a title="" href="<?php echo base_url() .'index.php/logout'?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
	  </ul>
	</div>
	<!--close-top-Header-menu-->

	<div id="sidebar"><a href="<?php echo base_url() .'index.php/home'?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a><ul>
	    <li class="active"><a href="<?php echo base_url() .'index.php/home'?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
	    <!-- <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
	    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
	    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
	    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>  -->
	    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Puskesmas</span> <span class="label label-important"></span></a>
	      <ul>
	        <li><a href="<?php echo base_url() .'index.php/createDataDasar'?>">Data Dasar</a></li>
	        <!-- <li><a href="form-validation.html">Form with Validation</a></li>
	        <li><a href="form-wizard.html">Form with Wizard</a></li> -->
	      </ul>
	    </li>
	     <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Pegawai</span> <span class="label label-important"></span></a>
	      <ul>
	        <li><a href="<?php echo base_url()."index.php/pegawai/" ?>">Data Pegawai</a></li>
	        <!-- <li><a href="form-validation.html">Form with Validation</a></li>
	        <li><a href="form-wizard.html">Form with Wizard</a></li> -->
	      </ul>
	    </li>
	    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Tables</span> <span class="label label-important">2</span></a>
	      <ul>
	        <li><a href="<?php echo base_url()."index.php/tablepuskesmas" ?>">Data Dasar Puskesmas</a></li>
	        <li><a href="<?php echo base_url()."index.php/tablepegawai" ?>">Data Pegawai</a></li>
	        <!-- <li><a href="form-validation.html">Form with Validation</a></li>
	        <li><a href="form-wizard.html">Form with Wizard</a></li> -->
	      </ul>
	    </li>
	    <!-- <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
	    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
	    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">4</span></a>
	      <ul>
	        <li><a href="index2.html">Dashboard2</a></li>
	        <li><a href="gallery.html">Gallery</a></li>
	        <li><a href="calendar.html">Calendar</a></li>
	        <li><a href="chat.html">Chat option</a></li>
	      </ul>
	    </li> -->
	  </ul>
	</div>
	  <!--close-left-menu-stats-sidebar-->

	<div id="content">
		<div id="content-header">
			<div id="breadcrumb"> 
				<a href="<?php echo base_url()."index.php/home" ?>" title="Go to Home" class="tip-bottom">
					<i class="icon-home"></i> Home 
				</a> 
				<a href="<?php echo base_url()."index.php/tablepuskesmas" ?>" class="current">
					Tabel Puskesmas
				</a> 
			</div>
		    <h1>Tabel Puskesmas</h1>
		</div>
		<div class="container-fluid">
	    	<div class="row-fluid">
	      		<div class="span12">
	        		<div class="widget-box">
	          			<div class="widget-title">
	             			<span class="icon"><i class="icon-th"></i></span> 
	            			<h5>Data Puskesmas</h5>
	          			</div>
	          			<div class="widget-content nopadding">
				            <table class="table table-bordered data-table">
								<thead>
									<tr>
										<th>Kode Puskesmas</th>
										<th>Nama Puskesmas</th>
										<th>Jenis Puskesmas</th>
										<th>Kecamatan</th>
										<th>Desa</th>
										<th>Alamat</th>
										<th>Kode Pos</th>
										<th>No. Telepon</th>
										<th>Fax</th>
										<th>E-Mail</th>
										<th>Latitude</th>
										<th>Longitude</th>
										<th>Kondisi Bangunan</th>
										<th>Status Akreditasi</th>
										<th>Jumlah Dokter</th>
										<th>Jumlah Dokter Gigi</th>
										<th>Jumlah Perawat</th>
										<th>Jumlah Bidan</th>
										<th>Jumlah TKM</th>
										<th>Jumlah TKL</th>
										<th>Jumlah Ahli Gizi</th>
										<th>Jumlah Ahli Lab</th>
										<th>Jumlah Farmasi</th>
										<th>Jumlah Tenaga Penunjang</th>
										<th>Jumlah Tenaga</th>
										<th>Delete</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($puskes as $key) { ?>
									<tr>
										<td><?php echo $key['kode_puskes'] ?></td>
										<td><?php echo $key['nama_puskes'] ?></td>
										<td><?php echo $key['jenis_puskes'] ?></td>
										<td><?php echo $key['kecamatan'] ?></td>
										<td><?php echo $key['desa'] ?></td>
										<td><?php echo $key['alamat'] ?></td>
										<td><?php echo $key['kodepos'] ?></td>
										<td><?php echo $key['tlep'] ?></td>
										<td><?php echo $key['fax'] ?></td>
										<td><?php echo $key['email'] ?></td>
										<td><?php echo $key['latitude'] ?></td>
										<td><?php echo $key['longtitude'] ?></td>
										<td><?php echo $key['kondisi_bangunan'] ?></td>
										<td><?php echo $key['status_akreditasi'] ?></td>
										<td><?php echo $key['jumlah_dokter'] ?></td>
										<td><?php echo $key['jumlah_doktergigi'] ?></td>
										<td><?php echo $key['jumlah_perawat'] ?></td>
										<td><?php echo $key['jumlah_bidan'] ?></td>
										<td><?php echo $key['jumlah_TKM'] ?></td>
										<td><?php echo $key['jumlah_TKL'] ?></td>
										<td><?php echo $key['jumlah_ahliGizi'] ?></td>
										<td><?php echo $key['jumlah_ahliLab'] ?></td>
										<td><?php echo $key['jumlah_farmasi'] ?></td>
										<td><?php echo $key['jumlah_tenagapenunjang'] ?></td>
										<td><?php echo $key['jumlah_tenaga'] ?></td>
										<td><a href="<?= base_url()."index.php/MycontrollerAP/deleteDataDasar/".$key['kode_puskes']  ?>"><button>Delete</button></a> </td> 
	    								<td><a href="<?= base_url()."index.php/MycontrollerAP/updateDataDasar/".$key['kode_puskes']  ?>"><button>Edit</button></a>  </td>
									</tr>
									<?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<th>Kode Puskesmas</th>
										<th>Nama Puskesmas</th>
										<th>Jenis Puskesmas</th>
										<th>kecamatan</th>
										<th>Desa</th>
										<th>Alamat</th>
										<th>Kode Pos</th>
										<th>No. Telepon</th>
										<th>Fax</th>
										<th>E-Mail</th>
										<th>Latitude</th>
										<th>Longitude</th>
										<th>Kondisi Bangunan</th>
										<th>Status Akreditasi</th>
										<th>Jumlah Dokter</th>
										<th>Jumlah Dokter Gigi</th>
										<th>Jumlah Perawat</th>
										<th>Jumlah Bidan</th>
										<th>Jumlah TKM</th>
										<th>Jumlah TKL</th>
										<th>Jumlah Ahli Gizi</th>
										<th>Jumlah Ahli Lab</th>
										<th>Jumlah Farmasi</th>
										<th>Jumlah Tenaga Penunjang</th>
										<th>Jumlah Tenaga</th>
										<th>Delete</th>
										<th>Edit</th>
									</tr>
								</tfoot>
							</table>
						</div>
	    			</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row-fluid">
  		<div id="footer" class="span12"> 
  		
  		</div>
	</div>
	<script src="js/jquery.min.js"></script> 
	<script src="js/jquery.ui.custom.js"></script> 
	<script src="js/bootstrap.min.js"></script> 
	<script src="js/jquery.uniform.js"></script> 
	<script src="js/select2.min.js"></script> 
	<script src="js/jquery.dataTables.min.js"></script> 
	<script src="js/maruti.js"></script> 
	<script src="js/maruti.tables.js"></script>
</body>
</html>
