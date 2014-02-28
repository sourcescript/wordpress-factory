<?php
	namespace Main;

	class CadObserver extends \Core\Core 
	{
		private static $observerInstance = null;
		public static function init()
		{
			self::$observerInstance = self::factorize();
			return self::$observerInstance;
		}

		public static function getObserverInstance()
		{
			return self::$observerInstance;
		}

		public function doHooks()
		{
			add_action('after_details_backend', array($this, 'showCreateObserver'));
			return $this;
		}

		public function showCreateObserver()
		{
			echo \Core\ViewCore::make('observer/create.html.twig')->load();
		}
	}