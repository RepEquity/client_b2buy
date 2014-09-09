<?php get_header(); ?>
</div>
<section class="page-header">
	<div class="page-header-content container">
		<div class="page-header-title">
			<h1 class="middle">Page Not Found</h1>
		</div>
		
		<?php 
			$img_src = get_the_post_thumbnail($id);
			if(!$img_src){
				$img_src = get_template_directory_uri().'/img/default-page-header-img.png';
				echo '<img src="'.$img_src.'" alt="default-page-header-img" />';
			} else {
				echo $img_src;
			}
		?>
		
		
	</div>
</section>	

<div class="container">

<?php get_footer(); ?>