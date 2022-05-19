<?php
include_once("includes/header.php");
?>

<body>
    <div class="container justify-content-center" style="width: 50%">
    <h3>Les étapes que nous avons suivis ont été chronologiquement les suivantes</h3>

  <div class="container text-center">
    <p><h1 class = "text-success">LES ETAPES DU PROJET</h1></p>
    <p class="py-3"><h3>Le projet s'est segmenté en différentes étapes</h3></p>
  </div>
  <table>
      <td>
      <div class="card m-3" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="image état de l'art">
        <div class="card-body">
          <h5 class="card-title">Etat de l'art</h5>
          <p class="card-text"></p>
          <a href="etat_de_art.php" class="btn btn-primary">Go check</a>
        </div>
      </div>
      </td>
      <td>
        <div class="card m-3" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="image choix du jeu">
          <div class="card-body">
            <h5 class="card-title">Choix du sujet</h5>
            <p class="card-text"></p>
            <a href="choix_jeu.php" class="btn btn-primary">Go check</a>
          </div>
        </div>
      </td>
      <tr>
      <td>
        <div class="card m-3" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="image observations">
          <div class="card-body">
            <h5 class="card-title">Observations</h5>
            <p class="card-text"></p>
            <a href="observations.php" class="btn btn-primary">Go check</a>
          </div>
        </div>
      </td>
      <td>
        <div class="card m-3" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="image travail des règles">
          <div class="card-body">
            <h5 class="card-title">Travail des règles</h5>
            <p class="card-text"></p>
            <a href="travail_regles.php" class="btn btn-primary">Go check</a>
          </div>
        </div>
      </td>
      </tr>
      <tr>
      <td>
        <div class="card mx-3" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="image des tests">
          <div class="card-body">
            <h5 class="card-title">Tests utilisateurs</h5>
            <p class="card-text"></p>
            <a href="test.php" class="btn btn-primary">Go check</a>
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