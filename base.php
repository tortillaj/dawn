<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<?php get_template_part( 'templates/head' ); ?>

<body <?php body_class(); ?>>

  <!--[if lt IE 10]><div class="alert alert-warning"><?php _e( 'You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'dawn' ); ?></div><![endif]-->

  <?php get_template_part( 'templates/document', 'header' ); ?>

  <article class="wrap">


    <?php if ( have_posts() ) : ?>

      <div class="main <?php echo dawn_main_class(); ?>" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
        <?php include dawn_template_path(); ?>
        <?php endwhile; ?>

      </div>

      <?php if ( dawn_display_sidebar() ): ?>
        <?php include dawn_sidebar_path(); ?>
      <?php endif; ?>

    <?php else: ?>
      <?php get_template_part( 'templates/content/content', 'notfound' ); ?>
    <?php endif; ?>

  </article>

  <?php get_template_part( 'templates/document', 'footer' ); ?>

</body>
</html>
