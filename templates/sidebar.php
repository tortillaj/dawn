<article class="sidebar <?php echo dawn_sidebar_class(); ?>" role="complementary">

	<?php if ( is_active_sidebar( 'default_sidebar' ) ) : ?>

	  <?php dynamic_sidebar( 'default_sidebar' ); ?>

	<?php else : ?>

	  <div class="alert alert-help">
	    <p><?php _e( "Please activate some Widgets.", "dawn" );  ?></p>
	  </div>

	<?php endif; ?>

</article>
