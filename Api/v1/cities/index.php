<?php

include dirname(__FILE__, 4) . "/" . "autoloader.php";

use App\Service\citiesService;
use \App\Utilities\Response;
use App\Utilities\validator;

$citiesServiceObj = new citiesService();

$requestMethod = strtolower($_SERVER['REQUEST_METHOD']);

// If you wana get data from request's body:
 $requestBodyData = json_decode(file_get_contents("php://input"), true);

switch($requestMethod){

case "get":
      $provinceId = $_GET['province_id'] ?? null;
      $data = [
        "province_id" => $provinceId
      ];

      $res = $citiesServiceObj->getCitiess($data); 
      if(empty($res)){
        // Baiad status code haie dorost befresti daii :D 
        Response::respondeAndDie($res, Response::HTTP_NOT_FOUND);
      }
      Response::respondeAndDie($res, Response::HTTP_OK);
  
  case "post":      
      validator::addProvinceValidator($requestBodyData, "province_id", "name");
      $res = $citiesServiceObj->createCity($requestBodyData);
      Response::respondeAndDie($res, Response::HTTP_CREATED);
    
    case "put":
      [$cityId, $cityName] = [$requestBodyData['city_id'],$requestBodyData['city_name']];
      validator::updateCityName($cityId, $cityName);
      $res = $citiesServiceObj->updateCityName($cityId, $cityName);
      Response::respondeAndDie($res, Response::HTTP_OK);

  case "delete":
    $cityId = $requestBodyData['city_id'];
    validator::deleteCity($cityId);
    $res = $citiesServiceObj->deleteCity($cityId);
    Response::respondeAndDie($res, Response::HTTP_OK);
}