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