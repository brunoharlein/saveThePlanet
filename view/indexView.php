<?php
include "../view/template/header.php";
 ?>

 <div class="row mt-5 mx-auto">
    <section class="col-lg-6 mx-auto">
      <h2>Liste des volontaires</h2>
      <form action="index.php<?php echo (isset($_POST['choix']))?'?tri='.$_POST['choix']:''; ?>" method="post" name="tri">
            <!-- <form action="emprunts.php?tri=" method="post" name="tri"> -->
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
            <select name="choix" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected>Options</option>
              <option value="1">noms de A à Z</option>
              <option value="2">age</option>
              <option value="3">ville</option>
              <option value="4">dispo</option>
            </select>
          </div>
          <div class="col-auto my-1">
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">ENVOYER</button>
          </div>
        </div>
      </form>

      <div class="container-fluide">
        <div class="row">
          <?php
            //On boucle pour afficher tous les produits contenus dans la variable products
            foreach ($postVolunteers as $key => $volunteer) {
          ?>
          <article class="col-lg-6 my-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $volunteer["userName"] ?></h5>
                <p class="card-text"><?php echo $volunteer["name"] ?></p>
                <p class="card-text"><?php echo $volunteer["age"] ?> ans</p>
                <p class="card-text"><?php echo $volunteer["city"] ?></p>
              </div>
              <div class="card-body">
                <a href="<?php echo 'singleVolunteer.php?id=' . $volunteer['id']; ?>" class="btn lightBg">Voir</a>
              </div>
            </div>
          </article>
          <?php
          //On ferme la boucle
            }
           ?>
        </div>
      </div>
    </section>

    <?php
    include "../view/template/footer.php";
     ?>
