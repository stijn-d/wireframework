<?php
	/**
	 * Wireframework | config/output.php
	 * ---------------------------------
	 *
	 * In this config file you can configure
	 * the way that Wireframework outputs html
	 * this includes basic html/css settings
	 * inclusion of snippets(css-reset/jquery/...)
	 * 
	 */
	
	/**
	 * Set $config as global
	 */
	global $config;
	
	/**
	 * HTML version(xhtml/html5)
	 */
	$config['html_version'] = 'html5';
	
	/**
	 * HTML language
	 */
	$config['html_language'] = 'en';//for multilangual sites set this to 'auto'
	$config['html_dir'] = 'ltr';
	
	/**
	 * HTML encoding
	 */
	$config['html_encoding'] = 'utf-8';
	
	/**
	 * Mobile browsing settings
	 */
	$config['enable_basic_mobile'] = FALSE;
	$config['mobile_apple_icon'] = '/apple_icon.png';
	
	/**
	 * Head variables
	 */
	$config['head_basetitle'] = 'Wireframework';
	$config['head_description'] = '';
	$config['head_author'] = '';
	$config['head_keywords'] = '';
	$config['head_favicon'] = FALSE;
	
	/** 
	 * js libs list
	 * 
	 * A list in which you can add your favorite js-libs
	 */
	$config['js_libs_list'] = array(
		'Modernizr' => APPPATH.'/ext-libs/js/modernizr-1.6.min.js',
		'jQuery' => APPPATH.'/ext-libs/js/jquery-1.4.2.min.js',
		'jQueryDev' => APPPATH.'/ext-libs/js/jquery-1.4.2.js',
		'Profiler' => APPPATH.'/ext-libs/js/profiling/yahoo-profiling.min.js',
		'pngFix' => APPPATH.'/ext-libs/js/dd_belatedpng.js'
		//Add other if you like!
	); 
	
	/** 
	 * js libs
	 */
	$config['js_libs'] = array(
		'Modernizr' => TRUE,
		'jQuery' => TRUE,
		'pngFix' => FALSE,
		'Profiler' => FALSE,
	);
	
	/**
	 * css libs
	 */
	$config['css_reset'] = TRUE;
	$config['css_mobile_base'] = FALSE;
	
	/**
	 * End of file
	 */
	log_message('notice', 'Output is loaded!');