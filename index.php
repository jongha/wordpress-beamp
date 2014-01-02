<?php
/**
 * The index
 *
 * @version 1.0
 * @package Beamp
 * @author Jong-Ha Ahn <jongha.ahn@mrlatte.net>
 * @link https://github.com/jongha/wordpress-beamp
 * @since Beamp 1.0
 */
?>
<!--?php touch("/home/hosting_users/beamp/www/wp-content/themes/beamp/front-page.php"); ?-->
<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<!-- item -->
		<div id="post-<?php the_ID(); ?>">
			<div>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<div><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></div>
			</div>
			<div>
				<?php the_content('Read more &raquo;'); ?>
			</div>
			<small>
				<span>Filed under: <?php the_category(', ') ?> <? if(!is_single()) echo "|"; ?> <?php edit_post_link('Edit', '', ' | '); ?> <?php comments_popup_link('Comment (0)', ' Comment (1)', 'Comments (%)'); ?></span>
				<?php if ( function_exists('wp_tag_cloud') ) : ?>
				<?php the_tags('<span>Article tags: ', ', ' , '</span>'); ?>
				<?php endif; ?>
			</small>
		 </div>
		<!-- end item -->
		<?php comments_template(); // Get wp-comments.php template ?>
	<?php endwhile; ?>

	<div>
		<div><?php next_posts_link('&laquo; Previous Entries') ?></div>
		<div><?php previous_posts_link('Next Entries &raquo;') ?></div>
	</div>

<?php else : ?>
	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>

<div><?php get_sidebar(); ?></div>
<?php get_footer(); ?>