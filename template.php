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
