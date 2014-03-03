<?php
	require_once "functions.php";
	require_once base_path()."/../vendor/autoload.php";

	use Symfony\Component\ClassLoader\UniversalClassLoader;

	$config = include "app.php";


	$loader = new UniversalClassLoader();
	$loader->registerNamespaces($config['libs']);
	$loader->register();


	if(!empty($_POST)) {
		require_once "posts.php";
	}else {
		\Core\Core::make($config)->init();
		CadObserver::init()->doHooks();
		CadObserverSettings::factorize()->load();
		if(is_admin()) {
			OptionsPage::make()->load();
		}
	}

