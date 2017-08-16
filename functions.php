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
register_post_type('ticket',array(

    'labels'=>array(
      'name'=>'ticket',
      'menu_name'=>'ticket',
      'all_items'=>'All ticket',
      'add_new'=>'Add New ticket',
      'add_new_item'=>'Add New ticket item'


      ),
    'public'=>true,
    'supports'=>array(
      'title','page-attributes','thumbnail','editor'
      )




    ));
}
add_action('init','enchant_custompost');


function enchant_theme2 () {
  // header('Content-Type: application/json');
    $pid        = ($_POST['postid']);
   $the_query  = new WP_Query(array('p' => $pid,
                                       'post_type'=>'news'

      ));

  if ($the_query->have_posts()) {
     while ( $the_query->have_posts() ) {
           $the_query->the_post();

           $data = array('title' => get_the_title(), 'content'=>get_the_content(), 'attachment' => get_the_post_thumbnail());

           // echo json_encode($data);


          $data = '
                  '.get_the_post_thumbnail().'
                  <h1 class="entry-title">'.get_the_title().'</h1>
                  '.get_the_content().'
 
          ';
          echo $data;
           die();

        }
    } 
     else {
         echo '<div id="mediaPop">'.__('Content not found.', THEME_NAME).'</div>';
      // return json_encode(array('status'=>false));
         die();
     }
     wp_reset_postdata();


     echo $data;
}


add_action( 'wp_ajax_enchant_theme2', 'enchant_theme2' );
add_action( 'wp_ajax_nopriv_enchant_theme2', 'enchant_theme2' );
//add_action ( 'pre_get_posts', 'my_load_ajax_content' );
// add_action ( 'wp_ajax_load-content', 'my_load_ajax_content' );
// my_load_ajax_content

                 /*Ticket popup*/

function enchant_ticketpopup() {
  // header('Content-Type: application/json');
    $tickpid        = ($_POST['tickpostid']);
   $the_query  = new WP_Query(array('p' =>  $tickpid,
                                       'post_type'=>'ticket'

      ));

  if ($the_query->have_posts()) {
     while ( $the_query->have_posts() ) {
           $the_query->the_post();

           // $data = array('title' => get_the_title(), 'content'=>get_the_content(), 'attachment' => get_the_post_thumbnail());

           // echo json_encode($data);


          $data = '
                  
                  
                  '.get_the_content().'
 
          ';
          echo $data;
           die();

        }
    } 
     else {
         echo '<div id="sec6_popUp">'.__('Content not found.', THEME_NAME).'</div>';
      // return json_encode(array('status'=>false));
         die();
     }
     wp_reset_postdata();


     echo $data;
}


add_action( 'wp_ajax_enchant_ticketpopup', 'enchant_ticketpopup' );
add_action( 'wp_ajax_nopriv_enchant_ticketpopup', 'enchant_ticketpopup' );




// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     unset($fields['order']['order_comments']);
     unset($fields['order']['comments_label']);
     unset($fields['billing']['billing_first_name']);
     unset($fields['billing']['billing_last_name']);
      unset($fields['billing']['billing_company']);
      unset($fields['billing']['billing_address_1']);
       unset($fields['billing']['billing_address_2']);
    
      unset($fields['billing']['billing_country']);
      unset($fields['billing']['billing_city']);
       unset($fields['billing']['billing_email']);
        unset($fields['billing']['billing_city']);
         unset($fields['billing']['billing_phone']);
          unset($fields['billing']['billing_state']);
          unset($fields['billing']['billing_postcode']);
          
          

     return $fields;
}
// Hook in
/*add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields_update' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields_update( $fields ) {
     $fields['billing']['billing_first_name']['placeholder'] = 'Write your full name';
     $fields['billing']['billing_first_name']['label'] = 'Card Holder Full Name';
      
     return $fields;
} */


function enchant_add_to_cart() {
  global $woocommerce;
  $productID = (int) $_POST['product_id'];
  // $product = get_posts( $productID );
  // print_r($product);
  if( $productID ){
    $product = get_posts( $productID );

    if( count( $product ) ) {

      if(WC()->cart->get_cart_contents_count() != 0){
        $woocommerce->cart->empty_cart();
      }
      
      else{$woocommerce->cart->add_to_cart( $productID );}
      
      
    }

    echo do_shortcode('[woocommerce_checkout]');
    //$woocommerce->cart->empty_cart();
  } else {
    echo 'no';
  }
  die();
}


add_action( 'wp_ajax_enchant_add_to_cart', 'enchant_add_to_cart' );
add_action( 'wp_ajax_nopriv_enchant_add_to_cart', 'enchant_add_to_cart' );


// hide coupon field on checkout page
function hide_coupon_field_on_checkout( $enabled ) {
  // if ( is_checkout() ) {
    $enabled = false;
  // }
  return $enabled;
}
add_filter( 'woocommerce_coupons_enabled', 'hide_coupon_field_on_checkout' );

add_filter( 'woocommerce_product_tabs', 'bbloomer_remove_product_tabs', 98 );
 
function bbloomer_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] ); 
    return $tabs;
}

/**
 * Add the field to the checkout
 */
// add_action( 'woocommerce_before_order_notes', 'my_custom_checkout_field' );

// function my_custom_checkout_field( $checkout ) {

//     echo '<div id="my_custom_checkout_field"><h2>' . __('CheckOut') . '</h2>';

//     woocommerce_form_field( 'my_field_name', array(
//         'type'          => 'text',
//         'class'         => array('textBoxWpr textBox'),
//         'label'         => __('Card Holder Full Name'),
//         'placeholder'   => __('Enter Full Name'),
//         ), $checkout->get_value( 'my_field_name' ));

//     echo '</div>';

// }