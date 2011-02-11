<?php
	/**
	 * Logging
	 */
	define('LOGGING',FALSE);
	
	/**
	 * Base url
	 */
	define('BASEURL','http://localhost:8888/');
	
	/**
	 * Setup registry
	 */
	$reg = array();
	
	/**
	 * add the init-class
	 */
	require_once('./app/classes/init.php');
	
	/**
	 * LOAD UP!
	 */
	$base = new init();
?>