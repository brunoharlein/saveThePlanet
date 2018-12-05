<?php
require "../model/db.php";
require "../model/volunteerManager.php";

if (isset($_POST['choix'])) {
  switch ($_POST['choix']) {
    case 1:
      $postVolunteers = orderByAz($db);
      break;
      case 2:
        $postVolunteers = age($db);
      break;
      case 3:
        $postVolunteers = city($db);
      break;
}
}else{
$postVolunteers = postVolunteers ($db);

}

// $postVolunteers = postVolunteers ($db);
require "../view/indexView.php";
 ?>
