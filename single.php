<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); 

?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<h2><?php the_title(); ?></h2>
		
		<?php the_content(); ?>
		
	<?php endwhile; endif; ?>
		
<?php
	echo '<br /><br />';
	comments_template();
?>

<?php get_footer(); ?>
