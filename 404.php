<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_header(); ?>


	<div class="internal_header">
		<div class="inner">
			<span class="pro">former prosecutor now</span>
			<span class="fight">fighting for you</span>
			<a href="#form_anchor" class="start-btn2"></a>
		</div><!-- inner -->
	</div><!-- internal_header -->

	<div class="internal_page_content">
		<div class="inner">
			<h1><?php the_title(); ?>
			     PAGE NOT FOUND
				<?php if(is_page('case-results')) { ?>
				<span>recent notable results-all within the past 12 months</span>
				<?php } ?>
			</h1>

		<div class="group">
			<div class="internal_sidebar">
				<?php dynamic_sidebar('internal practice'); ?>
			</div>

			<div class="internal_feature">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
				
				<?php endif; ?>
			</div>
		</div><!-- group -->

		<div class="logo_row">
			 <a href="http://www.avvo.com/attorneys/80903-co-steven-rodemer-1404869.html?utm_campaign=avvo_rating&utm_content=1404869&utm_medium=avvo_badge&utm_source=avvo" target="_blank" class="avvo_btn"></a>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/awards2.png" alt="">
		</div><!-- logo_row -->


		</div><!-- inner -->
	</div><!-- page_content -->

<?php get_footer(); ?>