<?php

function cusystem_form_system_theme_settings_alter(&$form, &$form_state) {
  $theme = $form_state['build_info']['args'][0];
	$form['expressbase_theme_settings']['layout'] = array(
		'#type' => 'fieldset',
		'#title' => t('Layout'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);

	$form['expressbase_theme_settings']['layout']['layout_style'] = array(
	  '#type' => 'select',
	  '#title' => t('Layout Style'),
	  '#default_value' => theme_get_setting('layout_style', 'cusystem') ? theme_get_setting('layout_style', 'cusystem') : 'layout-wide',
	  '#description' => t('Pick a layout style for your site.'),
	  '#options' => array(
      'layout-wide' => t('Wide'),
      'layout-boxed' => t('Boxed'),
    ),
	);

  $form['expressbase_theme_settings']['banner'] = array(
		'#type' => 'fieldset',
		'#title' => t('Banner Color'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	$form['expressbase_theme_settings']['banner']['banner_color'] = array(
	  '#type' => 'select',
	  '#title' => t('Banner Color'),
	  '#default_value' => theme_get_setting('banner_color', 'cusystem') ? theme_get_setting('banner_color', 'cusystem') : 'black',
	  '#description' => t('Pick a banner color for your site.'),
	  '#options' => array(
      'white' => t('White'),
      'black' => t('Black'),
    ),
	);
  $form['system_slogan'] = array(
    '#type' => 'textfield',
    '#title' => 'Campus Name',
    '#default_value' => theme_get_setting('system_slogan', 'cusystem') ? theme_get_setting('system_slogan', 'cusystem') : 'Boulder | Denver | Colorado Springs | Anschutz Medical Campus',
  );
}
