<?php
/*
 * Template Name: Blank Page
 * Description: A Page Template with a darker design.
 */

// Code to display Page goes here...
?>
<?php remove_filter ('the_content', 'wpautop'); 
	// This removes html that Wordpress sticks into your post
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<?php $title = get_post_meta($post->ID, 'Title', true);
if ($title) {
	// This allows me to use a "Title" custom field to set the page title.
?>
<title><?php echo $title; ?> | <?php bloginfo('name'); ?></title>
<?php }
?>
<link rel="shortcut icon" type="image/jpg" href="/x.jpg">
<link rel="apple-touch-icon-precomposed" href="/x.jpg">
<meta name="mobile-web-app-capable" content="yes" />
<link rel="alternate" type="application/rss+xml" title="X-RAY SIX TWO SEVEN &raquo; Feed" href="http://x627.com/feed/" />
<!--

 __   __            ____    ______   __    __      ____    ______  __   __      ______  __      __  _____       ____    ____    __  __  ____    __  __     
/\ \ /\ \          /\  _`\ /\  _  \ /\ \  /\ \    /\  _`\ /\__  _\/\ \ /\ \    /\__  _\/\ \  __/\ \/\  __`\    /\  _`\ /\  _`\ /\ \/\ \/\  _`\ /\ \/\ \    
\ `\`\/'/'         \ \ \L\ \ \ \L\ \\ `\`\\/'/    \ \,\L\_\/_/\ \/\ `\`\/'/'   \/_/\ \/\ \ \/\ \ \ \ \ \/\ \   \ \,\L\_\ \ \L\_\ \ \ \ \ \ \L\_\ \ `\\ \   
 `\/ > <     _______\ \ ,  /\ \  __ \`\ `\ /'      \/_\__ \  \ \ \ `\/ > <        \ \ \ \ \ \ \ \ \ \ \ \ \ \   \/_\__ \\ \  _\L\ \ \ \ \ \  _\L\ \ , ` \  
    \/'/\`\ /\______\\ \ \\ \\ \ \/\ \ `\ \ \        /\ \L\ \ \_\ \__ \/'/\`\      \ \ \ \ \ \_/ \_\ \ \ \_\ \    /\ \L\ \ \ \L\ \ \ \_/ \ \ \L\ \ \ \`\ \ 
    /\_\\ \_\/______/ \ \_\ \_\ \_\ \_\  \ \_\       \ `\____\/\_____\/\_\\ \_\     \ \_\ \ `\___x___/\ \_____\   \ `\____\ \____/\ `\___/\ \____/\ \_\ \_\
    \/_/ \/_/          \/_/\/ /\/_/\/_/   \/_/        \/_____/\/_____/\/_/ \/_/      \/_/  '\/__//__/  \/_____/    \/_____/\/___/  `\/__/  \/___/  \/_/\/_/

-->
<link rel="stylesheet" href="http://x627.com/brain/wp-content/themes/twentyfifteen-child/reset.css" type="text/css" media="all" />
<?php $stylesheet = get_post_meta($post->ID, 'Stylesheet', true);
if ($stylesheet) {
?>
<link rel="stylesheet" href="http://x627.com/brain/wp-content/themes/twentyfifteen-child/<?php echo $stylesheet; ?>.css" type="text/css" media="screen,projection,tv" />
<?php }
	//This allows me to use a "Stylesheet" custom field to link to a style sheet in the child them directory.
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