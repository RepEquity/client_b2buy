<?php 
		the_header_image($post->ID); 
		$hide_title = get_field('hide_title', $post->ID);
		if (!$hide_title) {
			if($third_level){
				echo '<h3>'.get_the_title().'</h3>';
			}else{
				echo '<h2>'.get_the_title().'</h2>';
			}
		}
		
		
		get_template_part('parts/content');
?>