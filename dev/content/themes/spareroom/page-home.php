<?php
/*
Template Name: "Home" Page
*/
?>
<?php while (have_posts()) : the_post(); ?>
	<div class="carousel">
		<?php
			if(have_rows('slideshow_images')){
				$slide = "";
				while(have_rows('slideshow_images')){
					the_row();
					$image = get_sub_field('image');
					$slide .= "<div>";
					$slide .= "<img src=\"{$image['url']}\" class=\"img-responsive\">";
					$slide .= "</div>";
				}
				echo $slide;
			}
		?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
				<?php get_template_part('templates/content', 'page'); ?>

				<div class="well">
					<?php

						if(get_field('hours')){
							the_field('hours');
							echo "<br />";
						}

						echo "Hollywood Roosevelt Hotel<br />\n";
						echo "&#0151 Mezzanine Level &#0151<br />\n";

						if(get_field('reservation_email')){
							$email = encode_email(get_field('reservation_email'));
							echo "<a href=\"mailto:{$email}\" target=\"_blank\">{$email}</a><br />\n";
						}

						if(get_field('phone_number')){
							the_field('phone_number');
						}

					?>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>