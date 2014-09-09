<?php 
	if( is_home() ) {
		$top_content = get_field('home_top_content', 'options');
	}else{
		$top_content = get_field('top_content', $page->ID);
	}

?>

<?php if( $top_content ) : ?>
	<section class="top-content">
		<div class="container">
			<div class="content">
				<?php echo $top_content; ?>
			</div>
		</div>
	</section>
<?php endif; ?>