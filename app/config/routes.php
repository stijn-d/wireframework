<?php 
	/**
	 * Wireframework | config/routes.php
	 * ---------------------------------
	 *
	 * This file is used for advanced routing.
	 * For example:
	 * You are using this framework for a website
	 * which should be published in 3 different languages(en, fr, nl)
	 * You can change/translate the url's by adding them here related to the
	 * default language
	 * 
	 */
	 
	global $config;
	 
	/**
	 * Homepage - Set the page that should be used as a homepage
	 */
	$config['homepage'] = 'home';
	 
	/**
	 * 404 override - The page to be shown when a 404 occures
	 */
	$config['404'] = 'errors/404-not-found';
	 
	/**
	 * Translations
	 *
	 * Example with nl as default language
	 * $config['routes'] = array(
	 *		'fr' => array(
	 *					'acceuil' => 'homepage',
	 *					'pare' => 'over'
	 *				),
	 *		'en' => array(
	 *					'home' => 'homepage',
	 *					'about' => 'over'
	 *				)
	 * );
	 */
	$config['routes'] = array();
	  
	/**
	 * End of file
	 */
	log_message('notice', 'Routes are loaded!');  