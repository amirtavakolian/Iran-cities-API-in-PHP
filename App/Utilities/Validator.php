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

}