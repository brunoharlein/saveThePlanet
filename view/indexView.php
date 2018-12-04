<?php
include "../view/template/header.php";
 ?>

 <div class="row mt-5">
    <section class="col-lg-9">
      <h2>Nos derniers produits</h2>
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
                <p class="card-text"><?php echo $volunteer["age"] ?></p>
              </div>
              <div class="card-body">
                <a href="<?php echo 'single.php?id=' . $volunteer['id']; ?>" class="btn lightBg">Voir</a>
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
