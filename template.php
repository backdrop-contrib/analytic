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
  /*
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
  */
}

/**
 * Prepare variables for node templates.
 *
 * @see node.tpl.php
 */
function analytic_preprocess_node(&$variables) {
  // Classes is already a string here. Add back classes from D7.
  if ($variables['sticky'] && $variables['page'] == 0) {
    $variables['classes'] .= ' sticky';
  }
  if (!$variables['status']) {
    $variables['classes'] .= ' node-unpublished';
  }

  // Render links early so we can check if they are empty.
  $variables['links'] = render($variables['content']['links']);
}

/**
 * Prepare variables for comment templates.
 *
 * @see comment.tpl.php
 */
function analytic_preprocess_comment(&$variables) {
  // Classes is already a string here. Add back classes from D7.

  $variables['classes'] .= ' ' . $variables['zebra'];

  if ($variables['comment']->status == COMMENT_NOT_PUBLISHED) {
    $variables['classes'] .= ' comment-unpublished';
  }
}

/**
 * Prepare variables for block templates.
 *
 * @see block.tpl.php
 */
function analytic_preprocess_block(&$variables) {
  // Classes is already a string here. Add block-[module] from D7.
  $variables['classes'] .= ' block-' . $variables['block']->module;
}

/**
 * Implementation of hook_menu_local_task().
 */
function analytic_menu_local_task($variables) {
  // There is no hook_menu_local_task in Drupal 7 or Backdrop.
}
