<?php
	require 'bootstrap.php';
	
	function bootstrap()
	{
		CADBootstrap::make();
		Core\Core::factorize();
		Options\Page\OptionsPage::init();
		Main\CadObserver::init()->doHooks();
	}

	add_action('init', 'bootstrap');


