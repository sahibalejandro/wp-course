<?php
/**
 * Main Header.
 *
 * @package WordPressCourse
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav>
		<?php wp_nav_menu( 'main-menu' ); ?>
	</nav>
