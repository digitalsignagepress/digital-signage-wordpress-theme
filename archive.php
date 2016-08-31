<?php get_header(); ?>
<h1><?php
if ( is_day() ) { printf( __( 'Daily Archives: %s', 'digitalsignagepress' ), get_the_time( get_option( 'date_format' ) ) ); }
elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'digitalsignagepress' ), get_the_time( 'F Y' ) ); }
elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'digitalsignagepress' ), get_the_time( 'Y' ) ); }
else { _e( 'Archives', 'digitalsignagepress' ); }
?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
