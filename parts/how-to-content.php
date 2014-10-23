<?php
	if( is_home() ) {
		$middle_content = get_field('home_middle_content', 'options');
	}else{
		$content = $post->post_content;
		$middle_content = apply_filters( 'the_content', $content );
		$items = get_field('items', $post->ID);
		$buttons = get_field('add_button', $post->ID);
		$process_steps = get_field('process_steps', 'options');
		$howto = get_field('howto', $post->ID);
		$top_content = get_field('top_content', $page->ID);
		
	}
?>
<?php if( $top_content ) : ?>
	<section class="middle-content">
		<div class="container">
			<div class="content">
				<?php echo $top_content; ?>
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
	</section>
	<?php if( $howto ) : ?>
	<section class="how-to">
		<?php $i = 0; ?>
		<?php foreach( $howto as $how_item ) : ?>
			<div class="wrapper <?php if($i%2 != 0){echo 'dark';} ?>">
				<div class="container">
					<div class="icon">
						<img src="<?php echo $how_item['icon']['url']; ?>" alt="<?php echo $how_item['icon']['alt']; ?>"/>
					</div>
					<div class="hcontent">
						<?php echo $how_item['content']; ?>
					</div>
					<div class="screenshot">
						<img src="<?php echo $how_item['screenshot']['url']; ?>" alt="<?php echo $how_item['screenshot']['alt']; ?>"/>
					</div>
				</div>
			</div>
			<?php $i++; ?>
		<?php endforeach; ?>
			<div class="bottom wrapper <?php if($i%2 != 0){echo 'dark';} ?>">
				<div class="container">
					<div class="content">
						<?php echo $middle_content; ?>
					</div>
					<?php if( $buttons ) : ?>
						<?php foreach( $buttons as $button ) : ?>
						<a class="color-btn" onclick="k_trackevent(params,'101');tracking_code('start_b2buy');" href="<?php echo $button['button_link']; ?>"><?php echo $button['button_text']; ?></a>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
	</section>
<?php endif; ?>
	
	
<?php endif; ?>