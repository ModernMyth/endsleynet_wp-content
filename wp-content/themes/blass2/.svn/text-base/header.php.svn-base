<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if (is_home()) { ?>
	<title><?php bloginfo('name'); ?> &mdash; <?php bloginfo('description'); ?></title>

	<?php } elseif(is_category() or is_archive() or is_page() or is_single() or is_404() ) { ?>
	<title><?php wp_title(''); ?> &mdash; <?php bloginfo('name'); ?></title>

         <?php } elseif(is_search() ) { ?>
	<title>Serach results &mdash; <?php bloginfo('name'); ?></title>

	<?php } else { ?>
	<title> <?php wp_title(); ?> &mdash; <?php bloginfo('name'); ?></title>
	<?php } ?>


<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

<?php wp_get_archives('type=monthly&format=link'); ?>

<?php wp_head(); ?>

</head>

<body>

<div ><a name='up' id='up'></a></div>

<div id="wrapper">


		<div id="header">


                        <ul id="nav">


					<li class="page_item"><a href="<?php bloginfo('url'); ?>">Home</a></li>

				      <?php wp_list_pages('depth=1&title_li='); ?>

                        </ul>

				<p class="description">

					<?php bloginfo('description'); ?>
				</p>

				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>



		</div>