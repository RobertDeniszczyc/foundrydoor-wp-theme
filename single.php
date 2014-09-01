<?php get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <article role="main" class="primary-content type-post" id="post-<?php the_ID(); ?>">
            <div class="guest-content">
                <?php
            $splash_image = get_field('splash_image');
            if ($splash_image!='') {
            ?>
                <div class="splash">
                   <div class="splash__title__container">
                        <div class="splash__title">
                            <h1><?php echo get_the_title(); ?></h1>
                            <p>by <?php the_field('post_author'); ?> </p>
                            <p>Published on <time datetime="<?php the_time('l, F jS, Y') ?>" pubdate><?php the_time('l, F jS, Y') ?></time></p>
                            <hr class="invert">
                            <p>&#9660;</p>
                        </div>
                    </div>
                    <img class="splash__image" src="<?php the_field('splash_image'); ?>" alt=""/>
                </div>
                <?php } else { ?>
                    <div class="article__title">
                        <h1><?php echo get_the_title(); ?></h1>
                        <p>by <?php the_field('post_author'); ?> </p>
                        <p>Published on <time datetime="<?php the_time('l, F jS, Y') ?>" pubdate><?php the_time('l, F jS, Y') ?></time></p>
                        <hr>
                    </div>
                <?php
                    }  
                ?>
                <div class="article__content">
                    <?php the_content(); ?>
                    <br />
                </div>
            </div>
                
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>

            <footer class="entry-meta">
                <p>Words by <?php the_field('post_author'); ?></p>
            	<p>Published on <time datetime="<?php the_time('l, F jS, Y') ?>" pubdate><?php the_time('l, F jS, Y') ?></time> &middot; <a href="<?php the_permalink(); ?>">Permalink</a></p>
            </footer>

			<?php comments_template( '', true ); ?>

            <?php endwhile; // end of the loop. ?>
        </article>

<?php get_footer(); ?>