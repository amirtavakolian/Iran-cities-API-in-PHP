<?php

include dirname(__FILE__, 4) . "/" . "autoloader.php";

use App\Service\citiesService;
use \App\Utilities\Response;
use App\Utilities\validator;

$citiesServiceObj = new citiesService();

$requestMethod = strtolower($_SERVER['REQUEST_METHOD']);

switch($requestMethod){

  case "get":
   
      $provinceId = $_GET['province_id'] ?? null;

      $data = [
        "province_id" => $provinceId
      ];

      $res = $citiesServiceObj->getCitiess($data);      

      Response::respondeAndDie($res, Response::HTTP_OK);
  break;
  
  case "post":
    $data = $_POST;
    validator::addProvinceValidator($data, "province_id", "name");
    
    $res = $citiesServiceObj->createCity($data);
    echo $res;

    break;

  case "update":
    Response::respondeAndDie($res, Response::HTTP_OK);

  case "delete":
    Response::respondeAndDie($res, Response::HTTP_OK);
      
}