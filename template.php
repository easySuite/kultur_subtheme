<?php

/**
 * @file
 * Preprocess and Process Functions.
 */

/**
 * Implements hook_preprocess_html().
 */
function kultur_subtheme_preprocess_html(&$vars) {
  // Add theme path to global variable.
  drupal_add_js(
    array(
     'pathToTheme' => '/' . drupal_get_path('theme', 'kultur_subtheme'),
     'every_page' => TRUE,
     'scope' => 'header',
     'weight' => -19.95,
    ), 'setting'
  );

  // Add header link tag for apple-touch-icon.
  $apple_touch_icon = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => path_to_theme() . '/images/apple-touch-icon.png',
      'rel' => array(
        'shortcut',
        'icon'
      ),
    )
  );

  drupal_add_html_head($apple_touch_icon, 'apple_touch_icon');
}

/**
 * Implements hook_preprocess_panels_pane().
 */
function kultur_subtheme_preprocess_panels_pane(&$vars) {
  // Suggestions base on sub-type.
  $vars['theme_hook_suggestions'][] = 'panels_pane__' . str_replace('-', '__', $vars['pane']->subtype);
  $vars['theme_hook_suggestions'][] = 'panels_pane__'  . $vars['pane']->panel . '__' . str_replace('-', '__', $vars['pane']->subtype);

  if (isset($vars['content'])) {
    if (isset($vars['content']['profile_ding_staff_profile']['#title']) && $vars['content']['profile_ding_staff_profile']['#title'] == 'Staff') {
      $vars['theme_hook_suggestions'][] = 'panels_pane__user_profile_staff';
    }
  }

  // Suggestions on panel pane.
  $vars['theme_hook_suggestions'][] = 'panels_pane__' . $vars['pane']->panel;

  // Suggestion for mobile user menu in the header.
  if ($vars['pane']->panel == 'header' && $vars['pane']->subtype == 'user_menu') {
    $vars['theme_hook_suggestions'] = array('panels_pane__sub_menu__mobile');
  }

  // Suggestions on menus panes.
  if ($vars['pane']->subtype == 'og_menu-og_single_menu_block' || $vars['pane']->subtype == 'menu_block-3') {
    $vars['theme_hook_suggestions'][] = 'panels_pane__sub_menu';
    $vars['classes_array'][] = 'sub-menu-wrapper';

    // Change the theme wrapper for both menu-block and OG menu.
    if (isset($vars['content']['#content']) && is_array($vars['content']['#content'])) {
      // Menu-block.
      $vars['content']['#content']['#theme_wrappers'] = array('menu_tree__sub_menu');
    }
    elseif(is_array($vars['content'])) {
      // OG menu.
      $vars['content']['#theme_wrappers'] = array('menu_tree__sub_menu');
    }
  }

  if ($vars['pane']->subtype == 'search-form' && $vars['pane']->panel != 'header') {
    unset($vars['content']['advanced']);
  }
}

/**
 * Implements theme_menu_tree().
 */
function kultur_subtheme_menu_tree__menu_block__2($vars) {
  return '<ul class="secondary-menu">' . $vars['tree'] . '</ul><div></div>';
}
