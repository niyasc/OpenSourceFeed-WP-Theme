<div id="carousel-example-generic" class="carousel slide image-responsive" data-ride="carousel" data-interval="2000">
<!-- Carousel indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
<li data-target="#myCarousel" data-slide-to="4"></li>
</ol>
	<div class="section-title">
		Featured
	</div>
	<!-- Carousel items -->
	<div class="carousel-inner">
		<?php
		$looped = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5, 'category_name' => 'Featured' ));
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
				<?php if($c == 1) :?>
					<div class="item active">
				<?php else : ?>
					<div class="item">
				<?php endif; ?>
					<a href="<?php echo get_permalink();?>">
						<img src="<?=$url[0]?>" style="margin: auto;">
							<div class="carousel-caption">
								<h3><?php the_title(); ?></h3>
							</div>
					</a>
				</div>
			<?php
		}//end of while
	}//end of if
	wp_reset_postdata(); ?>
	</div>
	<!-- Carousel nav -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
