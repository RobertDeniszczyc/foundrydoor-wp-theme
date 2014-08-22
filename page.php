<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article role="main" class="primary-content type-page" id="post-<?php the_ID(); ?>">
        <div class="single-page">
        <?php if ( is_front_page() ) { ?>
            <h1><?php the_title(); ?></h1>
        <?php } else { ?>
            <h1><?php the_title(); ?></h1>
        <?php } ?>

        <?php the_content(); ?>

		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>

        <?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
        

        <?php endwhile; ?>
        </div>
    </article>

<?php get_footer( 'no-sidebar' ); // will include footer-no-sidebar.php; ?>
