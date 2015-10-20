<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
		<?php 
		$looped = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5 ));
		$c = 0;
		if ( $looped->have_posts() ) { 
			while ( $looped->have_posts() ) { 
				$looped->the_post();
				$c += 1;
				if (has_post_thumbnail()) {
					$url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'fullsize');
				}
				else {
					$url = array("wp-content/themes/TechnoRevolution3/bootstrap/img/noimg.png");
				}
		?>
				<?php if($c ==  1) :?>
						<div class="item active" style="background: url(<?=$url[0]?>); background-size: 100%; height: 100%">
				<?php else : ?>
						<div class="item" style="background: url(<?=$url[0]?>); background-size: 100%">
				<?php endif; ?>
							
				<div class="carousel-caption">
					<div class='heading'>
						<h3><?php the_title(); ?></h3>
					</div>
					<div class='caption'>
						<p><?php the_excerpt(); ?></p>
					</div>
					

				</div>

            </div>
				<?php
			}//end of while
		}//end of if
		wp_reset_postdata(); ?>
	</div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
