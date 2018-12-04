<?php
  function postVolunteers ($db) {
    $query = $db->query("SELECT * FROM volunteer");
    $postVolunteers = $query->fetchall(PDO::FETCH_ASSOC);
    return $postVolunteers;
  }

  function addVolunteer ($db) {


  }
  function getProduct($id, $db) {
    $query = $db->prepare("SELECT * FROM product WHERE id=?");
    $query->execute([$id]);
    $product = $query->fetch(PDO::FETCH_ASSOC);
    return $product;
  }


 ?>
