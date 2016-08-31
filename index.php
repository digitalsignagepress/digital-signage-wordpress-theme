<?php get_header(); ?>
    <main role="main">
      <!-- <?php wp_list_comments( $args ); ?> -->

        <?php if ( have_posts() ) {
            /* Start the Loop */
            while ( have_posts() ) {
                the_post();
                get_template_part( 'content', get_post_format() );
                if ( has_post_thumbnail() ) {
            the_post_thumbnail('thumbnail', array( 'title' => get_the_title() ) );
             }
            }
        }
        the_posts_pagination( array( 'type' => 'list' ) ); ?>
        <?php the_tags(); ?>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
