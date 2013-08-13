<?php

/**
 * Implements hook_preprocess_hook()
 *
 * Adds custom markup to footer.
 * Adds modernizr.js
 */
function sb_template_preprocess_page(&$variables) {
  // Footer content
  $variables['page']['footer'][] = array('#markup' => '<div class="copyright">&copy; ' . date('Y') . ' SB_CLIENT </div>');

  drupal_add_js($variables['directory'] . '/js/vendor/modernizr-2.6.2.min.js');
}
