<?php
/**
 * View template.
 *
 * @package WPZ_menu_Blocks
 *
 * @var string $class_name
 * @var WP_Query $query
 * @var array $args {
 *     @type string $class_name
 *     @type WP_Query $query
 * }
 */

?>
	<?php if ( $query->have_posts() ) : ?>
		<?php while ( $query->have_posts() ) : ?>
			<?php $query->the_post(); ?>
			<header class="c-entry__header">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</header>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
