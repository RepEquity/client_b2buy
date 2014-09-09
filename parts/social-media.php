<?php 
	$social_links = get_field('social_media', 'options');
?>
<?php if($social_links) : ?>
	<div class="social-media">
		<?php foreach($social_links as $link) : ?>
			<a href="<?php echo $link['sm_link']; ?>" target="_blank"><img src="<?php echo $link['sm_image']['url']; ?>" alt="<?php echo $link['sm_image']['alt']; ?>" /></a>
		<? endforeach; ?>
	</div>
<?php endif; ?>