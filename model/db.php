<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=savethePlanet", "root", "root");
}
catch (Exception $e) {
  echo 'Exception reçue : ' .  $e->getMessage() . "\n";
}
 ?>
