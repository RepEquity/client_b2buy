<?php 

	if ( have_posts() ) :
		$count = $wp_query->found_posts;
		$num_of_posts = get_option('posts_per_page');
		$search_query = get_search_query();
		$pageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1;
		 //* Showing the lower post value */
		 $n = ($pageNumber-1)*$num_of_posts;
		 $n = $n+1;
		/* Showing the higher/highest post value */
		 $m = $pageNumber * $num_of_posts;
		 if($m > $count){
			 // if m is bigger than the count var, it sets the
			 // highest value equal to the count, this is for the last page of results
			 $m = $count;
		 }
		?>
			<section class="page-header">
				<div class="page-header-content container">
					<div class="page-header-title">
					<?php
						$search_query = get_search_query();
						echo '<div class="results-header"><h1>Found results for &ldquo;<b>'.$search_query.'</b>&rdquo;</h1></div>'; 
					?>
					</div>					
				</div>
			</section>
		<?php
		echo '<div class="container"><div class="center"><div class="search-total"><h3> <i> Showing '.$n.'-'.$m.' out of '.$count._n(' result', ' results', $count).'</i></h3></div>';
		while ( have_posts() ) {
			the_post(); 
			echo '<article class="search-item">';
			echo '<h3>';
			echo '<a href="'.get_permalink().'">'.get_the_title().'</a>';
			echo '</h3>';
			the_excerpt(); 
			echo '</article>';
		} // end while
			if($count > 10) {
				echo '<div class="pagination"> <div class="inner">';
				echo wp_pagenavi();
				echo '</div></div></div></div>';
			}else{};
	 else : ?>
			<section class="page-header">
				<div class="page-header-content container">
					<div class="page-header-title">
					<?php
						$search_query = get_search_query();
						echo '<div class="results-header"><h1>No results for &ldquo;<b>'.$search_query.'</b>&rdquo;</h1></div>'; 
					?>
					</div>					
				</div>
			</section>
		<?php
		echo '<div class="container">
				<div id="suggestions" class="center"> 
					<h3>Suggestions</h3> 
					<ul>
						<li> Make sure all search terms are spelled correctly. </li>
						<li> Use more general search terms. </li>
						<li> Reduce the number of search terms. </li>
					</ul>
			 </div>
			 
		</div>'; /* end container div */
	endif;


	/* posts_nav_link(); */
	
	
?>