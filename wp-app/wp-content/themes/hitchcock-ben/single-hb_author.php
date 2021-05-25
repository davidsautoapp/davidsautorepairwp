<?php get_header();

if ( have_posts() ) : 
	while( have_posts() ) : the_post(); ?>

		<div class="content section-inner author-sg">
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


<div class="content section-inner">

	<header class="archive-header">
		<h1 class="archive-title">
      <?php if ($post->post_parent == 0): ?>
        <?= $post->post_title ?>'s Books
      <?php else: ?>
        More Services
      <?php endif; ?>
    </h1>

		<div class="archive-description">
		</div>
  </header>
  <!-- .archive-header -->

	<div class="posts group" id="posts">

		<?php

    if ($post->post_parent == 0) {
      $books_query = new WP_Query([
        'post_type'     	=>  'hb_book',
        // 'posts_per_page' 	=>  6,
        // 'post_parent'			=>	$post->ID,
        'orderby'       	=> 'menu_order',
        'order'           =>  'ASC',
      ]);
    } else {
      $books_query = new WP_Query([
        'post_type'     	=>  'hb_book',
        'posts_per_page' 	=>  3,
        'post_parent'			=>	0,
        'orderby'       	=> 'rand',
        'order'           =>  'ASC',
      ]);
    }

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
                <h2 class="archive-post-title _hb"><?php the_title() ?></h2>	
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

		
<?php get_footer(); ?>