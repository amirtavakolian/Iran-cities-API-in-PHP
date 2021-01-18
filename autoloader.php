<?php
$path = dirname(__FILE__, 1) . "/";
include $path ."App/iran.php";

function myAutoloader($className){

  if (file_exists(dirname(__FILE__, 1)."\\".$className.".php")){
   
    include dirname(__FILE__, 1)."\\".$className.".php";
  }
}

spl_autoload_register("myAutoloader");