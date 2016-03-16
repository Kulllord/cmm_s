<?php
/**
 * Template Name: Testing Template 1
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CodeMastermind_Theme
 */

get_header(); ?>

<?php

$textContent = array();

$textContent['Starts_With_p_Tag'] = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$textContent['Ends_With_p_Tag'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
$textContent['Has_p_Tags'] = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';



function pure_text( $content ) {
	return htmlspecialchars($content);
}

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div style="margin: 0 25px;">
			<?php foreach ( $textContent as $title => $text ) :
				$returned = cmmp_remove_wpautop_debug( $text, true ); ?>
			<div>
				<h3><?php echo $title; ?></h3>
				<h4>original</h4>
				<div>
					<code><?php echo pure_text( $text ); ?></code>
				</div>
				<h4>parsed</h4>
				<?php
				foreach ( $returned as $title_2 => $output ) : ?>
					<h5><?php echo $title_2; ?></h5>
					<div>
						<code><?php echo pure_text( $output ); ?></code>
					</div>
				<?php endforeach; ?>
			</div>
			<?php endforeach; ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
