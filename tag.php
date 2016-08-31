<?php get_header(); ?>
<h1><?php _e( 'Tag Archives: ', 'digitalsignagepress' ); ?><?php single_tag_title(); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
