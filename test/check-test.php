<?php
namespace saidbakr\FoxCaptcha;
use saidbakr\FoxCaptcha\FoxCaptcha;
require_once __DIR__ . '/../src/FoxCaptcha.php';

session_start();

/*ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);*/


 $cap = new FoxCaptcha(1,1,1);
 if ($cap->test($_POST['anyName'])){
   echo "<h1>Correct Code</h1>";
 }
 else{
   echo "<h1>Wrong Code!</h1>";
 }
 ?>
