<?php
// display all volunteer
  function postVolunteers ($db) {
    $query = $db->query("SELECT * FROM volunteer");
    $postVolunteers = $query->fetchall(PDO::FETCH_ASSOC);
    return $postVolunteers;
  }
// diplay a single volunteer
  function singleVolunteer ($id, $db) {
    $query = $db->prepare("SELECT * FROM volunteer WHERE id=?");
    $query->execute([$id]);
    $volunteer = $query->fetch(PDO::FETCH_ASSOC);
    return $volunteer;
  }
// add volunteer in db
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
// del volunteer
  function deleteVolunteer($id, $db) {
    $query = $db->prepare("DELETE FROM volunteer WHERE id = ?");
    $delVolunteer = $query->execute([$id]);
    return $delVolunteer;
  }
  // userName volunteers A->Z
  function orderByAz($db) {
    $query = $db->query("SELECT * FROM volunteer ORDER by userName");
    $orderAz = $query->fetchall(PDO::FETCH_ASSOC);
    return $orderAz;
  }
  // volunteer age
  function age($db) {
    $query = $db->query("SELECT * FROM volunteer ORDER by age");
    $age = $query->fetchall(PDO::FETCH_ASSOC);
    return $age;
  }
  // city volunteer
  function city($db) {
    $query = $db->query("SELECT * FROM volunteer ORDER by city");
    $city = $query->fetchall(PDO::FETCH_ASSOC);
    return $city;
  }


  // update volunteerManager
  function updateVolunteer($id, $db) {
    $query = $db->prepare("UPDATE volunteer SET userName = :userName, name = :name, age = :age, appreciation = :appreciation, availability = :availability, street = :street, city = :city");

  }



 ?>
