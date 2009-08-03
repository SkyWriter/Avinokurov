<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); 

$full_page = !in_category('portfolio') && !in_category('articles') && !in_category('blog');
?>

<?php if ($full_page) : ?>
	<?php get_sidebar(); ?>
		<div class="column2">
<?php endif; ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<h2><?php the_title(); ?></h2>
		
		<?php the_content(); ?>
		
	<?php endwhile; endif; ?>
		
<?php if ($full_page) : ?>
	</div>
<?php endif; ?>

<?php
	if (in_category('blog')) {
		echo '<br /><br />';
		comments_template();
	}
?>

<?php get_footer(); ?>
