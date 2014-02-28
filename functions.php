<?php
	require 'bootstrap.php';
	
	function bootstrap()
	{
		CADBootstrap::make();
		Core\Core::factorize();
		Options\Page\OptionsPage::init();
	}

	add_action('init', 'bootstrap');


