<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="apple-touch-icon" href="<?php echo base_url(); ?>frontend/images/apple-touch-icon.png" />
		<link rel="apple-touch-startup-image" href="<?php echo base_url(); ?>frontend/images/apple-touch-startup-image-320x460.png" />
		<title>THE AIMAZING RACE</title>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>frontend/images/favicon.png" type="" /> <!-- Favicon -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>frontend/css/style.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>frontend/css/corporate.css"/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'/>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery/jquery-2.0.3.min.js"></script>
	</head>
	<body>
		<div id="header">
			<div class="gohome radius20"><a href="#"><img src="<?php echo base_url(); ?>frontend/images/back.png" alt="" title="" /></a></div>
		</div>
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<!--Page 2 content-->
				<div class="swiper-slide sliderbg">
					<div class="swiper-container swiper-nested2">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="slide-inner">
									<div class="pages_container">
										<div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>frontend/images/Race_logo.jpg" alt="" title="" /></a></div>
										<div class="ios-back">
											<a href="<?php echo base_url(); ?>" class="ios-arrow-left">Back</a>
											<!-- <a href="#" class="ios-arrow-right">Playing</a> -->
										</div>
										<div class="header_container">
											<div class="s_icon"><img src="<?php echo base_url().$image; ?>" alt="" style="max-height: 100px;"> </div>
											<div class="s_content"><p>Sort by Booth #</p></div>
											<!--<div class="s_arrows">
												<a id="desc" class="link-sort-list asc"><img src="<?php echo base_url(); ?>frontend/images/up_arrow.png"/></a> <br />
												<a id="asc" class="link-sort-list desc"><img src="<?php echo base_url(); ?>frontend/images/down_arrow.png" /></a>
											</div>-->
										</div>

										<ul id="sort-list" class="responsive_table">
											<?php if (isset($task_list)): ?>
												<?php foreach ($task_list as $task): ?>
													<li class="responsive_tr">
														<a href="<?php echo base_url()."task/".$task->task_id; ?>">
															<div class="service_box">
																<div class="services_icon"><img src="<?php echo base_url()."uploads/".$task->task_image; ?>" alt="" title="" /></div>
																<div class="service_content">
																	<div class="header">
																		<div class="h_title"><?php echo $task->supplier_name; ?></div>
																		<div class="h_number"><?php echo $task->booth_no; ?></div>
																	</div>
																	<div class="text">
																		<p><?php echo $task->name; ?></p>
																		<span><i><?php echo $task->reward; ?></i></span>
																	</div>
																</div>
															</div>
														</a>
													</li>
												<?php endforeach ?>
											<?php endif ?>
										</ul>
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
			<script>
			$(document).ready(function() {
			$('.link-sort-list').click(function(e) {
			var $sort = this;
			var $list = $('#sort-list');
			var $listLi = $('li',$list);
			$listLi.sort(function(a, b){
			var keyA = parseInt($(a).find('.h_number').text());
			var keyB = parseInt($(b).find('.h_number').text());
			if($($sort).hasClass('asc')){
			return (keyA > keyB) ? 1 : 0;
			} else {
			return (keyA < keyB) ? 1 : 0;
			}
			});
			$.each($listLi, function(index, row){
			$list.append(row);
			});
			e.preventDefault();
			});
			});
			</script>
		</body>
	</html>
