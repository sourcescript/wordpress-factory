<?php
	return array(
			'jquery' => array(
					'path' 		=> 'http://code.jquery.com/jquery-1.11.0.js',
					'version'	=> '1',
					'deps' 		=> array()
				),
				'bootstrap-js'	=> array(
					'path' 		=> assets_url()."js/bootstrap.js",
					'version' 	=> '1',
					'deps' 		=> array('jquery')
				),
				// 'observer-js' 	=> array(
				// 			'path' 		=> assets_url()."js/observer.js",
				// 			'version' 	=> 1,
				// 			'deps' 		=> array('jquery')
				// 	)
		);