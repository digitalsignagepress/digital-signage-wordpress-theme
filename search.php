<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<h1><?php printf( __( 'Search Results for: %s', 'digitalsignagepress' ), get_search_query() ); ?></h1>

<?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; ?>

<?php else : ?>

<h2><?php _e( 'Nothing Found', 'digitalsignagepress' ); ?></h2>
<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'digitalsignagepress' ); ?></p>
<?php get_search_form(); ?>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
