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
								<?php if( $slide['slider_link'] || $slide['slider_link_two'] ) : ?>
									<div class="btn-container clearfix">
										<?php if( $slide['slider_link'] ) : ?>
										    <a onclick="k_trackevent(params,'101')" class="color-btn" href="<?php echo $slide['slider_link']; ?>" ><?php echo $slide['slider_link_text']; ?>
										    </a>
										<?php endif; ?>
										<?php if( $slide['slider_link_two'] ) : ?> 
										    <a onClick="tracking_code('learn_more')" class="color-btn dark" href="<?php echo $slide['slider_link_two']; ?>" ><?php echo $slide['slider_link_text_two']; ?>
										    </a>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</li>
					
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
	<?php $items = get_field('ticker_items', 'options'); ?>
	<?php if( $items ) : ?>
		<div class="ticker">
			<div class="title">
				<?php echo get_field('ticker_title', 'options'); ?>
			</div>
			<ul class="items">
				<?php 
					foreach( $items as $item ){
						echo '<li>'.$item['item_content'].'</li>';
					}
				?>
			</ul>
			<div class="controls pause">
				
			</div>
		</div>
		<script>
			jQuery( document ).ready(function($) {
			    var $mq = $('.ticker').marquee({
				    duration: <?php echo get_field('marquee_duration', 'options'); ?>,
				    duplicated: true
			    });
			    
			    $('.controls').on('click', function(){
				    if($('.controls').hasClass('play')) {
					    $mq.marquee('resume'); 
						$('.controls').removeClass('play').addClass('pause');
				    } else {
					    $mq.marquee('pause');
						$('.controls').removeClass('pause').addClass('play');
				    }
			    })		    	
			});
			
			
		</script>
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
							<li><img src="<?php echo $cat['tsc_image']['url']; ?>" alt="<?php echo $cat['tsc_image']['alt']; ?>" /><span class="tsc-item-title"><?php echo $cat['tsc_title']; ?></span><a onClick="tracking_code('<?php echo $cat['tsc_tracking_name']; ?>')" href="<?php echo $cat['tsc_link']; ?>"><?php echo $cat['tsc_link_text']; ?></a></li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
				
			</div>
		</section>
	<?php endif; ?>
<script>
	jQuery(document).ready(function($){
		$('.flexslider').flexslider({
			directionNav: false,
			controlNav: false,
			animation: "fade",
			slideshow: true, 
			animationSpeed: 1500,
		});
		
		$("#tsc").owlCarousel({
			items: 4,
			navigation : true,
			pagination: false,
			scrollPerPage: true
		});

		$('.owl-carousel').addClass('clearfix');
				
	});
	
	
</script>


<?php get_footer(); ?>