<?php
	
	namespace Options\Page;

	class OptionsPage
	{

		public function init()
		{
			if(is_admin()) {
				return new OptionsPage;
			}
		}

		public function __construct()
		{
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
					'HourFamilyTX Settings',
					'HourFamilyTX Settings',
					'manage_options',
					'hourfamilytx-settings-admin',
					array($this, 'createAdminPage')
				);
		}


		//
		// Display Pages
		//------------------------------/

		public function createAdminPage()
		{
			$options = \Options::getOptions();
		}
	}
