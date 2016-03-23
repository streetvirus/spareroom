<footer class="content-info" role="contentinfo">
  <div class="container">
  	<hr class="footer-logo" />
  	<div class="row">
		<div class="col-sm-3">
			<?php

			?>
		</div>
		<div class="col-sm-3">
			<?php

			?>
		</div>
		<div class="col-sm-6">
			<?php

			?>
		</div>
	</div>
	<hr />
	<div class="row">
		<div class="col-sm-8">
			<?php
				if (has_nav_menu('primary_navigation')) :
					wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
				endif;
			?>
    	</div>
		<div class="col-sm-4">
    		<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
		</div>
	</div>
  </div>
</footer>

<?php wp_footer(); ?>