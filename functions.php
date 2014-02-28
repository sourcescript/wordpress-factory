<?php
	require 'bootstrap.php';
	
	function bootstrap()
	{
		CADBootstrap::make();
		Options\Page\OptionsPage::init();
	}

	add_action('init', 'bootstrap');


