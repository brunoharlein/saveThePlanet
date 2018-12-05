<?php
include "../view/template/header.php";
 ?>

<div class="row m-5">
   <section class="col-lg-6 mx-auto">
     <h2><?php echo $volunteer["userName"]; ?></h2>
     <h2><?php echo $volunteer["name"]; ?></h2>
     <h3><?php echo $volunteer["street"]; ?></h3>
     <h3><?php echo $volunteer["city"]; ?></h3>
     <div class="container-fluide">
       <?php echo $volunteer["appreciation"]; ?>

     </div>
     <div>
       <span class="badge badge-secondary">Age : <?php echo $volunteer["age"] ?>ans</span>
       <?php
       if($volunteer["availability"] == "oui")  {
         echo "<span class='badge badge-success'>Disponible</span>";
       }
       else {
         echo "<span class='badge badge-danger'>Indisponible</span>";
       }
        ?>
        <h2><a class="badge badge-danger" href="<?php echo 'destroyVolunteer.php?id=' . $volunteer['id']; ?>">DESTROY</a></h2>
     </div>
   </section>
 </div>

 <?php
 include "../view/template/footer.php";
  ?>
