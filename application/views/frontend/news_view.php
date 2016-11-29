<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="apple-touch-icon" href="<?php echo base_url(); ?>frontend/images/apple-touch-icon.png" />
		<link rel="apple-touch-startup-image" href="<?php echo base_url(); ?>frontend/images/apple-touch-startup-image-320x460.png" />
		<title>THE AIMAZING RACE</title>
		<link rel="shortcut icon" href="<?php echo base_url();?>frontend/images/favicon.png" type="" /> <!-- Favicon -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>frontend/css/style.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>frontend/css/corporate.css"/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'/>
		<script type="text/javascript" src="<?php echo base_url();?>frontend/js/jquery-1.10.1.min.js"></script>
	</head>
	<body>
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">

				<!--Page 1 content-->
				<div class="swiper-slide sliderbg">
					<div class="swiper-container swiper-nested1">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="slide-inner">
									<div class="pages_container">
										<div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url()?>frontend/images/Race_logo.jpg" alt="" title="" /></a></div>
										<div class="ios-back">
											<?php if (isset($news)): ?>
												<a href="<?php echo base_url(); ?>/news" class="ios-arrow-left">Back</a>
											<?php else: ?>
												<a href="<?php echo base_url(); ?>" class="ios-arrow-left">Back</a>
											<?php endif; ?>

											<!-- <a href="#" class="ios-arrow-right">Playing</a> -->
										</div>

											<div class="header_container">
												<div class="s_icon"><img src="<?php echo base_url() ?>frontend/images/aim.png" alt=""> </div>
												<div class="s_content"><p>Member News</p></div>
											</div>
										<?php if (isset($news)): ?>
											<?php foreach ($news as $row): ?>
											<div class="data_container">
												<h2><?php echo $row->title; ?></h2>
												<br />
												<div class="image_single"><img src="<?php echo base_url().$row->image;?>" alt="" title="" border="0" /></div>
												<br />
												<p><?php echo $row->details; ?></p>
											</div>
											<?php endforeach ?>
										<?php endif ?>
										<div class="clearfix"></div>
									</div>
									<!--End of page container-->
								</div>
							</div>
						</div>
						<div class="adsense"><a href="#"><img src="<?php echo $ad_path ?>" alt="" title="" /></a></div>
					</div>
				</div>

				<!--End of pages-->
			</div>
			<div class="pagination"></div>
		</div>
	</body>
</html>
