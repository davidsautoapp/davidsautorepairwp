<?php
function book_selection($section_title, $num) {
	?>

	<div class="content section-inner">

		<header class="archive-header">
			<h2 class="archive-title"><?php echo $section_title ?></h2>

			<!-- <div class="archive-description"><p>Learn more...</p>
			</div> -->
			<div class="archive-description"><p><a href="<?php echo site_url('/books') ?>">Learn more...</a></p>
		</div>
		</header><!-- .archive-header -->

		<div class="posts group" id="posts">

			<?php

			$books_query = new WP_Query([
				'post_type'     	=>  'hb_book',
				'posts_per_page' 	=>  $num,
				'orderby'       	=> 'rand'
			]);

			if ($books_query->have_posts()):
				while($books_query->have_posts()):
					$books_query->the_post();
					?>
					
					<a href="<?php the_permalink() ?>" id="post-59" class="post post-59 hb_book type-hb_book status-publish hentry hb_book_type-books _hb">

						<div class="post-overlay _hb">

							<div class="archive-post-header _hb">
								<div><?php the_post_thumbnail(); ?></div>
								<div class='post-thumb-title _hb'>
									<!-- <p class="archive-post-date">January 15, 2021</p> -->
									<h3 class="archive-post-title _hb"><?php the_title() ?></h3>	
								</div>
							</div>

						</div>
						
					</a><!-- .post -->			
				
					<?php
			
					wp_reset_postdata();
				endwhile;
			endif;
			?>  	
				
		</div><!-- .posts -->
						
	</div>

	<?php
}
?>