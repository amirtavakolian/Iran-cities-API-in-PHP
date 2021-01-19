<?php

include dirname(__FILE__, 4) . "/" . "autoloader.php";


use App\Service\citiesService;
use \App\Utilities\Response;

$citiesServiceObj = new citiesService();
$res = $citiesServiceObj->getCitiess();


// part 8 - file 3.txt ro bekhon  
// echo Response::responde($res, Response::HTTP_OK);


Response::respondeAndDie($res, Response::HTTP_OK);


