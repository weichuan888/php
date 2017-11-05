<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>tableau exo 1 php</title>
  </head>
  <body>


        <!-- Crée un array représentant ta famille.
        Affiche son contenu avec la fonction print_r
        Crée un array décrivant tes plats préférés.
        Affiche son contenu avec la fonction print_r
        Crée un array listant tes films et séries préférés.
        En utilisant cet array, affiche uniquement ton film/série préféré


     -->
    <?php
    $pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' );
     echo $pays[2];


    $famille = ["Père", "Mère", "Soeur"];
    print_r ($famille);

    $plats= ["raclette", "steak", "pho", "poulet"];
    print_r ($plats);

    $films_series= ["Big Bang Theory", "How I met your mother", "Friends", "Titanic"];
    echo $films_series [0];



     ?>







  </body>
</html>
