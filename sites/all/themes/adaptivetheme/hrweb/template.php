<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 * 
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "adaptivetheme_subtheme" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "adaptivetheme_subtheme".
 * 2. Uncomment the required function to use.
 */


/**
 * Preprocess variables for the html template.
 */
 


// Add some cool text to the search block form... awesome. 
//function hrweb_form_alter(&$form, &$form_state, $form_id) {
  //if ($form_id == 'search_block_form') {
    // HTML5 placeholder attribute
  //  $form['search_block_form']['#attributes']['placeholder'] = t('Search HRWeb');
 // }
//}

function hrweb_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#size'] = 30;  // define size of the textfield
    $form['actions']['submit']['#value'] = t('Find It!'); // Change the text on the submit button
    // Prevent user from searching the default text
    $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Search HRWeb'){ alert('Please enter a search'); return false; }";
    // Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['search_block_form']['#attributes']['placeholder'] = t('Search HRWeb');
  }
}

function hrweb_process_html(&$vars) {
  $classes = explode(' ', $vars['classes']);
  $classes[] = (theme_get_setting('theme_font') != 'none') ? theme_get_setting('theme_font') : '';
  $classes[] = theme_get_setting('theme_font_size');
  $classes = array_filter($classes);
  $vars['classes'] = trim(implode(' ', $classes));

}


function hrweb_preprocess_html(&$vars) {
  global $theme_key;
  
//Below: using a custom style css: 
  $curr_drupal_path = $_SERVER['REQUEST_URI']; //print_r($curr_drupal_path).'</br>';

  switch(true){
    case strstr($curr_drupal_path, "/new-topics"):
      drupal_add_css(drupal_get_path('theme', 'hrweb').'/css/new-topics.css' , array('group' => '100', 'weight' => '-999' ));
      break;  
	  }
  switch(true){
    case strstr($curr_drupal_path, "/hot-topics"):
      drupal_add_css(drupal_get_path('theme', 'hrweb').'/css/hot-topics.css' , array('group' => '100', 'weight' => '-999' ));
      break;  
	  }
  switch(true){
    case strstr($curr_drupal_path, "/emergency-announcements"):
      drupal_add_css(drupal_get_path('theme', 'hrweb').'/css/emergency-announcements.css' , array('group' => '100', 'weight' => '-999' ));
      break;  
	  }
  switch(true){
    case strstr($curr_drupal_path, "/supervisory-toolkit"):
      drupal_add_css(drupal_get_path('theme', 'hrweb').'/css/supervisory-toolkit.css' , array('group' => '100', 'weight' => '-999' ));
      break;  
	  }

  // Two examples of adding custom classes to the body.
  
  // Add a body class for the active theme name.
 // $vars['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome etc.
 // $vars['classes_array'][] = css_browser_selector();

}
 
 

// */


/**
 * Process variables for the html template.
 */
/* -- Delete this line if you want to use this function
function hrweb_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */
/* -- Delete this line if you want to use these functions
function hrweb_preprocess_page(&$vars) {
}
function hrweb_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function hrweb_preprocess_node(&$vars) {
}
function hrweb_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function hrweb_preprocess_comment(&$vars) {
}
function hrweb_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function hrweb_preprocess_block(&$vars) {
}
function hrweb_process_block(&$vars) {
}
// */

