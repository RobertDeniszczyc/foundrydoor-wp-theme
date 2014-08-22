<?php get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <article role="main" class="primary-content type-post" id="post-<?php the_ID(); ?>">
            <div class="guest-content">
                <div class="splash">
                    <div class="splash__title__container">
                        <div class="splash__title">
                            <h1><?php echo get_the_title(); ?></h1>
                            <p>by <?php the_field('post_author'); ?> </p>
                            <p>Published on <time datetime="<?php the_time('l, F jS, Y') ?>" pubdate><?php the_time('l, F jS, Y') ?></time></p>
                            <hr class="invert">
                        </div>
                    </div>
                    <img class="splash__image" src="<?php the_field('splash_image'); ?>" alt=""/>
                </div>  
                <div class="article__content">
                    <?php the_content(); ?>
                    <hr>
                </div>
            </div>
                
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>

            <footer class="entry-meta">
                <p>Words by <?php the_author_meta( user_firstname ); echo " "; the_author_meta( user_lastname) ?> </p>
            	<p>Published on <time datetime="<?php the_time('l, F jS, Y') ?>" pubdate><?php the_time('l, F jS, Y') ?></time> &middot; <a href="<?php the_permalink(); ?>">Permalink</a></p>
            </footer>

			<?php comments_template( '', true ); ?>

            <?php endwhile; // end of the loop. ?>
        </article>

<?php get_footer(); ?>