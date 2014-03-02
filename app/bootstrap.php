<?php
	require_once "functions.php";
	require_once base_path()."/../vendor/autoload.php";

	use Symfony\Component\ClassLoader\UniversalClassLoader;

	$config = include "app.php";


	$loader = new UniversalClassLoader();
	$loader->registerNamespaces($config['libs']);
	$loader->register();


	\Core\Core::make($config)->init();
	OptionsPage::make()->load();
