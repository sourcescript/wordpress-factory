<?php

	namespace Core;
	require_once(base_path()."/libs/Twig/Autoloader.php");
	class ViewCore extends \Core\Core
	{
		private static $loader 	=	 null;
		private static $twig 	= 	 null;

		public static function register()
		{
			$core = self::factorize();

			\Twig_Autoloader::register();
			self::$loader = new \Twig_Loader_Filesystem(base_path()."/views");
			self::$twig   = new \Twig_Environment($loader, $core->getSettings());
		}

		public static function getTwig()
		{
			return $twig;
		}

	}