<?php
require "../model/db.php";
require "../model/volunteerManager.php";
require "../model/userManager.php";
require "../service/sessionManager.php";
// var_dump($_POST);

// On vérifie si le formulaire a été rempli
if(!empty($_POST)) {
  //On nettoie les entrées du formulaire
  // $_POST = clearForm($_POST);
  //On récupère l'utilisateur stocké sur le site
  $user = getUser($_POST, $db);
  // var_dump($user);
  //On vérifie si la db a trouvé un utilisateur
  if($user["pseudo"] === $_POST["pseudo"] && $user["password"] === $_POST["password"]) {

  // if(!empty($user) && $_POST["password"], $user["password"]) {
    startSessionUser($user);
    var_dump($_SESSION["user"]);
    header("Location: index.php");
    exit;
  }
  else {
    header("Location: startLogin.php");
    exit;
  }
}
// insertion formulaire
require "../view/startLoginView.php";

 ?>
