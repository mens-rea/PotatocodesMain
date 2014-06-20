<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


   			<div id="body" style="text-align: center; padding-top: 100px;">
			<div class="page-wrapper">
				<div class="page-content" style="text-align: center;">
					<img src="<?php bloginfo('template_directory'); ?>/images/scream.png" class="image404">
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

			<h1 class="header404">404</h1>
			<h3 class="subheader404">LOST? THIS IS THE <a href="<?php bloginfo('url')?>">WAY OUT <img src="<?php bloginfo('template_directory');?>/images/arrow404.png"></a></h3>

			</div>

			

<?php get_footer(); ?>