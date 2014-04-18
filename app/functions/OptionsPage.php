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
			if(is_admin()) {
				Asset::factorize('back','styles')->queue();
				Asset::factorize('back','scripts')->queue();

				add_action('admin_menu', array($this, 'displayPluginsPage'));
				add_action('admin_init', array($this, 'addSettingsSection'));
			}
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

		public function addSettingsSection()
		{
			$coreOptions = Core::config('options');

			register_setting(
					'wordpress-factory-group',
					'wordpress-factory-options',
					array($this, 'sanitize')
				);

		
		}

		public function sanitize($input)
		{
			return $input;
		}

		public function createPluginspage()
		{
			$options = get_option('wordpress-factory-options');

			if(!$options) {
				$options = array();
			}
			
			echo View::factorize('options/options.html.twig')->load($options);
			return $this;
		}

	}