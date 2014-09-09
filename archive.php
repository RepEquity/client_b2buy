<?php get_header(); ?>

<?php 
	get_template_part('parts/page-header');
?>
<div class="container">
	<main id="news" class="center">
		<span class="menu-title">Filter</span>
		<?php wp_nav_menu( array( 'theme_location' => 'news-filter') ); ?>
		<?php 
		
		if ( have_posts() ) {
			$count = $wp_query->found_posts;
			echo '<div class="articles">';
				while ( have_posts() ) {
					the_post(); 
					
					get_template_part('parts/article-list');
					
				} // end while
				if($count > 10) {
					echo '<div class="pagination"> <div class="inner">';
					echo wp_pagenavi();
					echo '</div></div></div></div>';
				}else{};
			echo '</div>';
		} // end if
	?>
		<script>
			jQuery(document).ready(function($) {
			  				  
			});
		</script>
	</main>
	
	<script>
		jQuery(document).ready(function($) {
			$(".menu-item:contains('News')").addClass('current-menu-item')	  		  
		});
	</script>
</div>
<?php get_footer(); ?>
