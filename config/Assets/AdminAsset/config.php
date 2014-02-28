<?php
	return array(
			'scripts' 	=> array(
				'jquery' 		=> array(
							'path' 		=> 'http://code.jquery.com/jquery-1.11.0.js',
							'version'	=> '1',
							'deps' 		=> array()
							),
				'bootstrap-js'	=> array(
							'path' 		=> base_path()."/assets/js/bootstrap.js",
							'version' 	=> '1',
							'deps' 		=> array('jquery')
							)
				),
			'styles' 	=> array(
					'bootstrap-css'	=> array(
							'path' 		=> base_path()."/assets/css/bootstrap.min.css",
							'version' 	=> '1',
							'deps' 		=> array() 
							),
					'bootstrap-theme-css' 	=> array(
							'path' 		=> base_path()."/assets/css/bootstrap-theme.min.css",
							'version' 	=> '1',
							'deps' 		=> array('bootstrap-css')
						)
				)
		);