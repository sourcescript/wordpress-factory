wordpress-factory
=================

#Inspiration
Its very hard for Object-Oriented Developers (Or Developers who uses MVC Frameworks) to develop wordpress plugins due to the difference on the framework and platform. So, i created this little bootstrap framework that would easily help developers to create their own plugin easily.

##components added
	-Twig
	-Autoloader
	-probably eloquent? or a good schema builder
	-storage
	-base_path()
	-cache_path()
	-storage_path()
	-dd()
	-a well fixed documentation


#Installation
You could easily install the plugin plainly. Each component requires a ```config.php```. Since this is a pre-beta plugin framework, there are a little bit of ```offf-issues```

##File Structure
The File structure is composed of the ```Core``` class.

	-functions/classes/Core
	-functions/classes/Options

Each class requires its own ```config.php``` that is found depending on its namespace. for example, ```\Core\Core``` has its ```config.php``` on ```config\Core\Core\config.php```

##Initialization
initialization or bootstrapping happened under ```functions.php``` and autoloads each objects with the use of ```CADBootstrap```.

##Basic Example
###Generating A View Component
Generating a Views Component is as easy as generating it in your own favorite frameworks. With the use of Twig Templating Engine, Wordpress Factory can generate a template easy as
```php
echo \Core\ViewCore::make('options/options.tpl')->load();
```
The Views folder houses all required fields
###Queueing and Registering scripts
```php
\Assets\AdminAsset::load()->queue();
```
###With Config Php
####Creating an Options Page
There is already an options page generated in ```functions\classes\Options\Page\OptionsPage```

```php
//notice that the optionspage already extended \Core\Core to have the generic requirements of the plugins page

public function init()
{
	if(is_admin()) {
		self::factorize();
	}
}
```