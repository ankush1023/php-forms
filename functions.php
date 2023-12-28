<?php
function pr($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
  
}
function validateString($data){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
