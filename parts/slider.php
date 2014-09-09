<?php 
get_template_part('parts/generic');
$name = $post->post_name;
$excerpt = get_field('show_excerpt', $post->ID);
$categories = get_field('style_type_categories', $post->ID);
$show_posts = get_field('show_posts', $post->ID);
$max_slides = get_field('max_slides', $post->ID);
$and_or = get_field('category_and_or', $post->ID);
$show_date = get_field('show_post_date', $post->ID);

$image_type = get_field('image_type', $post->ID);
if(!$image_type){
	$image_type = 'resultImage';
}

echo '<div id="'.$name.'-slides" class="owl-carousel">';

$results = get_results($show_posts, $categories, $and_or);

while ($results->have_posts()) { $results->the_post();
		echo '<article class="item">';
		$id = get_post_thumbnail_id($post->ID);		
		$url = wp_get_attachment_image_src($id, $image_type );
		$video_link = get_field('video_link', $post->ID);
		if($video_link) {
			echo '<div id="video-'.$post->post_name.'" class="dialog-modal"><iframe src="'.$video_link.'" frameborder="0" allowfullscreen></iframe></div>';
			echo '<div class="video-wrapper">';
		}
		echo '<img class="'.(($video_link) ? 'video' : '').'" '.(($video_link) ? 'data-video="video-'.$post->post_name.'"' : '').' src="'.$url[0].'" alt="'.image_alt($id).'"/>';
		if($video_link) {
			echo '<div class="play-button"></div>';
			echo '</div>';
		}
		if ($show_date) {
			echo '<span class="post-date">'.strtoupper(get_the_date()).'</span>';
		}
		echo '<h3>';
		echo '<a href="'.get_permalink().'">'.get_the_title().'</a>';
		echo '</h3>';
		echo '<div class="excerpt '.(($excerpt)? 'show' : '').'">';
		the_excerpt();
		echo '</div>';
		echo '</article>';
}
wp_reset_query();  // Restore global post data
echo '</div>';
?>
<script>
jQuery(document).ready(function($) {
  var ID = "#<?php echo $name; ?>-slides"
  $(ID).owlCarousel({
  	items: <?php echo $max_slides;?>,
  	itemsDesktop: false,
  	itemsMobile: [600,1],
  	itemsScaleUp: true,
  	addClassActive: true
  });
 
});
</script>