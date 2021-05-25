<?php 
/*
Template Name: Books
*/

get_header(); ?>

<div class="content section-inner">

	<?php
	echo "Books ARCHIVE!!!!!";
	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

	$archive_prefix 		= hitchcock_get_archive_title_prefix();
	$archive_title 			= get_the_archive_title();
	$archive_description 	= get_the_archive_description();
	
	if ( $archive_prefix || $archive_title || $archive_description ) : ?>
	
	<?php endif; ?>
		
	<?php if ( have_posts() ) : ?>

		<div class="posts group" id="posts">

			<?php
			while ( have_posts() ) : the_post();
			
				get_template_part( 'books-tpl-content', get_post_format() );
				
			endwhile;
			?>
			
		</div><!-- .posts -->

	<?php elseif ( is_search() ) : ?>

		<div class="post single">
		
			<div class="post-container">
		
				<div class="post-inner">
			
					<div class="post-content">
					
						<p><?php _e( 'No results. Try again, would you kindly?', 'hitchcock' ); ?></p>
						
						<?php get_search_form(); ?>
					
					</div><!-- .post-content -->
				
				</div><!-- .post-inner -->
			
			</div><!-- .post-container -->
		
		</div><!-- .post -->

	<?php endif; ?>
	
	<?php get_template_part( 'pagination' ); ?>
		
</div><!-- .content -->
	              	        
<?php get_footer(); ?>