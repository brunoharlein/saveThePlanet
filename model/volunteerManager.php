<?php
  function postVolunteers ($db) {
    $query = $db->query("SELECT * FROM volunteers");
    $postVolunteers = $query->fetchall(PDO::FETCH_ASSOC);
    return $postVolunteers;
  }

  function addVolunteer ($db) {
    

  }

 ?>
