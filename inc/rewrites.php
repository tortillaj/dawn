<?php
/**
 * URL rewriting
 *
 * Rewrites do not happen for multisite installations or child themes
 *
 * Rewrite:
 *   /wp-content/themes/themename/assets/css/ to /assets/css/
 *   /wp-content/themes/themename/assets/js/  to /assets/js/
 *   /wp-content/themes/themename/assets/img/ to /assets/img/
 *   /wp-content/plugins/                     to /plugins/
 *
 * Apache is required for this!!!!
 *
 *
 */
function dawn_add_rewrites( $content )
{
  global $wp_rewrite;
  $dawn_non_wp_rules        = array(
    'assets/(.*)'  => THEME_PATH . '/assets/$1',
    'plugins/(.*)' => RELATIVE_PLUGIN_PATH . '/$1',
    'cache/(.*)'   => 'wp-content/cache' . '/$1'
  );
  $wp_rewrite->non_wp_rules = array_merge( $wp_rewrite->non_wp_rules, $dawn_non_wp_rules );
  return $content;
}

function dawn_clean_urls( $content )
{
  if ( strpos( $content, RELATIVE_PLUGIN_PATH ) > 0 ) {
    return str_replace( '/' . RELATIVE_PLUGIN_PATH, '/plugins', $content );
  } else {
    return str_replace( '/' . THEME_PATH, '', $content );
  }
}

if ( ! is_multisite() && ! is_child_theme() ) {
  if ( current_theme_supports( 'rewrites' ) ) {
    add_action( 'generate_rewrite_rules', 'dawn_add_rewrites' );
  }

  if ( ! is_admin() && current_theme_supports( 'rewrites' ) ) {
    $tags = array(
      'plugins_url',
      'bloginfo',
      'stylesheet_directory_uri',
      'template_directory_uri',
      'script_loader_src',
      'style_loader_src'
    );

    add_filters( $tags, 'dawn_clean_urls' );
  }
}
