<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Goodz Magazine
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" 
      type="image/png" 
      href="/favicon.ico">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- start nav bar -->
	<nav class="navbar navbar-default" role="navigation">
	    <div class="container-fluid col-sm-12">
		  	<div class="row">
		    	<div class="col-sm-5 center-block">
		    		<!-- menu links inserted -->
		        <?php
		            wp_nav_menu( array(
		                'menu'              => 'business',
		                'theme_location'    => 'business',
		                'depth'             => 1,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		        		'container_id'      => 'bs-example-navbar-collapse-1',
		                'menu_class'        => 'nav navbar-nav center',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
			    </div>
		    	<div class="navbar-header col-sm-2 center-block">
		      		<a href="<?php echo home_url(); ?>">
		            	<img class="img-responsive center-block" id="header-logo" src="/wp-content/colab-logo.png">
		        	</a>
		    	</div>
			    <div class="navbar-header center-block">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
		    	<div class="col-sm-5 center-block">
		    		<!-- Menu links inserted -->
		        <?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 1,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		        		'container_id'      => 'bs-example-navbar-collapse-2',
		                'menu_class'        => 'nav navbar-nav center',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
			    </div>
			</div>
		</div>
	</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
