<?php
class init{
	/**
	 * init
	 *
	 * Start up the framework
	 */
	 function init()
	 {
	 	//load config-file
	 	require_once (APPPATH.'/config/settings.php');
	 	
	 	//load common functions
	 	require_once (APPPATH.'/classes/common.php');
	 	
	 	//start logging while we can
	 	log_message('notice', 'Basic settings & common functions are loaded!');
	 	
	 	//load necessary config files
	 	require_once(APPPATH.'/config/routes.php');
	 	require_once(APPPATH.'/config/output.php');
	 	
	 	//load template-classes
	 	require_once(APPPATH.'/config/snippets.php');
	 	require_once(APPPATH.'/classes/template.php');
	 	
	 	//resolve url
	 	$this->resolve_url();
	 }
	 
	 /** 
	  * resolve_url
	  *
	  * Resolves the url to show the right page
	  */
	 function resolve_url()
	 {	 
	 	$requested = $_GET['page'];
	 	
	 	//check if homepage should be loaded
	 	if(!empty($requested))
	 	{
	 	
	 	}
	 	else
	 	{
	 		add(config_item('homepage'));
	 	}
	 }
}