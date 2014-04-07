<?php
	function base_path()
	{
		return dirname(__FILE__);
	}
	
	function storage_path()
	{
		return base_path()."/storage";
	}

	function cache_path()
	{
		return storage_path()."/cache";
	}
	function base_url()
	{
		return site_url('/');
	}
	function plugin_url()
	{
		return plugins_url().'/wordpress-factory/';
	}
	function assets_url()
	{
		return plugin_url()."assets/";
	}
	function dd($value)
	{
		var_dump($value);
		die();
	}
	function posts_url()
	{
		return plugin_url()."app/bootstrap.php";
	}

	function current_url()
	{
		return sanitized_current_url('wordpress-factory',true);
	}

	function sanitized_current_url($key = null, $value = null)
	{
		$pageURL = 'http';
 		if ($_SERVER["HTTPS"] == "on") {
 			$pageURL .= "s";
 		}
 		$pageURL .= "://";
 		if ($_SERVER["SERVER_PORT"] != "80") {
  			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
  			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 		}

 		$curWordpressPage = "";

 		$curWordpressPage = explode("page=", $pageURL);
 		 
 		$curWordpressPage = $curWordpressPage[1];

 		$curWordpressPage = explode("&", $curWordpressPage);
 		$curWordpressPage = $curWordpressPage[0];

 		$pageURL = strtok($pageURL,'?');
 		$pageURL = $pageURL."?page=".$curWordpressPage;

 		if($key == null || $value == null) {

 			return $pageURL;
 		}

 		if(strpos($pageURL, $key.'='.$value)) {
 			return $pageURL;
 		}

 		if(strpos($pageURL, '?')) {
 			$pageURL .=  "&".$key.'='.$value;
 		}else {
 			$pageURL .= "?".$key.'='.$value;
 		}
 		return $pageURL;
	}
