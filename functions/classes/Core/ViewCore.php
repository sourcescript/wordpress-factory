<?php

	namespace Core;
	require_once(base_path()."/libs/Twig/Autoloader.php");
	class ViewCore extends \Core\Core
	{
		private static $loader 	=	 null;
		private static $twig 	= 	 null;
		private static $twigInstance = null;

		private $filepath = "";

		public function __construct($config = array(), $twigInstance = null)
		{
			parent::__construct($config);
			$this->twigInstance = $twigInstance;
		}
		public static function register()
		{
			$core = self::factorize();
			\Twig_Autoloader::register();
			self::$loader = new \Twig_Loader_Filesystem(base_path()."/views");
			self::$twig   = new \Twig_Environment(self::$loader, $core->getSettings());
		}

		public static function getTwig()
		{
			return self::$twig;
		}

		public function getPath()
		{
			return $this->filepath;
		}

		public function setPath($path)
		{
			$this->filepath = $path;
			return $this;
		}


		public static function make($file)
		{

			$viewCore 	= ViewCore::getSettings();
			$instance = new ViewCore($viewCore,  self::getTwig());
			$instance->setPath($file);
			return $instance;
		}

		public function load($array = array())
		{

			return $this->twigInstance->render($this->getPath(), $array);
		}

	}