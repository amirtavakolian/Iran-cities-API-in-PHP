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

  public function deleteCity($data) {
    return deleteCity($data);
  }

}