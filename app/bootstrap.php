<?php
	function base_path()
	{
		return dirname(__FILE__);
	}

	function storage_path()
	{
		return base_path()."/storage";
	}

	function cache_path()
	{
		return storage_path()."/cache";
	}
	function base_url()
	{
		return site_url('/');
	}
	function plugin_url()
	{
		return plugins_url().'/wordpress-factory/';
	}
	function dd($value)
	{
		var_dump($value);
		die();
	}

	require_once base_path()."/../vendor/symfony/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php";
	use Symfony\Component\ClassLoader\UniversalClassLoader;

	$config = include "app.php";
	$loader = new UniversalClassLoader();
	$loader->registerNamespaces($config['libs']);
	$loader->register();

	\Core\Core::make()->init();
