<!DOCTYPE HTML>
<html>
<head>
	<title><?= ucfirst($title) ?> | Si POS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url('asset/css/bootstrap.min.css');?>" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="<?php echo base_url('asset/css/style.css');?>" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php echo base_url('asset/css/morris.css');?>" type="text/css"/>
	<!-- Graph CSS -->
	<link href="<?php echo base_url('asset/css/font-awesome.css');?>" rel="stylesheet" type='text/css'> 
	<!-- jQuery -->
	<script src="<?php echo base_url('asset/js/jquery-2.1.4.min.js');?>"></script>
	<!-- //jQuery -->
	<link href="<?php echo base_url('//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400');?>" rel='stylesheet" type='text/css'/>
	<link href="<?php echo base_url('//fonts.googleapis.com/css?family=Montserrat:400,700');?>" rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="<?php echo base_url('asset/css/icon-font.min.css');?>" type='text/css' />
	<!-- //lined-icons -->
	<!-- tables -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/table-style.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/basictable.css');?>" />
	<script type="text/javascript" src="<?php echo base_url('aseet/js/jquery.basictable.min.js');?>"></script>
	<script type="text/javascript">
	    $(document).ready(function() {
	      $('#table').basictable();
	    });
	</script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
   <div class="mother-grid-inner">
      <!--header start here-->
		<div class="header-main">
			<div class="logo-w3-agile">
				<h1><a href="index.html">Si POS</a></h1>
			</div>
			<div class="w3layouts-left">
				<!--search-box-->
					<!-- <div class="w3-search-box">
						<form action="#" method="post">
							<input type="text" placeholder="Search..." required="">	
							<input type="submit" value="">					
						</form>
					</div> -->
					<!--//end-search-box-->
				<!-- <div class="clearfix"> </div> -->
			 </div>
			 <div class="w3layouts-right">
				<div class="clearfix"> </div>				
			</div>
			<div class="profile_details w3l">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<!-- <span class="prfil-img"><img src="images/in4.jpg" alt=""> </span>  -->
									<div class="user-name">
										<p><?php echo ucfirst($this->session->userdata('nama')) ?></p>
										<?php if ($this->session->userdata('role')=='admin'){ ?>
											<span>Administrator</span>
										<?php } elseif ($this->session->userdata('role')=='pegawai'){ ?>
											<span>Worker</span>
										<?php } else{ ?>
											<span>Client</span>
										<?php }; ?>
									</div>
									<i class="fa fa-angle-down"></i>
									<i class="fa fa-angle-up"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="<?= base_url('index.php/auth/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>	
		    <div class="clearfix"> </div>	
		</div>
		<!--/sidebar-menu-->
		<?php if ($this->session->userdata('role')=='admin'){ ?>
		<div class="sidebar-menu">
			<header class="logo1">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
			</header>
			<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
            <div class="menu">
				<ul id="menu" >
					<li><a href="<?= base_url('index.php/transaksi')?>"><i class="fa fa-tachometer"></i> <span>Transaksi</span><div class="clearfix"></div></a></li>
			        <li id="menu-academico" ><a href="<?= base_url('index.php/transaksi/viewtransall')?>"><i class="fa fa-file-text-o"></i>  <span>Data Transaksi</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
						 <ul id="menu-academico-sub" >
							<li id="menu-academico-boletim" ><a href="<?= base_url('index.php/transaksi/viewtransclient')?>">Client</a></li>
							<li id="menu-academico-avaliacoes" ><a href="<?= base_url('index.php/transaksi/viewtransbiasa')?>">Biasa</a></li>
						  </ul>
					 </li>
					 <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Registrasi</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
						 <ul id="menu-academico-sub" >
							<li id="menu-academico-boletim" ><a href="<?= base_url('index.php/user/viewdaftarclient')?>">Client</a></li>
							<li id="menu-academico-avaliacoes" ><a href="<?= base_url('index.php/user/viewdaftarpegawai')?>">Biasa</a></li>
						  </ul>
					 </li>
					 <li id="menu-academico" ><a href=#"><i class="fa fa-file-text-o"></i>  <span>User</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
						 <ul id="menu-academico-sub" >
							<li id="menu-academico-boletim" ><a href="<?= base_url('index.php/user/viewclient')?>">Client</a></li>
							<li id="menu-academico-avaliacoes" ><a href="<?= base_url('index.php/user/viewpegawai')?>">Pegawai</a></li>
						  </ul>
					 </li>
			    </ul>
			</div>
	    </div>
	    <?php }; ?>
	    <?php if ($this->session->userdata('role')=='client'){
	    	?>
	    	<div class="sidebar-menu">
			<header class="logo1">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
			</header>
			<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
            <div class="menu">
				<ul id="menu" >
			    	<li id="menu-academico" ><a href="<?= base_url('index.php/transaksi/loadbyclient/'.$this->session->userdata('username'))?>"><i class="fa fa-file-text-o"></i>  <span>Data Transaksi</span>
			    </ul>
			</div>
	    </div>
	    <?php }; ?>
	    <?php if ($this->session->userdata('role')=='Costumer'){
	    	?>
	    	<div class="sidebar-menu">
			<header class="logo1">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
			</header>
			<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
            <div class="menu">
				<ul id="menu" >
			    </ul>
			</div>
	    </div>
	    <?php }; ?>
	    <div class="clearfix"></div>		
	</div>
<!--heder end here-->