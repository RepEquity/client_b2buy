<?php
	$id = get_post_thumbnail_id($post->ID);		
	$url = wp_get_attachment_image_src($id, $image_type );
	$video_link = get_field('video_link', $post->ID);
?>

<?php if($url) : ?>
<div class="header-image">
	<?php
			
		if($video_link) {
			echo '<div id="video-'.$post->post_name.'" class="dialog-modal"><iframe src="'.$video_link.'" frameborder="0" allowfullscreen></iframe></div>';
			echo '<div class="video-wrapper">';
		}
		echo '<img class="'.(($video_link) ? 'video' : '').'" '.(($video_link) ? 'data-video="video-'.$post->post_name.'"' : '').' src="'.$url[0].'" alt="'.image_alt($id).'"/>';
		?>
		<div class="content-wrapper ">
			<div class="slider-content container">
				<h2><?php echo get_field('image_title', $post->ID); ?></h2>
				<p><?php echo get_field('image_content', $post->ID); ?></p>
			</div>
		</div>
		<?php
		if($video_link) {
			echo '<div class="play-button"></div>';
			echo '</div>';
		}
	?>
</div>
<?php endif; ?>