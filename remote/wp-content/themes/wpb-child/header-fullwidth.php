<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container-fluid">
                <nav class="row navbar navbar-expand-xl">
                    <div class="col-lg-5 col-sm-6 col-8 offset-lg-1">
                        <div class="navbar-brand">
                            <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                                <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                    <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                                </a>
                            <?php else : ?>
                                <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6 col-4 offset-lg-1 menu-column">
                        <div class="row">
                            <div class="col-12 topbar d-flex justify-content-end align-items-end .align-items-sm-center flex-sm-row flex-column">
                                <div class="contact-info">
                                    <span class="contact-email">
                                        <a href="mailto:siscovid@hotmail.com"><i class="fas fa-envelope"></i> siscovid@hotmail.com</a>
                                    </span>
                                </div>
                                <div class="social-info">
                                    <a class="first-item facebook" href="https://www.facebook.com/siscovidcol/" target="_black"><i class="fab fa-facebook-f"></i></i></a>
                                    <a class="twitter" href="https://twitter.com/siscovid" target="_black"><i class="fab fa-twitter"></i></a>
                                    <a class="last-item github" href="https://github.com/Proyecto-COVID-19" target="_black"><i class="fab fa-github"></i></a>
                                    <!-- <a class="last-item instagram" href="https://www.instagram.com/siscovid/" target="_black"><i class="fab fa-instagram"></i></a> -->
                                </div>
                            </div>
                            <div class="col-12 navbar-container">
                                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-custom-toggler-icon"></span>
                                </button>
                                <?php
                                wp_nav_menu(array(
                                'theme_location'    => 'primary',
                                'container'       => 'div',
                                'container_id'    => 'main-nav',
                                'container_class' => 'collapse navbar-collapse justify-content-end',
                                'menu_id'         => false,
                                'menu_class'      => 'navbar-nav',
                                'depth'           => 3,
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker()
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
	</header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h1>
                    <?php
                    if(get_theme_mod( 'header_banner_title_setting' )){
                        echo get_theme_mod( 'header_banner_title_setting' );
                    }else{
                        echo 'WordPress + Bootstrap';
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' )){
                        echo get_theme_mod( 'header_banner_tagline_setting' );
                }else{
                        echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                    }
                    ?>
                </p>
                <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>
    <?php endif; ?>
	<div id="content" class="site-content">
		<div class="container-fluid">
			<div class="row">
                <?php endif; ?>