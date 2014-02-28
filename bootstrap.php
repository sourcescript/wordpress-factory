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
		}
	}

	function base_path()
	{
		return dirname(__FILE__);
	}


	
