<?php
include_once("includes/header.php");
?>
<body>
    <div class="container" style="width: 70%">
    <br/>
    <h1> Choix du jeu à étudier</h1>
    <br/>
    <p>
    Afin de pouvoir nous appuyer sur un exemple concret, il nous a fallu choisir un jeu de base à étudier  et sur lequel baser notre maquette. Le choix du jeu a dû se dérouler vers le début de notre projet afin de pouvoir baser nos différents tests et observations sur ce dernier. 
    </p>
    <table>
        <td width=70%>
            <p>
            Nous avons donc cherché un jeu aux règles plutôt rapides. Elles ne devaient pas être trop complexes sans être triviales. Notre choix s'est dans un premier temps porté sur le jeu 7 Wonders. Ce dernier est un jeu de plateau moyen. Le livret de règles n’est pas très lourd et pourtant il comprend de nombreuses subtilités (notamment concernant les différentes catégories de carte) qui peuvent effrayer un joueur lors de ses premières parties. 
            </p>
            <p>
                Cependant, observer les joueurs jouer à ce jeu serait bien trop long. En effet, la lecture des règles et une première partie dépasseraient rapidement les 1h30 d’observation et donc diminueraient drastiquement le nombre total d'observations que nous pourrions réaliser.
            </p>
        </td>
        <td wigth=30%>
            <img src="images/wonders.png" alt="Boîte du jeu 7Wonders" width=300>
        </td>
    </table>
    <table>
        <td wigth=30%>
            <img src="images/complots.png" alt="Boîte du jeu Complots" width=300>
        </td>
        <td width=70%>
            <p>
            Nous avons donc pris la décision de chercher un nouveau jeu qui en plus de posséder des règles non triviales devait être assez rapide. Nous avons fini par choisir le jeu Complots dont les règles sont grossièrement les suivantes.
            </p>
            <p>
                En début de partie, chaque joueur se voit distribuer 2 cartes qu’il cache aux autres. Chacune d’entre elles correspondant à un personnage ayant des capacités qui lui sont propres. Le joueur doit ensuite être le dernier avec des cartes (un personnage encore en vie). Pour avancer dans le jeu, les joueurs doivent utiliser la ruse en mentant sur les personnages qu’ils possèdent.  
            </p>
            <p>
                Les règles de Complots sont plutôt simples et rapides mais il est difficile de maîtriser les différentes actions de chaque personnage aux premiers abords. Notons que le jeu fournit des petites cartes récapitulatives à chaque joueur permettant de rappeler les différentes actions possibles. Nous ne nous concentrerons pas sur ce principe, bien que nécessaire, qui ne correspond pas au travail demandé par le client.
            </p>
        </td>
</table>
    <img class="margin-center" src="images/cartes.png" alt="cartes présentent dans le jeu">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>

<?php
include_once("includes/footer.php");
?>