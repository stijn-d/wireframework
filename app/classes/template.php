<?php
	function wf_head($title = '', $close = true)
	{
		$html_v = config_item('html_version');
		$html_e = config_item('html_encoding');
		
		if($html_v && $html_v == 'html5')
		{
			$output_head = config_item('snippet_html5_opening');
			
			//replace lang&direction info
			$output_head = str_replace('%lang%', config_item('html_language'), $output_head);
			$output_head = str_replace('%dir%', config_item('html_dir'), $output_head);
			
			//add meta-header(s)
			$output_head .= '<meta charset="'.config_item('html_encoding').'">
			';
			$output_head .= '<title>'.config_item('head_basetitle').$title.'</title>
			';
			$output_head .= '<meta name="description" content="'.config_item('head_description').'">
			';
			$output_head .= '<meta name="keywords" content="'.config_item('head_keywords').'">
			';
			$output_head .= '<meta name="author" content="'.config_item('head_author').'">
			';
			
			//Favicon
			if(config_item('head_favicon'))
			{
				$output_head .= '<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
				<link rel="shortcut icon" href="'.config_item('head_favicon').'">
				';
			}
			
			//Add js&css based on config
			if(config_item('css_reset'))
			{
				$output_head .= '<link rel="stylesheet" href="'.APPPATH.'ext-libs/css/reset.css">
				';
			}
			
			$js_libs_lst = config_item('js_libs_list');
			$js_libs = config_item('js_libs');
			
			if($js_libs['Modernizr'] === TRUE)
			{
				$output_head .= '<script src="'.$js_libs_lst['Modernizr'].'"></script>
				';
			}
			
			//Mobile additions
			if(config_item('enable_basic_mobile') === TRUE)
			{
				$output_head .= '<!--  Mobile viewport optimized: j.mp/bplateviewport -->
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				';
				
				if(config_item('mobile_apple_icon'))
				{
					$output_head .= '<link rel="apple-touch-icon" href="'.config_item('mobile_apple_icon').'">
					';
				}
				
				if(config_item('css_mobile_base'))
				{
					$output_head .= '<link rel="stylesheet" href="'.APPPATH.'ext-libs/css/handheld.css">
					';
				}
			}
			
			if($close)
			{
				$output_head .= '</head>
				<body>';
			}
		}
		else if($html_v && $html_v == 'xhtml')
		{
			
		}
		else
		{
			$output_head = '';
		}
		
		print $output_head;
	}
	
	function wf_foot()
	{
		$output_foot = '';
	
		$js_libs_lst = config_item('js_libs_list');
		$js_libs = config_item('js_libs');
	
		//check js
		foreach($js_libs as $js_lib => $value)
		{
			if($value && $js_lib != 'Modernizr')
			{
				$output_foot .= '<script src="'.$js_libs_lst[$js_lib].'"></script>';
				if($js_lib == 'Profiler')
				{
					$output_foot .= '<script src="'.APPPATH.'/ext-libs/js/profiling/config.js"></script>';
				}
			}
		}
	
		$output_foot .= '</body>
		</html>';
		
		print $output_foot;
	}
	
	function js($file)
	{
	
	}
	
	function css($file)
	{
	
	}