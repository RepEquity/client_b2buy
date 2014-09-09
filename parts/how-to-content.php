<?php
	if( is_home() ) {
		$middle_content = get_field('home_middle_content', 'options');
	}else{
		$content = $post->post_content;
		$middle_content = apply_filters( 'the_content', $content );
		$items = get_field('items', $post->ID);
		$buttons = get_field('add_button', $post->ID);
		$process_steps = get_field('process_steps', 'options');
		
	}
?>
<?php if( $middle_content ) : ?>
	<section class="middle-content">
		<div class="container">
			<div class="content">
				<?php echo $middle_content; ?>
				<?php if($items) : ?>
				<?php foreach($items as $item) : ?>
					<div class="item">
						<img src="<?php echo $item['item_image']['url']; ?>" alt="<?php echo $item['item_image']['alt']; ?>" />
						<h3><?php echo $item['item_title']; ?></h3>
						<div class="item-content"><?php echo $item['item_content']; ?></div>
						
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
			</div>
		</div>
			<?php if( $process_steps ) : ?>
				<section class="process">
					<div class="container">
						
						<ul>
							<?php $i=0; ?>
							<?php $count = count($process_steps); ?>
							<?php foreach( $process_steps as $step ) : ?>
								<?php $i++; ?>
								<li>
									<div class="count">
										<?php if ($i > 1) : ?>
											<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/img/ui/process-arrow.png" alt="Arrow" />
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
		<div class="container">
			<?php if( $buttons ) : ?>
				<?php foreach( $buttons as $button ) : ?>
				<a class="color-btn" href="<?php echo $button['button_link']; ?>"><?php echo $button['button_text']; ?></a>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>