<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>THE AIMAZING RACE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cloud-admin.css" >
	
	<link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/uniform/css/uniform.default.min.css" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animatecss/animate.min.css" />
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body class="login">	
	<!-- PAGE -->
	<section id="page">
			<!-- HEADER -->
			<header>
				<!-- NAV-BAR -->
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div id="logo">
								<img src="<?=base_url(); ?>frontend/images/Race_logo.jpg" height="80" alt="logo name" />
							</div>
						</div>
					</div>
				</div>
				<!--/NAV-BAR -->
			</header>
			<!--/HEADER -->
			<!-- LOGIN -->
			<section id="login" class="visible">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">Sign In</h2>
								<div class="divide-40"></div>
								<form method="POST" action="<?php echo base_url(); ?>login/auth" >
								  <div class="form-group">
									<label for="username">Username</label>
									<i class="fa fa-user"></i>
									<input type="text" class="form-control" name="username" id="username" >
								  </div>
								  <div class="form-group"> 
									<label for="password">Password</label>
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" name="password" id="password" >
								  </div>
								  <div class="form-actions">
									<button type="submit" class="btn btn-danger">Submit</button>
								  </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/LOGIN -->
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script src="<?=base_url(); ?>js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="<?=base_url(); ?>js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="<?=base_url(); ?>frontend_theme/bootstrap-dist/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="<?=base_url(); ?>js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	<!-- UNIFORM -->
	<script type="text/javascript" src="<?=base_url(); ?>js/uniform/jquery.uniform.min.js"></script>
	<!-- CUSTOM SCRIPT -->

	<!-- /JAVASCRIPTS -->
</body>
</html>