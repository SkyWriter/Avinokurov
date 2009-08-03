<div class="column1 col-pad">
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

				<A HREF="http://www.avinokurov.ru">
					<img src="/tmp/001.jpg" alt="cвадебная фотография" title="cвадебная фотография">
				</A><br />

			<?php endif; ?>

					<div class="indent">
						<h4>+7 916 741 2747 | <a href="/contact/">написать письмо</A></h4>
					</div>


					<div class="boxwhite"><strong>отзыв:</strong><br><i>
			<?php
				$comments = get_comments( array('post_id' => 14, 'status' => 'approve', 'order' => 'DESC', 'limit' => 1) );
				print $comments[0]->comment_content;
			?>
					</i><BR><div align="right"><a href="/feedback/" class="margin1">все отзывы</A></div></div>
					<div class="box">		
						<h3>Свадебные фотографии</h3>
						<div class="small">свадебные фотоистории</div>
						<ul>
							<li><a href="/gang_wedding.php" target="_blank">Гангстерская ретро свадьба</a><br>
							 Гангстерская ретро свадьба 30-х годов, где было все! И похищение невесты за карточный долг, и выкуп невесты через игру в покер, и вооруженное ограбление склада со спиртным, и разбросанные кровавые доллары и все все все</li>
						</ul>
						<a href="/portfolio/wedding/" class="link">Другие свадебные фотосессии</a>
					</div>
					
					<div class="indent">
						<?php
							$cat_query = new WP_Query('cat=7');
							if ($cat_query->have_posts()) : ?>
						<h3 class="title">Другие работы</h3>
						<ul>
						<?php while ($cat_query->have_posts()) : $cat_query->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; ?>
						</ul>
						<?php endif; ?>
					</div>
					<div class="indent">
						<h3 class="title">Мои рекомендации</h3>
						<ul>
							<?php wp_list_bookmarks("category=6&title_li=&categorize=0"); ?>
						</ul>
					</div>
				</div>
