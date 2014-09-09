<?php 
		$content = $post->post_content;
		if($content) {
			echo '<div class="content">';
				echo apply_filters( 'the_content', $content );
			echo '</div>';
		}
?>