<?php
namespace App\Service;


class citiesService {

  public function getCitiess($data = null)
  {
    return getCities($data);
  }

  public function createCity($data) {
    return addCity($data);
  }

  public function updateCityName($city_id, $city_name){
    return changeCityName($city_id, $city_name);
  }


  public function deleteCity($data) {
    return deleteCity($data);
  }

}