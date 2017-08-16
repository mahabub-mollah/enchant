<?php get_header();?>

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
                    <?php endwhile; endif;
                    wp_reset_query();?>
                        
                                         
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
            <?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(
                       'post_type'=>'ticket',
                        


                        ));
                      if ($ebit_post->have_posts()) {
                       
                        while ($ebit_post->have_posts() ) {
                         
                          $ebit_post->the_post();?>
                          <a class="sec6_pop" href="#sec6_popUp" data-postid=<?php the_id();?>><?php the_title();?></a> 
            
        <?php }}
       wp_reset_query();?>

        </div>
        <div class="sec6_mainCont">
            <div class="row">

            <?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(
                       'post_type'=>'product',
                        


                        ));
                      if ($ebit_post->have_posts()) {
                       
                        while ($ebit_post->have_posts() ) {
                         
                          $ebit_post->the_post();?>

                          <div class="col-sm-4">
                    <div class="sec6_snglBox">
                        <a href="#sec6_popUp" class="sec6_snglTop sec6_pop">
                            <h3><?php the_title();?></span></h3>
                        </a>
                        <div class="sec6_snglMid">
                            <h3><?php
                            echo get_post_meta(get_the_ID(), '_regular_price')[0];

                            // foreach($metas as $meta=>$k){
                            //     // for($i = 0; $i <= 1; $i ++){
                            //     //     break;
                            //     // }
                               
                            // }
                            // $metas[0]['_regular_price'];
                             ?></h3>
                        </div>
                        <a class="bookNow" href="#popUp" role="<?php echo get_the_ID(); ?>">Book Now</a>
                    </div>
                </div>

                          <?php }}?>

























            <!-- <?php if(have_rows('ticket_repeat')){
                while(have_rows('ticket_repeat')){ the_row();?>
                <div class="col-sm-4">
                    <div class="sec6_snglBox">
                        <a href="#sec6_popUp" class="sec6_snglTop sec6_pop">
                            <h3><?php the_sub_field('repeter_text');?></h3>
                        </a>
                        <div class="sec6_snglMid">
                            <h3>RS<?php the_sub_field('repeter_price');?></h3>
                        </div>
                        <a class="bookNow" href="#popUp"><?php the_sub_field('repeater_buttontext');?></a>
                    </div>
                </div>
                <?php }}?> -->
                
                
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
            <?php }}
           wp_reset_query();?>
            
            
            
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

   

<div id="popUp" class="popUp">
    <!-- <form class="checkout" action="#" method="post">
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
    </form> -->
   
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
    
</div>
         
<div id="mediaPop" class="itemIn mediaPopT">

</div>
 <?php get_footer();?> 
  <?php wp_footer();?> 


</body>
</html>