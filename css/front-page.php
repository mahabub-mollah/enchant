<!DOCTYPE html>
<html lang="en">

<head>
<title>Enchanted</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">



<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css" />
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<?php wp_head();?>
</head>

<body>

<header class="header">
    <div class="container">
        <nav class="navigation">
            <a class="openClose" href="#"><img src="<?php echo get_template_directory_uri();?>/images/navOpenClose-bg.png" alt="" /></a>

            <?php wp_nav_menu(array(
                        'theme_location' => 'enchated_menu',
                        'fallback_cb'=>'enchanted_fallback_menu',
                        'container'=>'',
                        'menu_class'=>'mainMenu '
                         ));?>
                         
            <!--<ul class="mainMenu">
                <li class="current-menu-item"><a href="#">Home</a></li>
                <li><a href="#section_1">About</a></li>
                <li><a href="#tickets">Tickets</a></li>
                <li><a href="#media">Media</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#contact_us">Contact us</a></li>
            </ul>-->
        </nav>
    </div>
</header>

<div class="bnrSec" style="background:url('<?php $banner_bg_image= get_field('banner_bg_image'); echo $banner_bg_image['url'];?>') no-repeat center top;">
	<div class="bnrCont">
    	<div class="container">
            <div class="bnrImgBox">
                <img src="<?php $banner_logo_image= get_field('banner_logo_image'); echo $banner_logo_image['url'];?>" alt="" />
            </div>
            <span><?php the_field('banner_logo_text');?></span>
        </div>
    </div>
	<a class="bnrArrow" style="background:url(<?php echo get_template_directory_uri();?>/images/bnrArrow.png) no-repeat left bottom;background-size:200% 100%;" href="#section_1"></a>
</div>

<div id="section_1" class="section1">
    <div class="container">
    	<div class="row">
        	<div class="col-sm-6">
            	<div class="sec1_left">
                 <?php
                   $attachment_id = get_field('about_section_image');
                   $size = "about-img"; // (thumbnail, medium, large, full or custom size)
                   $story_image = wp_get_attachment_image_src( $attachment_id, $size );
                   ?>

                  <img  alt="" src="<?php echo $story_image[0];?>"/>
                </div>
            </div>
        	<div class="col-sm-6">
            	<div class="sec1_rght">
                    <div class="sec1_rghtIn">
                        <span class="capA">A</span>
                        <span><?php the_field('span_text');?><br> broken heart</span>
                    </div>
                    <?php the_field('about_section_description');?>
                    <div class="findBox">	
                    	<a class="cmnBtn" href="<?php the_field('btn_url');?>"><?php the_field('btn_text');?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec3">
    <div class="sec3_left" style="background:#000 url('<?php 
                  
                  $attachment_id = get_field('about_sub_image');
                $size = 'about-sub-img'; // (thumbnail, medium, large, full or custom size)
            
                $about_sub = wp_get_attachment_image_src( $attachment_id,$size);echo  $about_sub[0];?>') no-repeat right top;">
        <div class="sec3_content">
            <h3><?php the_field('about_sub_title')?></h3>
            <?php the_field('about_sub_description')?>
            <a href="javaScript:void(0);" class="cmnBtn"><?php the_field('sub_section_ancor_text')?></a>
        </div>
    </div>
    <div class="sec3_right" style="background:#000 url('<?php 
                  
                  $attachment_id = get_field('about_sub_right_image');
                $size = 'about-sub-img'; // (thumbnail, medium, large, full or custom size)
            
                $about_right_sub = wp_get_attachment_image_src( $attachment_id,$size);echo  $about_right_sub[0];?>') no-repeat center top;background-size:100% auto;">
        <div class="sec3_content">
            <h3><?php the_field('about_sub_right_title')?></h3>
             <?php the_field('about_sub_right_description')?>
            <a href="javaScript:void(0);" class="cmnBtn"><?php the_field('about_right_ancor_text')?></a>
        </div>
    </div>
</div>

<div class="sec4">
	<div class="container">
    	<div class="titleBox">
        	<?php the_field('media_title_text');?>
        </div>
    	<div class="row">
          

          <?php if( have_rows('media_repeater_field') ):
                 while ( have_rows('media_repeater_field') ) : the_row();?>

        	<div class="col-sm-3">
            	<div class="snglContBox">
                	<a href="#sec4_popUp" class="snglImgBox sec4_popUp">
                    <?php
                      $attachment_id = get_sub_field('media_image');
                      $size = "media-support-img"; // (thumbnail, medium, large, full or custom size)
                       $media_image = wp_get_attachment_image_src( $attachment_id, $size );
                        // url = $image[0];
                        // width = $image[1];
                        // height = $image[2];
                       ?>
  
    <img src="<?php echo  $media_image[0];?>"/>
               	
                    
                    <div class="snglTxtBox">
                    	<h4><a class="sec4_popUp" href="#sec4_popUp"><?php the_sub_field('media_image_title');?></a></h4>
                        <?php the_sub_field('media_image_description');?>
                    </div>
                </div>
            </div>
        <?php endwhile;endif;?>
</div>
    </div>
</div>

<div class="sec5" style="background:url('<?php 
                  
                  $attachment_id = get_field('place_section_bg_image');
                $size = 'place-bg-img'; // (thumbnail, medium, large, full or custom size)
            
                $place_bg_img = wp_get_attachment_image_src( $attachment_id,$size);echo  $place_bg_img[0];?>') no-repeat left bottom;background-size:100% auto;">
	<div class="container">
    	<div class="titleBox">
        	<h2><?php the_field('place_section_title');?></h2>
            <span>a cirque production</span>
        </div>
    	<div class="sec5_contBox">

 <?php if( have_rows('place_section_repeater_') ):
                 while ( have_rows('place_section_repeater_') ) : the_row();?>

            <div class="sec5_snglBox">
            	<div class="sec5_imgBox">
                <?php
                      $attachment_id = get_sub_field('place_section_image');
                      $size = "place-img"; // (thumbnail, medium, large, full or custom size)
                       $place_image = wp_get_attachment_image_src( $attachment_id, $size );
                        // url = $image[0];
                        // width = $image[1];
                        // height = $image[2];
                       ?>

                	<img src="<?php echo $place_image[0];?>"/>
                </div>
                <span><?php the_sub_field('place_section_title')?></span>
                <div class="sec5_contBox_hbrwrp clearfix">
                    <div class="hbrleft">
                       <?php if( have_rows('place_overlay_repeater') ):
                 while ( have_rows('place_overlay_repeater') ) : the_row();?>
                        <div class="singhbr">
                            <h5><?php the_sub_field('overlay_title');?></h5>
                            <p><?php the_sub_field('overlaya_description');?></p>
                        </div>
                    <?php endwhile; endif;?>
                        
                                         
                    </div>
                    <div class="hbrrght">
                        <h2><?php the_field('place_right_text');?></h2>
                    </div>
                </div>
            </div>
            <?php endwhile;endif;?>
    </div>
    </div>
</div>

<div id="tickets" class="sec6" style="background:#151c23 url('<?php 
                  
                  $attachment_id = get_field('ticket_bg_image');
                $size = 'ticket-image'; // (thumbnail, medium, large, full or custom size)
            
                $ticket_bg_img = wp_get_attachment_image_src( $attachment_id,$size);echo  $ticket_bg_img[0];?>') no-repeat right top;">
	<div class="container">
    	<div class="sec6Txt">
        	<h3>Tickets</h3>
            <h2>From <span>only r250</span></h2>
            <a class="sec6_pop" href="#sec6_popUp">Corporate bookings</a> &nbsp; <a class="sec6_pop" href="#sec6_popUp">group bookings</a> &nbsp; <a class="sec6_pop" href="#sec6_popUp">Seating plan</a> &nbsp; <a class="sec6_pop" href="#sec6_popUp">Specials/ discounts</a>
        </div>
        <div class="sec6_mainCont">
            <div class="row">
                <div class="col-sm-4">
                    <div class="sec6_snglBox">
                    	<a href="#sec6_popUp" class="sec6_snglTop sec6_pop">
							<h3>Both <span>Seats</span></h3>
                        </a>
                    	<div class="sec6_snglMid">
							<h3>Only R250</h3>
                        </div>
                        <a class="bookNow" href="#popUp">Book Now</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sec6_snglBox">
                    	<a href="#sec6_popUp" class="sec6_snglTop sec6_pop">
							<h3>Gold <span>Reserve</span></h3>
                        </a>
                    	<div class="sec6_snglMid">
							<h3>Only R350</h3>
                        </div>
                        <a class="bookNow" href="#popUp">Book Now</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sec6_snglBox">
                    	<a href="#sec6_popUp" class="sec6_snglTop sec6_pop">
							<h3>Vip <span>Seats</span></h3>
                        </a>
                    	<div class="sec6_snglMid">
							<h3>Only R450</h3>
                        </div>
                        <a class="bookNow" href="#popUp">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="media" class="mediaBox">
	<div class="container">
    	<div class="titleBox">
        	<h2>latest news &amp; media</h2>
            <span>a cirque production</span>
        </div>
    	<div class="media_itemBox">

                        <?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(
                       'post_type'=>'news',
                        'posts_per_page'=>3


                        ));
                      if ($ebit_post->have_posts()) {
                       
                        while ($ebit_post->have_posts() ) {
                         
                          $ebit_post->the_post();?>

        	<div class="mediaItem">
        		<div class="itemIn">
        			<a href="#mediaPop" class="media_pop"  data-postid="<?php the_id();?>"><?php the_post_thumbnail('media-img')?></a>
                    <div class="itemInner">
                        <a href="#mediaPop"  data-postid="<?php the_id();?>" class="media_pop"><h2><?php the_title();?></h2></a>
                        <?php the_excerpt();?>
                       
                    <a href="#mediaPop" data-postid="<?php the_id();?>" class="media_pop readMore">read more</a>
                       
                    </div>
        		</div>
        	</div>
            <?php }}?>
            
            
            
        </div>
    </div>
</div>

<div id="contact_us" class="formSec" style="background:#1a222b url('<?php 
                  
                  $attachment_id = get_field('place_section_bg_image');
                $size = 'form-image'; // (thumbnail, medium, large, full or custom size)
            
                $form_bg_img = wp_get_attachment_image_src( $attachment_id,$size);echo  $form_bg_img[0];?>') no-repeat center bottom;background-size:100% auto;">
    <div class="formBox">
        <h2>get in touch with us</h2>

        <?php echo do_shortcode('[contact-form-7 id="105" title="enchant form"]')?>
        <!--<form action="#" method="post">
            <div class="formInner">
                <div class="cmnBoxIn">
                    <input class="form-control" type="text" placeholder="Full name">
                </div>
                <div class="cmnBoxIn">
                    <input class="form-control" type="email" placeholder="Email">
                </div>
                <div class="cmnBoxIn">
                    <input class="form-control" type="tel" placeholder="Phone">
                </div>
                <div class="cmnBoxIn">
                    <input class="form-control" type="text" placeholder="Subject">
                </div>
                <div class="cmnBoxIn mgsBox">
                    <input class="form-control" type="text" placeholder="Message">
                </div>
            </div>
            <div class="submitBox">
                <input type="submit" value="submit">
            </div>           	
        </form>-->
	</div>
    
    <div class="footerBox">
    	<div class="container">
        	<div class="row">
                <div class="col-sm-4">
                	<a class="ftrLgo" href="#">
                     

                    <img src="<?php $ftr_logo=get_field('ftr_logo'); echo $ftr_logo['url']; ?>"/>
                        
                    </a>
                </div>
                
                <div class="col-sm-4 iconBox">
                	<ul class="ftrIcon">
                   		<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                   		<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                   		<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                   		<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                
                <div class="col-sm-4 copyBox">
                <span class="copyRgt"><?php the_field('banner_logo_text');?></span>
                
                </div>
        	</div>
        </div>
    </div>
</div>

<div id="popUp" class="popUp">
    <h2><?php the_field('popup_title');?></h2>
    <form class="checkout" action="#" method="post">
        <div class="textBoxWpr">
            <div class="textBox">
                <label>CARDHOLDER NAME</label>
                <input class="name" type="text" value="">
            </div>
            <div class="textBox">
                <label>CREDIT CARD NUMBER</label>
                <input class="crad" type="text" value="">
            </div>
            <div class="textBox halfLft">
                <label>EXP DATE</label>
                <div class="calendar">
                    <input id="datepicker" type="text" value="">
                </div>
            </div>
            <div class="textBox halfRgt">
                <label>CVV</label>
                <input type="text" value="">
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Subtotal</th>
                    <th align="right">R250</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Taxes</td>
                    <td align="right">0.0 AED</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td align="right">FREE</td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="Checkout"/>
    </form>
</div>

<div id="sec4_popUp" class="artist_pop">
	<div class="snglContBox">
        <div class="snglImgBox">
            <img src="<?php echo get_template_directory_uri();?>/images/sec_4_snglImg.png" alt="">
        </div>
        <div class="snglTxtBox">
            <h4>gladiator strength</h4>
            <p>Once upon a time, there was a beautiful Enchantress, with magical power. She lived in a beautiful...</p>
        </div>
    </div>
</div>

<div id="sec6_popUp" class="tickets_pop">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
            
<div id="mediaPop" class="itemIn mediaPopT">
<img src="<?php echo get_template_directory_uri();?>/images/mediaImg1.png" alt="">
    <h2><?php the_title();?></h2>
    <?php the_content();?>
</div>
  <?php wp_footer();?>          
</body>
</html>