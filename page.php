<?php
get_header(); ?>

<?php get_sidebar(); ?>

	<div class="column2">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div class="line">
				<h2><?php the_title(); ?></h2>
				<?php the_content('[ далее ]'); ?>
			</div>
	
		<?php endwhile; endif; ?>
		
		<?php comments_template(); ?>

	</div>

<?php get_footer(); ?>
