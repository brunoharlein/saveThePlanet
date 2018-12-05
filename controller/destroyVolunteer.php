<?php
require "../model/db.php";
require "../model/volunteerManager.php";

$id = intval(htmlspecialchars($_GET["id"]));
$delVolunteer = deleteVolunteer($id, $db);

header("Location: index.php");
?>
