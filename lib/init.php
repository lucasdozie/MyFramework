<?php
require_once(ROOT.DS.'config'.DS.'config.php');

function __autoload($class_name){
	$lib_path = ROOT.DS.'lib'.DS.strtolower($class_name).'.class.php';
	$controllers_path = ROOT.DS.'app'.DS.'controllers'.DS.str_replace('controllers', '', strtolower($class_name)).'.php';
	$model_path = ROOT.DS.'app'.DS.'models'.DS.strtolower($class_name).'.php';

	$composer_autload = ROOT.DS.'vendor'.DS.'autoload.php';
		
	if(file_exists($lib_path)){
		require_once($lib_path);	

	}
	elseif(file_exists($controllers_path)){
		require_once($controllers_path);	
	}
	elseif(file_exists($model_path)){
		require_once($model_path);
		//echo "$model_path";
	}
	elseif(file_exists($composer_autload)){
		echo $composer_autload;
		require_once $composer_autload;
	}
	else{
		throw new Exception("Failed to include class name: " . $class_name);
	}


}

