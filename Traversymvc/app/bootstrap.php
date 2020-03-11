<?php
//Load config
require_once('config/config.php');


//Load libraries
// require_once('libraries/Core.php');
// require_once('libraries/Controller.php');
// require_once('libraries/Database.php');


//Autoload Core labriaries to not to copy every Core file
spl_autoload_register(function($className){
    require_once 'libraries/'.$className.'.php';
});