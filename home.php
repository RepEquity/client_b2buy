<?php 
get_header();
	
$slider = get_field('home_page_slider', 'options');
$middle_content = get_field('home_middle_content', 'options');
$process_steps = get_field('process_steps', 'options');
$tsc = get_field('top_selling_categories', 'options');
?>

	<?php if( $slider ) : ?>
		<div class="flexslider">
			<ul class="slides">
				<?php foreach( $slider as $slide ) : ?>
					
					<li class="slide" style="background-image: url('<?php echo $slide['slider_image']['url']; ?>')">
						<div class="content-wrapper ">
							<div class="slider-content container">
								<h2><?php echo $slide['slider_title']; ?></h2>
								<p><?php echo $slide['slider_content']; ?></p>
								<?php if( $slide['slider_link'] ) : ?>
									<span class="btn-container clearfix">
									    <a class="color-btn" href="<?php echo $slide['slider_link']; ?>" ><?php echo $slide['slider_link_text']; ?></a>
									</span>
								<?php endif; ?>
							</div>
						</div>
					</li>
					
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
	<?php get_template_part('parts/top-content'); ?>
	<?php get_template_part('parts/middle-content'); ?>

	
	
	<?php if( $process_steps ) : ?>
		<section class="process">
			<div class="container">
				<div class="content">
					<h2><?php echo get_field('process_title', 'options'); ?></h2>
				</div>
					<ul>
						<?php $i=0; ?>
						<?php $count = count($process_steps); ?>
						<?php foreach( $process_steps as $step ) : ?>
							<?php $i++; ?>
							<li>
								<div class="count">
									<?php if ($i > 1) : ?>
										<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/img/ui/process-arrow.png" alt="Arrow" />
										<img class="arrow-down" src="<?php echo get_template_directory_uri(); ?>/img/ui/process-arrow-down.png" alt="Arrow" />
									<?php endif; ?>
									
									<img class="inactive" src="<?php echo $step['step_img']['url']; ?>" alt="<?php echo $step['step_img']['alt']; ?>" />
									<img class="active" src="<?php echo $step['step_img_active']['url']; ?>" alt="<?php echo $step['step_img_active']['alt']; ?>"> 
									
									
								</div>
								
								<div class="step">
									<div class="process-title"><?php echo $step['process_title']; ?></div>
									<div class="process-content"><?php echo $step['process_content']; ?></div>
								</div>
								
							</li>
							
						<?php endforeach; ?>
					</ul>
				
				
			</div>
		</section>
	<?php endif; ?>
	
	<?php if( $tsc ) : ?>
		<section class="selling-categories">
			<div class="container">
				<div class="content">
					<h2><?php echo get_field('tsc_title', 'options'); ?></h2>
				</div>
				<ul id="tsc">
					<?php foreach( $tsc as $cat ) : ?>
						<?php if($cat['tsc_published']) : ?>
							<li><img src="<?php echo $cat['tsc_image']['url']; ?>" alt="<?php echo $cat['tsc_image']['alt']; ?>" /><span class="tsc-item-title"><?php echo $cat['tsc_title']; ?></span><a href="<?php echo $cat['tsc_link']; ?>"><?php echo $cat['tsc_link_text']; ?></a></li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
				
			</div>
		</section>
	<?php endif; ?>
<script>
	jQuery(document).ready(function($){
		$('.flexslider').flexslider({
			directionNav: false
		});
		
		$("#tsc").owlCarousel({
			items: 4,
			navigation : true,
			pagination: false,
			scrollPerPage: true
		});
				
	});
	
	
</script>
<?php get_footer(); ?>