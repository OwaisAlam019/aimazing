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
                                        <div class="menu">
                                            <ul>
                                                <li><a href="news"><img src="<?php echo base_url(); ?>frontend/images/aim.png" alt="" title="" /><span>Member News</span></a></li>
                                                <?php if (isset($events)): ?>
                                                    <?php foreach ($events as $event): ?>
                                                        <?php
                                                            $lower = Date('d',strtotime($event->start));
                                                            $upper = Date('d',strtotime($event->end));
                                                            $month = Date('F',strtotime($event->end));
                                                            $year = Date('Y',strtotime($event->end));
                                                        ?>
                                                         <li><a href="event/<?php echo $event->event_id; ?>"><img src="<?php echo base_url().$event->image; ?>" alt="" title="" /><span><?php echo $month." ".$lower."-".$upper.",".$year ?></span></a></li>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </ul>
                                            <div class="clearfix"></div>
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
        <script>
        $(document).ready(function() {
        $('.link-sort-list').click(function(e) {
        var $sort = this;
        var $list = $('#sort-list');
        var $listLi = $('li',$list);
        $listLi.sort(function(a, b){
        var keyA = $(a).text();
        var keyB = $(b).text();
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
