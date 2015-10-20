<div class="col-md-8" style="border: 1px solid #ccc; border-radius: 4px">
	<div class="main-title">
		<a href="<?php echo get_permalink();?>"> 
			<h1><?php the_title();?></h1>
		<a>
	</div>
	<div class='text-center'>
		
		<div class="font-size: 20px">
			<?php the_category('/'); echo " ";the_date();?>
		</div>	
	</div>
	<a href="<?php echo get_permalink();?>"> 
	<div class="main-img">
			
				<?php
					echo "<div style='background-color: #eeeeee; border-radius: 4px;' class=''>";
					if (has_post_thumbnail()) {
						$url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'fullsize');
						//add_image_size('thumb', 216, 102);
						echo "<img src='".$url[0]."' style='width: 100%' class='main-img'>";
					}
					else {
						echo "<img src='wp-content/themes/TechnoRevolution3/bootstrap/img/noimg.png' style='width: 100%' class='img-rounded post-thumbnail'>";
					}
					echo "</div>";
				?>
	</div>
	</a>
	<div class='text-justify'>
		<?php the_excerpt(); ?> 
	</div>
</div>
					
