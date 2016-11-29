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
				<!--Page 4 content-->
				<div class="swiper-slide sliderbg">
					<div class="swiper-container swiper-nestedsingle">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="slide-inner">
									<div class="pages_container">
										<div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>frontend/images/Race_logo.jpg" alt="" title="" /></a></div>
										<?php if (isset($task)): ?>
											<?php foreach ($task as $row): ?>
												<div class="ios-back">
													<a href="<?php echo base_url()."event/".$row->event_id; ?>" class="ios-arrow-left">Back</a>
													<!-- <a href="#" class="ios-arrow-right">Playing</a> -->
												</div>


											<div class="service_box">
												<div class="services_icon"><img src="<?php echo base_url(); ?>frontend/images/Detour.png" alt="" title="" /></div>
												<div class="service_content">
													<div class="header">
														<div class="h_title"><?php echo $row->supplier_name; ?></div>
														<div class="h_number"><?php echo $row->booth_no; ?></div>
													</div>
													<div class="text">
														<p><?php echo $row->name; ?></p>
														<span><i></i></span>
													</div>
												</div>
											</div>


											<div class="data_container">

												<div class="text-box">
													<div class="success" hidden>
														<div class="icon"> Challenge Completed!</div>
													</div>
													<div class="take-photo-box">
														<div class="form">
															<form id="comment-form" action="<?php echo base_url(); ?>site/post_message" method="post">
																<textarea name="message" id="commentsText" class="form_textarea txtarea requiredField" rows="" cols=""><?php echo $row->placeholder_text; ?></textarea>
																<input type="text" id="task_id" name="task_id" value="<?php if(isset($task_id))echo $task_id; ?>" hidden>
															</form>
														</div>
													</div>
												</div>
												<a href="#" id="submit-btn" class="button_11 blue">POST TO FACEBOOK</a>
												<div id="loader" hidden>
													<img width="50px"  src="<?php echo base_url(); ?>frontend/images/rolling.svg" alt="" style="margin: auto;display:block;" />
												</div>

												<div class="clearfix" style="margin-bottom: 20px;"></div>
											</div>
											<?php endforeach ?>
										<?php endif ?>
										<div class="clearfix"></div>
									</div>
									<!--End of page container-->
								</div>
							</div>
						</div>
						<div class="adsense add"><a href="#"><img src="<?php echo $ad_path ?>" alt="" title="" /></a></div>
					</div>
				</div>

				<!--End of pages-->
			</div>
			<div class="pagination"></div>
		</div>
		<script type="text/javascript">
			$(function(){
				var base_url = "<?php echo base_url(); ?>";


				$("#submit-btn").click(function(event){
					event.preventDefault();
					$("#submit-btn").hide();
					$("#loader").fadeIn('fast');
					$.post(base_url+"site/post_message",{message:$("#commentsText").val(),task_id:$("#task_id").val()},function(data){
						if(data.status === true){
							$(".success").fadeIn('fast');
							$("#loader").fadeOut('fast');
						}
					},"json");
					return false;
				});
			});
		</script>
	</body>
</html>
