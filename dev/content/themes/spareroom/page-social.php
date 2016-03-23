<?php
/*
Template Name: "Social" Page
*/
?>
<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>Twitter</h3>
				<div class="twitter-wrapper">
					<?php echo timeline($twitterFeed, false); ?>
				</div>
			</div>
			<div class="col-sm-5 col-sm-offset-1">
				<h3>Instagram</h3>
			</div>
		</div>
	</div>
<?php endwhile; ?>