<?php
	/**
	 * Wireframework | config/snippets.php
	 * ---------------------------------
	 *
	 * In this config file all the snippets that are used in the base-app
	 * are stored. 
	 * 
	 */
	
	/**
	 * Set $config as global
	 */
	global $config;
	
	/**
	 * html opening tag
	 */
	$config['snippet_html5_opening'] = '<!doctype html>
	<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
	<!--[if lt IE 7 ]> <html lang="%lang%" dir="%dir%" class="no-js ie6"> <![endif]-->
	<!--[if IE 7 ]>    <html lang="%lang%" dir="%dir%" class="no-js ie7"> <![endif]-->
	<!--[if IE 8 ]>    <html lang="%lang%" dir="%dir%" class="no-js ie8"> <![endif]-->
	<!--[if IE 9 ]>    <html lang="%lang%" dir="%dir%" class="no-js ie9"> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!--> <html lang="%lang%" dir="%dir%" class="no-js"> <!--<![endif]-->
		<head>
			<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
			     Remove this if you use the .htaccess -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
	
	$config['snippet_xhtml_opening'] = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
	<!--[if lt IE 7 ]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="%lang%" lang="%lang%" dir="%dir%" class="no-js ie6"> <![endif]-->
	<!--[if IE 7 ]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="%lang%" lang="%lang%" dir="%dir%" class="no-js ie7"> <![endif]-->
	<!--[if IE 8 ]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="%lang%" lang="%lang%" dir="%dir%" class="no-js ie8"> <![endif]-->
	<!--[if IE 9 ]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="%lang%" lang="%lang%" dir="%dir%" class="no-js ie9"> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!--> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="%lang%" lang="%lang%" dir="%dir%" class="no-js"> <!--<![endif]-->
		<head>
			<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
			     Remove this if you use the .htaccess -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
			
	/**
	 * End of file
	 */
	log_message('notice', 'Snippets are loaded!');  