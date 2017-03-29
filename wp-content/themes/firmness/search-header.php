<?php
/**
 * @package Firmness
 */
$firmness_theme_options = firmness_get_options( 'firmness_theme_options' );
if ($firmness_theme_options['header_search_enable'] == '1') {
	get_search_form(); 
}?>