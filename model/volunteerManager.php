<?php
  function postVolunteers ($db) {
    $query = $db->query("SELECT * FROM volunteer");
    $postVolunteers = $query->fetchall(PDO::FETCH_ASSOC);
    return $postVolunteers;
  }

  function singleVolunteer ($id, $db) {
    $query = $db->prepare("SELECT * FROM volunteer WHERE id=?");
    $query->execute([$id]);
    $volunteer = $query->fetch(PDO::FETCH_ASSOC);
    return $volunteer;
  }

  function addVolunteer($db, $volunteer) {
    $query = $db->prepare("INSERT INTO volunteer (userName, name, age, appreciation, availability, street, city) VALUES(:userName, :name, :age, :appreciation, :availability, :street, :city)");
    $result = $query->execute([
      "userName" => $volunteer["userName"],
      "name" => $volunteer["name"],
      "age" => $volunteer["age"],
      "appreciation" => $volunteer["appreciation"],
      "availability" => $volunteer["availability"],
      "street" => $volunteer["street"],
      "city" => $volunteer["city"]
    ]);
    return $result;
  }


 ?>
