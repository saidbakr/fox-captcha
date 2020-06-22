<?php
namespace saidbakr\FoxCaptcha;
use FoxCaptcha;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//require('../FoxCaptcha.php');

echo "hi".__DIR__ .'/../FoxCaptcha.php';
$cap = new FoxCaptcha(120,30,5);
