<?php
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'before_widget' => '<div class="indent">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));
	}


	function av_comment_callback($comment, $args, $depth)
	{
		$GLOBALS['comment'] = $comment;
		comment_text();
		echo '<br /><br /><hr /><br /><br />';
	}
?>