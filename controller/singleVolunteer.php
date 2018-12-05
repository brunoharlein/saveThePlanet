<?php
require "../model/db.php";
require "../model/volunteerManager.php";

$id = intval(htmlspecialchars($_GET["id"]));
$volunteer = singleVolunteer($id, $db);

require "../view/singleView.php";
 ?>
