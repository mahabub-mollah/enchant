 <div class="footerBox">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a class="ftrLgo" href="#">
                    <?php
                   $attachment_id = get_field('footer_logo');
                   $size = "footer-logo"; // (thumbnail, medium, large, full or custom size)
                   $footer_image = wp_get_attachment_image_src($attachment_id, $size );
                   ?>

                  <img  alt="" src="<?php echo $footer_image[0];?>"/>
                        
                    </a>
                </div>
                
                <div class="col-sm-4 iconBox">
                    <ul class="ftrIcon">
                    <?php 
                    if( have_rows('foter_repeater_options') ):
                 while ( have_rows('foter_repeater_options') ) : the_row();

                    ?>
                        <li><a href="<?php the_sub_field('repeater_url');?>"><i class="fa <?php the_sub_field('repeater_font_awesome_class');?> " aria-hidden="true"></i></a></li>
                    <?php endwhile;endif;
                    wp_reset_postdata();?>
                        
                    </ul>
                </div>
                
                <div class="col-sm-4 copyBox">
                    <span class="copyRgt"><?php the_field('footer_copyright_text');?></span>
                </div>
            </div>
        </div>
    </div>

                
               