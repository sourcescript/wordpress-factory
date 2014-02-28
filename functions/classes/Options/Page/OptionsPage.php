<?php
	
	namespace Options\Page;

	class OptionsPage extends \Core\Core
	{

		public function init()
		{
			if(is_admin()) {
				self::factorize();
			}
		}

		public function __construct($coreSettings = array())
		{
			parent::__construct($coreSettings);
			$this->pageActions();
		}

		public function pageActions()
		{
			add_action('admin_menu', array($this, 'displayPluginsPage'));
		}

		// 
		// Display Pages
		//----------------------------/

		public function displayPluginsPage()
		{	
			$settings = add_options_page(
					$this->get('option_name'),
					$this->get('option_title'),
					$this->get('option_use'),
					$this->get('option_slug'),
					array($this, 'createAdminPage')
				);
		}


		//
		// Display Pages
		//------------------------------/

		public function createAdminPage()
		{
			$options = \Options::getOptions();
			echo \Core\ViewCore::make('options/options.tpl')->load();
		}
	}
