<?php
	namespace Core;

	class Core 
	{
		/*
		 * The Core Setting of the Wordpress Plugin
		 * Includes the options page name, and the options page namespace
		 */
		private $coreSettings = array();
		/*
		 * The Core Instance of the wordpress plugin
		 */
		private static $instance 	  = null;


		public function __construct($coreSettings = array())
		{
			$this->coreSettings = $coreSettings;
			self::$instance = $this;
		}

		/*
		 * Factorize creates a new instance of the plugin core
		 * @params array - core settings
		 */
		public static function factorize($coreSettings = array()) 
		{
			$class = get_called_class();

			if(count($coreSettings) == 0) {
				$path = base_path()."/config/{$class}/config.php";
				$path = str_replace("\\", "/", $path);
				
				if(file_exists($path)) {
					$coreSettings = include $path;
				}
			}

			return new $class($coreSettings);
		}


		/*
		 * Get the currennt instance of the plugin core
		 */
		public static function instance()
		{
			return self::$instance;
		}

		/*
		 * Get a setting key
		 */
		public function get($instanceName)
		{
			return $this->coreSettings[$instanceName];
		}

		/*
		 * Instantiate a setting
		 */
		public function set($instanceName, $value)
		{
			$this->coreSettings[$instanceName] = $value;
			return $this->get($instanceName);
		}

		/*
		 * Get the whole instance settings
		 */
		public static function getSettings()
		{
			$class = get_called_class();

			if(count($coreSettings) == 0) {
				$path = base_path()."/config/{$class}/config.php";
				$path = str_replace("\\", "/", $path);
				// echo $path;
				$coreSettings = include $path;
			}
			return $coreSettings;
		}

	}