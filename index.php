<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();

$full_page = !is_category('blog');

?>

<?php if ($full_page) : ?>
<?php get_sidebar(); ?>
	<div class="column2">
<?php endif; ?>
	
	<?php 
	$home = is_home();
	if ($home) {
		query_posts('&meta_key=order&orderby=meta_value&cat=4');
		
	} 
	?>

	<?php if (have_posts()) : ?>
		
		<?php if ($home) {
				echo '<h2>Добро пожаловать!</h2>';
			} else if (is_category()) {
				echo '<h2>'.single_cat_title('', false).'</h2>';
			}
		?>
		
		<?php while (have_posts()) : the_post(); ?>

			<div class="line">
				<h3><?php the_title(); ?></h3>
				<?php the_content('[&nbsp;далее&nbsp;]'); ?>
			</div>
	
		<?php endwhile; ?>
	
	<?php if ($home) : ?>
	
	<?php query_posts('cat=3'); ?>
	
	<?php if (have_posts()) : ?>
		
		<h3>Свадебные статьи</h3>
		
		<div class="line">
		<?php while (have_posts()) : the_post(); ?>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<?php the_content('[&nbsp;далее&nbsp;]'); ?>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
	
	<?php endif; ?>
	
	<?php else : ?>
		
	<div class="line">
		<h2 class="center">Не найдено</h2>
		<p class="center">Простите, ни одной статьи найдено не было!</p>
	</div>

	<?php endif; ?>

<?php if ($full_page) : ?>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
