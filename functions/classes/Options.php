<?php
	class Options 
	{
		public static function getOptions()
		{
			$coreInstance = Core\Core::instance();

			return get_option($coreInstance->get('option_name'));
		}
	}