<!DOCTYPE html>

<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js ie ie7"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js ie ie8"><![endif]-->
<!--[if IE 9]><html <?php language_attributes(); ?> class="no-js ie ie9"><![endif]-->
<!--[if !IE]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <!--[if IE]>
			
        <![endif]-->
        <?php wp_head(); ?>
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		
		<!-- OnFocus OnBlur GravityForms -->
		<script type="text/javascript">

		jQuery(document).ready(function() {

			jQuery.fn.cleardefault = function() {
			return this.focus(function() {
				if( this.value == this.defaultValue ) {
					this.value = "";
				}
			}).blur(function() {
				if( !this.value.length ) {
					this.value = this.defaultValue;
				}
			});
		};
		jQuery(".clearit input, .clearit textarea").cleardefault();

		});

		</script>

		<script>
			var ua = window.navigator.userAgent;
	        var msie = ua.indexOf("MSIE ");
			if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
			 $("html").addClass("ie");
			}
		</script>

    </head>
    
	<body <?php body_class(); ?>>
		<div class="wrapper">
			
			<header id="main-header" class="container">
				<div class="">
					<span id="mobile-menu-icon" class="icon-menu"></span>
					<div id="branding">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/b2buy-logo.png" alt="B2Buy Logo" /></a>
					</div>
				</div>
				<nav id="main-menu">
					<div class="menu-container">
						<div class="header-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>
						</div>
					</div>

					<footer>
						<div class="header-bottom">
							<?php get_template_part('parts/social-media'); ?>
							<?php get_template_part('parts/footer-nav'); ?>
						</div>
					</footer>
				</nav>

			
			</header>
			