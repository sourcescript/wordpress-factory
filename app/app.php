<?php
	return array(
			/*
			 * autoloaded functions should be added to the libs
			 */
			'libs'	=> array(
					'Core' 		=> base_path().'/../vendor/sourcescript/wf-core-framework/src',
					'View' 		=> base_path().'/../vendor/sourcescript/wf-core-framework/src',
					'Assets' 	=> base_path().'/../vendor/sourcescript/wf-core-framework/src',
					"Mail" 		=> base_path()."/../vendor/sourcescript/wf-core-framework/src",
					'Twig'		=> base_path().'/../vendor/twig/twig/lib',
					'Symfony' 	=> base_path()."/../vendor/symfony/symfony/src"
				),
			/*
			 * Since every plugin requires an options page, the title shall be added here
			 */
			'options' 	=> array(
					'page_title' 	=> 'Members Settings',
					'menu_title' 	=> 'Members Settings',
					'capability' 	=> 'manage_options',
					'menu_slug' 	=> 'cupas-members-settings'
				),

			/*
			 * Twig Templating Engine Configs
			 */
			'twig' 		=> array(
					'cache' 	=> false
				)
		);