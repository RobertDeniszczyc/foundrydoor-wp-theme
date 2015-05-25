<?php 
/*
Template Name: Archive
*/
get_header(); ?>
	<div class="single-page">	
	<ul class="ul--archive">
	<?php
		$args = array( 'numberposts' => '30' );
		$recent_posts = wp_get_recent_posts( $args );
		foreach( $recent_posts as $recent ){
			$post_title = $recent["post_title"];
			$post_date = mysql2date(get_option("date_format"), $recent["post_date"]);
			echo '<li><h1><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($post_title).'" >' .   $post_title . '</h1><br /><p> '. $post_date .'</a></p></li><hr>';
		}
	?>
	</ul>
</div>	
<?php get_footer(); ?>
