<?php
	namespace Assets;

	class FrontAsset extends \Core\Core 
	{
		/*
		 * Create, Read and Load the settings (or the queued scripts) on runtime
		 */

		public static function load($settings = array())
		{
			if(empty($settings)) { 
				$settings = self::getSettings();
			}
			
		}
	}