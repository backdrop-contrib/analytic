<?php
/**
 * @file
 */

/**
 * Implementation of hook_menu_local_task().
 */
function analytic_menu_local_task($variables) {
  $link = $variables['element']['#link'];
  $link_text = $link['title'];
  $link['localized_options']['html'] = TRUE;

  if (!empty($variables['element']['#active'])) {
    // Add text to indicate active tab for non-visual users.
    $active = '<span class="element-invisible">' . t('(active tab)') . '</span>';

    // If the link does not contain HTML already, check_plain() it now.
    // After we set 'html'=TRUE the link will not be sanitized by l().
    if (empty($link['localized_options']['html'])) {
      $link['title'] = check_plain($link['title']);
    }    
    $link_text = t('!local-task-title !active', array('!local-task-title' => $link['title'], '!active' => $active));    
  }
  
  $link_text = '<span class="tab">' . $link_text . '</span>';
 
  return '<li' . (!empty($variables['element']['#active']) ? ' class="active"' : '') . '>' . l($link_text, $link['href'], $link['localized_options']) . "</li>\n";
}


/**
 * Prepares variables for page template files.
 *
 * @see page.tpl.php
 */
function analytic_process_page(&$variables) {
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