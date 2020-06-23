<?php
namespace saidbakr\FoxCaptcha;
require_once __DIR__ . '/../src/FoxCaptcha.php';
use saidbakr\FoxCaptcha\FoxCaptcha;

session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$cap = new FoxCaptcha(120,30,5);
$cap->en_reload = 'Loading Again';
?>
<form method="post" action="check-test.php">
  <label>Enter The code
    <input type="text" name="anyName" value="" />
  </label>
  <?php $cap->make_it();?>
  <br />
  <input type="submit" value="Validate" />
</form>
