<?php

Config::set('site_name', 'myFramework');
Config::set('site_description', 'My first Framework with php,feeling happy!');
Config::set('languages', array('en', 'fr', 'igbo'));

Config::set('routes', array(
	'default' => '', 
	'admin' => 'admin_',
	)
);

//DIR

//Set the enviroment you want to run your app on
Config::set('ENV', 'Development');

//Home url
Config::set('Home_url', 'http://' . $_SERVER['HTTP_HOST'] . str_replace('public', '', dirname($_SERVER['SCRIPT_NAME'])));

Config::set('TEMPLATE_URI', dirname(dirname(__FILE__)).'/app/view/');

Config::set('app_subFolder', 'myFramework');

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');