<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=saveThePlanet", "root", "root");
}
catch (Exception $e) {
  echo 'Exception reçue : ' .  $e->getMessage() . "\n";
}
 ?>
