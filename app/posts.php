<?php
	if(isset($_GET['wordpress-factory'])) {
		if(!isset($_POST['_referrer']) || !isset($_POST['_caller'])) {
			die(); // directly dies
			return;
		} else {
			$caller = $_POST['_caller'];
			try{
				$caller::post();
			}catch(Exception $exs) {
				echo $exs;
				die();	
			}
			header('Location: '.$_POST['_referrer']);
		}
	}

