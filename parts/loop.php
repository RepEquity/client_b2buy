<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			echo '<article class="item three-columns">';
			$video_link = get_field('video_link', $post->ID);
			if($video_link) {
				echo '<div id="video-'.$post->post_name.'" class="dialog-modal"><iframe src="'.$video_link.'" frameborder="0" allowfullscreen></iframe></div>';
				echo '<div class="video-wrapper">';
				echo '<div class="'.(($video_link) ? 'video' : '').'" '.(($video_link) ? 'data-video="video-'.$post->post_name : '').'">';
				the_post_thumbnail('resultImage');
				echo '<div class="play-button"></div>';
				echo '</div>';
				echo '</div>';
			} else {
				the_post_thumbnail('resultImage');
			}
			echo '<h3>';
			echo '<a href="'.get_permalink().'">'.get_the_title().'</a>';
			echo '</h3>';
			the_excerpt();
			echo '</article>';
		} // end while
	} // end if
	
	posts_nav_link( ); 
?>