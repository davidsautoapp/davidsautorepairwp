<?php get_header();

if ( have_posts() ) : 
	while( have_posts() ) : the_post(); ?>

		<div class="content section-inner book-sg">
			<div id="post-<?php the_ID(); ?>" <?php post_class( 'single single-post' ); ?>>
				<div class="post-container">
					<?php 

					if ( ! post_password_required() ) :
						$post_format = get_post_format();
						if ( $post_format == 'gallery' ) : ?>
						
							<figure class="featured-media group">
								<?php hitchcock_flexslider( 'post-image' ); ?>
							</figure><!-- .featured-media -->
							
						<?php elseif ( has_post_thumbnail() ) : ?>
								
							<figure class="featured-media">
								<?php the_post_thumbnail( 'post-image' ); ?>
							</figure><!-- .featured-media -->
								
            <?php endif; 
          endif; ?>
					
					<div class="post-header">

						<?php if ( is_single() ) : ?>
							<p class="post-date"><?php 
                // the_time( get_option( 'date_format' ) ); 
                ?></p>
            <?php endif;
            the_title( '<h1 class="post-title">', '</h1>' ); ?>
						
					</div>
					
					<div class="post-inner">
						<div class="post-content entry-content">
							<?php the_content(); ?>
						</div><!-- .post-content -->
						
						<?php 
						$args = array(
							'before'           => '<div class="page-links group"><span class="title">' . __( 'Pages:', 'hitchcock' ) . '</span>',
							'after'            => '</div>',
							'link_before'      => '<span>',
							'link_after'       => '</span>',
							'separator'        => '',
							'pagelink'         => '%',
							'echo'             => 1
						);
            wp_link_pages( $args );
            
            if ( is_single() ) : ?>
						
							<div class="post-meta">
						
								<?php if ( has_category() ) : ?>
									<p class="categories">
										<?php _e( 'In', 'hitchcock' ); ?> <?php the_category( ', ' ); ?>
									</p>
								<?php endif; ?>
								
								<?php if ( has_tag() ) : ?>
									<p class="tags">
										<?php the_tags( '', ' ' ); ?>
									</p>
								<?php endif; ?>
								
								<?php edit_post_link( __( 'Edit Post', 'hitchcock' ), '<p class="post-edit">', '</p>' ); ?>
			
							</div><!-- .post-meta -->

							<?php
						else :
							edit_post_link(__( 'Edit', 'hitchcock' ), '<div class="post-meta"><p class="post-edit">', '</p></div>' );
						endif; ?>
					
					</div><!-- .post-inner -->
					
					<?php comments_template( '', true ); ?>
				
				</div><!-- .post-container -->
			</div><!-- .post -->
		</div><!-- .content -->
		
		<?php 

		if ( is_single() ) {
			hitchcock_related_posts( 3 );
		}

	endwhile;

endif;

?>


<?php 
include_once('book-selection.php');
book_selection("Couple More Books", 4); 
?>

		
<?php get_footer(); ?>