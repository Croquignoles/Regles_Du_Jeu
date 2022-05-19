<?php
include_once("includes/header.php");
?>

<body>
  <div class="container justify-content-center" style="width: 50%">

  <div class="container text-center">
    <p><h1 style="color: #2a9d8f">LES ETAPES DU PROJET</h1></p>
    <p class="py-3"><h3>Le projet s'est segmenté en différentes étapes et les étapes que nous avons suivi ont été chronologiquement les suivantes:</h3></p>
  </div>
  <table>
      <td class = "margin-auto" style="width: 50%">
        <div class="card m-3" style="height: 20em">
          <div style="height: 340px" class = "mx-auto">
            <img src="images/etat_art.jpg" class="card-img-top" style="width: 100%" alt="image état de l'art">
          </div>
          <div class="card-body">
            <h5 class="card-title">Etat de l'art</h5>
            <p class="card-text"></p>
            <a href="etat_de_art.php" class="btn btn-primary">Voir</a>
          </div>
        </div>
      </td>
      <td class = "margin-auto">
        <div class="card m-3" style="height: 20em">
          <div style="height: 340px" class = "mx-auto">
            <img src="images/wonders.png" class="card-img-top" style="width: 50%"  alt="image choix du jeu">
          </div>
          <div class="card-body">
            <h5 class="card-title">Choix du sujet</h5>
            <p class="card-text"></p>
            <a href="choix_jeu.php" class="btn btn-primary">Voir</a>
          </div>
        </div>
      </td>
      <tr>
      <td class = "margin-auto">
        <div class="card m-3" style="height: 20em">
          <div class="mx-auto" style="height:340px">
            <img src="images/observations.jpg" class="card-img-top" style="width: 90%" alt="image observations">
          </div>
          <div class="card-body">
            <h5 class="card-title">Observations</h5>
            <p class="card-text"></p>
            <a href="observations.php" class="btn btn-primary">Voir</a>
          </div>
        </div>
      </td>
      <td class = "margin-auto">
        <div class="card m-3" style="height: 20rem;">
          <div class="mx-auto" style="height:340px">
            <img src="images/chantier.jpg" class="card-img-top" style="width: 100%" alt="image travail des règles">
          </div>
          <div class="card-body">
            <h5 class="card-title">Travail des règles</h5>
            <p class="card-text"></p>
            <a href="travail_regles.php" class="btn btn-primary">Voir</a>
          </div>
        </div>
      </td>
      </tr>
      <tr>
      <td class = "margin-auto">
        <div class="card m-3" style="height: 20rem;">
          <div class="mx-auto" style="height:340px">
            <img src="images/maquette.jpg" class="card-img-top" alt="image réalisation de la maquette">
          </div>
        <div class="card-body">
          <h5 class="card-title">Réalisation de la maquette</h5>
          <p class="card-text"></p>
          <a href="maquette.php" class="btn btn-primary">Voir</a>
        </div>
      </div>
      </td>
      <td class="margin-auto">
        <div class="card mx-3" style="height: 20rem;">
          <div class="mx-auto" style="height:340px">
            <img src="images/test-utilisateur.jpg" class="card-img-top" style="width: 93%" alt="image des tests">
          </div>
          <div class="card-body">
            <h5 class="card-title">Tests utilisateurs</h5>
            <p class="card-text"></p>
            <a href="test.php" class="btn btn-primary">Voir</a>
          </div>
        </div>
      </td>
      </tr>
    </table>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>

<?php
include_once("includes/footer.php");
?>