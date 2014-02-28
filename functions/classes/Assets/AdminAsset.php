<?php
	namespace Assets;

	class AdminAsset extends \Core\Core 
	{
		/*
		 * Create, Read and Load the settings (or the queued scripts) on runtime
		 */

		public static function load($settings = array())
		{

			if(empty($settings)) { 
				$settings = self::getSettings();
			}

			$instance = self::factorize($settings);
			
			//do stuff
			foreach($settings as $type 	=> $content) {
				foreach($content as $name => $values) {
					if($type == 'scripts') {
						wp_register_script($name, $values['path'], $values['deps'], $values['version']);
					}else {
						wp_register_style($name, $values['path'], $values['deps'], $values['version']);
					}
				}
			}
			return $instance;
		}


		/*
		 * The queue would enqueue the registered scripts.
		 * @params - queue array - the array of handles, if empty, will load all from the config file
		 */
		public function queue($array = array())
		{
			$settings = self::getSettings();
			foreach($settings as $type 	=> $content) {
				foreach($content as $name => $values) {
					if($type == 'scripts') {
						wp_enqueue_script($name);
					}else {
						wp_enqueue_style($name);
					}
				}
			}
		}
	}