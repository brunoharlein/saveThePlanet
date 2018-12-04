<?php
require "../model/db.php";

$postVolunteers = postVolunteers($db);
require "../view/indexView.php";
 ?>
