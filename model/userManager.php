<?php

// <!-- fonction recuperer un utilisateur -->
function getUser($user, $db) {
  $query = $db->prepare("SELECT * FROM user WHERE pseudo =  ?");
  $query->execute([$user["pseudo"]]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}



?>
