<?php
/**
 * @file
 */

/**
 * Prepares variables for page template files.
 *
 * @see page.tpl.php
 */
function analytic_preprocess_page(&$variables) {
  //dpm('hello');
  if (empty($variables['page_bottom'])) {
    $variables['page_bottom'] = '';
  }

  $link_attributes = array('title' => 'Go to pixeljets.com');
  $link = l(t('pixeljets.com'), 'http://pixeljets.com', $link_attributes);
  $copy = t('Theme designed by !agency', array('!agency' => $link))
  $variables['page_bottom'] .= '<span class="developer">';
  $variables['page_bottom'] .= '  <strong>' . $copy . '</strong>';
  $variables['page_bottom'] .= '</span>';
}
/**
 * Prepare variables for block templates.
 *
 * @see block.tpl.php
 */
function analytic_preprocess_block(&$variables) {
  // Classes is already a string here, so add block-[module].
  $variables['classes'] .= ' block-' . $variables['block']->module;
}

/**
 * Implementation of hook_menu_local_task().
 */
function analytic_menu_local_task($variables) {
  // There is no hook_menu_local_task in Drupal 7 or Backdrop.
}
