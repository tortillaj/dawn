<article class="sidebar <?php echo dawn_sidebar_class(); ?>" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar_primary' ) ) : ?>

	  <?php dynamic_sidebar( 'sidebar_primary' ); ?>

	<?php else : ?>

	  <div class="alert alert-help">
	    <p><?php _e( "Please activate some Widgets.", "dawn" );  ?></p>
	  </div>

	<?php endif; ?>

</article>
