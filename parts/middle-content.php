<?php
	if( is_home() ) {
		$middle_content = get_field('home_middle_content', 'options');
	}else{
		$content = $post->post_content;
		$middle_content = apply_filters( 'the_content', $content );
		$items = get_field('items', $post->ID);
		$single = false;
		if($items){
			$item_count = count($items);
			if($item_count == 1){
				$single = true;
			}
		}
		
		$buttons = get_field('add_button', $post->ID);
		
	}
?>
<?php if( $middle_content ) : ?>
	<section class="middle-content">
		<div class="container">
			<div class="content">
				<?php echo $middle_content; ?>
			</div>
				<?php if($items) : ?>
				<div class="gallery">
				<?php foreach($items as $item) : ?>
					<div class="item<?php echo ($single) ? ' single' : ''; ?>">
						<img src="<?php echo $item['item_image']['url']; ?>" alt="<?php echo $item['item_image']['alt']; ?>" />
						<h3><?php echo $item['item_title']; ?></h3>
						<div class="item-content"><?php echo $item['item_content']; ?></div>
						
					</div>
				<?php endforeach; ?>
				</div>
			<?php endif; ?>
			</div>
		
			<?php if( $buttons ) : ?>
				<?php foreach( $buttons as $button ) : ?>
				<a class="color-btn" onclick="k_trackevent(params,'101');tracking_code('start_b2buy');" href="<?php echo $button['button_link']; ?>"><?php echo $button['button_text']; ?></a>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>