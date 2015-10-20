
<?php get_header(); ?>

<div class="row">
	<div class="col-md-8">
	
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="row container" style="tbl table-bordered">
						<div class="row">
							<?php get_template_part( 'thumbnailformat' ); ?>
							<?php 
								
								if (more_posts()) {
									the_post();
									get_template_part( 'thumbnailformat' );
								}
							?>
							
						</div>
					</div>
    			<hr>
    			
				<?php endwhile; ?>
				<div class="pager">
  					<li><?php previous_posts_link(' Previous Page'); ?></li>
  					<li><?php next_posts_link( 'Next Page' ); ?></li>
				</div>
				
				<?php else: ?>
					<p><?php _e('Sorry, this page does not exist'); ?></p>
				<?php endif; ?>
	</div>
	
	
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
