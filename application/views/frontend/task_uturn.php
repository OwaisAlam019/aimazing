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
				<!--Page 3 content-->
				<div class="swiper-slide sliderbg">
					<div class="swiper-container swiper-nested3">
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
													<div class="services_icon"><img src="<?php echo base_url(); ?>frontend/images/UTurn.png" alt="" title="" /></div>
													<div class="service_content">
														<div class="header">
															<div class="h_title"><?php echo $row->supplier_name; ?></div>
														<div class="h_number"><?php echo $row->booth_no; ?></div>
														</div>
														<div class="text">
															<p><?php echo $row->name; ?></p>
															<span><i><?php echo $row->reward; ?></i></span>
														</div>
													</div>
												</div>
											<?php endforeach ?>
										<?php endif ?>
										<div class="data_container">
											<div class="camera">
												<div class="success" hidden>
													<div class="icon"> Challenge Completed!</div>
												</div>
												<div class="take_picture">
	 												<a href="#"  id="pickfiles" class="button_13 red"><img src="<?php echo base_url(); ?>frontend/images/camera_icon.png" alt="" /><span>TAKE A PICTURE</span></a>
	 										   	</div>
												<div class="loader">
													<img style="display:block;margin:0 auto;" src="<?php echo base_url(); ?>frontend/images/ajax-loader.svg" alt="" />
												</div>
												<!-- <div class="take-photo-img">
													<a id="pickfiles" href="javascript:;">
														<img src="<?php echo base_url(); ?>frontend/images/camera-icon.png">
													</a>
												</div> -->
												<!-- <div class="take-photo-text">
													<div class="internal">Uses Camera to take pick. then after pick, user can click to post pick on FB, and if poss, preset text as “#AIMAZINGRACE” and <partner name></div>
												</div> -->
											</div>
											<a href="#" id="uploadfiles" class="button_11 blue">POST TO FACEBOOK</a>
											<div id="loader" hidden>
												<img width="50px"  src="<?php echo base_url(); ?>frontend/images/rolling.svg" alt="" style="margin: auto;display:block;" />
											</div>


											<div class="clearfix" style="margin-bottom: 20px;"></div>
										</div>
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
		<script type="text/javascript" src="<?php echo base_url(); ?>js/pulpload/plupload.full.min.js"></script>
		<script type="text/javascript">
		// Custom example logic
		$(function(){
			$("#uploadfiles").hide();
			$(".loader").hide();
			function showImagePreview( file ) {
                var image = $( new Image() ).appendTo( $('.take_picture') );
                var preloader = new mOxie.Image();
                preloader.onload = function() {
                    preloader.downsize( 300, 300 );
                    image.prop( "src", preloader.getAsDataURL() );
					$("#uploadfiles").show();
					$(".loader").hide();
					$("html, body").animate({ scrollTop: $(document).height() }, 1000);
                };
                preloader.load( file.getSource() );
            }

			var uploader = new plupload.Uploader({
			    runtimes : 'html5,flash,silverlight,html4',

			    browse_button : 'pickfiles', // you can pass in id...
			    //container: document.getElementById('container'), // ... or DOM Element itself

			    url : "<?php echo base_url(); ?>site/upload",

			    filters : {
			        max_file_size : '10mb',
			        mime_types: [
			            {title : "Image files", extensions : "jpg,gif,png"}
			        ]
			    },
			    multi_selection:false,

			     resize: {
			        width: 1024,
			        height: 1024
			    },

				multipart_params : {
					"task_id":"<?php if(isset($task_id))echo $task_id; ?>"
				},

			    // Flash settings
			    flash_swf_url : '/plupload/js/Moxie.swf',

			    // Silverlight settings
			    silverlight_xap_url : '/plupload/js/Moxie.xap',


			    init: {
			        PostInit: function() {
			            // document.getElementById('filelist').innerHTML = '';

			            document.getElementById('uploadfiles').onclick = function() {
			                uploader.start();
							$("#uploadfiles").hide();
							$("#loader").show();
			                return false;
			            };
			        },

			        FilesAdded: function(up, files) {
						$("#pickfiles").hide();
						$(".loader").show();
						for ( var i = 0 ; i < files.length ; i++ ) {
		                    showImagePreview( files[ i ] );
		                }
			            // plupload.each(files, function(file) {
			            //     document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
			            // });
						// uploader.start();
			        },

			        UploadProgress: function(up, file) {
			            // document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
			        },

					FileUploaded:function(up,file,res){
						var response = JSON.parse(res.response);
						if(response === true){
							$(".success").fadeIn('fast');
							$("#loader").fadeOut('fast');
						}
					},

			        Error: function(up, err) {
			            // document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
			        }
			    }
			});

			uploader.init();

		});


		</script>
	</body>
</html>
