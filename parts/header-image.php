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
				<h2><?php echo $slide['slider_title']; ?></h2>
				<p><?php echo $slide['slider_content']; ?></p>
				<?php if( $slide['slider_link'] || $slide['slider_link_two'] ) : ?>
					<div class="btn-container clearfix">
						<?php if( $slide['slider_link'] ) : ?>
						    <a class="color-btn" href="<?php echo $slide['slider_link']; ?>" ><?php echo $slide['slider_link_text']; ?>
						    </a>
						<?php endif; ?>
						<?php if( $slide['slider_link_two'] ) : ?> 
						    <a class="color-btn dark" href="<?php echo $slide['slider_link_two']; ?>" ><?php echo $slide['slider_link_text_two']; ?>
						    </a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
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