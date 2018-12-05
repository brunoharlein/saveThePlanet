<?php
require "../model/db.php";
require "../model/volunteerManager.php";
if (!empty($_POST)) {
  addVolunteer($db, $_POST);
}
require "../view/addViewVolunteer.php";
// header("location: index.php");

?>
