<?php
                        /*Enqueue js and css*/


function enchant_scripts() {

wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/font-awesome.css' , array( ), '1.0' );
	
wp_enqueue_style( 'jquery-ui-css',get_template_directory_uri().'/css/jquery-ui.css',array(), null );

wp_enqueue_style( 'fancybox-css', get_template_directory_uri().'/css/fancybox.css' , array(), '1.0' );

wp_enqueue_style('mystyle', get_stylesheet_uri());

wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css' , array(), '1.0' );


 wp_enqueue_script('jquery' );

wp_enqueue_script( 'jquery-min', get_template_directory_uri().'/js/jquery.min.js', array(), '1.0', true );

wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/js/jquery-ui.js', array(), '1.0', true );

wp_enqueue_script( 'fancybox-js', get_template_directory_uri().'/js/fancybox.js', array(), '1.0', true );

wp_enqueue_script( 'popup-js', get_template_directory_uri().'/js/script.js', array(), '1.0', true );


wp_enqueue_script( 'main-js', get_template_directory_uri().'/js/js.js', array(), '1.0', true );
}	
add_action( 'wp_enqueue_scripts', 'enchant_scripts' );





                    /* Menu Registration*/

function enchanted_theme_support(){
  
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('about-img',732,728,true);
  add_image_size('about-sub-img',960,540,true);
   add_image_size('media-support-img',358,239,true);
   add_image_size('place-img',312,230,true);
   add_image_size('place-bg-img',1920,1108,true);
    add_image_size('media-img',414,276,true);
     add_image_size('form-image',1920,974,true);
     add_image_size('footer-logo',200,40,true);
      add_image_size('ticket-image',994,891,true);
 
  register_nav_menus(array(


  	'enchated_menu'=>'enchanted menu'

));
}
add_action('after_setup_theme','enchanted_theme_support');

function enchanted_fallback_menu(){
echo'<ul class="nav navbar-nav">';
	
echo'<li><a href="'.esc_url(home_url()).'">HomeEnchanted</a></li>';
echo'</ul>';
}




                              /*Custom Post register*/

  function enchant_custompost(){

	
  
register_post_type('news',array(

    'labels'=>array(
      'name'=>'news',
      'menu_name'=>'news',
      'all_items'=>'All news',
      'add_new'=>'Add New news',
      'add_new_item'=>'Add New news item'


      ),
    'public'=>true,
    'supports'=>array(
      'title','page-attributes','thumbnail','editor'
      )




    ));
}
add_action('init','enchant_custompost');




function my_load_ajax_content () {

    $pid        = intval($_POST['post_id']);
    $the_query  = new WP_Query(array('p' => $pid,
                                      'post_type'=>'news'

      ));

    if ($the_query->have_posts()) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();

            $data = '
            <div class="itemIn mediaPopT">
                <div id="mediaPop">
                    <h1 class="entry-title">'.get_the_title().'</h1>
                    <div class="entry-content">'.get_the_content().'</div>
                </div>
            </div>  
            ';

        }
    } 
    else {
        echo '<div id="postdata">'.__('Didnt find anything', THEME_NAME).'</div>';
    }
    wp_reset_postdata();


    echo '<div id="postdata">'.$data.'</div>';
}

add_action ( 'wp_ajax_nopriv_load-content', 'my_load_ajax_content' );
add_action ( 'wp_ajax_load-content', 'my_load_ajax_content' );