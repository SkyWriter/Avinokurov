<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

<?php get_sidebar(); ?>

	<div class="column2">
	
	<?php if (have_posts()) : ?>
		<?php echo '<h2>'.single_cat_title('', false).'</h2>'; ?>
		<?php while (have_posts()) : the_post(); ?>

			<div class="line">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_content('[&nbsp;далее&nbsp;]'); ?>
			</div>
	
		<?php endwhile; ?>
	
	<?php else : ?>
		
	<div class="line">
		<h2 class="center">Не найдено</h2>
		<p class="center">Простите, ни одной статьи найдено не было!</p>
	</div>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>
