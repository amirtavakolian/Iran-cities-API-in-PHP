<?php 
namespace App\Utilities;

class Response {

  public static function responde($data, $stsCode, $msg)
  {
    header("http 1/1 {$stsCode} {$msg}");
    header("application-content", "application/json");
    return json_encode($data);
  }
}