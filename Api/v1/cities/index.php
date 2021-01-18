<?php

include dirname(__FILE__, 4) . "/" . "autoloader.php";


use App\Service\citiesService;

$citiesServiceObj = new citiesService();
$res = $citiesServiceObj->getCitiess();

echo \App\Utilities\Response::responde($res,200,"OK");




