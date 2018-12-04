<?php
require "../model/db.php";
require "../model/volunteerManager.php";


$postVolunteers = postVolunteers ($db);
require "../view/indexView.php";
 ?>
