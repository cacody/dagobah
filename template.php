<?php
/**
 * @file
 * The primary PHP file for this theme.
 */


function dagobah_preprocess_html(&$variables) {
  drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css', array('type' => 'external'));
}

function dagobah__menu_tree__menu_devel_slabre($variables){
    return "<ul class=\"list-inline\">\n" . $variables['tree'] ."</ul>\n";
}

function dagobah_form_user_login_alter(&$form, &$form_state, $form_id) {
    //should also add JS focus code for iOS Safari
    $form['name']['#attributes'] = array('autofocus' => '');
}

function dagobah_form_alter(&$form, &$form_state, $form_id) {
  if ($form['#id'] == 'user-login') {
    $form['name']['#description'] = t('4-30 Characters. Must start with a letter. Only Numbers, Letters, Hyphens, and Underscores may be used.'); // Clear the description of name
    $form['pass']['#description'] = t(''); // Clear the description of pass
  }
}


