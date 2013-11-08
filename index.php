<article id="post-<?php the_ID(); ?>" <?php post_class(array((has_post_thumbnail()) ? 'thumb' : 'no-thumb')); ?> role="article">

  <?php locate_template('templates/content/content-excerpt.php'); ?>

</article>
