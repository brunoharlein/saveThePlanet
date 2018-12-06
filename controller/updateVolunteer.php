<?php
require "../model/db.php";
require "../model/volunteerManager.php";

var_dump($_GET["id"]);
// $id = intval(htmlspecialchar($_GET["id"]);
// $id = $_GET;


// if (!empty($_POST)) {
  updateVolunteer($db, $id);
// }
require "../view/updateVolunteerView.php";

// header("Location: index.php");

?>
