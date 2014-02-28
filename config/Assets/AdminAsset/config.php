<?php
	return array(
			'scripts' 	=> array(
				'jquery' 		=> array(
							'path' 		=> 'http://code.jquery.com/jquery-1.11.0.js',
							'version'	=> '1',
							'deps' 		=> array()
							),
				'bootstrap-js'	=> array(
							'path' 		=> plugin_url()."/assets/js/bootstrap.js",
							'version' 	=> '1',
							'deps' 		=> array('jquery')
							),
				'observer-js' 	=> array(
							'path' 		=> plugin_url().'/assets/js/observer.js',
							'version' 	=> 1,
							'deps' 		=> array('jquery')
					)
				),
			'styles' 	=> array(
					'bootstrap-css'	=> array(
							'path' 		=> plugin_url()."/assets/css/bootstrap.min.css",
							'version' 	=> '1',
							'deps' 		=> array() 
							),
					'bootstrap-theme-css' 	=> array(
							'path' 		=> plugin_url()."/assets/css/bootstrap-theme.min.css",
							'version' 	=> '1',
							'deps' 		=> array('bootstrap-css')
						)
				)
		);