<?php
//Fonction de démarrage standard d'une session utilisateur
function startSessionUser($user) {
  session_start();
  $_SESSION["user"] = $user;
}

//déconnexion
function logout() {
  session_start();
  session_unset();
  session_destroy();
  header("Location: startLogin.php");
}

//Fonction pour restreindre l'accès d'une page à un administrateur authentifié
function restrictToAdmin() {
  session_start();
  if(!isset($_SESSION["user"]) || $_SESSION["user"]["statut"] !== "admin") {
    exit;
  }
}

//Fonction qui nettoie les entrées d'un formulaire
function clearForm($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

 ?>
