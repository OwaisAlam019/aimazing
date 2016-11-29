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

<?php
    // var_dump($_SERVER["SERVER_NAME"]);
    // $url = file_get_contents('http://'.$_SERVER["SERVER_NAME"]."/uploader/login.php");
 ?>
  <div id="header">
      <div class="gohome radius20"><a href="#"><img src="<?php echo base_url(); ?>frontend/images/back.png" alt="" title="" /></a></div>
  </div>
  <div class="swiper-container swiper-parent" style="background-color: #222;">
    <div class="swiper-wrapper">

     <!--Page 5 content-->
      <div class="swiper-slide sliderbg">
      <div class="swiper-container swiper-nested4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="pages_container">
						<div class="logo"><a href="index.html"><img src="<?php echo base_url(); ?>frontend/images/Race_logo.jpg" alt="" title="" /></a></div>
						<div class="data_container azm-facebook">
						<div class="text-box">
							<div class="butt_fb"><a href="<?php echo $login_url; ?>"><img src="<?php echo base_url(); ?>frontend/images/login-fb.png" alt="" /></a></div>
						</div>

						<div class="clearfix" style="margin-bottom: 20px;"></div>
						</div>

                        <div class="clearfix"></div>
                        </div>
                        <!--End of page container-->
                    </div>
                </div>
            </div>
     </div>
     </div>

     <!--End of pages-->
    </div>
    <div class="pagination"></div>
  </div>

</body>
</html>