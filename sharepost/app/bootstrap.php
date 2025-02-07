<?php 
require_once 'config/config.php';
//autoload Core Libaries
spl_autoload_register(function($className){
    require_once 'librairies/'.$className.'.php';



});