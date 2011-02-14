<?php
	/**
	 * Error Logging Interface
	 *
	 * We use this as a simple mechanism to access the logging
	 * class and send messages to be logged.
	 *
	 * @access	public
	 * @return	void
	 */
		function log_message($level = 'error', $message)
		{		
			$levels = array('ERROR' => '1', 'DEBUG' => '2',  'NOTICE' => '3', 'ALL' => '4');
			$level = strtoupper($level);
		
			$treshold = config_item('log_treshold');
			
			if(!isset($levels[$level]) OR $levels[$level] > $treshold)
			{			
				return;
			}
			
			//prepare string
			$line = date('H:i:s').': '.$level.' - '.$message;
		
			//$line = 'test';
		
			//start logging!
			if(!file_exists(config_item('log_path').date("d-m-y").'.log'))
			{
				//create file
				$fle_log = fopen(config_item('log_path').date("d-m-y").'.log','w');
			}
			else
			{
				$fle_log = fopen(config_item('log_path').date("d-m-y").'.log','a');
			}
			
			//write to file
			fwrite($fle_log,  $line."\n");
			
			//close file
			fclose($fle_log);
			
			//use firephp for logging too?
			if(config_item('firephp') === TRUE)
			{
				//is firephp already started?
				if(!isset($firephp))
				{
					start_firephp();
				}
				
				//use firephp
				global $firephp;
				
				$firephp->log($line);
			}
		}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Debugging interface
	 * 
	 * We use this as a simple mechanism to ouput debug values/messages
	 * and to only to this when debugging is enabled in the config
	 *
	 * @acces	public
	 * @return 	void
	 */
	function debug($var, $info)
	{
		global $config;
		
		if($config['debug'] == TRUE)
		{
		 	if($config['firephp'] === TRUE)
		 	{
		 		if(!isset($firephp))
		 		{
		 			start_firephp();
		 		}
		 		
		 		global $firephp;
		 		$firephp->log($var, $info);
		 	}
		 	else
		 	{
				print_r($var);
			}
		}
	}
	// ------------------------------------------------------------------------
	
	/**
	 * Firephp startup
	 */
	function start_firephp()
	{
		//require firephp basefile
		require_once(APPPATH.'ext-libs/php/FirePHPCore/FirePHP.class.php');
		
		ob_start();
		
		global $firephp;
		
		$firephp = FirePHP::getInstance(true);
	}
	
	
	/**
	 * Returns the specified config item
	 *
	 * @access	public
	 * @return	mixed
	 */
		function config_item($item)
		{
			global $config;
		
			if ( ! isset($config[$item]))
			{
				return FALSE;
			}
		
			return $config[$item];
		}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Sets the specified config item
	 *
	 * @access	public
	 * @return	mixed
	 */
		function set_config_item($item, $value)
		{
			global $config;
		
			if ( ! isset($config[$item]))
			{
				return FALSE;
			}
		
			$config[$item] = $value;
			
			return true;
		}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Add - Inclusion interface
	 * 
	 * This function is the most basic and should be always available in
	 * our framework, it's the easy way to include modules!
	 *
	 * @acces	public
	 * @return 	void
	 */
		function add($template_name, $vars = array()){	
			if(substr(config_item('template_path'),-1) != '/'){
				$test = config_item('template_path').'/';
			}
			
			if(file_exists(config_item('template_path').$template_name.'.php'))
			{						
				extract($vars);
			
				include(config_item('template_path').$template_name.'.php');
				
				log_message('notice',$template_name.' was added!');
			}
			/*
			else
			{
				$routes = config_item('routes');
			
				if(isset($routes[config_item('lang')][$template_name]))
				{
					add_language($routes[config_item('lang')][$template_name]);
					include(config_item('template_path').$routes[config_item('lang')][$template_name].'.php');
				}
				else
				{
					add_language('404');
					include(config_item('template_path').'404.php');
					debug('file '.config_item('template_path').$template_name.'.php'.' doesn\'t exists!');
				}
			}
			*/
		}
	// ------------------------------------------------------------------------