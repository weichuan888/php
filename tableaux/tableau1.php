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
     echo '<br/>';

    $famille = ["Père", "Mère", "Soeur"];
    print_r ($famille);
    echo '<br/>';

    $plats= ["raclette", "steak", "pho", "poulet"];
    print_r ($plats);
    echo '<br/>';

    $films_series= ["Big Bang Theory", "How I met your mother", "Friends", "Titanic"];
    echo $films_series [0];
    echo '<br/>';

     ?>
     <!-- Exercice : tableaux associatif

    Décris-toi dans une tableau associatif: $moi.
    Utilise au moins deux valeurs de chaque type:
    texte (par exemple prenom),
    booléenne (par exemple aime_le_foot) et
    Int (par exemple: age, renvoie un chiffre). -->

    <?php
    $moi = [
      'prenom' => 'Weichuan',
      'age' => 24,
      'aime_la_nourriture' => 'true',
    ];
    print_r ($moi);
    echo '<br/>';
    echo $moi ['aime_la_nourriture'];
    echo '<br/>';
    echo '<br/>';
     ?>
     <!-- Exercices : tableau multi-dimensionnels

    Rajoute tes hobbies sous forme de tableau dans ton tableau $moi
    Crée un deuxième tableau similaire au tien, qui décrive ton papa
    (ou une personne de ta famille): $papa.
    Assure-toi d'y avoir également décrit ses hobbies
    Ensuite, à ton tableau $moi,
    ajoute un élément dont la clef est 'papa' et la valeur équivaut à $papa.
    Affiche le contenu de $moi via la fonction print_r().
    (Utilise la balises html <pre> pour rendre cela plus lisible).
    Relis ton code pour t'assurer de comprendre ce qui se passe à chaque ligne. -->

    <?php
    $papa = [
      'prenom' => 'Quang',
      'age' => 70,
      'aime_la_nourriture' => true,
      'hobbies' => array("IT", "lire", "photos")
    ];
    $moi = [
      'prenom' => 'Weichuan',
      'age' => 24,
      'aime_la_nourriture' => 'true',
      'hobbies' => array("musique", "jeux de société", "gastronomie"),
      'papa' => $papa,
    ];
    echo '<pre>';
    print_r ($moi);
    echo '<pre>';
    echo $moi['hobbies'][1];
    echo '<br/>';
    echo $moi ['papa']['hobbies'][1];
    echo '<br/>';
    echo '<br/>';
    echo '<br/>';
     ?>

     <!-- Manipulation des array : Compter

Tu veux savoir combien de hobbies a ton père.
Trouve la fonction PHP qui permette de compter le nombre d'éléments d'un tableau.
Compte tes propres hobbies
Additionne les deux et affiche le résultat
Ajouter
Un ami t'a fait découvrir les joies de la taxidermie.
Trouve la bonne syntaxe pour ajouter le hobby "Taxidermie" à ton tableau de "hobbies".
Remplacer
Tu te disputes avec ton père et tu décides de changer de nom de famille.
Ta contestation n'a d'autre objet que de faire chier le système et
de faire parler de toi dans les médias. Tu choisis donc de porter le nom de Dieudonné.
Comment mettre à jour ton tableau pour refléter ce changement de nom de famille? -->
  <h2>Manipulation des array!</h2>
    <?php


    $moi = [
      'prenom' => 'Weichuan',
      'age' => 24,
      'aime_la_nourriture' => 'true',
      'hobbies' => array("musique", "jeux de société", "gastronomie"),
    ];
    print_r ($moi);
    echo count ($moi, COUNT_RECURSIVE);
    echo '<br/>';
    $papa = [
      'prenom' => 'Quang',
      'age' => 70,
      'aime_la_nourriture' => true,
      'hobbies' => array("IT", "lire", "photos")
    ];
    print_r ($papa);



     ?>



















  </body>
</html>
