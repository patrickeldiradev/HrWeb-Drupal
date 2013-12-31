<?php

/**
 * @file
 * Implimentation of hook_form_system_theme_settings_alter()
 *
 * To use replace "adaptivetheme_subtheme" with your themeName and uncomment by
 * deleting the comment line to enable.
 *
 * @param $form: Nested array of form elements that comprise the form.
 * @param $form_state: A keyed array containing the current state of the form.
 */

 
function hrweb_form_system_theme_settings_alter(&$form, &$form_state)  {
	$form['at']['typography']['theme_font_config'] = array(
    '#type' => 'fieldset',
    '#title' => t('Typography'),
    '#weight' => 25,
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  // Select font family
  $form['at']['typography']['theme_font_config']['theme_font_config_font']['theme_font'] = array(
    '#type'          => 'select',
    '#title'         => t('Select a new font family'),
    '#default_value' => theme_get_setting('theme_font'),
    '#options'       => array(
      'none' => t('Default'),
      'font-family-sans-serif-sm' => t('Sans serif - small (Helvetica Neue, Arial, Helvetica)'),
      'font-family-sans-serif-lg' => t('Sans serif - large (Verdana, Geneva, Arial, Helvetica)'),
      'font-family-serif-sm' => t('Serif - small (Garamond, Perpetua, Times New Roman)'),
      'font-family-serif-lg' => t('Serif - large (Baskerville, Georgia, Palatino, Book Antiqua)'),
      'font-family-myriad' => t('Myriad (Myriad Pro, Myriad, Trebuchet MS, Arial, Helvetica)'),
      'font-family-lucida' => t('Lucida (Lucida Sans, Lucida Grande, Verdana, Geneva)'),
    ),
  );
  // Select font size
  $form['at']['typography']['theme_font_config']['theme_font_config_size']['theme_font_size'] = array(
    '#type'          => 'select',
    '#title'         => t('Change the base font size'),
    '#description'   => t('Adjusts all text in proportion to your base font size.'),
    '#default_value' => theme_get_setting('theme_font_size'),
    '#options'       => array(
      'font-size-10' => t('10px'),
      'font-size-11' => t('11px'),
      'font-size-12' => t('12px'),
      'font-size-13' => t('13px - Default'),
      'font-size-14' => t('14px'),
      'font-size-15' => t('15px'),
      'font-size-16' => t('16px'),
      'font-size-17' => t('17px'),
      'font-size-18' => t('18px'),
      'font-size-19' => t('19px'),
      'font-size-20' => t('20px'),
      'font-size-21' => t('21px'),
      'font-size-22' => t('22px'),
      'font-size-23' => t('23px'),
      'font-size-24' => t('24px'),
    ),
  );

}

// */