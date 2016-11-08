<!doctype html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <?php
    $favicon = get_option('theme_favicon');
    if( !empty($favicon) )
    {
        ?>
        <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
        <?php
    }
    ?>

    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <!-- Pingback URL -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

        <!-- Start Header -->
        <div class="header-wrapper">

            <div class="container"><!-- Start Header Container -->

                <header id="header" class="clearfix">

                    <!-- Logo -->
                    <div id="logo">

                        <?php
                        $logo_path = get_option('theme_sitelogo');
                        if(!empty($logo_path)){
                            ?>
                            <a title="<?php  bloginfo( 'name' ); ?>" href="<?php echo home_url(); ?>">
                                <img src="<?php echo $logo_path; ?>" alt="<?php  bloginfo( 'name' ); ?>">
                            </a>
                            <h2 class="logo-heading only-for-print">
                                <a href="<?php echo home_url(); ?>"  title="<?php bloginfo( 'name' ); ?>">
                                    <?php  bloginfo( 'name' ); ?>
                                </a>
                            </h2>
                            <?php
                        }else{
                            ?>
                            <h2 class="logo-heading">
                                <a href="<?php echo home_url(); ?>"  title="<?php bloginfo( 'name' ); ?>">
                                    <?php  bloginfo( 'name' ); ?>
                                </a>
                            </h2>
                            <?php
                        }

                        $description = get_bloginfo ( 'description' );
                        if($description){
                            echo '<div class="tag-line"><span>';
                            echo $description;
                            echo '</span></div>';
                        }
                        ?>
                    </div>
					
					<div id="header-top" class="clearfix">
<?php
                        // Currency Switcher
//                        get_template_part( 'template-parts/header-currency-switcher' );		
?>					
					</div>

                    <div class="menu-and-contact-wrap">
                        <?php
                        $header_phone = get_option('theme_header_phone');
                        if( !empty($header_phone) ){
						
						    $desktop_version = '<span class="desktop-version">' . $header_phone . '</span>';
                            $mobile_version =  '<a class="mobile-version" href="tel://'.$header_phone.'" title="Make a Call">' .$header_phone. '</a>';

                            echo '<h2  class="contact-number "><i class="fa fa-phone"></i>'.  $desktop_version . $mobile_version .  '<span class="outer-strip"></span></h2>';
						}
                        ?>

                        <!-- Start Main Menu-->
                        <nav class="main-menu">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'clearfix'
                            ));
                            ?>
                        </nav>
                        <!-- End Main Menu -->
                            <div class="header-icon-sect">
                                <i class="fa fa-viber" style="color:#202BA6"></i>
                                <i class="fa fa-skype" style="color:blue"></i>
                                <i class="fa fa-whatsapp" style="color:#34af23"></i>
                            </div>
                        </div>

                </header>

            </div> <!-- End Header Container -->

        </div><!-- End Header -->
