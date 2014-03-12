<?php
	return array(
			'bootstrap-css'	=> array(
							'path' 		=> assets_url()."css/bootstrap.min.css",
							'version' 	=> '1',
							'deps' 		=> array() 
							),
			'bootstrap-theme-css' 	=> array(
					'path' 		=>	assets_url()."css/bootstrap-theme.min.css",
					'version' 	=> '1',
					'deps' 		=> array('bootstrap-css')
				)
		);