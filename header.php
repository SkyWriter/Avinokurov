<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="copyright" content="© 2005-2009 Алексей Винокуров" />
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<link rel="Shortcut Icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<?php wp_head(); ?>
</head>

<body id="page1">
	<div id="main">
		<!--header -->
		<div id="header">
			<div class="container">
				<div class="left"><a href="http://avinokurov.ru/"><img alt="свадебный фотограф москва" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.gif" /></a>
				</div>
				<div class="right">
					<ul class="menu">
						<li><a href="http://avinokurov.ru/">Главная</a></li>
						<li><a href="http://avinokurov.ru/services/">Услуги</a></li>
						<li><a href="http://avinokurov.ru/portfolio/">Портфолио</a></li>
						<li><a href="http://avinokurov.ru/articles/">Статьи</a></li>
						<li><a href="http://awedding.ru/blog/">Блог</a></li>
						<li><a href="http://avinokurov.ru/contact/">Контакты</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!--header end-->
		<div id="content">
			<div class="container">
