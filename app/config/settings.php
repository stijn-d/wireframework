<?php
/**
 * Set $config as global
 */
global $config;
$config = array();

/**
 * Set log treshold
 *
 * 0 = disable all logging
 * 1 = Error messages
 * 2 = Debug messages
 * 3 = Informational messages
 * 4 = All messages
 */

$config['log_treshold'] = 4;

//Set logpath
$config['log_path'] = APPPATH.'log/';

//firebug bool
$config['firephp'] = TRUE;

//Path for templates
$config['template_path'] = './pages/';

/**
 * End of file
 */