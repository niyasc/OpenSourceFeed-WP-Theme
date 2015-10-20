<div class="col-md-4">
	<a href="<?php echo get_permalink();?>"> 
	<div class=""><!-- container for image -->
		<?php
			echo "<div style='background-color: #eeeeee; border-radius: 4px;' class='post-thumbnail'>";
				if (has_post_thumbnail()) {
					$url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'fullsize');
					//add_image_size('thumb', 216, 102);
					echo "<img src='".$url[0]."' style='width: 100%' class='img-rounded img-responsive post-thumbnail'>";
				}
				else {
					echo "<img src='wp-content/themes/TechnoRevolution3/bootstrap/img/noimg.png' style='width: 100%' class='img-rounded post-thumbnail'>";
				}
			echo "</div>";
		?>
	</div>
	</a>
	<div class='text-center'>
		<a href="<?php echo get_permalink();?>"> 
			<h3><?php the_title();?></h3>
		<a>
		<div class="font-size: 20px">
			<?php the_category('/'); echo " ";the_date();?>
		</div>	
	</div>
	<div class='text-justify'>
		<?php the_excerpt(); ?> 
	</div>
</div>
					
