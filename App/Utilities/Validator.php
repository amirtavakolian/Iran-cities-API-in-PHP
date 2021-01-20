<?php
namespace App\Utilities;

class validator{

  public static function addProvinceValidator($data){
    if(!isset($data['province_id']) && isset($data['name'])){
      Response::respondeAndDie("Define province id & city name", Response::HTTP_NOT_ACCEPTABLE);
    }
    if(empty($data['province_id']) || empty($data['name'])){
      Response::respondeAndDie("Enter province id and name", Response::HTTP_NOT_ACCEPTABLE);
    }
  }

  public static function updateCityName($cityId, $cityName){
    if(!is_numeric($cityId) or empty($cityId)){
      Response::respondeAndDie("Id is not valid", Response::HTTP_NOT_ACCEPTABLE);
    }

    if(empty($cityName) or !is_string($cityName)){
      Response::respondeAndDie("Enter city name", Response::HTTP_NOT_ACCEPTABLE);
    }

  }

  public static function deleteCity($cityId){
    if(!is_numeric($cityId) or empty($cityId)){
      Response::respondeAndDie("Id is not valid", Response::HTTP_NOT_ACCEPTABLE);
    }
  }

}