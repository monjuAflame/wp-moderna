<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title('|','true','right'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 

<!-- css -->


<!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
        <?php
            $site_logo = $test_input = ot_get_option( 'logo_name' );
        ?>
                    <a class="navbar-brand" href="index.html"><?php echo $site_logo;  ?></a>
                </div>
                <div class="navbar-collapse collapse ">


			<?php
					wp_nav_menu(array(

						'theme_location' => 'main_menu',
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => 'moderna_fallback_menu'
						));
				?>


				
                </div>
            </div>
        </div>
	</header>