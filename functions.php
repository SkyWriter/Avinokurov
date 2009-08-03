<?php
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		));
	}


	function av_comment_callback($comment, $args, $depth)
	{
		$GLOBALS['comment'] = $comment;
		comment_text();
		echo '<br /><br /><hr /><br /><br />';
	}
?>