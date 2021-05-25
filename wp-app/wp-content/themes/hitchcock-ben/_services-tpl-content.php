<?php 

$thumbnail_url = ( has_post_thumbnail() && ! post_password_required() ) ?  get_the_post_thumbnail_url( $post->ID, 'post-thumb' ) : ''; 
$style_attr = $thumbnail_url ? ' style="background-image: url( ' . $thumbnail_url . ' );"' : '';

?>

<div <?php post_class( 'post' ); ?><?php echo $style_attr; ?>>

	<div class="post-overlay">
		
		<?php if ( is_sticky() && ! is_single() ) : ?>
		
			<p><span class="fa fw fa-star"></span><?php _e( 'Sticky', 'hitchcock' ); ?></p>
		
		<?php endif; ?>
		
		<div class="archive-post-header">
		
							
		    <?php if ( get_the_title() ) : ?>
		    	<h2 class="archive-post-title"><?php the_title(); ?></h2>
          <p>
            <?php the_content(); ?>
          </p>
		    <?php endif; ?>
	    
		</div>

	</div>
	
</div><!-- .post -->