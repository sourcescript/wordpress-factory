<?php
	use \Core\Core as Core;
	use \View\View as View;
	use \Assets\Asset as Asset;
	class OptionsPage 
	{
		private static $instance = null;

		public static function make()
		{
			self::$instance = new OptionsPage;
			return self::$instance;
		}

		public function load()
		{
			Asset::factorize('back','styles')->queue();
			Asset::factorize('back','scripts')->queue();

			add_action('admin_menu', array($this, 'displayPluginsPage'));
			return $this;
		}

		public function displayPluginsPage()
		{

			$options = Core::config('options');
			$settings = add_options_page(
					$options['page_title'],
					$options['menu_title'],
					$options['capability'],
					$options['menu_slug'],
					array($this, "createPluginspage")
				);

			return $this;
		}

		public function createPluginspage()
		{
			
			echo View::factorize('options/options.html.twig')->load();
			return $this;
		}

	}