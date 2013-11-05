<article id="post-<?php the_ID(); ?>" <?php post_class(array((has_post_thumbnail()) ? 'thumb' : 'no-thumb')); ?> role="article">

  <?php the_post_thumbnail('thumbnail', array('class' => 'thumbnail')); ?>

  <header class="excerpt-header">

    <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

  </header>

  <?php the_content(); ?>

</article>
