<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container-fluid pt-3 pb-3 text-center">
      <div class="row">
        <div class="col-4 footer-copy-container">
          <img src="/wp-content/uploads/logo-footer.png" alt="<?php _e('SISCOVID logo','siscovid')?>">
          <div class="footer-info-container">
            &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
            <!-- <span class="sep"> | </span> -->
            <!-- <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><?php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a> -->
          </div><!-- close .site-info -->
        </div>
        <div class="col-4">
          <h3><?php _e('Menú','wpbchild');?></h3>
          <div class="footer-menu-container">
            <?php
              wp_nav_menu(array(
              'theme_location'  => 'footer-menu',
              'container'       => 'div',
              'container_id'    => 'footer-menu-container',
              'container_class' => '',
              'menu_id'         => false,
              'menu_class'      => 'footer-menu',
              'depth'           => 3,
              'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
              'walker'          => new wp_bootstrap_navwalker()
              ));
              ?>
          </div>
        </div>
        <div class="col-4">
          <h3><?php _e('Contáctanos','wpbchild');?></h3>
          <div class="footer-social-container">
            <a class="first-item facebook" href="https://www.facebook.com/siscovidcol/" target="_black"><i class="fab fa-facebook-f"></i> <?php _e('Facebook','wpbchild');?></a>
            <a class="twitter" href="https://twitter.com/siscovid" target="_black"><i class="fab fa-twitter"></i> <?php _e('Twitter','wpbchild');?></a>
            <a class="github" href="https://github.com/Proyecto-COVID-19" target="_black"><i class="fab fa-github"></i> <?php _e('Github','wpbchild');?></a>
            <a class="last-item mail" href="mailto:siscovid@uniandes.edu.co"><i class="fas fa-envelope"></i><?php _e('siscovid@uniandes.edu.co','wpbchild')?></a>
            <!-- <a class="last-item instagram" href="https://www.instagram.com/siscovid/" target="_black"><i class="fab fa-instagram"></i> <?php _e('Instagram','wpbchild');?></a> -->
          </div>
        </div>
      </div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>