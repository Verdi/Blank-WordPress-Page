<?php
/*
 * Template Name: Blank Page
 * Description: This WordPress page template removes all of the special WordPress html from a page so that you can write whatever html you want between the body tags and style it with it's own css file.  
 */
?>
<?php remove_filter ('the_content', 'wpautop'); 
	// This removes extra html (like <p> tags) that Wordpress sticks into your post
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<?php $title = get_post_meta($post->ID, 'Title', true);
if ($title) {
	// This allows you to use a "Title" custom field to set the page title.
?>
<title><?php echo $title; ?> | <?php bloginfo('name'); ?></title>
<?php }
?>
<link rel="shortcut icon" type="image/jpg" href="LINK TO YOUR SHORTCUT ICON">
<link rel="apple-touch-icon-precomposed" href="LINK TO YOUR SHORTCUT ICON">
<meta name="mobile-web-app-capable" content="yes" />
<link rel="alternate" type="application/rss+xml" title="WEBSITE NAME &raquo; Feed" href="http://WEBSITEURL/feed/" />
<link rel="stylesheet" href="URL OF YOUR CHILD THEME DIRECTORY/reset.css" type="text/css" media="all" /><!-- I use Eric Meyer's http://meyerweb.com/eric/tools/css/reset/reset.css -->
<?php $stylesheet = get_post_meta($post->ID, 'Stylesheet', true);
if ($stylesheet) {
?>
<link rel="stylesheet" href="URL OF YOUR CHILD THEME DIRECTORY<?php echo $stylesheet; ?>.css" type="text/css" media="screen,projection,tv" />
<?php }
	//This allows you to use a "Stylesheet" custom field to link to a style sheet in the child them directory.
?>
</head>

<body <?php body_class(); ?>>
	
		<?php
		// Start the loop.
		// The post content will get inserted, as written, between the body tags.
		while ( have_posts() ) : the_post();
		?>

				<?php the_content(); ?>


		<?php
		// End the loop.
		endwhile;
		?>
		
</body>
</html>
