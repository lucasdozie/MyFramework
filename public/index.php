<?php
define('ROOT', dirname(dirname(__FILE__)));
define('DS', DIRECTORY_SEPARATOR);//directory separator

define('VIEW_PATH', ROOT.DS.'app'.DS.'view');

require_once(ROOT.DS.'lib'.DS.'init.php');
$url = $_SERVER['REQUEST_URI'];
App::run($url);


