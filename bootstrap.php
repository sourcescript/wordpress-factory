<?php
	class CADBootstrap 
	{
		public static function make()
		{
			spl_autoload_register(function($className)
			{
			    $namespace 	=	str_replace("\\","/",__NAMESPACE__);
			    $className 	= 	str_replace("\\","/",$className);
			    $class 		=  	dirname(__FILE__)."/functions/classes/".(empty($namespace)?"":$namespace."/")."{$className}.php";
			    if(file_exists($class)) {
			    	// echo $class;
			    	include_once($class);
				}
			});
			\Core\ViewCore::register();
		}
	}

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


	
