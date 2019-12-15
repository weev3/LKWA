<?php
error_reporting(0);
session_start();
if(isset($_SESSION['login_user']) && $_SESSION['login_user'] == "admin"){
  $myObj = new \stdClass();
  $myObj->name = "admin";
  $myObj->token=time()+2*24*60*60;
  $data = json_encode($myObj);
  if(array_key_exists('callback', $_GET)){

      header('Content-Type: text/javascript; charset=utf8');

      header('Access-Control-Max-Age: 3628800');
      header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

      $callback = $_GET['callback'];
      echo $callback.'('.$data.');';

  }else{
      // normal JSON string
      header('Content-Type: application/json; charset=utf8');

      echo $data;
  }


}
else {
  $myObj = new \stdClass();
  $myObj->name = "";
  $myObj->token="";
  $data = json_encode($myObj);
  if(array_key_exists('callback', $_GET)){

      header('Content-Type: text/javascript; charset=utf8');

      header('Access-Control-Max-Age: 3628800');
      header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

      $callback = $_GET['callback'];
      echo $callback.'('.$data.');';

  }else{
      // normal JSON string
      header('Content-Type: application/json; charset=utf8');

      echo $data;
  }
}
?>
