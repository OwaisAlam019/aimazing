<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>AIM Arts Services</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cloud-admin.css" />
		<link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/themes/default.css" id="skin-switcher" />
		<link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/responsive.css" />
		
		<link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/datatables/media/css/dataTables.bootstrap.min.css" />
		<!-- JQUERY UI-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.min.css" />
		
		<!-- FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'/>
		<!-- xCharts -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/xcharts/xcharts.min.css" />
		
		<!-- JQUERY -->
		<script src="<?=base_url(); ?>js/jquery/jquery-2.0.3.min.js"></script>
	</head>
	<body>
		<!-- HEADER -->
		<header class="navbar clearfix" id="header">
			<div class="container">
				<div class="navbar-brand">
					
					<!-- SIDEBAR COLLAPSE -->
					<div id="sidebar-collapse" class="sidebar-collapse btn">
						<i class="fa fa-bars"
						data-icon1="fa fa-bars"
						data-icon2="fa fa-bars" ></i>
					</div>
					<!-- /SIDEBAR COLLAPSE -->
				</div>
				
				<!-- BEGIN TOP NAVIGATION MENU -->
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="pull-right">
						<a href="<?php echo base_url(); ?>admin/logout" class="dropdown-toggle">
						<i class="fa fa-sign-out"></i>
						Signout
						</a>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->
			</div>
		</header>
		<!--/HEADER -->